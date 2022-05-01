<?php

namespace QbaBit\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        return $this->render('QbaBitTemplateBundle:Default:index.html.twig');
    }
}
