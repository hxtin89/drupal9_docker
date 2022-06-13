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
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            echo ">

    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 4)) {
                // line 5
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 5), "addClass", [0 => "layout__region", 1 => "layout__region--content"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
                echo ">

        <div
        class=\"aw_container aw_cta_donation_slider_module aw_full_width pt96 pt_mobile_64 pb64 pb_mobile_80\"
      >
        <div class=\"aw_row\">
          <div class=\"col_12\">
            <!-- A unique ID is nessary for each slider. Just use a random nuber as suffix-->
            <div id=\"abw_donation_slider_01\" class=\"splide aw_donation_slider\">
              <div class=\"splide__track\">
                <ul class=\"splide__list\">
\t\t\t\t
                  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Quadratmetern.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  
\t\t\t\t  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Fläche.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Lebensräumen.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                
\t\t\t\t</ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    ";
            }
            // line 97
            echo "
  </div>
";
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
        return array (  145 => 97,  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content %}
  <div{{ attributes }}>

    {% if content.content %}
      <div {{ region_attributes.content.addClass('layout__region', 'layout__region--content') }}>

        <div
        class=\"aw_container aw_cta_donation_slider_module aw_full_width pt96 pt_mobile_64 pb64 pb_mobile_80\"
      >
        <div class=\"aw_row\">
          <div class=\"col_12\">
            <!-- A unique ID is nessary for each slider. Just use a random nuber as suffix-->
            <div id=\"abw_donation_slider_01\" class=\"splide aw_donation_slider\">
              <div class=\"splide__track\">
                <ul class=\"splide__list\">
\t\t\t\t
                  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Quadratmetern.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  
\t\t\t\t  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Fläche.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class=\"splide__slide bg_yellow no_color_change\">
                    <div class=\"aw_container\">
                      <div
                        class=\"aw_row medium_no_gap pt48 pb64 pr64 pl64 pt_mobile_32 pb_mobile_40 pr_mobile_24 pl_mobile_24\"
                      >
                        <div class=\"col_8 prime\">
                          <h3 class=\"mb16\">
                            Wir messen unseren Erfolg nicht in Euros. Sondern in
                            Lebensräumen.
                          </h3>
                          <p class=\"mb32 aw_plarge aw_mobile_p\">
                            Sei Teil unserer Community und trage dazu bei, die
                            Wildnis zu schützen. Werde jetzt Wildnispate.
                          </p>
                        </div>
                        <div class=\"col_4 left v_bottom\">
                          <a class=\"aw_btn aw_special_green\" href=\"#\"
                            >Jetzt spenden</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                
\t\t\t\t</ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    {% endif %}

  </div>
{% endif %}", "modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig", "/var/www/html/web/modules/custom/ww_bootstrap4_layouts/layouts/bs_donation-slider/layout--bs-donation-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
