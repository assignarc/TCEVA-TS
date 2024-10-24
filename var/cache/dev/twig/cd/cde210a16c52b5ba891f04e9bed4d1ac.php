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

/* pages/noSolicitation.html.twig */
class __TwigTemplate_501b69684fac85bad606afe94e6497c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/noSolicitation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/noSolicitation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/noSolicitation.html.twig", 1);
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
\t\t<div class=\"title\">The Town of Trophy Club No Soliciting Yard Sign</div>
\t\t<table class=\"sign\">
\t\t\t<tr>
\t\t\t\t<td><img src=\"../images/NoSolicitationSign.jpg\" height=\"250\"
\t\t\t\t\twidth=\"250\" /></td>
\t\t\t\t<td colspan=\"2\"><p>
\t\t\t\t\t\tSigns meet Trophy Club Sign Ordinance restrictions and No-Knock
\t\t\t\t\t\tOrdinance requirements. <br> Proceeds benefit TCEVA and go
\t\t\t\t\t\tdirectly to support the community and Trophy Club First
\t\t\t\t\t\tResponders. <br> <br> We will place your sign(s) at your
\t\t\t\t\t\tfront door within 5 business days of the order (Trophy Club
\t\t\t\t\t\tresidents only please). <br> <br> \$1.00 handling fee
\t\t\t\t\t\twill be added to your cart at check out.
\t\t\t\t\t</p> <br> <br> <!-- PAYPAL LINK -->
\t\t\t\t\t<form target=\"paypal\"
\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"VZK7WBAVRGFCQ\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\tvalue=\"Three sign options available for your donation:\">Three
\t\t\t\t\t\t\t\t\tsign options available for your donation:</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Stamped Aluminum Sign on 24 inch Stake\">Stamped
\t\t\t\t\t\t\t\t\t\t\tAluminum Sign on 24 inch Stake \$15.00 USD</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Stamped Aluminum Sign for Wall Mount\">Stamped
\t\t\t\t\t\t\t\t\t\t\tAluminum Sign for Wall Mount \$10.00 USD</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Removable Adhesive Window Decal\">Removable
\t\t\t\t\t\t\t\t\t\t\tAdhesive Window Decal \$5.00 USD</option>
\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<input type=\"hidden\" name=\"currency_code\" value=\"USD\"> <input
\t\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif\"
\t\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\t\talt=\"PayPal - The safer, easier way to pay online!\"> <img
\t\t\t\t\t\t\talt=\"\" border=\"0\"
\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\"
\t\t\t\t\t\t\twidth=\"1\" height=\"1\">
\t\t\t\t\t</form> <br> <br> Please visit the Town of Trophy Club site for
\t\t\t\t\tmore information and remember to <a
\t\t\t\t\thref=\"http://www.trophyclub.org/departments/community-development/no-knock-address-registry.html\"
\t\t\t\t\ttarget=\"_blank\">register</a> on the No-Knock Address Registry site.
\t\t\t\t\t<br> <br> <a href=\"mailto:tceva.trophyclub@gmail.com\">Contact
\t\t\t\t\t\tus</a> for a cash or check delivery, or questions.</td>
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
        return "pages/noSolicitation.html.twig";
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
\t\t<div class=\"title\">The Town of Trophy Club No Soliciting Yard Sign</div>
\t\t<table class=\"sign\">
\t\t\t<tr>
\t\t\t\t<td><img src=\"../images/NoSolicitationSign.jpg\" height=\"250\"
\t\t\t\t\twidth=\"250\" /></td>
\t\t\t\t<td colspan=\"2\"><p>
\t\t\t\t\t\tSigns meet Trophy Club Sign Ordinance restrictions and No-Knock
\t\t\t\t\t\tOrdinance requirements. <br> Proceeds benefit TCEVA and go
\t\t\t\t\t\tdirectly to support the community and Trophy Club First
\t\t\t\t\t\tResponders. <br> <br> We will place your sign(s) at your
\t\t\t\t\t\tfront door within 5 business days of the order (Trophy Club
\t\t\t\t\t\tresidents only please). <br> <br> \$1.00 handling fee
\t\t\t\t\t\twill be added to your cart at check out.
\t\t\t\t\t</p> <br> <br> <!-- PAYPAL LINK -->
\t\t\t\t\t<form target=\"paypal\"
\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"VZK7WBAVRGFCQ\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\tvalue=\"Three sign options available for your donation:\">Three
\t\t\t\t\t\t\t\t\tsign options available for your donation:</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t<option value=\"Stamped Aluminum Sign on 24 inch Stake\">Stamped
\t\t\t\t\t\t\t\t\t\t\tAluminum Sign on 24 inch Stake \$15.00 USD</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Stamped Aluminum Sign for Wall Mount\">Stamped
\t\t\t\t\t\t\t\t\t\t\tAluminum Sign for Wall Mount \$10.00 USD</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Removable Adhesive Window Decal\">Removable
\t\t\t\t\t\t\t\t\t\t\tAdhesive Window Decal \$5.00 USD</option>
\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<input type=\"hidden\" name=\"currency_code\" value=\"USD\"> <input
\t\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif\"
\t\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\t\talt=\"PayPal - The safer, easier way to pay online!\"> <img
\t\t\t\t\t\t\talt=\"\" border=\"0\"
\t\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\"
\t\t\t\t\t\t\twidth=\"1\" height=\"1\">
\t\t\t\t\t</form> <br> <br> Please visit the Town of Trophy Club site for
\t\t\t\t\tmore information and remember to <a
\t\t\t\t\thref=\"http://www.trophyclub.org/departments/community-development/no-knock-address-registry.html\"
\t\t\t\t\ttarget=\"_blank\">register</a> on the No-Knock Address Registry site.
\t\t\t\t\t<br> <br> <a href=\"mailto:tceva.trophyclub@gmail.com\">Contact
\t\t\t\t\t\tus</a> for a cash or check delivery, or questions.</td>
\t\t\t</tr>
\t\t</table>

\t</div>
{% endblock %}", "pages/noSolicitation.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/pages/noSolicitation.html.twig");
    }
}
