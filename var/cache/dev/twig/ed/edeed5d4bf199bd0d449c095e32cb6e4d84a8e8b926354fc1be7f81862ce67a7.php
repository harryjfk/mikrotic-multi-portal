<?php

/* QbaBitTemplateAdminLTEBundle:Menu:render.html.twig */
class __TwigTemplate_3fd247c42e339c7db02a916adf4b0e67064b1da7c0d247f130ac9a2b47c98ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03aa52119c2d04b24bd381aa9985d2049f3b9949742147eb4e4b5542d894546f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03aa52119c2d04b24bd381aa9985d2049f3b9949742147eb4e4b5542d894546f->enter($__internal_03aa52119c2d04b24bd381aa9985d2049f3b9949742147eb4e4b5542d894546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Menu:render.html.twig"));

        $__internal_a02cf1570c7a8c2ada1ab89269a940e850d0536960522ba8c7381dc66e48a0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02cf1570c7a8c2ada1ab89269a940e850d0536960522ba8c7381dc66e48a0f3->enter($__internal_a02cf1570c7a8c2ada1ab89269a940e850d0536960522ba8c7381dc66e48a0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Menu:render.html.twig"));

        // line 52
        echo "
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
            // line 54
            echo " ";
            $context["menus"] = $this->getAttribute($context["modules"], "getData", array(), "method");
            // line 55
            echo "     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 56
                echo "    ";
                echo $this->getAttribute($this, "create_tree", array(0 => $context["menu"], 1 => (isset($context["request"]) ? $context["request"] : $this->getContext($context, "request"))), "method");
                echo "
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_03aa52119c2d04b24bd381aa9985d2049f3b9949742147eb4e4b5542d894546f->leave($__internal_03aa52119c2d04b24bd381aa9985d2049f3b9949742147eb4e4b5542d894546f_prof);

        
        $__internal_a02cf1570c7a8c2ada1ab89269a940e850d0536960522ba8c7381dc66e48a0f3->leave($__internal_a02cf1570c7a8c2ada1ab89269a940e850d0536960522ba8c7381dc66e48a0f3_prof);

    }

    // line 1
    public function getcreate_tree($__src__ = null, $__req__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "src" => $__src__,
            "req" => $__req__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4680b4751bef0d441d23a7487f951be81ed233a214073ee02cec43042cc49e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4680b4751bef0d441d23a7487f951be81ed233a214073ee02cec43042cc49e1e->enter($__internal_4680b4751bef0d441d23a7487f951be81ed233a214073ee02cec43042cc49e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create_tree"));

            $__internal_adf141efe8826460011b2706133588683397ee5e0c504d135c67b20e02cc280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_adf141efe8826460011b2706133588683397ee5e0c504d135c67b20e02cc280a->enter($__internal_adf141efe8826460011b2706133588683397ee5e0c504d135c67b20e02cc280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create_tree"));

            // line 2
            echo "    ";
            if ((($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "index", array()) ==  -1) || ($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "text", array()) == null))) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "childs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 4
                    echo "            ";
                    echo $this->getAttribute($this, "create_tree", array(0 => $context["d"], 1 => (isset($context["req"]) ? $context["req"] : $this->getContext($context, "req"))), "method");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                if (($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "innerHtml", array()) == "")) {
                    // line 8
                    echo "
            ";
                    // line 9
                    if (($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "index", array()) == 0)) {
                        // line 10
                        echo "                <li class=\"header\">
                    ";
                        // line 11
                        if (($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()) == "")) {
                            // line 12
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "text", array())), "html", null, true);
                            echo "
                    ";
                        } else {
                            // line 14
                            echo "                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()), "html", null, true);
                            echo "\" onclick='\$(\"body\").removeClass(\"sidebar-open\");' >
                            <i class=\"";
                            // line 15
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "img", array()), "html", null, true);
                            echo "\"></i> <span>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "text", array())), "html", null, true);
                            echo "</span>
                            ";
                            // line 16
                            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "childs", array())) > 0)) {
                                // line 17
                                echo "                                <i class=\"fa fa-angle-left pull-right\"></i>
                            ";
                            }
                            // line 19
                            echo "                        </a>
                    ";
                        }
                        // line 21
                        echo "                </li>


                ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "childs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                            // line 25
                            echo "                    ";
                            echo $this->getAttribute($this, "create_tree", array(0 => $context["d"], 1 => (isset($context["req"]) ? $context["req"] : $this->getContext($context, "req"))), "method");
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "            ";
                    } else {
                        // line 28
                        echo "                <li class=\"treeview ";
                        if (($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()) != null)) {
                            if (($this->getAttribute($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()), "name", array()) == $this->getAttribute((isset($context["req"]) ? $context["req"] : $this->getContext($context, "req")), "get", array(0 => "_route"), "method"))) {
                                echo " active";
                            }
                        }
                        echo "\" >
                    <a href=\"";
                        // line 29
                        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()) == "")) ? ("#") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()), "name", array()), $this->getAttribute($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()), "params", array())))), "html", null, true);
                        echo "\" onclick='\$(\"body\").removeClass(\"sidebar-open\");' data-route=\"";
                        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()) == "")) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()), "name", array()))), "html", null, true);
                        echo "\" class=\"";
                        echo ((($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "ref", array()) == "")) ? ("non-ajax") : (""));
                        echo "\">
                        <i class=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "img", array()), "html", null, true);
                        echo "\"></i> <span>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "text", array())), "html", null, true);
                        echo "</span>
                        ";
                        // line 31
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "childs", array())) > 0)) {
                            // line 32
                            echo "                            <i class=\"fa fa-angle-left pull-right\"></i>
                        ";
                        }
                        // line 34
                        echo "                    </a>
                    <ul class=\"treeview-menu\">
                        ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "childs", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                            // line 37
                            echo "                            ";
                            echo $this->getAttribute($this, "create_tree", array(0 => $context["d"], 1 => (isset($context["req"]) ? $context["req"] : $this->getContext($context, "req"))), "method");
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                    </ul>
                </li>


            ";
                    }
                    // line 44
                    echo "
        ";
                } else {
                    // line 46
                    echo "            ";
                    echo $this->getAttribute((isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "innerHtml", array());
                    echo "
        ";
                }
                // line 48
                echo "
    ";
            }
            // line 50
            echo "
";
            
            $__internal_adf141efe8826460011b2706133588683397ee5e0c504d135c67b20e02cc280a->leave($__internal_adf141efe8826460011b2706133588683397ee5e0c504d135c67b20e02cc280a_prof);

            
            $__internal_4680b4751bef0d441d23a7487f951be81ed233a214073ee02cec43042cc49e1e->leave($__internal_4680b4751bef0d441d23a7487f951be81ed233a214073ee02cec43042cc49e1e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Menu:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 50,  224 => 48,  218 => 46,  214 => 44,  207 => 39,  198 => 37,  194 => 36,  190 => 34,  186 => 32,  184 => 31,  178 => 30,  170 => 29,  161 => 28,  158 => 27,  149 => 25,  145 => 24,  140 => 21,  136 => 19,  132 => 17,  130 => 16,  124 => 15,  119 => 14,  113 => 12,  111 => 11,  108 => 10,  106 => 9,  103 => 8,  100 => 7,  97 => 6,  88 => 4,  83 => 3,  80 => 2,  61 => 1,  40 => 56,  35 => 55,  32 => 54,  28 => 53,  25 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro create_tree(src,req) %}
    {% if src.index==-1 or   (src.text== null) %}
        {% for d in src.childs %}
            {{ _self.create_tree(d,req) }}
        {% endfor %}
    {% else %}
        {% if src.innerHtml==\"\" %}

            {% if src.index==0 %}
                <li class=\"header\">
                    {% if src.ref==\"\" %}
                        {{ src.text |trans }}
                    {% else %}
                        <a href=\"{{ src.ref }}\" onclick='\$(\"body\").removeClass(\"sidebar-open\");' >
                            <i class=\"{{ src.img }}\"></i> <span>{{ src.text |trans }}</span>
                            {% if src.childs|length>0 %}
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            {% endif %}
                        </a>
                    {% endif %}
                </li>


                {% for d in src.childs %}
                    {{ _self.create_tree(d,req) }}
                {% endfor %}
            {% else %}
                <li class=\"treeview {% if src.ref!=null %}{% if src.ref.name == req.get('_route') %} active{% endif %}{% endif %}\" >
                    <a href=\"{{ src.ref==\"\"?\"#\":url(src.ref.name,src.ref.params) }}\" onclick='\$(\"body\").removeClass(\"sidebar-open\");' data-route=\"{{ src.ref==\"\"?\"\": src.ref.name }}\" class=\"{{ src.ref==\"\"?\"non-ajax\":'' }}\">
                        <i class=\"{{ src.img }}\"></i> <span>{{ src.text |trans }}</span>
                        {% if src.childs|length>0 %}
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        {% endif %}
                    </a>
                    <ul class=\"treeview-menu\">
                        {% for d in src.childs %}
                            {{ _self.create_tree(d,req) }}
                        {% endfor %}
                    </ul>
                </li>


            {% endif %}

        {% else %}
            {{ src.innerHtml|raw }}
        {% endif %}

    {% endif %}

{% endmacro %}

{% for modules in data %}
 {% set menus = modules.getData() %}
     {% for menu in menus %}
    {{ _self.create_tree(menu,request) }}
         {% endfor %}
{% endfor %}", "QbaBitTemplateAdminLTEBundle:Menu:render.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Menu/render.html.twig");
    }
}
