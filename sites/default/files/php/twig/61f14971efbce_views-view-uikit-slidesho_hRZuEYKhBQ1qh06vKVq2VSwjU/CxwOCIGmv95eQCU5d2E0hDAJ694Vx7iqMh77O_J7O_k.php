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

/* modules/uikit_slideshow/templates/views-view-uikit-slideshow.html.twig */
class __TwigTemplate_c457c0c2e2084763e72b4e3d02d8841eca1ac3fec4a4aa89c099149bfc090b95 extends \Twig\Template
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
        // line 21
        echo "
<div data-uk-slideshow=\"{autoplay:true, kenburns:true}\">
  <ul class=\"uk-slideshow uk-overlay-active\">
    ";
        // line 24
        $context["rowCount"] =  -1;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "      ";
            $context["rowCount"] = (($context["rowCount"] ?? null) + 1);
            // line 27
            echo "      <li data-uk-slideshow-item=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rowCount"] ?? null), 27, $this->source), "html", null, true);
            echo ">
        ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "slide_image", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
        <div class=\"uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-fade\">
          <h2";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
            ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "slide_title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
          </h2>
          <div class=\"uk-hidden-small\">
            ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "slide_body", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <a class=\"uk-position-cover\" href=\"javascript:;\" onclick=\"window.location.href=('";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "node_link", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "')\"></a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </ul>
  <ul class=\"uk-slideset uk-grid uk-grid-small uk-flex-center uk-container-center uk-grid-width-1-10\">
    ";
        // line 42
        $context["rowCount"] =  -1;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 44
            echo "      ";
            $context["rowCount"] = (($context["rowCount"] ?? null) + 1);
            // line 45
            echo "      <li class=\"uk-margin-small-top uk-margin-small-bottom\" data-uk-slideshow-item=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rowCount"] ?? null), 45, $this->source), "html", null, true);
            echo ">
        ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "thumbnail", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/uikit_slideshow/templates/views-view-uikit-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  108 => 46,  103 => 45,  100 => 44,  95 => 43,  93 => 42,  89 => 40,  80 => 37,  74 => 34,  68 => 31,  64 => 30,  59 => 28,  54 => 27,  51 => 26,  46 => 25,  44 => 24,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/uikit_slideshow/templates/views-view-uikit-slideshow.html.twig", "C:\\xampp\\htdocs\\ethionews\\modules\\uikit_slideshow\\templates\\views-view-uikit-slideshow.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "for" => 25);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
