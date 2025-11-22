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

/* modules/contrib/vvjs/templates/views-view-vvjs.html.twig */
class __TwigTemplate_6deeca8c070352f8010b2b44f7201b45 extends Template
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
        // line 20
        yield "
";
        // line 22
        $context["unique_id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "unique_id", [], "any", false, false, true, 22);
        // line 23
        $context["slide_id"] = ("vvjs-" . ($context["unique_id"] ?? null));
        // line 24
        $context["slide_inner_id"] = ("vvjs-inner-" . ($context["unique_id"] ?? null));
        // line 25
        $context["nav_arrows"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "arrows", [], "any", false, false, true, 25);
        // line 27
        $context["classes"] = ["vvjs", ("vvjs-" .         // line 29
($context["unique_id"] ?? null)), (((        // line 30
($context["nav_arrows"] ?? null) == "none")) ? ("") : (($context["nav_arrows"] ?? null))),         // line 31
($context["slide_id"] ?? null), CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["options"] ?? null), "animation", [], "any", false, false, true, 32), ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["options"] ?? null), "hero_slideshow", [], "any", false, false, true, 33)) ? ("hero-slideshow") : ("slideshow")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["options"] ?? null), "show_slide_progress", [], "any", false, false, true, 34)) ? ("slide-progress") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["options"] ?? null), "show_total_slides", [], "any", false, false, true, 35)) ? ("total-slides") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["options"] ?? null), "available_breakpoints", [], "any", false, false, true, 36)) ? (("br-" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "available_breakpoints", [], "any", false, false, true, 36))) : (""))];
        // line 38
        yield "
";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "hero_slideshow", [], "any", false, false, true, 40)) {
            // line 41
            $context["max_width"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max_width", [], "any", false, false, true, 41);
            // line 42
            $context["min_height"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min_height", [], "any", false, false, true, 42);
            // line 43
            $context["max_content_width"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max_content_width", [], "any", false, false, true, 43);
            // line 44
            $context["overlay_position"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "overlay_position", [], "any", false, false, true, 44);
        }
        // line 46
        yield "
";
        // line 47
        $context["nav_dots_numbers"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "navigation", [], "any", false, false, true, 47);
        // line 48
        $context["time_in_seconds"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "time_in_seconds", [], "any", false, false, true, 48);
        // line 49
        $context["show_total_slides"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "show_total_slides", [], "any", false, false, true, 49);
        // line 50
        $context["show_play_pause"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "show_play_pause", [], "any", false, false, true, 50);
        // line 51
        $context["show_slide_progress"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "show_slide_progress", [], "any", false, false, true, 51);
        // line 52
        yield "
";
        // line 54
        $context["total_slides"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null));
        // line 55
        yield "
";
        // line 57
        yield "<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 57), "setAttribute", ["id", ($context["slide_id"] ?? null)], "method", false, false, true, 57), "html", null, true);
        yield " role=\"region\" aria-labelledby=\"slideshow-heading-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
        yield "\">
  <h2 id=\"slideshow-heading-";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slideshow"));
        yield "</h2>

  <div id=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_inner_id"] ?? null), "html", null, true);
        yield "\"
     data-arrows=\"";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["nav_arrows"] ?? null) != "none")) ? ("true") : ("false")));
        yield "\"
     data-navigation=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["nav_dots_numbers"] ?? null) != "none")) ? ("true") : ("false")));
        yield "\"
     data-show-total-slides=\"";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["show_total_slides"] ?? null)) ? ("true") : ("false")));
        yield "\"
     data-show-slide-progress=\"";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["show_slide_progress"] ?? null)) ? ("true") : ("false")));
        yield "\"
     data-play-pause=\"";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["show_play_pause"] ?? null)) ? ("true") : ("false")));
        yield "\"
     data-static=\"";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["time_in_seconds"] ?? null) == 0)) ? ("true") : ("false")));
        yield "\"
     data-time=\"";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["time_in_seconds"] ?? null), "html", null, true);
        yield "\"
     data-total-slides=\"";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null)), "html", null, true);
        yield "\"
     class=\"vvjs-inner";
        // line 69
        yield ((($context["nav_dots_numbers"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["nav_dots_numbers"] ?? null)), "html", null, true)) : (""));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["time_in_seconds"] ?? null) == 0)) ? (" zero") : (" not-zero")));
        yield "\">
    ";
        // line 71
        yield "    <div class=\"announcer visually-hidden\" aria-live=\"polite\" aria-atomic=\"true\">
      ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slide 1 selected"));
        yield "
    </div>
    <div id=\"vvjs-items-";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
        yield "\" class=\"vvjs-items\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "hero_slideshow", [], "any", false, false, true, 74)) {
            yield " style=\"--hero-max-width: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["max_width"] ?? null), "html", null, true);
            yield "; --hero-min-height: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["min_height"] ?? null), "html", null, true);
            yield ";\"";
        }
        yield ">

      ";
        // line 77
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "hero_slideshow", [], "any", false, false, true, 77)) {
            // line 78
            yield "
        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 80
                yield "          ";
                $context["row_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 80));
                // line 81
                yield "
          ";
                // line 83
                yield "          ";
                $context["split_content"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["row_content"] ?? null), "<div class=\"vvjs-separator\"></div>");
                // line 84
                yield "          ";
                $context["hero_image"] = (($_v0 = ($context["split_content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["split_content"] ?? null), 0, [], "array", false, false, true, 84));
                // line 85
                yield "          ";
                $context["hero_content"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["split_content"] ?? null), 1, [], "array", true, true, true, 85)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["split_content"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["split_content"] ?? null), 1, [], "array", false, false, true, 85)), "")) : (""));
                // line 86
                yield "
          <div id=\"vvjs-item-";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 87), "html", null, true);
                yield "\" class=\"vvjs-item\" role=\"tabpanel\" tabindex=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 87)) ? ("0") : ("-1")));
                yield "\" aria-hidden=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 87)) ? ("false") : ("true")));
                yield "\"";
                if (($context["nav_dots_numbers"] ?? null)) {
                    yield " aria-labelledby=\"dots-numbers-button-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 87), "html", null, true);
                    yield "\"";
                }
                yield ">

            <div class=\"vvjs-item-inner\" id=\"";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_inner_id"] ?? null), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 89), "html", null, true);
                yield "-pane\" role=\"group\" aria-labelledby=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_id"] ?? null), "html", null, true);
                yield "-image-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_id"] ?? null), "html", null, true);
                yield "-content-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                yield "\">

              <div class=\"vvjs-hero-image\" role=\"img\" aria-labelledby=\"";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_id"] ?? null), "html", null, true);
                yield "-image-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                yield "\">
                ";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\vvjs\Twig\VVJSTwigExtension']->safeHtml(($context["hero_image"] ?? null)));
                yield "
              </div>

              <div class=\"vvjs-hero-content ";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["overlay_position"] ?? null), "html", null, true);
                yield "\" style=\"";
                if (($context["background_rgb"] ?? null)) {
                    yield "--hero-content-bg:";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["background_rgb"] ?? null), "html", null, true);
                    yield ";";
                }
                yield " --hero-content-width: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["max_content_width"] ?? null), "html", null, true);
                yield ";\" role=\"complementary\" aria-labelledby=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_id"] ?? null), "html", null, true);
                yield "-content-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                yield "\">
                ";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\vvjs\Twig\VVJSTwigExtension']->safeHtml(($context["hero_content"] ?? null)));
                yield "
              </div>

            </div>

          </div>

        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "
      ";
            // line 106
            yield "      ";
        } else {
            // line 107
            yield "
        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 109
                yield "          <div id=\"vvjs-item-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 109), "html", null, true);
                yield "\" class=\"vvjs-item\" role=\"tabpanel\" tabindex=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 109)) ? ("0") : ("-1")));
                yield "\" aria-hidden=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 109)) ? ("false") : ("true")));
                yield "\"";
                if (($context["nav_dots_numbers"] ?? null)) {
                    yield " aria-labelledby=\"dots-numbers-button-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 109), "html", null, true);
                    yield "\"";
                }
                yield ">
            <div id=\"";
                // line 110
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide_inner_id"] ?? null), "html", null, true);
                yield "-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 110), "html", null, true);
                yield "-pane\" class=\"vvjs-item-inner\">
              ";
                // line 111
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 111), "html", null, true);
                yield "
            </div>
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "
      ";
        }
        // line 117
        yield "
    </div>

    ";
        // line 121
        yield "    ";
        if ((($context["total_slides"] ?? null) > 1)) {
            // line 122
            yield "      ";
            if (((((($context["nav_dots_numbers"] ?? null) != "none") || ($context["show_total_slides"] ?? null)) || ($context["show_slide_progress"] ?? null)) || ($context["show_play_pause"] ?? null))) {
                // line 123
                yield "        <div id=\"nav-dots-numbers-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slideshow Tabs"));
                yield "\" class=\"nav-dots-numbers ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_dots_numbers"] ?? null), "html", null, true);
                yield "\">

          ";
                // line 125
                if ((($context["show_play_pause"] ?? null) && (($context["time_in_seconds"] ?? null) > 0))) {
                    // line 126
                    yield "          <button id=\"play-pause-button-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                    yield "\"
          type=\"button\"
          role=\"button\"
          aria-label=\"";
                    // line 129
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Stop automatic slide show"));
                    yield "\"
          class=\"button play-pause-button display-";
                    // line 130
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["time_in_seconds"] ?? null), "html", null, true);
                    yield " play playing\">
            <span class=\"visually-hidden\">";
                    // line 131
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Play and Stop Slideshow"));
                    yield "</span>
            ";
                    // line 132
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@vvjs/svg/svg-pause.svg"));
                    yield "
          </button>
          ";
                }
                // line 135
                yield "
          ";
                // line 136
                if ((($context["show_slide_progress"] ?? null) && (($context["time_in_seconds"] ?? null) > 0))) {
                    // line 137
                    yield "          <div class=\"echo-animation\">
            <div class=\"progressbar\"
                 role=\"progressbar\"
                 aria-valuenow=\"0\"
                 aria-valuemin=\"0\"
                 aria-valuemax=\"";
                    // line 142
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["time_in_seconds"] ?? null), "html", null, true);
                    yield "\"
                 aria-label=\"";
                    // line 143
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slideshow progress"));
                    yield "\"
                 aria-live=\"polite\"
                 data-total-time=\"";
                    // line 145
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["time_in_seconds"] ?? null), "html", null, true);
                    yield "\"
                 data-current-progress=\"0\">
            </div>
          </div>
          ";
                }
                // line 150
                yield "
          ";
                // line 151
                if ((($context["nav_dots_numbers"] ?? null) != "none")) {
                    // line 152
                    yield "          <div  class=\"dots-numbers-button-wrapper\" role=\"tablist\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slideshow Tabs"));
                    yield "\">
          ";
                    // line 153
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                        // line 154
                        yield "            <button id=\"dots-numbers-button-";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 154), "html", null, true);
                        yield "\" class=\"button dots-numbers-button";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 154)) ? (" active") : ("")));
                        yield "\" type=\"button\" role=\"tab\" aria-label=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 154)) ? (t("Slide @index selected", ["@index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 154)])) : (t("Go to slide @index", ["@index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 154)]))));
                        yield "\" aria-selected=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 154)) ? ("true") : ("false")));
                        yield "\" aria-controls=\"vvjs-item-";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                        yield "-";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 154), "html", null, true);
                        yield "\" tabindex=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 154)) ? ("0") : ("-1")));
                        yield "\">
              ";
                        // line 155
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 155), "html", null, true);
                        yield "
            </button>
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    yield "          </div>
          ";
                }
                // line 160
                yield "
          ";
                // line 161
                if (($context["show_total_slides"] ?? null)) {
                    // line 162
                    yield "          <div class=\"echo-total\">
            <span class=\"current-slide\">1</span>/<span class=\"total-slides\">";
                    // line 163
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null)), "html", null, true);
                    yield "</span>
          </div>
          ";
                }
                // line 166
                yield "
        </div>
      ";
            }
            // line 169
            yield "
      ";
            // line 170
            if ((($context["nav_arrows"] ?? null) != "none")) {
                // line 171
                yield "        <div id=\"slide-indicators-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" class=\"slide-indicators\" role=\"navigation\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slideshow Navigation"));
                yield "\">
          <button class=\"button prev-arrow\" role=\"button\" aria-controls=\"vvjs-items-";
                // line 172
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous Slide"));
                yield "\">
            <span class=\"visually-hidden\">";
                // line 173
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous Slide"));
                yield "</span>
            ";
                // line 174
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@vvjs/svg/svg-prev.svg"));
                yield "
          </button>
          <button class=\"button next-arrow\" role=\"button\" aria-controls=\"vvjs-items-";
                // line 176
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next Slide"));
                yield "\">
            <span class=\"visually-hidden\">";
                // line 177
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next Slide"));
                yield "</span>
            ";
                // line 178
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@vvjs/svg/svg-next.svg"));
                yield "
          </button>
        </div>
      ";
            }
            // line 182
            yield "    ";
        }
        // line 183
        yield "
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "rows", "attributes", "loop", "background_rgb"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/vvjs/templates/views-view-vvjs.html.twig";
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
        return array (  578 => 183,  575 => 182,  568 => 178,  564 => 177,  558 => 176,  553 => 174,  549 => 173,  543 => 172,  536 => 171,  534 => 170,  531 => 169,  526 => 166,  520 => 163,  517 => 162,  515 => 161,  512 => 160,  508 => 158,  491 => 155,  474 => 154,  457 => 153,  452 => 152,  450 => 151,  447 => 150,  439 => 145,  434 => 143,  430 => 142,  423 => 137,  421 => 136,  418 => 135,  412 => 132,  408 => 131,  404 => 130,  400 => 129,  393 => 126,  391 => 125,  381 => 123,  378 => 122,  375 => 121,  370 => 117,  366 => 115,  348 => 111,  342 => 110,  325 => 109,  308 => 108,  305 => 107,  302 => 106,  299 => 104,  277 => 96,  261 => 95,  255 => 92,  249 => 91,  234 => 89,  217 => 87,  214 => 86,  211 => 85,  208 => 84,  205 => 83,  202 => 81,  199 => 80,  182 => 79,  179 => 78,  176 => 77,  163 => 74,  158 => 72,  155 => 71,  150 => 69,  146 => 68,  142 => 67,  138 => 66,  134 => 65,  130 => 64,  126 => 63,  122 => 62,  118 => 61,  114 => 60,  107 => 58,  100 => 57,  97 => 55,  95 => 54,  92 => 52,  90 => 51,  88 => 50,  86 => 49,  84 => 48,  82 => 47,  79 => 46,  76 => 44,  74 => 43,  72 => 42,  70 => 41,  68 => 40,  65 => 38,  63 => 36,  62 => 35,  61 => 34,  60 => 33,  59 => 32,  58 => 31,  57 => 30,  56 => 29,  55 => 27,  53 => 25,  51 => 24,  49 => 23,  47 => 22,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/vvjs/templates/views-view-vvjs.html.twig", "/var/www/html/web/modules/contrib/vvjs/templates/views-view-vvjs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "if" => 40, "for" => 79];
        static $filters = ["length" => 54, "escape" => 57, "t" => 58, "render" => 80, "split" => 83, "default" => 85, "safe_html" => 92];
        static $functions = ["include" => 132];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 't', 'render', 'split', 'default', 'safe_html'],
                ['include'],
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
