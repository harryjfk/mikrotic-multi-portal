<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 19/11/2016
 * Time: 21:05
 */

namespace QbaBit\CoreBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;
use GuzzleHttp\Exception\ParseException;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\LanguageBundle\Entity\Language;
use QbaBit\LocationsBundle\Entity\Locations;
use QbaBit\OptionsBundle\Entity\Options;
use Sensio\Bundle\GeneratorBundle\Manipulator\KernelManipulator;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Yaml\Yaml;

class ClassUtils
{
    use ServiceContainer;

    public function getClassDescription($class_filename)
    {
        $php = new PhpFileManipulator();
        $class_name = $php->getClassName($class_filename);
        $namespace = $php->getNameSpace($class_filename);
        unset($php);

        return array('namespace' => $namespace, "class_name" => $class_name);
    }


    public function getBendedClassFromJson($json)
    {
        $result = array();
        $object = json_decode($json);
        foreach ($object as $t) {
            //  echo $t->id;
            $repo = $this->container->get('doctrine')->getRepository($t->id);
            foreach ($t->values as $v) {
                $rObj = $repo->find($v->value);
                if ($rObj != null)
                    $result[] = $rObj;
            }
        }
        return $result;

    }

    /*
         private function findinArray($array, $src)
         {
             foreach ($array as $k)
                 if (strpos($k, $src) !== false)
                     return true;
             return false;

         }*/


    public function getSeparatedNames($name, $join, $inverse = false)
    {
        if ($inverse) {
            $t = "";
            $temp = explode($join, $name);

            for ($i = 0; $i < count($temp); $i++) {
                $t .= ucfirst($temp[$i]);

            }
            return $t;
        } else {
            $t = array();
            $temp = $name[0];

            for ($i = 1; $i < strlen($name); $i++) {
                $w = $name[$i];
                if (ctype_upper($w)) {
                    //   if ($temp != "")
                    $t[] = $temp;

                    $temp = $w;
                } else
                    $temp .= $w;
            }
            if ($temp != "")
                $t[] = $temp;

            return strtolower(implode($join, $t));
        }


    }

    public function removeBundle($bundle_name)
    {
        $app_dir = $this->container->get("kernel")->getRootDir() . "/AppKernel.php";

        $n = array();
        $file_data = file($app_dir);
        foreach ($file_data as $data)
            if (strpos($data, $bundle_name) === false)
                $n[] = $data;
        file_put_contents($app_dir, $n);
        $r = explode("\\", $bundle_name);
        $b = $r[count($r) - 1];
        $s = $this->getSeparatedNames($b, "_");
        $s = str_replace("_bundle", "", $s);
        unset($r);
        $route_dir = $this->container->get("kernel")->getRootDir() . "/config/routing.yml";

        $n_f = array();
        $file = $this->container->get("qba_bit_core.file.utils")->getFile($route_dir);
        foreach ($file as $k => $v)
            if ($k != $s)
                $n_f[$k] = $v;
        $this->container->get("qba_bit_core.file.utils")->setFile($route_dir, $n_f);

        unset($n_f);
        unset($file);

        $t = explode("\\", $bundle_name);

        $file = $this->container->get("qba_bit_core.file.utils")->getFile($this->container->get("qba_bit_core.file.utils")->getKernelFile());
        $r = array();

        foreach ($file["imports"] as $v)
            if (strpos($v["resource"], $t[2]) === false)
                $r[] = $v;
        $file["imports"] = $r;
        $this->container->get("qba_bit_core.file.utils")->setFile($this->container->get("qba_bit_core.file.utils")->getKernelFile(), $file);
    }

    public function removeBundleFromFile($directory)
    {
        $r = explode("/", $directory);
        $b = $r[count($r) - 1];

        $result = array();
        $this->container->get("qba_bit_core.file.utils")->searchFile($directory, $b, "php", $result, false);
        $m = $result[0];
        $php = new PhpFileManipulator();
        $c = $php->getClassName($m);
        $n = $php->getNameSpace();
        $c_n = $n . "\\" . $c;
        $this->removeBundle($c_n);
        unset($r);
    }

    public function addBundle($bundle_name, $complete = false)
    {
        $kernel = $this->container->get('kernel');
        $kernelManipulator = new KernelManipulator($kernel);
        $kernelManipulator->addBundle($bundle_name);
        if ($complete) {

            $t = explode("\\", $bundle_name);
            $bundle = $t[count($t) - 1];
            $kernel = $this->container->get("qba_bit_core.file.utils")->getKernelFile();
            $config = $this->container->get("qba_bit_core.file.utils")->getFile($kernel);
            $s = array("resource" => '@' . $bundle . '/Resources/config/config.yml');

            $config["imports"][] = $s;
            $this->container->get("qba_bit_core.file.utils")->setFile($kernel, $config);

            $route_dir = $this->container->get("kernel")->getRootDir() . "/config/routing.yml";


            $file = $this->container->get("qba_bit_core.file.utils")->getFile($route_dir);


            $b_sep_name = $this->container->get("qba_bit_core.class.utils")->getSeparatedNames($bundle, "_");
            $b_sep_name = str_replace("_bundle","",$b_sep_name);
            $n_f = array("resource" => '@' . $bundle . '/Resources/config/routing.yml', "prefix" => "/");
            $file[$b_sep_name] = $n_f;


            $this->container->get("qba_bit_core.file.utils")->setFile($route_dir, $file);

            unset($n_f);
            unset($file);

        }
    }


}