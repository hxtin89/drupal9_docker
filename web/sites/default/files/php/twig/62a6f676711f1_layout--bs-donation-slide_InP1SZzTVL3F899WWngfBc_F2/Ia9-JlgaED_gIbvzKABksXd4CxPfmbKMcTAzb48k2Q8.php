<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig */
class __TwigTemplate_da963afba7e8928efa55a4e16b6eeb85 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["content"] ?? null)) {
            // line 2
            echo "\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            echo ">

\t\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 4)) {
                // line 5
                echo "\t\t\t<div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 5), "addClass", [0 => "layout__region", 1 => "layout__region--content"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
                echo ">

\t\t\t\t<div class=\"aw_container aw_cta_donation_slider_module aw_full_width pt96 pt_mobile_64 pb64 pb_mobile_80\">
\t\t\t\t\t<div class=\"aw_row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col_12\">
\t\t\t\t\t\t\t<!-- A unique ID is nessary for each slider. Just use a random nuber as suffix-->
\t\t\t\t\t\t\t<div id=\"abw_donation_slider_01\" class=\"splide aw_donation_slider\">
\t\t\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t\t\t<ul class=\"splide__list\">

\t\t\t\t\t\t\t\t\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t\t\t\t
                      <li class=\"splide__slide bg_yellow no_color_change\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"aw_container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\">

                          ";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 22, $this->source), "html", null, true);
                    echo "
                          
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col_4 left v_bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"aw_btn aw_special_green\" href=\"#\">Jetzt spenden</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            }
            // line 42
            echo "
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  91 => 32,  75 => 22,  68 => 17,  64 => 16,  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content %}
\t<div{{attributes}}>

\t\t{% if content.content %}
\t\t\t<div {{ region_attributes.content.addClass('layout__region', 'layout__region--content') }}>

\t\t\t\t<div class=\"aw_container aw_cta_donation_slider_module aw_full_width pt96 pt_mobile_64 pb64 pb_mobile_80\">
\t\t\t\t\t<div class=\"aw_row\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col_12\">
\t\t\t\t\t\t\t<!-- A unique ID is nessary for each slider. Just use a random nuber as suffix-->
\t\t\t\t\t\t\t<div id=\"abw_donation_slider_01\" class=\"splide aw_donation_slider\">
\t\t\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t\t\t<ul class=\"splide__list\">

\t\t\t\t\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t\t\t\t\t
                      <li class=\"splide__slide bg_yellow no_color_change\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"aw_container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\">

                          {{ item }}
                          
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col_4 left v_bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"aw_btn aw_special_green\" href=\"#\">Jetzt spenden</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endif %}

\t\t</div>
\t{% endif %}
", "modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig", "/var/www/html/web/modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 16);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
