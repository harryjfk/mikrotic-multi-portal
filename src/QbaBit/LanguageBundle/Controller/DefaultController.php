<?php

namespace QbaBit\LanguageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function setAction(Request $request, $lang)
    {
        $request->getSession()->set('_locale', $lang);
        //  $this->get("qbabit_core.global.config")->setPrimaryLanguage($lang);
        $request->setDefaultLocale($lang);
        $config = $this->get("qba_bit_core.global.utils")->getQbaBitModules(array("core"))->getConfig();
        $t = $config['app']['index_url'];
        return $this->redirect($this->generateUrl($t));

    }
}
