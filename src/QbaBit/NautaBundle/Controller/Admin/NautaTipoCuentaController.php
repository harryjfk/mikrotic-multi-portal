<?php

namespace QbaBit\NautaBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QbaBit\CoreBundle\Controller\Base\QbaBitCrudController;

use QbaBit\NautaBundle\Entity\NautaAccounts;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NautaTipoCuentaController extends QbaBitCrudController
{

    protected function getSearchForm()
    {

        $search = parent::getSearchForm();
        $search
            ->add('name', TextType::class, array( "required"=>false, 'label' => "qba_bit.security.security_user.fields.name", 'attr' => array('class' => 'form-control')))
        ;
        return $search;
    }
    protected function getCurrentObject()
    {
        return "QbaBit\NautaBundle\Entity\NautaTipoCuenta";
    }

}
