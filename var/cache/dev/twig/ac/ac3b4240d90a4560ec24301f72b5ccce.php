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
class __TwigTemplate_6d866ec3ea9ba3e641681c4b7b3ed36a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 63, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [], "any", false, false, false, 110));
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
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 120, $this->source); })())) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emptyPerson"]) || array_key_exists("emptyPerson", $context) ? $context["emptyPerson"] : (function () { throw new RuntimeError('Variable "emptyPerson" does not exist.', 129, $this->source); })()), "json", [], "any", false, false, false, 129), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 142, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 233, $this->source); })()));
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
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 258, $this->source); })())) {
            // line 259
            yield "            showGroup();
        ";
        }
        // line 261
        yield "    </script>
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
        return array (  470 => 261,  466 => 259,  464 => 258,  450 => 246,  439 => 243,  435 => 242,  429 => 241,  425 => 240,  418 => 238,  412 => 237,  405 => 235,  402 => 234,  398 => 233,  327 => 164,  317 => 160,  311 => 157,  303 => 154,  289 => 149,  281 => 146,  274 => 143,  270 => 142,  258 => 132,  252 => 129,  242 => 121,  240 => 120,  235 => 117,  229 => 116,  220 => 113,  215 => 112,  210 => 111,  206 => 110,  163 => 69,  155 => 67,  151 => 66,  147 => 65,  142 => 64,  138 => 63,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <script type=\"text/javascript\">
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
       
        {% for feature in features %}
        document.getElementById(\"Feature_{{ feature.name }}_idChoice\").value ='';
        document.getElementById(\"Feature_{{ feature.name }}_Choice\").checked = false;
        document.getElementById(\"Feature_{{ feature.name }}_valueChoice\").value = '';
        document.getElementById(\"Feature_{{ feature.name }}_dateChoice\").value = '';
        {% endfor %}
    }
    
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
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"flash-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        </h3>
        <div class=\"title\">Member Administration</div>
    
        {% if admin %}
            Person Type
            <select id=\"memberType\" onchange=\"showGroup()\">
                <option value=\"grp_M\" selected>Member</option>
                <option value=\"grp_A\">Associate</option>
                <option value=\"grp_G\">Guest</option>
                <option value=\"grp_I\">Inactive</option>
            </select>
            <br>
            <a href=\"javascript:editPerson('{{ emptyPerson.json }}');\">Add New Person</a>
            <br/>
        {% endif %}
       
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                  
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            {% for person in people %}
                <tr class=\"MemberGroup grp_{{ person.status }}\">
                    <td>
                        <div class=\"membername\">
                            {{ person.lastName }}, {{ person.firstName }} 
                        </div>
                        <div class=\"memberaddress\">
                            {{ person.addressLine1 ~  (person.addressLine2 ? '<br>' ~ person.addressLine2 : '')}}<br>{{ person.city }}, {{ person.state }} {{ person.postal }}
                        </div>
                    </td>
                    <td>
                        <div class=\"memberphone\">
                            {{ person.phone }} {{ person.carrier ? '(' ~ person.carrier ~ ')' :''}}
                        </div>
                        <div class=\"memberemail\">
                            {{ person.email }}</td>
                        </div>
                    <td>
                        <a href=\"javascript:editPerson('{{ person.json }}');\">Edit</a>
                    </td>
                </tr>
            {% endfor %}
        </table>
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
                        {% for feature in features %}
                            <span class=\"psw\">
                                <input type=\"hidden\" id=\"Feature_{{ feature.name }}_idChoice\" name=\"Feature_{{ feature.name }}_idChoice\" value=\"\"/>
                                <div class=\"boxed\">
                                    <input type=\"checkbox\" id=\"Feature_{{ feature.name }}_Choice\" name=\"Feature_{{ feature.name }}_Choice\" />
                                    <label class=\"shortLeft\" for=\"Feature_{{ feature.name }}_Choice\">{{ feature.name }}</label>
                                </div>
                                <label class=\"short\" for=\"Feature_{{ feature.name }}_dateChoice\">Date</label>
                                <input type=\"date\" id=\"Feature_{{ feature.name }}_dateChoice\" name=\"Feature_{{ feature.name }}_dateChoice\" />
                                <label class=\"short\" for=\"Feature_{{ feature.name }}_valueChoice\">ID</label>
                                <input type=\"text\" id=\"Feature_{{ feature.name }}_valueChoice\" name=\"Feature_{{ feature.name }}_valueChoice\" />
                            </span>
                        {% endfor %}
                    </div>
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
        {% if admin %}
            showGroup();
        {% endif %}
    </script>
{% endblock %}", "admin.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/admin.html.twig");
    }
}
