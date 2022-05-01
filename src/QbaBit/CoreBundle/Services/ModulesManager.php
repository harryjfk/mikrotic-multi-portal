<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 1/02/18
 * Time: 18:09
 */

namespace QbaBit\CoreBundle\Services;


use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use QbaBit\CoreBundle\Traits\ServiceContainer;

class ModulesManager
{
    use ServiceContainer;

    private $logger;

    private $ajax;

    public function init($ajax)
    {
        $this->ajax = $ajax;


    }

    protected function getLogger()
    {
        if ($this->logger == null) {
            $this->logger =
                $this->container->get("qba_bit_core.modal.logger");
            $this->logger->init($this->ajax);

        }

        return $this->logger;

    }

    public function hasDependencies($dependencies, $return_missing = false, $parent = false)
    {
        $r = array();
        if ($parent == true) {

            $installed = $this->getInstalled();
            //   var_dump($installed);
            foreach ($installed as $install)
                foreach ($install["dependences"] as $value)
                    foreach ($value as $k => $v)
                        if ($dependencies["module"] == $k && $dependencies["version"] == $v)
                            $r[$install["id"]] = $install["version"];
        } else
            foreach ($dependencies as $value)
                foreach ($value as $k => $v) {
                    $installed = $this->getInstalled(array("id" => $k, "version" => $v));

                    if (count($installed) == 0)
                        if ($return_missing)
                            $r[$k] = $v;
                        else
                            return false;

                }

        if (count($r) > 0)
            return $r;

        return true;
        // ;
        // var_dump($installed);


    }


    private $temp_module;

    public function install($module, $version, $doBackup = true)
    {
        if ($doBackup) {
            $backup = $this->container->get("qba_bit_core.manager.system");
            $backup->init($this->getLogger());
            $backup->restorePoint("Before Installing " . $module . ":" . $version);
        }

        $installed = $this->getInstalled(array("id" => $module, "version" => $version));
        if (count($installed) > 0) {
            $this->getLogger()->doLog("Modulo ya esta instalado", 100, 100, "already" . $module, false);
            return;
        }

            $this->temp_module = $module;
            $client = new Client();
            $folder = $this->container->getParameter("kernel.project_dir") . "/src/QbaBit";
           if(file_exists($this->container->getParameter("kernel.project_dir") . "/bin/temp/")===false)
            mkdir($this->container->getParameter("kernel.project_dir") . "/bin/temp/" );
            $file = $this->container->getParameter("kernel.project_dir") . "/bin/temp/" . $module . ".zip";
            $t = 0.0;
            $url = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
            $url = ($url["modules"]["file"]);

            $url = str_replace("{version}", str_replace(".",',',$version), str_replace("{id}", $module, $url));


            $result = $client->request(
                'GET',
                $url,
                [

                    'progress' => function (
                        $downloadTotal,
                        $downloadedBytes,
                        $uploadTotal,
                        $uploadedBytes
                    ) {

                        //   if ($downloadTotal == 0)
                        //      $downloadTotal = 1;
                        //  $pr = $downloadedBytes * 100 / $downloadTotal;
                        $this->getLogger()->doLog("Descargando", $downloadedBytes, $downloadTotal, "downloading" . $this->temp_module, true);

                    },
                    'sink' => $file
                ]
            );

            $this->getLogger()->doLog("Descarga Terminada", 100, 100, "downloading" . $module, false);
            $this->getLogger()->doLog("Extrayendo archivos", 100, 100, "extracting" . $module, false);


            $zip = new \ZipArchive();
            if ($zip->open($file, \ZipArchive::CREATE) !== TRUE) {
                exit("cannot open <$file>\n");
            }

            $zip->extractTo($folder);

            $zip->close();
            unlink($file);


            $this->getLogger()->doLog("Extraccion Terminada", 100, 100, "extracting" . $module, false);
            $this->getLogger()->doLog("Verificando Dependecias", 100, 100, "dependencies" . $module, false);

            $n_folder = $folder . "/" . ucfirst($module) . "Bundle/Resources/config/install.json";
            $t = json_decode(file_get_contents($n_folder), true);
            $dependen = $this->hasDependencies($t["dependences"], true);
            if (is_array($dependen)) {
                $this->getLogger()->doLog("Instalando Dependecias", 100, 100, "dependencies" . $module, false);
                foreach ($dependen as $t => $v)
                    if ($this->install($t, $v,false) == false) {
                        $this->getLogger()->doLog("Existen errores en los bundles", 100, 100, "error" . $module, false);
                        return false;
                    }

            }

            $this->getLogger()->doLog("Registrando modulo", 100, 100, "register" . $module, false);
            $php = new PhpFileManipulator();
            $n_folder = $folder . "/" . ucfirst($module) . "Bundle/";
            $r = array();
            $this->container->get("qba_bit_core.file.utils")->getFiles($n_folder, $r, false);

            $cl = $php->getFullClassName($r[0]);
            unset($r);
            $this->container->get("qba_bit_core.class.utils")->addBundle($cl, true);
            $this->getLogger()->doLog("Registro Terminado", 100, 100, "register" . $module, false);


            $kernel = (dirname($this->container->getParameter("kernel.root_dir")));
            $t = $this->container->getParameter("kernel.project_dir") . "/src/QbaBit/CoreBundle/Tests/Controller/ModuleControllerTest.php";
            $exec = "phpunit   " . $t . " --filter testStart -c $kernel/phpunit.xml.dist  ";


            $s = array();
            exec($exec . "      ", $s);
            $this->getLogger()->doLog("Verificando integridad del sistema", 100, 100, "integrity" . $module, false);

            if (array_search("ERRORS!", $s) !== false) {
                $this->getLogger()->doLog("Existen errores con el modulo" . $module . " version " . $version, 100, 100, "error" . $module, false);
                $backup = $this->container->get("qba_bit_core.manager.system");
                $backup->init($this->getLogger());
                $backup->restore();
                return false;
            }

          $this->container->get("qba_bit_test.manager")->testAll($this->getLogger());
            $this->getLogger()->doLog("Verificacion de integridad del sistema terminada", 100, 100, "integrity_complete" . $module, false);

            return true;


    }

    public function uninstall($module, $version)
    {
        $installed = $this->getInstalled(array("id" => $module, "version" => $version));
        if (count($installed) == 0) {
            $this->getLogger()->doLog("Modulo no se encuentra instalado", 100, 100, "already" . $module, false);
            return;
        }

        if($installed[$module]["required"]=="true")
        {
            $this->getLogger()->doLog("Modulo no se puede eliminar", 100, 100, "already" . $module, false);
            return;
        }
        $t = $this->hasDependencies(array("module" => $module, "version" => $version), true, true);


        if (is_array($t))
            foreach ($t as $k => $v)
                $this->uninstall($k, $v);

        $this->getLogger()->doLog("Eliminando regitro", 100, 100, "register" . $module, false);
        $folder = $this->container->getParameter("kernel.project_dir") . "/src/QbaBit";

        $n_folder = $folder . "/" . ucfirst($module) . "Bundle/";
        $r = array();
        $this->container->get("qba_bit_core.file.utils")->getFiles($n_folder, $r, false);
        $php = new PhpFileManipulator();
        $cl = $php->getFullClassName($r[0]);
        unset($r);
        $this->container->get("qba_bit_core.class.utils")->removeBundle($cl);
        $this->getLogger()->doLog("Registro eliminado ", 100, 100, "register" . $module, false);
        $this->getLogger()->doLog("Eliminando archivos ", 0, 100, "files" . $module, false);
        $this->container->get("qba_bit_core.file.utils")->removeDir($n_folder);
        $this->getLogger()->doLog("Archivos borrados correctamente ", 100, 100, "files" . $module, false);


    }

    public function getInstalled($filter = null)
    {
        $installed = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules();
        $r = array();
        foreach ($installed as $module) {
            $s = $module->getInstallInfo();
            $valid = true;
            if ($filter != null) {
                foreach ($filter as $k => $v)
                {
                    if(trim($v)!=="")

                    $valid = $valid && strpos(strtolower($s[$k]),strtolower( $v))!==false;
                }

            }
            if ($valid) {

                $r[$s["id"]] = $s;
            }
        }

        return $r;

    }

    public function getListFromServer($filter = null)
    {
        $client = new Client();

        $url = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
        $url = ($url["modules"]["url"]);

        if($filter==null)
            $filter =array();

            $source = array("id"=>"","name"=>"","version"=>"");
            foreach ($source as $k=>$v)
                if(array_key_exists($k,$filter)===false)
                    $filter[$k]=$v;

        foreach ($filter as $k => $v)

                $url = str_replace("{".$k."}",$v,$url);

        $result = $client->request(
            'GET',
            $url,
            [

            ]
        );
        $data = json_decode($result->getBody()->getContents(),true);


          return $data;

    }

    public function getModule($name)
    {
        $t = $this->getList(array("id" => $name));
        if (count($t) > 0)
            return $t[$name];
        return null;
    }

    public function getList($filter = null)
    {
        $aviable = $this->getListFromServer($filter);
        $installed = $this->getInstalled($filter);

        $result = array();
        foreach ($aviable as $module) {
            $state = "";
            if (array_key_exists($module["id"], $installed)) {

                if ($installed[$module["id"]]["version"] == $module["version"])
                    $state = "installed";
                else
                    if ($installed[$module["id"]]["version"] < $module["version"])

                        $state = "upgrade";
                    else

                        $state = "obsolete";
            } else
                $state = "non-installed";
            $module["state"] = $state;
            $result[$module["id"]] = $module;
            // var_dump($module->getInstallInfo());
        }
        foreach ($installed as $install)

            if (array_key_exists($install["id"], $result) == false) {
                $state = "installed";
                $install["state"] = $state;
                $result[$install["id"]] = $install;
            }
        return $result;

    }

}