<?php

/* QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:nav.html.twig */
class __TwigTemplate_6cb6c7b26b259333ab4371acf00620494fe98c65b489b32f7f56f02a29147add extends Twig_Template
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
        $__internal_b97533b035e6fab520e69939f5e70a05be12d935f61f41f4e7a8f2610699b50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97533b035e6fab520e69939f5e70a05be12d935f61f41f4e7a8f2610699b50b->enter($__internal_b97533b035e6fab520e69939f5e70a05be12d935f61f41f4e7a8f2610699b50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:nav.html.twig"));

        $__internal_6e52f224735a3cef2b681b0caddaa9802de27aba5109538f9f5c61182346e226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e52f224735a3cef2b681b0caddaa9802de27aba5109538f9f5c61182346e226->enter($__internal_6e52f224735a3cef2b681b0caddaa9802de27aba5109538f9f5c61182346e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:nav.html.twig"));

        // line 1
        echo "
<li class=\"dropdown user user-menu\">

    <a href=\"#\" class=\"dropdown-toggle non-ajax\" data-toggle=\"dropdown\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()), $this->getAttribute($this->getAttribute((isset($context["security"]) ? $context["security"] : $this->getContext($context, "security")), "uploads", array()), "web", array())), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
        <span class=\"hidden-xs\"> ";
        // line 6
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qbabit.security.nav.guest")) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()))), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()), $this->getAttribute($this->getAttribute((isset($context["security"]) ? $context["security"] : $this->getContext($context, "security")), "uploads", array()), "web", array())), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" data-name=\"";
        echo ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) ? (0) : (1));
        echo "\">

            <p>
                ";
        // line 14
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qbabit.security.nav.guest")) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()))), "html", null, true);
        echo "
                ";
        // line 15
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 16
            echo "                    <small>
                        ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.nav.fields.dateCreated", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateCreated", array()), "d-m-Y"))), "html", null, true);
            echo "
 </small>
                ";
        }
        // line 20
        echo "            </p>
        </li>

        <li class=\"user-footer\">
            ";
        // line 40
        echo "            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 41
            echo "                <div class=\"pull-left\">


                </div>
                <div class=\"pull-right\">
                    <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_admin_security_login");
            echo "\" onclick=\"profileClick()\"
                       class=\" non-ajax btn btn-primary btn-flat\"> ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.nav.login"), "html", null, true);
            echo "</a>

                </div>
            ";
        } else {
            // line 51
            echo "                <div class=\"pull-left\">

                </div>
                <div class=\"pull-right\">

                    <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_admin_security_logout");
            echo "\"
                       class=\"non-ajax btn btn-danger btn-flat\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.nav.logout"), "html", null, true);
            echo "
                     </a>
                </div>
            ";
        }
        // line 62
        echo "        </li>

    <script>
        function profileClick() {
            \$('nav .user-menu').attr('class', 'dropdown user user-menu');
            //UpdateCategories('');
        }
    </script>
    </ul>

</li>

";
        
        $__internal_b97533b035e6fab520e69939f5e70a05be12d935f61f41f4e7a8f2610699b50b->leave($__internal_b97533b035e6fab520e69939f5e70a05be12d935f61f41f4e7a8f2610699b50b_prof);

        
        $__internal_6e52f224735a3cef2b681b0caddaa9802de27aba5109538f9f5c61182346e226->leave($__internal_6e52f224735a3cef2b681b0caddaa9802de27aba5109538f9f5c61182346e226_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 62,  105 => 58,  100 => 56,  93 => 51,  86 => 47,  82 => 46,  75 => 41,  72 => 40,  66 => 20,  60 => 17,  57 => 16,  55 => 15,  51 => 14,  43 => 11,  35 => 6,  31 => 5,  25 => 1,);
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
<li class=\"dropdown user user-menu\">

    <a href=\"#\" class=\"dropdown-toggle non-ajax\" data-toggle=\"dropdown\">
        <img src=\"{{ app.user.path|QbRenderImg(security.uploads.web) }}\" class=\"user-image\" alt=\"User Image\">
        <span class=\"hidden-xs\"> {{ app.user==null?'qbabit.security.nav.guest'|trans:app.user.name }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            <img src=\"{{  app.user.path|QbRenderImg(security.uploads.web) }}\" class=\"img-circle\" alt=\"User Image\" data-name=\"{{ app.user==null?0:1 }}\">

            <p>
                {{ app.user==null?'qbabit.security.nav.guest'|trans:app.user.fullname }}
                {% if app.user!=null %}
                    <small>
                        {{ \"qba_bit.security.nav.fields.dateCreated\"|trans({'%date%': app.user.dateCreated|date('d-m-Y')}) }}
 </small>
                {% endif %}
            </p>
        </li>

        <li class=\"user-footer\">
            {#
            {% if app.user.impersonateUser!=null %}
                <div style=\"margin-bottom: 40px\">
                    <div class=\"pull-left\">
                        {{ app.user.impersonateUser.name }}
                    </div>
                    <div class=\"pull-right\">
                        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}

                            <a href=\"{{ path('store_homepage', {_switch_user: '_exit'}) }}\"
                               class=\"non-ajax btn btn-danger btn-flat\">{% trans %}
                                qbabit.security.nav.control.exit{% endtrans %}</a>
                        {% endif %}
                    </div>
                </div>  {% endif %}
            #}
            {% if app.user==null %}
                <div class=\"pull-left\">


                </div>
                <div class=\"pull-right\">
                    <a href=\"{{ url('qba_bit_admin_security_login') }}\" onclick=\"profileClick()\"
                       class=\" non-ajax btn btn-primary btn-flat\"> {{ \"qba_bit.security.nav.login\"|trans }}</a>

                </div>
            {% else %}
                <div class=\"pull-left\">

                </div>
                <div class=\"pull-right\">

                    <a href=\"{{ url('qba_bit_admin_security_logout') }}\"
                       class=\"non-ajax btn btn-danger btn-flat\">
                        {{ \"qba_bit.security.nav.logout\"|trans }}
                     </a>
                </div>
            {% endif %}
        </li>

    <script>
        function profileClick() {
            \$('nav .user-menu').attr('class', 'dropdown user user-menu');
            //UpdateCategories('');
        }
    </script>
    </ul>

</li>

", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:nav.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Admin/SecurityUser/nav.html.twig");
    }
}
