<?php

namespace QbaBit\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Yaml\Yaml;

class QbaBitBaseBundle extends Bundle
{

    public function getType()
    {
        return "module";
    }

    public function getCode()
    {
    }

    public function getFullName()
    {
        return "qba_bit_" . $this->getCode();
    }

    public function getConfigFullName()
    {
        return "config.qba_bit_" . $this->getCode();
    }

    public function getDir()
    {


    }

    public function getEnabled()
    {
        return true;
    }

    public function getMenu()
    {
        $config = $this->getConfig();
        $result = null;
        $enviroment = $this->container->get("qba_bit_core.global.utils")->getEnviroment();
        if (array_key_exists("menu", $config)) {


            $result = $config["menu"];
            if ($result != null)
                if (array_key_exists(strtolower($enviroment), $result))
                    $result = $result[strtolower($enviroment)];
                else
                    $result = null;
            if ($result != null)
                $result = $this->container->get(str_replace("@", "", $result));
        }
        return $result;

    }

    public function getNavigator()
    {
        $config = $this->getConfig();
        $result = null;
        $enviroment = $this->container->get("qba_bit_core.global.utils")->getEnviroment();
        if (array_key_exists("navigator", $config)) {


            $result = $config["navigator"];

            if ($result != null)
                if (array_key_exists(strtolower($enviroment), $result))
                    $result = $result[strtolower($enviroment)];
                else
                    $result = null;

        }
        return $result;

    }

    public function getConfig()
    {
        $file_name = $this->getDir() . '/Resources/config/config.yml';

        $file = Yaml::parse(file_get_contents($file_name));
        //  $result = $file[$this->getFullName()];

        $result = $this->container->get("qba_bit_core.global.utils")->checkForParams($file);

        $result = $result[$this->getFullName()];


        unset($file);
        return $result;
    }

    public function getTests($enviroment = null)
    {
        $dir = $this->getDir();
        $dir .= '/Tests/';

        $result = array();
        if(is_dir($dir)==false)
            return $result;
        $this->container->get("qba_bit_core.file.utils")->getFiles($dir, $result, true);

        $t = array();
        foreach ($result as $r) {
            $v = str_replace($dir . "/", "", $r);
            $f = explode("/", $v);
            if (count($f) == 3) {
                if (array_key_exists($f[0], $t) == false)
                    $t[$f[0]] = array();
                if (array_key_exists($f[1], $t[$f[0]]) == false)
                    $t[$f[0]][$f[1]] = array();
                $t[$f[0]][$f[1]][] = $r;
            }
            unset($f);

        }
        unset($result);
        return $t;

    }
    public function getInstallInfo()
    {
        $dir = $this->getDir();
        $dir.="/Resources/config/install.json";
        $file = file_get_contents($dir);
        $t = json_decode($file,true);
        unset($file);
        return $t;
    }
}
