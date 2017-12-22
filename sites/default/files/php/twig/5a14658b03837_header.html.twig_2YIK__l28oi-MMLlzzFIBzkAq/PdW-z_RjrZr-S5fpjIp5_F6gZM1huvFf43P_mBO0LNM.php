<?php

/* /themes/byu_d8/templates/includes/header.html.twig */
class __TwigTemplate_2e0a1b272501763f48c80b3764b77d552d7422a6e1ec4b646cdda3345d4b4621 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array("t" => 15);
        $functions = array("path" => 15);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ((($context["header_sticky_option"] ?? null) == "always_sticky")) {
            // line 2
            echo "    <byu-header id=\"header\" ";
            if ((($context["full_width"] ?? null) == true)) {
                echo "full-width ";
            }
            echo " data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
";
        } else {
            // line 4
            echo "    <byu-header id=\"header\"  ";
            if ((($context["full_width"] ?? null) == true)) {
                echo "full-width ";
            }
            echo " class=\"\" data-plugin-options='{\"stickyEnabled\": false, \"stickyEnableOnBoxed\": false, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\"}'>
        ";
        }
        // line 6
        echo "

        ";
        // line 8
        if ((($context["subtitle_above"] ?? null) == true)) {
            // line 9
            echo "            ";
            if ((($context["subtitle_use"] ?? null) == true)) {
                // line 10
                echo "                <div slot=\"site-title\" class=\"subtitle ";
                if ((($context["subtitle_italic"] ?? null) == true)) {
                    echo "italic ";
                }
                echo "\" >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subtitle_text"] ?? null), "html", null, true));
                echo "</div>
            ";
            }
            // line 12
            echo "        ";
        }
        // line 13
        echo "

        <a slot=\"site-title\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
        echo "\" rel=\"home\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo "</a>

        ";
        // line 17
        if ((($context["subtitle_above"] ?? null) == false)) {
            // line 18
            echo "            ";
            if ((($context["subtitle_use"] ?? null) == true)) {
                // line 19
                echo "                <div slot=\"site-title\" class=\"subtitle ";
                if ((($context["subtitle_italic"] ?? null) == true)) {
                    echo "italic ";
                }
                echo "\" >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subtitle_text"] ?? null), "html", null, true));
                echo "</div>
            ";
            }
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if ((($context["search_use"] ?? null) == true)) {
            // line 24
            echo "            <byu-search  slot=\"search\" action=\"click\" ";
            if ((($context["search_submit"] ?? null) == true)) {
                echo " action-target=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["search_submit"] ?? null), "html", null, true));
                echo "\"";
            }
            echo " ";
            if ((($context["search_input"] ?? null) == true)) {
                echo " search-input-selector=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["search_input"] ?? null), "html", null, true));
                echo "\"";
            }
            echo ">
                ";
            // line 26
            echo "                    ";
            // line 27
            echo "                ";
            // line 28
            echo "                ";
            if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
                // line 29
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
                echo "
                ";
            }
            // line 31
            echo "

            </byu-search>
        ";
        }
        // line 35
        echo "
        ";
        // line 36
        if ((($context["menu_disable"] ?? null) == false)) {
            // line 37
            echo "            ";
            // line 38
            echo "            <byu-menu slot=\"nav\" active-selector=\".is-active\" class=\"";
            if (((($context["transparent"] ?? null) == true) || (($context["hero_vs_menu"] ?? null) == "hero-behind-menu"))) {
                echo " transparent ";
            }
            echo "\">
                ";
            // line 39
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
                // line 40
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
                echo "
                ";
            }
            // line 42
            echo "            </byu-menu>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "header_actions", array())) {
            // line 46
            echo "            <div slot=\"actions\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["actions_bg"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_actions", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 48
        echo "
        ";
        // line 49
        if ((($context["login_use"] ?? null) == true)) {
            // line 50
            echo "            <byu-user-info slot=\"user\">
                ";
            // line 51
            if (($context["login_url"] ?? null)) {
                // line 52
                echo "                    <a slot=\"login\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["login_url"] ?? null), "html", null, true));
                echo "\">Sign In</a>
                ";
            } else {
                // line 54
                echo "                    <a slot=\"login\" href=\"../user\">Sign In</a>
                ";
            }
            // line 56
            echo "                <!-- if you are using CAS, use the CAS sign out link instead: -->
                <!--      <a slot=\"logout\" href=\"/caslogout\">Sign Out</a>-->
                ";
            // line 58
            if (($context["logout_url"] ?? null)) {
                // line 59
                echo "                    <a slot=\"logout\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logout_url"] ?? null), "html", null, true));
                echo "\">Sign Out</a>
                ";
            } else {
                // line 61
                echo "                    <a slot=\"logout\" href=\"../logout\">Sign Out</a>
                ";
            }
            // line 63
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "name", array())) {
                // line 64
                echo "                    ";
                if (($context["myaccount_use"] ?? null)) {
                    // line 65
                    echo "                        <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["myaccount_url"] ?? null), "html", null, true));
                    echo "\" slot=\"user-name\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "name", array()), "html", null, true));
                    echo "</a>
                    ";
                } else {
                    // line 67
                    echo "                        <span slot=\"user-name\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", array()), "name", array()), "html", null, true));
                    echo "</span>
                    ";
                }
                // line 69
                echo "                ";
            }
            // line 70
            echo "
            </byu-user-info>
        ";
        }
        // line 73
        echo "                ";
        // line 74
        echo "                ";
        // line 75
        echo "                ";
        // line 76
        echo "
    </byu-header>


";
        // line 81
        echo "
    ";
        // line 83
        echo "        ";
        // line 84
        echo "    ";
        // line 85
        echo "        ";
        // line 86
        echo "  ";
        // line 87
        echo "    ";
        // line 88
        echo "        ";
        // line 89
        echo "    ";
        // line 91
        echo "    ";
        // line 92
        echo "        ";
        // line 93
        echo "    ";
        // line 94
        echo "        ";
        // line 95
        echo "  ";
        // line 96
        echo "    ";
        // line 97
        echo "        ";
        // line 98
        echo "    ";
    }

    public function getTemplateName()
    {
        return "/themes/byu_d8/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 98,  297 => 97,  295 => 96,  293 => 95,  291 => 94,  289 => 93,  287 => 92,  285 => 91,  283 => 89,  281 => 88,  279 => 87,  277 => 86,  275 => 85,  273 => 84,  271 => 83,  268 => 81,  262 => 76,  260 => 75,  258 => 74,  256 => 73,  251 => 70,  248 => 69,  242 => 67,  234 => 65,  231 => 64,  228 => 63,  224 => 61,  218 => 59,  216 => 58,  212 => 56,  208 => 54,  202 => 52,  200 => 51,  197 => 50,  195 => 49,  192 => 48,  184 => 46,  182 => 45,  179 => 44,  175 => 42,  169 => 40,  167 => 39,  160 => 38,  158 => 37,  156 => 36,  153 => 35,  147 => 31,  141 => 29,  138 => 28,  136 => 27,  134 => 26,  119 => 24,  117 => 23,  114 => 22,  111 => 21,  101 => 19,  98 => 18,  96 => 17,  87 => 15,  83 => 13,  80 => 12,  70 => 10,  67 => 9,  65 => 8,  61 => 6,  53 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/themes/byu_d8/templates/includes/header.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/header.html.twig");
    }
}
