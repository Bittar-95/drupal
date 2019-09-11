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

/* themes/govuk_theme/templates/layout/page-title.html.twig */
class __TwigTemplate_7ad6bf320a3f390cc9cd65cd83ca0804564d3c76db16fb6394ef2514a410efe7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17, "set" => 21];
        $filters = ["escape" => 16, "e" => 26, "split" => 27, "trim" => 31, "first" => 31, "last" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'e', 'split', 'trim', 'first', 'last'],
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
        // line 15
        echo "<!-- page-title.html.twig -->
";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
";
        // line 17
        if (($context["title"] ?? null)) {
            // line 18
            echo "  <h1";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "govuk-heading-xl"], "method")), "html", null, true);
            echo ">
    ";
            // line 20
            echo "    ";
            if (twig_test_iterable(($context["title"] ?? null))) {
                // line 21
                echo "      ";
                $context["page_title"] = $this->getAttribute(($context["title"] ?? null), "#markup", [], "array");
                // line 22
                echo "    ";
            } else {
                // line 23
                echo "      ";
                $context["page_title"] = ($context["title"] ?? null);
                // line 24
                echo "    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if (twig_in_filter("|", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_title"] ?? null)))) {
                // line 27
                echo "      ";
                $context["page_title_parts"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null)), "|");
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (($context["page_title_parts"] ?? null)) {
                // line 31
                echo "      <span class=\"heading-secondary\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_parts"] ?? null)))), "html", null, true);
                echo "</span>
      ";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_last($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_parts"] ?? null)))), "html", null, true);
                echo "
    ";
            } else {
                // line 34
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 36
            echo "  </h1>
";
        }
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
<!-- ends page-title.html.twig -->
";
    }

    public function getTemplateName()
    {
        return "themes/govuk_theme/templates/layout/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  116 => 36,  110 => 34,  105 => 32,  100 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  64 => 18,  62 => 17,  58 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/govuk_theme/templates/layout/page-title.html.twig", "/var/www/html/drupal-8/themes/govuk_theme/templates/layout/page-title.html.twig");
    }
}
