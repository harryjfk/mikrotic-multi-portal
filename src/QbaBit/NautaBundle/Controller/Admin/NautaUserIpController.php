<?php

namespace QbaBit\NautaBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QbaBit\CoreBundle\Controller\Base\QbaBitCrudController;

use QbaBit\NautaBundle\Entity\NautaUserIp;
class NautaUserIpController extends QbaBitCrudController
{


protected function getCurrentObject()
    {
        return "QbaBit\NautaBundle\Entity\NautaUserIp";
    }

    }
