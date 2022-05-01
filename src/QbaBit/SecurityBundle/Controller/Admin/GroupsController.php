<?php

namespace QbaBit\SecurityBundle\Controller\Admin;

use Doctrine\ORM\EntityManager;
use QbaBit\CoreBundle\Controller\Base\QbaBitCrudController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class GroupsController extends QbaBitCrudController
{
    protected function getSearchForm()
    {
        $search = parent::getSearchForm();
        $search->add('nombre', TextType::class, array( 'label' => "qba_bit.security.security_group.fields.name", 'attr' => array('class' => 'form-control')));

        return $search;
    }
    protected function getCurrentObject()
    {
        return "QbaBit\SecurityBundle\Entity\SecurityGroup";
    }

}
