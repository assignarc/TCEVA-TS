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

/* time.html.twig */
class __TwigTemplate_920769001300db01ff663b598730d37a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "time.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "time.html.twig", 1);
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
        yield "\t<script>
\t\tfunction redraw(box) {
        document.getElementById(\"showAllChoice\").value = box.checked;
        document.getElementById(\"activityIdChoice\").value = -1;
        document.getElementById(\"submitChoice\").value = \"\";
        document.getElementById(\"modalForm\").submit();
    }
\t</script>


\t<script type=\"text/javascript\">
\t\t// called by the user selecting the pencil.  Loads the popup with selected values
      function editTimeEntry(actStr) {
          var act = JSON.parse(atob(actStr));
          document.getElementById('activityIdChoice').value = act.id;
          document.getElementById('personChoice').value = act.personId;
          document.getElementById('activityTypeChoice').value = act.activityId;
          document.getElementById('dateChoice').value = act.day;
          document.getElementById('hoursChoice').value = act.hours.toFixed(1);
          document.getElementById('noteChoice').value = act.note;
          modalPopup();
      }

      function showPerson() {
          var i;
          var x = document.getElementsByClassName(\"PerAll\");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
            var cl = x[i].className;
            cl = cl.replace(\"tableEven\", \"\");
            cl = cl.replace(\"tableOdd\", \"\");
            x[i].className = cl;
          }
          var show = document.getElementById(\"perSelector\").value;
          x = document.getElementsByClassName(show);
          for (i = 0; i < x.length; i++) {
            x[i].style.display = \"\";
            var cl = x[i].className;
            if (i % 2 == 0) 
            cl += \" tableEven\";
            else 
            cl += \" tableOdd\";
            x[i].className = cl;
          }
      }
\t</script>
\t<div class=\"main\">
\t\t<h3 style=\"color:black;background-color:LightCoral;\">
\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 52
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                yield "\t\t\t\t\t<div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
\t\t\t\t\t\t";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "\t\t</h3>
\t\t<div>
\t\t\t<div class=\"title\">Time Entry</div>
\t\t\t<a class=\"instruction\" href=\"/pages/timeEntryInstructions.html\">Instructions</a>
\t\t</div>
\t\t<div style=\"clear: both;\"></div>
\t\t";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "timeAdmin", [], "any", false, false, false, 64)) {
            // line 65
            yield "\t\t\t<input type=\"checkbox\" id=\"showAllUsers\" name=\"showAllUsers\" onclick=\"redraw(this)\" ";
            yield ((((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 65, $this->source); })()) == "checked")) ? ("checked") : (""));
            yield ">
\t\t\t<label for=\"showAllUsers\">Show All Users</label>
\t\t\t<br>
\t\t";
        }
        // line 69
        yield "\t\t<a href=\"javascript:editTimeEntry('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emptyActivity"]) || array_key_exists("emptyActivity", $context) ? $context["emptyActivity"] : (function () { throw new RuntimeError('Variable "emptyActivity" does not exist.', 69, $this->source); })()), "json", [], "any", false, false, false, 69), "html", null, true);
        yield "')\">Add New Time Entry</a>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t";
        // line 74
        if (((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 74, $this->source); })()) == "checked")) {
            // line 75
            yield "\t\t\t\t\t\t\t<select id=\"perSelector\" onchange=\"showPerson()\">
\t\t\t\t\t\t\t\t<option value=\"PerAll\" selected>All</option>
\t\t\t\t\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 78
                yield "\t\t\t\t\t\t\t\t\t<option value=\"Per";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 78), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 78), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t\t\t";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 79), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t";
        } else {
            // line 83
            yield "\t\t\t\t\t\t\tName
\t\t\t\t\t\t";
        }
        // line 85
        yield "\t\t\t\t\t</th>
\t\t\t\t\t<th width=\"40%\">Activity</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Hours</th>
\t\t\t\t\t<th>Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 92, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 93
            yield "\t\t\t\t<tr class=\"PerAll Per";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "personId", [], "any", false, false, false, 93), "html", null, true);
            yield " table";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93) % 2 == 0)) ? ("Even") : ("Odd"));
            yield "\">
\t\t\t\t\t<td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "personName", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activityName", [], "any", false, false, false, 96), "html", null, true);
            yield "<br>
\t\t\t\t\t\t<p class=\"details\">";
            // line 97
            (((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "note", [], "any", false, false, false, 97) == "")) ? (yield "N/A") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "note", [], "any", false, false, false, 97), "html", null, true)));
            yield "</p>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "day", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td class=\"hours\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "hours", [], "any", false, false, false, 100)), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"javascript:editTimeEntry('";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "json", [], "any", false, false, false, 102), "html", null, true);
            yield "');\">Edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "\t\t</table>
\t</div>
\t<div id=\"modalPopup\" class=\"modal\">
\t\t<form id=\"modalForm\" class=\"modal-content animate\" action=\"/time/edit\" method=\"post\">
\t\t\t<div class=\"container\">
\t\t\t\t<input type=\"hidden\" id=\"submitChoice\" name=\"submitChoice\"/>
\t\t\t\t<input type=\"hidden\" id=\"showAllChoice\" name=\"showAllChoice\"/>
\t\t\t\t<input type=\"hidden\" id=\"activityIdChoice\" name=\"activityIdChoice\">
\t\t\t\t";
        // line 114
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "timeAdmin", [], "any", false, false, false, 114) && ((isset($context["allUsers"]) || array_key_exists("allUsers", $context) ? $context["allUsers"] : (function () { throw new RuntimeError('Variable "allUsers" does not exist.', 114, $this->source); })()) == "checked"))) {
            // line 115
            yield "\t\t\t\t\t<label for=\"personChoice\">Select Person:</label>
\t\t\t\t\t<select class=\"form-control\" id=\"personChoice\" name=\"personChoice\" required>
\t\t\t\t\t\t<option value=\"\">--Select a Person--</option>
\t\t\t\t\t\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 119
                yield "\t\t\t\t\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 119), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 119), "html", null, true);
                yield ",
\t\t\t\t\t\t\t\t";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 120), "html", null, true);
                yield "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "\t\t\t\t\t</select>
\t\t\t\t";
        } else {
            // line 124
            yield "\t\t\t\t\t<label for=\"personChoice\">Select Person:</label>
\t\t\t\t\t<input type=\"hidden\" id=\"personChoice\" name=\"personChoice\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "html", null, true);
            yield "\"/>
\t\t\t\t\t";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "lastName", [], "any", false, false, false, 126), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "firstName", [], "any", false, false, false, 126), "html", null, true);
            yield "
\t\t\t\t";
        }
        // line 128
        yield "\t\t\t\t<br><label for=\"activityTypeChoice\">Select Activity Type:</label>
\t\t\t\t<select id=\"activityTypeChoice\" name=\"activityTypeChoice\" required>
\t\t\t\t\t<option value=\"\">--Select an Activity--</option>
\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activityTypes"]) || array_key_exists("activityTypes", $context) ? $context["activityTypes"] : (function () { throw new RuntimeError('Variable "activityTypes" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activityType"]) {
            // line 132
            yield "\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activityType"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activityType"], "name", [], "any", false, false, false, 132), "html", null, true);
            yield "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activityType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "\t\t\t\t</select>
\t\t\t\t<br><label for=\"dateChoice\">Select Date:</label>
\t\t\t\t<input type=\"date\" id=\"dateChoice\" name=\"dateChoice\" required>
\t\t\t\t<br><label for=\"hoursChoice\">Select Hours:</label>
\t\t\t\t<input type=\"number\" id=\"hoursChoice\" name=\"hoursChoice\" step=\"0.1\" value=\"1.0\" required>
\t\t\t\t<br><label for=\"noteChoice\">Note:</label>
\t\t\t\t<input type=\"text\" id=\"noteChoice\" name=\"noteChoice\" required>
\t\t\t</div>
\t\t\t<div class=\"container\" style=\"background-color: #f1f1f1\">
\t\t\t\t<button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
\t\t\t\t<button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
\t\t\t\t<button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
\t\t\t</div>
\t\t</form>
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
        return "time.html.twig";
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
        return array (  363 => 134,  352 => 132,  348 => 131,  343 => 128,  336 => 126,  332 => 125,  329 => 124,  325 => 122,  317 => 120,  310 => 119,  306 => 118,  301 => 115,  299 => 114,  289 => 106,  271 => 102,  266 => 100,  262 => 99,  257 => 97,  253 => 96,  248 => 94,  241 => 93,  224 => 92,  215 => 85,  211 => 83,  207 => 81,  199 => 79,  192 => 78,  188 => 77,  184 => 75,  182 => 74,  173 => 69,  165 => 65,  163 => 64,  155 => 58,  149 => 57,  140 => 54,  135 => 53,  130 => 52,  126 => 51,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<script>
\t\tfunction redraw(box) {
        document.getElementById(\"showAllChoice\").value = box.checked;
        document.getElementById(\"activityIdChoice\").value = -1;
        document.getElementById(\"submitChoice\").value = \"\";
        document.getElementById(\"modalForm\").submit();
    }
\t</script>


\t<script type=\"text/javascript\">
\t\t// called by the user selecting the pencil.  Loads the popup with selected values
      function editTimeEntry(actStr) {
          var act = JSON.parse(atob(actStr));
          document.getElementById('activityIdChoice').value = act.id;
          document.getElementById('personChoice').value = act.personId;
          document.getElementById('activityTypeChoice').value = act.activityId;
          document.getElementById('dateChoice').value = act.day;
          document.getElementById('hoursChoice').value = act.hours.toFixed(1);
          document.getElementById('noteChoice').value = act.note;
          modalPopup();
      }

      function showPerson() {
          var i;
          var x = document.getElementsByClassName(\"PerAll\");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
            var cl = x[i].className;
            cl = cl.replace(\"tableEven\", \"\");
            cl = cl.replace(\"tableOdd\", \"\");
            x[i].className = cl;
          }
          var show = document.getElementById(\"perSelector\").value;
          x = document.getElementsByClassName(show);
          for (i = 0; i < x.length; i++) {
            x[i].style.display = \"\";
            var cl = x[i].className;
            if (i % 2 == 0) 
            cl += \" tableEven\";
            else 
            cl += \" tableOdd\";
            x[i].className = cl;
          }
      }
\t</script>
\t<div class=\"main\">
\t\t<h3 style=\"color:black;background-color:LightCoral;\">
\t\t\t{% for label, messages in app.flashes %}
\t\t\t\t{% for message in messages %}
\t\t\t\t\t<div class=\"flash-{{ label }}\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t</h3>
\t\t<div>
\t\t\t<div class=\"title\">Time Entry</div>
\t\t\t<a class=\"instruction\" href=\"/pages/timeEntryInstructions.html\">Instructions</a>
\t\t</div>
\t\t<div style=\"clear: both;\"></div>
\t\t{% if user.timeAdmin %}
\t\t\t<input type=\"checkbox\" id=\"showAllUsers\" name=\"showAllUsers\" onclick=\"redraw(this)\" {{ allUsers == 'checked' ? 'checked' : '' }}>
\t\t\t<label for=\"showAllUsers\">Show All Users</label>
\t\t\t<br>
\t\t{% endif %}
\t\t<a href=\"javascript:editTimeEntry('{{ emptyActivity.json}}')\">Add New Time Entry</a>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t{% if allUsers == 'checked' %}
\t\t\t\t\t\t\t<select id=\"perSelector\" onchange=\"showPerson()\">
\t\t\t\t\t\t\t\t<option value=\"PerAll\" selected>All</option>
\t\t\t\t\t\t\t\t{% for person in people %}
\t\t\t\t\t\t\t\t\t<option value=\"Per{{ person.id }}\">{{ person.lastName }},
\t\t\t\t\t\t\t\t\t\t{{ person.firstName }}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tName
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</th>
\t\t\t\t\t<th width=\"40%\">Activity</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Hours</th>
\t\t\t\t\t<th>Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t{% for activity in activities %}
\t\t\t\t<tr class=\"PerAll Per{{ activity.personId }} table{{ loop.index is even ? 'Even' : 'Odd' }}\">
\t\t\t\t\t<td>{{ activity.personName }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ activity.activityName }}<br>
\t\t\t\t\t\t<p class=\"details\">{{ activity.note == '' ? 'N/A' : activity.note }}</p>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ activity.day|date('Y-m-d') }}</td>
\t\t\t\t\t<td class=\"hours\">{{ '%.2f'|format(activity.hours) }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"javascript:editTimeEntry('{{ activity.json }}');\">Edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t</div>
\t<div id=\"modalPopup\" class=\"modal\">
\t\t<form id=\"modalForm\" class=\"modal-content animate\" action=\"/time/edit\" method=\"post\">
\t\t\t<div class=\"container\">
\t\t\t\t<input type=\"hidden\" id=\"submitChoice\" name=\"submitChoice\"/>
\t\t\t\t<input type=\"hidden\" id=\"showAllChoice\" name=\"showAllChoice\"/>
\t\t\t\t<input type=\"hidden\" id=\"activityIdChoice\" name=\"activityIdChoice\">
\t\t\t\t{% if user.timeAdmin and allUsers == 'checked' %}
\t\t\t\t\t<label for=\"personChoice\">Select Person:</label>
\t\t\t\t\t<select class=\"form-control\" id=\"personChoice\" name=\"personChoice\" required>
\t\t\t\t\t\t<option value=\"\">--Select a Person--</option>
\t\t\t\t\t\t{% for person in people %}
\t\t\t\t\t\t\t<option value=\"{{ person.id }}\">{{ person.lastName }},
\t\t\t\t\t\t\t\t{{ person.firstName }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t{% else %}
\t\t\t\t\t<label for=\"personChoice\">Select Person:</label>
\t\t\t\t\t<input type=\"hidden\" id=\"personChoice\" name=\"personChoice\" value=\"{{ user.id }}\"/>
\t\t\t\t\t{{ user.lastName }}, {{ user.firstName }}
\t\t\t\t{% endif %}
\t\t\t\t<br><label for=\"activityTypeChoice\">Select Activity Type:</label>
\t\t\t\t<select id=\"activityTypeChoice\" name=\"activityTypeChoice\" required>
\t\t\t\t\t<option value=\"\">--Select an Activity--</option>
\t\t\t\t\t{% for activityType in activityTypes %}
\t\t\t\t\t\t<option value=\"{{ activityType.id }}\">{{ activityType.name }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t\t<br><label for=\"dateChoice\">Select Date:</label>
\t\t\t\t<input type=\"date\" id=\"dateChoice\" name=\"dateChoice\" required>
\t\t\t\t<br><label for=\"hoursChoice\">Select Hours:</label>
\t\t\t\t<input type=\"number\" id=\"hoursChoice\" name=\"hoursChoice\" step=\"0.1\" value=\"1.0\" required>
\t\t\t\t<br><label for=\"noteChoice\">Note:</label>
\t\t\t\t<input type=\"text\" id=\"noteChoice\" name=\"noteChoice\" required>
\t\t\t</div>
\t\t\t<div class=\"container\" style=\"background-color: #f1f1f1\">
\t\t\t\t<button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
\t\t\t\t<button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
\t\t\t\t<button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
\t\t\t</div>
\t\t</form>
\t</div>
{% endblock %}
", "time.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/time.html.twig");
    }
}
