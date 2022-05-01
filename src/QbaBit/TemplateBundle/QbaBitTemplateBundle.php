<?php

namespace QbaBit\TemplateBundle;

use QbaBit\CoreBundle\QbaBitBaseBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitTemplateBundle extends QbaBitBaseBundle
{
    public function getCode()
    {
        return "template";
    }


    public function getDir()
    {
       return __DIR__;
    }
}
