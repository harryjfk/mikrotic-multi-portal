<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 25/08/2017
 * Time: 0:33
 */

namespace QbaBit\CoreBundle\Command\Generator\Execute;


use QbaBit\CoreBundle\Entity\Reflection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;

class Generator extends \Sensio\Bundle\GeneratorBundle\Generator\Generator
{
    protected $filesystem;
    protected $container;

    public function __construct(Filesystem $filesystem = null, ContainerInterface $containerInterface = null)
    {
        $this->filesystem = $filesystem;
        $this->container = $containerInterface;
        $this->updateDirs();
    }

    public function renderFile($template, $target, $parameters)
    {
        parent::renderFile($template, $target, $parameters);
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function updateDirs()
    {
        $t = __DIR__;
        $t = dirname($t);
        $t = dirname($t);
        $t = dirname($t) . '/Resources/views/SensioGeneratorBundle/skeleton/';
        $this->setSkeletonDirs($t);
    }

    public function getSeparatedNames($name, $join)
    {
        return $this->container->get("qba_bit_core.class.utils")->getSeparatedNames($name, $join);

    }

    private function getField($w, $params, $uses = null)
    {
        $type = "text";
        if (array_key_exists("qba_bit", $w))
            if (array_key_exists("type", $w["qba_bit"]))
                $type = $w["qba_bit"]["type"];
        $editor = $this->getContainer()->get('qba_bit_core.orm.utils')->getEditor($type);

         if ($editor == null)
             echo "Missing Type: " . $type;
         else {
             if (array_key_exists("qba_bit",$w ))
                 if (array_key_exists("params", $w["qba_bit"]) == true)
                     $params = array_merge($w["qba_bit"]["params"], $params);
             if ($uses != null)
                 $editor->setUsesParams($uses);
             $editor->setStoredParams($params);

             return $editor;
         }
    }

    public function getFields($module, $table, $by_images = false)
    {

        if (strpos($module, "Bundle") !== false)
            $module = str_replace("QbaBit", "", str_replace("Bundle", "", $module));

        $files = $this->container->get('qba_bit_core.orm.utils')->getOrmFiles($module);

        $t = false;
        foreach ($files as $filename)
            if (strpos($filename,$table . ".orm.yml") !== false) {
                $t = true;
                break;
            }

        $result = array();
        if ($t == true) {


            $dir = $this->getContainer()->get("file_locator")->locate("@QbaBit" . $module . "Bundle");
            $dir = $dir . "Resources/config/doctrine/" . $table . ".orm.yml";

            $file = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($dir);

            $name = array_keys($file)[0];

            $file = $file[array_keys($file)[0]];
            $uses = array('from' => $name,);
            if (array_key_exists("fields", $file))
                foreach ($file["fields"] as $k => $w) {

                    $params = array('required' => $w['nullable'] == false ? "true" : "false");
                    $result[$k] = $this->getField($w, $params, $uses);
                }
            if
            (array_key_exists("oneToMany", $file)) {

                foreach ($file["oneToMany"] as $k => $w) {
                    $uses['to'] = $w['targetEntity'];
                    $params = array('required' => "true");
                    $result[$k] = $this->getField($w, $params, $uses);
                }

            }
            if (array_key_exists("manyToOne", $file)) {

                foreach ($file["manyToOne"] as $k => $w) {

                    $params = array('required' => "true");
                    $result[$k] = $this->getField($w, $params, $uses);
                }

            }
            if (array_key_exists("manyToMany", $file)) {
                foreach ($file["manyToMany"] as $k => $w) {

                    $params = array('required' => "true");
                    $result[$k] = $this->getField($w, $params, $uses);


                }

            }


            if ($by_images) {
                $imgs = array();
                $no_imgs = array();
                foreach ($result as $k => $v) {
                    $reflector = new Reflection($v);
                    if ($reflector->isSubclassOf('QbaBit\CoreBundle\Form\Editors\Images\ImageEditor'))
                        $imgs[$k] = $v;
                    else
                        $no_imgs[$k] = $v;
                }
                return array_merge($imgs, $no_imgs);
            }
            return $result;
        }
        return null;
    }

}