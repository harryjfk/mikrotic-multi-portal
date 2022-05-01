<?php

namespace QbaBit\LanguageBundle;

use QbaBit\CoreBundle\QbaBitBaseBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitLanguageBundle extends QbaBitBaseBundle
{

    public function getCode()
    {
        return "language";

    }

    public function getDir()
    {
        return __DIR__;
    }
}
