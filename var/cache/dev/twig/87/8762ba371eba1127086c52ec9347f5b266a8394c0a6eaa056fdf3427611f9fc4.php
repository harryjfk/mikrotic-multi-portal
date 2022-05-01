<?php

/* QbaBitCoreBundle:Form/Collections:grid_view.html.twig */
class __TwigTemplate_a4db346358705249e9cd7f2b7a8d95473562352472abfd4ecc13d9b2baf34533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qba_bit_grid_view_type_widget' => array($this, 'block_qba_bit_grid_view_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7d91bb84b933c1e7208f211edac40aad91612f449918d18c57c49f89c648457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d91bb84b933c1e7208f211edac40aad91612f449918d18c57c49f89c648457->enter($__internal_b7d91bb84b933c1e7208f211edac40aad91612f449918d18c57c49f89c648457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:grid_view.html.twig"));

        $__internal_612bedd202c122f19c1145bf820f0e15a5636c097b736d19dd036ad6cf654389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612bedd202c122f19c1145bf820f0e15a5636c097b736d19dd036ad6cf654389->enter($__internal_612bedd202c122f19c1145bf820f0e15a5636c097b736d19dd036ad6cf654389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Collections:grid_view.html.twig"));

        // line 1
        $this->displayBlock('qba_bit_grid_view_type_widget', $context, $blocks);
        
        $__internal_b7d91bb84b933c1e7208f211edac40aad91612f449918d18c57c49f89c648457->leave($__internal_b7d91bb84b933c1e7208f211edac40aad91612f449918d18c57c49f89c648457_prof);

        
        $__internal_612bedd202c122f19c1145bf820f0e15a5636c097b736d19dd036ad6cf654389->leave($__internal_612bedd202c122f19c1145bf820f0e15a5636c097b736d19dd036ad6cf654389_prof);

    }

    public function block_qba_bit_grid_view_type_widget($context, array $blocks = array())
    {
        $__internal_d31ba37b469971ed9eefe13e85a6469ce8014e8ac6182ac82532346811b00c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31ba37b469971ed9eefe13e85a6469ce8014e8ac6182ac82532346811b00c9a->enter($__internal_d31ba37b469971ed9eefe13e85a6469ce8014e8ac6182ac82532346811b00c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_grid_view_type_widget"));

        $__internal_7c790c94f653f478fb119ca14eef5ebffc029d663a131933a5f0304979628a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c790c94f653f478fb119ca14eef5ebffc029d663a131933a5f0304979628a04->enter($__internal_7c790c94f653f478fb119ca14eef5ebffc029d663a131933a5f0304979628a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qba_bit_grid_view_type_widget"));

        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/forms/icheck_type/iCheck/all.css"), "html", null, true);
        echo "\">

    <div ";
        // line 5
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    </div>

    <script>

        var page_";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = 1;
        var filter_";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = \"\";
        \$(function () {
            setPage_";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "(1);
        });

        var searching_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = false;

        function setPage_";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "(index) {
            if (searching_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ")
                return;
            searching_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = true;
            MKLib.blockScreen(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "\");

            var data = 'id=";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&class=";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "&columns=";
        echo twig_jsonencode_filter((isset($context["columns"]) ? $context["columns"] : $this->getContext($context, "columns")));
        echo "&edit=";
        echo twig_escape_filter($this->env, (isset($context["allow_edit"]) ? $context["allow_edit"] : $this->getContext($context, "allow_edit")), "html", null, true);
        echo "&new=";
        echo twig_escape_filter($this->env, (isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), "html", null, true);
        echo "&delete=";
        echo twig_escape_filter($this->env, (isset($context["allow_remove"]) ? $context["allow_remove"] : $this->getContext($context, "allow_remove")), "html", null, true);
        echo "';
            data = data + '&' + (index != 'undefined' ? 'page=' + index : '') + '&filter=[\"' + filter_";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "+ '\"]';

            jQuery.ajax({
                url: \"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_core_grid_data");
        echo "\",
                data: data,
                type: \"GET\",
                dataType: 'text',
                success: function (e) {

                    \$('#";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').html(e);

                    \$('#";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " a').on('click', function (w) {
                        w.preventDefault();
                        w.stopPropagation();
                        setPage_";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "(w.target.href.substr(w.target.href.indexOf('page') + 5));
                        return false;
                    });


                    \$(\"#table_";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " input[type=\\\"text\\\"]\").on('keyup', function (e) {
                        if (e.keyCode == 13) {
                            updateView();
                        }
                    });

                     jQuery(\"#check_all_";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\").on('ifToggled', function () {


                MKLib.checkedCtrl(jQuery(this), '#";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " .selitm', function (status, ele) {
                    ele.iCheck(status ? 'check' : 'uncheck');
                });
            });

                    \$('#search_button_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').on('click', function (e) {
                        updateView();
                    });
                    setChecks();
                    MKLib.unlockScreen();
                    searching_";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "= false;
                },
                error: function (xhr, status) {
                    alert(xhr.responseText);
                    /*alert('Disculpe, ha ocurrido un problema vuelva a intentarlo.');*/
                },
                complete: function () {
                    jQuery('#blockscreen').hide();
                }
            });

        }

        function updateView() {
            filter_";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " = \$('#table_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " input[type=\"text\"]').serialize();
            setPage_";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "(1);
        }

        function setChecks() {
            jQuery('#chkall,input[type=\"checkbox\"].checkeable, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            }).trigger('click');//le pongo trigger('click') para corregir bug


        }

        setChecks();
    </script>
";
        
        $__internal_7c790c94f653f478fb119ca14eef5ebffc029d663a131933a5f0304979628a04->leave($__internal_7c790c94f653f478fb119ca14eef5ebffc029d663a131933a5f0304979628a04_prof);

        
        $__internal_d31ba37b469971ed9eefe13e85a6469ce8014e8ac6182ac82532346811b00c9a->leave($__internal_d31ba37b469971ed9eefe13e85a6469ce8014e8ac6182ac82532346811b00c9a_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Collections:grid_view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  196 => 77,  179 => 63,  171 => 58,  163 => 53,  157 => 50,  148 => 44,  140 => 39,  134 => 36,  129 => 34,  120 => 28,  114 => 25,  100 => 24,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  77 => 16,  71 => 13,  66 => 11,  62 => 10,  54 => 5,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block qba_bit_grid_view_type_widget %}
    <script src=\"{{ asset('bundles/qbabitcore/forms/icheck_type/iCheck/icheck.min.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/forms/icheck_type/iCheck/all.css') }}\">

    <div {{ block('widget_attributes') }}>
    </div>

    <script>

        var page_{{ id }} = 1;
        var filter_{{ id }} = \"\";
        \$(function () {
            setPage_{{ id }}(1);
        });

        var searching_{{ id }} = false;

        function setPage_{{ id }}(index) {
            if (searching_{{ id }})
                return;
            searching_{{ id }} = true;
            MKLib.blockScreen(\"{{ asset('') }}\");

            var data = 'id={{ id }}&class={{ class }}&columns={{ columns|json_encode|raw }}&edit={{ allow_edit }}&new={{ allow_add }}&delete={{ allow_remove }}';
            data = data + '&' + (index != 'undefined' ? 'page=' + index : '') + '&filter=[\"' + filter_{{ id }}+ '\"]';

            jQuery.ajax({
                url: \"{{ url('qba_bit_core_grid_data') }}\",
                data: data,
                type: \"GET\",
                dataType: 'text',
                success: function (e) {

                    \$('#{{ id }}').html(e);

                    \$('#{{ id }} a').on('click', function (w) {
                        w.preventDefault();
                        w.stopPropagation();
                        setPage_{{ id }}(w.target.href.substr(w.target.href.indexOf('page') + 5));
                        return false;
                    });


                    \$(\"#table_{{ id }} input[type=\\\"text\\\"]\").on('keyup', function (e) {
                        if (e.keyCode == 13) {
                            updateView();
                        }
                    });

                     jQuery(\"#check_all_{{ id }}\").on('ifToggled', function () {


                MKLib.checkedCtrl(jQuery(this), '#{{ id }} .selitm', function (status, ele) {
                    ele.iCheck(status ? 'check' : 'uncheck');
                });
            });

                    \$('#search_button_{{ id }}').on('click', function (e) {
                        updateView();
                    });
                    setChecks();
                    MKLib.unlockScreen();
                    searching_{{ id }}= false;
                },
                error: function (xhr, status) {
                    alert(xhr.responseText);
                    /*alert('Disculpe, ha ocurrido un problema vuelva a intentarlo.');*/
                },
                complete: function () {
                    jQuery('#blockscreen').hide();
                }
            });

        }

        function updateView() {
            filter_{{ id }} = \$('#table_{{ id }} input[type=\"text\"]').serialize();
            setPage_{{ id }}(1);
        }

        function setChecks() {
            jQuery('#chkall,input[type=\"checkbox\"].checkeable, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            }).trigger('click');//le pongo trigger('click') para corregir bug


        }

        setChecks();
    </script>
{% endblock %}", "QbaBitCoreBundle:Form/Collections:grid_view.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Collections/grid_view.html.twig");
    }
}
