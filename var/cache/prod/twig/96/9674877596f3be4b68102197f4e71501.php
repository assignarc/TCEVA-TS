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
class __TwigTemplate_416b712208614d3bf7d5b9ab49d7e053 extends Template
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
        $context["loggedInUser"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 19), "get", ["loggedInUser"], "method", false, false, false, 19);
        // line 20
        yield "\t\t\t ";
        if ( !(null === ($context["loggedInUser"] ?? null))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "lastName", [], "any", false, false, false, 26) . ", ") . CoreExtension::getAttribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "firstname", [], "any", false, false, false, 26)), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 35) == "prod")) {
            // line 36
            yield "\t\t\t\t\t
\t\t\t";
        } else {
            // line 38
            yield "\t\t\t\t<H3 style=\"margin:auto; color:red;text-align:center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 38), "html", null, true);
            yield " SITE</div><br>
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
\t\t<div class=\"container\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 59
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 60
                yield "                        <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "            </div>
\t\t<div class=\"bottom\">
\t\t\t©Trophy Club Emergency Volunteers Association
\t\t</div>
\t</body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "                Trophy Club Emergency Volunteer Association
            ";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "\t\t";
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
        return array (  192 => 41,  186 => 6,  179 => 5,  168 => 65,  162 => 64,  153 => 61,  148 => 60,  143 => 59,  139 => 58,  121 => 42,  119 => 41,  116 => 40,  110 => 38,  106 => 36,  104 => 35,  97 => 30,  93 => 28,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  70 => 21,  67 => 20,  65 => 19,  52 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/base.html.twig");
    }
}
