<?php

/* themes/porto/templates/page--panels.html.twig */
class __TwigTemplate_d9d10e7916b2e0510e61c636f92c4e5c1dfb3caed1a57c4caa9cb06956c0c210 extends Twig_Template
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
        $tags = array("if" => 3, "include" => 8);
        $filters = array("striptags" => 78);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array('striptags'),
                array()
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
        echo "
<div id=\"wrapper\">
    ";
        // line 3
        if (((($context["below_slider_option"] ?? null) == 1) || (($context["arg"] ?? null) == "index-header-below-slider"))) {
            // line 4
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
                // line 5
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
                echo "
        ";
            }
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page--panels.html.twig", 8)->display($context);
        // line 9
        echo "    <div role=\"main\" class=\"main relative\">
        ";
        // line 10
        if (((($context["below_slider_option"] ?? null) != 1) && (($context["arg"] ?? null) != "index-header-below-slider"))) {
            // line 11
            echo "        <section id=\"home\">
            ";
            // line 12
            if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
                echo "
            ";
            }
            // line 15
            echo "        </section>

        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "slider_contact_form", array())) {
            // line 19
            echo "            <div class=\"slider-contact-form\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-md-offset-7\">
                            <div class=\"featured-boxes mt-none mb-none\">
                                <div class=\"featured-box featured-box-primary mt-xl\">
                                    <div class=\"box-content\">
                                        ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider_contact_form", array()), "html", null, true));
            echo "
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 36
        echo "        ";
        if (($context["page_title"] ?? null)) {
            // line 37
            echo "            <!--breadcrumbs-->
        ";
            // line 38
            if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
                // line 39
                echo "            ";
                if ((($context["page_header_option"] ?? null) == "none")) {
                    // line 40
                    echo "                ";
                    if ((($context["arg"] ?? null) == "index-page-header-light")) {
                        // line 41
                        echo "                    <section class=\"page-header page-header-light page-header-more-padding \">
                ";
                    } elseif ((                    // line 42
($context["arg"] ?? null) == "index-page-header-light-reverse")) {
                        // line 43
                        echo "                    <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
                ";
                    } elseif ((                    // line 44
($context["arg"] ?? null) == "index-page-header-parallax")) {
                        // line 45
                        echo "                    <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                        echo "/img/parallax.jpg\">
                ";
                    } elseif ((                    // line 46
($context["arg"] ?? null) == "index-page-header-center")) {
                        // line 47
                        echo "                    <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
                ";
                    } elseif ((                    // line 48
($context["arg"] ?? null) == "index-page-header-color-primary")) {
                        // line 49
                        echo "                            <section class=\"page-header page-header-color page-header-primary page-header-more-padding\">
                ";
                    } elseif ((                    // line 50
($context["arg"] ?? null) == "index-page-header-color-quaternary")) {
                        // line 51
                        echo "                            <section class=\"page-header page-header-color page-header-quaternary page-header-more-padding\">
                ";
                    } elseif ((                    // line 52
($context["arg"] ?? null) == "index-page-header-color-secondary")) {
                        // line 53
                        echo "                            <section class=\"page-header page-header-color page-header-secondary page-header-more-padding\">
                ";
                    } elseif ((                    // line 54
($context["arg"] ?? null) == "index-page-header-color-tertinary")) {
                        // line 55
                        echo "                            <section class=\"page-header page-header-color page-header-tertiary page-header-more-padding\">
                ";
                    } else {
                        // line 57
                        echo "                        <section class=\"page-header\">
                ";
                    }
                    // line 59
                    echo "            ";
                } else {
                    // line 60
                    echo "                ";
                    if ((($context["page_header_option"] ?? null) == "ph_light")) {
                        // line 61
                        echo "                    <section class=\"page-header page-header-light page-header-more-padding \">
                ";
                    } elseif ((                    // line 62
($context["page_header_option"] ?? null) == "ph_light_reverse")) {
                        // line 63
                        echo "                    <section class=\"page-header page-header-light page-header-reverse page-header-more-padding\">
                ";
                    } elseif ((                    // line 64
($context["page_header_option"] ?? null) == "ph_parallax")) {
                        // line 65
                        echo "                    <section class=\"page-header page-header-custom-background parallax\" data-plugin-parallax data-plugin-options='{\"speed\": 1.5}' data-image-src=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                        echo "/img/parallax.jpg\">
                ";
                    } elseif ((                    // line 66
($context["page_header_option"] ?? null) == "ph_center")) {
                        // line 67
                        echo "                    <section class=\"page-header page-header-center page-header-more-padding page-header-no-title-border\">
                ";
                    } else {
                        // line 69
                        echo "                    <section class=\"page-header ";
                        if ((($context["page_header_color_option"] ?? null) != "none")) {
                            echo " page-header-color ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_header_color_option"] ?? null), "html", null, true));
                        }
                        echo "\">
                ";
                    }
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "
                <div class=\"container\">

                    ";
                // line 75
                if (((((((((((($context["page_header_option"] ?? null) == "ph_light") || (($context["arg"] ?? null) == "index-page-header-light")) || (($context["page_header_option"] ?? null) == "ph_parallax")) || (($context["arg"] ?? null) == "index-page-header-parallax")) || (($context["page_header_option"] ?? null) == "ph_center")) || (($context["arg"] ?? null) == "index-page-header-center")) || (($context["arg"] ?? null) == "index-page-header-color-primary")) || (($context["arg"] ?? null) == "index-page-header-color-quaternary")) || (($context["arg"] ?? null) == "index-page-header-color-secondary")) || (($context["arg"] ?? null) == "index-page-header-color-tertinary"))) {
                    // line 76
                    echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1>";
                    // line 78
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["page_title"] ?? null)), "html", null, true));
                    echo "</h1>
                                ";
                    // line 79
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
                    echo "
                            </div>
                        </div>
                    ";
                } else {
                    // line 83
                    echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
                    // line 85
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
                    echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1>";
                    // line 90
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["page_title"] ?? null)), "html", null, true));
                    echo "</h1>
                            </div>
                        </div>
                    ";
                }
                // line 94
                echo "                </div>
            </section>
        ";
            }
            // line 97
            echo "        ";
        }
        // line 98
        echo "
        ";
        // line 99
        if (($context["messages"] ?? null)) {
            // line 100
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 106
        echo "        ";
        if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())))) {
            // line 107
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-9\">
                    ";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
            </div>

        </div>

        ";
        } elseif (($this->getAttribute(        // line 121
($context["page"] ?? null), "right_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", array())))) {
            // line 122
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>


        ";
        } elseif (($this->getAttribute(        // line 136
($context["page"] ?? null), "right_sidebar", array()) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()))) {
            // line 137
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-6\">
                    ";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>

        ";
        } else {
            // line 156
            echo "
        <div>
            ";
            // line 158
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 161
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 162
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
        ";
        }
        // line 164
        echo "    </div>
    ";
        // line 165
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--panels.html.twig", 165)->display($context);
        // line 166
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--panels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 166,  376 => 165,  373 => 164,  367 => 162,  364 => 161,  358 => 158,  354 => 156,  344 => 149,  337 => 145,  330 => 141,  324 => 137,  322 => 136,  312 => 129,  305 => 125,  300 => 122,  298 => 121,  289 => 115,  282 => 111,  276 => 107,  273 => 106,  266 => 102,  262 => 100,  260 => 99,  257 => 98,  254 => 97,  249 => 94,  242 => 90,  234 => 85,  230 => 83,  223 => 79,  219 => 78,  215 => 76,  213 => 75,  208 => 72,  205 => 71,  196 => 69,  192 => 67,  190 => 66,  185 => 65,  183 => 64,  180 => 63,  178 => 62,  175 => 61,  172 => 60,  169 => 59,  165 => 57,  161 => 55,  159 => 54,  156 => 53,  154 => 52,  151 => 51,  149 => 50,  146 => 49,  144 => 48,  141 => 47,  139 => 46,  134 => 45,  132 => 44,  129 => 43,  127 => 42,  124 => 41,  121 => 40,  118 => 39,  116 => 38,  113 => 37,  110 => 36,  97 => 26,  88 => 19,  85 => 18,  80 => 15,  74 => 13,  72 => 12,  69 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/page--panels.html.twig", "/var/www/html/drupal-8.4.2/themes/porto/templates/page--panels.html.twig");
    }
}
