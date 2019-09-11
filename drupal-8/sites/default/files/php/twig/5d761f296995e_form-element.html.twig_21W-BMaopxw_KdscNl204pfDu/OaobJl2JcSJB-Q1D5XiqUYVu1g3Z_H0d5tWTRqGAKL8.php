<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/govuk_theme/templates/form/form-element.html.twig */
class __TwigTemplate_cb8aca3efe2894f4e88e84e859ffd19db01386bb29b1924b7ed5fdf54481a0b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 49, "if" => 74];
        $filters = ["clean_class" => 58, "escape" => 75, "striptags" => 87];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 47
        echo "
";
        // line 49
        $context["label_display"] = ((twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? ("after") : ("before"));
        // line 50
        $context["description_display"] = ((twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? ("outside") : ("before"));
        // line 51
        echo "
";
        // line 53
        $context["classes"] = [0 => ((twig_in_filter(        // line 54
($context["type"] ?? null), [0 => "radio"])) ? ("multiple-choice") : ("form-group")), 1 => "js-form-item", 2 => "form-item", 3 => "govuk-form-group", 4 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 58
($context["type"] ?? null)))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 59
($context["name"] ?? null)))), 6 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 60
($context["name"] ?? null)))), 7 => ((!twig_in_filter(        // line 61
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 8 => (((        // line 62
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => (((        // line 63
($context["errors"] ?? null) && !twig_in_filter(($context["type"] ?? null), [0 => "radio"]))) ? ("form-group-error") : (""))];
        // line 67
        $context["description_classes"] = [0 => "form-hint", 1 => "govuk-hint", 2 => (((        // line 70
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 73
        echo "
";
        // line 74
        if ((((($context["description_display"] ?? null) == "outside") && $this->getAttribute(($context["description"] ?? null), "content", [])) && twig_test_empty(($context["errors"] ?? null)))) {
            // line 75
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 79
        echo "
<div";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 81
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 82
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if ((($context["errors"] ?? null) && !twig_in_filter(($context["type"] ?? null), [0 => "radio", 1 => "checkbox"]))) {
            // line 86
            echo "    <span class=\"error-message govuk-error-message\">
      ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "<p>"), "html", null, true);
            echo "
    </span>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 92
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox"])) {
            // line 98
            echo "    <div class=\"multiple-choice govuk-checkboxes__item\">
  ";
        }
        // line 100
        echo "  
  ";
        // line 101
        if (twig_in_filter(($context["type"] ?? null), [0 => "radio"])) {
            // line 102
            echo "    <div class=\"govuk-radios__item\">
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 106
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 108
        echo "  ";
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "webform-element"], "method")) {
            // line 109
            echo "    <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "</p>
  ";
        } else {
            // line 111
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 113
        echo "  ";
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 114
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 116
        echo "
  ";
        // line 117
        if ((($context["label_display"] ?? null) == "after")) {
            // line 118
            echo "    ";
            if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox"])) {
                // line 119
                echo "      <label class=\"govuk-label govuk-checkboxes__label\" for=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</label>
    ";
            } elseif (twig_in_filter(            // line 120
($context["type"] ?? null), [0 => "radio"])) {
                // line 121
                echo "      <label class=\"govuk-label govuk-radios__label\" for=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</label>
    ";
            } else {
                // line 123
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 125
            echo "  ";
        }
        // line 126
        echo "
  ";
        // line 127
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 128
            echo "  </div>
  ";
        }
        // line 130
        echo "
  ";
        // line 131
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 132
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 136
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/govuk_theme/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 136,  244 => 133,  239 => 132,  237 => 131,  234 => 130,  230 => 128,  228 => 127,  225 => 126,  222 => 125,  216 => 123,  208 => 121,  206 => 120,  199 => 119,  196 => 118,  194 => 117,  191 => 116,  185 => 114,  182 => 113,  176 => 111,  170 => 109,  167 => 108,  161 => 106,  159 => 105,  156 => 104,  152 => 102,  150 => 101,  147 => 100,  143 => 98,  141 => 97,  138 => 96,  132 => 93,  127 => 92,  125 => 91,  122 => 90,  116 => 87,  113 => 86,  111 => 85,  108 => 84,  102 => 82,  100 => 81,  96 => 80,  93 => 79,  87 => 76,  82 => 75,  80 => 74,  77 => 73,  75 => 70,  74 => 67,  72 => 63,  71 => 62,  70 => 61,  69 => 60,  68 => 59,  67 => 58,  66 => 54,  65 => 53,  62 => 51,  60 => 50,  58 => 49,  55 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/govuk_theme/templates/form/form-element.html.twig", "/var/www/html/drupal-8/themes/govuk_theme/templates/form/form-element.html.twig");
    }
}
