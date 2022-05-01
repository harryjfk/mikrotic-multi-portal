<?php

/* QbaBitCoreBundle:Form/Basic:icheck.html.twig */
class __TwigTemplate_30c1135b51c9e868a7bc25694807f2cceba7298cba7aec31fa55222510ccad88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qbabit_icheck_type_widget' => array($this, 'block_qbabit_icheck_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5bc49597a02a6f315b4b3d22dcd6193347f7615337421656c329256910fcf84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5bc49597a02a6f315b4b3d22dcd6193347f7615337421656c329256910fcf84->enter($__internal_f5bc49597a02a6f315b4b3d22dcd6193347f7615337421656c329256910fcf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:icheck.html.twig"));

        $__internal_c3e170ccca87b0107d94ad6674bed73d4b059cf8c79f5fc1a1a0180d9b6d7e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e170ccca87b0107d94ad6674bed73d4b059cf8c79f5fc1a1a0180d9b6d7e53->enter($__internal_c3e170ccca87b0107d94ad6674bed73d4b059cf8c79f5fc1a1a0180d9b6d7e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:icheck.html.twig"));

        // line 1
        $this->displayBlock('qbabit_icheck_type_widget', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_f5bc49597a02a6f315b4b3d22dcd6193347f7615337421656c329256910fcf84->leave($__internal_f5bc49597a02a6f315b4b3d22dcd6193347f7615337421656c329256910fcf84_prof);

        
        $__internal_c3e170ccca87b0107d94ad6674bed73d4b059cf8c79f5fc1a1a0180d9b6d7e53->leave($__internal_c3e170ccca87b0107d94ad6674bed73d4b059cf8c79f5fc1a1a0180d9b6d7e53_prof);

    }

    // line 1
    public function block_qbabit_icheck_type_widget($context, array $blocks = array())
    {
        $__internal_8ae5abfd8a9b0e91f13fec9ae915c126e3ba3b83d744d3ebbff7982d118b3b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae5abfd8a9b0e91f13fec9ae915c126e3ba3b83d744d3ebbff7982d118b3b7f->enter($__internal_8ae5abfd8a9b0e91f13fec9ae915c126e3ba3b83d744d3ebbff7982d118b3b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_icheck_type_widget"));

        $__internal_b3df7beb165f408a1cac8afbce18b893ce2e6c247acefb952af3a274bb8ba56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3df7beb165f408a1cac8afbce18b893ce2e6c247acefb952af3a274bb8ba56a->enter($__internal_b3df7beb165f408a1cac8afbce18b893ce2e6c247acefb952af3a274bb8ba56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_icheck_type_widget"));

        // line 2
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/all.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <input ";
        // line 6
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " type=\"checkbox\"/>
    <script>

        jQuery('#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        }).trigger('click');//le pongo trigger('click') para corregir bug

    </script>

";
        
        $__internal_b3df7beb165f408a1cac8afbce18b893ce2e6c247acefb952af3a274bb8ba56a->leave($__internal_b3df7beb165f408a1cac8afbce18b893ce2e6c247acefb952af3a274bb8ba56a_prof);

        
        $__internal_8ae5abfd8a9b0e91f13fec9ae915c126e3ba3b83d744d3ebbff7982d118b3b7f->leave($__internal_8ae5abfd8a9b0e91f13fec9ae915c126e3ba3b83d744d3ebbff7982d118b3b7f_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:icheck.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  60 => 6,  56 => 5,  51 => 3,  48 => 2,  39 => 1,  28 => 17,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qbabit_icheck_type_widget %}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/icheck_type/iCheck/all.css') }}\">

    <script src=\"{{ asset('bundles/qbabitcore/forms/icheck_type/iCheck/icheck.min.js') }}\"></script>
    <input {{ block('widget_attributes') }} type=\"checkbox\"/>
    <script>

        jQuery('#{{ form.vars.id }}').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        }).trigger('click');//le pongo trigger('click') para corregir bug

    </script>

{% endblock %}

", "QbaBitCoreBundle:Form/Basic:icheck.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/icheck.html.twig");
    }
}
