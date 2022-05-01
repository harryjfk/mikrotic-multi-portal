<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_9ca1f97a575d6cc40f786ee740bc6de31a1e5e425f55358444ab545c8ecec165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
            'messages' => array($this, 'block_messages'),
            'defined_messages' => array($this, 'block_defined_messages'),
            'fallback_messages' => array($this, 'block_fallback_messages'),
            'missing_messages' => array($this, 'block_missing_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_907623643a081e6ec975bca812dd28fa6b8294dfafd65ef91c2628d96b84ec55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907623643a081e6ec975bca812dd28fa6b8294dfafd65ef91c2628d96b84ec55->enter($__internal_907623643a081e6ec975bca812dd28fa6b8294dfafd65ef91c2628d96b84ec55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_a77a75bf5077bbac4fba428147958bc10cac46ed4411d8c9dcf245b87e588037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77a75bf5077bbac4fba428147958bc10cac46ed4411d8c9dcf245b87e588037->enter($__internal_a77a75bf5077bbac4fba428147958bc10cac46ed4411d8c9dcf245b87e588037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_907623643a081e6ec975bca812dd28fa6b8294dfafd65ef91c2628d96b84ec55->leave($__internal_907623643a081e6ec975bca812dd28fa6b8294dfafd65ef91c2628d96b84ec55_prof);

        
        $__internal_a77a75bf5077bbac4fba428147958bc10cac46ed4411d8c9dcf245b87e588037->leave($__internal_a77a75bf5077bbac4fba428147958bc10cac46ed4411d8c9dcf245b87e588037_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1ddfdf8274c6989d1bbcc96f5417a8975cc5076c9031ddd00fb555bb07d258b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ddfdf8274c6989d1bbcc96f5417a8975cc5076c9031ddd00fb555bb07d258b->enter($__internal_c1ddfdf8274c6989d1bbcc96f5417a8975cc5076c9031ddd00fb555bb07d258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc87d22f3f3c06e1df0992d0b9d16ae91d91159c9e84376f1a2317267fce83be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc87d22f3f3c06e1df0992d0b9d16ae91d91159c9e84376f1a2317267fce83be->enter($__internal_dc87d22f3f3c06e1df0992d0b9d16ae91d91159c9e84376f1a2317267fce83be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) ? ((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countDefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "locale", array()), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 23
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 30
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_dc87d22f3f3c06e1df0992d0b9d16ae91d91159c9e84376f1a2317267fce83be->leave($__internal_dc87d22f3f3c06e1df0992d0b9d16ae91d91159c9e84376f1a2317267fce83be_prof);

        
        $__internal_c1ddfdf8274c6989d1bbcc96f5417a8975cc5076c9031ddd00fb555bb07d258b->leave($__internal_c1ddfdf8274c6989d1bbcc96f5417a8975cc5076c9031ddd00fb555bb07d258b_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92efcf24a98fae5d93774984ebaecd4960a0c16cfe55d32f36181a7037c817f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92efcf24a98fae5d93774984ebaecd4960a0c16cfe55d32f36181a7037c817f0->enter($__internal_92efcf24a98fae5d93774984ebaecd4960a0c16cfe55d32f36181a7037c817f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30733d4e07c54b574c579e5c6f2cea742ad35155985021000ad4b87a68328ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30733d4e07c54b574c579e5c6f2cea742ad35155985021000ad4b87a68328ee6->enter($__internal_30733d4e07c54b574c579e5c6f2cea742ad35155985021000ad4b87a68328ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 50
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 51
            echo "            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 55
        echo "    </span>
";
        
        $__internal_30733d4e07c54b574c579e5c6f2cea742ad35155985021000ad4b87a68328ee6->leave($__internal_30733d4e07c54b574c579e5c6f2cea742ad35155985021000ad4b87a68328ee6_prof);

        
        $__internal_92efcf24a98fae5d93774984ebaecd4960a0c16cfe55d32f36181a7037c817f0->leave($__internal_92efcf24a98fae5d93774984ebaecd4960a0c16cfe55d32f36181a7037c817f0_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c202a6ec06c032aced3b947db70ccf3707303f02c647fc0f75c8fe2f673efc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c202a6ec06c032aced3b947db70ccf3707303f02c647fc0f75c8fe2f673efc4->enter($__internal_5c202a6ec06c032aced3b947db70ccf3707303f02c647fc0f75c8fe2f673efc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe9a384d375be9b2cacc8b819dbdf30b52c818cceb2959c0d8023aada627b148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9a384d375be9b2cacc8b819dbdf30b52c818cceb2959c0d8023aada627b148->enter($__internal_fe9a384d375be9b2cacc8b819dbdf30b52c818cceb2959c0d8023aada627b148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 60
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 65
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_fe9a384d375be9b2cacc8b819dbdf30b52c818cceb2959c0d8023aada627b148->leave($__internal_fe9a384d375be9b2cacc8b819dbdf30b52c818cceb2959c0d8023aada627b148_prof);

        
        $__internal_5c202a6ec06c032aced3b947db70ccf3707303f02c647fc0f75c8fe2f673efc4->leave($__internal_5c202a6ec06c032aced3b947db70ccf3707303f02c647fc0f75c8fe2f673efc4_prof);

    }

    // line 69
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_9bd9eaa693d2445c97579b12038f8ea3c5196d65ef2aafafbc73a76cf9d6dc79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd9eaa693d2445c97579b12038f8ea3c5196d65ef2aafafbc73a76cf9d6dc79->enter($__internal_9bd9eaa693d2445c97579b12038f8ea3c5196d65ef2aafafbc73a76cf9d6dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_623e2b4a527574d02d71c55ebaf0944f12bae14c6f2f49b81b874c0ca501b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e2b4a527574d02d71c55ebaf0944f12bae14c6f2f49b81b874c0ca501b35e->enter($__internal_623e2b4a527574d02d71c55ebaf0944f12bae14c6f2f49b81b874c0ca501b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 70
        echo "
    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "locale", array()), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "fallbackLocales", array()), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 185
        echo "
";
        
        $__internal_623e2b4a527574d02d71c55ebaf0944f12bae14c6f2f49b81b874c0ca501b35e->leave($__internal_623e2b4a527574d02d71c55ebaf0944f12bae14c6f2f49b81b874c0ca501b35e_prof);

        
        $__internal_9bd9eaa693d2445c97579b12038f8ea3c5196d65ef2aafafbc73a76cf9d6dc79->leave($__internal_9bd9eaa693d2445c97579b12038f8ea3c5196d65ef2aafafbc73a76cf9d6dc79_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = array())
    {
        $__internal_3bace284c86b54d87ef44baf75bc3eaf1e64308b0ba0d0bdacca4ddb87ad6c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bace284c86b54d87ef44baf75bc3eaf1e64308b0ba0d0bdacca4ddb87ad6c6d->enter($__internal_3bace284c86b54d87ef44baf75bc3eaf1e64308b0ba0d0bdacca4ddb87ad6c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_58e9b23098f09cce5cdd049d0e729656342b0183307e7058b1b17e556a57777f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e9b23098f09cce5cdd049d0e729656342b0183307e7058b1b17e556a57777f->enter($__internal_58e9b23098f09cce5cdd049d0e729656342b0183307e7058b1b17e556a57777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 111
                echo "            ";
                $context["messages_defined"] = twig_array_merge((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 112
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 113
                echo "            ";
                $context["messages_missing"] = twig_array_merge((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 114
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 115
                echo "            ";
                $context["messages_fallback"] = twig_array_merge((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 116
                echo "        ";
            }
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 128
        if (twig_test_empty((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")))) {
            // line 129
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 133
            echo "                    ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 136
            echo "                ";
        }
        // line 137
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 141
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 149
        if (twig_test_empty((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")))) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 154
            echo "                    ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 157
            echo "                ";
        }
        // line 158
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 162
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 171
        if (twig_test_empty((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")))) {
            // line 172
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 176
            echo "                    ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 179
            echo "                ";
        }
        // line 180
        echo "            </div>
        </div>
    </div>

    ";
        
        $__internal_58e9b23098f09cce5cdd049d0e729656342b0183307e7058b1b17e556a57777f->leave($__internal_58e9b23098f09cce5cdd049d0e729656342b0183307e7058b1b17e556a57777f_prof);

        
        $__internal_3bace284c86b54d87ef44baf75bc3eaf1e64308b0ba0d0bdacca4ddb87ad6c6d->leave($__internal_3bace284c86b54d87ef44baf75bc3eaf1e64308b0ba0d0bdacca4ddb87ad6c6d_prof);

    }

    // line 133
    public function block_defined_messages($context, array $blocks = array())
    {
        $__internal_9a2898a7f46ae89080001a00db763d94f0655b4dd94c9aa46b67b0aafb6cd1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2898a7f46ae89080001a00db763d94f0655b4dd94c9aa46b67b0aafb6cd1c4->enter($__internal_9a2898a7f46ae89080001a00db763d94f0655b4dd94c9aa46b67b0aafb6cd1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_fdfb26862975ce241279c09a9415a3f207ec2a0f44e84a22ecbe153d12f7966f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfb26862975ce241279c09a9415a3f207ec2a0f44e84a22ecbe153d12f7966f->enter($__internal_fdfb26862975ce241279c09a9415a3f207ec2a0f44e84a22ecbe153d12f7966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 134
        echo "                        ";
        echo $context["helper"]->getrender_table((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")));
        echo "
                    ";
        
        $__internal_fdfb26862975ce241279c09a9415a3f207ec2a0f44e84a22ecbe153d12f7966f->leave($__internal_fdfb26862975ce241279c09a9415a3f207ec2a0f44e84a22ecbe153d12f7966f_prof);

        
        $__internal_9a2898a7f46ae89080001a00db763d94f0655b4dd94c9aa46b67b0aafb6cd1c4->leave($__internal_9a2898a7f46ae89080001a00db763d94f0655b4dd94c9aa46b67b0aafb6cd1c4_prof);

    }

    // line 154
    public function block_fallback_messages($context, array $blocks = array())
    {
        $__internal_656004dfadaf2ef0abd13b7173ed00a712b621346fcd815c330627b3a7ecc2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656004dfadaf2ef0abd13b7173ed00a712b621346fcd815c330627b3a7ecc2d3->enter($__internal_656004dfadaf2ef0abd13b7173ed00a712b621346fcd815c330627b3a7ecc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_aaf68f2a7780e60b18964f5a8290da370e5ed7f841c5f55391d251af1ffcd8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf68f2a7780e60b18964f5a8290da370e5ed7f841c5f55391d251af1ffcd8cd->enter($__internal_aaf68f2a7780e60b18964f5a8290da370e5ed7f841c5f55391d251af1ffcd8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 155
        echo "                        ";
        echo $context["helper"]->getrender_table((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")));
        echo "
                    ";
        
        $__internal_aaf68f2a7780e60b18964f5a8290da370e5ed7f841c5f55391d251af1ffcd8cd->leave($__internal_aaf68f2a7780e60b18964f5a8290da370e5ed7f841c5f55391d251af1ffcd8cd_prof);

        
        $__internal_656004dfadaf2ef0abd13b7173ed00a712b621346fcd815c330627b3a7ecc2d3->leave($__internal_656004dfadaf2ef0abd13b7173ed00a712b621346fcd815c330627b3a7ecc2d3_prof);

    }

    // line 176
    public function block_missing_messages($context, array $blocks = array())
    {
        $__internal_e171518c4189089f350dd3b982cf78f94c374c42994a8798f5db4843e36846e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e171518c4189089f350dd3b982cf78f94c374c42994a8798f5db4843e36846e1->enter($__internal_e171518c4189089f350dd3b982cf78f94c374c42994a8798f5db4843e36846e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_e136ccc40bd742c29f27629bccd14b8279d3667f79bbc38834ef894f3167f3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e136ccc40bd742c29f27629bccd14b8279d3667f79bbc38834ef894f3167f3e3->enter($__internal_e136ccc40bd742c29f27629bccd14b8279d3667f79bbc38834ef894f3167f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 177
        echo "                        ";
        echo $context["helper"]->getrender_table((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")));
        echo "
                    ";
        
        $__internal_e136ccc40bd742c29f27629bccd14b8279d3667f79bbc38834ef894f3167f3e3->leave($__internal_e136ccc40bd742c29f27629bccd14b8279d3667f79bbc38834ef894f3167f3e3_prof);

        
        $__internal_e171518c4189089f350dd3b982cf78f94c374c42994a8798f5db4843e36846e1->leave($__internal_e171518c4189089f350dd3b982cf78f94c374c42994a8798f5db4843e36846e1_prof);

    }

    // line 188
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2b42f7004cf2f898411e79d671b2fff1a7246d6e5167449933583ae47dc75e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2b42f7004cf2f898411e79d671b2fff1a7246d6e5167449933583ae47dc75e68->enter($__internal_2b42f7004cf2f898411e79d671b2fff1a7246d6e5167449933583ae47dc75e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_35fc4b849bc7a60c5adbd5c5924bbb1b9812d834b3dd5ade1014bb8e98b4f72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_35fc4b849bc7a60c5adbd5c5924bbb1b9812d834b3dd5ade1014bb8e98b4f72a->enter($__internal_35fc4b849bc7a60c5adbd5c5924bbb1b9812d834b3dd5ade1014bb8e98b4f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 189
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 201
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "</span>

                    ";
                // line 208
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 209
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 211
                echo "
                    ";
                // line 212
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 213
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 217
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["parameters"], 1));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                        </div>
                    ";
                }
                // line 221
                echo "                </td>
                <td class=\"prewrap\">";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        </tbody>
    </table>
";
            
            $__internal_35fc4b849bc7a60c5adbd5c5924bbb1b9812d834b3dd5ade1014bb8e98b4f72a->leave($__internal_35fc4b849bc7a60c5adbd5c5924bbb1b9812d834b3dd5ade1014bb8e98b4f72a_prof);

            
            $__internal_2b42f7004cf2f898411e79d671b2fff1a7246d6e5167449933583ae47dc75e68->leave($__internal_2b42f7004cf2f898411e79d671b2fff1a7246d6e5167449933583ae47dc75e68_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 225,  633 => 222,  630 => 221,  626 => 219,  617 => 217,  613 => 216,  609 => 215,  603 => 213,  601 => 212,  598 => 211,  594 => 209,  592 => 208,  587 => 206,  582 => 204,  578 => 203,  574 => 202,  571 => 201,  554 => 200,  541 => 189,  523 => 188,  510 => 177,  501 => 176,  488 => 155,  479 => 154,  466 => 134,  457 => 133,  443 => 180,  440 => 179,  437 => 176,  431 => 172,  429 => 171,  415 => 162,  409 => 158,  406 => 157,  403 => 154,  397 => 150,  395 => 149,  382 => 141,  376 => 137,  373 => 136,  370 => 133,  364 => 129,  362 => 128,  352 => 121,  347 => 118,  341 => 117,  338 => 116,  335 => 115,  332 => 114,  329 => 113,  326 => 112,  323 => 111,  320 => 110,  315 => 109,  312 => 108,  309 => 106,  300 => 105,  289 => 185,  287 => 105,  277 => 98,  269 => 93,  261 => 88,  249 => 79,  242 => 75,  235 => 70,  226 => 69,  212 => 65,  205 => 60,  202 => 59,  193 => 58,  182 => 55,  176 => 52,  173 => 51,  170 => 50,  168 => 49,  163 => 47,  156 => 46,  147 => 45,  134 => 41,  131 => 40,  125 => 37,  116 => 31,  112 => 30,  103 => 24,  99 => 23,  91 => 18,  86 => 15,  84 => 14,  81 => 13,  75 => 11,  72 => 10,  70 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}

    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countDefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {% block messages %}

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {% block defined_messages %}
                        {{ helper.render_table(messages_defined) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {% block fallback_messages %}
                        {{ helper.render_table(messages_fallback) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {% block missing_messages %}
                        {{ helper.render_table(messages_missing) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>
    </div>

    {% endblock messages %}

{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    <span class=\"nowrap\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
    }
}
