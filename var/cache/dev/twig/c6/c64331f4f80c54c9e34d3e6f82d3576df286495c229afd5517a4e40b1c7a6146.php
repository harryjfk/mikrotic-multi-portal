<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_c85dc4a865c959262c178b6942ec0783c8ed6bf0de50d75b565dbc752e3c8149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d14016cf350692f2d3d4e07c3dd0c2a38bd54435f0e75cfbcea8cc56b320dd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14016cf350692f2d3d4e07c3dd0c2a38bd54435f0e75cfbcea8cc56b320dd4b->enter($__internal_d14016cf350692f2d3d4e07c3dd0c2a38bd54435f0e75cfbcea8cc56b320dd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_e4ab4b9c095bbe1d2da5abcef0e913c3f3f67ccf17fd9d765948309cc84609e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ab4b9c095bbe1d2da5abcef0e913c3f3f67ccf17fd9d765948309cc84609e1->enter($__internal_e4ab4b9c095bbe1d2da5abcef0e913c3f3f67ccf17fd9d765948309cc84609e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d14016cf350692f2d3d4e07c3dd0c2a38bd54435f0e75cfbcea8cc56b320dd4b->leave($__internal_d14016cf350692f2d3d4e07c3dd0c2a38bd54435f0e75cfbcea8cc56b320dd4b_prof);

        
        $__internal_e4ab4b9c095bbe1d2da5abcef0e913c3f3f67ccf17fd9d765948309cc84609e1->leave($__internal_e4ab4b9c095bbe1d2da5abcef0e913c3f3f67ccf17fd9d765948309cc84609e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95dfaff9d4967aaa6c2377e478a75870c13bbe8327f0930a7d7cb4b8c432b204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dfaff9d4967aaa6c2377e478a75870c13bbe8327f0930a7d7cb4b8c432b204->enter($__internal_95dfaff9d4967aaa6c2377e478a75870c13bbe8327f0930a7d7cb4b8c432b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e60530433a552ae462a1d5d907f76343a5f47b69f7daa2103ebcd7cbd5b2f7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60530433a552ae462a1d5d907f76343a5f47b69f7daa2103ebcd7cbd5b2f7ea->enter($__internal_e60530433a552ae462a1d5d907f76343a5f47b69f7daa2103ebcd7cbd5b2f7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "name" => "time", "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_e60530433a552ae462a1d5d907f76343a5f47b69f7daa2103ebcd7cbd5b2f7ea->leave($__internal_e60530433a552ae462a1d5d907f76343a5f47b69f7daa2103ebcd7cbd5b2f7ea_prof);

        
        $__internal_95dfaff9d4967aaa6c2377e478a75870c13bbe8327f0930a7d7cb4b8c432b204->leave($__internal_95dfaff9d4967aaa6c2377e478a75870c13bbe8327f0930a7d7cb4b8c432b204_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
