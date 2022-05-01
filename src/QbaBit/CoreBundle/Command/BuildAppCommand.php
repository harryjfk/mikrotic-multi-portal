<?php

namespace QbaBit\CoreBundle\Command;

use QbaBit\CoreBundle\Command\Generator\Execute\Generator;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BuildAppCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:build:bundle')
            ->setDescription('...')
            ->addArgument('bundle')
            ->addOption('clear')
            ->addOption('replace')
            ->addArgument("mode");
    }


    private function setRepository($bundle)
    {
        $or_dir = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
        $this->out->writeln("--Generando Repositorios--");
        $files = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);
        $dir = $or_dir . "Resources/config/doctrine/";
        ///   $filename = $files[0];
        $services = $or_dir . "Resources/config/services.yml";
        $service_file = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($services);


        foreach ($files as $filename) {
            $w = new \SplFileInfo($filename);
            $filename = $w->getFilename();
            unset($w);
            $this->out->writeln("--Generando Repositorios:" . $filename . "--");
            $file = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($dir . "/" . $filename);
            $keys = array_keys($file);
            $name = $keys[0];
            $child = $file[$name];

            if (array_key_exists("repositoryClass", $child) == false) {
                $repos = str_replace("Entity", "Repository", $name . "Repository");
                $child["repositoryClass"] = $repos;
            }
            $file[$name] = $child;
            $type = "normal";
            if (array_key_exists("qba_bit", $child))
                $type = $child["qba_bit"]["type"];
            $this->getContainer()->get('qba_bit_core.file.utils')->setFile($dir . "/" . $filename, $file);
            $gen = new Generator($this->getContainer()->get('filesystem'), $this->getContainer());
            $params = array(
                'entity_class' => str_replace(".orm.yml", "", $filename),
                'namespace' => "QbaBit\\" . $bundle . "Bundle\\Repository"
            );
            $gen->renderFile("repository\\" . $type . ".php.twig", $or_dir . "/Repository/" . str_replace(".orm.yml", "Repository.php", $filename), $params);

            $service_file["services"]["qba_bit.repository." . $gen->getSeparatedNames($bundle, "_") . "." . $gen->getSeparatedNames($params["entity_class"], "_")] =

                array("class" => "Doctrine\\ORM\\EntityRepository", "factory" => array("@doctrine.orm.default_entity_manager", "getRepository"), "arguments" => ["QbaBit\\" . $bundle . "Bundle\\Entity\\" . $params["entity_class"]]);
            //


        }
        $this->getContainer()->get('qba_bit_core.file.utils')->setFile($services, $service_file);

    }


    private function setConfigFile($bundle)
    {


        $this->out->writeln("--Actualizando Archivo de configuracion global--");

        $kernel = $this->getContainer()->get("qba_bit_core.file.utils")->getKernelFile();
        $config = $this->getContainer()->get("qba_bit_core.file.utils")->getFile($kernel);
        $s = array("resource" => '@QbaBit' . $bundle . 'Bundle/Resources/config/config.yml');

        $config["imports"][] = $s;
        $this->getContainer()->get("qba_bit_core.file.utils")->setFile($kernel, $config);


        $locate = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
        $kernel = $locate . "Resources/config/config.yml";

        $config = array();

        $name = "qba_bit_" . $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($bundle, "_");
        $t = array();
        $uploads = array();
        $files = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);
        $manipulator = new PhpFileManipulator();
        if (!is_dir($locate . 'Entity')) {
            mkdir($locate . 'Entity', 0777, true);
        }
        $generator = new Generator($this->getContainer()->get('filesystem'), $this->getContainer());
        foreach ($files as $file) {

            //  options: { orm: { email: { class: QbaBit\MailBundle\Entity\EmailTemplate, config_path: '@QbaBitMailBundle/Resources/config/doctrine/EmailTemplate.orm.yml' }, category: { class: QbaBit\MailBundle\Entity\EmailTemplateCategory, config_path: '@QbaBitMailBundle/Resources/config/doctrine/EmailTemplateCategory.orm.yml' }, vars: { class: QbaBit\MailBundle\Entity\EmailTemplateVars, config_path: '@QbaBitMailBundle/Resources/config/doctrine/EmailTemplateVars.orm.yml' } } }

            $w = new \SplFileInfo($file);
            $filename = str_replace(".orm.yml", "", $w->getFilename());
            $this->out->writeln("--Actualizando Archivo de configuracion global:" . $filename . "--");
            // anadir entidades
            $render = $this->getContainer()->get('twig')->render('QbaBitCoreBundle:SensioGeneratorBundle/skeleton/bundle:Entity.php.twig', array("namespace" => "QbaBit\\" . $bundle . "Bundle\\Entity", "class_name" => $filename));
            file_put_contents($locate . 'Entity\\' . $filename . '.php', $render);


            $class = array('class' => "QbaBit\\" . $bundle . "Bundle\\Entity\\" . $filename, "config_path" => '@QbaBit' . $bundle . 'Bundle/Resources/config/doctrine/' . $file);
            $filename = "qba_bit_" . $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($filename, "_");

            $filename = str_replace("qba_bit_", "", $filename);
            $t[$filename] = $class;
            $class1 = array('web' => "@qba_bit_core.routing.uploads.url@/" . $generator->getSeparatedNames($filename, "/") . "/", "dir" => "@qba_bit_core.routing.uploads.dir@/" . $generator->getSeparatedNames($filename, "/") . "/");

            $uploads[$filename] = $class1;
            // category: { web: , : '' }
            // anadir al configuration
            //       $manipulator->addCodeByPos("QbaBit\\" . $bundle . "Bundle\\DependencyInjection\\Configuration", ' $this->addOrmConfig($options,"' . $filename . '" );', 25);
            $manipulator->addCodeByPos("QbaBit\\" . $bundle . "Bundle\\DependencyInjection\\Configuration", '$this->addUploadConfig($upload,"' . $filename . '" );', 25);


        }
        $options = array();

        $config[$name] = array("options" => $options, "uploads" => $uploads);
        $this->getContainer()->get('qba_bit_core.file.utils')->setFile($kernel, $config);


        $rt = array();
        foreach ($files as $w)
            $rt[] = $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames(str_replace($locate . "/Resources/config/doctrine/", "", str_replace(".orm.yml", "", $w)), "_");


        $bundle_name = $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($bundle, "_");
        $gen = new Generator($this->getContainer()->get('filesystem'), $this->getContainer());
        $gen->renderFile('bundle/Menu.php.twig', $locate . '/MenuBuilder/AdminMenu.php', array_merge(array('namespace' => 'QbaBit\\' . $bundle . "Bundle", "bundle" => $bundle_name, 'menu_name' => 'Admin', 'generator' => $gen, 'tables' => $rt)));
        $gen->renderFile('bundle/Menu.php.twig', $locate . '/MenuBuilder/FrontMenu.php', array_merge(array('namespace' => 'QbaBit\\' . $bundle . "Bundle", "bundle" => $bundle_name, 'menu_name' => 'Front')));

        $services = $this->getContainer()->get("qba_bit_core.file.utils")->getFile($locate . "/Resources/config/services.yml");

        foreach ($rt as $w) {
            $w = $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($w, "_", true);
            $services["services"]["qba_bit.type." . $bundle_name . "." . $gen->getSeparatedNames($w, ".")] = array(
                "class" => "QbaBit\\" . $bundle . "Bundle\\Form\\Admin\\" . $w . "Type",
                "tags" => array(array("name" => "form.type")),
                "arguments" => array("@service_container")

            );
        }
        $this->getContainer()->get("qba_bit_core.file.utils")->setFile($locate . "/Resources/config/services.yml", $services);


    }

    private function generateForms($bundle)
    {
        $this->out->writeln("--Generando Formularios--");
        $files = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);

        foreach ($files as $file) {
            $w = new \SplFileInfo($file);
            $file = $w->getFilename();
            unset($w);
            $file = str_replace(".orm.yml", "", $file);

            $this->out->writeln("--Generando Formularios:" . $file . "--");
            system("php bin/console qbabit:generate:form QbaBit" . $bundle . "Bundle:" . $file);

        }

    }


    private function generateController($bundle)
    {
        $this->out->writeln("--Generando Controladores--");

        $files = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);

        foreach ($files as $file) {
            $w = new \SplFileInfo($file);
            $file = $w->getFilename();
            unset($w);
            $file = str_replace(".orm.yml", "", $file);
            $this->out->writeln("--Generando Controladores:" . $file . "--");
            system("php bin/console qbabit:generate:controller --controller QbaBit" . $bundle . "Bundle:" . $file . " --template-format=twig --route-format=yml -q ");

        }
        $dir = $this->getContainer()->get("file_locator")->locate("@QbaBit" . $bundle . "Bundle");


        $gen = new Generator($this->getContainer()->get('filesystem'), $this->getContainer());
        $parameters = array(
            'namespace' => "QbaBit\\" . $bundle . "Bundle",
            'bundle' => "QbaBit" . $bundle . "Bundle",
        );
        $gen->renderFile('controller/AdminControllerBase.php.twig', $dir . '/Controller/Admin/AdminController.php', $parameters);
        $gen->renderFile('controller/FrontControllerBase.php.twig', $dir . '/Controller/Front/FrontController.php', $parameters);
        $gen->renderFile('controller/AdminControllerBaseIndex.html.twig.twig', $dir . '/Resources/views/Admin/index.html.twig', array("bundle" => $bundle));


    }

    public function generateEntities($bundle)
    {
        system("php bin/console doctrine:generate:entities  QbaBit" . $bundle . "Bundle ");


    //
       $this->out->writeln("--Generando Entidades--");

        $traits_t = array();
        $dir = dirname($this->getContainer()->get('kernel')->getRootDir());
        $this->getContainer()->get('qba_bit_core.file.utils')->searchFile($dir, "*able*", "php", $traits_t, true);
        $traits = array();
        foreach ($traits_t as $t) {
            $p = new PhpFileManipulator();

            if (strpos($t, "Symfony/Bridge") === false && strpos($t, "Exception") === false && strpos($t, "Symfony/Component") === false && strpos($t, "HttpKernel") === false && strpos($t, "Event") === false && strpos($t, "Swift") === false && strpos($t, "Container") === false && strpos($t, "Gedmo") === false && strpos($t, "Test") === false && strpos($t, "Symfony/Bundle") === false)

                try {
                    $namespace = $p->getNameSpace($t) . "\\" . $p->getClassName($t);

                    if (array_search($namespace, get_declared_classes()) == false && array_search($namespace, get_declared_traits()) == false)
                        try {
                            $traits[] = array("name" => $namespace, "filename" => $t);
                            require $t;

                        } catch (\Exception $e) {
                        }
                } catch (\Exception $e) {
                }

        }
        // if (strpos($t, "Symfony\\Bridge") === false && strpos($t, "Exception") === false && strpos($t, "Symfony\\Component") === false && strpos($t, "HttpKernel") === false && strpos($t, "Event") === false && strpos($t, "Swift") === false && strpos($t, "Container") === false && strpos($t, "Gedmo") === false && strpos($t, "Test") === false)


        $real_trait = get_declared_traits();


               $dir = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
               $entities = $this->getContainer()->get('qba_bit_core.orm.utils')->getEntityFiles($bundle);
               foreach ($entities as $entity) {

                   $w = new \SplFileInfo($entity);
                   $f = $w->getFilename();
                   unset($w);
                   $this->out->writeln("--Generando Entidades:" . str_replace(".php", '', $f) . "--");
                   $entity_orm = $dir . "/Resources/config/doctrine/" . str_replace(".php", '.orm.yml', $f);
                   if (!file_exists($entity_orm))
                       continue;
                   $entity_orm = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($entity_orm);

                   $manipulator = new PhpFileManipulator();
                   $class = "QbaBit\\" . $bundle . "Bundle\\Entity\\" . str_replace(".php", '', $f);
                   $extends = "QbaBit\\CoreBundle\\Entity\\ArrayGetter";
                   //  $manipulator->setExtend($class, $extends);

                   foreach ($real_trait as $b) {


                       $find = false;
                       foreach ($traits as $t)
                           if (strpos($t["name"], $b) !== false) {
                               $b = $t;
                               $find = true;
                               break;

                           }

                       if ($find == true) {


                           $manipulator->replaceTrait($class, $b["filename"], $traits, $entity_orm);

                       }
                   }
               }


        // var_dump($entity_file);
        //var_dump($file);
        // var_dump($traits);
    }

    /***
     * @var OutputInterface $out
     */
    private $out;

    protected function setTranslation($bundle)
    {
        $this->out->writeln("--Instalando Traducciones--");
        $dir = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
        $orm = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);
        $gen = new Generator($this->getContainer()->get('filesystem'), $this->getContainer());
        $controllers = array();
        foreach ($orm as $t) {

            $w = new \SplFileInfo($t);
            $w = str_replace(".orm.yml", "", $w->getFilename());
            $this->out->writeln("--Instalando Traducciones:" . $w . "--");
            //    $f = strtolower($w);
            $f = $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($w, "_");

            $controllers[$f] = array("fields" => array(), "delete" => $w, "single" => $w, "list" => $w, "text" => $w);

            $fields = $gen->getFields($bundle, $w);
            foreach ($fields as $K => $field)
                $controllers[$f]["fields"][$K] = $K;

        }
        $parameters["bundle_name"] = strtolower($bundle);
        $parameters["controllers"] = $controllers;


        $gen->renderFile(
            'bundle/translations.yml.twig',
            $dir . '/Resources/translations/messages.es.yml', $parameters
        );
        $file = $this->getContainer()->get("qba_bit_core.file.utils")->getFile($dir . '/Resources/translations/messages.es.yml');

        $bundle = $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames($bundle, "_");
        //   $file["qbabit"][$bundle] = array();
        $file["qba_bit"] = array(strtolower($bundle) => $controllers);

        $this->getContainer()->get("qba_bit_core.file.utils")->setFile($dir . '/Resources/translations/messages.es.yml', $file);


    }

    private function getTypeOfGenerator($types, $db_name, $field)
    {
        $db_type = array_key_exists("type", $field) ? $field["type"] : "entity";

        $especific = array();
        $globals = array();
        foreach ($types as $t)
            if ($t["type"] == $db_type)
                if ($t["name"] == null)
                    $globals[] = $t;
                else

                    $especific[] = $t;
        foreach ($especific as $t)
            if (strpos($db_name, str_replace("*", "", $t["name"])) !== false)
                return $t["control"];
        if (count($globals) > 0)
            return $globals[0]["control"];
        return "text";
    }

    private function updateGeneratedOrmWithType($bundle)
    {
        $this->out->writeln("--Actualizando archivos ORM--");
        $dir = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
        $files = $this->getContainer()->get('qba_bit_core.orm.utils')->getOrmFiles($bundle);

        $dir .= "Resources/config/doctrine/";
        $config = $this->getContainer()->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
        $config = $config["generator"]["defaultTypes"];


        foreach ($files as $filename) {
            $t = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($filename);
            $name = array_keys($t)[0];
            $file = $t[$name];
            $table_type = "normal";
            if (array_key_exists("qba_bit", $file))
                $table_type = $file['qba_bit']["type"];
            if ($table_type == "tree") {
                if (array_key_exists("oneToMany", $file) == false)
                    $file["oneToMany"] = array();
                if (array_key_exists("childs", $file["oneToMany"]) == false) {
                    $file["oneToMany"]["childs"] = array(
                        "mappedBy" => "parent", "cascade" => array("persist"), "targetEntity" => $name
                    );
                }
            }
            $this->out->writeln("--Actualizando archivos ORM:" . $filename . "--");
            if (array_key_exists("fields", $file))
                foreach ($file["fields"] as $k => $w) {
                    $f = array("type" => $this->getTypeOfGenerator($config, $k, $w));
                    $file["fields"][$k]["qba_bit"] = $f;
                }
            if (array_key_exists("oneToMany", $file)) {
                foreach ($file["oneToMany"] as $k => $w) {
                    $f = array("type" => $this->getTypeOfGenerator($config, $k, $w));

                    $file["oneToMany"][$k]["qba_bit"] = $f;
                }

            }
            if (array_key_exists("manyToOne", $file)) {

                foreach ($file["manyToOne"] as $k => $w) {

                    $f = array("type" => $this->getTypeOfGenerator($config, $k, $w));
                    $file["manyToOne"][$k]["qbabit"] = $f;
                }

            }
            if (array_key_exists("manyToMany", $file)) {
                foreach ($file["manyToMany"] as $k => $w) {
                    $f = array("type" => $this->getTypeOfGenerator($config, $k, $w));
                    $file["manyToMany"][$k]["qba_bit"] = $f;

                }

            }
            $t[$name] = $file;
            $this->getContainer()->get('qba_bit_core.file.utils')->setFile($filename, $t);


        }
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $bundle = $input->getArgument('bundle');
        $mode = $input->getArgument("mode");
        $replace = $input->getOption("replace");
        $clear = $input->getOption("clear");
        if ($mode != "init" && $mode != "ormTypes" && $mode != "finish")
            throw new \InvalidArgumentException(sprintf('El parametro mode debe poseer uno de estos 3 valores (init,ormTypes,finish)'));


        $this->out = $output;
        if ($mode == "init") {

            if ($replace) {
                $folder = $bundle . "Bundle";
                $base = dirname(dirname(__DIR__)) . "/" . $folder;


                if (is_dir($base)) {
                    $this->getContainer()->get("qba_bit_core.class.utils")->removeBundleFromFile($base);
                    $this->getContainer()->get("qba_bit_core.file.utils")->removeDir($base);

                }
            }

            system("php bin/console qbabit:generate:bundle --namespace QbaBit/" . $bundle . "Bundle --bundle-name QbaBit" . $bundle . "Bundle --format yml -q --shared ");
            system("php bin/console doctrine:mapping:import QbaBit" . $bundle . "Bundle  yml ");

        } else
            if ($mode == "ormTypes") {
                $this->updateGeneratedOrmWithType($bundle);
            } else {

                $this->setTranslation($bundle);
                $this->setConfigFile($bundle);
                  $this->generateEntities($bundle);
                  $this->generateForms($bundle);
                 $this->generateController($bundle);
                 $this->setRepository($bundle);

                /////ESTO HAY QUE HACERLO QUE SF SE FUNDE Y ME CREA DOS UNO ADENTRO Y OTRO AFUERA
                $dir = $this->getContainer()->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
                $result = array();
                $this->getContainer()->get("qba_bit_core.file.utils")->getFiles($dir,$result,false);
                foreach ($result as $error)
                    if(strpos($error,"Entity")!==false)
                        unlink($error);
                unset($result);
            }
        // if($clear)

        echo "Se termino satisfactoriamente el procedimiento.";
    }
}
