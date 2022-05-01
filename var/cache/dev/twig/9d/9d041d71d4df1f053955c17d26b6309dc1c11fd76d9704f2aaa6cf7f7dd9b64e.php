<?php

/* QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig */
class __TwigTemplate_dafa8e8eed20d73a1d8212c709eb8a68e2ceed9c87f11d7b6dd1a14db0dece42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_filtered_entity_type_widget' => array($this, 'block_qba_bit_filtered_entity_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5f904cc49c3e4424acc473dec2bb713e3fed66b3fc4007bcfa1d1a16bc9b714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f904cc49c3e4424acc473dec2bb713e3fed66b3fc4007bcfa1d1a16bc9b714->enter($__internal_e5f904cc49c3e4424acc473dec2bb713e3fed66b3fc4007bcfa1d1a16bc9b714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig"));

        $__internal_8e176e7d49fd07477dbeabe1b94ab2a553a578adbba7a66570e556f232e55e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e176e7d49fd07477dbeabe1b94ab2a553a578adbba7a66570e556f232e55e3f->enter($__internal_8e176e7d49fd07477dbeabe1b94ab2a553a578adbba7a66570e556f232e55e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_filtered_entity_type_widget', $context, $blocks);
        // line 26
        echo "

";
        
        $__internal_e5f904cc49c3e4424acc473dec2bb713e3fed66b3fc4007bcfa1d1a16bc9b714->leave($__internal_e5f904cc49c3e4424acc473dec2bb713e3fed66b3fc4007bcfa1d1a16bc9b714_prof);

        
        $__internal_8e176e7d49fd07477dbeabe1b94ab2a553a578adbba7a66570e556f232e55e3f->leave($__internal_8e176e7d49fd07477dbeabe1b94ab2a553a578adbba7a66570e556f232e55e3f_prof);

    }

    // line 1
    public function block_qba_bit_filtered_entity_type_widget($context, array $blocks = array())
    {
        $__internal_31b7eb02cd88c1ce87d088c566a20f20d42289430ea5bcaa2c7e9b0b9126a85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b7eb02cd88c1ce87d088c566a20f20d42289430ea5bcaa2c7e9b0b9126a85b->enter($__internal_31b7eb02cd88c1ce87d088c566a20f20d42289430ea5bcaa2c7e9b0b9126a85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_filtered_entity_type_widget"));

        $__internal_9fae5217259d4d91bea933c7b83c3e5752e920a3a74fe7989ca976b32c7ae7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fae5217259d4d91bea933c7b83c3e5752e920a3a74fe7989ca976b32c7ae7ec->enter($__internal_9fae5217259d4d91bea933c7b83c3e5752e920a3a74fe7989ca976b32c7ae7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_filtered_entity_type_widget"));

        // line 2
        echo "    ";
        $this->loadTemplate("QbaBitCoreBundle:Form/Collections/includes:_base_entity_list.html.twig", "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig", 2)->display(array_merge($context, array("show" => true)));
        // line 3
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/filtered_entity/select2.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/filtered_entity/select2.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {
            var data = null;
            var options = \$('#";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " option');
            for (var i = 0; i < options.length; i++)
                if (\$(options[i]).html() == '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "') {
                    data = \$(options[i]).attr(\"value\");
                    break;
                }

            var control_";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " = \$(\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\").select2();
            control_";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo ".val(data).trigger(\"change\");
        });


    </script>
";
        
        $__internal_9fae5217259d4d91bea933c7b83c3e5752e920a3a74fe7989ca976b32c7ae7ec->leave($__internal_9fae5217259d4d91bea933c7b83c3e5752e920a3a74fe7989ca976b32c7ae7ec_prof);

        
        $__internal_31b7eb02cd88c1ce87d088c566a20f20d42289430ea5bcaa2c7e9b0b9126a85b->leave($__internal_31b7eb02cd88c1ce87d088c566a20f20d42289430ea5bcaa2c7e9b0b9126a85b_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 19,  74 => 14,  69 => 12,  61 => 7,  56 => 5,  52 => 3,  49 => 2,  40 => 1,  28 => 26,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_filtered_entity_type_widget %}
    {% include 'QbaBitCoreBundle:Form/Collections/includes:_base_entity_list.html.twig' with {show:true} %}


    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/filtered_entity/select2.css') }}\">

    <script src=\"{{ asset('bundles/qbabitcore/forms/filtered_entity/select2.js') }}\"></script>

    <script>
        \$(function () {
            var data = null;
            var options = \$('#{{ form.vars.id }} option');
            for (var i = 0; i < options.length; i++)
                if (\$(options[i]).html() == '{{ data|trans }}') {
                    data = \$(options[i]).attr(\"value\");
                    break;
                }

            var control_{{ form.vars.id }} = \$(\"#{{ form.vars.id }}\").select2();
            control_{{ form.vars.id }}.val(data).trigger(\"change\");
        });


    </script>
{% endblock %}


", "QbaBitCoreBundle:Form/Collections:filtered_entity.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Collections/filtered_entity.html.twig");
    }
}
