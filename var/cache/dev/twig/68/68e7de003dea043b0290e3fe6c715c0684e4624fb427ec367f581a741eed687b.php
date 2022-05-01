<?php

/* QbaBitCoreBundle:Form/Basic:button.html.twig */
class __TwigTemplate_f1364cdca5df7c6310f61edb2d4243e83d4fb50efea506e28065273ec599e0eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_button_type_widget' => array($this, 'block_qba_bit_button_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c03bdf0a542e7aa256a0aec64dd885b7ecaa85344dc23c28d5a4d7350bd1cab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03bdf0a542e7aa256a0aec64dd885b7ecaa85344dc23c28d5a4d7350bd1cab2->enter($__internal_c03bdf0a542e7aa256a0aec64dd885b7ecaa85344dc23c28d5a4d7350bd1cab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:button.html.twig"));

        $__internal_c92b09a0868edfa47fc08a8ea9c102b046c0d8e69b38dc799beca30731b2082d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92b09a0868edfa47fc08a8ea9c102b046c0d8e69b38dc799beca30731b2082d->enter($__internal_c92b09a0868edfa47fc08a8ea9c102b046c0d8e69b38dc799beca30731b2082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:button.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_button_type_widget', $context, $blocks);
        // line 8
        echo "
";
        
        $__internal_c03bdf0a542e7aa256a0aec64dd885b7ecaa85344dc23c28d5a4d7350bd1cab2->leave($__internal_c03bdf0a542e7aa256a0aec64dd885b7ecaa85344dc23c28d5a4d7350bd1cab2_prof);

        
        $__internal_c92b09a0868edfa47fc08a8ea9c102b046c0d8e69b38dc799beca30731b2082d->leave($__internal_c92b09a0868edfa47fc08a8ea9c102b046c0d8e69b38dc799beca30731b2082d_prof);

    }

    // line 1
    public function block_qba_bit_button_type_widget($context, array $blocks = array())
    {
        $__internal_deca50e442d0f6df3f22cc88db653011360797654de23c208a0b0ecb9fd718ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deca50e442d0f6df3f22cc88db653011360797654de23c208a0b0ecb9fd718ec->enter($__internal_deca50e442d0f6df3f22cc88db653011360797654de23c208a0b0ecb9fd718ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_button_type_widget"));

        $__internal_49a1f59470ee78390a9b58683426183a95ff6398cfa7a93725f7443c3203d7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a1f59470ee78390a9b58683426183a95ff6398cfa7a93725f7443c3203d7fc->enter($__internal_49a1f59470ee78390a9b58683426183a95ff6398cfa7a93725f7443c3203d7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_button_type_widget"));

        // line 2
        echo "
    <button type=\"submit\" class=\"btn btn-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "html", null, true);
        echo "\">
        <i class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["iconClass"]) ? $context["iconClass"] : $this->getContext($context, "iconClass")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption")), "html", null, true);
        echo "</i>
    </button>

";
        
        $__internal_49a1f59470ee78390a9b58683426183a95ff6398cfa7a93725f7443c3203d7fc->leave($__internal_49a1f59470ee78390a9b58683426183a95ff6398cfa7a93725f7443c3203d7fc_prof);

        
        $__internal_deca50e442d0f6df3f22cc88db653011360797654de23c208a0b0ecb9fd718ec->leave($__internal_deca50e442d0f6df3f22cc88db653011360797654de23c208a0b0ecb9fd718ec_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:button.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  51 => 3,  48 => 2,  39 => 1,  28 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_button_type_widget %}

    <button type=\"submit\" class=\"btn btn-{{ buttonType }}\">
        <i class=\"{{ iconClass }}\">{{ caption }}</i>
    </button>

{% endblock %}

", "QbaBitCoreBundle:Form/Basic:button.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/button.html.twig");
    }
}
