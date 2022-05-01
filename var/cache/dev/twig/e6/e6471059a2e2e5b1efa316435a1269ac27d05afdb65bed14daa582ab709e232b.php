<?php

/* QbaBitCoreBundle:Form/Images:image_file.html.twig */
class __TwigTemplate_14d909bb6ec0e43cfbca880b96aea63116dd3cfe1a9fcb13dd36ef80f08af3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'qbabit_image_file_widget' => array($this, 'block_qbabit_image_file_widget'),
            'qbabit_image_file_param_generator' => array($this, 'block_qbabit_image_file_param_generator'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf663139154668416886fe58d06552a5037b4302c827b5f94b8262a93db36e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf663139154668416886fe58d06552a5037b4302c827b5f94b8262a93db36e8d->enter($__internal_cf663139154668416886fe58d06552a5037b4302c827b5f94b8262a93db36e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Images:image_file.html.twig"));

        $__internal_d310fe6c578e2c734a20267d2a977384abfa9b704130034b0123ad82dfcb57c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d310fe6c578e2c734a20267d2a977384abfa9b704130034b0123ad82dfcb57c6->enter($__internal_d310fe6c578e2c734a20267d2a977384abfa9b704130034b0123ad82dfcb57c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitCoreBundle:Form/Images:image_file.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('qbabit_image_file_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('qbabit_image_file_param_generator', $context, $blocks);
        
        $__internal_cf663139154668416886fe58d06552a5037b4302c827b5f94b8262a93db36e8d->leave($__internal_cf663139154668416886fe58d06552a5037b4302c827b5f94b8262a93db36e8d_prof);

        
        $__internal_d310fe6c578e2c734a20267d2a977384abfa9b704130034b0123ad82dfcb57c6->leave($__internal_d310fe6c578e2c734a20267d2a977384abfa9b704130034b0123ad82dfcb57c6_prof);

    }

    // line 2
    public function block_qbabit_image_file_widget($context, array $blocks = array())
    {
        $__internal_cc5b6ad66ccf034063fc5ea61179535b31714cc3007a6f76c93acf87157c4192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5b6ad66ccf034063fc5ea61179535b31714cc3007a6f76c93acf87157c4192->enter($__internal_cc5b6ad66ccf034063fc5ea61179535b31714cc3007a6f76c93acf87157c4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_image_file_widget"));

        $__internal_b7aaafd44c446ea4643490ce355c1579ebb1f83565fa0acad325669cb5f682ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aaafd44c446ea4643490ce355c1579ebb1f83565fa0acad325669cb5f682ae->enter($__internal_b7aaafd44c446ea4643490ce355c1579ebb1f83565fa0acad325669cb5f682ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_image_file_widget"));

        // line 3
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 6
        if ((isset($context["vertical"]) ? $context["vertical"] : $this->getContext($context, "vertical"))) {
            // line 7
            echo "                <div class=\"row\">
                    <div class=\"col-xs-12\" style=\"margin-top: 5px;text-align: center\">

                        ";
            // line 10
            $context["img"] = $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "web_base", array()), "thumbnail");
            // line 11
            echo "                        ";
            if (twig_in_filter("tmp", (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")))) {
                // line 12
                echo "                            ";
                $context["img"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/images/no-img.png");
                // line 13
                echo "                        ";
            }
            // line 14
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" style=\"/*width: 100%*/\">

                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 21
            $this->loadTemplate("@QbaBitCore/Form/Basic/includes/_base_file_control.html.twig", "QbaBitCoreBundle:Form/Images:image_file.html.twig", 21)->display(array_merge($context, array("margin" => 12, "select_text" => "Seleccionar Imágen")));
            // line 22
            echo "                    </div>
                </div>
            ";
        } else {
            // line 25
            echo "                <div class=\"row\">
                    <div class=\"col-xs-2\" style=\"text-align: center\">


                        ";
            // line 29
            $context["img"] = $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "web_base", array()), "thumbnail");
            // line 30
            echo "                        ";
            if (twig_in_filter("tmp", (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")))) {
                // line 31
                echo "                            ";
                $context["img"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/images/no-img.png");
                // line 32
                echo "                        ";
            }
            // line 33
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" style=\"/*width: 100%*/\">

                    </div>
                    <div class=\"col-xs-10\">
                        ";
            // line 37
            $this->loadTemplate("@QbaBitCore/Form/Basic/includes/_base_file_control.html.twig", "QbaBitCoreBundle:Form/Images:image_file.html.twig", 37)->display($context);
            // line 38
            echo "                    </div>
                </div>

            ";
        }
        // line 42
        echo "        </div>


    </div>

    <script>

    </script>
";
        
        $__internal_b7aaafd44c446ea4643490ce355c1579ebb1f83565fa0acad325669cb5f682ae->leave($__internal_b7aaafd44c446ea4643490ce355c1579ebb1f83565fa0acad325669cb5f682ae_prof);

        
        $__internal_cc5b6ad66ccf034063fc5ea61179535b31714cc3007a6f76c93acf87157c4192->leave($__internal_cc5b6ad66ccf034063fc5ea61179535b31714cc3007a6f76c93acf87157c4192_prof);

    }

    // line 52
    public function block_qbabit_image_file_param_generator($context, array $blocks = array())
    {
        $__internal_1bbb397a6f0c66d6844ef3fb48dc032af9108365bf020ef0dfc5e431c042416e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbb397a6f0c66d6844ef3fb48dc032af9108365bf020ef0dfc5e431c042416e->enter($__internal_1bbb397a6f0c66d6844ef3fb48dc032af9108365bf020ef0dfc5e431c042416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_image_file_param_generator"));

        $__internal_6a578a2ff2f8166c2ac09cb1204c5cd6940c43700e76b5162568f47bbb91256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a578a2ff2f8166c2ac09cb1204c5cd6940c43700e76b5162568f47bbb91256c->enter($__internal_6a578a2ff2f8166c2ac09cb1204c5cd6940c43700e76b5162568f47bbb91256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "qbabit_image_file_param_generator"));

        // line 53
        echo "    'web_base'=>   \$this->container->get('qbabit_core.global.config')->getConfigValue('";
        echo twig_escape_filter($this->env, (isset($context["web_dir"]) ? $context["web_dir"] : $this->getContext($context, "web_dir")), "html", null, true);
        echo "'),
    'dir_base'=>   \$this->container->get('qbabit_core.global.config')->getConfigValue('";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["dir_dir"]) ? $context["dir_dir"] : $this->getContext($context, "dir_dir")), "html", null, true);
        echo "')
";
        
        $__internal_6a578a2ff2f8166c2ac09cb1204c5cd6940c43700e76b5162568f47bbb91256c->leave($__internal_6a578a2ff2f8166c2ac09cb1204c5cd6940c43700e76b5162568f47bbb91256c_prof);

        
        $__internal_1bbb397a6f0c66d6844ef3fb48dc032af9108365bf020ef0dfc5e431c042416e->leave($__internal_1bbb397a6f0c66d6844ef3fb48dc032af9108365bf020ef0dfc5e431c042416e_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitCoreBundle:Form/Images:image_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  155 => 53,  146 => 52,  128 => 42,  122 => 38,  120 => 37,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  101 => 29,  95 => 25,  90 => 22,  88 => 21,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  61 => 7,  59 => 6,  54 => 3,  45 => 2,  35 => 52,  32 => 51,  30 => 2,  27 => 1,);
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
{% block qbabit_image_file_widget %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% if vertical %}
                <div class=\"row\">
                    <div class=\"col-xs-12\" style=\"margin-top: 5px;text-align: center\">

                        {% set img=data|QbRenderImg(form.vars.web_base,'thumbnail') %}
                        {% if 'tmp' in img %}
                            {% set img = asset('bundles/qbabitcore/css/images/no-img.png') %}
                        {% endif %}
                        <img src=\"{{ img }}\" style=\"/*width: 100%*/\">

                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        {% include '@QbaBitCore/Form/Basic/includes/_base_file_control.html.twig' with {margin:12,select_text:\"Seleccionar Imágen\"} %}
                    </div>
                </div>
            {% else %}
                <div class=\"row\">
                    <div class=\"col-xs-2\" style=\"text-align: center\">


                        {% set img= data|QbRenderImg(form.vars.web_base,'thumbnail') %}
                        {% if 'tmp' in img %}
                            {% set img = asset('bundles/qbabitcore/css/images/no-img.png') %}
                        {% endif %}
                        <img src=\"{{ img }}\" style=\"/*width: 100%*/\">

                    </div>
                    <div class=\"col-xs-10\">
                        {% include '@QbaBitCore/Form/Basic/includes/_base_file_control.html.twig' %}
                    </div>
                </div>

            {% endif %}
        </div>


    </div>

    <script>

    </script>
{% endblock %}

{% block qbabit_image_file_param_generator %}
    'web_base'=>   \$this->container->get('qbabit_core.global.config')->getConfigValue('{{ web_dir }}'),
    'dir_base'=>   \$this->container->get('qbabit_core.global.config')->getConfigValue('{{ dir_dir }}')
{% endblock %}
", "QbaBitCoreBundle:Form/Images:image_file.html.twig", "/var/www/src/QbaBit/CoreBundle/Resources/views/Form/Images/image_file.html.twig");
    }
}
