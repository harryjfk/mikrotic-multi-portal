<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Collections;


use QbaBit\CoreBundle\Form\Base\Editor;
use QbaBit\CoreBundle\FormType\GeneralCollectionType;
use QbaBit\CoreBundle\FormType\HtmlControlType;
use QbaBit\CoreBundle\FormType\ImageFileMultipleType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  GeneralCollectionEditor extends Editor
{

    public function useContainer()
    {
        return true;
    }

    public function hasAdditionalParams()
    {
        return true;
    }
    public function getUsesParams()
    {
        return array_merge(array('em'=>'Doctrine\ORM\EntityManager'),$this->uses);
    }
    public function getType()
    {
        return GeneralCollectionType::class;
    }
    public function getDefaultTestValue()
    {
        $t = parent::getDefaultTestValue();
        $t['value'] = 'array(array("attributes" => "2", "value" => "34"))';
        
        return $t;
    }
}