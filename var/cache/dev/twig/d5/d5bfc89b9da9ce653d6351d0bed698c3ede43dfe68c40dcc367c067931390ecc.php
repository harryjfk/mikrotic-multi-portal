<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b1e30d25c20c17cd61d9ea210d4d16c01f747b00c6bbf490db6854d0dd1bfe1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_b0412293fdf0388a95ef1e2a1a4f7af5d230b82184044fb196230ac3035743e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0412293fdf0388a95ef1e2a1a4f7af5d230b82184044fb196230ac3035743e3->enter($__internal_b0412293fdf0388a95ef1e2a1a4f7af5d230b82184044fb196230ac3035743e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e3ebc6ebcb27ac51035668f649b176420c48be29eeaddddf5b85e9983b1edb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ebc6ebcb27ac51035668f649b176420c48be29eeaddddf5b85e9983b1edb36->enter($__internal_e3ebc6ebcb27ac51035668f649b176420c48be29eeaddddf5b85e9983b1edb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0412293fdf0388a95ef1e2a1a4f7af5d230b82184044fb196230ac3035743e3->leave($__internal_b0412293fdf0388a95ef1e2a1a4f7af5d230b82184044fb196230ac3035743e3_prof);

        
        $__internal_e3ebc6ebcb27ac51035668f649b176420c48be29eeaddddf5b85e9983b1edb36->leave($__internal_e3ebc6ebcb27ac51035668f649b176420c48be29eeaddddf5b85e9983b1edb36_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8808bd441acf7a0c776ba6521f166e5074830f193fbbbfdd2fd919eea578744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8808bd441acf7a0c776ba6521f166e5074830f193fbbbfdd2fd919eea578744->enter($__internal_a8808bd441acf7a0c776ba6521f166e5074830f193fbbbfdd2fd919eea578744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9da7efb4cad78b7ca8c6908518b56dc4078a8c0a08358eee7b875b339395586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da7efb4cad78b7ca8c6908518b56dc4078a8c0a08358eee7b875b339395586d->enter($__internal_9da7efb4cad78b7ca8c6908518b56dc4078a8c0a08358eee7b875b339395586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9da7efb4cad78b7ca8c6908518b56dc4078a8c0a08358eee7b875b339395586d->leave($__internal_9da7efb4cad78b7ca8c6908518b56dc4078a8c0a08358eee7b875b339395586d_prof);

        
        $__internal_a8808bd441acf7a0c776ba6521f166e5074830f193fbbbfdd2fd919eea578744->leave($__internal_a8808bd441acf7a0c776ba6521f166e5074830f193fbbbfdd2fd919eea578744_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
