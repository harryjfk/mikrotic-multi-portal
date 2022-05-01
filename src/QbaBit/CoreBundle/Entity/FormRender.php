<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 18/12/2016
 * Time: 22:36
 */

namespace QbaBit\CoreBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\FileUploadData;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class FormRender
{
    private $twig;
    private $template;

    public function __construct(\Twig_Environment $twig, $template)
    {
        $this->twig = $twig;
        $this->template = $template;
    }

    public function render(FormView $view)
    {
   return $this->twig->render($this->template,array('form'=>$view));
    }
}