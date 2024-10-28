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

/* reportSelector.html.twig */
class __TwigTemplate_2aa63789bf1a1e5f88cd0b26e132aba7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportSelector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reportSelector.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reportSelector.html.twig", 1);
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
        yield "<script>
function generate(type, year, period){
\tdocument.getElementById(\"submitForm\").action = \"/report/show\";
\tdocument.getElementById(\"year\").value = year;
\tdocument.getElementById(\"period\").value = period;
\tdocument.getElementById(\"reportType\").value = type;
\tdocument.getElementById(\"submitForm\").submit();
}
</script>
<div class=\"main\">
    ";
        // line 13
        if ( !(null === (isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context) ? $context["loggedInUser"] : (function () { throw new RuntimeError('Variable "loggedInUser" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "        ";
            $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
            // line 15
            yield "
        <form id=\"submitForm\" method=\"post\">
            <input type=\"hidden\" id=\"year\" name=\"year\">
            <input type=\"hidden\" id=\"period\" name=\"period\">
            <input type=\"hidden\" id=\"reportType\" name=\"reportType\">
        </form>

        <h2>Select Report to Generate</h2>
        <div>
            <table>
                <tr>
                    <td><h3>Hours by Type</h3></td>
                    <td>
                        <label for=\"hbtYearChoice\">Year</label>
                        <select id=\"hbtYearChoice\">
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(2017, (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 30, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
                // line 31
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "\" ";
                yield ((($context["year"] == (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 31, $this->source); })()))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                        </select>
                        <br>
                        <label for=\"hbtPeriodChoice\">Period</label>
                        <select id=\"hbtPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('HoursByType', document.getElementById('hbtYearChoice').value, document.getElementById('hbtPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Person Hours by Type</h3></td>
                    <td>
                        <label for=\"phbtYearChoice\">Year</label>
                        <select id=\"phbtYearChoice\">
                            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(2017, (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 68, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
                // line 69
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "\" ";
                yield ((($context["year"] == (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 69, $this->source); })()))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                        </select>
                        <br>
                        <label for=\"phbtPeriodChoice\">Period</label>
                        <select id=\"phbtPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('PersonHoursByType', document.getElementById('phbtYearChoice').value, document.getElementById('phbtPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Monthly Sign-up Sheet</h3></td>
                    <td></td>
                    <td>
                        <a href=\"javascript:generate('MonthlySignUp', '', '')\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Volunteer Report</h3></td>
                    <td>
                        <label for=\"copYearChoice\">Year</label>
                        <select id=\"copYearChoice\">
                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(2017, (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 116, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
                // line 117
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "\" ";
                yield ((($context["year"] == (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 117, $this->source); })()))) ? ("selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "                        </select>
                        <br>
                        <label for=\"copPeriodChoice\">Period</label>
                        <select id=\"copPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('Volunteer', document.getElementById('copYearChoice').value, document.getElementById('copPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context) ? $context["loggedInUser"] : (function () { throw new RuntimeError('Variable "loggedInUser" does not exist.', 146, $this->source); })()), "userAdmin", [], "any", false, false, false, 146)) {
                // line 147
                yield "                    <tr>
                        <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                    </tr>
                    <tr>
                        <td><h3>Membership Report</h3></td>
                        <td></td>
                        <td>
                            <a href=\"javascript:generate('Membership', '', '')\"><h3><i>Generate</i></h3></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                    </tr>
                ";
            }
            // line 161
            yield "            </table>
        </div>
    ";
        }
        // line 164
        yield "</div>
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
        return "reportSelector.html.twig";
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
        return array (  297 => 164,  292 => 161,  276 => 147,  274 => 146,  245 => 119,  232 => 117,  228 => 116,  181 => 71,  168 => 69,  164 => 68,  127 => 33,  114 => 31,  110 => 30,  93 => 15,  90 => 14,  88 => 13,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<script>
function generate(type, year, period){
\tdocument.getElementById(\"submitForm\").action = \"/report/show\";
\tdocument.getElementById(\"year\").value = year;
\tdocument.getElementById(\"period\").value = period;
\tdocument.getElementById(\"reportType\").value = type;
\tdocument.getElementById(\"submitForm\").submit();
}
</script>
<div class=\"main\">
    {% if loggedInUser is not null %}
        {% set currentYear = \"now\"|date('Y') %}

        <form id=\"submitForm\" method=\"post\">
            <input type=\"hidden\" id=\"year\" name=\"year\">
            <input type=\"hidden\" id=\"period\" name=\"period\">
            <input type=\"hidden\" id=\"reportType\" name=\"reportType\">
        </form>

        <h2>Select Report to Generate</h2>
        <div>
            <table>
                <tr>
                    <td><h3>Hours by Type</h3></td>
                    <td>
                        <label for=\"hbtYearChoice\">Year</label>
                        <select id=\"hbtYearChoice\">
                            {% for year in range(2017, currentYear) %}
                                <option value=\"{{ year }}\" {{ year == currentYear ? 'selected' : '' }}>{{ year }}</option>
                            {% endfor %}
                        </select>
                        <br>
                        <label for=\"hbtPeriodChoice\">Period</label>
                        <select id=\"hbtPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('HoursByType', document.getElementById('hbtYearChoice').value, document.getElementById('hbtPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Person Hours by Type</h3></td>
                    <td>
                        <label for=\"phbtYearChoice\">Year</label>
                        <select id=\"phbtYearChoice\">
                            {% for year in range(2017, currentYear) %}
                                <option value=\"{{ year }}\" {{ year == currentYear ? 'selected' : '' }}>{{ year }}</option>
                            {% endfor %}
                        </select>
                        <br>
                        <label for=\"phbtPeriodChoice\">Period</label>
                        <select id=\"phbtPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('PersonHoursByType', document.getElementById('phbtYearChoice').value, document.getElementById('phbtPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Monthly Sign-up Sheet</h3></td>
                    <td></td>
                    <td>
                        <a href=\"javascript:generate('MonthlySignUp', '', '')\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                </tr>
                <tr>
                    <td><h3>Volunteer Report</h3></td>
                    <td>
                        <label for=\"copYearChoice\">Year</label>
                        <select id=\"copYearChoice\">
                            {% for year in range(2017, currentYear) %}
                                <option value=\"{{ year }}\" {{ year == currentYear ? 'selected' : '' }}>{{ year }}</option>
                            {% endfor %}
                        </select>
                        <br>
                        <label for=\"copPeriodChoice\">Period</label>
                        <select id=\"copPeriodChoice\">
                            <option value=\"y\">Year to Date</option>
                            <option value=\"q1\">1st Quarter</option>
                            <option value=\"q2\">2nd Quarter</option>
                            <option value=\"q3\">3rd Quarter</option>
                            <option value=\"q4\">4th Quarter</option>
                            <option value=\"m1\">January</option>
                            <option value=\"m2\">February</option>
                            <option value=\"m3\">March</option>
                            <option value=\"m4\">April</option>
                            <option value=\"m5\">May</option>
                            <option value=\"m6\">June</option>
                            <option value=\"m7\">July</option>
                            <option value=\"m8\">August</option>
                            <option value=\"m9\">September</option>
                            <option value=\"m10\">October</option>
                            <option value=\"m11\">November</option>
                            <option value=\"m12\">December</option>
                        </select>
                    </td>
                    <td>
                        <a href=\"javascript:generate('Volunteer', document.getElementById('copYearChoice').value, document.getElementById('copPeriodChoice').value)\"><h3><i>Generate</i></h3></a>
                    </td>
                </tr>
                {% if loggedInUser.userAdmin %}
                    <tr>
                        <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                    </tr>
                    <tr>
                        <td><h3>Membership Report</h3></td>
                        <td></td>
                        <td>
                            <a href=\"javascript:generate('Membership', '', '')\"><h3><i>Generate</i></h3></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\"><hr size=\"5\" color=\"black\"></td>
                    </tr>
                {% endif %}
            </table>
        </div>
    {% endif %}
</div>
{% endblock %}
", "reportSelector.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/reportSelector.html.twig");
    }
}
