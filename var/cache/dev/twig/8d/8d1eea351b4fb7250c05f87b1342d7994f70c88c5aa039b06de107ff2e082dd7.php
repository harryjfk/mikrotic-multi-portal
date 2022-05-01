<?php

/* QbaBitCoreBundle:Form/Basic:status_control.html.twig */
class __TwigTemplate_e6cc3507c86ea0b8d979937ff6fc2bb7e6f948f86eee71423deb0e7188357beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_status_control_widget' => array($this, 'block_qba_bit_status_control_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58fc047c1f233673b9f1d6a6b8f6fa02659305378a2aa3bdb8ce200a27fd16f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fc047c1f233673b9f1d6a6b8f6fa02659305378a2aa3bdb8ce200a27fd16f3->enter($__internal_58fc047c1f233673b9f1d6a6b8f6fa02659305378a2aa3bdb8ce200a27fd16f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:status_control.html.twig"));

        $__internal_8e95a31edcfb00235efde7b01aa14b92b58908a6eb92df5b04010d595fe2eca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e95a31edcfb00235efde7b01aa14b92b58908a6eb92df5b04010d595fe2eca6->enter($__internal_8e95a31edcfb00235efde7b01aa14b92b58908a6eb92df5b04010d595fe2eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:status_control.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_status_control_widget', $context, $blocks);
        // line 53
        echo "

";
        
        $__internal_58fc047c1f233673b9f1d6a6b8f6fa02659305378a2aa3bdb8ce200a27fd16f3->leave($__internal_58fc047c1f233673b9f1d6a6b8f6fa02659305378a2aa3bdb8ce200a27fd16f3_prof);

        
        $__internal_8e95a31edcfb00235efde7b01aa14b92b58908a6eb92df5b04010d595fe2eca6->leave($__internal_8e95a31edcfb00235efde7b01aa14b92b58908a6eb92df5b04010d595fe2eca6_prof);

    }

    // line 1
    public function block_qba_bit_status_control_widget($context, array $blocks = array())
    {
        $__internal_239c3459f3710c29b20abeb10ba6b5ad327e606137749debe54d114c2aee201b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239c3459f3710c29b20abeb10ba6b5ad327e606137749debe54d114c2aee201b->enter($__internal_239c3459f3710c29b20abeb10ba6b5ad327e606137749debe54d114c2aee201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_status_control_widget"));

        $__internal_e7668baa380ad23cb11e2faa2d407fac2ebe2abbb81a647bd88c2d95b14fe97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7668baa380ad23cb11e2faa2d407fac2ebe2abbb81a647bd88c2d95b14fe97d->enter($__internal_e7668baa380ad23cb11e2faa2d407fac2ebe2abbb81a647bd88c2d95b14fe97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_status_control_widget"));

        // line 2
        echo "
    <style>
        .color-palette
        {
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: white;
        }
    </style>
    ";
        // line 12
        $context["stat"] = null;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 14
            echo "        ";
            if (($this->getAttribute($context["status"], "value", array()) == (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                // line 15
                echo "            ";
                $context["stat"] = $context["status"];
                // line 16
                echo "
        ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"color-palette\" style=\"";
        // line 20
        if (twig_in_filter("color", twig_get_array_keys_filter((isset($context["stat"]) ? $context["stat"] : $this->getContext($context, "stat"))))) {
            echo " background-color: #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stat"]) ? $context["stat"] : $this->getContext($context, "stat")), "color", array()), "html", null, true);
        }
        echo "\">
        <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stat"]) ? $context["stat"] : $this->getContext($context, "stat")), "text", array()), "html", null, true);
        echo "</span>

    </div>
    <div class=\"\">
        <span>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "html", null, true);
        echo "</span>
    </div>
    <input type=\"hidden\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\">


    ";
        
        $__internal_e7668baa380ad23cb11e2faa2d407fac2ebe2abbb81a647bd88c2d95b14fe97d->leave($__internal_e7668baa380ad23cb11e2faa2d407fac2ebe2abbb81a647bd88c2d95b14fe97d_prof);

        
        $__internal_239c3459f3710c29b20abeb10ba6b5ad327e606137749debe54d114c2aee201b->leave($__internal_239c3459f3710c29b20abeb10ba6b5ad327e606137749debe54d114c2aee201b_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:status_control.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  101 => 25,  94 => 21,  87 => 20,  84 => 19,  78 => 18,  74 => 16,  71 => 15,  68 => 14,  63 => 13,  61 => 12,  49 => 2,  40 => 1,  28 => 53,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_status_control_widget %}

    <style>
        .color-palette
        {
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: white;
        }
    </style>
    {% set stat = null %}
    {% for status in statuses %}
        {% if status.value ==data %}
            {% set stat=status %}

        {% endif %}
    {% endfor %}

    <div class=\"color-palette\" style=\"{% if \"color\" in stat|keys %} background-color: #{{ stat.color }}{% endif %}\">
        <span>{{ stat.text }}</span>

    </div>
    <div class=\"\">
        <span>{{ comment }}</span>
    </div>
    <input type=\"hidden\" value=\"{{ data }}\" id=\"{{ form.vars.id }}\" name=\"{{ form.vars.full_name }}\">


    {#  {% include 'QbaBitCoreBundle:Form:_base_entity_list.html.twig' with {show:true} %}
      {% set list = [
      {url:asset('bundles/qbabitcore/css/common/select2.min.css'), type:'link'},
      {url:asset('bundles/qbabitcore/js/common/select2.min.js'), type:'script'},
      ] %}
      {% include 'QbaBitCoreBundle:Form:_base_include.html.twig' with {'list':list,'onloadAll':'onLoad'~form.vars.id~'_select2','loading':true} %}
      <script>
          function onLoad{{ form.vars.id }}_select2(e) {


              var data = null;
              var options = \$('#{{ form.vars.id }} option');
              for (var i = 0; i < options.length; i++)
                  if (\$(options[i]).html() == '{{ data|trans }}') {
                      data = \$(options[i]).attr(\"value\");
                      break;
                  }

              var control_{{ form.vars.id }} = \$(\"#{{ form.vars.id }}\").select2();
              control_{{ form.vars.id }}.val(data).trigger(\"change\");
          }
      </script>#}
{% endblock %}


", "QbaBitCoreBundle:Form/Basic:status_control.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/status_control.html.twig");
    }
}
