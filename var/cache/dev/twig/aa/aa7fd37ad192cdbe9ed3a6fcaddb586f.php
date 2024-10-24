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

/* actionDefinitionEdit.html.twig */
class __TwigTemplate_fd046012dac64c35e17b79bf05218b30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actionDefinitionEdit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actionDefinitionEdit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actionDefinitionEdit.html.twig", 1);
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
    function editAd(eventStr) {
        var actionDef = JSON.parse(atob(eventStr));
        document.getElementById(\"adIdChoice\").value = actionDef.id;
        document.getElementById(\"nameChoice\").value = actionDef.name;
        document.getElementById(\"descriptionChoice\").value = actionDef.description;
        document.getElementById(\"restrictChoice\").value = actionDef.restrictionType;
        document.getElementById(\"restrictDowChoice\").value = actionDef.restrictionValue;
        document.getElementById(\"restrictDateChoice\").value = actionDef.restrictionDate;

        showGroup(actionDef.restrictionType);
        modalPopup();
    }

    function showGroup(opt) {
        var i;
        var elements = document.getElementsByClassName(\"restrict\");
        for (i = 0; i < elements.length; i++) {
            elements[i].style.display = \"none\";
        }
        elements = document.getElementsByClassName(\"restrict-\" + opt);
        for (i = 0; i < elements.length; i++) {
            elements[i].style.display = \"\";
        }
    }
</script>

<div class=\"main\">
    <h3 style=\"color: black; background-color: LightCoral;\">
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 33
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                yield "\t\t\t\t<div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
\t\t\t\t\t";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </h3>
    <div class=\"title\">Define Signup Events</div>
    <br>
    <a href=\"javascript:editAd('";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emptyAd"]) || array_key_exists("emptyAd", $context) ? $context["emptyAd"] : (function () { throw new RuntimeError('Variable "emptyAd" does not exist.', 42, $this->source); })()), "json", [], "any", false, false, false, 42), "html", null, true);
        yield "');\">Add New Entry</a><br>
    <table class=\"tablestriped\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Restriction</th>
                <th>Restriction Value</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actionDefinitions"]) || array_key_exists("actionDefinitions", $context) ? $context["actionDefinitions"] : (function () { throw new RuntimeError('Variable "actionDefinitions" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actionDef"]) {
            // line 55
            yield "                <tr>
                    <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                    <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "description", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "restrictionType", [], "any", false, false, false, 59) == 0)) {
                // line 60
                yield "                            None
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["actionDef"], "restrictionType", [], "any", false, false, false, 61) == 1)) {
                // line 62
                yield "                            Day Of Week
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["actionDef"], "restrictionType", [], "any", false, false, false, 63) == 2)) {
                // line 64
                yield "                            Specific Date
                        ";
            }
            // line 66
            yield "                    </td>
                    <td>
                        ";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "restrictionType", [], "any", false, false, false, 68) == 1)) {
                // line 69
                yield "\t\t\t\t\t\t\t";
                $context["daysOfWeek"] = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
                // line 70
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["daysOfWeek"]) || array_key_exists("daysOfWeek", $context) ? $context["daysOfWeek"] : (function () { throw new RuntimeError('Variable "daysOfWeek" does not exist.', 70, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "restrictionValue", [], "any", false, false, false, 70) - 1), [], "array", false, false, false, 70), "html", null, true);
                yield "
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 71
$context["actionDef"], "restrictionType", [], "any", false, false, false, 71) == 2)) {
                // line 72
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "restrictionDate", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true);
                yield "
                        ";
            }
            // line 74
            yield "                    </td>
                    <td><a href=\"javascript:editAd('";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "json", [], "any", false, false, false, 75), "html", null, true);
            yield "');\">Edit</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actionDef'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "        </tbody>
    </table>
</div>

<div id=\"modalPopup\" class=\"modal\">
    <form id=\"modalForm\" class=\"modal-content animate\" action=\"/action/definition/edit\" method=\"post\">
        <div class=\"container\">
            <input type=\"hidden\" id=\"submitChoice\" name=\"submitChoice\" />
            <input type=\"hidden\" id=\"adIdChoice\" name=\"adIdChoice\" />
            <input type=\"hidden\" id=\"adActionChoice\" name=\"adActionChoice\" />
            <span class=\"psw\">
                <label for=\"nameChoice\">Name:</label>
                <input type=\"text\" id=\"nameChoice\" name=\"nameChoice\" required />
            </span>
            <br />
            <span class=\"psw\">
                <label for=\"descriptionChoice\">Description:</label>
                <input type=\"text\" id=\"descriptionChoice\" name=\"descriptionChoice\" />
            </span>
            <br />
            <span class=\"psw\">
                <label for=\"restrictChoice\">Date Restriction:</label>
                <select id=\"restrictChoice\" name=\"restrictChoice\" onChange=\"showGroup(this.value)\">
                    <option value=\"0\">None</option>
                    <option value=\"1\">Day Of Week</option>
                    <option value=\"2\">Date</option>
                </select>
            </span>
            <br />
            <div class=\"form-group restrict restrict-0\"></div>
            <div class=\"form-group restrict restrict-1\">
                <label for=\"restrictDowChoice\"> Restriction:</label>
                <select id=\"restrictDowChoice\" name=\"restrictDowChoice\">
                    <option value=\"7\">Sunday</option>
                    <option value=\"1\">Monday</option>
                    <option value=\"2\">Tuesday</option>
                    <option value=\"3\">Wednesday</option>
                    <option value=\"4\">Thursday</option>
                    <option value=\"5\">Friday</option>
                    <option value=\"6\">Saturday</option>
                </select>
            </div>
            <div class=\"form-group restrict restrict-2\">
                <label for=\"restrictDateChoice\"> Restriction:</label>
                <input type=\"date\" id=\"restrictDateChoice\" name=\"restrictDateChoice\" />
            </div>
        </div>
        <div class=\"container\" style=\"background-color: #f1f1f1\">
            <button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
            <button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
            <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
        </div>
    </form>
</div>\t
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
        return "actionDefinitionEdit.html.twig";
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
        return array (  222 => 78,  213 => 75,  210 => 74,  204 => 72,  202 => 71,  197 => 70,  194 => 69,  192 => 68,  188 => 66,  184 => 64,  182 => 63,  179 => 62,  177 => 61,  174 => 60,  172 => 59,  167 => 57,  163 => 56,  160 => 55,  156 => 54,  141 => 42,  136 => 39,  130 => 38,  121 => 35,  116 => 34,  111 => 33,  107 => 32,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<script type=\"text/javascript\">
    function editAd(eventStr) {
        var actionDef = JSON.parse(atob(eventStr));
        document.getElementById(\"adIdChoice\").value = actionDef.id;
        document.getElementById(\"nameChoice\").value = actionDef.name;
        document.getElementById(\"descriptionChoice\").value = actionDef.description;
        document.getElementById(\"restrictChoice\").value = actionDef.restrictionType;
        document.getElementById(\"restrictDowChoice\").value = actionDef.restrictionValue;
        document.getElementById(\"restrictDateChoice\").value = actionDef.restrictionDate;

        showGroup(actionDef.restrictionType);
        modalPopup();
    }

    function showGroup(opt) {
        var i;
        var elements = document.getElementsByClassName(\"restrict\");
        for (i = 0; i < elements.length; i++) {
            elements[i].style.display = \"none\";
        }
        elements = document.getElementsByClassName(\"restrict-\" + opt);
        for (i = 0; i < elements.length; i++) {
            elements[i].style.display = \"\";
        }
    }
</script>

<div class=\"main\">
    <h3 style=\"color: black; background-color: LightCoral;\">
\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"flash-{{ label }}\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
    </h3>
    <div class=\"title\">Define Signup Events</div>
    <br>
    <a href=\"javascript:editAd('{{ emptyAd.json}}');\">Add New Entry</a><br>
    <table class=\"tablestriped\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Restriction</th>
                <th>Restriction Value</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for actionDef in actionDefinitions %}
                <tr>
                    <td>{{ actionDef.name }}</td>
                    <td>{{ actionDef.description }}</td>
                    <td>
                        {% if actionDef.restrictionType == 0 %}
                            None
                        {% elseif actionDef.restrictionType == 1 %}
                            Day Of Week
                        {% elseif actionDef.restrictionType == 2 %}
                            Specific Date
                        {% endif %}
                    </td>
                    <td>
                        {% if actionDef.restrictionType == 1 %}
\t\t\t\t\t\t\t{% set daysOfWeek = [\"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\", \"Sunday\"] %}
\t\t\t\t\t\t\t{{ daysOfWeek[actionDef.restrictionValue-1] }}
                        {% elseif actionDef.restrictionType == 2 %}
                            {{ actionDef.restrictionDate|date('Y-m-d') }}
                        {% endif %}
                    </td>
                    <td><a href=\"javascript:editAd('{{ actionDef.json }}');\">Edit</a></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<div id=\"modalPopup\" class=\"modal\">
    <form id=\"modalForm\" class=\"modal-content animate\" action=\"/action/definition/edit\" method=\"post\">
        <div class=\"container\">
            <input type=\"hidden\" id=\"submitChoice\" name=\"submitChoice\" />
            <input type=\"hidden\" id=\"adIdChoice\" name=\"adIdChoice\" />
            <input type=\"hidden\" id=\"adActionChoice\" name=\"adActionChoice\" />
            <span class=\"psw\">
                <label for=\"nameChoice\">Name:</label>
                <input type=\"text\" id=\"nameChoice\" name=\"nameChoice\" required />
            </span>
            <br />
            <span class=\"psw\">
                <label for=\"descriptionChoice\">Description:</label>
                <input type=\"text\" id=\"descriptionChoice\" name=\"descriptionChoice\" />
            </span>
            <br />
            <span class=\"psw\">
                <label for=\"restrictChoice\">Date Restriction:</label>
                <select id=\"restrictChoice\" name=\"restrictChoice\" onChange=\"showGroup(this.value)\">
                    <option value=\"0\">None</option>
                    <option value=\"1\">Day Of Week</option>
                    <option value=\"2\">Date</option>
                </select>
            </span>
            <br />
            <div class=\"form-group restrict restrict-0\"></div>
            <div class=\"form-group restrict restrict-1\">
                <label for=\"restrictDowChoice\"> Restriction:</label>
                <select id=\"restrictDowChoice\" name=\"restrictDowChoice\">
                    <option value=\"7\">Sunday</option>
                    <option value=\"1\">Monday</option>
                    <option value=\"2\">Tuesday</option>
                    <option value=\"3\">Wednesday</option>
                    <option value=\"4\">Thursday</option>
                    <option value=\"5\">Friday</option>
                    <option value=\"6\">Saturday</option>
                </select>
            </div>
            <div class=\"form-group restrict restrict-2\">
                <label for=\"restrictDateChoice\"> Restriction:</label>
                <input type=\"date\" id=\"restrictDateChoice\" name=\"restrictDateChoice\" />
            </div>
        </div>
        <div class=\"container\" style=\"background-color: #f1f1f1\">
            <button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
            <button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
            <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
        </div>
    </form>
</div>\t
{% endblock %}
", "actionDefinitionEdit.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/actionDefinitionEdit.html.twig");
    }
}
