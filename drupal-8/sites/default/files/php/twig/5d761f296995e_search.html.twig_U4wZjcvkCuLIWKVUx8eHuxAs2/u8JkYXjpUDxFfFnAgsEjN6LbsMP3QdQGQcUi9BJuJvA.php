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

/* themes/govuk_theme/templates/components/search.html.twig */
class __TwigTemplate_cfd6e3de794793e9de9472b752fa6a48087dd40a209b7dca68ecbe69df7ee9e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<form action=\"/search/node\" method=\"get\" accept-charset=\"utf-8\" class=\"search-header\" role=\"search\">
\t<div class=\"gem-c-search gem-c-search--on-white gem-c-search--large gem-c-search--separate-label\" data-module=\"gem-toggle-input-class-on-focus\">
\t\t<div class=\"gem-c-search__item-wrapper\">
\t\t\t<input type=\"search\" value=\"\" id=\"edit-keys\" name=\"keys\" title=\"Search\" class=\"gem-c-search__item gem-c-search__input js-class-toggle\" placeholder=\"Search ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
        echo "\">
\t\t\t<div class=\"gem-c-search__item gem-c-search__submit-wrapper\">
\t\t\t\t<button type=\"submit\" class=\"gem-c-search__submit\">Search</button>
\t\t\t</div>
\t\t</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "themes/govuk_theme/templates/components/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/govuk_theme/templates/components/search.html.twig", "/var/www/html/drupal-8/themes/govuk_theme/templates/components/search.html.twig");
    }
}
