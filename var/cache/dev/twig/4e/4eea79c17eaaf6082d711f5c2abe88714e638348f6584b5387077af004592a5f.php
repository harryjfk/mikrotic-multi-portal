<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_39f51bcbb3a67f1460c8f273c7f6f50d8f08fd71133be63cf02370d32357aa7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09595f0e6fa823953c16997e212f812877870f55ae0360d5fa7adc7f0f829da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09595f0e6fa823953c16997e212f812877870f55ae0360d5fa7adc7f0f829da7->enter($__internal_09595f0e6fa823953c16997e212f812877870f55ae0360d5fa7adc7f0f829da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_daa649f454b7f379d5cee570d6921fa792e9f75e0e4177aafee0f2136f255246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa649f454b7f379d5cee570d6921fa792e9f75e0e4177aafee0f2136f255246->enter($__internal_daa649f454b7f379d5cee570d6921fa792e9f75e0e4177aafee0f2136f255246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09595f0e6fa823953c16997e212f812877870f55ae0360d5fa7adc7f0f829da7->leave($__internal_09595f0e6fa823953c16997e212f812877870f55ae0360d5fa7adc7f0f829da7_prof);

        
        $__internal_daa649f454b7f379d5cee570d6921fa792e9f75e0e4177aafee0f2136f255246->leave($__internal_daa649f454b7f379d5cee570d6921fa792e9f75e0e4177aafee0f2136f255246_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a879224731ecf53321fae8e836c359c5bca68820045af1e46b35f0d9866b171e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a879224731ecf53321fae8e836c359c5bca68820045af1e46b35f0d9866b171e->enter($__internal_a879224731ecf53321fae8e836c359c5bca68820045af1e46b35f0d9866b171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bce2f95cdad799e39f6ee328b2b753bf38e576d70a9133e7636c98ed887620bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce2f95cdad799e39f6ee328b2b753bf38e576d70a9133e7636c98ed887620bd->enter($__internal_bce2f95cdad799e39f6ee328b2b753bf38e576d70a9133e7636c98ed887620bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_bce2f95cdad799e39f6ee328b2b753bf38e576d70a9133e7636c98ed887620bd->leave($__internal_bce2f95cdad799e39f6ee328b2b753bf38e576d70a9133e7636c98ed887620bd_prof);

        
        $__internal_a879224731ecf53321fae8e836c359c5bca68820045af1e46b35f0d9866b171e->leave($__internal_a879224731ecf53321fae8e836c359c5bca68820045af1e46b35f0d9866b171e_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3267a6aa507a6779a1f4e410a49541dcfd15b1563c13237db75dd51878d3436b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3267a6aa507a6779a1f4e410a49541dcfd15b1563c13237db75dd51878d3436b->enter($__internal_3267a6aa507a6779a1f4e410a49541dcfd15b1563c13237db75dd51878d3436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_675140060df821259c8e90eceb317009a331a1e08df5d7c621ff2409d9369395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675140060df821259c8e90eceb317009a331a1e08df5d7c621ff2409d9369395->enter($__internal_675140060df821259c8e90eceb317009a331a1e08df5d7c621ff2409d9369395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_675140060df821259c8e90eceb317009a331a1e08df5d7c621ff2409d9369395->leave($__internal_675140060df821259c8e90eceb317009a331a1e08df5d7c621ff2409d9369395_prof);

        
        $__internal_3267a6aa507a6779a1f4e410a49541dcfd15b1563c13237db75dd51878d3436b->leave($__internal_3267a6aa507a6779a1f4e410a49541dcfd15b1563c13237db75dd51878d3436b_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f951b6ee53acb96898855aac87e919dc9a5197660273406f2d74abcb17ec358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f951b6ee53acb96898855aac87e919dc9a5197660273406f2d74abcb17ec358b->enter($__internal_f951b6ee53acb96898855aac87e919dc9a5197660273406f2d74abcb17ec358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1228e0f807711704bf6d2817842436317776a0e65313d0f59f070029db23806b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1228e0f807711704bf6d2817842436317776a0e65313d0f59f070029db23806b->enter($__internal_1228e0f807711704bf6d2817842436317776a0e65313d0f59f070029db23806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>";
                // line 88
                $context["file"] = (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array"), false)) : (false));
                // line 89
                $context["link"] = (((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 1)) : (false));
                // line 90
                echo "<td>";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                }
                echo "</td>
                    <td class=\"font-normal\">";
                // line 91
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_1228e0f807711704bf6d2817842436317776a0e65313d0f59f070029db23806b->leave($__internal_1228e0f807711704bf6d2817842436317776a0e65313d0f59f070029db23806b_prof);

        
        $__internal_f951b6ee53acb96898855aac87e919dc9a5197660273406f2d74abcb17ec358b->leave($__internal_f951b6ee53acb96898855aac87e919dc9a5197660273406f2d74abcb17ec358b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  251 => 94,  242 => 91,  227 => 90,  225 => 89,  223 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    {%- set file = collector.templatePaths[template]|default(false) -%}
                    {%- set link = file ? file|file_link(1) : false -%}
                    <td>{% if link %}<a href=\"{{ link }}\" title=\"{{ file }}\">{{ template }}</a>{% else %}{{ template }}{% endif %}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
