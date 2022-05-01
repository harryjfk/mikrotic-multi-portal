<?php

/* QbaBitCoreBundle:Form/Collections:general_collection.html.twig */
class __TwigTemplate_226b511bd3b537193787a989c061cc83f09bbaae0372c024c70668315de9e726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_general_collection_type_widget' => array($this, 'block_qba_bit_general_collection_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de4b151a447d11db1f6251f180e890460b1dd2c1d6782b3cc9c3decd1e30122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de4b151a447d11db1f6251f180e890460b1dd2c1d6782b3cc9c3decd1e30122->enter($__internal_6de4b151a447d11db1f6251f180e890460b1dd2c1d6782b3cc9c3decd1e30122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:general_collection.html.twig"));

        $__internal_dc98bd9c3f2f70953258532c5d127b3e98b9f28c1ec41c005aa686fd7d134f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc98bd9c3f2f70953258532c5d127b3e98b9f28c1ec41c005aa686fd7d134f58->enter($__internal_dc98bd9c3f2f70953258532c5d127b3e98b9f28c1ec41c005aa686fd7d134f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:general_collection.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_general_collection_type_widget', $context, $blocks);
        
        $__internal_6de4b151a447d11db1f6251f180e890460b1dd2c1d6782b3cc9c3decd1e30122->leave($__internal_6de4b151a447d11db1f6251f180e890460b1dd2c1d6782b3cc9c3decd1e30122_prof);

        
        $__internal_dc98bd9c3f2f70953258532c5d127b3e98b9f28c1ec41c005aa686fd7d134f58->leave($__internal_dc98bd9c3f2f70953258532c5d127b3e98b9f28c1ec41c005aa686fd7d134f58_prof);

    }

    public function block_qba_bit_general_collection_type_widget($context, array $blocks = array())
    {
        $__internal_a8eafbc883e464448278a8e20741b7d374a1f76134efaa3a4698c4c6222f2c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8eafbc883e464448278a8e20741b7d374a1f76134efaa3a4698c4c6222f2c76->enter($__internal_a8eafbc883e464448278a8e20741b7d374a1f76134efaa3a4698c4c6222f2c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_general_collection_type_widget"));

        $__internal_8a1b00dd68e0b9fc001a44ca7e16ea6c36301b282d25741054fc05e8ecbbd426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1b00dd68e0b9fc001a44ca7e16ea6c36301b282d25741054fc05e8ecbbd426->enter($__internal_8a1b00dd68e0b9fc001a44ca7e16ea6c36301b282d25741054fc05e8ecbbd426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_general_collection_type_widget"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("@QbaBitTemplateAdminLTE/Cruds/_embeded_form.html.twig", "QbaBitCoreBundle:Form/Collections:general_collection.html.twig", 3)->display(array_merge($context, array("doAjax" => true, "entities" => (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "OnAdd" => (isset($context["onAdd"]) ? $context["onAdd"] : $this->getContext($context, "onAdd")))));
        // line 4
        echo "
    <style>
        #gridview_";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " img {
            height: 60px;
            width: auto !important;

        }

    </style>


";
        
        $__internal_8a1b00dd68e0b9fc001a44ca7e16ea6c36301b282d25741054fc05e8ecbbd426->leave($__internal_8a1b00dd68e0b9fc001a44ca7e16ea6c36301b282d25741054fc05e8ecbbd426_prof);

        
        $__internal_a8eafbc883e464448278a8e20741b7d374a1f76134efaa3a4698c4c6222f2c76->leave($__internal_a8eafbc883e464448278a8e20741b7d374a1f76134efaa3a4698c4c6222f2c76_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Collections:general_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_general_collection_type_widget %}

    {% include '@QbaBitTemplateAdminLTE/Cruds/_embeded_form.html.twig' with{'doAjax':true,'entities':child,'OnAdd':onAdd} %}

    <style>
        #gridview_{{ form.vars.id }} img {
            height: 60px;
            width: auto !important;

        }

    </style>


{% endblock %}", "QbaBitCoreBundle:Form/Collections:general_collection.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Collections/general_collection.html.twig");
    }
}
