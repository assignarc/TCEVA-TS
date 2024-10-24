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

/* base.html.twig */
class __TwigTemplate_011f1ca914078b33f814bb4a8eec4b50 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<html>
\t<head>
\t\t<meta name=\"viewport\" content=\"initial-scale=1, viewport-fit=cover\">
\t\t<title>
            ";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "        </title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">
\t\t<script type=\"text/javascript\" src=\"/js/modal.js\"></script>
       
\t</head>
\t<body style=\"margin:0;height:100%\">
\t\t<div class=\"topnav\" id=\"Topnav\">
\t\t\t<a href=\"https://www.tceva.us\">
\t\t\t<img  src=\"/images/TCEVA-2023-logo.png\" style=\"margin:auto;max-height:30px;float:left\">&nbsp;&nbsp;
\t\t\t\tHome
\t\t\t</a>
\t\t\t ";
        // line 19
        $context["loggedInUser"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", ["loggedInUser"], "method", false, false, false, 19);
        // line 20
        yield "\t\t\t ";
        if ( !(null === (isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context) ? $context["loggedInUser"] : (function () { throw new RuntimeError('Variable "loggedInUser" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "    \t\t\t<a href=\"/action/edit?reload=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "U") * 1000), "html", null, true);
            yield "\">Sign Up!</a> 
\t\t\t\t<a href=\"/report/selector?reload=";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "U") * 1000), "html", null, true);
            yield "\" >Reports</a>
\t\t\t\t<a href=\"/time/edit?reload=";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "U") * 1000), "html", null, true);
            yield "\" >Time</a> 
\t\t\t\t<a href=\"/admin/edit?reload=";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "U") * 1000), "html", null, true);
            yield "\">Members</a>
\t\t\t\t<a href=\"/logout\">Logout</a>
\t\t\t\t<a style=\"float:right;\" href=\"#\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context) ? $context["loggedInUser"] : (function () { throw new RuntimeError('Variable "loggedInUser" does not exist.', 26, $this->source); })()), "lastName", [], "any", false, false, false, 26) . ", ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["loggedInUser"]) || array_key_exists("loggedInUser", $context) ? $context["loggedInUser"] : (function () { throw new RuntimeError('Variable "loggedInUser" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26)), "html", null, true);
            yield "</a>
    \t\t";
        } else {
            // line 28
            yield "                <a href=\"/login/page\" >Login</a>
            ";
        }
        // line 30
        yield "\t\t\t
\t\t\t
\t\t\t<a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">☰</a>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "environment", [], "any", false, false, false, 35) == "prod")) {
            // line 36
            yield "\t\t\t\t\t
\t\t\t";
        } else {
            // line 38
            yield "\t\t\t\t<H3 style=\"margin:auto; color:red;text-align:center\">TEST SITE</div><br>
\t\t\t";
        }
        // line 40
        yield "\t\t  
           ";
        // line 41
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 42
        yield "\t\t</div>
\t\t<div class=\"bottomBar\" style=\"text-align:center\">
\t\t\t
\t\t</div>
\t\t<script>
\t\t\tfunction myFunction() {
                var x = document.getElementById(\"Topnav\");
                if (x.className === \"topnav\") {
                        x.className += \" responsive\";
                    } 
                else{
                        x.className = \"topnav\";
                    }
                }
\t\t</script>
\t\t<div class=\"bottom\">
\t\t\t©Trophy Club Emergency Volunteers Association
\t\t</div>
\t\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        yield "                Trophy Club Emergency Volunteer Association
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  181 => 41,  169 => 6,  156 => 5,  125 => 42,  123 => 41,  120 => 40,  116 => 38,  112 => 36,  110 => 35,  103 => 30,  99 => 28,  94 => 26,  89 => 24,  85 => 23,  81 => 22,  76 => 21,  73 => 20,  71 => 19,  58 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html>
\t<head>
\t\t<meta name=\"viewport\" content=\"initial-scale=1, viewport-fit=cover\">
\t\t<title>
            {% block title %}
                Trophy Club Emergency Volunteer Association
            {% endblock %}
        </title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">
\t\t<script type=\"text/javascript\" src=\"/js/modal.js\"></script>
       
\t</head>
\t<body style=\"margin:0;height:100%\">
\t\t<div class=\"topnav\" id=\"Topnav\">
\t\t\t<a href=\"https://www.tceva.us\">
\t\t\t<img  src=\"/images/TCEVA-2023-logo.png\" style=\"margin:auto;max-height:30px;float:left\">&nbsp;&nbsp;
\t\t\t\tHome
\t\t\t</a>
\t\t\t {% set loggedInUser =  app.session.get('loggedInUser') %}
\t\t\t {% if loggedInUser  is not null %}
    \t\t\t<a href=\"/action/edit?reload={{date()| date('U') * 1000 }}\">Sign Up!</a> 
\t\t\t\t<a href=\"/report/selector?reload={{date()| date('U') * 1000 }}\" >Reports</a>
\t\t\t\t<a href=\"/time/edit?reload={{date()| date('U') * 1000 }}\" >Time</a> 
\t\t\t\t<a href=\"/admin/edit?reload={{date()| date('U') * 1000 }}\">Members</a>
\t\t\t\t<a href=\"/logout\">Logout</a>
\t\t\t\t<a style=\"float:right;\" href=\"#\">{{loggedInUser.lastName ~ ', ' ~ loggedInUser.firstname}}</a>
    \t\t{% else %}
                <a href=\"/login/page\" >Login</a>
            {% endif %}
\t\t\t
\t\t\t
\t\t\t<a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">☰</a>
\t\t</div>
\t\t<div>
\t\t\t{% if app.environment == 'prod' %}
\t\t\t\t\t
\t\t\t{% else %}
\t\t\t\t<H3 style=\"margin:auto; color:red;text-align:center\">TEST SITE</div><br>
\t\t\t{% endif %}
\t\t  
           {% block body %}\t\t{% endblock %}
\t\t</div>
\t\t<div class=\"bottomBar\" style=\"text-align:center\">
\t\t\t
\t\t</div>
\t\t<script>
\t\t\tfunction myFunction() {
                var x = document.getElementById(\"Topnav\");
                if (x.className === \"topnav\") {
                        x.className += \" responsive\";
                    } 
                else{
                        x.className = \"topnav\";
                    }
                }
\t\t</script>
\t\t<div class=\"bottom\">
\t\t\t©Trophy Club Emergency Volunteers Association
\t\t</div>
\t\t</body>
</html>
", "base.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/base.html.twig");
    }
}
