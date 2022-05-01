<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Basic;


use QbaBit\CoreBundle\Form\Base\Editor;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  TextEditor extends Editor
{

    public function useContainer()
    {
        return false;
    }

    public function hasAdditionalParams()
    {
        return false;
    }
    public function getType()
    {
        return TextType::class;
    }
    
}