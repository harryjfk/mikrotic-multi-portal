<?php

/* QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig */
class __TwigTemplate_5f186a65bfcc3f6ad9bb0ce608a0773340e2c1ab7281ac102afc92a95eeabbc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_body' => array($this, 'block_form_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Cruds:_edit.html.twig"), "method"), "QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dcc24de96d66481485ca10afd8cc1e7b8555df12e57be7375005a9fc40b8c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dcc24de96d66481485ca10afd8cc1e7b8555df12e57be7375005a9fc40b8c74->enter($__internal_6dcc24de96d66481485ca10afd8cc1e7b8555df12e57be7375005a9fc40b8c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig"));

        $__internal_2d06a3fd5fccbd626872fd3401bb8f22df409e0dcfa6256c40c01132fa659ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d06a3fd5fccbd626872fd3401bb8f22df409e0dcfa6256c40c01132fa659ad0->enter($__internal_2d06a3fd5fccbd626872fd3401bb8f22df409e0dcfa6256c40c01132fa659ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dcc24de96d66481485ca10afd8cc1e7b8555df12e57be7375005a9fc40b8c74->leave($__internal_6dcc24de96d66481485ca10afd8cc1e7b8555df12e57be7375005a9fc40b8c74_prof);

        
        $__internal_2d06a3fd5fccbd626872fd3401bb8f22df409e0dcfa6256c40c01132fa659ad0->leave($__internal_2d06a3fd5fccbd626872fd3401bb8f22df409e0dcfa6256c40c01132fa659ad0_prof);

    }

    // line 5
    public function block_form_body($context, array $blocks = array())
    {
        $__internal_eecf3bacb076f53b8b1bf0d7f7aa76128f1f03ce5f7699b76cf676c8391e6cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecf3bacb076f53b8b1bf0d7f7aa76128f1f03ce5f7699b76cf676c8391e6cc7->enter($__internal_eecf3bacb076f53b8b1bf0d7f7aa76128f1f03ce5f7699b76cf676c8391e6cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_body"));

        $__internal_8d4f24a9fa5127acc52464ea1b5252231a0cc90aca8851f354d8f545dc9cdfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4f24a9fa5127acc52464ea1b5252231a0cc90aca8851f354d8f545dc9cdfed->enter($__internal_8d4f24a9fa5127acc52464ea1b5252231a0cc90aca8851f354d8f545dc9cdfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_body"));

        // line 6
        echo "
        <div class=\"col-xs-12\" style=\"margin-bottom: 15px\">
            <div class='row'>

                <div class='col-xs-4'>
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
                </div>
                <div class='col-xs-4'>
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "
                </div>
                <div class='col-xs-4'>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                </div>
                <div class='col-xs-6'>
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dhcp_server", array()), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dhcp_server", array()), 'widget');
        echo "
                </div>
                <div class='col-xs-6'>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "releaseType", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "releaseType", array()), 'widget');
        echo "
                </div>

                <div class='col-xs-6'>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                </div>
                <div class='col-xs-6'>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                </div>

            </div>
        </div>




    ";
        
        $__internal_8d4f24a9fa5127acc52464ea1b5252231a0cc90aca8851f354d8f545dc9cdfed->leave($__internal_8d4f24a9fa5127acc52464ea1b5252231a0cc90aca8851f354d8f545dc9cdfed_prof);

        
        $__internal_eecf3bacb076f53b8b1bf0d7f7aa76128f1f03ce5f7699b76cf676c8391e6cc7->leave($__internal_eecf3bacb076f53b8b1bf0d7f7aa76128f1f03ce5f7699b76cf676c8391e6cc7_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  116 => 36,  110 => 33,  106 => 32,  99 => 28,  95 => 27,  89 => 24,  85 => 23,  79 => 20,  75 => 19,  69 => 16,  65 => 15,  59 => 12,  55 => 11,  48 => 6,  39 => 5,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends template_helper.getRedirectedView(\"QbaBitCoreBundle:Cruds:_edit.html.twig\") %}



    {% block form_body %}

        <div class=\"col-xs-12\" style=\"margin-bottom: 15px\">
            <div class='row'>

                <div class='col-xs-4'>
                    {{ form_label(form.address) }}
                    {{ form_widget(form.address) }}
                </div>
                <div class='col-xs-4'>
                    {{ form_label(form.user) }}
                    {{ form_widget(form.user) }}
                </div>
                <div class='col-xs-4'>
                    {{ form_label(form.password) }}
                    {{ form_widget(form.password) }}
                </div>
                <div class='col-xs-6'>
                    {{ form_label(form.dhcp_server) }}
                    {{ form_widget(form.dhcp_server) }}
                </div>
                <div class='col-xs-6'>
                    {{ form_label(form.releaseType) }}
                    {{ form_widget(form.releaseType) }}
                </div>

                <div class='col-xs-6'>
                    {{ form_label(form.phone) }}
                    {{ form_widget(form.phone) }}
                </div>
                <div class='col-xs-6'>
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email) }}
                </div>

            </div>
        </div>




    {% endblock %}


", "QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Admin/NautaOptions/edit.html.twig");
    }
}
