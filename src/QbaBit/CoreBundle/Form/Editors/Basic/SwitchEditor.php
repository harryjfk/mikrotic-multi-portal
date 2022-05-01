<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Basic;


use QbaBit\CoreBundle\Form\Base\Editor;

use QbaBit\CoreBundle\Form\Types\Basic\SwitchCheckType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  SwitchEditor extends Editor
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
        return SwitchCheckType::class;
    }
    public function getDefaultTestValue()
    {
        $t = parent::getDefaultTestValue();
        $t['value'] = "1";
        return $t;
    }
    public function getIndexHtml($value, $params)
    {
       $html= '<div class="switch">
                    <input id="enable-{{ '.$value.' }}" type="hidden" value="" />
                    <input id="disable-{{ '.$value.' }}" type="hidden" value="" />
                    <input id="{{ '.$value.' }}" type="checkbox" {% if  '.$value.' %}checked="checked"{% endif %} disabled />
                    <label for="{{ '.$value.' }}"></label>
                </div>';
           return $html;

    }
}