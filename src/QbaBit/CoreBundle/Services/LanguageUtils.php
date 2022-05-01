<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 18/01/18
 * Time: 14:24
 */

namespace QbaBit\CoreBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\LanguageBundle\Entity\Language;

class LanguageUtils
{
    use ServiceContainer;

    private function createLanguage($src)
    {
        $lang = new Language();
        $lang->setName(ucfirst($src));
        $lang->setEnabled(true);
        $lang->setLongcode($src . '-' . strtoupper($src));
        $lang->setShortcode($src);
        $lang->setImage(null);
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $em->persist($lang);
        $em->flush($lang);
        return $lang;
    }

    public function getPrimaryLanguage()
    {
        $system = $this->container->getParameter('locale');
        $config = $this->container->get("qba_bit_core.global.utils");
        if ($config->hasQbaBitModule('language')) {

            $value = $this->container->get("doctrine.orm.default_entity_manager")->getRepository("QbaBitLanguageBundle:Language")->findOneBy(array("shortcode" => $system));

            if ($value == null)
                return $this->createLanguage($system);
            else
                return $value;
        }

        return $system;
    }

    public function setPrimaryLanguage($src)
    {
       $parameter_file= $this->container->get("qba_bit_core.file.utils")->getParameterFile();
       $data = $this->container->get("qba_bit_core.file.utils")->getFile($parameter_file);
       $data["parameters"]["locale"] = $src;
        $this->container->get("qba_bit_core.file.utils")->setFile($parameter_file,$data);

    }


}