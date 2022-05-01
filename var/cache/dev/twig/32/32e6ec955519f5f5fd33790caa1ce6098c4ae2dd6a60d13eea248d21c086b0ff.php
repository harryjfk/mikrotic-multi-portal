<?php

/* QbaBitCoreBundle:Form/Basic:modal_form.html.twig */
class __TwigTemplate_d9ff3034192f87d88d3727a8930399fec4a031f170ec4da645078f0a9b9f8c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_modal_form_widget' => array($this, 'block_qba_bit_modal_form_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afba9c0e9bfac1931794efaf325031a7439fa9cd8a4b8859e4c6b04d9b1a5491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afba9c0e9bfac1931794efaf325031a7439fa9cd8a4b8859e4c6b04d9b1a5491->enter($__internal_afba9c0e9bfac1931794efaf325031a7439fa9cd8a4b8859e4c6b04d9b1a5491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:modal_form.html.twig"));

        $__internal_6f0d32910c5ce058aec1dcd380e63848cd834838c6a31b27335e68cd4ed83c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0d32910c5ce058aec1dcd380e63848cd834838c6a31b27335e68cd4ed83c4e->enter($__internal_6f0d32910c5ce058aec1dcd380e63848cd834838c6a31b27335e68cd4ed83c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Basic:modal_form.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_modal_form_widget', $context, $blocks);
        
        $__internal_afba9c0e9bfac1931794efaf325031a7439fa9cd8a4b8859e4c6b04d9b1a5491->leave($__internal_afba9c0e9bfac1931794efaf325031a7439fa9cd8a4b8859e4c6b04d9b1a5491_prof);

        
        $__internal_6f0d32910c5ce058aec1dcd380e63848cd834838c6a31b27335e68cd4ed83c4e->leave($__internal_6f0d32910c5ce058aec1dcd380e63848cd834838c6a31b27335e68cd4ed83c4e_prof);

    }

    public function block_qba_bit_modal_form_widget($context, array $blocks = array())
    {
        $__internal_571c3e1e675fe1195fd525e71bc9bf5367e2288508a7a9d4fe4cb9104aef8c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571c3e1e675fe1195fd525e71bc9bf5367e2288508a7a9d4fe4cb9104aef8c5a->enter($__internal_571c3e1e675fe1195fd525e71bc9bf5367e2288508a7a9d4fe4cb9104aef8c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_modal_form_widget"));

        $__internal_16db65be61adbf5d6aa6a1aa5e8a616fcdf61ffcc9b73ae35b889cf71bd890cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16db65be61adbf5d6aa6a1aa5e8a616fcdf61ffcc9b73ae35b889cf71bd890cb->enter($__internal_16db65be61adbf5d6aa6a1aa5e8a616fcdf61ffcc9b73ae35b889cf71bd890cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_modal_form_widget"));

        // line 2
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_modal\" style=\"display: none;\">
        ";
        // line 3
        if (((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")) != null)) {
            // line 4
            echo "            ";
            echo (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template"));
            echo "
        ";
        }
        // line 6
        echo "        ";
        if (((isset($context["form_render"]) ? $context["form_render"] : $this->getContext($context, "form_render")) != null)) {
            // line 7
            echo "            ";
            echo $this->getAttribute((isset($context["form_render"]) ? $context["form_render"] : $this->getContext($context, "form_render")), "render", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method");
            echo "
        ";
        } else {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["i"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 13
        echo "
    </div>
    <div>
        ";
        // line 16
        if (array_key_exists("template_add", $context)) {
            // line 17
            echo "        ";
            echo (isset($context["template_add"]) ? $context["template_add"] : $this->getContext($context, "template_add"));
            echo "
        ";
        }
        // line 19
        echo "    </div>
    <button id=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_button\"  type=\"button\"  style=\"";
        echo twig_escape_filter($this->env, (isset($context["buttonStyles"]) ? $context["buttonStyles"] : $this->getContext($context, "buttonStyles")), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) ? $context["buttonClass"] : $this->getContext($context, "buttonClass")), "html", null, true);
        echo "\" onclick=\"show";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "Modal(this)\">";
        echo (isset($context["buttonText"]) ? $context["buttonText"] : $this->getContext($context, "buttonText"));
        echo "</button>
    <script>



        function show";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "Modal(e) {
            ";
        // line 26
        if (array_key_exists("onClick", $context)) {
            // line 27
            echo "            ";
            echo (isset($context["onClick"]) ? $context["onClick"] : $this->getContext($context, "onClick"));
            echo "
            ";
        }
        // line 29
        echo "            \$(\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_modal\").dialog({
              title:'";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption")), "html", null, true);
        echo "',  draggable: false, modal: true, height: \"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\", width: \"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\",
                buttons: [
                    {
                        text: \"OK\",
                        class: \"btn\",
                        click: function (e) {
                            ";
        // line 36
        if ((isset($context["onOk"]) ? $context["onOk"] : $this->getContext($context, "onOk"))) {
            // line 37
            echo "                            ";
            echo (isset($context["onOk"]) ? $context["onOk"] : $this->getContext($context, "onOk"));
            echo "
                            ";
        }
        // line 39
        echo "                            \$(this).dialog(\"close\");
                        }
                    },
                    {
                        text: \"Cancel\",
                        class: \"btn btn-secundary\",
                        click: function (e) {
                            ";
        // line 46
        if ((isset($context["onCancel"]) ? $context["onCancel"] : $this->getContext($context, "onCancel"))) {
            // line 47
            echo "                            ";
            echo (isset($context["onCancel"]) ? $context["onCancel"] : $this->getContext($context, "onCancel"));
            echo "
                            ";
        }
        // line 49
        echo "                            \$(this).dialog(\"close\");
                        }
                    },
                ]
            });
            \$('.ui-dialog[aria-describedby=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_modal\"] .ui-dialog-title').html( \"";
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption")), "html", null, true);
        echo "\");

        }
        function hide";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "Modal(e) {

        }

    </script>
";
        
        $__internal_16db65be61adbf5d6aa6a1aa5e8a616fcdf61ffcc9b73ae35b889cf71bd890cb->leave($__internal_16db65be61adbf5d6aa6a1aa5e8a616fcdf61ffcc9b73ae35b889cf71bd890cb_prof);

        
        $__internal_571c3e1e675fe1195fd525e71bc9bf5367e2288508a7a9d4fe4cb9104aef8c5a->leave($__internal_571c3e1e675fe1195fd525e71bc9bf5367e2288508a7a9d4fe4cb9104aef8c5a_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Basic:modal_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  175 => 54,  168 => 49,  162 => 47,  160 => 46,  151 => 39,  145 => 37,  143 => 36,  130 => 30,  125 => 29,  119 => 27,  117 => 26,  113 => 25,  97 => 20,  94 => 19,  88 => 17,  86 => 16,  81 => 13,  71 => 10,  66 => 9,  60 => 7,  57 => 6,  51 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_modal_form_widget %}
    <div id=\"{{ form.vars.id }}_modal\" style=\"display: none;\">
        {% if template!=null %}
            {{ template|raw }}
        {% endif %}
        {% if form_render !=null %}
            {{ form_render.render(form)|raw }}
        {% else %}
        {% for i in form.children %}
            {{ form_row(i) }}
        {% endfor %}
{% endif %}

    </div>
    <div>
        {% if template_add is defined %}
        {{ template_add|raw }}
        {% endif %}
    </div>
    <button id=\"{{ form.vars.id }}_button\"  type=\"button\"  style=\"{{ buttonStyles }}\" class=\"{{ buttonClass }}\" onclick=\"show{{ form.vars.id }}Modal(this)\">{{ buttonText|raw }}</button>
    <script>



        function show{{ form.vars.id }}Modal(e) {
            {% if onClick is defined %}
            {{ onClick|raw }}
            {% endif %}
            \$(\"#{{ form.vars.id }}_modal\").dialog({
              title:'{{ caption }}',  draggable: false, modal: true, height: \"{{ height }}\", width: \"{{ width }}\",
                buttons: [
                    {
                        text: \"OK\",
                        class: \"btn\",
                        click: function (e) {
                            {% if onOk %}
                            {{ onOk|raw }}
                            {% endif %}
                            \$(this).dialog(\"close\");
                        }
                    },
                    {
                        text: \"Cancel\",
                        class: \"btn btn-secundary\",
                        click: function (e) {
                            {% if onCancel %}
                            {{ onCancel|raw }}
                            {% endif %}
                            \$(this).dialog(\"close\");
                        }
                    },
                ]
            });
            \$('.ui-dialog[aria-describedby=\"{{ form.vars.id }}_modal\"] .ui-dialog-title').html( \"{{ caption }}\");

        }
        function hide{{ form.vars.id }}Modal(e) {

        }

    </script>
{% endblock %}", "QbaBitCoreBundle:Form/Basic:modal_form.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Basic/modal_form.html.twig");
    }
}
