<?php

/* themes/byu_d8/templates/includes/block--system-menu-block--main.html.twig */
class __TwigTemplate_5c4996cceefbe822f592730bba793a856ee4fc86f0dd0a672ba6416b88ce3bd1 extends Twig_Template
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
        $tags = array("set" => 35, "if" => 45);
        $filters = array("clean_class" => 39);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 35
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null))));
        // line 43
        echo "
  ";
        // line 45
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 46
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method");
            // line 47
            echo "  ";
        }
        // line 48
        echo "  ";
        // line 49
        echo "  ";
        // line 50
        echo "  ";
        // line 51
        echo "
  ";
        // line 53
        echo "  ";
        // line 54
        echo "      ";
        // line 55
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
        // line 57
        echo "  ";
        // line 58
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/byu_d8/templates/includes/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 58,  76 => 57,  71 => 55,  69 => 54,  67 => 53,  64 => 51,  62 => 50,  60 => 49,  58 => 48,  55 => 47,  52 => 46,  49 => 45,  46 => 43,  44 => 39,  43 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/byu_d8/templates/includes/block--system-menu-block--main.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/block--system-menu-block--main.html.twig");
    }
}
