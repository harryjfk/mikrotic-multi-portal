<?php

namespace QbaBit\TemplateBundle;

use QbaBit\CoreBundle\QbaBitBaseBundle;
use QbaBit\CoreBundle\QbaBitCoreBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Yaml\Yaml;

class QbaBitTemplateBaseBundle extends QbaBitBaseBundle
{
    public function getType()
    {
        return "template";
    }

    public function getMenu()
    {
        return null;
    }

    public function getConfig()
    {
        $file_name = $this->getDir() . '/Resources/config/template.yml';
        $file = Yaml::parse(file_get_contents($file_name));
        $result =$file["template"];
        unset($file);
        return $result;
    }
    

}
