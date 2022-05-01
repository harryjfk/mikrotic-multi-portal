<?php

namespace QbaBit\CoreBundle\Services;


use Doctrine\ORM\EntityManager;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PaginatorUtils
{

    private $container;

    private $em;

    private $paginator;

    public function __construct(ContainerInterface $container, EntityManager $em, \Knp\Component\Pager\Paginator $paginator)
    {
        $this->container = $container;
        $this->em = $em;
        $this->paginator = $paginator;

    }

    public function execute($query, $start = null, $count = null)

    {

        $c = $count;
        if ($c == null)
            $c = $this->container->get("request_stack")->getCurrentRequest()->get("tables_show_count");
        if ($c == null)
            $c = $this->container->getParameter('knp_paginator.page_range');
        if ($start == null)
            $start = $this->container->get("request_stack")->getCurrentRequest()->query->getInt('page', 1);


        $pagination = $this->paginator->paginate(
            $query, $start
            , $c
        );

        $this->getTemplates($pagination, $this->container->get("qba_bit_core.global.utils")->getEnviroment());
        return $pagination;
    }

    private function getTemplates(PaginationInterface $paginationObject, $env)
    {

        $template = "";
        $sortableTemplate = "";
        $hasModuleTemplate = $this->container->get('qba_bit_core.global.utils')->hasQbaBitModule("template");

        if ($hasModuleTemplate) {

            if ($this->container->get("qba_bit_template.helper")->canRender()) {

                $temp = $this->container->get("qba_bit_template.helper")->getDefaultTemplate();
                $config = $temp->getConfig();
                $template = $config["pagination"]["pagination"];
                $sortableTemplate = $config["pagination"]["sortable"];
                 } else
                goto render;
        } else {
            render:
            $core = $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"));
            $config = $core->getConfig();
            $template = $config["pagination"][strtolower($env)]["pagination"];
            $sortableTemplate = $config["pagination"][strtolower($env)]["sortable"];

        }

        $paginationObject->setTemplate($template);
        $paginationObject->setSortableTemplate($sortableTemplate);

    }

    public function count()
    {
        return $this->container->getParameter('knp_paginator.page_range');
    }


}
