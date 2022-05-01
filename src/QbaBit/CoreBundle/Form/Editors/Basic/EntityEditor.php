<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Basic;


use QbaBit\CoreBundle\Form\Base\Editor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  EntityEditor extends Editor
{

    public function useContainer()
    {
        return false;
    }

   
    public function getType()
    {
        return EntityType::class;
    }

}