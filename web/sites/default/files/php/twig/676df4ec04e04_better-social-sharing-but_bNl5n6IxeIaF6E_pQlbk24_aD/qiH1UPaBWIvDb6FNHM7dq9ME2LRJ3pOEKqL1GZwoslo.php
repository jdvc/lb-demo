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

/* modules/contrib/better_social_sharing_buttons/templates/better-social-sharing-buttons.html.twig */
class __TwigTemplate_088283573e39d13ab09a6c364207cf53 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true);
        yield "

";
        // line 4
        yield "<div style=\"display: none\"><link rel=\"preload\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
        yield "\" as=\"image\" type=\"image/svg+xml\" crossorigin=\"anonymous\" /></div>

<div class=\"social-sharing-buttons\">
    ";
        // line 8
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 8), "facebook", [], "any", false, false, true, 8)) {
            // line 9
            yield "        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 9), "html", null, true);
            yield "&amp;title=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 9), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Facebook\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Facebook\" class=\"social-sharing-buttons-button share-facebook\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 10), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 10), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 10), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#facebook\" />
            </svg>
        </a>
    ";
        }
        // line 15
        yield "
    ";
        // line 17
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 17), "x", [], "any", false, false, true, 17)) {
            // line 18
            yield "        <a href=\"https://twitter.com/intent/tweet?text=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 18), "html", null, true);
            yield "+";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 18), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " X\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " X\" class=\"social-sharing-buttons-button share-x\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 19), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 19), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 19), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#x\" />
            </svg>
        </a>
    ";
        }
        // line 24
        yield "
    ";
        // line 26
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 26), "whatsapp", [], "any", false, false, true, 26)) {
            // line 27
            yield "        <a href=\"https://wa.me/?text=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 27), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " WhatsApp\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " WhatsApp\" class=\"social-sharing-buttons-button share-whatsapp\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 28), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 28), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 28), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#whatsapp\" />
            </svg>
        </a>
    ";
        }
        // line 33
        yield "
    ";
        // line 35
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 35), "facebook_messenger", [], "any", false, false, true, 35)) {
            // line 36
            yield "        <a href=\"https://www.facebook.com/dialog/send?app_id=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "facebook_app_id", [], "any", false, false, true, 36), "html", null, true);
            yield "&amp;link=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 36), "html", null, true);
            yield "&amp;redirect_uri=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Facebook Messenger\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Facebook Messenger\" class=\"social-sharing-buttons-button share-facebook-messenger\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 37), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 37), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 37), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#messenger\" />
            </svg>
        </a>
    ";
        }
        // line 42
        yield "
    ";
        // line 44
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 44), "pinterest", [], "any", false, false, true, 44)) {
            // line 45
            yield "        <a href=\"https://pinterest.com/pin/create/link/?url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 45), "html", null, true);
            yield "&amp;description=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 45), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Pinterest\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Pinterest\" class=\"social-sharing-buttons-button share-pinterest\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 46), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 46), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 46), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#pinterest\" />
            </svg>
        </a>
    ";
        }
        // line 51
        yield "
    ";
        // line 53
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 53), "linkedin", [], "any", false, false, true, 53)) {
            // line 54
            yield "        <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 54), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Linkedin\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Linkedin\" class=\"social-sharing-buttons-button share-linkedin\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 55), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 55), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 55), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#linkedin\" />
            </svg>
        </a>
    ";
        }
        // line 60
        yield "
  ";
        // line 62
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 62), "truth", [], "any", false, false, true, 62)) {
            // line 63
            yield "    <a href=\"https://truthsocial.com/share?text=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 63), "html", null, true);
            yield "&url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 63), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Truth Social\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Truth Social\" class=\"social-sharing-buttons-button share-truth\" rel=\"noopener\">
      <svg aria-hidden=\"true\" width=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 64), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 64), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 64), "html", null, true);
            yield ";\">
        <use href=\"";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#truth\" />
      </svg>
    </a>
  ";
        }
        // line 69
        yield "
  ";
        // line 71
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 71), "bluesky", [], "any", false, false, true, 71)) {
            // line 72
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/bluesky"), "html", null, true);
            yield "
    <a href=\"#\" target=\"_blank\" title=\"";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Bluesky\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Bluesky\" class=\"social-sharing-buttons-button share-bluesky\" rel=\"noopener\">
      <svg aria-hidden=\"true\" width=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 74), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 74), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 74), "html", null, true);
            yield ";\">
        <use href=\"";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#bluesky\" />
      </svg>
    </a>
  ";
        }
        // line 79
        yield "
    ";
        // line 81
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 81), "xing", [], "any", false, false, true, 81)) {
            // line 82
            yield "        <a href=\"https://www.xing.com/spi/shares/new?url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 82), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Xing\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Xing\" class=\"social-sharing-buttons-button share-xing\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 83), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 83), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 83), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#xing\" />
            </svg>
        </a>
    ";
        }
        // line 88
        yield "
    ";
        // line 90
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 90), "tumblr", [], "any", false, false, true, 90)) {
            // line 91
            yield "        <a href=\"https://www.tumblr.com/share?v=3&amp;u=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 91), "html", null, true);
            yield "&amp;t=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 91), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Tumblr\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Tumblr\" class=\"social-sharing-buttons-button share-tumblr\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 92), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 92), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 92), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#tumblr\" />
            </svg>
        </a>
    ";
        }
        // line 97
        yield "
    ";
        // line 99
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 99), "reddit", [], "any", false, false, true, 99)) {
            // line 100
            yield "        <a href=\"https://www.reddit.com/submit?url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 100), "html", null, true);
            yield "&amp;title=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 100), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Reddit\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Reddit\" class=\"social-sharing-buttons-button share-reddit\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 101), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 101), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 101), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#reddit\" />
            </svg>
        </a>
    ";
        }
        // line 106
        yield "
    ";
        // line 108
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 108), "evernote", [], "any", false, false, true, 108)) {
            // line 109
            yield "        <a href=\"https://www.evernote.com/clip.action?url=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 109), "html", null, true);
            yield "&amp;title=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 109), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Evernote\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Evernote\" class=\"social-sharing-buttons-button share-evernote\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 110), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 110), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 110), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#evernote\" />
            </svg>
        </a>
    ";
        }
        // line 115
        yield "
    ";
        // line 117
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 117), "email", [], "any", false, false, true, 117)) {
            // line 118
            yield "        <a href=\"mailto:?subject=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 118), "html", null, true);
            yield "&amp;body=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 118), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Email\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            yield " Email\" class=\"social-sharing-buttons-button share-email\" target=\"_blank\" rel=\"noopener\">
            <svg aria-hidden=\"true\" width=\"";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 119), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 119), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 119), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#email\" />
            </svg>
        </a>
    ";
        }
        // line 124
        yield "
    ";
        // line 126
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 126), "copy", [], "any", false, false, true, 126)) {
            // line 127
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true);
            yield "
        <a href=\"#\" class=\"btn-copy social-sharing-buttons-button share-copy\" role=\"button\" title=\"";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copy link"));
            yield "\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copy link"));
            yield "\">
            <svg aria-hidden=\"true\" width=\"";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 129), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 129), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 129), "html", null, true);
            yield ";\">
                <use href=\"";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#copy\" />
            </svg>
            <div class=\"social-sharing-buttons-popup\" role=\"alert\" aria-live=\"assertive\">";
            // line 132
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copied to clipboard"));
            yield "</div>
        </a>
    ";
        }
        // line 135
        yield "
  ";
        // line 137
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 137), "print", [], "any", false, false, true, 137)) {
            // line 138
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 138)) {
                // line 139
                yield "      ";
                $context["href"] = "#";
                // line 140
                yield "      ";
                $context["rel"] = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 140);
                // line 141
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/print-css"), "html", null, true);
                yield "
    ";
            } else {
                // line 143
                yield "      ";
                $context["href"] = "javascript:window.print()";
                // line 144
                yield "    ";
            }
            // line 145
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\" rel=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rel"] ?? null), "html", null, true);
            yield "\" class=\"bssb-printlink share-print\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Print"));
            yield "\"  aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Print"));
            yield "\">
      <svg aria-hidden=\"true\" width=\"";
            // line 146
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 146), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 146), "html", null, true);
            yield "\" style=\"border-radius:";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 146), "html", null, true);
            yield ";\">
        <use href=\"";
            // line 147
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_buttons_sprite"] ?? null), "html", null, true);
            yield "#print\" />
      </svg>
    </a>
  ";
        }
        // line 151
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["social_buttons_sprite", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/better_social_sharing_buttons/templates/better-social-sharing-buttons.html.twig";
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
        return array (  554 => 151,  547 => 147,  539 => 146,  528 => 145,  525 => 144,  522 => 143,  516 => 141,  513 => 140,  510 => 139,  507 => 138,  504 => 137,  501 => 135,  495 => 132,  490 => 130,  482 => 129,  476 => 128,  471 => 127,  468 => 126,  465 => 124,  458 => 120,  450 => 119,  439 => 118,  436 => 117,  433 => 115,  426 => 111,  418 => 110,  407 => 109,  404 => 108,  401 => 106,  394 => 102,  386 => 101,  375 => 100,  372 => 99,  369 => 97,  362 => 93,  354 => 92,  343 => 91,  340 => 90,  337 => 88,  330 => 84,  322 => 83,  313 => 82,  310 => 81,  307 => 79,  300 => 75,  292 => 74,  286 => 73,  281 => 72,  278 => 71,  275 => 69,  268 => 65,  260 => 64,  249 => 63,  246 => 62,  243 => 60,  236 => 56,  228 => 55,  219 => 54,  216 => 53,  213 => 51,  206 => 47,  198 => 46,  187 => 45,  184 => 44,  181 => 42,  174 => 38,  166 => 37,  153 => 36,  150 => 35,  147 => 33,  140 => 29,  132 => 28,  123 => 27,  120 => 26,  117 => 24,  110 => 20,  102 => 19,  91 => 18,  88 => 17,  85 => 15,  78 => 11,  70 => 10,  59 => 9,  56 => 8,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/better_social_sharing_buttons/templates/better-social-sharing-buttons.html.twig", "/var/www/html/web/modules/contrib/better_social_sharing_buttons/templates/better-social-sharing-buttons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "set" => 139);
        static $filters = array("escape" => 1, "t" => 9);
        static $functions = array("attach_library" => 1, "url" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                ['attach_library', 'url'],
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
