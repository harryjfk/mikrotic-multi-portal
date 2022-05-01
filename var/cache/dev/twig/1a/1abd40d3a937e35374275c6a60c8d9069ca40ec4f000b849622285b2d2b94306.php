<?php

/* QbaBitNautaBundle:Default:index.html.twig */
class __TwigTemplate_e827b87bcaaaa47602343e75b4fc285a97edc57b386b248c7c29d744e99ea604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QbaBitNautaBundle:Default:layout.html.twig", "QbaBitNautaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QbaBitNautaBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07d2babdd6addf8107b733a7bc11968f8eeb1370600554581d1d065c2a9489fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d2babdd6addf8107b733a7bc11968f8eeb1370600554581d1d065c2a9489fc->enter($__internal_07d2babdd6addf8107b733a7bc11968f8eeb1370600554581d1d065c2a9489fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitNautaBundle:Default:index.html.twig"));

        $__internal_d1709241dcb246aa75e351d1bcd6d830e978c2807d8c79ca395bb3ef4a2a0b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1709241dcb246aa75e351d1bcd6d830e978c2807d8c79ca395bb3ef4a2a0b9a->enter($__internal_d1709241dcb246aa75e351d1bcd6d830e978c2807d8c79ca395bb3ef4a2a0b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitNautaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d2babdd6addf8107b733a7bc11968f8eeb1370600554581d1d065c2a9489fc->leave($__internal_07d2babdd6addf8107b733a7bc11968f8eeb1370600554581d1d065c2a9489fc_prof);

        
        $__internal_d1709241dcb246aa75e351d1bcd6d830e978c2807d8c79ca395bb3ef4a2a0b9a->leave($__internal_d1709241dcb246aa75e351d1bcd6d830e978c2807d8c79ca395bb3ef4a2a0b9a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_161fb5297050260460a7b1ae8bab9d7fd22c38bc8bedfa5b095f7dfc8753876d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161fb5297050260460a7b1ae8bab9d7fd22c38bc8bedfa5b095f7dfc8753876d->enter($__internal_161fb5297050260460a7b1ae8bab9d7fd22c38bc8bedfa5b095f7dfc8753876d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d878f897dbf04007be940f28c0918bd9262f1418d6bffdd8112e22b977729989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d878f897dbf04007be940f28c0918bd9262f1418d6bffdd8112e22b977729989->enter($__internal_d878f897dbf04007be940f28c0918bd9262f1418d6bffdd8112e22b977729989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Dirección</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getAddress", array(), "method"), "html", null, true);
        echo "</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Interfaz</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\">";
        // line 15
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getInterface", array()) == false)) ? ("Existen problemas de conexión con el Mikrotik") : ($this->getAttribute($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getInterface", array()), "name", array()))), "html", null, true);
        echo "</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Condición</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq\">";
        // line 21
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getCondicion", array()) == false)) ? ("Existen problemas de conexión con el Mikrotik") : ($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getCondicion", array()))), "html", null, true);
        echo "</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">CCQ</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq1\"> ";
        // line 27
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getCCQ", array()) == false)) ? ("Existen problemas de conexión con el Mikrotik") : (($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getCCQ", array()) . "%"))), "html", null, true);
        echo "</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Señal</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq2\">";
        // line 33
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getPower", array()) == false)) ? ("Existen problemas de conexión con el Mikrotik") : (($this->getAttribute((isset($context["mk"]) ? $context["mk"] : $this->getContext($context, "mk")), "getPower", array()) . "dBm"))), "html", null, true);
        echo "</p>

                </div>
            </div>
        </div>
    </section>

    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Acciones</h2>
                    <hr class=\"my-4\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('2');\">


                        <i class=\"fas fa-4x fa-gem text-primary mb-3 sr-icon-1\"></i>
                        <h3 class=\"mb-3\">Reconectar</h3>
                        <p class=\"text-muted mb-0\"> Realiza una nueva asignación de dirección de la conexión , la cual se pierde después de un rato de inactividad.</p>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('3');\">
                        <i class=\"fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2\"></i>
                        <h3 class=\"mb-3\">Refrescar</h3>
                        <p class=\"text-muted mb-0\">    Refresca la asignación de dirección de la conexión. Usar en caso de perdida de conexión una vez iniciada la sesion.
                        </p>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('1');\">

                        <i class=\"fas fa-4x fa-code text-primary mb-3 sr-icon-3\"></i>
                        <h3 class=\"mb-3\">Cerrar sesión Forzosa</h3>
                        <p class=\"text-muted mb-0\"> Realiza un cierre forzado de la conexión. Usar en caso de que se pierda la conexión o que se pierda la pantalla con el cierre de ETECSA.
                        </p>
                        </button>
                    </div>
                </div>
                ";
        // line 84
        echo "                    ";
        // line 85
        echo "                        ";
        // line 86
        echo "                        ";
        // line 87
        echo "                        ";
        // line 88
        echo "                    ";
        // line 89
        echo "                ";
        // line 90
        echo "            </div>
        </div>
    </section>


";
        
        $__internal_d878f897dbf04007be940f28c0918bd9262f1418d6bffdd8112e22b977729989->leave($__internal_d878f897dbf04007be940f28c0918bd9262f1418d6bffdd8112e22b977729989_prof);

        
        $__internal_161fb5297050260460a7b1ae8bab9d7fd22c38bc8bedfa5b095f7dfc8753876d->leave($__internal_161fb5297050260460a7b1ae8bab9d7fd22c38bc8bedfa5b095f7dfc8753876d_prof);

    }

    // line 97
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3ab5c0db314d8bd9b8c6010366d5b44a27c5288f3a47464cfc39c243c054e497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab5c0db314d8bd9b8c6010366d5b44a27c5288f3a47464cfc39c243c054e497->enter($__internal_3ab5c0db314d8bd9b8c6010366d5b44a27c5288f3a47464cfc39c243c054e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_2a1ceaf2bedf079b80144d33adc81bd5a4344355ddd660024f28f4061d20d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1ceaf2bedf079b80144d33adc81bd5a4344355ddd660024f28f4061d20d8cd->enter($__internal_2a1ceaf2bedf079b80144d33adc81bd5a4344355ddd660024f28f4061d20d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 98
        echo "
    <script type=\"text/javascript\">





        function setCCQ()
        {

            \$.ajax({
                url: \"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_nauta_index", array("type" => "ccq"));
        echo "\",
                /* method:method,*/
                data: null,
                type: \"GET\",
                /*  dataType : 'html',*/
                enctype: 'multipart/form-data',
                success: function(e){
                    var w =e;
                    if(w.return==false)
                    {
                        \$(\"#ccq\").html(\"Existen problemas de conexión con el Mikrotik\");
                        \$(\"#ccq1\").html(\"Existen problemas de conexión con el Mikrotik\");
                        \$(\"#ccq2\").html(\"Existen problemas de conexión con el Mikrotik\");
                    }
                    else
                    {
                        \$(\"#ccq\").html(w.return);
                        \$(\"#ccq1\").html(w.ccq+\"%\");
                        \$(\"#ccq2\").html(w.signal+\"dBm\");
                    }

                    setTimeout(function () {
                        setCCQ();
                    },1000);
                },
                error: function(){
                    alert(\"Error al momento de buscar la calidad\");

                },
                processData: false,
                contentType: false

            });
        }
        function renewDHCP(type)
        {

            var url = \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("qba_bit_nauta_index", array("type" =>  -1)), "html", null, true);
        echo "\".replace(\"-1\",type);

            \$.ajax({
                url: url ,
                /* method:method,*/
                data: null,
                type: \"GET\",
                /*  dataType : 'html',*/
                enctype: 'multipart/form-data',
                success: function(e){

                    if(e.return==0)
                        alert(\"No se pudo renovar la conexion\");
                    else
                    {
                        var w = e;
                        document.location.href = w.url;
                    }
                },
                error: function(){
                    alert(\"No se pudo renovar la conexion\");

                },
                processData: false,
                contentType: false

            });

        }

        setCCQ();

    </script>
";
        
        $__internal_2a1ceaf2bedf079b80144d33adc81bd5a4344355ddd660024f28f4061d20d8cd->leave($__internal_2a1ceaf2bedf079b80144d33adc81bd5a4344355ddd660024f28f4061d20d8cd_prof);

        
        $__internal_3ab5c0db314d8bd9b8c6010366d5b44a27c5288f3a47464cfc39c243c054e497->leave($__internal_3ab5c0db314d8bd9b8c6010366d5b44a27c5288f3a47464cfc39c243c054e497_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitNautaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 146,  196 => 109,  183 => 98,  174 => 97,  159 => 90,  157 => 89,  155 => 88,  153 => 87,  151 => 86,  149 => 85,  147 => 84,  94 => 33,  85 => 27,  76 => 21,  67 => 15,  58 => 9,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"QbaBitNautaBundle:Default:layout.html.twig\" %}
{% block content %}
    <section class=\"bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Dirección</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\">{{ mk.getAddress() }}</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Interfaz</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\">{{ mk.getInterface==false? \"Existen problemas de conexión con el Mikrotik\":mk.getInterface.name }}</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Condición</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq\">{{ mk.getCondicion==false? \"Existen problemas de conexión con el Mikrotik\": mk.getCondicion}}</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">CCQ</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq1\"> {{ mk.getCCQ==false? \"Existen problemas de conexión con el Mikrotik\": (mk.getCCQ~\"%\") }}</p>

                </div>
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading text-white\">Señal</h2>
                    <hr class=\"light my-4\">
                    <p class=\"text-faded mb-4\" id=\"ccq2\">{{ mk.getPower==false? \"Existen problemas de conexión con el Mikrotik\": (mk.getPower~\"dBm\")}}</p>

                </div>
            </div>
        </div>
    </section>

    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Acciones</h2>
                    <hr class=\"my-4\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('2');\">


                        <i class=\"fas fa-4x fa-gem text-primary mb-3 sr-icon-1\"></i>
                        <h3 class=\"mb-3\">Reconectar</h3>
                        <p class=\"text-muted mb-0\"> Realiza una nueva asignación de dirección de la conexión , la cual se pierde después de un rato de inactividad.</p>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('3');\">
                        <i class=\"fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2\"></i>
                        <h3 class=\"mb-3\">Refrescar</h3>
                        <p class=\"text-muted mb-0\">    Refresca la asignación de dirección de la conexión. Usar en caso de perdida de conexión una vez iniciada la sesion.
                        </p>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box mt-5 mx-auto\">
                        <button style=\"background: none;border: none;\" type=\"button\"  onclick=\"renewDHCP('1');\">

                        <i class=\"fas fa-4x fa-code text-primary mb-3 sr-icon-3\"></i>
                        <h3 class=\"mb-3\">Cerrar sesión Forzosa</h3>
                        <p class=\"text-muted mb-0\"> Realiza un cierre forzado de la conexión. Usar en caso de que se pierda la conexión o que se pierda la pantalla con el cierre de ETECSA.
                        </p>
                        </button>
                    </div>
                </div>
                {#<div class=\"col-lg-3 col-md-6 text-center\">#}
                    {#<div class=\"service-box mt-5 mx-auto\">#}
                        {#<i class=\"fas fa-4x fa-heart text-primary mb-3 sr-icon-4\"></i>#}
                        {#<h3 class=\"mb-3\">Made with Love</h3>#}
                        {#<p class=\"text-muted mb-0\">You have to make your websites with love these days!</p>#}
                    {#</div>#}
                {#</div>#}
            </div>
        </div>
    </section>


{% endblock %}

{% block scripts %}

    <script type=\"text/javascript\">





        function setCCQ()
        {

            \$.ajax({
                url: \"{{ url(\"qba_bit_nauta_index\",{type:\"ccq\"}) }}\",
                /* method:method,*/
                data: null,
                type: \"GET\",
                /*  dataType : 'html',*/
                enctype: 'multipart/form-data',
                success: function(e){
                    var w =e;
                    if(w.return==false)
                    {
                        \$(\"#ccq\").html(\"Existen problemas de conexión con el Mikrotik\");
                        \$(\"#ccq1\").html(\"Existen problemas de conexión con el Mikrotik\");
                        \$(\"#ccq2\").html(\"Existen problemas de conexión con el Mikrotik\");
                    }
                    else
                    {
                        \$(\"#ccq\").html(w.return);
                        \$(\"#ccq1\").html(w.ccq+\"%\");
                        \$(\"#ccq2\").html(w.signal+\"dBm\");
                    }

                    setTimeout(function () {
                        setCCQ();
                    },1000);
                },
                error: function(){
                    alert(\"Error al momento de buscar la calidad\");

                },
                processData: false,
                contentType: false

            });
        }
        function renewDHCP(type)
        {

            var url = \"{{ url(\"qba_bit_nauta_index\",{\"type\":-1}) }}\".replace(\"-1\",type);

            \$.ajax({
                url: url ,
                /* method:method,*/
                data: null,
                type: \"GET\",
                /*  dataType : 'html',*/
                enctype: 'multipart/form-data',
                success: function(e){

                    if(e.return==0)
                        alert(\"No se pudo renovar la conexion\");
                    else
                    {
                        var w = e;
                        document.location.href = w.url;
                    }
                },
                error: function(){
                    alert(\"No se pudo renovar la conexion\");

                },
                processData: false,
                contentType: false

            });

        }

        setCCQ();

    </script>
{% endblock %}", "QbaBitNautaBundle:Default:index.html.twig", "/var/www/src/QbaBit/NautaBundle/Resources/views/Default/index.html.twig");
    }
}
