<?php

/* QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig */
class __TwigTemplate_7ec0e42db35e02dd920e05e1f069b374e195a4f812d8b644c72db97c8ec4cf33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Layout:layout.html.twig"), "method"), "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cee1463266167b0e4e735a8d694553dad4339d92047f5175ec8714f0e07fc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cee1463266167b0e4e735a8d694553dad4339d92047f5175ec8714f0e07fc76->enter($__internal_9cee1463266167b0e4e735a8d694553dad4339d92047f5175ec8714f0e07fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig"));

        $__internal_14114c0fb34905c3752076ad12417b926b280aaa09bae2d6781f9e7abe4f60dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14114c0fb34905c3752076ad12417b926b280aaa09bae2d6781f9e7abe4f60dc->enter($__internal_14114c0fb34905c3752076ad12417b926b280aaa09bae2d6781f9e7abe4f60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cee1463266167b0e4e735a8d694553dad4339d92047f5175ec8714f0e07fc76->leave($__internal_9cee1463266167b0e4e735a8d694553dad4339d92047f5175ec8714f0e07fc76_prof);

        
        $__internal_14114c0fb34905c3752076ad12417b926b280aaa09bae2d6781f9e7abe4f60dc->leave($__internal_14114c0fb34905c3752076ad12417b926b280aaa09bae2d6781f9e7abe4f60dc_prof);

    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
        $__internal_02fad56c7d73b0e42bdfc134334d97a33c4f5a72c571978db08a4a9b82d0016e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fad56c7d73b0e42bdfc134334d97a33c4f5a72c571978db08a4a9b82d0016e->enter($__internal_02fad56c7d73b0e42bdfc134334d97a33c4f5a72c571978db08a4a9b82d0016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_08796d988d0ae9baf34b8cd6842413a77e8c97ab5593601c315bf179111d9603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08796d988d0ae9baf34b8cd6842413a77e8c97ab5593601c315bf179111d9603->enter($__internal_08796d988d0ae9baf34b8cd6842413a77e8c97ab5593601c315bf179111d9603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/all.css"), "html", null, true);
        echo "\">


    <div class=\"login-box\">
        <div class=\"login-logo row\">
            <div class=\"col-xs-6\" style=\"margin-top: 10px\">
            <a href=\"/\"  >";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "name", array()), "html", null, true);
        echo "</a></div>
            <div class=\"col-xs-6\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "image", array())), "html", null, true);
        echo "\" width=\"80%\">
            </div>

        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <h3 style=\"margin-top: 0;margin-bottom: 19px;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.title"), "html", null, true);
        echo "</h3>
            ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 27
        echo "
            <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qba_bit_admin_security_login_check");
        echo "\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"email\" class=\"form-control\" autocomplete=\"off\" required placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.email"), "html", null, true);
        echo "\" name=\"_username\"  value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.password"), "html", null, true);
        echo "\" name=\"_password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">  ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.remember"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.enter"), "html", null, true);
        echo "</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class=\"row\" style=\"text-align: center\">
                    <a href=\"#\" class=\"text-center\" id=\"forgot\">     ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.forgot.button"), "html", null, true);
        echo "</a>
                </div>
            </form>

            <div class=\"register-box-body\" style=\"display: none\">
                <p class=\"login-box-msg\" style=\"font-weight: bold\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.forgot.title"), "html", null, true);
        echo "</p>
                <p class=\"login-box-msg\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.forgot.description"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_security_recovery_mail");
        echo "\" id=\"forgot_form\" name=\"forgot_form\" method=\"post\">

                    <div class=\"form-group has-feedback\">
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.forgot.email", array()), "html", null, true);
        echo "\" required=\"required\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">

                        <!-- /.col -->
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.security.login.forgot.send"), "html", null, true);
        echo "</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/icheck.js"), "html", null, true);
        echo "\"></script>
    <script>
        window.onload = function(){
            jQuery('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            \$('#forgot').on('click', function (e) {
                \$('.register-box-body').fadeIn(1000);

            });
            \$('#forgot_form').on('submit', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var data = \$('#forgot_form').serialize()+'&type=1';


                \$.ajax({
                    url: '";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_security_recovery_mail");
        echo "',

                    data: data,
                    type: 'GET',

                    enctype: 'multipart/form-data',
                    success: function (w) {

                        var t = w.error == 1 ? \"error\" : \"success\";
                        toastr[t](w.msg);

                    },
                    error: function (e) {
                        toastr[\"error\"](e.responseText);
                    },
                    processData: false,
                    contentType: false

                });

            });
        }
    </script>
";
        
        $__internal_08796d988d0ae9baf34b8cd6842413a77e8c97ab5593601c315bf179111d9603->leave($__internal_08796d988d0ae9baf34b8cd6842413a77e8c97ab5593601c315bf179111d9603_prof);

        
        $__internal_02fad56c7d73b0e42bdfc134334d97a33c4f5a72c571978db08a4a9b82d0016e->leave($__internal_02fad56c7d73b0e42bdfc134334d97a33c4f5a72c571978db08a4a9b82d0016e_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 100,  177 => 81,  163 => 70,  152 => 62,  146 => 59,  142 => 58,  138 => 57,  130 => 52,  122 => 47,  113 => 41,  103 => 34,  94 => 30,  89 => 28,  86 => 27,  80 => 25,  78 => 24,  74 => 23,  65 => 17,  60 => 15,  51 => 9,  48 => 8,  39 => 7,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends  template_helper.getRedirectedView(\"QbaBitCoreBundle:Layout:layout.html.twig\") %}

{#{% block stylesheets %}#}
    {#{{ parent() }}#}
    {#<link href=\"{{ asset('bundles/bandec/css/login-3.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />#}
{#{% endblock %}#}
{% block login %}
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabitcore/forms/icheck_type/iCheck/all.css') }}\">


    <div class=\"login-box\">
        <div class=\"login-logo row\">
            <div class=\"col-xs-6\" style=\"margin-top: 10px\">
            <a href=\"/\"  >{{ config.app.name }}</a></div>
            <div class=\"col-xs-6\">
                <img src=\"{{ asset(config.app.image) }}\" width=\"80%\">
            </div>

        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <h3 style=\"margin-top: 0;margin-bottom: 19px;\">{{ 'qba_bit.security.login.title' | trans() }}</h3>
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            <form action=\"{{ path('qba_bit_admin_security_login_check') }}\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"email\" class=\"form-control\" autocomplete=\"off\" required placeholder=\"{{ 'qba_bit.security.login.email' | trans() }}\" name=\"_username\"  value=\"{{ last_username }}\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'qba_bit.security.login.password' | trans() }}\" name=\"_password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">  {{ 'qba_bit.security.login.remember' | trans()  }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'qba_bit.security.login.enter' | trans()  }}</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class=\"row\" style=\"text-align: center\">
                    <a href=\"#\" class=\"text-center\" id=\"forgot\">     {{ 'qba_bit.security.login.forgot.button'|trans }}</a>
                </div>
            </form>

            <div class=\"register-box-body\" style=\"display: none\">
                <p class=\"login-box-msg\" style=\"font-weight: bold\">{{ 'qba_bit.security.login.forgot.title'|trans }}</p>
                <p class=\"login-box-msg\">{{ 'qba_bit.security.login.forgot.description'|trans }}</p>
                <form action=\"{{ url('qba_bit_security_recovery_mail') }}\" id=\"forgot_form\" name=\"forgot_form\" method=\"post\">

                    <div class=\"form-group has-feedback\">
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"{{ 'qba_bit.security.login.forgot.email' | trans({}) }}\" required=\"required\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">

                        <!-- /.col -->
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'qba_bit.security.login.forgot.send'|trans }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <script src=\"{{ asset(\"bundles/qbabitcore/forms/icheck_type/iCheck/icheck.js\") }}\"></script>
    <script>
        window.onload = function(){
            jQuery('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            \$('#forgot').on('click', function (e) {
                \$('.register-box-body').fadeIn(1000);

            });
            \$('#forgot_form').on('submit', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var data = \$('#forgot_form').serialize()+'&type=1';


                \$.ajax({
                    url: '{{ url('qba_bit_security_recovery_mail') }}',

                    data: data,
                    type: 'GET',

                    enctype: 'multipart/form-data',
                    success: function (w) {

                        var t = w.error == 1 ? \"error\" : \"success\";
                        toastr[t](w.msg);

                    },
                    error: function (e) {
                        toastr[\"error\"](e.responseText);
                    },
                    processData: false,
                    contentType: false

                });

            });
        }
    </script>
{% endblock %}", "QbaBitTemplateAdminLTEBundle:Admin/SecurityUser:login.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Admin/SecurityUser/login.html.twig");
    }
}
