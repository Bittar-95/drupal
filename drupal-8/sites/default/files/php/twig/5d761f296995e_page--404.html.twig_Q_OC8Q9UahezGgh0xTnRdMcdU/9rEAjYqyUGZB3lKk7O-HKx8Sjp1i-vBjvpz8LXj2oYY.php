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

/* themes/govuk_theme/templates/layout/page--404.html.twig */
class __TwigTemplate_b02051fe273fc9cd7b22170ef814658182cc90fa5778aeff87fcdfe82681a6e5 extends \Twig\Template
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
    ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "govuk_page_title", [])), "html", null, true);
        echo "
    <p>If you typed the web address, check it is correct.</p>
    <p>If you pasted the web address, check you copied the entire address.</p>
    <p>If the web address is correct or you selected a link or button, <a href=\"/contact\">contact the ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
        echo " Helpline</a> if you need to speak to someone about this service.</p>
  </main>
</div>
<footer class=\"govuk-footer \" role=\"contentinfo\">
    <div class=\"govuk-width-container \">
      <div class=\"govuk-footer__meta\">
        <div class=\"govuk-footer__meta-item govuk-footer__meta-item--grow\">
          ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 93
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          ";
        }
        // line 95
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["govuk_footer"] ?? null)), "html", null, true);
        echo "
        </div>
        ";
        // line 97
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
        return "themes/govuk_theme/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 97,  158 => 95,  152 => 93,  150 => 92,  138 => 85,  132 => 82,  125 => 81,  119 => 79,  116 => 78,  110 => 76,  108 => 75,  102 => 71,  96 => 69,  93 => 68,  88 => 66,  83 => 63,  81 => 62,  77 => 61,  73 => 59,  67 => 57,  65 => 56,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/govuk_theme/templates/layout/page--404.html.twig", "/var/www/html/drupal-8/themes/govuk_theme/templates/layout/page--404.html.twig");
    }
}
