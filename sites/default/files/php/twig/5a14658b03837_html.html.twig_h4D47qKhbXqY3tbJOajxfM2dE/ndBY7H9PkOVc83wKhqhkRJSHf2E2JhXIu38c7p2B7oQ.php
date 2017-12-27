<?php

/* themes/byu_d8/templates/includes/html.html.twig */
class __TwigTemplate_129aff57672181fbf64d667a21a4943f9e446d4b386746f6f7ae2b267eb38819 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array("raw" => 6, "safe_join" => 7, "t" => 55);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join', 't'),
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
<!DOCTYPE html>
<html";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent "));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent"));
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed"));
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark"));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["layout_option"] ?? null), "html", null, true));
        }
        echo "\">

  <head>
    <head-placeholder token=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <css-placeholder token=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 10
        if ((($context["skin_option"] ?? null) == "none")) {
            // line 11
            echo "    ";
            if ((($context["arg"] ?? null) == "index-corporate-3")) {
                // line 12
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 13
($context["arg"] ?? null) == "index-corporate-4")) {
                // line 14
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 15
($context["arg"] ?? null) == "index-corporate-5")) {
                // line 16
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 17
($context["arg"] ?? null) == "index-corporate-6")) {
                // line 18
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 19
($context["arg"] ?? null) == "index-corporate-7")) {
                // line 20
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 21
($context["arg"] ?? null) == "index-corporate-8")) {
                // line 22
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 23
($context["arg"] ?? null) == "index-corporate-hosting")) {
                // line 24
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   ";
                // line 27
                echo "    ";
            }
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/skins/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skin_option"] ?? null), "html", null, true));
            echo ".css' type='text/css' media='all' />
    ";
        }
        // line 31
        echo "    ";
        if ((($context["rtl"] ?? null) == 1)) {
            // line 32
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-shop.css' type='text/css' media='all' />
    ";
        }
        // line 37
        echo "    ";
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 38
            echo "        <style>
            ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["your_css"] ?? null), "html", null, true));
            echo "
        </style>
    ";
        }
        // line 42
        echo "    <js-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>


  <body";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        if ((($context["arg"] ?? null) == "index-one-page")) {
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "one-page"), "method"), "html", null, true));
            echo " ";
        }
        echo " data-target=\"";
        if ((($context["arg"] ?? null) == "index-corporate-hosting")) {
            echo "#navSecondary";
        } else {
            echo "#header";
        }
        echo "\" data-spy=\"scroll\" data-offset=\"100\">
  ";
        // line 49
        if ((($context["loader"] ?? null) == 1)) {
            // line 50
            echo "  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  ";
        }
        // line 54
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    <div class=\"body\">
        ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
        ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    </div>
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/byu_d8/templates/includes/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 62,  244 => 60,  240 => 59,  236 => 58,  230 => 55,  227 => 54,  221 => 50,  219 => 49,  202 => 48,  192 => 42,  186 => 39,  183 => 38,  180 => 37,  175 => 35,  171 => 34,  167 => 33,  162 => 32,  159 => 31,  151 => 29,  148 => 28,  145 => 27,  140 => 24,  138 => 23,  133 => 22,  131 => 21,  126 => 20,  124 => 19,  119 => 18,  117 => 17,  112 => 16,  110 => 15,  105 => 14,  103 => 13,  98 => 12,  95 => 11,  93 => 10,  89 => 9,  84 => 7,  80 => 6,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/byu_d8/templates/includes/html.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/html.html.twig");
    }
}
