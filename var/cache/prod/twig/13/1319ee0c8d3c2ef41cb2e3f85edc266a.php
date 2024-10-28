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

/* reportPersonHoursByType.html.twig */
class __TwigTemplate_29c9e257562e7f450800609ae14e2e16 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reportPersonHoursByType.html.twig", 1);
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
        yield "<body>
\t<div class=\"main report\">
\t\t<div class=\"title\">Hours by Person - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timeLabel"] ?? null), "html", null, true);
        yield "</div>
\t\t<p>
\t\t\t(as of
\t\t\t";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "m/d/Y"), "html", null, true);
        yield "
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Activity Type</th>
\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["offsetMonth"] ?? null), ((($context["offsetMonth"] ?? null) + ($context["numberOfMonths"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 18
            yield "\t\t\t\t\t\t\t<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["months"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["cnt"] - 1)] ?? null) : null), "html", null, true);
            yield "</th>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["titles"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 25
            yield "\t\t\t\t\t\t<tr class=\"";
            yield ((((($__internal_compile_1 = $context["title"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null) == "Total")) ? ("totalRow") : (""));
            yield "\">
\t\t\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["title"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["title"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t";
            // line 28
            $context["row"] = (($__internal_compile_4 = ($context["rows"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28)] ?? null) : null);
            // line 29
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["offsetMonth"] ?? null), ((($context["offsetMonth"] ?? null) + ($context["numberOfMonths"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
                // line 30
                yield "\t\t\t\t\t\t\t\t<td style=\"text-align:right\">";
                ((((($__internal_compile_5 = ($context["row"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["cnt"] - 1)] ?? null) : null) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (($__internal_compile_6 = ($context["row"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["cnt"] - 1)] ?? null) : null)), "html", null, true)) : (yield ""));
                yield "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            ((((($__internal_compile_7 = ($context["row"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[12] ?? null) : null) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (($__internal_compile_8 = ($context["row"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[12] ?? null) : null)), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t\t\t\t\t<tr class=\"totals\">
\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["offsetMonth"] ?? null), ((($context["offsetMonth"] ?? null) + ($context["numberOfMonths"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 39
            yield "\t\t\t\t\t\t\t<td  style=\"text-align:right\">";
            ((((($__internal_compile_9 = ($context["totals"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["cnt"] - 1)] ?? null) : null) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (($__internal_compile_10 = ($context["totals"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["cnt"] - 1)] ?? null) : null)), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t\t\t\t\t<td style=\"text-align:right\">";
        ((((($__internal_compile_11 = ($context["totals"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[12] ?? null) : null) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (($__internal_compile_12 = ($context["totals"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[12] ?? null) : null)), "html", null, true)) : (yield ""));
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
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
        return "reportPersonHoursByType.html.twig";
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
        return array (  181 => 41,  172 => 39,  168 => 38,  163 => 35,  145 => 32,  136 => 30,  131 => 29,  129 => 28,  125 => 27,  121 => 26,  116 => 25,  99 => 24,  93 => 20,  84 => 18,  80 => 17,  68 => 8,  62 => 5,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reportPersonHoursByType.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/reportPersonHoursByType.html.twig");
    }
}
