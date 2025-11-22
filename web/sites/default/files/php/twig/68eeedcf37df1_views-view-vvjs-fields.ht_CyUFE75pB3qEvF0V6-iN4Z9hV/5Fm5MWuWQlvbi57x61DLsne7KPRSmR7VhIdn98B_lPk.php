<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/vvjs/templates/views-view-vvjs-fields.html.twig */
class __TwigTemplate_e4aa1f4476d3a48fc5246f3bbf806cfd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "
";
        // line 36
        $context["first_field"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["fields"] ?? null));
        // line 37
        $context["remaining_fields"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["fields"] ?? null), 1);
        // line 38
        yield "
";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["first_field"] ?? null), "content", [], "any", false, false, true, 40), "html", null, true);
        yield "
<div class=\"vvjs-separator\"></div>
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["remaining_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 44
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "separator", [], "any", false, false, true, 44), "html", null, true);
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 45)) {
                // line 46
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 46), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_attributes", [], "any", false, false, true, 46), "html", null, true);
                yield ">";
            }
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 48)) {
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 49)) {
                    // line 50
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 50), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_attributes", [], "any", false, false, true, 50), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 50), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 50), "html", null, true);
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 50), "html", null, true);
                    yield ">";
                } else {
                    // line 52
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 52), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 52), "html", null, true);
                }
            }
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 55)) {
                // line 56
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 56), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_attributes", [], "any", false, false, true, 56), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 56), "html", null, true);
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 56), "html", null, true);
                yield ">";
            } else {
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 58), "html", null, true);
            }
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 60)) {
                // line 61
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 61), "html", null, true);
                yield ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/vvjs/templates/views-view-vvjs-fields.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  111 => 61,  109 => 60,  106 => 58,  96 => 56,  94 => 55,  89 => 52,  78 => 50,  76 => 49,  74 => 48,  68 => 46,  66 => 45,  63 => 44,  59 => 43,  54 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/vvjs/templates/views-view-vvjs-fields.html.twig", "/var/www/html/web/modules/contrib/vvjs/templates/views-view-vvjs-fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 36, "for" => 43, "if" => 45];
        static $filters = ["first" => 36, "slice" => 37, "escape" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['first', 'slice', 'escape'],
                [],
                $this->source
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
