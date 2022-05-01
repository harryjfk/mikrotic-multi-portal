<?php

/* QbaBitTemplateAdminLTEBundle:Admin\Language:_nav.html.twig */
class __TwigTemplate_ddcaec1bdd936cda7c7ae5ac889491264cea3c9d6336c7863776782980a3da6b extends Twig_Template
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
        $__internal_97be16540f78e81035e3964dabd1d75b98595a2cfb710478f28e15715d94e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97be16540f78e81035e3964dabd1d75b98595a2cfb710478f28e15715d94e875->enter($__internal_97be16540f78e81035e3964dabd1d75b98595a2cfb710478f28e15715d94e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin\\Language:_nav.html.twig"));

        $__internal_0dc64581f2b84ddca7fdb0fd9a26d1cc4c1e6a33a7e624d87605becf518c255d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc64581f2b84ddca7fdb0fd9a26d1cc4c1e6a33a7e624d87605becf518c255d->enter($__internal_0dc64581f2b84ddca7fdb0fd9a26d1cc4c1e6a33a7e624d87605becf518c255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin\\Language:_nav.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "    ";
            if ($this->getAttribute($context["entity"], "enabled", array())) {
                // line 4
                echo "
    <li><!-- start message -->
        <a class=\"non-ajax\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_language_set", array("lang" => $this->getAttribute($context["entity"], "shortCode", array()))), "html", null, true);
                echo "\"
                ";
                // line 7
                if (($this->getAttribute($context["entity"], "name", array()) == (isset($context["primary"]) ? $context["primary"] : $this->getContext($context, "primary")))) {
                    // line 8
                    echo "                    style=\"background-color:  lightgrey;\"
                ";
                }
                // line 10
                echo "                >
            <div>

                <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg($this->getAttribute($context["entity"], "image", array()), $this->getAttribute($this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "uploads", array()), "web", array())), "html", null, true);
                echo "\" width=\"19px\" height=\"19px\" alt=\"\">

            </div>
        ";
                // line 22
                echo "
        </a>
    </li>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_97be16540f78e81035e3964dabd1d75b98595a2cfb710478f28e15715d94e875->leave($__internal_97be16540f78e81035e3964dabd1d75b98595a2cfb710478f28e15715d94e875_prof);

        
        $__internal_0dc64581f2b84ddca7fdb0fd9a26d1cc4c1e6a33a7e624d87605becf518c255d->leave($__internal_0dc64581f2b84ddca7fdb0fd9a26d1cc4c1e6a33a7e624d87605becf518c255d_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Admin\\Language:_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  54 => 13,  49 => 10,  45 => 8,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for entity in entities %}
    {% if entity.enabled %}

    <li><!-- start message -->
        <a class=\"non-ajax\" href=\"{{ url('qba_bit_language_set',{'lang':entity.shortCode}) }}\"
                {% if entity.name == primary %}
                    style=\"background-color:  lightgrey;\"
                {% endif %}
                >
            <div>

                <img src=\"{{ entity.image|QbRenderImg(language.uploads.web) }}\" width=\"19px\" height=\"19px\" alt=\"\">

            </div>
        {#   <p>

                {{entity.name  }}


            </p>#}

        </a>
    </li>
        {% endif %}
{% endfor %}", "QbaBitTemplateAdminLTEBundle:Admin\\Language:_nav.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Admin/Language/_nav.html.twig");
    }
}
