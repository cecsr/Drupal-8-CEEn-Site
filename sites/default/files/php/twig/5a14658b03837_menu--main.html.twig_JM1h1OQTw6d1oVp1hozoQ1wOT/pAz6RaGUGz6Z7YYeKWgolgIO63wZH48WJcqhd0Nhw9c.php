<?php

/* themes/byu_d8/templates/includes/menu--main.html.twig */
class __TwigTemplate_8f579703a0af366b26bcdf3165799e84035616a2da37ad0fd1e0fae811d7a71e extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 38, "set" => 40);
        $filters = array();
        $functions = array("link" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 34
                    echo "    ";
                } else {
                    // line 35
                    echo "        ";
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "                ";
                        // line 40
                        $context["classes"] = array(0 => "", 1 => (($this->getAttribute(                        // line 42
$context["item"], "is_expanded", array())) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                        // line 43
$context["item"], "is_collapsed", array())) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 44
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 47
                        echo "                ";
                        // line 48
                        echo "                    ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
                    ";
                        // line 49
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 50
                            echo "                        ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                            echo "
                    ";
                        }
                        // line 52
                        echo "                ";
                        // line 53
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "            ";
                } else {
                    // line 55
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 56
                        echo "                    ";
                        // line 57
                        $context["classes"] = array(0 => "", 1 => (($this->getAttribute(                        // line 59
$context["item"], "is_expanded", array())) ? ("dropdown-submenu") : ("")), 2 => (($this->getAttribute(                        // line 60
$context["item"], "is_collapsed", array())) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 61
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 64
                        echo "                    <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                        echo ">
                        ";
                        // line 65
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
                        ";
                        // line 66
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 67
                            echo "                            ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                            echo "
                        ";
                        }
                        // line 69
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "        ";
                // line 73
                echo "    ";
            }
            // line 74
            echo "    ";
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
        return "themes/byu_d8/templates/includes/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  168 => 73,  166 => 72,  163 => 71,  156 => 69,  150 => 67,  148 => 66,  144 => 65,  139 => 64,  137 => 61,  136 => 60,  135 => 59,  134 => 57,  132 => 56,  127 => 55,  124 => 54,  118 => 53,  116 => 52,  110 => 50,  108 => 49,  103 => 48,  101 => 47,  99 => 44,  98 => 43,  97 => 42,  96 => 40,  94 => 39,  89 => 38,  86 => 37,  83 => 36,  81 => 35,  78 => 34,  75 => 32,  72 => 31,  69 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/byu_d8/templates/includes/menu--main.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/menu--main.html.twig");
    }
}
