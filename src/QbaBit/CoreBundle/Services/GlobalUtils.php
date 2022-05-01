<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 19/11/2016
 * Time: 21:05
 */

namespace QbaBit\CoreBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\LanguageBundle\Entity\Language;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Yaml\Yaml;

class GlobalUtils
{
    use ServiceContainer;
    private $bundles;

    public function getEnviroment()
    {
        $r = $this->get("request_stack")->getCurrentRequest()->server->get("REQUEST_URI");
        return strpos($r, "/admin") !== false ? "BackEnd" : "FrontEnd";
    }

    public function getQbaBitModules($modules = null, $include_core = false)
    {
        $kernel_modules = $this->container->get('kernel')->getBundles();
        $result = array();

        foreach ($kernel_modules as $k => $kernel_module)

            if ((get_parent_class($kernel_module) == 'QbaBit\CoreBundle\QbaBitBaseBundle') || ($include_core && get_class($kernel_module) == 'QbaBit\CoreBundle\QbaBitCoreBundle')) {

                if ($modules == null) {

                    if ($kernel_module->getEnabled())
                        $result[$k] = $kernel_module;

                } else {
                    $i = array_search($kernel_module->getCode(), $modules) /*&& $kernel_module->getEnabled()==true*/
                    ;
                    // if($type=='' || $type==$kernel_module->getType())
                    if ($i !== false || ($include_core && get_class($kernel_module) == 'QbaBit\CoreBundle\QbaBitCoreBundle')) {
                        $str = $i === false ? $k : $modules[$i];
                        $result[$str] = $kernel_module;
                    }
                }


            }

            if($modules!=null)
        if (count($modules) == 1)
            if (count($result) > 0)
                return $result[$modules[0]];
        return $result;
    }

    public function hasQbaBitModule($module_name)
    {
        $modules = $this->getQbaBitModules(array($module_name));
        if(is_array($modules))
        return count($modules) > 0;
        return $modules!=null;
    }


    public function getUsableConfig($asValue = false)
    {
        $configs = array('core' => $this->container->getParameter('config.qba_bit_core'));

        $modules = $this->getQbaBitModules();

        foreach ($modules as $m)
            $configs[str_replace('config.qba_bit_', '', str_replace("config.qba_bit_", "", $m->getConfigFullName()))] = $this->container->getParameter($m->getConfigFullName());
        $configs = $this->checkForParams($configs, null, $asValue);

        return $configs;
    }

    public function checkForParams($configs, $global = null, $asValue = false)
    {


        foreach ($configs as $k => $v)
            if (is_array($v))
                $configs[$k] = $this->checkForParams($v, $global == null ? $configs : $global);
            else {
                if (!is_object($v))
                    if (strpos($v, '@') !== false) {
                        $services = $this->getConfigValueServices($v, "@");
                        foreach ($services as $serv) {
                            $t = str_replace('@', '', $serv);
                            $replace = $this->getConfigValue($t, $global);
                            $res = str_replace($serv, $replace, $v);
                            $configs[$k] = $res;
                        }
                    }else
                if (strpos($v, '%') !== false) {
                    $services = $this->getConfigValueServices($v, "%");

                    foreach ($services as $serv) {
                       $t = str_replace('%', '', $serv);
                        $replace= $this->container->getParameter($t);

                        $res = str_replace($serv, $replace, $v);
                        $configs[$k] = $res;
                    }
                }
                    else

                        if (strpos($v, '#') !== false && $asValue == true && $this->hasQbaBitModule("options")) {

                            $configs[$k] = $this->container->get('qbabit.options.utils')->getConfigValue($v);
                        }

            }


        return $configs;
    }

    private function getConfigValueServices($value, $prefix)
    {
        $result = array();
        $read = false;
        $t = "";
        for ($i = 0; $i < strlen($value); $i++) {
            $s = $value[$i];
            if ($s == $prefix) {
                if ($read) {
                    $t .= $s;

                    $result[] = $t;
                    $t = "";
                }
                $read = !$read;
            }

            if ($read)
                $t .= $s;


        }
        return $result;
    }


    public function getCrudControllers()
    {
        $manipulator = new PhpFileManipulator();
        $modules = $this->getQbaBitModules(array());
        $result = array();

        foreach ($modules as $module) {
            $path = ($module->getPath());
            $base = dirname($path);
            if (is_dir($path . "/Controller")) {
                $path = $path . "/Controller";
                $t = array();
                $this->container->get("qba_bit_core.file.utils")->getFiles($path, $t, true);


                foreach ($t as $controller)
                    if ($controller != $base . "/CoreBundle/Controller/Base/QbaBitCrudController.php" && $controller != $base . "/CoreBundle/Controller/Base/QbaBitBaseController.php") {
                        $class = $manipulator->getClassName($controller);
                        $namespace = $manipulator->getNameSpace();

                        $class_name = $namespace . "\\" . $class;
                        $r = new Reflection($class_name);
                        $parents = $r->getParentClasses();
                        $f = false;
                        foreach ($parents as $parent)
                            if ($parent->getName() == "QbaBit\CoreBundle\Controller\Base\QbaBitCrudController") {
                                $f = true;
                                break;
                            }


                        if ($f == true)
                            $result[] =$class_name;

                        unset($r);
                        unset($parents);
                        unset($t);

                    }

            }


        }

        return $result;
    }

    // Este metodo busca mediante una direccion por ejemplo qba_bit_store.uploads.market.web
    public function getConfigValue($name, $configs = null)
    {
        $t = explode('.', $name);
        $t[0] = str_replace('qba_bit_', '', $t[0]);
        if ($configs != null) {
            $r = array();
            foreach ($configs as $k => $m)
                $r[str_replace("qba_bit_", "", $k)] = $m;
            $configs = $r;
        }


        $result = $configs == null ?
            $this->getUsableConfig() : $configs;

        foreach ($t as $s) {
            start:
            if (array_key_exists($s, $result) !== false)
                $result = $result[$s];

            else {
                if ($this->hasQbaBitModule($s)) {
                    $t = $this->getQbaBitModules(array($s))->getConfig();
                    $result = array_merge(array($s => $t), $result);
                    goto start;
                } else

                    return null;
            }

        }

        if (is_array($result) == false) {
            if (strpos($result, '@') !== false) {
                $services = $this->getConfigValueServices($result, "@");
                foreach ($services as $serv) {
                    $t = str_replace('@', '', $serv);
                    $replace = $this->getConfigValue($t, $configs);
                    $res = str_replace($serv, $replace, $result);
                    $result = $res;
                }
            }
            if (strpos($result, "%") == false) {

                $services = $this->getConfigValueServices($result, "%");
                foreach ($services as $serv) {
                    $t = str_replace('%', '', $serv);
                    $replace = $this->container->getParameter($t);
                    $res = str_replace($serv, $replace, $result);
                    $result = $res;
                }
            }
        }


        return $result;
        // echo $config;*/

    }
    /*
    public function getUsableModules()
    {
        $configs = array('core' => $this->container->getParameter('config.qbabit_core'));
        return $configs['core']['modules'];
    }







    //aqui va si es modificar clase es con 0 y 1 es si puede entrar a una url
    public function getPrivilegies($module, $type)
    {
        return array('new' => true, 'delete' => true, 'edit' => 'true');

    }



    public function getModuleByNavs($env)
    {
        $m = $this->getQbaBitModules($this->getUsableModules());
        $t = array();
        $min = 99999999999999;
        $max = 0;
        foreach ($m as $k => $v) {

            $p = $v->getNavigator($env);
            if ($p != null) {

                $pr = $p['priority'];
                if (array_key_exists($pr, $t) == false)
                    $t[$pr] = array();
                $f = array();
                if (array_key_exists('params', $p) == false)
                    $f['params'] = array();
                else
                    $f['params'] = $p['params'];
                $f['url'] = $p['url'];
                $t[$pr][] = $f;
                if ($min > $pr)
                    $min = $pr;
                if ($max < $pr)
                    $max = $pr;
            }

        }
        $result = array();
        for ($i = $min; $i <= $max; $i++)
            if (array_key_exists($i, $t))
                $result[$i] = $t[$i];

        return $result;

    }



    public function getBasicConfiguration()
    {
        $config = $this->container->get('qbabit_core.global.fileparser');
        $file = $config->getConfigFile($config->getKernelFileDir());
        $result = array();
        foreach ($file as $k => $v)
            if (strpos($k, 'qba_bit') !== false) {
                $result[str_replace('qba_bit_', '', $k)] = $v;
            }
        return $result;
    }





    public function getStoredMenus(array $array = null, $invert = false, $get_all = true, $as_array = false)
    {
        $result = array();
        $file_parser = $this->container->get('qbabit_core.global.fileparser');
        $parameter_dir = $file_parser->getParameterFileDir();
        $paramters = $file_parser->getConfigFile($parameter_dir);
        $menu = $file_parser->getVar($paramters, 'parameters');
        $menu = $file_parser->getVar($menu, 'menus');
        if ($as_array == true)
            return $menu;
        foreach ($menu as $k => $m) {
            $v = $array == null;

            if (!$v)
                $v = $this->findinArray($array, $k);
            if (($array == null) || ($v !== false && $invert == false) or ($invert == true && $v === false))
                if (array_key_exists('type', $m)) {
                    if ($m['type'])
                        if ($get_all)
                            $result[$k] = (new ResourceMenuData($this->container, $m['src']))->getData();
                        else {
                            $t = array('caption' => $m['caption'], 'href' => $m['src'], 'type' => 1);
                            $result[$k] = (new StaticMenuData($this->container, $k, $t))->getData();
                        }
                } else
                    $result[$k] = (new StaticMenuData($this->container, $k, $m))->getData();
        }
        return $result;
    }
*/


}