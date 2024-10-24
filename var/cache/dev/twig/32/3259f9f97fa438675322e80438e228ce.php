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

/* reportHoursByType.html.twig */
class __TwigTemplate_78acca918b66242aca7b7e803dda0166 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportHoursByType.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportHoursByType.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reportHoursByType.html.twig", 1);
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
        yield "\t<div class=\"main report\">
\t\t<div class=\"title\">Hours by Type -
\t\t\t";
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
\t\t\t\t\t\t<th data-column-id=\"activityType\">Activity Type</th>
\t\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 16, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 16, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 16, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 17
            yield "\t\t\t\t\t\t\t<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 17, $this->source); })()), ($context["cnt"] - 1), [], "array", false, false, false, 17), "html", null, true);
            yield "</th>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "\t\t\t\t\t\t<th data-column-id=\"total\">Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 23, $this->source); })()));
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
            // line 24
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t";
            // line 26
            $context["row"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 26, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 26), [], "array", false, false, false, 26);
            // line 27
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 27, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 27, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 27, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
                // line 28
                yield "\t\t\t\t\t\t\t\t<td class=\"hours\">";
                (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 28, $this->source); })()), $context["cnt"], [], "array", false, false, false, 28) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 28, $this->source); })()), $context["cnt"], [], "array", false, false, false, 28)), "html", null, true)) : (yield "-"));
                yield "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "\t\t\t\t\t\t\t<td class=\"hours\">";
            (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 30, $this->source); })()), 13, [], "array", false, false, false, 30) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 30, $this->source); })()), 13, [], "array", false, false, false, 30)), "html", null, true)) : (yield "0.0"));
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
        // line 33
        yield "\t\t\t\t\t<tr class=\"totals\">
\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 35, $this->source); })()), (((isset($context["offsetMonth"]) || array_key_exists("offsetMonth", $context) ? $context["offsetMonth"] : (function () { throw new RuntimeError('Variable "offsetMonth" does not exist.', 35, $this->source); })()) + (isset($context["numberOfMonths"]) || array_key_exists("numberOfMonths", $context) ? $context["numberOfMonths"] : (function () { throw new RuntimeError('Variable "numberOfMonths" does not exist.', 35, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 36
            yield "\t\t\t\t\t\t\t<td class=\"hours\">";
            (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 36, $this->source); })()), $context["cnt"], [], "array", false, false, false, 36) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 36, $this->source); })()), $context["cnt"], [], "array", false, false, false, 36)), "html", null, true)) : (yield "-"));
            yield "</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "\t\t\t\t\t\t<td class=\"hours\">";
        (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 38, $this->source); })()), 13, [], "array", false, false, false, 38) != 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 38, $this->source); })()), 13, [], "array", false, false, false, 38)), "html", null, true)) : (yield ""));
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
        return "reportHoursByType.html.twig";
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
        return array (  191 => 38,  182 => 36,  178 => 35,  174 => 33,  156 => 30,  147 => 28,  142 => 27,  140 => 26,  136 => 25,  133 => 24,  116 => 23,  110 => 19,  101 => 17,  97 => 16,  86 => 8,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"main report\">
\t\t<div class=\"title\">Hours by Type -
\t\t\t{{ timeLabel }}</div>
\t\t<p>
\t\t\t(as of
\t\t\t{{ \"now\"|date(\"m/d/Y\") }}
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th data-column-id=\"activityType\">Activity Type</th>
\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t<th>{{ months[cnt-1] }}</th>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<th data-column-id=\"total\">Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for title in titles %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ title }}</td>
\t\t\t\t\t\t\t{% set row = rows[loop.index0] %}
\t\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t\t<td class=\"hours\">{{ row[cnt] != 0 ? '%.2f'|format(row[cnt]) : '-' }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<td class=\"hours\">{{ row[13] != 0 ? '%.2f'|format(row[13]) : '0.0' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr class=\"totals\">
\t\t\t\t\t\t<td>Total</td>
\t\t\t\t\t\t{% for cnt in offsetMonth..(offsetMonth + numberOfMonths - 1) %}
\t\t\t\t\t\t\t<td class=\"hours\">{{ totals[cnt] != 0 ? '%.2f'|format(totals[cnt]) : '-' }}</td>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<td class=\"hours\">{{ totals[13] != 0 ? '%.2f'|format(totals[13]) : '' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}
", "reportHoursByType.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/reportHoursByType.html.twig");
    }
}
