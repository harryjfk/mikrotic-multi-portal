<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8777447525cf28e7ab12917f096de278da1a6fee38931a88deb3119370bfa7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0b3b22f2c4ffb20609204e1fd9190fa0f48cac46e4b2b255d6a5abfde845d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b3b22f2c4ffb20609204e1fd9190fa0f48cac46e4b2b255d6a5abfde845d67->enter($__internal_c0b3b22f2c4ffb20609204e1fd9190fa0f48cac46e4b2b255d6a5abfde845d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e64478e13172dfcf90912e257be97cc5acc0c6dd528d4885afc1b5fc8359f866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64478e13172dfcf90912e257be97cc5acc0c6dd528d4885afc1b5fc8359f866->enter($__internal_e64478e13172dfcf90912e257be97cc5acc0c6dd528d4885afc1b5fc8359f866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b3b22f2c4ffb20609204e1fd9190fa0f48cac46e4b2b255d6a5abfde845d67->leave($__internal_c0b3b22f2c4ffb20609204e1fd9190fa0f48cac46e4b2b255d6a5abfde845d67_prof);

        
        $__internal_e64478e13172dfcf90912e257be97cc5acc0c6dd528d4885afc1b5fc8359f866->leave($__internal_e64478e13172dfcf90912e257be97cc5acc0c6dd528d4885afc1b5fc8359f866_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bc879bb1bfd242fc47e43139dbd68955a120d43eb022a14613475c3f3bd993b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc879bb1bfd242fc47e43139dbd68955a120d43eb022a14613475c3f3bd993b->enter($__internal_9bc879bb1bfd242fc47e43139dbd68955a120d43eb022a14613475c3f3bd993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0554e94dcc90e3b5bddba21af83197e2698894a1735158b6f8eb17e8a6c03640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0554e94dcc90e3b5bddba21af83197e2698894a1735158b6f8eb17e8a6c03640->enter($__internal_0554e94dcc90e3b5bddba21af83197e2698894a1735158b6f8eb17e8a6c03640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0554e94dcc90e3b5bddba21af83197e2698894a1735158b6f8eb17e8a6c03640->leave($__internal_0554e94dcc90e3b5bddba21af83197e2698894a1735158b6f8eb17e8a6c03640_prof);

        
        $__internal_9bc879bb1bfd242fc47e43139dbd68955a120d43eb022a14613475c3f3bd993b->leave($__internal_9bc879bb1bfd242fc47e43139dbd68955a120d43eb022a14613475c3f3bd993b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b18fdd0595386958dcc162ddedacc8acbd27292a06f6eef51b83e19e75e0a7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18fdd0595386958dcc162ddedacc8acbd27292a06f6eef51b83e19e75e0a7e5->enter($__internal_b18fdd0595386958dcc162ddedacc8acbd27292a06f6eef51b83e19e75e0a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2881b073784f778257bbb94ea98cf87528d9b659ce699f49af90b713175e0c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2881b073784f778257bbb94ea98cf87528d9b659ce699f49af90b713175e0c2d->enter($__internal_2881b073784f778257bbb94ea98cf87528d9b659ce699f49af90b713175e0c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2881b073784f778257bbb94ea98cf87528d9b659ce699f49af90b713175e0c2d->leave($__internal_2881b073784f778257bbb94ea98cf87528d9b659ce699f49af90b713175e0c2d_prof);

        
        $__internal_b18fdd0595386958dcc162ddedacc8acbd27292a06f6eef51b83e19e75e0a7e5->leave($__internal_b18fdd0595386958dcc162ddedacc8acbd27292a06f6eef51b83e19e75e0a7e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b040a44803bdc957c2b87b85e3d112ad3fa3759b7ab4e9ea19c2bd08ee1b62e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b040a44803bdc957c2b87b85e3d112ad3fa3759b7ab4e9ea19c2bd08ee1b62e3->enter($__internal_b040a44803bdc957c2b87b85e3d112ad3fa3759b7ab4e9ea19c2bd08ee1b62e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb156708c9d9eb0169231af727998161c96d959a7d3e8c4a535c6a855d41c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb156708c9d9eb0169231af727998161c96d959a7d3e8c4a535c6a855d41c39->enter($__internal_4fb156708c9d9eb0169231af727998161c96d959a7d3e8c4a535c6a855d41c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4fb156708c9d9eb0169231af727998161c96d959a7d3e8c4a535c6a855d41c39->leave($__internal_4fb156708c9d9eb0169231af727998161c96d959a7d3e8c4a535c6a855d41c39_prof);

        
        $__internal_b040a44803bdc957c2b87b85e3d112ad3fa3759b7ab4e9ea19c2bd08ee1b62e3->leave($__internal_b040a44803bdc957c2b87b85e3d112ad3fa3759b7ab4e9ea19c2bd08ee1b62e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
