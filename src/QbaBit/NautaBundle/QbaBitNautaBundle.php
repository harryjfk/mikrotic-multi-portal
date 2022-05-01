<?php

namespace QbaBit\NautaBundle;

use QbaBit\CoreBundle\QbaBitBaseBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class QbaBitNautaBundle extends QbaBitBaseBundle
{

 public function getCode()
    {
        return "nauta";

    }

    public function getDir()
    {
        return __DIR__;
    }


}
