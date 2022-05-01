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

class SystemManager
{
    use ServiceContainer;

    private $logger;

    public function init(RequestClientLogger $logger = null)
    {
        $this->logger = $logger;

    }

    public function getLogger()
    {
        if ($this->logger == null) {
            $this->logger = $this->container->get("qba_bit_core.modal.logger");
        }
        return $this->logger;
    }

    public function getFolder()
    {
        $folder = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig()["system_manager"]["folder"];
        return $folder;
    }

    protected function getDiferences($compilance, $new)
    {
        $deleted = array();
        $modified = array();
        $added = array();
        $base = array();
        foreach ($compilance as $k => $value) {
            if (array_key_exists($k, $new)) {
                if ($value != $new[$k])
                    $modified[$k] = $new[$k];
                else
                    $base[$k] = $value;
            } else
                $deleted[$k] = $value;
        }
        foreach ($new as $k => $value) {
            if (array_key_exists($k, $compilance)) {
                if ($value != $compilance[$k])
                    $modified[$k] = $compilance[$k];
                else
                    $base[$k] = $value;
            } else
                $added[$k] = $value;
        }


        return array("deleted" => $deleted, "added" => $added, "modified" => $modified);
    }

    protected function deleteAvoid($files)
    {
        $result = array();
        $avoid = $this->container->getParameter("kernel.project_dir") . "/var";
        foreach ($files as $k => $v)
            if (strpos($k, $avoid) === false)
                $result[$k] = $v;
        return $result;
    }

    public function restore($id = null)
    {
        $restore = $this->getRestorePoint($id);

        $dir = $this->container->getParameter("kernel.project_dir");
        $this->getLogger()->doLog("Iniciando restauracion con archivo" . $restore, 1, 1, "db", false);

        rename($dir, $dir . "_old");

        $zip = new \ZipArchive();
        if ($zip->open($restore . ".zip", \ZipArchive::CREATE) !== TRUE) {
            die ("Unable to open Archive");
        }
        $zip->extractTo($dir);
        $zip->close();
        $this->container->get("qba_bit_core.file.utils")->removeDir($dir . "_old");

        $this->getLogger()->doLog("Restaurando Base de datos", 1, 1, "db", false);
        $delete = "DROP DATABASE " . $this->container->getParameter("database_name") . "; CREATE DATABASE " . $this->container->getParameter("database_name") . ";";

        $this->container->get("doctrine.orm.default_entity_manager")->getConnection()->exec($delete);
        $nameFile = $restore . '.sql';
        $stringDump = sprintf("%s -u %s %s %s < %s", "mysql", $this->container->getParameter('database_user'), $this->container->getParameter('database_password') ? '-p' . $this->container->getParameter('database_password') : '', $this->container->getParameter('database_name'), $nameFile
        );

        system($stringDump);
        $this->getLogger()->doLog("Restaura de Base de datos completada", 1, 1, "db", false);


    }

    public function restorePoint($description)
    {
        $compilanceData = $this->getCompilanceData();
        $dir = $this->container->getParameter("kernel.project_dir");
        $files = array();

        $this->container->get("qba_bit_core.file.utils")->getFiles($dir, $files, true, true);
        $files = $this->deleteAvoid($files);
        $file = array();
        $name = ($compilanceData == null ? "initialRestorePoint" : "restorePoint") . ((new \DateTime()))->format("Y-m-d-H:i:s");
        $filename = $this->getFolder() . $name;

        $file["name"] = $name;
        $file["description"] = $description;
        if ($compilanceData == null)
            $compilanceData = array();
        $file["files"] = $this->getDiferences($compilanceData, $files);
        file_put_contents($filename, json_encode($file));
        $filename .= ".zip";
        $zip = new \ZipArchive();
        if ($zip->open($filename, \ZipArchive::CREATE) !== TRUE) {
            die ("Unable to open Archive");
        }

        $c = 1;
        $this->getLogger()->doLog("Iniciando compresion de datos", 1, 1, "compacting", false);


        foreach ($files as $f => $value) {

            if (is_dir($f) == false) {
                $this->getLogger()->doLog("Compactando", $c, count($files), "compacting", true);
                $zip->addFile($f, str_replace($dir, "", $f)) or die ("ERROR: Unable to add file: $f");
            }
            $c++;
        }

        $zip->close();
        $this->getLogger()->doLog("Compresion de datos terminada", 1, 1, "compacting", false);
        $this->getLogger()->doLog("Salvando Base de datos", 1, 1, "db", false);

        $nameFile = $name . '.sql';
        $stringDump = sprintf("%s -u %s %s --opt %s > %s", "mysqldump", $this->container->getParameter('database_user'), $this->container->getParameter('database_password') ? '-p' . $this->container->getParameter('database_password') : '', $this->container->getParameter('database_name'), $this->getFolder() . $nameFile
        );

        system($stringDump);
        $this->getLogger()->doLog("Salva de Base de datos completada", 1, 1, "db", false);
        $this->getLogger()->doLog("Salva creada satisfactorimente con id - " . $name, 1, 1, "compacting", false);

    }

    public function getRestorePoints($filter = null, $includeContent = false)
    {
        $files = array();
        $this->container->get("qba_bit_core.file.utils")->getFiles($this->getFolder(), $files, true);
        $result = array();
        $id = null;
        if ($filter != null)
            if (array_key_exists("id", $filter))
                $id = $filter["id"];
        foreach ($files as $v) {
            if (strpos($v, ".zip") === false && strpos($v, ".sql") === false && ($id == null || ($id != null && strpos($v, $id) !== false)))
                $result[] = $v;
        }

        for ($i = 0; $i < count($result); $i++)
            for ($k = $i + 1; $k < count($result); $k++) {
                $date1 = substr($result[$i], strlen($result[$i]) - 19);
                $date2 = substr($result[$k], strlen($result[$k]) - 19);

                if ($date1 > $date2) {
                    $temp = $result[$i];
                    $result[$i] = $result[$k];
                    $result[$k] = $temp;
                }
            }
        $result1 = array();
        $rangeStart = null;
        $rangeEnd = null;
        if ($filter != null)
            if (array_key_exists("rangeStart", $filter)) {
                $rangeStart = $filter["rangeStart"];
                $rangeEnd = $filter["rangeEnd"];
            }

        foreach ($result as $t) {
            $date1 = substr($t, strlen($t) - 19);
            $date1 = substr($date1, 0, 10) . " " . substr($date1, 11);
            $s = explode("/", $t);
            $id = $s[count($s) - 1];
            unset($s);
            $file_size = $this->container->get("qba_bit_core.file.utils")->formatBytes(array($t . ".zip", $t . ".sql", $t));
            $f = json_decode(file_get_contents($t), true);


            $valid = true;
            if ($rangeEnd != null && $rangeStart != null) {
                $date = new \DateTime($date1);
                $valid = $rangeStart <= $date && $date <= $rangeEnd;
            }
            if ($valid) {
                $rs = array("path" => $t, "id" => $id, "description" => $f["description"], "size" => $file_size, "date" => $date1);
                if ($includeContent)
                    $rs["content"] = $f;
                $result1[] = $rs;
            }
            unset($f);
        }
        unset($result);
        if (count($result1) == 1)
            return $result1[0];
        return $result1;
    }

    public function getCompilanceData()
    {
        $points = $this->getRestorePoints();
        $files = array();
        foreach ($points as $file) {

            $t = json_decode(file_get_contents($file["path"]), true);

            $files = array_merge($t["files"]["added"], $files);
            $files = array_merge($t["files"]["modified"], $files);
            $files = array_diff($files, $t["files"]["deleted"]);
        }


        if (count($files) == 0)
            return null;
        return $files;

    }

    public function getRestorePoint($id = null)
    {
        $points = $this->getRestorePoints($id);
        $point = null;
        if ($id == null)
            $point = $points[count($points) - 1];
        else
            $point = $points;
        return $point;
    }


}