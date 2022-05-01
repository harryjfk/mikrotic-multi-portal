<?php

/* QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig */
class __TwigTemplate_cf78bff45a7074560e8b9d2d8b90db24d0b69a3aab99f216b93dd115f15ac3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'update' => array($this, 'block_update'),
            'title_caption' => array($this, 'block_title_caption'),
            'dropdown_options' => array($this, 'block_dropdown_options'),
            'form_body' => array($this, 'block_form_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["template_helper"]) ? $context["template_helper"] : $this->getContext($context, "template_helper")), "getRedirectedView", array(0 => "QbaBitCoreBundle:Layout:layout.html.twig"), "method"), "QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0db74b161e291667861e6606385897eb823d6162d3129e935012cd2127c94fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0db74b161e291667861e6606385897eb823d6162d3129e935012cd2127c94fc->enter($__internal_f0db74b161e291667861e6606385897eb823d6162d3129e935012cd2127c94fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig"));

        $__internal_1cc7ff8935ea4f2b8a0870f13abc6b7e1ec13b506f81bb52001963a163734694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc7ff8935ea4f2b8a0870f13abc6b7e1ec13b506f81bb52001963a163734694->enter($__internal_1cc7ff8935ea4f2b8a0870f13abc6b7e1ec13b506f81bb52001963a163734694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig"));

        // line 2
        $context["titlePage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["base_title"]) ? $context["base_title"] : $this->getContext($context, "base_title")));
        // line 3
        $context["tit"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((((isset($context["isNew"]) ? $context["isNew"] : $this->getContext($context, "isNew")) == true)) ? ("qba_bit.core.nuevo_X") : ("qba_bit.core.editar_X")), array("X" => (isset($context["titlePage"]) ? $context["titlePage"] : $this->getContext($context, "titlePage"))));
        // line 5
        $context["paramsUrl"] = array("itemid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "itemid"), "method"), "fqid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "fqid"), "method"), "owneruid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "owneruid"), "method"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0db74b161e291667861e6606385897eb823d6162d3129e935012cd2127c94fc->leave($__internal_f0db74b161e291667861e6606385897eb823d6162d3129e935012cd2127c94fc_prof);

        
        $__internal_1cc7ff8935ea4f2b8a0870f13abc6b7e1ec13b506f81bb52001963a163734694->leave($__internal_1cc7ff8935ea4f2b8a0870f13abc6b7e1ec13b506f81bb52001963a163734694_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca132e547b784a44af59603463b50787d7ed0143c9a8e1d269edaf52ad2b7730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca132e547b784a44af59603463b50787d7ed0143c9a8e1d269edaf52ad2b7730->enter($__internal_ca132e547b784a44af59603463b50787d7ed0143c9a8e1d269edaf52ad2b7730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ea178772132fe54ae7cadf8b0819e6c2220b7fbdeb65885079e5bd6324d05ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea178772132fe54ae7cadf8b0819e6c2220b7fbdeb65885079e5bd6324d05ae->enter($__internal_0ea178772132fe54ae7cadf8b0819e6c2220b7fbdeb65885079e5bd6324d05ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["tit"]) ? $context["tit"] : $this->getContext($context, "tit")), "html", null, true);
        echo " ";
        
        $__internal_0ea178772132fe54ae7cadf8b0819e6c2220b7fbdeb65885079e5bd6324d05ae->leave($__internal_0ea178772132fe54ae7cadf8b0819e6c2220b7fbdeb65885079e5bd6324d05ae_prof);

        
        $__internal_ca132e547b784a44af59603463b50787d7ed0143c9a8e1d269edaf52ad2b7730->leave($__internal_ca132e547b784a44af59603463b50787d7ed0143c9a8e1d269edaf52ad2b7730_prof);

    }

    // line 6
    public function block_update($context, array $blocks = array())
    {
        $__internal_61f0e892a64c8da3b421f3408e3b0337538b6c1ba0be9c18cd92830527a74cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f0e892a64c8da3b421f3408e3b0337538b6c1ba0be9c18cd92830527a74cbb->enter($__internal_61f0e892a64c8da3b421f3408e3b0337538b6c1ba0be9c18cd92830527a74cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        $__internal_71065b0a3cd727a0b42d33153675dcf52ca1c904a71ca7223ed13b2300bde926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71065b0a3cd727a0b42d33153675dcf52ca1c904a71ca7223ed13b2300bde926->enter($__internal_71065b0a3cd727a0b42d33153675dcf52ca1c904a71ca7223ed13b2300bde926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        // line 9
        echo "<div class=\"box-header with-border\">
        <div class=\"user-block\">
            <span class=\"username\" style=\"margin-left: 0px;\"><h3 style=\"margin-bottom: 0;margin-top: 0;\">";
        // line 11
        $this->displayBlock('title_caption', $context, $blocks);
        echo "</h3></span>
        </div>
        <div class=\"box-tools\" style=\"display: none\">
            <div class=\"dropdown\">
                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownOptions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa fa-fw fa-cogs\"></span>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("qba_bit.core.options"), "html", null, true);
        echo "
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownOptions\">
                    ";
        // line 22
        $this->displayBlock('dropdown_options', $context, $blocks);
        // line 25
        echo "                </ul>
            </div>
        </div>

    </div>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["tipo"] => $context["mensajes"]) {
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["mensajes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 33
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tipo'], $context['mensajes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "novalidate" => "novalidate", "enctype" => "multipart/form-data")));
        echo "
    <div class=\"qb-frm\">
        ";
        // line 39
        $this->displayBlock('form_body', $context, $blocks);
        // line 42
        echo "        <div class=\"row tc\">
            <div class=\"";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "edit", array()))) {
            echo "col-xs-6 ";
        } else {
            echo " col-xs-12 ";
        }
        echo "\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "</div>
            ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "edit", array()))) {
            // line 46
            echo "            <div class=\"col-xs-6\">
                ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), 'row');
            echo "
                <script>
                    \$(\"#";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").on(\"click\",function (e) {
                        document.location.href = \"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "view", array()));
            echo "\";
                    })
                </script>
            </div>
            ";
        }
        // line 55
        echo "        </div>
    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "







";
        
        $__internal_71065b0a3cd727a0b42d33153675dcf52ca1c904a71ca7223ed13b2300bde926->leave($__internal_71065b0a3cd727a0b42d33153675dcf52ca1c904a71ca7223ed13b2300bde926_prof);

        
        $__internal_61f0e892a64c8da3b421f3408e3b0337538b6c1ba0be9c18cd92830527a74cbb->leave($__internal_61f0e892a64c8da3b421f3408e3b0337538b6c1ba0be9c18cd92830527a74cbb_prof);

    }

    // line 11
    public function block_title_caption($context, array $blocks = array())
    {
        $__internal_db695e5990b0f83cc2ce79ca0cbfba3112b5b8f85860b07a7af77ad58ce40c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db695e5990b0f83cc2ce79ca0cbfba3112b5b8f85860b07a7af77ad58ce40c32->enter($__internal_db695e5990b0f83cc2ce79ca0cbfba3112b5b8f85860b07a7af77ad58ce40c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_caption"));

        $__internal_04b68feeea115ff804caa54c79af6d1989071044679ef7b21f4f0c933d90df35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b68feeea115ff804caa54c79af6d1989071044679ef7b21f4f0c933d90df35->enter($__internal_04b68feeea115ff804caa54c79af6d1989071044679ef7b21f4f0c933d90df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_caption"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["tit"]) ? $context["tit"] : $this->getContext($context, "tit")), "html", null, true);
        echo " ";
        
        $__internal_04b68feeea115ff804caa54c79af6d1989071044679ef7b21f4f0c933d90df35->leave($__internal_04b68feeea115ff804caa54c79af6d1989071044679ef7b21f4f0c933d90df35_prof);

        
        $__internal_db695e5990b0f83cc2ce79ca0cbfba3112b5b8f85860b07a7af77ad58ce40c32->leave($__internal_db695e5990b0f83cc2ce79ca0cbfba3112b5b8f85860b07a7af77ad58ce40c32_prof);

    }

    // line 22
    public function block_dropdown_options($context, array $blocks = array())
    {
        $__internal_6fe973c64223342aad9dc5ef55ce269a90f0e25f0be7211014f3f0954ad7d663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe973c64223342aad9dc5ef55ce269a90f0e25f0be7211014f3f0954ad7d663->enter($__internal_6fe973c64223342aad9dc5ef55ce269a90f0e25f0be7211014f3f0954ad7d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdown_options"));

        $__internal_519478749c95911e2c7d808792472384e2c3ec22a1be3c37fe3ab516f5785a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519478749c95911e2c7d808792472384e2c3ec22a1be3c37fe3ab516f5785a38->enter($__internal_519478749c95911e2c7d808792472384e2c3ec22a1be3c37fe3ab516f5785a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdown_options"));

        // line 23
        echo "
                    ";
        
        $__internal_519478749c95911e2c7d808792472384e2c3ec22a1be3c37fe3ab516f5785a38->leave($__internal_519478749c95911e2c7d808792472384e2c3ec22a1be3c37fe3ab516f5785a38_prof);

        
        $__internal_6fe973c64223342aad9dc5ef55ce269a90f0e25f0be7211014f3f0954ad7d663->leave($__internal_6fe973c64223342aad9dc5ef55ce269a90f0e25f0be7211014f3f0954ad7d663_prof);

    }

    // line 39
    public function block_form_body($context, array $blocks = array())
    {
        $__internal_e04d9dc6207c3198e3bde3c12066cfa07932b194ed377fc761fa7be17ef7a15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04d9dc6207c3198e3bde3c12066cfa07932b194ed377fc761fa7be17ef7a15f->enter($__internal_e04d9dc6207c3198e3bde3c12066cfa07932b194ed377fc761fa7be17ef7a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_body"));

        $__internal_82ac645aac0d89eda21c9b68c742b6e044800cd938b6b2e623d12651e1c213a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ac645aac0d89eda21c9b68c742b6e044800cd938b6b2e623d12651e1c213a2->enter($__internal_82ac645aac0d89eda21c9b68c742b6e044800cd938b6b2e623d12651e1c213a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_body"));

        // line 40
        echo "
        ";
        
        $__internal_82ac645aac0d89eda21c9b68c742b6e044800cd938b6b2e623d12651e1c213a2->leave($__internal_82ac645aac0d89eda21c9b68c742b6e044800cd938b6b2e623d12651e1c213a2_prof);

        
        $__internal_e04d9dc6207c3198e3bde3c12066cfa07932b194ed377fc761fa7be17ef7a15f->leave($__internal_e04d9dc6207c3198e3bde3c12066cfa07932b194ed377fc761fa7be17ef7a15f_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 40,  246 => 39,  235 => 23,  226 => 22,  206 => 11,  187 => 57,  183 => 55,  175 => 50,  171 => 49,  166 => 47,  163 => 46,  161 => 45,  157 => 44,  149 => 43,  146 => 42,  144 => 39,  139 => 37,  136 => 36,  130 => 35,  119 => 33,  114 => 32,  110 => 31,  102 => 25,  100 => 22,  93 => 18,  83 => 11,  79 => 9,  70 => 6,  50 => 4,  40 => 1,  38 => 5,  36 => 3,  34 => 2,  22 => 1,);
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
{% set titlePage = base_title | trans() %}
{% set tit = (isNew==true?'qba_bit.core.nuevo_X':'qba_bit.core.editar_X') | trans({'X':  titlePage }) %}
{% block title %} {{ tit }} {% endblock %}
{% set paramsUrl = {itemid: app.request.get('itemid'), 'fqid': app.request.get('fqid'), 'owneruid':app.request.get('owneruid')} %}
{% block update -%}


    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <span class=\"username\" style=\"margin-left: 0px;\"><h3 style=\"margin-bottom: 0;margin-top: 0;\">{% block title_caption %} {{ tit }} {% endblock %}</h3></span>
        </div>
        <div class=\"box-tools\" style=\"display: none\">
            <div class=\"dropdown\">
                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownOptions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa fa-fw fa-cogs\"></span>
                    {{ 'qba_bit.core.options' | trans() }}
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownOptions\">
                    {% block dropdown_options  %}

                    {% endblock %}
                </ul>
            </div>
        </div>

    </div>

    {% for tipo, mensajes in app.session.flashbag.all() %}
        {% for mensaje in mensajes %}
            <div class=\"{{ tipo }}\">{{ mensaje }}</div>
        {% endfor %}
    {% endfor %}

    {{ form_start(form, { attr:{id: form.vars.id, novalidate:'novalidate', enctype: 'multipart/form-data' } }) }}
    <div class=\"qb-frm\">
        {% block form_body %}

        {% endblock %}
        <div class=\"row tc\">
            <div class=\"{% if is_granted(role.edit) %}col-xs-6 {% else %} col-xs-12 {% endif %}\">
            {{ form_row(form.submit) }}</div>
            {% if is_granted(role.edit) %}
            <div class=\"col-xs-6\">
                {{ form_row(form.button) }}
                <script>
                    \$(\"#{{ form.button.vars.id }}\").on(\"click\",function (e) {
                        document.location.href = \"{{ url(url.view) }}\";
                    })
                </script>
            </div>
            {% endif %}
        </div>
    </div>
    {{ form_end(form) }}







{% endblock %}






{#{% set isAjax = app.request.isXmlHttpRequest %}
{% if isAjax ==false %}
    {% if doAjax is defined %}
        {% set isAjax =true %}

    {% endif %}
{% endif %}
{% extends  isAjax   ?core.admin.templates.ajax:core.admin.templates.layout %}



{% block title %}
    {% if isNew %}
        {% trans %} qbabit.common.action.new  {% endtrans %}
    {% else %}
        {% trans %} qbabit.common.action.edit  {% endtrans %}
    {% endif %}
    {% block inner_title %} {% endblock %}
{% endblock title %}
 {% block error_type %}
     {% if response_Text.type==\"error\" %}
         alert-danger
     {% else %}
         alert-success
     {% endif %}

 {% endblock %}

       {% block error_icon %}
           {% if response_Text.type==\"error\" %}
               fa-ban
           {% else %}
               fa-success
           {% endif %}

       {% endblock %}
    {% block  error_text %}

        {% for  m in response_Text.values %}

            <div> {{ m }}</div>

        {% endfor %}



    {% endblock %}

{% block content %}


    {% if response_Text.type==\"\" %}
        <script>\$('.alert').hide()</script>

    {% else %}
        <script>\$('.alert').show()</script>

    {% endif %}



    {% include 'QbaBitCoreBundle:Form:_base_include.html.twig' with {'list':[],'onloadAll':'onloadEdit','loading':true,'again':true} %}
    <!-- /.box-header -->
    <!-- form start -->
    {% block from_declare %}{{ form_start(form, { attr:{id:form.vars.id} } ) }} {% endblock %}
    <div class=\"box box-primary edit-form\">

        <!-- /.box-header -->
        <div class=\"box-body\">
            {% block form_body %}
            {% endblock %}

            <!-- /.box-body -->
            {% block buttons %}
                <div class=\"box-footer\" style=\"text-align: center\">
                    <button id=\"{{ form.vars.id }}_button\" type=\"{% block form_debug_b %}button{% endblock %}\"
                            class=\"btn btn-primary\">{% block button_ok %}{% trans %}qbabit.common.action.submit{% endtrans %}{% endblock %}</button>
                    {% block button_cancel %}
                        <a class=\"btn btn-cancel\" href=\"{% block cancel_ref %}{% endblock %}\"
                           onclick=\"last=null;\">{% trans %}
                            qbabit.common.action.cancel{% endtrans %}</a>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>

    </div>

    {% if form._token is defined %}
        {{ form_widget( form._token) }}
    {% endif %}
    {{ form_end(form) }}


{% endblock %}

{% block scripts %}

    {{ parent() }}
    <script>

        //   var executed = false;

        function onloadEdit(e) {

            //   if (executed == true)
            //       return;
            //    executed = true;
            {% block form_debug_sc %}

            PageAjax.edit.setForm('#{{ form.vars.id }}', {{ form.vars.id }}_button, '{% block submit_url %}{{ form.vars.action }}{% endblock %}', '{% block submit_method %}{{ form.vars.method }}{% endblock %}', '.content-wrapper', true);
            PageAjax.edit.editing_text = '{{ 'qbabit.common.action.saving'|trans }}';
            PageAjax.block.img = '{{ asset('bundles/qbabitcore/css/common/images/loading.gif') }}';
            PageAjax.edit.msg.ok = '{{ 'qbabit.common.error.success'|trans }}';
            PageAjax.edit.msg.error = '{{ 'qbabit.common.error.error'|trans }}';
            {% endblock %}

            {% block child_edit_java %}

            {% endblock %}


        }


    </script>
    {% block update_url %}
        <script>
            {% set port = request.server.get('SERVER_PORT')=='80'?\"\":(\":\"~request.server.get('SERVER_PORT')) %}
            {% set begin_uri =request.server.get('SERVER_NAME')~port  %}

    var url = '{{ begin_uri~request.requestUri }}';
            if(url.indexOf('?')!=-1)
                    url = url.substr(0,url.indexOf('?'));

             PageAjax.edit.url ='http://'+ url;
            console.log(PageAjax.edit.url);

        </script> {% endblock %}
{% endblock %}
 {% block additional_javascripts %}

 {% endblock %}
{#
{% block form_debug_b %}submit{% endblock %}
 {% block form_debug_sc %}
{% endblock %}#}", "QbaBitTemplateAdminLTEBundle:Cruds:_edit.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Cruds/_edit.html.twig");
    }
}
