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

/* admin.html.twig */
class __TwigTemplate_d855690ce568a13e83a5743ff306661f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
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
        yield "    <script type=\"text/javascript\">
    function editPerson(perStr) {
        unsetPersonVars();
        var person = JSON.parse(atob(perStr));
        document.getElementById(\"personIdChoice\").value = person.id;
        document.getElementById(\"personFirstNameChoice\").value = person.firstName;
        document.getElementById(\"personLastNameChoice\").value = person.lastName;
        document.getElementById(\"personAddressLine1Choice\").value = person.addressLine1;
        document.getElementById(\"personAddressLine2Choice\").value = person.addressLine2;
        document.getElementById(\"personCityChoice\").value = person.city;
        document.getElementById(\"personStateChoice\").value = person.state;
        document.getElementById(\"personPostalChoice\").value = person.postal;
        document.getElementById(\"personPhoneChoice\").value = person.phone;
        document.getElementById(\"personCarrierChoice\").value = person.carrier;
        document.getElementById(\"personEmailChoice\").value = person.email;
        document.getElementById(\"emergencyContactChoice\").value = person.emergencyContact;
        document.getElementById(\"emergencyContactPhoneChoice\").value = person.emergencyContactPhone;
        document.getElementById(\"birthMonthChoice\").value = person.birthMonth;
        document.getElementById(\"birthDayChoice\").value = person.birthDay;
        document.getElementById(\"loginChoice\").value = person.login;
        document.getElementById(\"renewYearChoice\").value = person.renewYear;
        document.getElementById(\"adminChoice\").checked = person.userAdmin;
        document.getElementById(\"timeChoice\").checked = person.timeAdmin;
        document.getElementById(\"copChoice\").checked = person.copAdmin;
        document.getElementById(\"eventsChoice\").checked = person.newsAdmin;
        document.getElementById(\"statusChoice\").value = person.status;
        for (var i = 0; i < person.features.length; i++) {
            var pf = person.features[i];
            document.getElementById(\"Feature_\" + pf.featureName + \"_idChoice\").value = pf.id;
            document.getElementById(\"Feature_\" + pf.featureName + \"_Choice\").checked = true;
            document.getElementById(\"Feature_\" + pf.featureName + \"_valueChoice\").value = pf.featureLabel;
            document.getElementById(\"Feature_\" + pf.featureName + \"_dateChoice\").value = pf.featureDate;
        }
        modalPopup();
        showtab(null, \"basic\");
    }
    function unsetPersonVars(){
        document.getElementById(\"personIdChoice\").value = '';
        document.getElementById(\"personFirstNameChoice\").value = '';
        document.getElementById(\"personLastNameChoice\").value = '';
        document.getElementById(\"personAddressLine1Choice\").value = '';
        document.getElementById(\"personAddressLine2Choice\").value = '';
        document.getElementById(\"personCityChoice\").value = '';
        document.getElementById(\"personStateChoice\").value = '';
        document.getElementById(\"personPostalChoice\").value = '';
        document.getElementById(\"personPhoneChoice\").value = '';
        document.getElementById(\"personCarrierChoice\").value = '';
        document.getElementById(\"personEmailChoice\").value ='';
        document.getElementById(\"emergencyContactChoice\").value = '';
        document.getElementById(\"emergencyContactPhoneChoice\").value = '';
        document.getElementById(\"birthMonthChoice\").value = '';
        document.getElementById(\"birthDayChoice\").value = '';
        document.getElementById(\"loginChoice\").value = '';
        document.getElementById(\"renewYearChoice\").value = '';
        document.getElementById(\"adminChoice\").checked = false;
        document.getElementById(\"timeChoice\").checked = false;
        document.getElementById(\"copChoice\").checked = false;
        document.getElementById(\"eventsChoice\").checked = false;
        document.getElementById(\"statusChoice\").value = '';
       
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 64
            yield "        document.getElementById(\"Feature_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "_idChoice\").value ='';
        document.getElementById(\"Feature_";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 65), "html", null, true);
            yield "_Choice\").checked = false;
        document.getElementById(\"Feature_";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield "_valueChoice\").value = '';
        document.getElementById(\"Feature_";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "_dateChoice\").value = '';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    }
    
    function showGroup() {
        var i;
        var x = document.getElementsByClassName(\"MemberGroup\");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
            var cl = x[i].className;
            cl = cl.replace(\"tableEven\", \"\");
            cl = cl.replace(\"tableOdd\", \"\");
            x[i].className = cl;
        }
        var show = document.getElementById(\"memberType\").value;
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
    function showtab(event, show) {
        if (event != null)
            event.preventDefault();
        var x = document.getElementsByClassName(\"tabbed\");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
        }
        var y = document.getElementsByClassName(show);
        for (i = 0; i < y.length; i++) {
            y[i].style.display = \"\";
        }
        return true;
    }
    </script>
    
    <div class=\"main\">
        <h3 style=\"color: black; background-color: LightCoral;\">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 111
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 112
                yield "                <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                    ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "        </h3>
        <div class=\"title\">Member Administration</div>
    
        ";
        // line 120
        if (($context["admin"] ?? null)) {
            // line 121
            yield "            Person Type
            <select id=\"memberType\" onchange=\"showGroup()\">
                <option value=\"grp_M\" selected>Member</option>
                <option value=\"grp_A\">Associate</option>
                <option value=\"grp_G\">Guest</option>
                <option value=\"grp_I\">Inactive</option>
            </select>
            <br>
            <a href=\"javascript:editPerson('";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["emptyPerson"] ?? null), "json", [], "any", false, false, false, 129), "html", null, true);
            yield "');\">Add New Person</a>
            <br/>
        ";
        }
        // line 132
        yield "       
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                  
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["people"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 143
            yield "                <tr class=\"MemberGroup grp_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 143), "html", null, true);
            yield "\">
                    <td>
                        <div class=\"membername\">
                            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "lastName", [], "any", false, false, false, 146), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "firstName", [], "any", false, false, false, 146), "html", null, true);
            yield " 
                        </div>
                        <div class=\"memberaddress\">
                            ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine1", [], "any", false, false, false, 149) . ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine2", [], "any", false, false, false, 149)) ? (("<br>" . CoreExtension::getAttribute($this->env, $this->source, $context["person"], "addressLine2", [], "any", false, false, false, 149))) : (""))), "html", null, true);
            yield "<br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "city", [], "any", false, false, false, 149), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "state", [], "any", false, false, false, 149), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "postal", [], "any", false, false, false, 149), "html", null, true);
            yield "
                        </div>
                    </td>
                    <td>
                        <div class=\"memberphone\">
                            ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "phone", [], "any", false, false, false, 154), "html", null, true);
            yield " ";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["person"], "carrier", [], "any", false, false, false, 154)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("(" . CoreExtension::getAttribute($this->env, $this->source, $context["person"], "carrier", [], "any", false, false, false, 154)) . ")"), "html", null, true)) : (yield ""));
            yield "
                        </div>
                        <div class=\"memberemail\">
                            ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 157), "html", null, true);
            yield "</td>
                        </div>
                    <td>
                        <a href=\"javascript:editPerson('";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "json", [], "any", false, false, false, 160), "html", null, true);
            yield "');\">Edit</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "        </table>
    </div>
    
    <!-- Modal edit panel -->
    <div id=\"modalPopup\" class=\"modal\">
        <form id=\"modalForm\" class=\"modal-content animate\" action=\"/admin/edit\" method=\"post\">
            <div class=\"container\">
                <div>
                    <button class=\"tabbtn\" onclick=\"showtab(event, 'basic');\">Basic</button>
                    <button class=\"tabbtn\" onclick=\"showtab(event, 'extra');\">Extra</button>
                    <button class=\"tabbtn\" onclick=\"showtab(event, 'club');\">Club</button>
                    <div class=\"tabbed basic\">
                        <input type=\"hidden\" id=\"submitChoice\" name=\"submitChoice\"/>
                        <input type=\"hidden\" id=\"personIdChoice\" name=\"personIdChoice\" />
                        <br> <span class=\"psw\"><label for=\"personFirstNameChoice\">First Name:</label> <input type=\"text\" id=\"personFirstNameChoice\" name=\"personFirstNameChoice\" required /></span>
                        <br> <span class=\"psw\"><label for=\"personLastNameChoice\">Last Name:</label> <input type=\"text\" id=\"personLastNameChoice\" name=\"personLastNameChoice\" required /></span>
                        <br> <span class=\"psw\"><label for=\"personAddressLine1Choice\">Address Line 1:</label> <input type=\"text\" id=\"personAddressLine1Choice\" name=\"personAddressLine1Choice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personAddressLine2Choice\">Address Line 2:</label> <input type=\"text\" id=\"personAddressLine2Choice\" name=\"personAddressLine2Choice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personCityChoice\">City:</label> <input type=\"text\" id=\"personCityChoice\" name=\"personCityChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personStateChoice\">State:</label> <input type=\"text\" id=\"personStateChoice\" name=\"personStateChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personPostalChoice\">Postal:</label> <input type=\"text\" id=\"personPostalChoice\" name=\"personPostalChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personPhoneChoice\">Phone:</label> <input type=\"text\" id=\"personPhoneChoice\" name=\"personPhoneChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personCarrierChoice\">Carrier:</label> <input type=\"text\" id=\"personCarrierChoice\" name=\"personCarrierChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"personEmailChoice\">Email:</label> <input type=\"text\" id=\"personEmailChoice\" name=\"personEmailChoice\" /></span>
                    </div>
                    <div class=\"tabbed extra\">
                        <span class=\"psw\"><label for=\"emergencyContactChoice\">Emer. Contact:</label> <input type=\"text\" id=\"emergencyContactChoice\" name=\"emergencyContactChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"emergencyContactPhoneChoice\">Emer. Phone:</label> <input type=\"text\" id=\"emergencyContactPhoneChoice\" name=\"emergencyContactPhoneChoice\" /></span>
                        <br> <span class=\"psw\"><label for=\"birthMonthChoice\">Birth Month:</label> <select id=\"birthMonthChoice\" name=\"birthMonthChoice\">
                            <option value=\"Jan\">January</option>
                            <option value=\"Feb\">February</option>
                            <option value=\"Mar\">March</option>
                            <option value=\"Apr\">April</option>
                            <option value=\"May\">May</option>
                            <option value=\"Jun\">June</option>
                            <option value=\"Jul\">July</option>
                            <option value=\"Aug\">August</option>
                            <option value=\"Sep\">September</option>
                            <option value=\"Oct\">October</option>
                            <option value=\"Nov\">November</option>
                            <option value=\"Dec\">December</option>
                        </select></span>
                        <br> <span class=\"psw\"><label for=\"birthDayChoice\">Birth Day:</label> <input type=\"number\" id=\"birthDayChoice\" name=\"birthDayChoice\" min=\"1\" max=\"31\" step=\"1\" pattern=\"[0-9]*\" /></span>
                        <br> <span class=\"psw\"><label for=\"loginChoice\">Login:</label>
                            <input type=\"text\" id=\"loginChoice\" name=\"loginChoice\" readonly /></span>
                        <br> <span class=\"psw\"><label for=\"passwdChoice\">Password:</label> <input type=\"password\" id=\"passwdChoice\" name=\"passwdChoice\" /></span>
                    </div>
                    <div class=\"tabbed club\">
                        <span class=\"psw\"><label for=\"renewYearChoice\">Renew Year:</label>
                            <input type=\"number\" id=\"renewYearChoice\" name=\"renewYearChoice\" min=\"2019\" step=\"1\" max=\"2030\" pattern=\"[0-9]*\" /></span>
                        <br> <span class=\"psw\"><label for=\"statusChoice\">Active Status:</label> <select id=\"statusChoice\" name=\"statusChoice\">
                            <option value=\"M\" selected>Member</option>
                            <option value=\"A\">Associate</option>
                            <option value=\"G\">Guest</option>
                            <option value=\"I\">Inactive</option>
                        </select></span>
                        <br><hr>
                        Privileges
                        <br><label for=\"adminChoice\">Website Admin</label>
                            <input id=\"adminChoice\" name=\"adminChoice\" type=\"checkbox\"/>
                        <br><label for=\"copChoice\">Signups</label>
                            <input id=\"copChoice\" name=\"copChoice\" type=\"checkbox\"/>
                        <br><label for=\"timeChoice\">Time</label>
                            <input id=\"timeChoice\" name=\"timeChoice\" type=\"checkbox\"/>
                        <br><label for=\"eventsChoice\">Events</label>
                            <input id=\"eventsChoice\" name=\"eventsChoice\" type=\"checkbox\"/>
                        <br><hr>
                        Certifications
                        <br>
                        ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 234
            yield "                            <span class=\"psw\">
                                <input type=\"hidden\" id=\"Feature_";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 235), "html", null, true);
            yield "_idChoice\" name=\"Feature_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 235), "html", null, true);
            yield "_idChoice\" value=\"\"/>
                                <div class=\"boxed\">
                                    <input type=\"checkbox\" id=\"Feature_";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 237), "html", null, true);
            yield "_Choice\" name=\"Feature_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 237), "html", null, true);
            yield "_Choice\" />
                                    <label class=\"shortLeft\" for=\"Feature_";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 238), "html", null, true);
            yield "_Choice\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 238), "html", null, true);
            yield "</label>
                                </div>
                                <label class=\"short\" for=\"Feature_";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 240), "html", null, true);
            yield "_dateChoice\">Date</label>
                                <input type=\"date\" id=\"Feature_";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 241), "html", null, true);
            yield "_dateChoice\" name=\"Feature_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 241), "html", null, true);
            yield "_dateChoice\" />
                                <label class=\"short\" for=\"Feature_";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 242), "html", null, true);
            yield "_valueChoice\">ID</label>
                                <input type=\"text\" id=\"Feature_";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 243), "html", null, true);
            yield "_valueChoice\" name=\"Feature_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, false, 243), "html", null, true);
            yield "_valueChoice\" />
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        yield "                    </div>
                </div>
            </div>
            <div class=\"container\" style=\"background-color: #f1f1f1\">
                <button onclick=\"setAction('Save');\" type=\"button\" class=\"savebtn\">Save</button>
                <button onclick=\"setAction('Delete');\" type=\"button\" class=\"deletebtn\">Delete</button>
                <button type=\"button\" class=\"cancelbtn\" onclick=\"document.getElementById('modalPopup').style.display='none'\">Cancel</button>
            </div>
        </form>
    </div>
    
    <script>
        ";
        // line 258
        if (($context["admin"] ?? null)) {
            // line 259
            yield "            showGroup();
        ";
        }
        // line 261
        yield "    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin.html.twig";
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
        return array (  452 => 261,  448 => 259,  446 => 258,  432 => 246,  421 => 243,  417 => 242,  411 => 241,  407 => 240,  400 => 238,  394 => 237,  387 => 235,  384 => 234,  380 => 233,  309 => 164,  299 => 160,  293 => 157,  285 => 154,  271 => 149,  263 => 146,  256 => 143,  252 => 142,  240 => 132,  234 => 129,  224 => 121,  222 => 120,  217 => 117,  211 => 116,  202 => 113,  197 => 112,  192 => 111,  188 => 110,  145 => 69,  137 => 67,  133 => 66,  129 => 65,  124 => 64,  120 => 63,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/admin.html.twig");
    }
}
