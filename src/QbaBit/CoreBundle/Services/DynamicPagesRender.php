<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 18/06/2017
 * Time: 21:08
 */

namespace QbaBit\CoreBundle\Services;



use QbaBit\CoreBundle\Entity\DynamicTemplate\DynamicPageTemplate;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DynamicPagesRender
{
    use ServiceContainer;

    private function getInnerParams()
    {
        $url = $this->container->get('qba_bit_core.global.utils')->getQbaBitModules(array('core'))->getConfig()["routing"]["url"];
        $t = explode('/', $url);
        $base = "";
        if (strtolower($t[0]) == 'http:')
            $base = 'http://' . $t[2];
        else
            $base = 'http://' . $t[0];

        return array('server_base' => $base, 'server_web' => $url);
    }

    private function innerRender($html, $params)
    {

        $temp = $html;
        foreach ($params as $key => $v)
            if (strpos($temp, $key) !== false)
                $temp = str_replace('[' . $key . ']', $v, $temp);
        return $temp;

    }

    private function getParams(DynamicPageTemplate $src_template, $params = null)
    {

        $result = $this->getInnerParams();
        foreach ($src_template->getVarChilds() as $child)
            if ($child->getDefinition() == 'inline') {
                if (array_key_exists($child->getName(), $params))
                    $result[$child->getName()] = $params[$child->getName()];
                //throw new \Exception($this->container->get('translator')->trans('qbabit.admin.mail.exception.variable_not_defined', array('%s%' => $child->getName())));

            } else {
                $return = "";
                $definition = $child->getDefinition();
                if (strpos($definition, '$object') !== false)
                    $definition = str_replace('$object', '$params["object"]', $definition);

                eval($definition);
                if (is_array($return)) {
                    if (count($return) > 0)
                        $result[$child->getName()] = $return;
                } else
                    $result[$child->getName()] = $return;

            }
        return $result;
    }

    private function getBasicTemplate($repository, $module)
    {
        $basic_template = $this->container->get('qba_bit_core.global.utils')->getQbaBitModules(array($module))->getConfig()['basic_template'];
        return $this->container->get("doctrine.orm.default_entity_manager")->getRepository($repository)->findOneBy(array('code' => $basic_template, 'category' => 1));

    }


    public function render(DynamicPageTemplate $src_template, $orig_params = null, $isTemplate = false, $repository = null, $module = null)
    {

        $params = $this->getParams($src_template, $orig_params);
        $html = $this->innerRender($src_template->getBody(), $params);
        if ($isTemplate == false) {
            $template = $this->getBasicTemplate($repository, $module);

            $params['content'] = $html;
            return $this->render($template, $params, true);

        }
        return $html;
    }

    public function renderUrl($url, $params)
    {
        $t = (new RedirectResponse($url, 302))->getContent();
        if (strpos($t, "html") !== false)
            $t = "<iframe>" . $t . "</iframe>";
        return $t;
    }
}