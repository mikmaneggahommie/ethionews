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

/* themes/easy_news/templates/layout/page.html.twig */
class __TwigTemplate_d88040dae5985957d1c0c0052e29be16c0347375dff6b25e4dc4fef74c3b886f extends \Twig\Template
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
        echo "
<div class=\"easy-news-header uk-container uk-container-center uk-responsive-width\" role=\"banner\">
  <div class=\"uk-grid uk-container-center uk-responsive-width uk-margin-top\">
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 58)) {
            // line 59
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 63
        echo "    </div>
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ad", [], "any", false, false, true, 65)) {
            // line 66
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ad", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 70
        echo "    </div>
  </div>
</div>

<div class=\"easy-news-main-menu uk-container uk-container-center uk-responsive-width\">
  <div class=\"uk-grid uk-responsive-width uk-visible-large\">
    <div class=\"uk-width-1-1\">
      <nav class=\"uk-navbar uk-responsive-width\" role=\"navigation\">
        <div class=\"uk-float-right\">
        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 79)) {
            // line 80
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "        </div>
        <div class=\"uk-float-left\">
        ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 84)) {
            // line 85
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 87
        echo "        </div>
      </nav>
    </div>
  </div>
  <div class=\"uk-hidden-large\">
    <nav class=\"uk-navbar\" role=\"navigation\">
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 93)) {
            // line 94
            echo "      <a href=\"#offcanvas\" class=\"uk-navbar-toggle\" data-uk-offcanvas=\"{mode:'slide'}\"></a>
      <div class=\"uk-offcanvas-bar\">
        ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 99
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 99)) {
            // line 100
            echo "      <div class=\"uk-margin-small-top uk-align-right uk-margin-right\">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_icons", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 104
        echo "    </nav>
  </div>

</div>

<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 112)) {
            // line 113
            echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
      ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 117
        echo "
  ";
        // line 118
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 118) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 118))) {
            // line 119
            echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  ";
        } else {
            // line 120
            echo "}
    <div class=\"uk-width-medium-1-1\">
  ";
        }
        // line 123
        echo "    <main id=\"content\" class=\"column main-content\" role=\"main\">
      <section class=\"section\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
      </section>
    </main>
  </div>
  ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130))) {
            // line 131
            echo "    <div class=\"uk-width-medium-1-3 uk-width-large-1-4\">
    ";
            // line 132
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 132)) {
                // line 133
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 137
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 137)) {
                // line 138
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 142
            echo "  ";
        }
        // line 143
        echo "    </div>
  </div>

</div>

";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 148)) {
            // line 149
            echo "  <div class=\"easy-news-footer uk-container uk-text-center uk-responsive-width\">
    ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 153)) {
            // line 154
            echo "  <div class=\"easy-news-secondary-menu uk-container uk-responsive-width\" role=\"navigation\">
    ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "credits", [], "any", false, false, true, 158)) {
            // line 159
            echo "  <div class=\"easy-news-credits uk-container uk-responsive-width uk-text-center\" role=\"contentinfo\">
    ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "credits", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 163
        echo "
";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 164)) {
            // line 165
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        ";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 168,  257 => 165,  255 => 164,  252 => 163,  246 => 160,  243 => 159,  241 => 158,  235 => 155,  232 => 154,  230 => 153,  224 => 150,  221 => 149,  219 => 148,  212 => 143,  209 => 142,  203 => 139,  200 => 138,  197 => 137,  191 => 134,  188 => 133,  186 => 132,  183 => 131,  181 => 130,  174 => 126,  169 => 123,  164 => 120,  160 => 119,  158 => 118,  155 => 117,  149 => 114,  146 => 113,  144 => 112,  134 => 104,  128 => 101,  125 => 100,  122 => 99,  116 => 96,  112 => 94,  110 => 93,  102 => 87,  96 => 85,  94 => 84,  90 => 82,  84 => 80,  82 => 79,  71 => 70,  65 => 67,  62 => 66,  60 => 65,  56 => 63,  50 => 60,  47 => 59,  45 => 58,  39 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/easy_news/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\ethionews\\themes\\easy_news\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58);
        static $filters = array("escape" => 60);
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
