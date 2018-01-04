<?php

/* /themes/byu_d8/templates/includes/footer.html.twig */
class __TwigTemplate_569bc50db1f579144c1660dc63be6fe684eb7cd111092227ca5afee2905a2ffe extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        if ((($context["footer_color_option"] ?? null) == "normal")) {
            // line 2
            echo "    <byu-footer id=\"footer\" class=\"";
            if ((($context["arg"] ?? null) == "index-footer-color-primary")) {
                echo "color color-primary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-tertiary")) {
                echo "color color-tertiary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-quaternary")) {
                echo " color color-quaternary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-secondary")) {
                echo "color color-secondary";
            }
            echo "\">
";
        } else {
            // line 4
            echo "    <byu-footer id=\"footer\" class=\"color ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_option"] ?? null), "html", null, true));
            echo "\">
        ";
        }
        // line 6
        echo "
        ";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "footer_11", array())) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_11", array()), "html", null, true));
            echo "
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "footer_21", array())) {
            // line 12
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_21", array()), "html", null, true));
            echo "
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "footer_31", array())) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_31", array()), "html", null, true));
            echo "
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if ((($context["footer_option"] ?? null) == "normal")) {
            // line 20
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_41", array())) {
                // line 21
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_41", array()), "html", null, true));
                echo "
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "    </byu-footer>";
    }

    public function getTemplateName()
    {
        return "/themes/byu_d8/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  132 => 33,  130 => 32,  128 => 31,  126 => 30,  124 => 29,  122 => 28,  120 => 27,  118 => 26,  115 => 24,  112 => 23,  106 => 21,  103 => 20,  101 => 19,  98 => 18,  92 => 16,  90 => 15,  87 => 14,  81 => 12,  79 => 11,  76 => 10,  70 => 8,  68 => 7,  65 => 6,  59 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/themes/byu_d8/templates/includes/footer.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/footer.html.twig");
    }
}
