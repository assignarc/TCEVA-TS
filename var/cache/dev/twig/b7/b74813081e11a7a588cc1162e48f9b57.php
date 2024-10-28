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
class __TwigTemplate_a24471b2445e24ee15bd73c924f07464 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportPersonHoursByType.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportPersonHoursByType.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reportPersonHoursByType.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "<body>
\t<div class=\"main report\">
\t\t<div class=\"title\">Hours by Person - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["timeLabel"]) || array_key_exists("timeLabel", $context) ? $context["timeLabel"] : (function () { throw new RuntimeError('Variable "timeLabel" does not exist.', 5, $this->source); })()), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 17, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 17, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 17, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 18
            yield "\t\t\t\t\t\t\t<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 18, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 18), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 24, $this->source); })()));
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
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["title"], 1, [], "array", false, false, false, 25) == "Total")) ? ("totalRow") : (""));
            yield "\">
\t\t\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], 0, [], "array", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], 1, [], "array", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t";
            // line 28
            $context["row"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28), [], "array", false, false, false, 28);
            // line 29
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 29, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 29, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 29, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
                // line 30
                yield "\t\t\t\t\t\t\t\t<td style=\"text-align:right\">";
                (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 30, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 30) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 30, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 30)), "html", null, true)) : (yield ""));
                yield "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), 12, [], "array", false, false, false, 32) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), 12, [], "array", false, false, false, 32)), "html", null, true)) : (yield ""));
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
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 38, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 38, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 38, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 39
            yield "\t\t\t\t\t\t\t<td  style=\"text-align:right\">";
            (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 39, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 39) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 39, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 39)), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t\t\t\t\t<td style=\"text-align:right\">";
        (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 41, $this->source); })()), 12, [], "array", false, false, false, 41) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 41, $this->source); })()), 12, [], "array", false, false, false, 41)), "html", null, true)) : (yield ""));
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  199 => 41,  190 => 39,  186 => 38,  181 => 35,  163 => 32,  154 => 30,  149 => 29,  147 => 28,  143 => 27,  139 => 26,  134 => 25,  117 => 24,  111 => 20,  102 => 18,  98 => 17,  86 => 8,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<body>
\t<div class=\"main report\">
\t\t<div class=\"title\">Hours by Person - {{ timeLabel }}</div>
\t\t<p>
\t\t\t(as of
\t\t\t{{ \"now\"|date(\"m/d/Y\") }}
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Activity Type</th>
\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t<th>{{ months[cnt-1] }}</th>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for title in titles %}
\t\t\t\t\t\t<tr class=\"{{ title[1] == 'Total' ? 'totalRow' : '' }}\">
\t\t\t\t\t\t\t<td>{{ title[0] }}</td>
\t\t\t\t\t\t\t<td>{{ title[1] }}</td>
\t\t\t\t\t\t\t{% set row = rows[loop.index0] %}
\t\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t\t<td style=\"text-align:right\">{{ row[cnt-1] != 0 ? '%.2f'|format(row[cnt-1]) : '' }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<td style=\"text-align:right\">{{ row[12] != 0 ? '%.2f'|format(row[12]) : '' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr class=\"totals\">
\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t<td  style=\"text-align:right\">{{ totals[cnt-1] != 0 ? '%.2f'|format(totals[cnt-1]) : '' }}</td>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<td style=\"text-align:right\">{{ totals[12] != 0 ? '%.2f'|format(totals[12]) : '' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}", "reportPersonHoursByType.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/reportPersonHoursByType.html.twig");
    }
}
