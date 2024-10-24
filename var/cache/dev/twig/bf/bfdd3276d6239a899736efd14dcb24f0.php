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

/* pages/backTheBlue.html.twig */
class __TwigTemplate_a6a9875a69c0e5cf63ec3cb5be43e793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/backTheBlue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/backTheBlue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/backTheBlue.html.twig", 1);
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
        yield "\t<div class=\"main\">
\t\t<div class=\"title\">Back the Blue Yard Sign</div>
\t\t<br>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><img src=\"../images/BackTheBlueYardSign.jpg\" height=\"250\"
\t\t\t\t\twidth=\"250\" /></td>
\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t Made from Corrugated plastic and fade resistant ink,
\t\t\t\t\tthese are made to last! We will place your sign(s) at your front
\t\t\t\t\tdoor within 5 business days. Trophy Club residents only please. <br>
\t\t\t\t\t<br> Thank you for your support! <br> <br> <!-- PAYPAL LINK -->
\t\t\t\t\t<center>
\t\t\t\t\t\t<form target=\"_blank\"
\t\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"M9AETKQAKS574\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\t\tvalue=\"One Size Availble\">One Size Available</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Back The Blue Yard Sign\">Back The
\t\t\t\t\t\t\t\t\t\t\t\tBlue Yard Sign \$10.00 USD</option>
\t\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"currency_code\" value=\"USD\"> <input
\t\t\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif\"
\t\t\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\t\t\talt=\"PayPal - The safer, easier way to pay online!\"> <img
\t\t\t\t\t\t\t\talt=\"\" border=\"0\"
\t\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\"
\t\t\t\t\t\t\t\twidth=\"1\" height=\"1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</center>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>

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
        return "pages/backTheBlue.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"main\">
\t\t<div class=\"title\">Back the Blue Yard Sign</div>
\t\t<br>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><img src=\"../images/BackTheBlueYardSign.jpg\" height=\"250\"
\t\t\t\t\twidth=\"250\" /></td>
\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t Made from Corrugated plastic and fade resistant ink,
\t\t\t\t\tthese are made to last! We will place your sign(s) at your front
\t\t\t\t\tdoor within 5 business days. Trophy Club residents only please. <br>
\t\t\t\t\t<br> Thank you for your support! <br> <br> <!-- PAYPAL LINK -->
\t\t\t\t\t<center>
\t\t\t\t\t\t<form target=\"_blank\"
\t\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"M9AETKQAKS574\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\t\tvalue=\"One Size Availble\">One Size Available</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Back The Blue Yard Sign\">Back The
\t\t\t\t\t\t\t\t\t\t\t\tBlue Yard Sign \$10.00 USD</option>
\t\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"currency_code\" value=\"USD\"> <input
\t\t\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif\"
\t\t\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\t\t\talt=\"PayPal - The safer, easier way to pay online!\"> <img
\t\t\t\t\t\t\t\talt=\"\" border=\"0\"
\t\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\"
\t\t\t\t\t\t\t\twidth=\"1\" height=\"1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</center>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>

\t</div>
{% endblock %}", "pages/backTheBlue.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/pages/backTheBlue.html.twig");
    }
}
