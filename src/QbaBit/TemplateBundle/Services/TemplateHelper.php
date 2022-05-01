<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 27/06/2017
 * Time: 22:10
 */

namespace QbaBit\TemplateBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class TemplateHelper
{
    use ServiceContainer;

    public function getTemplates($filter = null)
    {

        $kernel_modules = $this->container->get('kernel')->getBundles();
        $result = array();

        foreach ($kernel_modules as $k => $kernel_module)

            if ((get_parent_class($kernel_module) == 'QbaBit\TemplateBundle\QbaBitTemplateBaseBundle')) {
                if ($filter != null)
                    if (strpos($kernel_module->getName(), $filter) !== false)
                        return $kernel_module;
                $result[$k] = $kernel_module;
            }

        if ($filter != null)
            return null;
        return $result;
    }

    public function canRender()
    {
        return $this->getDefaultTemplate() != null;
    }

    public function getRedirectedView($view)
    {
        $template = $this->getDefaultTemplate();
        $config = $template->getConfig();
        $hasSlash = false;
        if (strpos($view, ":") !== false) {
            $t = explode(':', $view);
            $module = $t[0];
            $folder_start = $t[1];
            $view_file = $t[2];
            $hasSlash = false;
        } else {
            $t = explode('/', $view);
            $module = $t[0];
            $folder_start = $t[1];
            $view_file = "";
            for ($i = 2; $i < count($t); $i++) {
                $view_file .= $t[$i];
                if ($i < count($t) - 1)
                    $view_file .= "/";

            }
            $hasSlash = true;
        }


        $view_url = $folder_start . '\\' . str_replace(".html.twig", "", $view_file);

        if (array_key_exists($view_url, $config["views"])) {
            $view_file = $config["views"][$view_url] . ".html.twig";
        }
        $module = $this->getTwigDefaultTemplateDir($hasSlash);
        if ($hasSlash)
            $view_url = "@" . $module . '/' . $folder_start . "/" . $view_file;
        else
            $view_url = $module . ':' . $folder_start . ":" . $view_file;
        return $view_url;
    }

    public function render($view, $params = array(), Response $response = null)
    {

        $params["template_helper"] =$this;
        $view_url = $this->getRedirectedView($view);
        $config = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
       $params["config"] =$config;
        return new Response($this->container->get('twig')->render($view_url, $params));
        /* $t = explode(':', $view);
         $t[0] = $this->getTwigDefaultTemplateDir();
         if(array_key_exists('useTemplateDB',$params))
         {
             $w= explode('.',$t[2]);
             $w[0] = $w[0]."_db";
             $t[2] = implode(".",$w);

             $params["template_data"] =$this->getDbTemplate();
         }
         $t = implode(':', $t);
         $params['current_template'] = $this->container->get('qbabit.template.loader')->load()->getData()['theme'];
         return new Response($this->container->get('twig')->render($t, $params));
   */
    }
    public function renderController($controller,$path, array $query = array())
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $path['_forwarded'] = $request->attributes;
        $path['_controller'] = $controller;
        $subRequest = $request->duplicate($query, null, $path);
        return $this->container->get('http_kernel')->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
    }

    /* public function getDbTemplate()
     {
       $p =   $this->container->get("qbabit.repository.template.template")->getOrderedQuery();
         $r = array();
         foreach ($p as $w)
         {
             $t = $this->container->get('qbabit_core.global.dynamic.pages.render')->render($w,array(),true);
             $r[] = array("row"=>$w,"html"=>$t) ;
         }

        return $r;

     }*/
    public function getDefaultTemplate()
    {

        $module = $this->get("qba_bit_core.global.utils")->getQbaBitModules(array("template"));
        $env = $this->get("qba_bit_core.global.utils")->getEnviroment();
        $env = strtolower($env);
        $config = $module->getConfig();

        $proxy_template = $config["enviroment"][$env];
        if ($proxy_template != null) {

            $t = $this->getTemplates($proxy_template);
            return $t;
        } else

            return null;
        /*  $customizing = $this->container->get('request_stack')->getCurrentRequest()->getSession()->get('customizing_template');

          $default = $customizing != '' ? $customizing : $this->container->get('qbabit_core.global.config')->getConfigValue('qba_bit_template.default');
          $default = $this->getTemplates($default);
          return $default;*/
    }

    private function getTwigDefaultTemplateDir($hasSlashes = false)
    {
        $default = $this->getDefaultTemplate();
        $n = $default->getName();
        if ($hasSlashes)
            $n = str_replace("Bundle", "", $n);

        return $n;
    }
    /*
        public function renderMenus($menuArray = array(), $menuName, $menuDir = null, $params = array())
        {
            if ($menuDir == null)
                $menuDir = 'Menus';
            $template_dir = $this->getTwigDefaultTemplateDir() . ':' . $menuDir . ':' . $menuName . '.html.twig';

            return $this->container->get('twig')->render($template_dir, array_merge(array('menus' => $menuArray), $params));
        }

        public function getSystemLinkedMenus($env = 'prod')
        {
            $result = array();
            $config = $this->container->get('qbabit_core.global.config');
            $m = $config->getQbaBitModules($config->getUsableModules());
            // var_dump($m);
            foreach ($m as $t) {
                $temp = $t->getMenu($env);
                if ($temp != null)
                    if ($this->container->has($temp))
                        $result[] = array('name' => $t->getVisibleName(), 'menu' => $temp);
            }

            return $result;

        }*/
}