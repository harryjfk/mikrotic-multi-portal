<?php

/* QbaBitCoreBundle:Form/Basic:date_time.html.twig */
class __TwigTemplate_b811f9590539ad00ee39fa9f3ea31e1dbd8813d5dfd2ae1e28df9268d4f896f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_date_time_widget' => array($this, 'block_qba_bit_date_time_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0378ecf5dcf443b98d6277db1e6b65e45b882b9f300438dcaecb0931bea128c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0378ecf5dcf443b98d6277db1e6b65e45b882b9f300438dcaecb0931bea128c4->enter($__internal_0378ecf5dcf443b98d6277db1e6b65e45b882b9f300438dcaecb0931bea128c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:date_time.html.twig"));

        $__internal_b13ec87cebcdb0a57b3c194ea2741ad4f6ac3232b3020064e679ead498aa9e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13ec87cebcdb0a57b3c194ea2741ad4f6ac3232b3020064e679ead498aa9e64->enter($__internal_b13ec87cebcdb0a57b3c194ea2741ad4f6ac3232b3020064e679ead498aa9e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:date_time.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_date_time_widget', $context, $blocks);
        
        $__internal_0378ecf5dcf443b98d6277db1e6b65e45b882b9f300438dcaecb0931bea128c4->leave($__internal_0378ecf5dcf443b98d6277db1e6b65e45b882b9f300438dcaecb0931bea128c4_prof);

        
        $__internal_b13ec87cebcdb0a57b3c194ea2741ad4f6ac3232b3020064e679ead498aa9e64->leave($__internal_b13ec87cebcdb0a57b3c194ea2741ad4f6ac3232b3020064e679ead498aa9e64_prof);

    }

    public function block_qba_bit_date_time_widget($context, array $blocks = array())
    {
        $__internal_afe5abc8f1b07fd4668f42a2a7eb1ac4259a9d72171fd90211140e72cdb19d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe5abc8f1b07fd4668f42a2a7eb1ac4259a9d72171fd90211140e72cdb19d38->enter($__internal_afe5abc8f1b07fd4668f42a2a7eb1ac4259a9d72171fd90211140e72cdb19d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_date_time_widget"));

        $__internal_a55c0c6baad88835a8810916b2b72adcdad24b5e818e66772278f087e4741cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55c0c6baad88835a8810916b2b72adcdad24b5e818e66772278f087e4741cfc->enter($__internal_a55c0c6baad88835a8810916b2b72adcdad24b5e818e66772278f087e4741cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_date_time_widget"));

        // line 2
        echo "    ";
        $context["id"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array());
        // line 3
        echo "    ";
        $context["name"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array()) . "[") . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array())) . "]");
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/datepicker3.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/date_time.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/date_time/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>


    <div id=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display: none\" class=\"form-control\">
        <select id=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_day\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "[day]\"></select>
        <select id=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_month\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "[month]\"></select>
        <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_year\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "[year]\">
        </select></div>
    <input type=\"text\" id=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_select\" class=\"datepicker form-control\"
           value=\" ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["format_new"]) ? $context["format_new"] : $this->getContext($context, "format_new"))), "html", null, true);
        echo "\">

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <script>

        \$(function () {
            var ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_control =   \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_select').datetimepicker({
                locale: 'es',
                format: 'DD/MM/YYYY',
                useCurrent: false //Important! See issue #1075
            });
            \$('#";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_select').data('r',
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_control);
            \$(\"#";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_select\").on(\"dp.change\", function (e) {
                ;
                set";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_selectChange(e);
            });
            set";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_selectChange();
        });







            function set";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_selectChange(e) {


                var date = DateTimeFunction.DateStringToObject('";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["format_js"]) ? $context["format_js"] : $this->getContext($context, "format_js")), "html", null, true);
        echo "', \$(\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_select\").val());
                if (date.month[0] == \"0\")
                    date.month = date.month[1];
                if (date.day[0] == \"0\")
                    date.day = date.day[1];
                DateTimeFunction.selectSetValue('";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_year', date.year);
                DateTimeFunction.selectSetValue('";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_month', date.month);
                DateTimeFunction.selectSetValue('";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_day', date.day);
                ";
        // line 59
        if ((isset($context["range_end"]) ? $context["range_end"] : $this->getContext($context, "range_end"))) {
            // line 60
            echo "
                try
                {
                    var picker = \$('#";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["range_end"]) ? $context["range_end"] : $this->getContext($context, "range_end")), "html", null, true);
            echo "_select').data(\"r\").data(\"DateTimePicker\").date ==null?\$('#";
            echo twig_escape_filter($this->env, (isset($context["range_end"]) ? $context["range_end"] : $this->getContext($context, "range_end")), "html", null, true);
            echo "_select').data(\"r\").data():\$('#";
            echo twig_escape_filter($this->env, (isset($context["range_end"]) ? $context["range_end"] : $this->getContext($context, "range_end")), "html", null, true);
            echo "_select').data(\"r\").data(\"DateTimePicker\");

                    picker.minDate(e.date);
                }

catch (e){}

                ";
        }
        // line 71
        echo "                ";
        if ((isset($context["range_start"]) ? $context["range_start"] : $this->getContext($context, "range_start"))) {
            // line 72
            echo "                try
                {
               var  picker = \$('#";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["range_start"]) ? $context["range_start"] : $this->getContext($context, "range_start")), "html", null, true);
            echo "_select').data(\"r\").data(\"DateTimePicker\").date ==null?\$('#";
            echo twig_escape_filter($this->env, (isset($context["range_start"]) ? $context["range_start"] : $this->getContext($context, "range_start")), "html", null, true);
            echo "_select').data(\"r\").data():\$('#";
            echo twig_escape_filter($this->env, (isset($context["range_start"]) ? $context["range_start"] : $this->getContext($context, "range_start")), "html", null, true);
            echo "_select').data(\"r\").data(\"DateTimePicker\");


                    picker.maxDate(e.date);
                }

                catch (e){}

                ";
        }
        // line 83
        echo "            }








    </script>
";
        
        $__internal_a55c0c6baad88835a8810916b2b72adcdad24b5e818e66772278f087e4741cfc->leave($__internal_a55c0c6baad88835a8810916b2b72adcdad24b5e818e66772278f087e4741cfc_prof);

        
        $__internal_afe5abc8f1b07fd4668f42a2a7eb1ac4259a9d72171fd90211140e72cdb19d38->leave($__internal_afe5abc8f1b07fd4668f42a2a7eb1ac4259a9d72171fd90211140e72cdb19d38_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:date_time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 83,  217 => 74,  213 => 72,  210 => 71,  195 => 63,  190 => 60,  188 => 59,  184 => 58,  180 => 57,  176 => 56,  166 => 51,  160 => 48,  148 => 39,  143 => 37,  138 => 35,  134 => 34,  130 => 33,  120 => 28,  113 => 24,  108 => 22,  104 => 21,  97 => 19,  91 => 18,  85 => 17,  81 => 16,  75 => 13,  71 => 12,  64 => 8,  60 => 7,  55 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_date_time_widget %}
    {% set id = form.vars.id %}
    {% set name = form.parent.vars.name~'['~form.vars.name~']' %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/date_time/bootstrap-datetimepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/date_time/datepicker3.css') }}\">

    <script src=\"{{ asset('bundles/qbabitcore/forms/date_time/moment-with-locales.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabitcore/forms/date_time/date_time.js') }}\"></script>



    <script src=\"{{ asset('bundles/qbabitcore/forms/date_time/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabitcore/forms/date_time/bootstrap-datetimepicker.js') }}\"></script>


    <div id=\"{{ id }}\" style=\"display: none\" class=\"form-control\">
        <select id=\"{{ id }}_day\" name=\"{{ name }}[day]\"></select>
        <select id=\"{{ id }}_month\" name=\"{{ name }}[month]\"></select>
        <select id=\"{{ id }}_year\" name=\"{{ name }}[year]\">
        </select></div>
    <input type=\"text\" id=\"{{ form.vars.id }}_select\" class=\"datepicker form-control\"
           value=\" {{ data|date(format_new) }}\">

    {{ form_errors(form) }}
    <script>

        \$(function () {
            var {{ form.vars.id }}_control =   \$('#{{ form.vars.id }}_select').datetimepicker({
                locale: 'es',
                format: 'DD/MM/YYYY',
                useCurrent: false //Important! See issue #1075
            });
            \$('#{{ form.vars.id }}_select').data('r',
                    {{ form.vars.id }}_control);
            \$(\"#{{ form.vars.id }}_select\").on(\"dp.change\", function (e) {
                ;
                set{{ form.vars.id }}_selectChange(e);
            });
            set{{ form.vars.id }}_selectChange();
        });







            function set{{ form.vars.id }}_selectChange(e) {


                var date = DateTimeFunction.DateStringToObject('{{ format_js }}', \$(\"#{{ form.vars.id }}_select\").val());
                if (date.month[0] == \"0\")
                    date.month = date.month[1];
                if (date.day[0] == \"0\")
                    date.day = date.day[1];
                DateTimeFunction.selectSetValue('{{ form.vars.id }}_year', date.year);
                DateTimeFunction.selectSetValue('{{ form.vars.id }}_month', date.month);
                DateTimeFunction.selectSetValue('{{ form.vars.id }}_day', date.day);
                {% if range_end %}

                try
                {
                    var picker = \$('#{{ range_end }}_select').data(\"r\").data(\"DateTimePicker\").date ==null?\$('#{{ range_end }}_select').data(\"r\").data():\$('#{{ range_end }}_select').data(\"r\").data(\"DateTimePicker\");

                    picker.minDate(e.date);
                }

catch (e){}

                {% endif %}
                {% if range_start %}
                try
                {
               var  picker = \$('#{{ range_start }}_select').data(\"r\").data(\"DateTimePicker\").date ==null?\$('#{{ range_start }}_select').data(\"r\").data():\$('#{{ range_start }}_select').data(\"r\").data(\"DateTimePicker\");


                    picker.maxDate(e.date);
                }

                catch (e){}

                {% endif %}
            }








    </script>
{% endblock %}", "QbaBitCoreBundle:Form/Basic:date_time.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/date_time.html.twig");
    }
}
