<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace QbaBit\CoreBundle\Command\Generator\Execute;

use QbaBit\CoreBundle\Command\Generator\Execute\Generator;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

/**
 * Generates a Controller inside a bundle.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class ControllerGenerator extends Generator
{


    public function generate(BundleInterface $bundle, $controller, $routeFormat, $templateFormat, array $actions = array())
    {

        $this->updateDirs();

        $dir = $bundle->getPath();
        $controllerFile = $dir . '/Controller/Admin/' . $controller . 'Controller.php';

        $fields = $this->getFields(str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())), $controller);
        $orm_file = $dir . '/Resources/config/doctrine/' . $controller . '.orm.yml';

        $orm_file = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($orm_file);
        $keys = array_keys($orm_file);
        $name = $keys[0];
        $child = $orm_file[$name];
        $type = "normal";
        if (array_key_exists("qba_bit", $child))
            $ty = $child["qba_bit"]["type"];

        $parameters = array(
            'namespace' => $bundle->getNamespace(),
            'bundle' => $bundle->getName(),
            'entity_namespace' => "QbaBit\\" . str_replace("QbaBit", "", $bundle->getName()) . "\\Entity\\" . $controller,
            'generator' => $this,
            'fields' => $fields,

            'bundle_name' => str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())),
            'controller' => $controller,
        );
        $parameters["type"] = $type;
        $this->renderFile('controller/AdminController.php.twig', $controllerFile, $parameters);
        $this->renderFile('controller/AdminControllerTest.php.twig', $dir . '/Tests/Admin/Controller/' . $controller . 'ControllerTest.php', $parameters);


        ///---FRONT
        $controllerFile = $dir . '/Controller/Front/' . $controller . 'Controller.php';
        $this->renderFile('controller/FrontController.php.twig', $controllerFile, $parameters);
        $this->renderFile('controller/FrontControllerTest.php.twig', $dir . '/Tests/Front/Controller/' . $controller . 'ControllerTest.php', $parameters);

        $this->generateRouting($bundle, $controller, $type);
        $this->generateCrud($bundle, $controller);
    }

    public function generateCrud(BundleInterface $bundle, $controller)
    {
        $dir = $bundle->getPath();
        $fields = $this->getFields(str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())), $controller, true);

        $viewFile = $dir . '/Resources/views/Admin/' . $controller . '/edit.html.twig';

        $parameters = array(
            'namespace' => $bundle->getNamespace(),
            'bundle' => $bundle->getName(),
            'entity_namespace' => "QbaBit\\" . str_replace("QbaBit", "", $bundle->getName()) . "\\Entity\\" . $controller,
            'generator' => $this,
            'bundle_name' => $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames(str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())), "_"),
            'fields' => $fields,

            //  'bundle_name' => str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())),
            'controller' => $controller,
        );
        $this->renderFile('crud/views/edit.html.twig.twig', $viewFile, $parameters);
        $orm_file = $dir . '/Resources/config/doctrine/' . $controller . '.orm.yml';
        $orm_file = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($orm_file);
        $keys = array_keys($orm_file);
        $name = $keys[0];
        $child = $orm_file[$name];
        $type = "normal";
        if (array_key_exists("qba_bit", $child))
            $type = $child["qba_bit"]["type"];
        $parameters["type"] = $type;
        $viewFile = $dir . '/Resources/views/Admin/' . $controller . '/index.html.twig';

        $this->renderFile('crud/views/index_' . $type . '.html.twig.twig', $viewFile, $parameters);
    }


    public function generateRouting(BundleInterface $bundle, $controller, $type)
    {
        $dir = $bundle->getPath();
        $routingFile = $dir . '/Resources/config/routing/Admin/' . $controller . '.yml';


        $parameters = array(
            'namespace' => $bundle->getNamespace(),
            'bundle' => $bundle->getName(),
            'entity_namespace' => "QbaBit\\" . str_replace("QbaBit", "", $bundle->getName()) . "\\Entity\\" . $controller,
            'generator' => $this,
            'bundle_name' => $this->getContainer()->get("qba_bit_core.class.utils")->getSeparatedNames(str_replace("QbaBit", "", str_replace("Bundle", "", $bundle->getName())), "_"),
            'controller' => $controller,
            'type' => $type
        );

        $this->renderFile('controller/AdminRouting.yml.twig', $routingFile, $parameters);
        $routingFile = $dir . '/Resources/config/routing/FrontEnd/' . $controller . '.yml';
        $this->renderFile('controller/FrontEndRouting.yml.twig', $routingFile, $parameters);


        $global = $this->getContainer()->get('qba_bit_core.file.utils')->getFile($dir . "/Resources/config/routing.yml");
        $global ["qba_bit_" . strtolower($parameters["bundle_name"]) . "_admin_" . $this->getSeparatedNames($controller, "_")] = array("resource" => "@" . $bundle->getName() . "/Resources/config/routing/Admin/" . $controller . ".yml", "prefix" => "/admin/" .$parameters["bundle_name"]."/". $this->getSeparatedNames($controller, "_"));
        $global ["qba_bit_" . strtolower($parameters["bundle_name"]) . "_" . $this->getSeparatedNames($controller, "_")] = array("resource" => "@" . $bundle->getName() . "/Resources/config/routing/FrontEnd/" . $controller . ".yml", "prefix" => "/"  .$parameters["bundle_name"]."/".$this->getSeparatedNames($controller, "_"));


        $this->getContainer()->get('qba_bit_core.file.utils')->setFile($dir . "/Resources/config/routing.yml", $global);

    }

    protected function parseTemplatePath($template)
    {
        $data = $this->parseLogicalTemplateName($template);

        return $data['controller'] . '/' . $data['template'];
    }

    protected function parseLogicalTemplateName($logicalName, $part = '')
    {
        if (2 !== substr_count($logicalName, ':')) {
            throw new \RuntimeException(sprintf('The given template name ("%s") is not correct (it must contain two colons).', $logicalName));
        }

        $data = array();

        list($data['bundle'], $data['controller'], $data['template']) = explode(':', $logicalName);

        return ($part ? $data[$part] : $data);
    }
}
