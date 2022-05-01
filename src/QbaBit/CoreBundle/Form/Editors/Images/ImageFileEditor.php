<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Images;


use QbaBit\CoreBundle\Command\Generator\Execute\Generator;

use QbaBit\CoreBundle\Form\Types\Images\ImageFileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  ImageFileEditor extends ImageEditor
{

    public function useContainer()
    {
        return true;
    }

    public function hasAdditionalParams()
    {
        return false;
    }

    public function getType()
    {
        return ImageFileType::class;
    }
    public function setStoredParams($array)
    {
        $this->additionalParams = $array;
       

            
    }
    public function getDefaultValues()
    {
        $base = parent::getDefaultValues();
        $base["class_row"] = "col-xs-12 col-sm-4";
       /* if(array_key_exists("web_dir",$this->additionalParams)==false)
        {
            $f = $this->uses["from"];
            $t = explode('\\',$f);
            $gen = new Generator(null,null);
            $name= strtolower($t[count($t)-1]);
            $bundle = strtolower( str_replace("Bundle","",$t[1]));

            $web_dir = 'qba_bit_'.$bundle.'.uploads.'.$name.'.web'  ;
           $base["web_dir"] = $web_dir;
            $web_dir = 'qba_bit_'.$bundle.'.uploads.'.$name.'.dir'  ;
            $base["dir_dir"] = $web_dir;

        }*/
        return $base;
    }

    public function getDefaultTestValue()
    {
        $t = parent::getDefaultTestValue();
        $t['value'] = null;
        $t['files'][] = 'E:\Imagenes\Wallpapers\WIDE SCREEN\7.jpg';
        return $t;
    }

    public function getFieldName($name)
    {
        return $name . "_file";
    }

    public function isFirstRequired()
    {
        return true;
    }

    public function getIndexHtml($value, $params)
    {

        $no = "asset('bundles/qbabitcore/css/common/images/no-img.png')";
        $ok =  str_replace("qbabit", "", str_replace("bundle", "", strtolower($params["bundle_name"]))) . ".uploads." . strtolower($params["table"]) . ".web";
        return '<img src="{{entity.image|QbRenderImg('.$ok.') }}" width="32px" height="32px" >';
 
    }
}