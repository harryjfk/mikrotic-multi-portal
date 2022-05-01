<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Basic;


use QbaBit\CoreBundle\Form\Base\Editor;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  NumberEditor extends Editor
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
        return NumberType::class;
    }
    public function getDefaultTestValue()
    {
        $t = parent::getDefaultTestValue();
        $t['value'] = "1";
        return $t;
    }
}