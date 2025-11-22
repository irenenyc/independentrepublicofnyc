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

/* themes/custom/olivero_custom/templates/field--field-audio-snippets.html.twig */
class __TwigTemplate_ef90da1777fdca1a7975e0cb757297ba extends Template
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
        // line 1
        yield "
";
        // line 3
        $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero_custom/audio_snippets");
        // line 4
        yield "

";
        // line 9
        if (($context["label"] ?? null)) {
            // line 10
            yield "  <h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h2>
";
        }
        // line 12
        yield "
<div class=\"field--name-field-audio-snippets\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            yield "    ";
            $context["lines"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 15)))), "
");
            // line 16
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["lines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 17
                yield "      ";
                $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["line"], "|");
                // line 18
                yield "      ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parts"] ?? null)) == 2)) {
                    // line 19
                    yield "        <a href=\"#\" data-time=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim((($_v0 = ($context["parts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["parts"] ?? null), 0, [], "array", false, false, true, 19))), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim((($_v1 = ($context["parts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["parts"] ?? null), 1, [], "array", false, false, true, 19))), "html", null, true);
                    yield "</a><br>
      ";
                }
                // line 21
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['line'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/olivero_custom/templates/field--field-audio-snippets.html.twig";
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
        return array (  104 => 23,  98 => 22,  92 => 21,  84 => 19,  81 => 18,  78 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 12,  55 => 10,  53 => 9,  49 => 4,  47 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/olivero_custom/templates/field--field-audio-snippets.html.twig", "/var/www/html/web/themes/custom/olivero_custom/templates/field--field-audio-snippets.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["do" => 3, "if" => 9, "for" => 14, "set" => 15];
        static $filters = ["escape" => 10, "split" => 15, "trim" => 15, "striptags" => 15, "render" => 15, "length" => 18];
        static $functions = ["attach_library" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['do', 'if', 'for', 'set'],
                ['escape', 'split', 'trim', 'striptags', 'render', 'length'],
                ['attach_library'],
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
