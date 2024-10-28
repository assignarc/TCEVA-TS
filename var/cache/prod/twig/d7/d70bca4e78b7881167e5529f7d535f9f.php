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

/* reportMembership.html.twig */
class __TwigTemplate_77c9efbed9a52e9ad0debeb9c46e1451 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "reportMembership.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\t<div class=\"main report\">
\t\t<div class=\"title\">TCEVA Membership Listing</div>
\t\t<p>
\t\t\t(as of
\t\t\t";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "m/d/Y"), "html", null, true);
        yield "
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table class=\"tablebox tablestripedbw\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>Contact</th>
\t\t\t\t\t\t<th>Features</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["people"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 22
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 22) == "M")) {
                // line 23
                yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 24), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine1", [], "any", false, false, false, 25) . ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine2", [], "any", false, false, false, 25)) ? (("<br>" . CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine2", [], "any", false, false, false, 25))) : (""))), "html", null, true);
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "city", [], "any", false, false, false, 25), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "state", [], "any", false, false, false, 25), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "postal", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "phone", [], "any", false, false, false, 26), "html", null, true);
                yield " ";
                ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "carrier", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("(" . CoreExtension::getAttribute($this->env, $this->source, $context["person"], "carrier", [], "any", false, false, false, 26)) . ")"), "html", null, true)) : (yield ""));
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 26), "html", null, true);
                yield "<br>Emergency: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "emergencyContact", [], "any", false, false, false, 26), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "emergencyContactPhone", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\tPermissions: ";
                // line 28
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "newsAdmin", [], "any", false, false, false, 28)) ? ("Events") : (""));
                yield " ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "timeAdmin", [], "any", false, false, false, 28)) ? ("Time") : (""));
                yield " ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "userAdmin", [], "any", false, false, false, 28)) ? ("Web") : (""));
                yield "<br>
\t\t\t\t\t\t\t\t\tCertifications: 
\t\t\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "features", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 31
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "featureName", [], "any", false, false, false, 31), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            // line 36
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reportMembership.html.twig";
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
        return array (  153 => 37,  147 => 36,  142 => 33,  133 => 31,  129 => 30,  120 => 28,  107 => 26,  97 => 25,  91 => 24,  88 => 23,  85 => 22,  81 => 21,  64 => 7,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reportMembership.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/reportMembership.html.twig");
    }
}
