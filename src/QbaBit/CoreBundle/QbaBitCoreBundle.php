<?php

namespace QbaBit\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitCoreBundle extends QbaBitBaseBundle
{

    public function getCode()
    {
        return "core";

    }
    public function getDir()
    {
        return __DIR__;
    }
}
