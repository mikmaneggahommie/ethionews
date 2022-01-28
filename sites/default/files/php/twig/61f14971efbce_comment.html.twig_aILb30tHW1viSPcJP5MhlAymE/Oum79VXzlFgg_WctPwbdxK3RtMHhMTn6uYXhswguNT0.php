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

/* themes/easy_news/templates/components/comment.html.twig */
class __TwigTemplate_075c00780031ac2a7a45c8b679bdc043860cd9f10d51b0f1baf41102c8d62455 extends \Twig\Template
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
        // line 68
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 71
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 71, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["comment"] ?? null), "owner", [], "any", false, false, true, 72), "anonymous", [], "any", false, false, true, 72)) ? ("by-anonymous") : ("")), 4 => (((        // line 73
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 73)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 73), 73, $this->source)) . "-author")) : ("")), 5 => "clearfix"];
        // line 77
        echo "<article role=\"article\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "role"), "html", null, true);
        echo ">
  ";
        // line 83
        echo "  <span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 83, $this->source), "html", null, true);
        echo "\"></span>
  <footer class=\"comment__meta\">
    ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 85, $this->source), "html", null, true);
        echo "
    <p class=\"comment__author\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 86, $this->source), "html", null, true);
        echo "</p>
    <p class=\"comment__time\">";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 87, $this->source), "html", null, true);
        echo "</p>
    <p class=\"comment__permalink\">";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 88, $this->source), "html", null, true);
        echo "</p>
    ";
        // line 94
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 95
            echo "      <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 95, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 97
        echo "  </footer>
  <div";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 98), 98, $this->source), "html", null, true);
        echo ">
    ";
        // line 99
        if (($context["title"] ?? null)) {
            // line 100
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 100, $this->source), "html", null, true);
            echo "
      <h3";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 101, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 101, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 102, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 104
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 104, $this->source), "links"), "html", null, true);
        echo "
    ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 105)) {
            // line 106
            echo "      <nav>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "</nav>
    ";
        }
        // line 108
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/components/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 108,  112 => 106,  110 => 105,  105 => 104,  100 => 102,  94 => 101,  89 => 100,  87 => 99,  83 => 98,  80 => 97,  74 => 95,  71 => 94,  67 => 88,  63 => 87,  59 => 86,  55 => 85,  49 => 83,  44 => 77,  42 => 73,  41 => 72,  40 => 71,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/easy_news/templates/components/comment.html.twig", "C:\\xampp\\htdocs\\ethionews\\themes\\easy_news\\templates\\components\\comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 94);
        static $filters = array("escape" => 77, "without" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
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
