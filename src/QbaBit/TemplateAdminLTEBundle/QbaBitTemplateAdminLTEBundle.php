<?php

namespace QbaBit\TemplateAdminLTEBundle;

use QbaBit\TemplateBundle\QbaBitTemplateBaseBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitTemplateAdminLTEBundle extends QbaBitTemplateBaseBundle
{
    public function getCode()
    {
        return "admin_lte_template";
    }
    public function getDir()
    {
        return __DIR__;

    }
}
