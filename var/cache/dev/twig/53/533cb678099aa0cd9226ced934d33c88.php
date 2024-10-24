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

/* pages/help.html.twig */
class __TwigTemplate_82fbfaae90a9a5ba0b0ab0e1e2847780 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/help.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/help.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/help.html.twig", 1);
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
\t\t<div class=\"title\">Trophy Club Emergency Volunteer Association</div>
\t\t<p>You can help the Trophy Club Emergency Volunteer Association
\t\t\t(TCEVA) by donations and/or volunteering your time. Whether you can
\t\t\tvolunteer daily or a few hours each month, all your efforts are
\t\t\tappreciated. Some volunteer positions may offer free training,
\t\t\tenabling you to learn valuable new skills!</p>
\t\t<p>Volunteers are always needed in the following areas:</p>
\t\t<ul>
\t\t\t<li>Citizens on Patrol (COP). Volunteers enhance the safety of
\t\t\t\tour community by patrolling in a specially marked vehicle and
\t\t\t\talerting Police of any suspicious activity. This position requires
\t\t\t\ttraining.</li>
\t\t\t<li>Community Emergency Response Teams (CERT). The team assists
\t\t\t\tthe community by providing disaster preparedness education to the
\t\t\t\tpublic through safety fairs, assisting first responders in searching
\t\t\t\tfor missing persons, responding during disasters, and assisting
\t\t\t\temergency services responders. This program is run in collaboration
\t\t\t\twith Denton County.</li>
\t\t\t<li>Fire Rehab. Fire department rehab is a vital firefighting
\t\t\t\tservice at the site of the fire, providing firefighters and other
\t\t\t\temergency personnel with immediate attention including food and
\t\t\t\trehydration, which prevents life threatening conditions like heat
\t\t\t\tstroke or heart attack.</li>
\t\t\t<li>Administrative assistance. Volunteers provide administrative
\t\t\t\tassistance (photocopying, filing, research, etc.) to both the Fire
\t\t\t\tand Police departments.</li>
\t\t\t<li>Special Events. Volunteers assist with setup, security,
\t\t\t\ttraffic control, and event cleanup at town sponsored events and
\t\t\t\tactivities.</li>
\t\t</ul>
\t\t<p>The funding for these programs depends largely on generous
\t\t\tdonations from people like you. Here are some ways you can donate to
\t\t\thelp TCEVA:</p>
\t\t<ul>
\t\t\t<li>Amazon Wishlist. TCEVA needs constant supplies to keep our
\t\t\t\tprograms running as efficiently as possible. <br> Please click
\t\t\t\t<a target=\"_blank\"
\t\t\t\thref=\"https://www.amazon.com/hz/wishlist/ls/2AWD26CXHJYGA/ref=nav_wishlist_lists_1?_encoding=UTF8&type=wishlist\">here</a>
\t\t\t\tto purchase items for us.
\t\t\t</li>
\t\t\t<li>Cash donations. Money collected goes directly to purchasing
\t\t\t\tsupplies, uniforms, equipment, and trainings. <br> To make a
\t\t\t\tcash donation, please click on the link below which will direct you
\t\t\t\tto PayPal.
\t\t\t\t<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\"
\t\t\t\t\ttarget=\"_blank\">
\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\" /> <input
\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"JT4XCM83SJKXG\" /> <input
\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif\"
\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\ttitle=\"PayPal - The safer, easier way to pay online!\"
\t\t\t\t\t\talt=\"Donate with PayPal button\" /> <img alt=\"\" border=\"0\"
\t\t\t\t\t\tsrc=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\"
\t\t\t\t\t\theight=\"1\" />
\t\t\t\t</form>
\t\t\t</li>
\t\t</ul>
\t\t<p>Find us on Facebook at TCEVA-Trophy Club Emergency Volunteer
\t\t\tAssociation 501(c)3.</p>
\t\t<p>Please contact us with any questions about donating or
\t\t\tvolunteering.</p>

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
        return "pages/help.html.twig";
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
\t\t<div class=\"title\">Trophy Club Emergency Volunteer Association</div>
\t\t<p>You can help the Trophy Club Emergency Volunteer Association
\t\t\t(TCEVA) by donations and/or volunteering your time. Whether you can
\t\t\tvolunteer daily or a few hours each month, all your efforts are
\t\t\tappreciated. Some volunteer positions may offer free training,
\t\t\tenabling you to learn valuable new skills!</p>
\t\t<p>Volunteers are always needed in the following areas:</p>
\t\t<ul>
\t\t\t<li>Citizens on Patrol (COP). Volunteers enhance the safety of
\t\t\t\tour community by patrolling in a specially marked vehicle and
\t\t\t\talerting Police of any suspicious activity. This position requires
\t\t\t\ttraining.</li>
\t\t\t<li>Community Emergency Response Teams (CERT). The team assists
\t\t\t\tthe community by providing disaster preparedness education to the
\t\t\t\tpublic through safety fairs, assisting first responders in searching
\t\t\t\tfor missing persons, responding during disasters, and assisting
\t\t\t\temergency services responders. This program is run in collaboration
\t\t\t\twith Denton County.</li>
\t\t\t<li>Fire Rehab. Fire department rehab is a vital firefighting
\t\t\t\tservice at the site of the fire, providing firefighters and other
\t\t\t\temergency personnel with immediate attention including food and
\t\t\t\trehydration, which prevents life threatening conditions like heat
\t\t\t\tstroke or heart attack.</li>
\t\t\t<li>Administrative assistance. Volunteers provide administrative
\t\t\t\tassistance (photocopying, filing, research, etc.) to both the Fire
\t\t\t\tand Police departments.</li>
\t\t\t<li>Special Events. Volunteers assist with setup, security,
\t\t\t\ttraffic control, and event cleanup at town sponsored events and
\t\t\t\tactivities.</li>
\t\t</ul>
\t\t<p>The funding for these programs depends largely on generous
\t\t\tdonations from people like you. Here are some ways you can donate to
\t\t\thelp TCEVA:</p>
\t\t<ul>
\t\t\t<li>Amazon Wishlist. TCEVA needs constant supplies to keep our
\t\t\t\tprograms running as efficiently as possible. <br> Please click
\t\t\t\t<a target=\"_blank\"
\t\t\t\thref=\"https://www.amazon.com/hz/wishlist/ls/2AWD26CXHJYGA/ref=nav_wishlist_lists_1?_encoding=UTF8&type=wishlist\">here</a>
\t\t\t\tto purchase items for us.
\t\t\t</li>
\t\t\t<li>Cash donations. Money collected goes directly to purchasing
\t\t\t\tsupplies, uniforms, equipment, and trainings. <br> To make a
\t\t\t\tcash donation, please click on the link below which will direct you
\t\t\t\tto PayPal.
\t\t\t\t<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\"
\t\t\t\t\ttarget=\"_blank\">
\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\" /> <input
\t\t\t\t\t\ttype=\"hidden\" name=\"hosted_button_id\" value=\"JT4XCM83SJKXG\" /> <input
\t\t\t\t\t\ttype=\"image\"
\t\t\t\t\t\tsrc=\"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif\"
\t\t\t\t\t\tborder=\"0\" name=\"submit\"
\t\t\t\t\t\ttitle=\"PayPal - The safer, easier way to pay online!\"
\t\t\t\t\t\talt=\"Donate with PayPal button\" /> <img alt=\"\" border=\"0\"
\t\t\t\t\t\tsrc=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\"
\t\t\t\t\t\theight=\"1\" />
\t\t\t\t</form>
\t\t\t</li>
\t\t</ul>
\t\t<p>Find us on Facebook at TCEVA-Trophy Club Emergency Volunteer
\t\t\tAssociation 501(c)3.</p>
\t\t<p>Please contact us with any questions about donating or
\t\t\tvolunteering.</p>

\t</div>
{% endblock %}", "pages/help.html.twig", "/Users/vishalkhapre/Documents/Code/TransPortlets/tceta-ts/templates/pages/help.html.twig");
    }
}
