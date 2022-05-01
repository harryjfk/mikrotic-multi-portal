<?php

/* QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig */
class __TwigTemplate_af52f97df7615aa26ed869a00f12418b7148191afd0ca4f49493d8fa5703408e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Layout:_ajax.html.twig"), "method")) : ($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Layout:_layout.html.twig"), "method"))), "QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b01dc55fa2facefc690ce3b4e5b45abe0c5b1519eaf70faaef76948f384349d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b01dc55fa2facefc690ce3b4e5b45abe0c5b1519eaf70faaef76948f384349d->enter($__internal_9b01dc55fa2facefc690ce3b4e5b45abe0c5b1519eaf70faaef76948f384349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig"));

        $__internal_956c350d917344c10c3aa7ff53fc39fd78a2b6b7796b70d782aeff8b5ed4e7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956c350d917344c10c3aa7ff53fc39fd78a2b6b7796b70d782aeff8b5ed4e7ea->enter($__internal_956c350d917344c10c3aa7ff53fc39fd78a2b6b7796b70d782aeff8b5ed4e7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b01dc55fa2facefc690ce3b4e5b45abe0c5b1519eaf70faaef76948f384349d->leave($__internal_9b01dc55fa2facefc690ce3b4e5b45abe0c5b1519eaf70faaef76948f384349d_prof);

        
        $__internal_956c350d917344c10c3aa7ff53fc39fd78a2b6b7796b70d782aeff8b5ed4e7ea->leave($__internal_956c350d917344c10c3aa7ff53fc39fd78a2b6b7796b70d782aeff8b5ed4e7ea_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? template_helper.getRedirectedView(\"QbaBitCoreBundle:Layout:_ajax.html.twig\")  :  template_helper.getRedirectedView(\"QbaBitCoreBundle:Layout:_layout.html.twig\") %}
", "QbaBitTemplateAdminLTEBundle:Layout:layout.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Layout/layout.html.twig");
    }
}
