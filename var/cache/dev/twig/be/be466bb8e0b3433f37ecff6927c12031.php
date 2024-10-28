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

/* pages/emergencyStickers.html.twig */
class __TwigTemplate_8c642c57ab550732a386a66c6db3796a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/emergencyStickers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/emergencyStickers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/emergencyStickers.html.twig", 1);
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
\t\t<div class=\"title\">Emergency Responder Notification Stickers</div>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<img src=\"/images/deaf.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/autism.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/diabetes.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/dementia.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t</td>
\t\t\t\t<td>Stickers for your car or house to alert First Responders
\t\t\t\t\t\tof potential communication difficulties. <br> Stickers show
\t\t\t\t\t\tAutism/Special Needs, Diabetes, Deafness, or Alzheimer's
\t\t\t\t\t\tConditions. <br> <br> Proceeds benefit TCEVA and go
\t\t\t\t\t\tdirectly to support the community <br> and Trophy Club First
\t\t\t\t\t\tResponders. <br> <br> We will mail your stickers to you
\t\t\t\t\t\tafter order. <br> <br> \$1.00 handling fee will be added
\t\t\t\t\t\tto your cart at check out.
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<form target=\"paypal\"
\t\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"NNKJVWVYYKAEW\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\t\tvalue=\"Emergency Responder Stickers\">Emergency
\t\t\t\t\t\t\t\t\t\tResponder Stickers</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Deaf\">Deaf \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Autism\">Autism \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Alzheimers\">Alzheimers \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Diabetes\">Diabetes \$4.00 USD</option>
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
\t\t\t\t\t\t<br> <br> <a href=\"mailto:tceva.trophyclub@gmail.com\">Contact
\t\t\t\t\t\t\tus</a> for a cash or check delivery, or questions.

\t\t\t\t\t</td>
\t\t\t\t</tr>
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
        return "pages/emergencyStickers.html.twig";
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
\t\t<div class=\"title\">Emergency Responder Notification Stickers</div>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<img src=\"/images/deaf.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/autism.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/diabetes.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t\t<br>
\t\t\t\t\t<img src=\"/images/dementia.jpg\" height=\"200\" width=\"330\" />
\t\t\t\t</td>
\t\t\t\t<td>Stickers for your car or house to alert First Responders
\t\t\t\t\t\tof potential communication difficulties. <br> Stickers show
\t\t\t\t\t\tAutism/Special Needs, Diabetes, Deafness, or Alzheimer's
\t\t\t\t\t\tConditions. <br> <br> Proceeds benefit TCEVA and go
\t\t\t\t\t\tdirectly to support the community <br> and Trophy Club First
\t\t\t\t\t\tResponders. <br> <br> We will mail your stickers to you
\t\t\t\t\t\tafter order. <br> <br> \$1.00 handling fee will be added
\t\t\t\t\t\tto your cart at check out.
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<form target=\"paypal\"
\t\t\t\t\t\t\taction=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"NNKJVWVYYKAEW\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"hidden\" name=\"on0\"
\t\t\t\t\t\t\t\t\t\tvalue=\"Emergency Responder Stickers\">Emergency
\t\t\t\t\t\t\t\t\t\tResponder Stickers</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><select name=\"os0\" class=\"ppselect\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Deaf\">Deaf \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Autism\">Autism \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Alzheimers\">Alzheimers \$4.00 USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Diabetes\">Diabetes \$4.00 USD</option>
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
\t\t\t\t\t\t<br> <br> <a href=\"mailto:tceva.trophyclub@gmail.com\">Contact
\t\t\t\t\t\t\tus</a> for a cash or check delivery, or questions.

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t</table>

\t</div>
{% endblock %}", "pages/emergencyStickers.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/pages/emergencyStickers.html.twig");
    }
}
