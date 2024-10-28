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

/* reportVolunteer.html.twig */
class __TwigTemplate_49a613e6ff3e9330143bfa945a12d38c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportVolunteer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportVolunteer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reportVolunteer.html.twig", 1);
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
        yield "\t<script type=\"text/javascript\">
\t\tfunction showGroup() {
\t\t\tvar i;
\t\t\tvar x = document.getElementsByClassName(\"vol\");
\t\t\tfor (i = 0; i < x.length; i++) {
\t\t\t\tx[i].style.display = \"none\";
\t\t\t}
\t\t\tvar show = document.getElementById(\"volType\").value;
\t\t\tx = document.getElementsByClassName(show);
\t\t\tfor (i = 0; i < x.length; i++) {
\t\t\t\tx[i].style.display = \"\";
\t\t\t}
\t\t}
\t</script>

\t<div class=\"main report\">
\t\t<div class=\"title\">Volunteer Events</div>
\t\t<br>
\t\t<br> Volunteer type:
\t\t<select id=\"volType\" onchange=\"showGroup()\">
\t\t\t<option value=\"vol\" selected>All</option>
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actionDefinitions"]) || array_key_exists("actionDefinitions", $context) ? $context["actionDefinitions"] : (function () { throw new RuntimeError('Variable "actionDefinitions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actionDefinition"]) {
            // line 25
            yield "\t\t\t\t<option value=\"vol_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDefinition"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDefinition"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actionDefinition'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "\t\t</select>
\t\t<br>
\t\t<br>
\t\t<p>
\t\t\t(as of
\t\t\t";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "m/d/Y"), "html", null, true);
        yield "
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t<th>Members</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            yield "\t\t\t\t\t\t<tr class=\"vol vol_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionDefinition", [], "any", false, false, false, 47), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "day", [], "any", false, false, false, 48), "m/d/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionName", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "persons", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 52
                yield "\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 52), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 52), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "note", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "\t\t\t\t</tbody>
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
        return "reportVolunteer.html.twig";
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
        return array (  183 => 58,  174 => 55,  171 => 54,  160 => 52,  156 => 51,  151 => 49,  147 => 48,  142 => 47,  138 => 46,  121 => 32,  114 => 27,  103 => 25,  99 => 24,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<script type=\"text/javascript\">
\t\tfunction showGroup() {
\t\t\tvar i;
\t\t\tvar x = document.getElementsByClassName(\"vol\");
\t\t\tfor (i = 0; i < x.length; i++) {
\t\t\t\tx[i].style.display = \"none\";
\t\t\t}
\t\t\tvar show = document.getElementById(\"volType\").value;
\t\t\tx = document.getElementsByClassName(show);
\t\t\tfor (i = 0; i < x.length; i++) {
\t\t\t\tx[i].style.display = \"\";
\t\t\t}
\t\t}
\t</script>

\t<div class=\"main report\">
\t\t<div class=\"title\">Volunteer Events</div>
\t\t<br>
\t\t<br> Volunteer type:
\t\t<select id=\"volType\" onchange=\"showGroup()\">
\t\t\t<option value=\"vol\" selected>All</option>
\t\t\t{% for actionDefinition in actionDefinitions %}
\t\t\t\t<option value=\"vol_{{ actionDefinition.id }}\">{{ actionDefinition.name }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t\t<br>
\t\t<br>
\t\t<p>
\t\t\t(as of
\t\t\t{{ \"now\"|date(\"m/d/Y\") }}
\t\t\t)
\t\t</p>
\t\t<div style=\"overflow-x: auto;\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t<th>Members</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for action in actions %}
\t\t\t\t\t\t<tr class=\"vol vol_{{ action.actionDefinition }}\">
\t\t\t\t\t\t\t<td>{{ action.day|date(\"m/d/Y\") }}</td>
\t\t\t\t\t\t\t<td>{{ action.actionName }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% for person in action.persons %}
\t\t\t\t\t\t\t\t\t{{ person.lastName }}, {{ person.firstName }}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ action.note }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}", "reportVolunteer.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/reportVolunteer.html.twig");
    }
}
