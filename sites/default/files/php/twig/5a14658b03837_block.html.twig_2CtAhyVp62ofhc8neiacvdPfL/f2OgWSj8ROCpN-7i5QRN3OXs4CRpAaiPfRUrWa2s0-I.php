<?php

/* themes/byu_d8/templates/includes/block.html.twig */
class __TwigTemplate_2a8001a3dbfbd1a9bb002427f5979b07a069a67fc0be34820dd8465d5bac5363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "if" => 37, "block" => 58);
        $filters = array("clean_class" => 31, "t" => 43);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 29
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 32
($context["plugin_id"] ?? null))));
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
";
        // line 37
        if (twig_in_filter("byu-footer", $this->getAttribute(($context["attributes"] ?? null), "class", array(), "array"))) {
            // line 38
            echo "
    ";
            // line 39
            if (($context["label"] ?? null)) {
                // line 40
                echo "      <span slot=\"header\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</span>
    ";
            }
            // line 42
            echo "    ";
            // line 43
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "body", array(), "array"), 0, array(), "array"), "#text", array(), "array"))));
            echo "
    ";
            // line 45
            echo "
";
        } else {
            // line 47
            echo "    ";
            // line 48
            echo "      ";
            // line 49
            echo "    ";
            // line 50
            echo "    ";
            // line 51
            echo "    ";
            // line 52
            echo "      ";
            // line 53
            echo "    ";
            // line 54
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 55
            if (($context["label"] ?? null)) {
                // line 56
                echo "      <h2";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h2>
    ";
            }
            // line 58
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 61
            echo "
    </div>
";
        }
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/byu_d8/templates/includes/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 59,  120 => 58,  113 => 61,  110 => 58,  102 => 56,  100 => 55,  95 => 54,  93 => 53,  91 => 52,  89 => 51,  87 => 50,  85 => 49,  83 => 48,  81 => 47,  77 => 45,  72 => 43,  70 => 42,  62 => 40,  60 => 39,  57 => 38,  55 => 37,  51 => 36,  48 => 35,  46 => 32,  45 => 31,  44 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/byu_d8/templates/includes/block.html.twig", "/var/www/html/drupal-8.4.2/themes/byu_d8/templates/includes/block.html.twig");
    }
}
