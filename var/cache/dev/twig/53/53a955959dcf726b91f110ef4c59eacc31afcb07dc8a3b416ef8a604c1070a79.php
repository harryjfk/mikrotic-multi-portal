<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_40cceef224a77c9383675240b9ca782ebecaeb07f7bb7235c0c457f01869b986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c23920e0c2408c9a874c04686bc53de75a6ab8f93902201426fc145f97977aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23920e0c2408c9a874c04686bc53de75a6ab8f93902201426fc145f97977aac->enter($__internal_c23920e0c2408c9a874c04686bc53de75a6ab8f93902201426fc145f97977aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bf9834d8700e4278dd33a7bb4227611238f50c8a26c691b5f5060beb3f0de695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9834d8700e4278dd33a7bb4227611238f50c8a26c691b5f5060beb3f0de695->enter($__internal_bf9834d8700e4278dd33a7bb4227611238f50c8a26c691b5f5060beb3f0de695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c23920e0c2408c9a874c04686bc53de75a6ab8f93902201426fc145f97977aac->leave($__internal_c23920e0c2408c9a874c04686bc53de75a6ab8f93902201426fc145f97977aac_prof);

        
        $__internal_bf9834d8700e4278dd33a7bb4227611238f50c8a26c691b5f5060beb3f0de695->leave($__internal_bf9834d8700e4278dd33a7bb4227611238f50c8a26c691b5f5060beb3f0de695_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b0af4fa45ce0d7838956f20a2c278f354cf8dcf8a25ff2978c05750ac953778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0af4fa45ce0d7838956f20a2c278f354cf8dcf8a25ff2978c05750ac953778->enter($__internal_0b0af4fa45ce0d7838956f20a2c278f354cf8dcf8a25ff2978c05750ac953778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c05426729144276cc8e08b0edd5e0898f24d3a67bb155db3525e9601b934030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c05426729144276cc8e08b0edd5e0898f24d3a67bb155db3525e9601b934030->enter($__internal_4c05426729144276cc8e08b0edd5e0898f24d3a67bb155db3525e9601b934030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c05426729144276cc8e08b0edd5e0898f24d3a67bb155db3525e9601b934030->leave($__internal_4c05426729144276cc8e08b0edd5e0898f24d3a67bb155db3525e9601b934030_prof);

        
        $__internal_0b0af4fa45ce0d7838956f20a2c278f354cf8dcf8a25ff2978c05750ac953778->leave($__internal_0b0af4fa45ce0d7838956f20a2c278f354cf8dcf8a25ff2978c05750ac953778_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22991838be95db2e8284ec4a709af9c97bff9aca7779a94a4ff5311d9678f1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22991838be95db2e8284ec4a709af9c97bff9aca7779a94a4ff5311d9678f1e3->enter($__internal_22991838be95db2e8284ec4a709af9c97bff9aca7779a94a4ff5311d9678f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_17dc70350b3a7869132919112fc2d280665a1668703c22d42dc81b09d062a091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dc70350b3a7869132919112fc2d280665a1668703c22d42dc81b09d062a091->enter($__internal_17dc70350b3a7869132919112fc2d280665a1668703c22d42dc81b09d062a091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_17dc70350b3a7869132919112fc2d280665a1668703c22d42dc81b09d062a091->leave($__internal_17dc70350b3a7869132919112fc2d280665a1668703c22d42dc81b09d062a091_prof);

        
        $__internal_22991838be95db2e8284ec4a709af9c97bff9aca7779a94a4ff5311d9678f1e3->leave($__internal_22991838be95db2e8284ec4a709af9c97bff9aca7779a94a4ff5311d9678f1e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d71919906aadd9028aec27652fc662e0621cf8054fddc60dbc377b142bed6e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71919906aadd9028aec27652fc662e0621cf8054fddc60dbc377b142bed6e45->enter($__internal_d71919906aadd9028aec27652fc662e0621cf8054fddc60dbc377b142bed6e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2245cdd944a81f46a3113eb5e6afe12573245ee85ee1b2d80f90a20e8831860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2245cdd944a81f46a3113eb5e6afe12573245ee85ee1b2d80f90a20e8831860->enter($__internal_f2245cdd944a81f46a3113eb5e6afe12573245ee85ee1b2d80f90a20e8831860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f2245cdd944a81f46a3113eb5e6afe12573245ee85ee1b2d80f90a20e8831860->leave($__internal_f2245cdd944a81f46a3113eb5e6afe12573245ee85ee1b2d80f90a20e8831860_prof);

        
        $__internal_d71919906aadd9028aec27652fc662e0621cf8054fddc60dbc377b142bed6e45->leave($__internal_d71919906aadd9028aec27652fc662e0621cf8054fddc60dbc377b142bed6e45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
