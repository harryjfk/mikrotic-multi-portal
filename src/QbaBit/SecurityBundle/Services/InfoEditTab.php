<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 15/03/2017
 * Time: 22:43
 */

namespace QbaBit\SecurityBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\Container;

class InfoEditTab extends BaseTab
{

    public function getName()
    {
        return $this->container->get('translator')->trans('qbabit.security.profile.info_tab.name');
    }

    public function getId()
    {
        return 'info';
    }

    public function getImg()
    {
        return "fa fa-info   ";
    }

    public function getRender()
    {
        return 'QbaBitSecurityBundle:Default/ProfileTabs:info.html.twig';

    }
}