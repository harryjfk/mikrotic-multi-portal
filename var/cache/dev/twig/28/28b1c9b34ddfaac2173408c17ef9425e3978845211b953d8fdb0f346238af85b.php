<?php

/* QbaBitCoreBundle:Form/Basic:switch_check.html.twig */
class __TwigTemplate_a92f45321b4cc25eabdeda3823f6a448594868a4aee0f6edc93b61abf5c45f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qbabit_switch_check_widget' => array($this, 'block_qbabit_switch_check_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e72e3bc5f144d966d99255c6b7ba55dbacf16364a6ee5383b2082b26bafddee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e3bc5f144d966d99255c6b7ba55dbacf16364a6ee5383b2082b26bafddee3->enter($__internal_e72e3bc5f144d966d99255c6b7ba55dbacf16364a6ee5383b2082b26bafddee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:switch_check.html.twig"));

        $__internal_f7a9b32fa6af0ad8d90d64dea4f1674454c0ab2abd0e29d984323dfb724057fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a9b32fa6af0ad8d90d64dea4f1674454c0ab2abd0e29d984323dfb724057fd->enter($__internal_f7a9b32fa6af0ad8d90d64dea4f1674454c0ab2abd0e29d984323dfb724057fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:switch_check.html.twig"));

        // line 1
        $this->displayBlock('qbabit_switch_check_widget', $context, $blocks);
        // line 27
        echo "
";
        
        $__internal_e72e3bc5f144d966d99255c6b7ba55dbacf16364a6ee5383b2082b26bafddee3->leave($__internal_e72e3bc5f144d966d99255c6b7ba55dbacf16364a6ee5383b2082b26bafddee3_prof);

        
        $__internal_f7a9b32fa6af0ad8d90d64dea4f1674454c0ab2abd0e29d984323dfb724057fd->leave($__internal_f7a9b32fa6af0ad8d90d64dea4f1674454c0ab2abd0e29d984323dfb724057fd_prof);

    }

    // line 1
    public function block_qbabit_switch_check_widget($context, array $blocks = array())
    {
        $__internal_2f8e7c7dd5d732027e71960513d2283af2e584cb6baac2c4f66039fffa612f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8e7c7dd5d732027e71960513d2283af2e584cb6baac2c4f66039fffa612f9d->enter($__internal_2f8e7c7dd5d732027e71960513d2283af2e584cb6baac2c4f66039fffa612f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_switch_check_widget"));

        $__internal_e70078209707f086726b63115b34b7b743336a991653354183654f1eb9f91341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70078209707f086726b63115b34b7b743336a991653354183654f1eb9f91341->enter($__internal_e70078209707f086726b63115b34b7b743336a991653354183654f1eb9f91341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_switch_check_widget"));

        // line 2
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/switch_check_type/switch.css"), "html", null, true);
        echo "\">

    <div class=\"switch \" style=\"width: 100%\">
        <input id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_src\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_src\" type=\"checkbox\"/>
        <label for=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_src\"></label>
    </div>
    <select ";
        // line 9
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " style=\"display: none\">
        <option value=\"1\" ";
        // line 10
        if (((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) == true)) {
            echo " selected=\"selected\"";
        }
        echo " >1</option>
        <option value=\"0\" ";
        // line 11
        if (((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) == false)) {
            echo " selected=\"selected\"";
        }
        echo ">0</option>
    </select>

    <script>
        \$('#";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_src').on('change', function (e) {
            on";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_change(e);
        });
        ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()) != null)) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "_src.checked = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "html", null, true);
            echo ";
        ";
        }
        // line 21
        echo "
        function on";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_change(e) {
            \$(\"#";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\").val(e.target.checked ? 1 : 0);
        }
    </script>
";
        
        $__internal_e70078209707f086726b63115b34b7b743336a991653354183654f1eb9f91341->leave($__internal_e70078209707f086726b63115b34b7b743336a991653354183654f1eb9f91341_prof);

        
        $__internal_2f8e7c7dd5d732027e71960513d2283af2e584cb6baac2c4f66039fffa612f9d->leave($__internal_2f8e7c7dd5d732027e71960513d2283af2e584cb6baac2c4f66039fffa612f9d_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:switch_check.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  109 => 22,  106 => 21,  98 => 19,  96 => 18,  91 => 16,  87 => 15,  78 => 11,  72 => 10,  68 => 9,  63 => 7,  57 => 6,  51 => 3,  48 => 2,  39 => 1,  28 => 27,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qbabit_switch_check_widget %}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/switch_check_type/switch.css') }}\">

    <div class=\"switch \" style=\"width: 100%\">
        <input id=\"{{ form.vars.id }}_src\" name=\"{{ form.vars.id }}_src\" type=\"checkbox\"/>
        <label for=\"{{ form.vars.id }}_src\"></label>
    </div>
    <select {{ block('widget_attributes') }} style=\"display: none\">
        <option value=\"1\" {% if data==true %} selected=\"selected\"{% endif %} >1</option>
        <option value=\"0\" {% if data==false %} selected=\"selected\"{% endif %}>0</option>
    </select>

    <script>
        \$('#{{ form.vars.id }}_src').on('change', function (e) {
            on{{ form.vars.id }}_change(e);
        });
        {% if form.vars.data!=null %}
        {{ form.vars.id }}_src.checked = {{ form.vars.data }};
        {% endif %}

        function on{{ form.vars.id }}_change(e) {
            \$(\"#{{ form.vars.id }}\").val(e.target.checked ? 1 : 0);
        }
    </script>
{% endblock %}

", "QbaBitCoreBundle:Form/Basic:switch_check.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/switch_check.html.twig");
    }
}
