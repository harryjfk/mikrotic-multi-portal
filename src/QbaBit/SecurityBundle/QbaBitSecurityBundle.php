<?php

namespace QbaBit\SecurityBundle;

use QbaBit\CoreBundle\QbaBitBaseBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitSecurityBundle extends QbaBitBaseBundle
{
    public function getCode()
    {
        return "security";

    }

    public function getDir()
    {
        return __DIR__;
    }
}
