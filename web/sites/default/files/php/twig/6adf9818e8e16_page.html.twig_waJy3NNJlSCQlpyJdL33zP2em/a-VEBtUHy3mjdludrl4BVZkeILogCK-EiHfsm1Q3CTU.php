<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/bryce_theme/templates/layout/page.html.twig */
class __TwigTemplate_d61d36ba3ead5b7ba228ce190c1ba34c extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 9
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . ($context["b5_navbar_schema"] ?? null))) : (" "))) . (((        // line 10
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 11
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_navbar_bg_schema"] ?? null))) : (" ")));
        // line 13
        yield "
";
        // line 15
        $context["footer_classes"] = (((" " . (((        // line 16
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . ($context["b5_footer_schema"] ?? null))) : (" "))) . (((        // line 17
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 18
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_footer_bg_schema"] ?? null))) : (" ")));
        // line 20
        yield "
<header role=\"banner\">
  ";
        // line 22
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 22), "html", null, true);
        yield "

  ";
        // line 24
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 25
            yield "  <nav class=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_classes"] ?? null), "html", null, true);
            yield "\">
    <div class=\"";
            // line 26
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield " d-flex\">
      ";
            // line 27
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 27), "html", null, true);
            yield "

      ";
            // line 29
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 30
                yield "        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          ";
                // line 37
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 37), "html", null, true);
                yield "
          ";
                // line 38
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 38), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 41
            yield "    </div>
  </nav>
  ";
        }
        // line 44
        yield "
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>

  ";
        // line 51
        $context["sidebar_first_classes"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 53
        yield "
  ";
        // line 55
        $context["sidebar_second_classes"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 57
        yield "
  ";
        // line 59
        $context["content_classes"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("col-12 col-lg-6") : (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 61
        yield "
  <div class=\"";
        // line 62
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "      ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 64), "html", null, true);
            yield "
    ";
        }
        // line 66
        yield "    <div class=\"row g-4\">
      ";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "        <div class=\"order-2 order-lg-1 ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 69
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 72
        yield "      <div class=\"order-1 order-lg-2 ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 73
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), "html", null, true);
        yield "
      </div>
      ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "        <div class=\"order-3 ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 77
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 80
        yield "    </div>
  </div>

</main>

";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "<footer role=\"contentinfo\" class=\"mt-auto ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
            yield "\">
  <div class=\"";
            // line 87
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 88
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 88), "html", null, true);
            yield "
  </div>
</footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/bryce_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  201 => 88,  197 => 87,  192 => 86,  190 => 85,  183 => 80,  177 => 77,  172 => 76,  170 => 75,  165 => 73,  160 => 72,  154 => 69,  149 => 68,  147 => 67,  144 => 66,  138 => 64,  136 => 63,  132 => 62,  129 => 61,  127 => 59,  124 => 57,  122 => 55,  119 => 53,  117 => 51,  109 => 44,  104 => 41,  98 => 38,  94 => 37,  85 => 30,  83 => 29,  78 => 27,  74 => 26,  69 => 25,  67 => 24,  62 => 22,  58 => 20,  56 => 18,  55 => 17,  54 => 16,  53 => 15,  50 => 13,  48 => 11,  47 => 10,  46 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/bryce_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/bryce_theme/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "if" => 24];
        static $filters = ["escape" => 22];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
