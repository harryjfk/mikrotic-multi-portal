<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_f1715026888cef10f7c11229c57ad072a88592bb6fa84914916d46b0cffa7962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1340a3bd92460620e6499955d20c7d2fbab8c000d1084883a6d391c238a9d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1340a3bd92460620e6499955d20c7d2fbab8c000d1084883a6d391c238a9d93->enter($__internal_f1340a3bd92460620e6499955d20c7d2fbab8c000d1084883a6d391c238a9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_4101ad6ededd9fa23c3f1e3e46a92f1dd711d5ecf202fa8cc9246cc5cc74f2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4101ad6ededd9fa23c3f1e3e46a92f1dd711d5ecf202fa8cc9246cc5cc74f2c3->enter($__internal_4101ad6ededd9fa23c3f1e3e46a92f1dd711d5ecf202fa8cc9246cc5cc74f2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_f1340a3bd92460620e6499955d20c7d2fbab8c000d1084883a6d391c238a9d93->leave($__internal_f1340a3bd92460620e6499955d20c7d2fbab8c000d1084883a6d391c238a9d93_prof);

        
        $__internal_4101ad6ededd9fa23c3f1e3e46a92f1dd711d5ecf202fa8cc9246cc5cc74f2c3->leave($__internal_4101ad6ededd9fa23c3f1e3e46a92f1dd711d5ecf202fa8cc9246cc5cc74f2c3_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_96c7d9614bc19c7fdac40dc0b42778c390739c4f29aa16744567d6a4cd4b4d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c7d9614bc19c7fdac40dc0b42778c390739c4f29aa16744567d6a4cd4b4d48->enter($__internal_96c7d9614bc19c7fdac40dc0b42778c390739c4f29aa16744567d6a4cd4b4d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_bcec6fb66bb4fa47df0cf767c3c103dd36cc3eb8c53b92b181a8ae8e6b45c1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcec6fb66bb4fa47df0cf767c3c103dd36cc3eb8c53b92b181a8ae8e6b45c1e7->enter($__internal_bcec6fb66bb4fa47df0cf767c3c103dd36cc3eb8c53b92b181a8ae8e6b45c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path"))) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter"))) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")), (isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter")))) : ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) ? $context["link_attr"] : $this->getContext($context, "link_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path")), (isset($context["image_filter"]) ? $context["image_filter"] : $this->getContext($context, "image_filter"))), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) ? $context["image_attr"] : $this->getContext($context, "image_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bcec6fb66bb4fa47df0cf767c3c103dd36cc3eb8c53b92b181a8ae8e6b45c1e7->leave($__internal_bcec6fb66bb4fa47df0cf767c3c103dd36cc3eb8c53b92b181a8ae8e6b45c1e7_prof);

        
        $__internal_96c7d9614bc19c7fdac40dc0b42778c390739c4f29aa16744567d6a4cd4b4d48->leave($__internal_96c7d9614bc19c7fdac40dc0b42778c390739c4f29aa16744567d6a4cd4b4d48_prof);

    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  103 => 16,  99 => 14,  95 => 12,  93 => 11,  76 => 9,  73 => 8,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block liip_imagine_image_widget %}
    {% spaceless %}
        {% if image_path %}
            <div>
                {% if link_url %}
                    <a href=\"{{ link_filter ? link_url|imagine_filter(link_filter): link_url }}\" {% for attrname, attrvalue in link_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
                {% endif %}

                <img src=\"{{ image_path|imagine_filter(image_filter) }}\" {% for attrname, attrvalue in image_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %} />

                {% if link_url %}
                    </a>
                {% endif %}
            </div>
        {% endif %}

        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock %}
", "LiipImagineBundle:Form:form_div_layout.html.twig", "/var/www/vendor/liip/imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
