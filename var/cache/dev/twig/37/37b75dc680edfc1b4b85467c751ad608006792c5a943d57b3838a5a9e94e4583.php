<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_7f50c0327101b90ad6e36f5aa4961d1eb68e08e69f0eda4a227e346067446c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_491e93a0e254b9918a8ed823957e075efa8e6de31a6ee8315d88562614d4c411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491e93a0e254b9918a8ed823957e075efa8e6de31a6ee8315d88562614d4c411->enter($__internal_491e93a0e254b9918a8ed823957e075efa8e6de31a6ee8315d88562614d4c411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_4551fb4d57670b256ca4dbc3a561b7291f46abba75f8509c9a094c56ed58feca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4551fb4d57670b256ca4dbc3a561b7291f46abba75f8509c9a094c56ed58feca->enter($__internal_4551fb4d57670b256ca4dbc3a561b7291f46abba75f8509c9a094c56ed58feca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter((isset($context["block_attrs"]) ? $context["block_attrs"] : $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_491e93a0e254b9918a8ed823957e075efa8e6de31a6ee8315d88562614d4c411->leave($__internal_491e93a0e254b9918a8ed823957e075efa8e6de31a6ee8315d88562614d4c411_prof);

        
        $__internal_4551fb4d57670b256ca4dbc3a561b7291f46abba75f8509c9a094c56ed58feca->leave($__internal_4551fb4d57670b256ca4dbc3a561b7291f46abba75f8509c9a094c56ed58feca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
