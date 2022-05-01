<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79e17700e103c790b321ae627f0efd09ecda0b08cec313de740c2649b4130ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d508385c6e26eb7cd2c2d3d542cce42e2ee7ede25fcbd64a0690c0a5f3340829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d508385c6e26eb7cd2c2d3d542cce42e2ee7ede25fcbd64a0690c0a5f3340829->enter($__internal_d508385c6e26eb7cd2c2d3d542cce42e2ee7ede25fcbd64a0690c0a5f3340829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_19e649722817bcaec111f22e6d130007fcebff56fdc7f42c2cffd9d3c180ea8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e649722817bcaec111f22e6d130007fcebff56fdc7f42c2cffd9d3c180ea8d->enter($__internal_19e649722817bcaec111f22e6d130007fcebff56fdc7f42c2cffd9d3c180ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d508385c6e26eb7cd2c2d3d542cce42e2ee7ede25fcbd64a0690c0a5f3340829->leave($__internal_d508385c6e26eb7cd2c2d3d542cce42e2ee7ede25fcbd64a0690c0a5f3340829_prof);

        
        $__internal_19e649722817bcaec111f22e6d130007fcebff56fdc7f42c2cffd9d3c180ea8d->leave($__internal_19e649722817bcaec111f22e6d130007fcebff56fdc7f42c2cffd9d3c180ea8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e62478f4f470d2824b16fc13ebcb74a1784497e297ac1d3ad6126e89404f046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e62478f4f470d2824b16fc13ebcb74a1784497e297ac1d3ad6126e89404f046->enter($__internal_1e62478f4f470d2824b16fc13ebcb74a1784497e297ac1d3ad6126e89404f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab6741938c32283c1d00413688950b2d0adfcfc229eea0bc37360704a1147cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6741938c32283c1d00413688950b2d0adfcfc229eea0bc37360704a1147cb9->enter($__internal_ab6741938c32283c1d00413688950b2d0adfcfc229eea0bc37360704a1147cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab6741938c32283c1d00413688950b2d0adfcfc229eea0bc37360704a1147cb9->leave($__internal_ab6741938c32283c1d00413688950b2d0adfcfc229eea0bc37360704a1147cb9_prof);

        
        $__internal_1e62478f4f470d2824b16fc13ebcb74a1784497e297ac1d3ad6126e89404f046->leave($__internal_1e62478f4f470d2824b16fc13ebcb74a1784497e297ac1d3ad6126e89404f046_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65592b208ed3e08d1efb6e664595a7273610f5ed44c536bc3f12cd7fcca78e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65592b208ed3e08d1efb6e664595a7273610f5ed44c536bc3f12cd7fcca78e07->enter($__internal_65592b208ed3e08d1efb6e664595a7273610f5ed44c536bc3f12cd7fcca78e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_336d0b24a63d0841d317afcd7f5b8c3553f59af7a7931108b9be8af85a6b4d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336d0b24a63d0841d317afcd7f5b8c3553f59af7a7931108b9be8af85a6b4d26->enter($__internal_336d0b24a63d0841d317afcd7f5b8c3553f59af7a7931108b9be8af85a6b4d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_336d0b24a63d0841d317afcd7f5b8c3553f59af7a7931108b9be8af85a6b4d26->leave($__internal_336d0b24a63d0841d317afcd7f5b8c3553f59af7a7931108b9be8af85a6b4d26_prof);

        
        $__internal_65592b208ed3e08d1efb6e664595a7273610f5ed44c536bc3f12cd7fcca78e07->leave($__internal_65592b208ed3e08d1efb6e664595a7273610f5ed44c536bc3f12cd7fcca78e07_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_745c3a570ec079cf43af5221a3aa3ef79fd1fa6289af0b3f11609c8ff851b0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745c3a570ec079cf43af5221a3aa3ef79fd1fa6289af0b3f11609c8ff851b0c7->enter($__internal_745c3a570ec079cf43af5221a3aa3ef79fd1fa6289af0b3f11609c8ff851b0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2d7b3f48daafe5f4ba3f25d6d5dc36d0e4a3e576120c2edff4609b73fff0a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d7b3f48daafe5f4ba3f25d6d5dc36d0e4a3e576120c2edff4609b73fff0a47->enter($__internal_c2d7b3f48daafe5f4ba3f25d6d5dc36d0e4a3e576120c2edff4609b73fff0a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2d7b3f48daafe5f4ba3f25d6d5dc36d0e4a3e576120c2edff4609b73fff0a47->leave($__internal_c2d7b3f48daafe5f4ba3f25d6d5dc36d0e4a3e576120c2edff4609b73fff0a47_prof);

        
        $__internal_745c3a570ec079cf43af5221a3aa3ef79fd1fa6289af0b3f11609c8ff851b0c7->leave($__internal_745c3a570ec079cf43af5221a3aa3ef79fd1fa6289af0b3f11609c8ff851b0c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
