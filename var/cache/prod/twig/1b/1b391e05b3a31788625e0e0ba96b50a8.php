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

/* volunteerCalendar.html.twig */
class __TwigTemplate_13886e6b3a10652ee7c460f8cefb5a83 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "volunteerCalendar.html.twig", 1);
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
        yield "<script>
\tfunction moveMonth(month, year, direction){
\t\tmonth += direction;
\t\tif(month <=0){
\t\t\tyear--;
\t\t\tmonth=12;
\t\t} else if(month > 12){
\t\t\tyear++;
\t\t\tmonth = 1;
\t\t}
\t\tdocument.getElementById(\"newMonth\").value = month;
\t\tdocument.getElementById(\"newYear\").value = year;
\t\tdocument.getElementById(\"newDateForm\").submit();
\t}
\tfunction edit(actionStr, year, month, day){
\t\tvar action = JSON.parse(atob(actionStr));
\t\tvar day = (\"0\" + day).slice(-2);
\t\tvar month = (\"0\" + month).slice(-2);
\t\tvar thisDay = year+\"-\"+month+\"-\"+day ;
\t\tdocument.getElementById(\"actionIdChoice\").value = action.id;
\t\tif(action.actionDefinition > 0) 
\t\t\tdocument.getElementById(\"actionTypeChoice\").disabled = true;
\t\telse
\t\t\tdocument.getElementById(\"actionTypeChoice\").disabled = false;
\t\tdocument.getElementById(\"actionTypeChoice\").value = action.actionDefinition;
\t\tchangeAction(document.getElementById(\"actionTypeChoice\"));
\t\tvar data = \"\";
\t\tfor(var p of action.persons){
\t\t\tif(p.id > 0){
\t\t\t\tvar name = p.lastName + \", \" + p.firstName;
\t\t\t\tname = name.replace(\"'\",\"&quot;\");
\t\t\t\tdata += \"<label class='long' >SignedUp</label><input type='hidden' id='joinId[]' name='joinId[]' value='\"+p.id+\"'><input name='joinName[]' type='text' readonly value='\"+name+\"'>\";
\t\t\t\tdata += \"<button type='button' class='btn btn-info btn-xs' onclick='deletePerson(\"+p.id+\")'>&#10006;</button> <--Hit button to remove<br>\";
\t\t\t}
\t\t}
\t\tdocument.getElementById(\"signedup\").innerHTML = data;
\t\tdocument.getElementById(\"dateChoice\").value = thisDay;
\t\tdocument.getElementById(\"noteChoice\").value = action.note;
\t\tmodalPopup();
\t}
\tfunction deletePerson(pid){
\t\tvar ids = document.getElementsByName(\"joinId[]\");
\t\tvar names = document.getElementsByName(\"joinName[]\");
\t\tvar len = ids.length;
\t\tvar data = \"\";
\t\tfor(var i=0; i<len; i++){
\t\t\tif(pid != ids[i].value){
\t\t\t\tvar name = ids[i].value;
\t\t\t\tname = name.replace(\"'\",\"&quot;\");
\t\t\t\tdata += \"<label class='long' >SignedUp</label><input type='hidden' id='joinId[]' name='joinId[]' value='\"+name+\"'><input name='joinName[]' type='text' readonly value='\"+names[i].value+\"'>\";
\t\t\t\tdata += \"<button type='button' class='btn btn-info btn-xs' onclick='deletePerson(\"+ids[i].value+\")'>&#10006;</button> <--Hit button to remove<<br>\";
\t\t\t}
\t\t}
\t\tdocument.getElementById(\"signedup\").innerHTML = data;
\t}
\tfunction changeAction(act){
\t\tvar sel=document.getElementById(\"volChoice\");
\t\t
\t\tdocument.getElementById(\"actionTypeChoice\").value = act.value;
\t\tvar len = sel.options.length;
\t\tfor(var i=0; i<len; i++){
\t\t\tsel.options[i].disabled = false;
\t\t\tif(act.value == 1 && sel.options[i].getAttribute(\"class\") != 'cop')
\t\t\t\tsel.options[i].disabled = true;
\t\t}
\t\t
\t}
\tfunction addPerson(){
\t\tvar e = document.getElementById(\"volChoice\");    
\t\tvar id = e.options[e.selectedIndex].value; 
\t\t// return on no name in select
\t\tif(id == 0) return;
\t\t// check for duplicate
\t\tvar ids = document.getElementsByName(\"joinId[]\");
\t\tvar len = ids.length;
\t\tfor(var i=0; i<len; i++){
\t\t\tif(id == ids[i].value) return;
\t\t}
\t\tvar name = e.options[e.selectedIndex].text;
\t\tname = name.replace(\"'\",\"&quot;\");
\t\tvar data = document.getElementById(\"signedup\").innerHTML;
\t\tdata += \"<label class='long'>SignedUp</label><input type='hidden' id='joinId[]' name='joinId[]' value=\"+id+\"><input name='joinName[]' type='text' readonly value='\"+name+\"'>\";
\t\tdata += \"<button type='button' class='btn btn-info btn-xs' onclick='deletePerson(\"+id+\")'>&#10006;</button> <--Hit button to remove<br>\";
\t\tdocument.getElementById(\"signedup\").innerHTML = data;
\t}
</script>

<div class=\"main\">
<form id=\"newDateForm\" action=\"/action/edit\" method=\"post\">
  <input type=\"hidden\" id=\"newMonth\" name=\"newMonth\" />
  <input type=\"hidden\" id=\"newYear\" name=\"newYear\" />
</form>
<h3 style=\"color:black;background-color:LightCoral;\">
\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 97
            yield "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 98
                yield "\t\t\t<div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
\t\t\t\t";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "</h3>
<div class=\"title\">Volunteer Signups</div>
<a class=\"instruction\" href=\"/pages/signupInstructions.html\">Instructions</a>
<div style=\"clear: both;\"></div>
";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "copAdmin", [], "any", false, false, false, 107) == true)) {
            // line 108
            yield "   <a href=\"/action/definition/edit\" target=\"workframe\">Manage Signup Events</a>
";
        }
        // line 110
        yield "<div class='calendar-month'>
\t<a href=\"javascript:moveMonth(";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["month"] ?? null), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year"] ?? null), "html", null, true);
        yield ", -1)\">&#10094;</a>
\t&nbsp;&nbsp;&nbsp;";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["months"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($context["month"] ?? null) - 1)] ?? null) : null), "html", null, true);
        yield "&nbsp;&nbsp;&nbsp;
\t<a href=\"javascript:moveMonth(";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["month"] ?? null), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year"] ?? null), "html", null, true);
        yield ", +1)\">&#10095;</a>&nbsp;&nbsp;&nbsp;";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year"] ?? null), "html", null, true);
        yield "</div>
<table class=\"calendar\">\t
\t<thead>
\t\t<tr>
\t\t\t";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["days"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 118
            yield "\t\t\t\t<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "\t\t</tr>
\t</thead>
\t<tr>
\t\t";
        // line 167
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["cnt"]) {
            // line 168
            yield "\t\t\t";
            $context["i"] = (($context["cnt"] - ($context["dow"] ?? null)) + 2);
            // line 169
            yield "\t\t\t
\t\t\t";
            // line 170
            if ((($context["i"] ?? null) <= 0)) {
                // line 171
                yield "\t\t\t\t<td></td>
\t\t\t";
            }
            // line 173
            yield "\t\t\t
\t\t\t";
            // line 174
            if (((($context["i"] ?? null) > 0) && (($context["i"] ?? null) <= ($context["dim"] ?? null)))) {
                // line 175
                yield "\t\t\t\t<td>
\t\t\t\t\t<h4>";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                yield "</h4>
\t\t\t\t\t";
                // line 177
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "status", [], "any", false, false, false, 177) == "M") || (CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "status", [], "any", false, false, false, 177) == "A"))) {
                    // line 178
                    yield "\t\t\t\t\t\t<a href=\"#\" onclick=\"edit('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["emptyAction"] ?? null), "json", [], "any", false, false, false, 178), "js"), "html", null, true);
                    yield "', ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year"] ?? null), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["month"] ?? null), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                    yield ");\">
\t\t\t\t\t\t\t&#9998;
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 182
                yield "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 183
                    yield "\t\t\t\t\t\t";
                    if ((($context["action"] != null) && (($context["i"] ?? null) == $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "day", [], "any", false, false, false, 183), "d")))) {
                        // line 184
                        yield "\t\t\t\t\t\t\t<div class=\"ttbt\">
\t\t\t\t\t\t\t\t";
                        // line 185
                        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "status", [], "any", false, false, false, 185) == "M") || (CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "status", [], "any", false, false, false, 185) == "A"))) {
                            // line 186
                            yield "\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" href=\"#addEditAction\" onclick=\"edit('";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "json", [], "any", false, false, false, 186), "js"), "html", null, true);
                            yield "', ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "day", [], "any", false, false, false, 186), "Y"), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "day", [], "any", false, false, false, 186), "m"), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "day", [], "any", false, false, false, 186), "d"), "html", null, true);
                            yield ");\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 187
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionName", [], "any", false, false, false, 187), "html", null, true);
                            yield " (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "personSize", [], "any", false, false, false, 187), "html", null, true);
                            yield ")
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<span class=\"tttt\">";
                            // line 189
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionName", [], "any", false, false, false, 189), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t";
                            // line 190
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "persons", [], "any", false, false, false, 190));
                            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                                // line 191
                                yield "\t\t\t\t\t\t\t\t\t\t\t<br>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "lastName", [], "any", false, false, false, 191), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "firstName", [], "any", false, false, false, 191), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 193
                            yield "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 195
                            yield "\t\t\t\t\t\t\t\t\t";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionName", [], "any", false, false, false, 195), "html", null, true);
                            yield " (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "personSize", [], "any", false, false, false, 195), "html", null, true);
                            yield ")
\t\t\t\t\t\t\t\t\t<span class=\"tttt\">";
                            // line 196
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "actionName", [], "any", false, false, false, 196), "html", null, true);
                            yield "
\t\t\t\t\t\t\t\t\t\t";
                            // line 197
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "persons", [], "any", false, false, false, 197));
                            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                                // line 198
                                yield "\t\t\t\t\t\t\t\t\t\t\t<br>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "lastName", [], "any", false, false, false, 198), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "firstName", [], "any", false, false, false, 198), "html", null, true);
                                yield "
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 200
                            yield "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 202
                        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 204
                    yield "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                yield "\t\t\t\t</td>
\t\t\t";
            }
            // line 207
            yield "\t\t
\t\t\t";
            // line 208
            if ((((($context["i"] ?? null) + ($context["dow"] ?? null)) % 7) == 1)) {
                // line 209
                yield "\t\t\t\t</tr><tr>
\t\t\t";
            }
            // line 211
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cnt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "\t

\t</tr>

</table>
<br><br><br><br>
</div>
</div>

<!-- Edit/Add model pages -->
\t<div id=\"modalPopup\" class=\"modal\">
\t\t<form id=\"modalForm\" class=\"modal-content animate\" action=\"/action/edit\" method=\"post\">
\t\t\t<div class=\"container\">
\t\t\t\t<input type=\"hidden\" id=\"submitChoice\" name='submitChoice' />
\t\t\t\t<input type=\"hidden\" id=\"actionIdChoice\" name='actionIdChoice' />
\t\t\t\t<span class=\"psw\"></span><label for=\"actionTypeChoice\">Action</label>
\t\t\t\t<select id=\"actionTypeChoice\" name=\"actionTypeChoice\" onchange=\"changeAction(this)\">
\t\t\t\t\t<option value=\"0\">Select an Action</option>
\t\t\t\t\t";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actionDefinitions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actionDef"]) {
            // line 231
            yield "\t\t\t\t\t";
            // line 232
            yield "\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "id", [], "any", false, false, false, 232), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actionDef"], "name", [], "any", false, false, false, 232), "html", null, true);
            yield "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actionDef'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "\t\t\t\t\t";
        // line 235
        yield "\t\t\t\t</select></span>
\t\t\t\t<div id=\"signedup\" >
\t\t\t\t\t\toldstuff
\t\t\t\t</div>

\t\t\t\t<br><span class=\"psw\"></span><label for=\"volChoice\">Sign Up:</label>
\t\t\t\t<select id=\"volChoice\" name=\"volChoice\">
\t\t\t\t\t<option value=\"0\">Select a Member</option>
\t\t\t\t\t";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["people"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 244
            yield "\t\t\t\t\t";
            // line 245
            yield "\t\t\t\t\t\t";
            $context["cop"] = "";
            // line 246
            yield "\t\t\t\t\t\t";
            // line 247
            yield "\t\t\t\t\t\t";
            // line 250
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "hasFeature", ["COP"], "method", false, false, false, 250) == true)) {
                // line 251
                yield "\t\t\t\t\t\t\t";
                $context["cop"] = "cop";
                // line 252
                yield "\t\t\t\t\t\t";
            }
            // line 253
            yield "\t\t\t\t  \t    <option class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cop"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 253), "html", null, true);
            yield "\" >";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 253) . ", ") . CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 253)), "html", null, true);
            yield "</option>
\t\t\t\t\t";
            // line 255
            yield "\t\t\t\t  \t";
            // line 256
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        yield "\t\t\t\t</select>
\t\t\t\t<button type='button' onclick='addPerson()'>&#10133;</button> <-- Hit Button to Add<br>\";
\t\t\t\t</span>
\t\t\t\t<br><span class=\"psw\"><label for=\"dateChoice\">Date:</label> 
\t\t\t\t<input type=\"date\" id=\"dateChoice\" name=\"dateChoice\" required readonly></span>
\t\t\t\t<br><span class=\"psw\"><label  for=\"noteChoice\">Note/Time:</label> 
\t\t\t\t<input type=\"text\" id=\"noteChoice\" name=\"noteChoice\" required ></span>
\t\t\t</div>
\t\t\t<div class=\"container\" style=\"background-color: #f1f1f1\">
\t\t\t\t<button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
\t\t\t\t<button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
\t\t\t\t<button type=\"button\" class=\"cancelbtn\"
\t\t\t\t\tonclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
\t\t\t</div>

\t\t</form>
\t</div>
\t\t\t
<script>
//edit('\${actions[0].json}', \${actions[0].day.year+1900}, \${actions[0].day.month+1}, '\${actions[0].day.date}');

</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "volunteerCalendar.html.twig";
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
        return array (  482 => 257,  476 => 256,  474 => 255,  465 => 253,  462 => 252,  459 => 251,  456 => 250,  454 => 247,  452 => 246,  449 => 245,  447 => 244,  443 => 243,  433 => 235,  431 => 234,  420 => 232,  418 => 231,  414 => 230,  394 => 212,  388 => 211,  384 => 209,  382 => 208,  379 => 207,  375 => 205,  369 => 204,  365 => 202,  361 => 200,  350 => 198,  346 => 197,  342 => 196,  335 => 195,  331 => 193,  320 => 191,  316 => 190,  312 => 189,  305 => 187,  294 => 186,  292 => 185,  289 => 184,  286 => 183,  281 => 182,  267 => 178,  265 => 177,  261 => 176,  258 => 175,  256 => 174,  253 => 173,  249 => 171,  247 => 170,  244 => 169,  241 => 168,  236 => 167,  231 => 120,  222 => 118,  218 => 117,  207 => 113,  203 => 112,  197 => 111,  194 => 110,  190 => 108,  188 => 107,  182 => 103,  176 => 102,  167 => 99,  162 => 98,  157 => 97,  153 => 96,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "volunteerCalendar.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/volunteerCalendar.html.twig");
    }
}
