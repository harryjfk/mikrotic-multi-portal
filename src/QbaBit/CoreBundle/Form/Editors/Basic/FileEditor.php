<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Basic;


use QbaBit\CoreBundle\Form\Base\Editor;
use QbaBit\CoreBundle\FormType\HtmlControlType;
use QbaBit\CoreBundle\FormType\ImageFileMultipleType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  FileEditor extends Editor
{

    public function useContainer()
    {
        return false;
    }

  
    public function getType()
    {
        return FileType::class;
    }

}