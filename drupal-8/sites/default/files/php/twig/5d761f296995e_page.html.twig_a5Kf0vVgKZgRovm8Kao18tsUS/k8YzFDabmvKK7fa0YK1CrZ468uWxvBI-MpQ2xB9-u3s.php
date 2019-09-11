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

/* themes/govuk_theme/templates/layout/page.html.twig */
class __TwigTemplate_fce1054586766ae0cd0e6a622a2ba1287f881e4914712ba76f71917a667e7d97 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 56];
        $filters = ["escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 48
        echo "<!-- page template -->
<script>document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>

<div id=\"skiplink-container\">
  <div>
    <a href=\"#main-content\" class=\"skiplink govuk-skip-link\">Skip to main content</a>
  </div>
</div>
";
        // line 56
        if (($context["govuk_cookie"] ?? null)) {
            // line 57
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_cookie"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 59
        echo "<header class=\"govuk-header \" role=\"banner\" data-module=\"govuk-header\">
  <div class=\"govuk-header__container govuk-width-container\">
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_header"] ?? null)), "html", null, true);
        echo "
    ";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 63
            echo "      <div class=\"hamburger icon\" onclick=\"toggleMobileMenu();\">
        <i class=\"fa fa-bars\"></i>
      </div>
      ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "    ";
        if (($context["search_box"] ?? null)) {
            // line 69
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_box"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 71
        echo "  </div>
  <div id=\"mobile-menu\"></div>
</header>
<div class=\"govuk-width-container\">
  ";
        // line 75
        if (($context["govuk_phase_banner"] ?? null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_phase_banner"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 78
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "breadcrumb", []) && ($context["show_breadcrumb"] ?? null))) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
  ";
        }
        // line 81
        echo "  <main class=\"govuk-main-wrapper";
        if (($this->getAttribute(($context["page"] ?? null), "breadcrumb", []) && ($context["show_breadcrumb"] ?? null))) {
            echo " has-breadcrumb";
        }
        echo "\" id=\"main-content\" role=\"main\">
    <div class=\"govuk-grid-row\">
      ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 84
            echo "        <div class=\"govuk-grid-column-two-thirds\">
      ";
        } else {
            // line 86
            echo "        <div class=\"govuk-grid-column-full\">
      ";
        }
        // line 88
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
      ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 91
            echo "        <div class=\"govuk-grid-column-one-third\">
          ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 95
        echo "    </div>
  </main>
</div>
<footer class=\"govuk-footer \" role=\"contentinfo\">
    <div class=\"govuk-width-container \">
      <div class=\"govuk-footer__meta\">
        <div class=\"govuk-footer__meta-item govuk-footer__meta-item--grow\">
          ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 103
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          ";
        }
        // line 105
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_footer"] ?? null)), "html", null, true);
        echo "
        </div>
        ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_meta"] ?? null)), "html", null, true);
        echo "
      </div>
    </div>
  </footer>
<!-- ends page template -->
";
    }

    public function getTemplateName()
    {
        return "themes/govuk_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 107,  177 => 105,  171 => 103,  169 => 102,  160 => 95,  154 => 92,  151 => 91,  149 => 90,  143 => 88,  139 => 86,  135 => 84,  133 => 83,  125 => 81,  119 => 79,  116 => 78,  110 => 76,  108 => 75,  102 => 71,  96 => 69,  93 => 68,  88 => 66,  83 => 63,  81 => 62,  77 => 61,  73 => 59,  67 => 57,  65 => 56,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/govuk_theme/templates/layout/page.html.twig", "/var/www/html/drupal-8/themes/govuk_theme/templates/layout/page.html.twig");
    }
}
