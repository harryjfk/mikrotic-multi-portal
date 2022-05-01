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

class ProfileEditTab extends BaseTab
{

    public function getName()
    {
        return $this->container->get('translator')->trans('qbabit.security.profile.edit_tab.name');
    }

    public function getId()
    {
        return 'edit';
    }

    public function getImg()
    {
        return "fa fa-edit  ";
    }

    public function getRender()
    {
        return 'QbaBitSecurityBundle:Default/ProfileTabs:edit.html.twig';

    }
    public function getParams()
    {
        $form = $this->container->get('form.factory')->create('QbaBit\SecurityBundle\Form\FrontEnd\UserType', $this->container->get('security.token_storage')->getToken()->getUser(), array('csrf_protection' => false));
        return array('form'=>$form->createView());
    }
}