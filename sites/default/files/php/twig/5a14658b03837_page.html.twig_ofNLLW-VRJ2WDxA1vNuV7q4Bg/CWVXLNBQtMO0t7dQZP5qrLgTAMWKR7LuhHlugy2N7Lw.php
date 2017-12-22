<?php

/* themes/byu_d8/templates/includes/page.html.twig */
class __TwigTemplate_ff8912312db9c3b348874c56032419bc1aaca753faf36c8c4f3e976d8fbd70f9 extends Twig_Template
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
        $tags = array("if" => 1, "include" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array(),
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
        echo "<div id=\"wrapper\" ";
        if ((($context["footer_sticky"] ?? null) == true)) {
            echo " class=\"sticky-footer\"  ";
        }
        echo ">
    ";
        // line 2
        $this->loadTemplate((($context["byu_theme_root"] ?? null) . "/templates/includes/header.html.twig"), "themes/byu_d8/templates/includes/page.html.twig", 2)->display($context);
        // line 3
        echo "
    <div class=\"main-top ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hero_width"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hero_image_width"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hero_vs_menu"] ?? null), "html", null, true));
        echo " ";
        if ((($context["hero_width"] ?? null) == "custom-width")) {
            echo " ";
            if (($context["custom_width"] ?? null)) {
                echo " \" style=\"width: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_width"] ?? null), "html", null, true));
                echo "px";
            }
            echo " ";
        }
        echo "\">
        ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
            echo "
        ";
        }
        // line 8
        echo "    </div>

    <div role=\"main\" class=\"main ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["min_page_height"] ?? null), "html", null, true));
        echo " ";
        if ((($context["footer_sticky"] ?? null) == true)) {
            echo "sticky-footer";
        }
        echo " ";
        if (($context["custom_width"] ?? null)) {
            echo "custom-width\" style=\"width: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_width"] ?? null), "html", null, true));
            echo "px";
        }
        echo "\">

        ";
        // line 12
        $this->loadTemplate((($context["byu_theme_root"] ?? null) . "/templates/includes/custom-breadcrumb.html.twig"), "themes/byu_d8/templates/includes/page.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        if (($context["messages"] ?? null)) {
            // line 15
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if ((($context["arg"] ?? null) == "page-coming-soon")) {
            // line 23
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                ";
            // line 25
            if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
                // line 26
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 34
            echo "            </div>
        ";
        } else {
            // line 36
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())))) {
                // line 37
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 49
($context["page"] ?? null), "right_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", array())))) {
                // line 50
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 57
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 62
($context["page"] ?? null), "right_sidebar", array()) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()))) {
                // line 63
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 67
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 81
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
                    // line 82
                    echo "                    ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
                    echo "
                ";
                }
                // line 84
                echo "                <div class=\"container\">
                    ";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                </div>
            ";
            }
            // line 88
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
                // line 89
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
                echo "
            ";
            }
            // line 91
            echo "        ";
        }
        // line 92
        echo "    </div>
    ";
        // line 93
        $this->loadTemplate((($context["byu_theme_root"] ?? null) . "/templates/includes/footer.html.twig"), "themes/byu_d8/templates/includes/page.html.twig", 93)->display($context);
        // line 94
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/byu_d8/templates/includes/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 94,  258 => 93,  255 => 92,  252 => 91,  246 => 89,  243 => 88,  237 => 85,  234 => 84,  228 => 82,  225 => 81,  216 => 75,  209 => 71,  202 => 67,  196 => 63,  194 => 62,  186 => 57,  179 => 53,  174 => 50,  172 => 49,  165 => 45,  158 => 41,  152 => 37,  149 => 36,  145 => 34,  137 => 29,  132 => 26,  130 => 25,  126 => 24,  123 => 23,  121 => 22,  118 => 21,  111 => 17,  107 => 15,  105 => 14,  102 => 13,  100 => 12,  85 => 10,  81 => 8,  75 => 6,  73 => 5,  55 => 4,  52 => 3,  50 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/byu_d8/templates/includes/page.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/page.html.twig");
    }
}
