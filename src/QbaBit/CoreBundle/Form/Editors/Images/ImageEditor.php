<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/08/2017
 * Time: 0:06
 */

namespace QbaBit\CoreBundle\Form\Editors\Images;


use QbaBit\CoreBundle\Form\Base\Editor;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ImageEditor extends Editor
{
    public function getPrincipalImage()
    {
        return "";
    }
    
    public function isScalar()
    {
        return false;
    }
    
}