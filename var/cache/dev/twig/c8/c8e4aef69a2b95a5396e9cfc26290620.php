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

/* pages/timeEntryInstructions.html.twig */
class __TwigTemplate_b123378b36030018db7f5eee24b13496 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/timeEntryInstructions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/timeEntryInstructions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/timeEntryInstructions.html.twig", 1);
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
        yield "<div class=\"main\">
<h2>Instructions on Time Reporting</h2>
<p>
\tTo Report a new Time Activity
\t<ul>
\t\t<li>Click on \"Add New Time Entry\".  A popup form will appear.</li>
\t\t<li>Unless you have Time Admin privileges, your name should already be populated.  Otherwise, select the person's name.</li>
\t\t<li>Select the Activity Type.</li>
\t\t<li>Select the Date the activity occurred</li>
\t\t<li>Enter the hours.  Round to the nearest quarter hour</li>
\t\t<li>(Suggested) Enter a note describing the event/duty</li>
\t\t<li>Hit \"Save\"</li>
\t\t<li>You should now see this item in the list</li>
\t</ul>
</p>
<p>
\tTo Edit an existing Time Activity
\t<ul>
\t\t<li>Find the entry that needs editing in the list</li>
\t\t<li>Click Edit to the right of the item.  A popup form will appear.</li>
\t\t<li>Change the entry as needed</li>
\t\t<li>Hit \"Save\"</li>
\t\t<li>You should new see the updated item in the list</li>
\t</ul>
</p>
<p>
\tTo Delete an existing Time Activity
\t<ul>
\t\t<li>Find the entry that needs editing in the list</li>
\t\t<li>Click Edit to the right of the item.  A popup form will appear.</li>
\t\t<li>Hit \"Delete\"</li>
\t\t<li>You should no longer see that item in the list.</li>
\t</ul>
</p>
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
        return "pages/timeEntryInstructions.html.twig";
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
<div class=\"main\">
<h2>Instructions on Time Reporting</h2>
<p>
\tTo Report a new Time Activity
\t<ul>
\t\t<li>Click on \"Add New Time Entry\".  A popup form will appear.</li>
\t\t<li>Unless you have Time Admin privileges, your name should already be populated.  Otherwise, select the person's name.</li>
\t\t<li>Select the Activity Type.</li>
\t\t<li>Select the Date the activity occurred</li>
\t\t<li>Enter the hours.  Round to the nearest quarter hour</li>
\t\t<li>(Suggested) Enter a note describing the event/duty</li>
\t\t<li>Hit \"Save\"</li>
\t\t<li>You should now see this item in the list</li>
\t</ul>
</p>
<p>
\tTo Edit an existing Time Activity
\t<ul>
\t\t<li>Find the entry that needs editing in the list</li>
\t\t<li>Click Edit to the right of the item.  A popup form will appear.</li>
\t\t<li>Change the entry as needed</li>
\t\t<li>Hit \"Save\"</li>
\t\t<li>You should new see the updated item in the list</li>
\t</ul>
</p>
<p>
\tTo Delete an existing Time Activity
\t<ul>
\t\t<li>Find the entry that needs editing in the list</li>
\t\t<li>Click Edit to the right of the item.  A popup form will appear.</li>
\t\t<li>Hit \"Delete\"</li>
\t\t<li>You should no longer see that item in the list.</li>
\t</ul>
</p>
</div>
{% endblock %}
", "pages/timeEntryInstructions.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/pages/timeEntryInstructions.html.twig");
    }
}
