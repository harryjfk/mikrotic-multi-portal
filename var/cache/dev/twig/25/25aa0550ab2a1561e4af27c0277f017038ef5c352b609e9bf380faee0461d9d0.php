<?php

/* QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig */
class __TwigTemplate_b2d19d3f09d7a53c4b3a66827d4dd46cefe1c8791a31e5a197a35db70d40182d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig", 1);
        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'cssContainer' => array($this, 'block_cssContainer'),
            'update' => array($this, 'block_update'),
            'login' => array($this, 'block_login'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da9e1e72f0df093fa9f703f107320dbe4f7f5a532076328eecd28cbef6934acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9e1e72f0df093fa9f703f107320dbe4f7f5a532076328eecd28cbef6934acb->enter($__internal_da9e1e72f0df093fa9f703f107320dbe4f7f5a532076328eecd28cbef6934acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig"));

        $__internal_5bd7df8060c8a46dd83ed235c253f067bdc286310761bfea8fb24f9124049bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd7df8060c8a46dd83ed235c253f067bdc286310761bfea8fb24f9124049bc1->enter($__internal_5bd7df8060c8a46dd83ed235c253f067bdc286310761bfea8fb24f9124049bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9e1e72f0df093fa9f703f107320dbe4f7f5a532076328eecd28cbef6934acb->leave($__internal_da9e1e72f0df093fa9f703f107320dbe4f7f5a532076328eecd28cbef6934acb_prof);

        
        $__internal_5bd7df8060c8a46dd83ed235c253f067bdc286310761bfea8fb24f9124049bc1->leave($__internal_5bd7df8060c8a46dd83ed235c253f067bdc286310761bfea8fb24f9124049bc1_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_0373e56b2d576412c3a8dee8f14dc5f6693b21caa2987b863a215cd69eb25129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0373e56b2d576412c3a8dee8f14dc5f6693b21caa2987b863a215cd69eb25129->enter($__internal_0373e56b2d576412c3a8dee8f14dc5f6693b21caa2987b863a215cd69eb25129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        $__internal_0442af60c4e85eb550001ca351accc24f116d46e96ece845fd7a09e709e956f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0442af60c4e85eb550001ca351accc24f116d46e96ece845fd7a09e709e956f7->enter($__internal_0442af60c4e85eb550001ca351accc24f116d46e96ece845fd7a09e709e956f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
";
        
        $__internal_0442af60c4e85eb550001ca351accc24f116d46e96ece845fd7a09e709e956f7->leave($__internal_0442af60c4e85eb550001ca351accc24f116d46e96ece845fd7a09e709e956f7_prof);

        
        $__internal_0373e56b2d576412c3a8dee8f14dc5f6693b21caa2987b863a215cd69eb25129->leave($__internal_0373e56b2d576412c3a8dee8f14dc5f6693b21caa2987b863a215cd69eb25129_prof);

    }

    // line 8
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_a74425fcfc84bd28dbc7227159ecabdde48637fee316058acca9eca7c1262f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74425fcfc84bd28dbc7227159ecabdde48637fee316058acca9eca7c1262f40->enter($__internal_a74425fcfc84bd28dbc7227159ecabdde48637fee316058acca9eca7c1262f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        $__internal_7eac3bd1a811424bc8ae517e84d96e81e217905143c439d5c28109f104f745ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eac3bd1a811424bc8ae517e84d96e81e217905143c439d5c28109f104f745ad->enter($__internal_7eac3bd1a811424bc8ae517e84d96e81e217905143c439d5c28109f104f745ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        // line 9
        echo "    ";
        echo (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ("class=\"hold-transition skin-blue sidebar-mini\"") : ("class=\"hold-transition login-page\""));
        echo "
";
        
        $__internal_7eac3bd1a811424bc8ae517e84d96e81e217905143c439d5c28109f104f745ad->leave($__internal_7eac3bd1a811424bc8ae517e84d96e81e217905143c439d5c28109f104f745ad_prof);

        
        $__internal_a74425fcfc84bd28dbc7227159ecabdde48637fee316058acca9eca7c1262f40->leave($__internal_a74425fcfc84bd28dbc7227159ecabdde48637fee316058acca9eca7c1262f40_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c918a516e942ba1d23f3d3c4ac5873bcc4f0297356cbc130c14e7a258c444c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c918a516e942ba1d23f3d3c4ac5873bcc4f0297356cbc130c14e7a258c444c8->enter($__internal_1c918a516e942ba1d23f3d3c4ac5873bcc4f0297356cbc130c14e7a258c444c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2de751072739090229669fe8cb687d445704a560689a223c7d1832261d2b2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2de751072739090229669fe8cb687d445704a560689a223c7d1832261d2b2e1->enter($__internal_a2de751072739090229669fe8cb687d445704a560689a223c7d1832261d2b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 15
            echo "
    <div class=\"wrapper\">

        <!-- Main Header -->
        <header class=\"main-header\">
            <!-- Logo -->
            <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "index_url", array()));
            echo "\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "name_mini", array()), "html", null, true);
            echo "</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "name", array()), "html", null, true);
            echo "</span>
            </a>

            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        ";
            // line 37
            echo $this->env->getExtension('QbaBit\CoreBundle\Twig\NavigatorExtension')->renderNavigator();
            echo "
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar\">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">

                <!-- Sidebar user panel (optional) -->
                <div class=\"user-panel\">

                    <div class=\"pull-left image\">
                        <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('QbaBit\CoreBundle\Twig\ImageExtension')->renderImg($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()), "security"), "html", null, true);
            echo "\"
                             class=\"img-circle\" alt=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullName", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullName", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullName", array(), "method"), "html", null, true);
            echo "</p>
                        <!-- Status -->
                        ";
            // line 59
            echo "                    </div>
                </div>

                <ul class=\"sidebar-menu\">
                ";
            // line 63
            echo $this->env->getExtension('QbaBit\CoreBundle\Twig\MenuExtension')->renderMenu();
            echo "
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">

            <!-- Content Header (Page header) -->
            ";
            // line 74
            echo "            ";
            // line 75
            echo "            ";
            // line 76
            echo "            ";
            // line 77
            echo "            ";
            // line 78
            echo "            ";
            // line 79
            echo "            ";
            // line 80
            echo "            ";
            // line 81
            echo "            ";
            // line 82
            echo "            ";
            // line 83
            echo "
            <!-- Main content -->
            <section class=\"content\">
                <div class=\"";
            // line 86
            $this->displayBlock('cssContainer', $context, $blocks);
            echo "\"
                     id=\"dvupdate\">";
            // line 87
            $this->displayBlock('update', $context, $blocks);
            echo "</div>
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\">
                ";
            // line 99
            echo "            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; ";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo " <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "index_url", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "name", array()), "html", null, true);
            echo "</a>.</strong> All
            rights reserved.
        </footer>

        <!-- Control Sidebar -->
        ";
            // line 107
            echo "        ";
            // line 108
            echo "        ";
            // line 109
            echo "        ";
            // line 110
            echo "        ";
            // line 111
            echo "        ";
            // line 112
            echo "        ";
            // line 113
            echo "        ";
            // line 114
            echo "        ";
            // line 115
            echo "        ";
            // line 116
            echo "        ";
            // line 117
            echo "        ";
            // line 118
            echo "        ";
            // line 119
            echo "        ";
            // line 120
            echo "        ";
            // line 121
            echo "        ";
            // line 122
            echo "
        ";
            // line 124
            echo "        ";
            // line 125
            echo "
        ";
            // line 127
            echo "        ";
            // line 128
            echo "        ";
            // line 129
            echo "        ";
            // line 130
            echo "        ";
            // line 131
            echo "        ";
            // line 132
            echo "
        ";
            // line 134
            echo "        ";
            // line 135
            echo "        ";
            // line 136
            echo "        ";
            // line 137
            echo "        ";
            // line 138
            echo "        ";
            // line 139
            echo "        ";
            // line 140
            echo "        ";
            // line 141
            echo "        ";
            // line 142
            echo "        ";
            // line 143
            echo "
        ";
            // line 145
            echo "        ";
            // line 146
            echo "        ";
            // line 147
            echo "        ";
            // line 148
            echo "        ";
            // line 149
            echo "        ";
            // line 150
            echo "        ";
            // line 151
            echo "
        ";
            // line 153
            echo "        ";
            // line 154
            echo "        ";
            // line 155
            echo "        ";
            // line 156
            echo "        ";
            // line 157
            echo "        ";
            // line 158
            echo "        ";
            // line 159
            echo "        ";
            // line 160
            echo "        ";
            // line 161
            echo "
        ";
            // line 163
            echo "        ";
            // line 164
            echo "        ";
            // line 165
            echo "        ";
            // line 166
            echo "        ";
            // line 167
            echo "
        ";
            // line 169
            echo "        ";
            // line 170
            echo "        ";
            // line 171
            echo "        ";
            // line 172
            echo "        ";
            // line 173
            echo "        ";
            // line 174
            echo "        ";
            // line 175
            echo "        ";
            // line 176
            echo "        ";
            // line 177
            echo "        ";
            // line 178
            echo "        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    </div>
    ";
        } else {
            // line 184
            echo "        ";
            $this->displayBlock('login', $context, $blocks);
            // line 185
            echo "    ";
        }
        
        $__internal_a2de751072739090229669fe8cb687d445704a560689a223c7d1832261d2b2e1->leave($__internal_a2de751072739090229669fe8cb687d445704a560689a223c7d1832261d2b2e1_prof);

        
        $__internal_1c918a516e942ba1d23f3d3c4ac5873bcc4f0297356cbc130c14e7a258c444c8->leave($__internal_1c918a516e942ba1d23f3d3c4ac5873bcc4f0297356cbc130c14e7a258c444c8_prof);

    }

    // line 86
    public function block_cssContainer($context, array $blocks = array())
    {
        $__internal_80bcb4ba4cc67a2649b79a9a996f50da614b0db9711a448c09a5bc1213ec1989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bcb4ba4cc67a2649b79a9a996f50da614b0db9711a448c09a5bc1213ec1989->enter($__internal_80bcb4ba4cc67a2649b79a9a996f50da614b0db9711a448c09a5bc1213ec1989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cssContainer"));

        $__internal_ba48dd3cd48952a00714230b02eca9854fa83d16f4ed6ddf570e73a4a4e745ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba48dd3cd48952a00714230b02eca9854fa83d16f4ed6ddf570e73a4a4e745ad->enter($__internal_ba48dd3cd48952a00714230b02eca9854fa83d16f4ed6ddf570e73a4a4e745ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cssContainer"));

        echo "box box-widget";
        
        $__internal_ba48dd3cd48952a00714230b02eca9854fa83d16f4ed6ddf570e73a4a4e745ad->leave($__internal_ba48dd3cd48952a00714230b02eca9854fa83d16f4ed6ddf570e73a4a4e745ad_prof);

        
        $__internal_80bcb4ba4cc67a2649b79a9a996f50da614b0db9711a448c09a5bc1213ec1989->leave($__internal_80bcb4ba4cc67a2649b79a9a996f50da614b0db9711a448c09a5bc1213ec1989_prof);

    }

    // line 87
    public function block_update($context, array $blocks = array())
    {
        $__internal_57bc9031857037149afb41905636ddc89bbf1da2b02979c6c29fcdfb49d9cdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bc9031857037149afb41905636ddc89bbf1da2b02979c6c29fcdfb49d9cdf7->enter($__internal_57bc9031857037149afb41905636ddc89bbf1da2b02979c6c29fcdfb49d9cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        $__internal_e1a73ad2ddf9c0930547dbfeb35f23334d71ea7870c74cb6d71e2aa30802d511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a73ad2ddf9c0930547dbfeb35f23334d71ea7870c74cb6d71e2aa30802d511->enter($__internal_e1a73ad2ddf9c0930547dbfeb35f23334d71ea7870c74cb6d71e2aa30802d511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "update"));

        
        $__internal_e1a73ad2ddf9c0930547dbfeb35f23334d71ea7870c74cb6d71e2aa30802d511->leave($__internal_e1a73ad2ddf9c0930547dbfeb35f23334d71ea7870c74cb6d71e2aa30802d511_prof);

        
        $__internal_57bc9031857037149afb41905636ddc89bbf1da2b02979c6c29fcdfb49d9cdf7->leave($__internal_57bc9031857037149afb41905636ddc89bbf1da2b02979c6c29fcdfb49d9cdf7_prof);

    }

    // line 184
    public function block_login($context, array $blocks = array())
    {
        $__internal_3108083fed19fae28d44413f001b1d5fb7044ae2e99e6f727a5f8b04e4f5b443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3108083fed19fae28d44413f001b1d5fb7044ae2e99e6f727a5f8b04e4f5b443->enter($__internal_3108083fed19fae28d44413f001b1d5fb7044ae2e99e6f727a5f8b04e4f5b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_0c05884284243f134cf368f2dab97fc0d32b161585a0316c9a80674123bbc1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c05884284243f134cf368f2dab97fc0d32b161585a0316c9a80674123bbc1a1->enter($__internal_0c05884284243f134cf368f2dab97fc0d32b161585a0316c9a80674123bbc1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_0c05884284243f134cf368f2dab97fc0d32b161585a0316c9a80674123bbc1a1->leave($__internal_0c05884284243f134cf368f2dab97fc0d32b161585a0316c9a80674123bbc1a1_prof);

        
        $__internal_3108083fed19fae28d44413f001b1d5fb7044ae2e99e6f727a5f8b04e4f5b443->leave($__internal_3108083fed19fae28d44413f001b1d5fb7044ae2e99e6f727a5f8b04e4f5b443_prof);

    }

    // line 188
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3a313971cdf5e7fd178863351749475ec35a02ced47d43f9c17985b0cef7394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a313971cdf5e7fd178863351749475ec35a02ced47d43f9c17985b0cef7394->enter($__internal_d3a313971cdf5e7fd178863351749475ec35a02ced47d43f9c17985b0cef7394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e400ad2df748d12006d4e113b357635d5c3c592bcdea45e4cb27573df42c7fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e400ad2df748d12006d4e113b357635d5c3c592bcdea45e4cb27573df42c7fa3->enter($__internal_e400ad2df748d12006d4e113b357635d5c3c592bcdea45e4cb27573df42c7fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 189
        echo "
    <link rel=\"icon\" href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "app", array()), "image", array())), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\"
          href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"     href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/makeclean/libraries/fonts/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Font Awesome -->
    ";
        // line 202
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/toastr.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/core.css"), "html", null, true);
        echo "\">


    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/css/style.css"), "html", null, true);
        echo "\">

    <!--Gallery -->
    <link rel=\"stylesheet\" href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/css/lightgallery.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/css/lg-fb-comment-box.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/css/lg-transitions.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/css/introjs.css"), "html", null, true);
        echo "\">

  ";
        
        $__internal_e400ad2df748d12006d4e113b357635d5c3c592bcdea45e4cb27573df42c7fa3->leave($__internal_e400ad2df748d12006d4e113b357635d5c3c592bcdea45e4cb27573df42c7fa3_prof);

        
        $__internal_d3a313971cdf5e7fd178863351749475ec35a02ced47d43f9c17985b0cef7394->leave($__internal_d3a313971cdf5e7fd178863351749475ec35a02ced47d43f9c17985b0cef7394_prof);

    }

    // line 239
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec972e5baf840960dc88cae988ff6e4402e26512df3be2e770e8a55479ba75b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec972e5baf840960dc88cae988ff6e4402e26512df3be2e770e8a55479ba75b8->enter($__internal_ec972e5baf840960dc88cae988ff6e4402e26512df3be2e770e8a55479ba75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85c1c713c0deedd0f3e0e19c2cb3a0b19cb50457eb665643ce7dad2985b03208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c1c713c0deedd0f3e0e19c2cb3a0b19cb50457eb665643ce7dad2985b03208->enter($__internal_85c1c713c0deedd0f3e0e19c2cb3a0b19cb50457eb665643ce7dad2985b03208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        echo "
    ";
        // line 244
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   ";
        // line 251
        echo "    <!-- jQuery 2.2.3 -->
      <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

     <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/js/functions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabitcore/js/toastr.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 258
        echo "
    <!-- AdminLTE App -->
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/js/app.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datepicker -->


    <!-- lightgallery plugins -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lightgallery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lg-thumbnail.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lg-fullscreen.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lg-hash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lg-pager.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/gallery/js/lg-zoom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/js/intro.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/qbabittemplateadminlte/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 285
        echo "    <script>

     /*   function   QbabitJavascripts() {
            alert(\"aaa\");
        }
        jQuery(function () {
            QbabitJavascripts();
        });*/
    </script>
";
        
        $__internal_85c1c713c0deedd0f3e0e19c2cb3a0b19cb50457eb665643ce7dad2985b03208->leave($__internal_85c1c713c0deedd0f3e0e19c2cb3a0b19cb50457eb665643ce7dad2985b03208_prof);

        
        $__internal_ec972e5baf840960dc88cae988ff6e4402e26512df3be2e770e8a55479ba75b8->leave($__internal_ec972e5baf840960dc88cae988ff6e4402e26512df3be2e770e8a55479ba75b8_prof);

    }

    public function getTemplateName()
    {
        return "QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 285,  644 => 276,  640 => 275,  636 => 274,  632 => 273,  628 => 272,  624 => 271,  620 => 270,  616 => 269,  612 => 268,  608 => 267,  604 => 266,  595 => 260,  591 => 258,  587 => 256,  583 => 255,  578 => 253,  574 => 251,  569 => 244,  566 => 240,  557 => 239,  544 => 222,  540 => 221,  536 => 220,  532 => 219,  526 => 216,  521 => 214,  517 => 213,  506 => 205,  502 => 204,  498 => 203,  495 => 202,  489 => 195,  485 => 194,  481 => 193,  475 => 190,  472 => 189,  463 => 188,  446 => 184,  429 => 87,  411 => 86,  400 => 185,  397 => 184,  389 => 178,  387 => 177,  385 => 176,  383 => 175,  381 => 174,  379 => 173,  377 => 172,  375 => 171,  373 => 170,  371 => 169,  368 => 167,  366 => 166,  364 => 165,  362 => 164,  360 => 163,  357 => 161,  355 => 160,  353 => 159,  351 => 158,  349 => 157,  347 => 156,  345 => 155,  343 => 154,  341 => 153,  338 => 151,  336 => 150,  334 => 149,  332 => 148,  330 => 147,  328 => 146,  326 => 145,  323 => 143,  321 => 142,  319 => 141,  317 => 140,  315 => 139,  313 => 138,  311 => 137,  309 => 136,  307 => 135,  305 => 134,  302 => 132,  300 => 131,  298 => 130,  296 => 129,  294 => 128,  292 => 127,  289 => 125,  287 => 124,  284 => 122,  282 => 121,  280 => 120,  278 => 119,  276 => 118,  274 => 117,  272 => 116,  270 => 115,  268 => 114,  266 => 113,  264 => 112,  262 => 111,  260 => 110,  258 => 109,  256 => 108,  254 => 107,  242 => 101,  238 => 99,  224 => 87,  220 => 86,  215 => 83,  213 => 82,  211 => 81,  209 => 80,  207 => 79,  205 => 78,  203 => 77,  201 => 76,  199 => 75,  197 => 74,  184 => 63,  178 => 59,  173 => 56,  165 => 53,  161 => 52,  143 => 37,  128 => 25,  123 => 23,  118 => 21,  110 => 15,  108 => 14,  104 => 13,  99 => 12,  90 => 11,  77 => 9,  68 => 8,  56 => 4,  47 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block metas %}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
{% endblock %}

{% block bodyclass %}
    {{ app.user ? 'class=\"hold-transition skin-blue sidebar-mini\"' : 'class=\"hold-transition login-page\"' }}
{% endblock %}
{% block body %}
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabitcore/js/jquery-ui.min.js') }}\"></script>
    {% if app.user %}

    <div class=\"wrapper\">

        <!-- Main Header -->
        <header class=\"main-header\">
            <!-- Logo -->
            <a href=\"{{ path(config.app.index_url) }}\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\">{{ config.app.name_mini }}</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\">{{ config.app.name }}</span>
            </a>

            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        {{ QbRenderNavigator() }}
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar\">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">

                <!-- Sidebar user panel (optional) -->
                <div class=\"user-panel\">

                    <div class=\"pull-left image\">
                        <img src=\"{{ app.user.path | QbRenderImg(\"security\")  }}\"
                             class=\"img-circle\" alt=\"{{ app.user.fullName }}\" title=\"{{ app.user.fullName }}\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>{{ app.user.getFullName() }}</p>
                        <!-- Status -->
                        {#<a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>#}
                    </div>
                </div>

                <ul class=\"sidebar-menu\">
                {{ QbRenderMenu() }}
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">

            <!-- Content Header (Page header) -->
            {#<section class=\"content-header\">#}
            {#<h1>#}
            {#Page Header#}
            {#<small>Optional description</small>#}
            {#</h1>#}
            {#<ol class=\"breadcrumb\">#}
            {#<li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>#}
            {#<li class=\"active\">Here</li>#}
            {#</ol>#}
            {#</section>#}

            <!-- Main content -->
            <section class=\"content\">
                <div class=\"{% block cssContainer %}box box-widget{% endblock %}\"
                     id=\"dvupdate\">{% block update %}{% endblock %}</div>
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\">
                {#Anything you want#}
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ 'now' | date('Y') }} <a href=\"{{ url(config.app.index_url) }}\">{{ config.app.name }}</a>.</strong> All
            rights reserved.
        </footer>

        <!-- Control Sidebar -->
        {#<aside class=\"control-sidebar control-sidebar-dark\">#}
        {#<!-- Create the tabs -->#}
        {#<ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">#}
        {#<li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a>#}
        {#</li>#}
        {#<li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>#}
        {#</ul>#}
        {#<!-- Tab panes -->#}
        {#<div class=\"tab-content\">#}
        {#<!-- Home tab content -->#}
        {#<div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">#}
        {#<h3 class=\"control-sidebar-heading\">Recent Activity</h3>#}
        {#<ul class=\"control-sidebar-menu\">#}
        {#<li>#}
        {#<a href=\"javascript:;\">#}
        {#<i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>#}

        {#<div class=\"menu-info\">#}
        {#<h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>#}

        {#<p>Will be 23 on April 24th</p>#}
        {#</div>#}
        {#</a>#}
        {#</li>#}
        {#</ul>#}
        {#<!-- /.control-sidebar-menu -->#}

        {#<h3 class=\"control-sidebar-heading\">Tasks Progress</h3>#}
        {#<ul class=\"control-sidebar-menu\">#}
        {#<li>#}
        {#<a href=\"javascript:;\">#}
        {#<h4 class=\"control-sidebar-subheading\">#}
        {#Custom Template Design#}
        {#<span class=\"pull-right-container\">#}
        {#<span class=\"label label-danger pull-right\">70%</span>#}
        {#</span>#}
        {#</h4>#}

        {#<div class=\"progress progress-xxs\">#}
        {#<div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>#}
        {#</div>#}
        {#</a>#}
        {#</li>#}
        {#</ul>#}
        {#<!-- /.control-sidebar-menu -->#}

        {#</div>#}
        {#<!-- /.tab-pane -->#}
        {#<!-- Stats tab content -->#}
        {#<div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>#}
        {#<!-- /.tab-pane -->#}
        {#<!-- Settings tab content -->#}
        {#<div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">#}
        {#<form method=\"post\">#}
        {#<h3 class=\"control-sidebar-heading\">General Settings</h3>#}

        {#<div class=\"form-group\">#}
        {#<label class=\"control-sidebar-subheading\">#}
        {#Report panel usage#}
        {#<input type=\"checkbox\" class=\"pull-right\" checked>#}
        {#</label>#}

        {#<p>#}
        {#Some information about this general settings option#}
        {#</p>#}
        {#</div>#}
        {#<!-- /.form-group -->#}
        {#</form>#}
        {#</div>#}
        {#<!-- /.tab-pane -->#}
        {#</div>#}
        {#</aside>#}
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    </div>
    {% else %}
        {% block login %}{% endblock %}
    {% endif %}
{% endblock %}

{% block stylesheets %}

    <link rel=\"icon\" href=\"{{ asset(config.app.image) }}\" type=\"image/x-icon\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\"     href=\"{{ asset('bundles/qbabitcore/css/jquery-ui.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/qbabittemplateadminlte/makeclean/libraries/fonts/font-awesome.css\") }}\">

    <!-- Font Awesome -->
    {#   <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
       <!-- Ionicons -->
       <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
   #}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/css/toastr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/css/core.css') }}\">


    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/css/AdminLTE.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/css/skins/skin-blue.min.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabitcore/css/style.css') }}\">

    <!--Gallery -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/gallery/css/lightgallery.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/gallery/css/lg-fb-comment-box.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/gallery/css/lg-transitions.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/css/introjs.css') }}\">

  {#    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/select2/select2.min.css') }}\">

    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/datepicker/datepicker3.css') }}\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.css') }}\">

    <link rel=\"stylesheet\"
          href=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.css') }}\">
#}
{% endblock %}

{% block javascripts %}

    {#
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBo4oqn1JYNtTYhnyAmSpZO4G121HHBycI\"
    ></script>#}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   {#   <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
   <![endif]-->
#}
    <!-- jQuery 2.2.3 -->
      <!-- Bootstrap 3.3.6 -->
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/bootstrap/js/bootstrap.min.js') }}\"></script>

     <script src=\"{{ asset('bundles/qbabitcore/js/functions.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabitcore/js/toastr.min.js') }}\"></script>
    {#  <script src=\"{{ asset('bundles/qbabitlavadoo/js/lavadooadmin.js') }}\"></script>#}

    <!-- AdminLTE App -->
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/js/app.min.js') }}\"></script>

    <!-- Datepicker -->


    <!-- lightgallery plugins -->
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/fastclick/fastclick.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lightgallery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lg-thumbnail.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lg-fullscreen.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lg-hash.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lg-pager.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/gallery/js/lg-zoom.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/js/intro.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/chartjs/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js') }}\"></script>

{#
     <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/daterangepicker/moment.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/datepicker/locales/bootstrap-datepicker.es.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/qbabittemplateadminlte/adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}\"></script>
#}
    <script>

     /*   function   QbabitJavascripts() {
            alert(\"aaa\");
        }
        jQuery(function () {
            QbabitJavascripts();
        });*/
    </script>
{% endblock %}", "QbaBitTemplateAdminLTEBundle:Layout:_layout.html.twig", "/var/www/src/QbaBit/TemplateAdminLTEBundle/Resources/views/Layout/_layout.html.twig");
    }
}
