<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 14/01/2017
 * Time: 21:30
 */

namespace QbaBit\CoreBundle\Twig;


use Doctrine\Common\Collections\ArrayCollection;
use Liip\ImagineBundle\Templating\ImagineExtension;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ImageExtension extends \Twig_Extension
{
    use ServiceContainer;
    private $imagine;

    public function __construct(ContainerInterface $container = null, ImagineExtension $imagine)
    {
        $this->container = $container;
        $this->imagine = $imagine;

    }

    public function getFilters()
    {

        return array(
            new \Twig_SimpleFilter('QbRenderImg', array($this, 'renderImg')),
        );
    }


    public function renderImg($img, $folder, $filter="thumbnail")
    {
        $file = "bundles/qbabitcore/css/images/no-img.png";
        if ($img != null) {

            if(strpos($folder,"/")===false)
            {
               $bundle= $this->container->get("qba_bit_core.global.utils")->getQbaBitModules(array($folder));
               if($bundle!=null)
                 $folder=  $bundle->getConfig()["uploads"]["web"];
            }
            $file = "$folder/$img";

            return $this->imagine->filter($file, $filter);
        }
        return $this->container->get("assets.packages")->getUrl( $file);



    }

    public function getName()
    {
        return 'QbRenderImg';
    }

}