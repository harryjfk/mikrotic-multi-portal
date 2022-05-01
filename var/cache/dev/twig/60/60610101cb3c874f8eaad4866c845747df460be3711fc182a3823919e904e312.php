<?php

/* ::base.html.twig */
class __TwigTemplate_34b54a6cb4dcead6d4eb5a4da135961b105944066dea4328490acd359ab63d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc6d764b44bf6c92dd56e15442b06ffad18053d463f5a1250ab01bc99267a0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6d764b44bf6c92dd56e15442b06ffad18053d463f5a1250ab01bc99267a0f5->enter($__internal_fc6d764b44bf6c92dd56e15442b06ffad18053d463f5a1250ab01bc99267a0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_151a5826f604daca84c61f17d34b3aa349e5d7652113282b29074c544fd61d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151a5826f604daca84c61f17d34b3aa349e5d7652113282b29074c544fd61d33->enter($__internal_151a5826f604daca84c61f17d34b3aa349e5d7652113282b29074c544fd61d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('metas', $context, $blocks);
        // line 6
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/drawable-mdpi-icon.png"), "html", null, true);
        echo "\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body ";
        // line 11
        $this->displayBlock('bodyclass', $context, $blocks);
        echo ">
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>";
        
        $__internal_fc6d764b44bf6c92dd56e15442b06ffad18053d463f5a1250ab01bc99267a0f5->leave($__internal_fc6d764b44bf6c92dd56e15442b06ffad18053d463f5a1250ab01bc99267a0f5_prof);

        
        $__internal_151a5826f604daca84c61f17d34b3aa349e5d7652113282b29074c544fd61d33->leave($__internal_151a5826f604daca84c61f17d34b3aa349e5d7652113282b29074c544fd61d33_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_bf88f3449d36dc789d6808ed6adce94b63e03b3d582222e96cc324b626bc25e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf88f3449d36dc789d6808ed6adce94b63e03b3d582222e96cc324b626bc25e2->enter($__internal_bf88f3449d36dc789d6808ed6adce94b63e03b3d582222e96cc324b626bc25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        $__internal_7a5f44c34c3262a953dd158d51cb0a706dd059fd741d7ba0d858f8f5cdc07ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5f44c34c3262a953dd158d51cb0a706dd059fd741d7ba0d858f8f5cdc07ab1->enter($__internal_7a5f44c34c3262a953dd158d51cb0a706dd059fd741d7ba0d858f8f5cdc07ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_7a5f44c34c3262a953dd158d51cb0a706dd059fd741d7ba0d858f8f5cdc07ab1->leave($__internal_7a5f44c34c3262a953dd158d51cb0a706dd059fd741d7ba0d858f8f5cdc07ab1_prof);

        
        $__internal_bf88f3449d36dc789d6808ed6adce94b63e03b3d582222e96cc324b626bc25e2->leave($__internal_bf88f3449d36dc789d6808ed6adce94b63e03b3d582222e96cc324b626bc25e2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b12e8d86b4be4f936f9e0c32c68ab0f3d6f0d341fff77cafc41d764781b4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b12e8d86b4be4f936f9e0c32c68ab0f3d6f0d341fff77cafc41d764781b4d4->enter($__internal_37b12e8d86b4be4f936f9e0c32c68ab0f3d6f0d341fff77cafc41d764781b4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2853b1ddec5424e9ff3df65b727108981e5e04057eaa7aa8c853656983c0d8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2853b1ddec5424e9ff3df65b727108981e5e04057eaa7aa8c853656983c0d8ec->enter($__internal_2853b1ddec5424e9ff3df65b727108981e5e04057eaa7aa8c853656983c0d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2853b1ddec5424e9ff3df65b727108981e5e04057eaa7aa8c853656983c0d8ec->leave($__internal_2853b1ddec5424e9ff3df65b727108981e5e04057eaa7aa8c853656983c0d8ec_prof);

        
        $__internal_37b12e8d86b4be4f936f9e0c32c68ab0f3d6f0d341fff77cafc41d764781b4d4->leave($__internal_37b12e8d86b4be4f936f9e0c32c68ab0f3d6f0d341fff77cafc41d764781b4d4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3acdfcdd8771524ba151ba9870aa5347809c65c77dced5c536def7d84dcc642c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acdfcdd8771524ba151ba9870aa5347809c65c77dced5c536def7d84dcc642c->enter($__internal_3acdfcdd8771524ba151ba9870aa5347809c65c77dced5c536def7d84dcc642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a985a861347dca48f582988106075754345ed41c4edace30014fb6e067598e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a985a861347dca48f582988106075754345ed41c4edace30014fb6e067598e7->enter($__internal_0a985a861347dca48f582988106075754345ed41c4edace30014fb6e067598e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a985a861347dca48f582988106075754345ed41c4edace30014fb6e067598e7->leave($__internal_0a985a861347dca48f582988106075754345ed41c4edace30014fb6e067598e7_prof);

        
        $__internal_3acdfcdd8771524ba151ba9870aa5347809c65c77dced5c536def7d84dcc642c->leave($__internal_3acdfcdd8771524ba151ba9870aa5347809c65c77dced5c536def7d84dcc642c_prof);

    }

    // line 11
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_cb0790f146e0498ef30ccd0f353f25d615028c70f0f3dff20ba4e7cc1eed14b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0790f146e0498ef30ccd0f353f25d615028c70f0f3dff20ba4e7cc1eed14b7->enter($__internal_cb0790f146e0498ef30ccd0f353f25d615028c70f0f3dff20ba4e7cc1eed14b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        $__internal_8bb5d471cb3c19f48e37726cf0cbfd105311b8a0c7321c7ac3befd57e090a934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb5d471cb3c19f48e37726cf0cbfd105311b8a0c7321c7ac3befd57e090a934->enter($__internal_8bb5d471cb3c19f48e37726cf0cbfd105311b8a0c7321c7ac3befd57e090a934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        
        $__internal_8bb5d471cb3c19f48e37726cf0cbfd105311b8a0c7321c7ac3befd57e090a934->leave($__internal_8bb5d471cb3c19f48e37726cf0cbfd105311b8a0c7321c7ac3befd57e090a934_prof);

        
        $__internal_cb0790f146e0498ef30ccd0f353f25d615028c70f0f3dff20ba4e7cc1eed14b7->leave($__internal_cb0790f146e0498ef30ccd0f353f25d615028c70f0f3dff20ba4e7cc1eed14b7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b5929298ee46aaf336541b47a08c5283bab773c73cd18e0b11eff70f13d780c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5929298ee46aaf336541b47a08c5283bab773c73cd18e0b11eff70f13d780c->enter($__internal_6b5929298ee46aaf336541b47a08c5283bab773c73cd18e0b11eff70f13d780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99b8e7ba3b8975299ca4dea8cf15818a3b9dc564defce67ec10bdbc124751f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b8e7ba3b8975299ca4dea8cf15818a3b9dc564defce67ec10bdbc124751f38->enter($__internal_99b8e7ba3b8975299ca4dea8cf15818a3b9dc564defce67ec10bdbc124751f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99b8e7ba3b8975299ca4dea8cf15818a3b9dc564defce67ec10bdbc124751f38->leave($__internal_99b8e7ba3b8975299ca4dea8cf15818a3b9dc564defce67ec10bdbc124751f38_prof);

        
        $__internal_6b5929298ee46aaf336541b47a08c5283bab773c73cd18e0b11eff70f13d780c->leave($__internal_6b5929298ee46aaf336541b47a08c5283bab773c73cd18e0b11eff70f13d780c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_236dea148729e7d7cb07ad457c067d86f7668375c47f40487130f12290f35f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236dea148729e7d7cb07ad457c067d86f7668375c47f40487130f12290f35f5e->enter($__internal_236dea148729e7d7cb07ad457c067d86f7668375c47f40487130f12290f35f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7c7948e59b4c2cd34f75666560c04a1ae8fb92257d54090dc404dd10aa8d7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c7948e59b4c2cd34f75666560c04a1ae8fb92257d54090dc404dd10aa8d7ad->enter($__internal_f7c7948e59b4c2cd34f75666560c04a1ae8fb92257d54090dc404dd10aa8d7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7c7948e59b4c2cd34f75666560c04a1ae8fb92257d54090dc404dd10aa8d7ad->leave($__internal_f7c7948e59b4c2cd34f75666560c04a1ae8fb92257d54090dc404dd10aa8d7ad_prof);

        
        $__internal_236dea148729e7d7cb07ad457c067d86f7668375c47f40487130f12290f35f5e->leave($__internal_236dea148729e7d7cb07ad457c067d86f7668375c47f40487130f12290f35f5e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 13,  142 => 12,  125 => 11,  108 => 9,  90 => 6,  73 => 5,  62 => 14,  60 => 13,  58 => 12,  54 => 11,  51 => 10,  49 => 9,  44 => 8,  39 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    {% block metas %}{% endblock %}
    <title>{% block title %}Welcome!{% endblock %}</title>
    {#<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />#}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/front/images/drawable-mdpi-icon.png') }}\" />
    {% block stylesheets %}{% endblock %}
</head>
<body {% block bodyclass %}{% endblock %}>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/var/www/app/Resources/views/base.html.twig");
    }
}
