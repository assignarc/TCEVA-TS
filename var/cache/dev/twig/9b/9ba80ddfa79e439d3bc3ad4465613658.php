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

/* login.html.twig */
class __TwigTemplate_b6737458159f34de10c81226eccf1675 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        yield "
    <script>
        function resetPw() {
            modalPopdown();
            document.getElementById(\"modalPasswd\").style.display = 'block';
        }
    </script>
    <div class=\"main\"></div>
    <div id=\"modalPopup\" class=\"modal\">
        <form class=\"modal-content animate\" action=\"/login\" method=\"post\">
            <div class=\"container\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "                        <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            </div>
            <div class=\"container\">
                <input type=\"hidden\" name=\"action\" value=\"login\" />
                <span class=\"psw\">
                    <label for=\"userName\"><b>Username</b></label>
                    <input type=\"text\" placeholder=\"Enter Username\" name=\"userName\" required>
                </span>
                <br>
                <span class=\"psw\">
                    <label for=\"password\"><b>Password</b></label>
                    <input type=\"password\" placeholder=\"Enter Password\" name=\"password\" required>
                </span>
            </div>
            <div class=\"container\" style=\"background-color: #f1f1f1\">
                <button class=\"loginbtn\" type=\"submit\">Login</button>
                <button type=\"button\" onclick=\"document.getElementById('modalPopup').style.display='none'\" class=\"cancelbtn\">Cancel</button>
                <br/><br/>
                <span>Forgot <a href=\"javascript:resetPw();\">password?</a></span>
            </div>
        </form>
    </div>

    <div id=\"modalPasswd\" class=\"modal\">
        <form class=\"modal-content animate\" action=\"/login\" method=\"post\">
            <div class=\"container\">
                Enter your user name below. <br>If an email is on file with TCEVA, a new password will be emailed to you.
                <input type=\"hidden\" name=\"action\" value=\"reset\" />
                <span class=\"psw\">
                    <label for=\"userName\"><b>Username</b></label>
                    <input type=\"text\" placeholder=\"Enter Username\" name=\"userName\" required>
                </span>
            </div>
            <div class=\"container\" style=\"background-color: #f1f1f1\">
                <button class=\"loginbtn\" type=\"submit\">Reset Password</button>
                <button type=\"button\" onclick=\"document.getElementById('modalPasswd').style.display='none'\" class=\"cancelbtn\">Cancel</button>
            </div>
        </form>
    </div>
    ";
        // line 59
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", ["loggedInUser"], "method", false, false, false, 59))) {
            // line 60
            yield "        <script>
            modalPopup();
        </script>
    ";
        } else {
            // line 64
            yield "        <script>
            window.parent.location.reload(false);
        </script>
    ";
        }
        // line 68
        yield "
    <h2 class=\"center\">
        Trophy Club Emergency Volunteers Association<br><br>
        <img  src=\"/images/TCEVA-2023-logo.png\" style=\"margin:auto;max-width: 250px;\"/>
    </h2>

    <div class=\"clearfixxxx\">
        <div class=\"img-containerL\">
        </div>
        <div class=\"img-containerR\">
      
        </div>
    </div>
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
        return "login.html.twig";
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
        return array (  172 => 68,  166 => 64,  160 => 60,  158 => 59,  118 => 21,  112 => 20,  103 => 17,  98 => 16,  93 => 15,  89 => 14,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <script>
        function resetPw() {
            modalPopdown();
            document.getElementById(\"modalPasswd\").style.display = 'block';
        }
    </script>
    <div class=\"main\"></div>
    <div id=\"modalPopup\" class=\"modal\">
        <form class=\"modal-content animate\" action=\"/login\" method=\"post\">
            <div class=\"container\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"flash-{{ label }}\">
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
            <div class=\"container\">
                <input type=\"hidden\" name=\"action\" value=\"login\" />
                <span class=\"psw\">
                    <label for=\"userName\"><b>Username</b></label>
                    <input type=\"text\" placeholder=\"Enter Username\" name=\"userName\" required>
                </span>
                <br>
                <span class=\"psw\">
                    <label for=\"password\"><b>Password</b></label>
                    <input type=\"password\" placeholder=\"Enter Password\" name=\"password\" required>
                </span>
            </div>
            <div class=\"container\" style=\"background-color: #f1f1f1\">
                <button class=\"loginbtn\" type=\"submit\">Login</button>
                <button type=\"button\" onclick=\"document.getElementById('modalPopup').style.display='none'\" class=\"cancelbtn\">Cancel</button>
                <br/><br/>
                <span>Forgot <a href=\"javascript:resetPw();\">password?</a></span>
            </div>
        </form>
    </div>

    <div id=\"modalPasswd\" class=\"modal\">
        <form class=\"modal-content animate\" action=\"/login\" method=\"post\">
            <div class=\"container\">
                Enter your user name below. <br>If an email is on file with TCEVA, a new password will be emailed to you.
                <input type=\"hidden\" name=\"action\" value=\"reset\" />
                <span class=\"psw\">
                    <label for=\"userName\"><b>Username</b></label>
                    <input type=\"text\" placeholder=\"Enter Username\" name=\"userName\" required>
                </span>
            </div>
            <div class=\"container\" style=\"background-color: #f1f1f1\">
                <button class=\"loginbtn\" type=\"submit\">Reset Password</button>
                <button type=\"button\" onclick=\"document.getElementById('modalPasswd').style.display='none'\" class=\"cancelbtn\">Cancel</button>
            </div>
        </form>
    </div>
    {% if app.session.get('loggedInUser')  is null %}
        <script>
            modalPopup();
        </script>
    {% else %}
        <script>
            window.parent.location.reload(false);
        </script>
    {% endif %}

    <h2 class=\"center\">
        Trophy Club Emergency Volunteers Association<br><br>
        <img  src=\"/images/TCEVA-2023-logo.png\" style=\"margin:auto;max-width: 250px;\"/>
    </h2>

    <div class=\"clearfixxxx\">
        <div class=\"img-containerL\">
        </div>
        <div class=\"img-containerR\">
      
        </div>
    </div>
{% endblock %}", "login.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/login.html.twig");
    }
}
