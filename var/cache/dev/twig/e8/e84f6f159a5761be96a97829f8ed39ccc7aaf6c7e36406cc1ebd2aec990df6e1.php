<?php

/* QbaBitCoreBundle:Form/Basic:html_control.html.twig */
class __TwigTemplate_f42b0ef8b955b20decec7726b4d1b4c9c15e28127ac5f349768aff4c85280e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_html_control_widget' => array($this, 'block_qba_bit_html_control_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f19a2d04fa7cdd826c5006a9230716bf5039e61d2df28db6b73bb52816eaf184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19a2d04fa7cdd826c5006a9230716bf5039e61d2df28db6b73bb52816eaf184->enter($__internal_f19a2d04fa7cdd826c5006a9230716bf5039e61d2df28db6b73bb52816eaf184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:html_control.html.twig"));

        $__internal_3bbcdc17f78408399d77b77b15cc7ac9fa7f7d6329e34e2ebf112ac7732ee552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbcdc17f78408399d77b77b15cc7ac9fa7f7d6329e34e2ebf112ac7732ee552->enter($__internal_3bbcdc17f78408399d77b77b15cc7ac9fa7f7d6329e34e2ebf112ac7732ee552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:html_control.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_html_control_widget', $context, $blocks);
        
        $__internal_f19a2d04fa7cdd826c5006a9230716bf5039e61d2df28db6b73bb52816eaf184->leave($__internal_f19a2d04fa7cdd826c5006a9230716bf5039e61d2df28db6b73bb52816eaf184_prof);

        
        $__internal_3bbcdc17f78408399d77b77b15cc7ac9fa7f7d6329e34e2ebf112ac7732ee552->leave($__internal_3bbcdc17f78408399d77b77b15cc7ac9fa7f7d6329e34e2ebf112ac7732ee552_prof);

    }

    public function block_qba_bit_html_control_widget($context, array $blocks = array())
    {
        $__internal_e06e53077029e5d2b9d27a1c312ea98cc30b475e413d0936be7da7a55563708a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06e53077029e5d2b9d27a1c312ea98cc30b475e413d0936be7da7a55563708a->enter($__internal_e06e53077029e5d2b9d27a1c312ea98cc30b475e413d0936be7da7a55563708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_html_control_widget"));

        $__internal_bb7d415ef64dcd2cfb0797c084b9f6fa8911f6fb307c0027f117942425774f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7d415ef64dcd2cfb0797c084b9f6fa8911f6fb307c0027f117942425774f28->enter($__internal_bb7d415ef64dcd2cfb0797c084b9f6fa8911f6fb307c0027f117942425774f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_html_control_widget"));

        // line 2
        echo "


    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/html_control/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

      <textarea style=\"margin-top: 5px\" ";
        // line 7
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " >
    ";
        // line 8
        echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
        echo "</textarea>


     <script>
         var editor_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "=null;


         \$(function(){


             editor_";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = CKEDITOR.replace(\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\");

             editor_";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".on('change',function(){
                 ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".value = editor_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".getData();
                 \$('#";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').focusin();
                 \$('#";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').focusout();
             });

             editor_";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".config.title =false;
             editor_";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".config.allowedContent  =true;

             ";
        // line 29
        if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) == true)) {
            // line 30
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo ".required = \"required\";
             ";
        }
        // line 32
        echo "
         });

          /*   PageAjax.edit.controls.add('";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "', 'onloadHtmlControl";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "()', 'updateValueControl_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "()');
             PageAjax.edit.proxyControls.add('";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "', 'editor_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "', '.cke_browser_webkit');

         function updateValueControl_";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "()
         {

             ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".value = editor_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".getData();
             \$('#";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').focusin();
             \$('#";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').focusout();
         }
*/
     </script>

";
        
        $__internal_bb7d415ef64dcd2cfb0797c084b9f6fa8911f6fb307c0027f117942425774f28->leave($__internal_bb7d415ef64dcd2cfb0797c084b9f6fa8911f6fb307c0027f117942425774f28_prof);

        
        $__internal_e06e53077029e5d2b9d27a1c312ea98cc30b475e413d0936be7da7a55563708a->leave($__internal_e06e53077029e5d2b9d27a1c312ea98cc30b475e413d0936be7da7a55563708a_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:html_control.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  150 => 42,  144 => 41,  138 => 38,  131 => 36,  123 => 35,  118 => 32,  112 => 30,  110 => 29,  105 => 27,  101 => 26,  95 => 23,  91 => 22,  85 => 21,  81 => 20,  74 => 18,  65 => 12,  58 => 8,  54 => 7,  49 => 5,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_html_control_widget %}



    <script src=\"{{ asset('bundles/qbabitcore/forms/html_control/ckeditor/ckeditor.js') }}\"></script>

      <textarea style=\"margin-top: 5px\" {{ block('widget_attributes') }} >
    {{ data|raw }}</textarea>


     <script>
         var editor_{{ id }}=null;


         \$(function(){


             editor_{{ id }} = CKEDITOR.replace(\"{{ full_name }}\");

             editor_{{ id }}.on('change',function(){
                 {{ id }}.value = editor_{{ id }}.getData();
                 \$('#{{ id }}').focusin();
                 \$('#{{ id }}').focusout();
             });

             editor_{{ id }}.config.title =false;
             editor_{{ id }}.config.allowedContent  =true;

             {% if required==true %}
             {{ form.vars.id }}.required = \"required\";
             {% endif %}

         });

          /*   PageAjax.edit.controls.add('{{ form.vars.id }}', 'onloadHtmlControl{{ id }}()', 'updateValueControl_{{ id }}()');
             PageAjax.edit.proxyControls.add('{{ form.vars.id }}', 'editor_{{ id }}', '.cke_browser_webkit');

         function updateValueControl_{{ id }}()
         {

             {{ id }}.value = editor_{{ id }}.getData();
             \$('#{{ id }}').focusin();
             \$('#{{ id }}').focusout();
         }
*/
     </script>

{% endblock %}", "QbaBitCoreBundle:Form/Basic:html_control.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/html_control.html.twig");
    }
}
