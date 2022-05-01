<?php

/* QbaBitTemplateAdminLTEBundle:Admin:index.html.twig */
class __TwigTemplate_5ceb5f725164fb538cda17523328bb2b28423e7079175f5e3a98192e4a46b8dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcumb' => array($this, 'block_breadcumb'),
            'title' => array($this, 'block_title'),
            'update' => array($this, 'block_update'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Layout:_layout.html.twig"), "method"), "QbaBitTemplateAdminLTEBundle:Admin:index.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82d37e51ca59d8648e8df468dff2a075fdf33598ed5e260464bef2738f9b99c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d37e51ca59d8648e8df468dff2a075fdf33598ed5e260464bef2738f9b99c0->enter($__internal_82d37e51ca59d8648e8df468dff2a075fdf33598ed5e260464bef2738f9b99c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin:index.html.twig"));

        $__internal_09954beaf1bdecc71750cc71e02b54ba482e268ddcf3e50dedad1ab21383a3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09954beaf1bdecc71750cc71e02b54ba482e268ddcf3e50dedad1ab21383a3ef->enter($__internal_09954beaf1bdecc71750cc71e02b54ba482e268ddcf3e50dedad1ab21383a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Admin:index.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d37e51ca59d8648e8df468dff2a075fdf33598ed5e260464bef2738f9b99c0->leave($__internal_82d37e51ca59d8648e8df468dff2a075fdf33598ed5e260464bef2738f9b99c0_prof);

        
        $__internal_09954beaf1bdecc71750cc71e02b54ba482e268ddcf3e50dedad1ab21383a3ef->leave($__internal_09954beaf1bdecc71750cc71e02b54ba482e268ddcf3e50dedad1ab21383a3ef_prof);

    }

    // line 4
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_befc2760a670edb5d313de98a7c38d37884a8e84fdf7185006e4a408f7195566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befc2760a670edb5d313de98a7c38d37884a8e84fdf7185006e4a408f7195566->enter($__internal_befc2760a670edb5d313de98a7c38d37884a8e84fdf7185006e4a408f7195566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        $__internal_19d55884300c84a34bafc18e8f9131447da519ece0fd2e88db06393c32c5b860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d55884300c84a34bafc18e8f9131447da519ece0fd2e88db06393c32c5b860->enter($__internal_19d55884300c84a34bafc18e8f9131447da519ece0fd2e88db06393c32c5b860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        echo " ";
        
        $__internal_19d55884300c84a34bafc18e8f9131447da519ece0fd2e88db06393c32c5b860->leave($__internal_19d55884300c84a34bafc18e8f9131447da519ece0fd2e88db06393c32c5b860_prof);

        
        $__internal_befc2760a670edb5d313de98a7c38d37884a8e84fdf7185006e4a408f7195566->leave($__internal_befc2760a670edb5d313de98a7c38d37884a8e84fdf7185006e4a408f7195566_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fc8448b7f203ff41e8a04ac2e3a21ab9a1cfce9eb9fb90199facc12a88b5d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc8448b7f203ff41e8a04ac2e3a21ab9a1cfce9eb9fb90199facc12a88b5d03->enter($__internal_2fc8448b7f203ff41e8a04ac2e3a21ab9a1cfce9eb9fb90199facc12a88b5d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69b1fbab977eabfa30c06c33a0a76ae47f7673fdea0b02b9857053021ed81ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b1fbab977eabfa30c06c33a0a76ae47f7673fdea0b02b9857053021ed81ee9->enter($__internal_69b1fbab977eabfa30c06c33a0a76ae47f7673fdea0b02b9857053021ed81ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.nauta.title"), "html", null, true);
        
        $__internal_69b1fbab977eabfa30c06c33a0a76ae47f7673fdea0b02b9857053021ed81ee9->leave($__internal_69b1fbab977eabfa30c06c33a0a76ae47f7673fdea0b02b9857053021ed81ee9_prof);

        
        $__internal_2fc8448b7f203ff41e8a04ac2e3a21ab9a1cfce9eb9fb90199facc12a88b5d03->leave($__internal_2fc8448b7f203ff41e8a04ac2e3a21ab9a1cfce9eb9fb90199facc12a88b5d03_prof);

    }

    // line 7
    public function block_update($context, array $blocks = array())
    {
        $__internal_742afd3e359e2fc214316fb005560334708b4eb33efdf4c2a5da463848e05cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742afd3e359e2fc214316fb005560334708b4eb33efdf4c2a5da463848e05cc7->enter($__internal_742afd3e359e2fc214316fb005560334708b4eb33efdf4c2a5da463848e05cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        $__internal_fcf2fdebcce924af9f006ea547aa1cfd47f5ed942feb09eda8c0049fb74e8203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf2fdebcce924af9f006ea547aa1cfd47f5ed942feb09eda8c0049fb74e8203->enter($__internal_fcf2fdebcce924af9f006ea547aa1cfd47f5ed942feb09eda8c0049fb74e8203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        // line 8
        echo "




    <div class=\"row\">
        <div class=\"col-md-12\">


            <!-- AREA CHART -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Pagos realizados</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), "payments", array()), 'form');
        echo "
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class=\"col-md-12\">
            <!-- /.box -->

            <!-- DONUT CHART -->
            <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Clientes sin pagar</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">

                    <table class=\"highchart table table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>A Pagar</th>
                            <th>Fecha de vencimiento</th>
                            <th>Pagar</th>
                        </tr>
                        </thead>
                        <tbody>
                         ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "missing", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 61
            echo "                        <tr>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</td>

                                 <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "value", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "last_time", array()), "html", null, true);
            echo "</td>
                            <td>
                                <button class=\"btn btn-primary pay-button\" data-name=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-paypal\"></i>
                                </button>
                            </td>
                             </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>


                    </table>
                    <script>
                        \$(\".pay-button\").on(\"click\",function(e){
                           e.stopPropagation();
                           e.preventDefault();
                           console.log(\"aaa\");
                           var t = \$(e.target).data(\"name\");
                           if(t ==null)
                               t = \$(e.target).parent().data(\"name\")
                           var u =\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_nauta_admin_pay", array("id" =>  -1)), "html", null, true);
        echo "\".replace(\"-1\",t);
                            \$.ajax({
                                url: u ,
                                /* method:method,*/
                                data: null,
                                type: \"GET\",
                                /*  dataType : 'html',*/
                                enctype: 'multipart/form-data',
                                success: function(e){
                                    document.location.href = \"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_nauta_admin_homepage");
        echo "\";
                                },
                                error: function(e){
                                    alert(\"Existen errores\");
                                },
                                processData: false,
                                contentType: false

                            });
                        });
                    </script>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class=\"col-md-12\">
            <!-- LINE CHART -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Cobro entre socios</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"chart\">
                        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")), "admins", array()), 'form');
        echo "
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
    </div>

";
        
        $__internal_fcf2fdebcce924af9f006ea547aa1cfd47f5ed942feb09eda8c0049fb74e8203->leave($__internal_fcf2fdebcce924af9f006ea547aa1cfd47f5ed942feb09eda8c0049fb74e8203_prof);

        
        $__internal_742afd3e359e2fc214316fb005560334708b4eb33efdf4c2a5da463848e05cc7->leave($__internal_742afd3e359e2fc214316fb005560334708b4eb33efdf4c2a5da463848e05cc7_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 126,  203 => 94,  191 => 85,  177 => 73,  165 => 67,  160 => 65,  156 => 64,  151 => 62,  148 => 61,  144 => 60,  110 => 29,  87 => 8,  78 => 7,  59 => 5,  41 => 4,  20 => 2,);
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
{% extends template_helper.getRedirectedView(\"QbaBitCoreBundle:Layout:_layout.html.twig\") %}

{% block breadcumb %} {% endblock %}
{% block title %} {{ 'qba_bit.nauta.title'|trans }}{% endblock %}

{% block update %}





    <div class=\"row\">
        <div class=\"col-md-12\">


            <!-- AREA CHART -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Pagos realizados</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    {{ form(graph.payments) }}
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class=\"col-md-12\">
            <!-- /.box -->

            <!-- DONUT CHART -->
            <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Clientes sin pagar</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">

                    <table class=\"highchart table table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>A Pagar</th>
                            <th>Fecha de vencimiento</th>
                            <th>Pagar</th>
                        </tr>
                        </thead>
                        <tbody>
                         {%  for c in data.missing %}
                        <tr>
                            <td>{{ c.name }}</td>

                                 <td>{{ c.value }}</td>
                                 <td>{{ c.last_time }}</td>
                            <td>
                                <button class=\"btn btn-primary pay-button\" data-name=\"{{ c.id }}\">
                                    <i class=\"fa fa-paypal\"></i>
                                </button>
                            </td>
                             </tr>
                        {% endfor %}
                        </tbody>


                    </table>
                    <script>
                        \$(\".pay-button\").on(\"click\",function(e){
                           e.stopPropagation();
                           e.preventDefault();
                           console.log(\"aaa\");
                           var t = \$(e.target).data(\"name\");
                           if(t ==null)
                               t = \$(e.target).parent().data(\"name\")
                           var u =\"{{ url(\"qba_bit_nauta_admin_pay\",{\"id\":-1}) }}\".replace(\"-1\",t);
                            \$.ajax({
                                url: u ,
                                /* method:method,*/
                                data: null,
                                type: \"GET\",
                                /*  dataType : 'html',*/
                                enctype: 'multipart/form-data',
                                success: function(e){
                                    document.location.href = \"{{ url(\"qba_bit_nauta_admin_homepage\") }}\";
                                },
                                error: function(e){
                                    alert(\"Existen errores\");
                                },
                                processData: false,
                                contentType: false

                            });
                        });
                    </script>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class=\"col-md-12\">
            <!-- LINE CHART -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Cobro entre socios</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"chart\">
                        {{ form(graph.admins) }}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
    </div>

{% endblock %}

", "QbaBitTemplateAdminLTEBundle:Admin:index.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Admin/index.html.twig");
    }
}
