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

/* themes/easy_news/templates/layout/page--front.html.twig */
class __TwigTemplate_928c3876c24e76cdbe6d3624bd6a30832847a1ec51208ec0ffd839ef2ead2bca extends \Twig\Template
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
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 54)) {
            // line 55
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("uikit_slideshow/uikit.slideshow"), "html", null, true);
            echo "
";
        }
        // line 57
        echo "
<div class=\"easy-news-header uk-container uk-container-center uk-responsive-width\" role=\"banner\">
  <div class=\"uk-grid uk-container-center uk-responsive-width uk-margin-top\">
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 61)) {
            // line 62
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 66
        echo "    </div>
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ad", [], "any", false, false, true, 68)) {
            // line 69
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ad", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 73
        echo "    </div>
  </div>
</div>

<div class=\"easy-news-main-menu uk-container uk-container-center uk-responsive-width\">
  <div class=\"uk-grid uk-responsive-width uk-visible-large\">
    <div class=\"uk-width-1-1\">
      <nav class=\"uk-navbar uk-responsive-width\" role=\"navigation\">
        <div class=\"uk-float-right\">
        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 82)) {
            // line 83
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 85
        echo "        </div>
        <div class=\"uk-float-left\">
        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 87)) {
            // line 88
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 90
        echo "        </div>
      </nav>
    </div>
  </div>
  <div class=\"uk-hidden-large\">
    <nav class=\"uk-navbar\" role=\"navigation\">
    ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 96)) {
            // line 97
            echo "      <a href=\"#offcanvas\" class=\"uk-navbar-toggle\" data-uk-offcanvas=\"{mode:'slide'}\"></a>
      <div class=\"uk-offcanvas-bar\">
        ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 102
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 102)) {
            // line 103
            echo "      <div class=\"uk-margin-small-top uk-align-right uk-margin-right\">
        ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 107
        echo "    </nav>
  </div>

</div>

<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 119)) {
            // line 120
            echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121)) {
                // line 122
                echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  ";
            } else {
                // line 124
                echo "    <div class=\"uk-width-medium-1-1\">
  ";
            }
            // line 126
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
    </div>
  ";
            // line 128
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128)) {
                // line 129
                echo "    <div class=\"uk-container uk-width-medium-1-3 uk-width-large-1-4 uk-margin-bottom\">
      ";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 133
            echo "  </div>
";
        }
        // line 135
        echo "
";
        // line 141
        echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 142) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 142))) {
            // line 143
            echo "    <div class=\"uk-width-large-3-4 uk-margin-bottom\">
  ";
        } else {
            // line 145
            echo "    <div class=\"uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 147
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 147)) {
            // line 148
            echo "      <div class=\"uk-width-1-1\">
        ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 152
        echo "      <div class=\"uk-width-1-1\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
          </section>
        </main>
      </div>
    ";
        // line 160
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_1", [], "any", false, false, true, 160) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_2", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_3", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_4", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_5", [], "any", false, false, true, 160))) {
            // line 161
            echo "      <div class=\"uk-grid uk-grid-divider\">
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_1", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
          ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_2", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
          ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_3", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_4", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
          ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_5", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
          ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_widget_6", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 174
        echo "    </div>

  ";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 176) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 176))) {
            // line 177
            echo "    <div class=\"uk-container uk-width-large-1-4 uk-margin-bottom\">
  ";
        } else {
            // line 179
            echo "    <div class=\"uk-container uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 181
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 181)) {
            // line 182
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 182)) {
                // line 183
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 184
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 187
            echo "  ";
        }
        // line 188
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 188)) {
            // line 189
            echo "      <div class=\"uk-margin-bottom\">
        ";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 193
        echo "    </div>
  </div>

</div>

";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 198)) {
            // line 199
            echo "  <div class=\"easy-news-footer uk-container uk-text-center uk-responsive-width\">
    ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 203)) {
            // line 204
            echo "  <div class=\"easy-news-secondary-menu uk-container uk-responsive-width\" role=\"navigation\">
    ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "credits", [], "any", false, false, true, 208)) {
            // line 209
            echo "  <div class=\"easy-news-credits uk-container uk-responsive-width uk-text-center\" role=\"contentinfo\">
    ";
            // line 210
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "credits", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 213
        echo "
";
        // line 214
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 214)) {
            // line 215
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 218,  352 => 215,  350 => 214,  347 => 213,  341 => 210,  338 => 209,  336 => 208,  330 => 205,  327 => 204,  325 => 203,  319 => 200,  316 => 199,  314 => 198,  307 => 193,  301 => 190,  298 => 189,  295 => 188,  292 => 187,  286 => 184,  283 => 183,  280 => 182,  277 => 181,  273 => 179,  269 => 177,  267 => 176,  263 => 174,  256 => 170,  252 => 169,  248 => 168,  242 => 165,  238 => 164,  234 => 163,  230 => 161,  228 => 160,  221 => 156,  215 => 152,  209 => 149,  206 => 148,  203 => 147,  199 => 145,  195 => 143,  193 => 142,  190 => 141,  187 => 135,  183 => 133,  177 => 130,  174 => 129,  172 => 128,  166 => 126,  162 => 124,  158 => 122,  156 => 121,  153 => 120,  151 => 119,  142 => 107,  136 => 104,  133 => 103,  130 => 102,  124 => 99,  120 => 97,  118 => 96,  110 => 90,  104 => 88,  102 => 87,  98 => 85,  92 => 83,  90 => 82,  79 => 73,  73 => 70,  70 => 69,  68 => 68,  64 => 66,  58 => 63,  55 => 62,  53 => 61,  47 => 57,  41 => 55,  39 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/easy_news/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\ethionews\\themes\\easy_news\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 54);
        static $filters = array("escape" => 55);
        static $functions = array("attach_library" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
