<?php

/* QbaBitCoreBundle:Form/Collections:list_view.html.twig */
class __TwigTemplate_611a81647fc6ffe797c04937d1689a85747a3b88544fd6e1a1e204a911e2f8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_list_view_type_widget' => array($this, 'block_qba_bit_list_view_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b352e13dc1e8ee5addca97b026fbf2302396048c58c26a61dc59c2662533dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b352e13dc1e8ee5addca97b026fbf2302396048c58c26a61dc59c2662533dc9->enter($__internal_8b352e13dc1e8ee5addca97b026fbf2302396048c58c26a61dc59c2662533dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:list_view.html.twig"));

        $__internal_c2d6fe5c69817a4bd8b543d803d7329346829938cde15ffaf598b63023eedaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d6fe5c69817a4bd8b543d803d7329346829938cde15ffaf598b63023eedaaa->enter($__internal_c2d6fe5c69817a4bd8b543d803d7329346829938cde15ffaf598b63023eedaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:list_view.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_list_view_type_widget', $context, $blocks);
        
        $__internal_8b352e13dc1e8ee5addca97b026fbf2302396048c58c26a61dc59c2662533dc9->leave($__internal_8b352e13dc1e8ee5addca97b026fbf2302396048c58c26a61dc59c2662533dc9_prof);

        
        $__internal_c2d6fe5c69817a4bd8b543d803d7329346829938cde15ffaf598b63023eedaaa->leave($__internal_c2d6fe5c69817a4bd8b543d803d7329346829938cde15ffaf598b63023eedaaa_prof);

    }

    public function block_qba_bit_list_view_type_widget($context, array $blocks = array())
    {
        $__internal_e34043de578f9eedbf12424049e5e805c2bdcca6218635c150463008396bd8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34043de578f9eedbf12424049e5e805c2bdcca6218635c150463008396bd8c9->enter($__internal_e34043de578f9eedbf12424049e5e805c2bdcca6218635c150463008396bd8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_list_view_type_widget"));

        $__internal_4093d0457cafe20e982d522aa73aca559feaa99d489e13dc9820622843139134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4093d0457cafe20e982d522aa73aca559feaa99d489e13dc9820622843139134->enter($__internal_4093d0457cafe20e982d522aa73aca559feaa99d489e13dc9820622843139134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_list_view_type_widget"));

        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/list_view/listView.js"), "html", null, true);
        echo "\"></script>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <select id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\" ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo "required=\"required\"";
        }
        echo " class=\"form-control\"
                     multiple=\"multiple\">

            </select>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\" style=\"text-align: right; margin-top: 5px \">
            <button class=\"btn btn-primary btn-danger\"  type=\"button\" id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_list_view_delete_btn\"><i class=\"fa fa-trash-o\"></i> </button>
        </div>
    </div>
    <script>
        var ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_control = null;
        \$(function(e){

            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_control = \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').listView();
            \$('#";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_list_view_delete_btn').on('click',function(e){
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_control.removeSelected();

            });
              ";
        // line 26
        if (((isset($context["onLoad"]) ? $context["onLoad"] : $this->getContext($context, "onLoad")) != null)) {
            // line 27
            echo "            ";
            echo (isset($context["onLoad"]) ? $context["onLoad"] : $this->getContext($context, "onLoad"));
            echo "
            ";
        }
        // line 29
        echo "        });



    </script>

";
        
        $__internal_4093d0457cafe20e982d522aa73aca559feaa99d489e13dc9820622843139134->leave($__internal_4093d0457cafe20e982d522aa73aca559feaa99d489e13dc9820622843139134_prof);

        
        $__internal_e34043de578f9eedbf12424049e5e805c2bdcca6218635c150463008396bd8c9->leave($__internal_e34043de578f9eedbf12424049e5e805c2bdcca6218635c150463008396bd8c9_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Collections:list_view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 27,  98 => 26,  92 => 23,  88 => 22,  82 => 21,  76 => 18,  69 => 14,  52 => 6,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_list_view_type_widget %}
    <script src=\"{{ asset('bundles/qbabitcore/forms/list_view/listView.js') }}\"></script>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <select id=\"{{ form.vars.id }}\" name=\"{{ form.vars.full_name }}\" {% if required %}required=\"required\"{% endif %} class=\"form-control\"
                     multiple=\"multiple\">

            </select>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\" style=\"text-align: right; margin-top: 5px \">
            <button class=\"btn btn-primary btn-danger\"  type=\"button\" id=\"{{ form.vars.id }}_list_view_delete_btn\"><i class=\"fa fa-trash-o\"></i> </button>
        </div>
    </div>
    <script>
        var {{ form.vars.id }}_control = null;
        \$(function(e){

            {{ form.vars.id }}_control = \$('#{{ form.vars.id }}').listView();
            \$('#{{ form.vars.id }}_list_view_delete_btn').on('click',function(e){
                {{ form.vars.id }}_control.removeSelected();

            });
              {% if onLoad !=null %}
            {{ onLoad|raw }}
            {% endif %}
        });



    </script>

{% endblock %}", "QbaBitCoreBundle:Form/Collections:list_view.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Collections/list_view.html.twig");
    }
}
