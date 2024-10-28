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

/* pages/signupInstructions.html.twig */
class __TwigTemplate_4e0fd1f7c0975bc805eed5db908f365b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/signupInstructions.html.twig", 1);
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
        yield "\t<div class=\"main\">
\t<h2>Instructions Signing up for events</h2>
\t<p>
\t\tTo signup for a new Event,
\t\t<ul>
\t\t\t<li>Click on the pencil icon in any day.
\t\t\t\tIf you want to select a day for a different month, click on the < or > symbols next to the month.</li>
\t\t\t<li>In the popup, select the type of action you're signing up for.</li>
\t\t\t<li>In the popup, select the first person's name from the list.
\t\t\t\tTypically this is your name unless you are creating an event for another person.
\t\t\t\t<br>Select the plus icon to the right of the name.</li>
\t\t\t<li>If you want to signup another volunteer, please select their name from the list and hit plus again.</li>
\t\t\t<li>The date is already defined.  Its the date you selected initially</li>
\t\t\t<li>In the Note/Time field, put in the time for the event, or the time range desired.  Please use 24 hour time notation.</li>
\t\t\t<li>Hit \"OK\", to save the event</li>
\t\t\t<li>You should now see a event in the day that you selected. The number by the event is the number of volunteers signed up.</li>
\t\t</ul>
\t</p>
\t<p>
\t\tTo Volunteer for an Existing Event
\t\t<ul>
\t\t\t<li>Click on the link for the event that you would like to join</li>
\t\t\t<li>Add yourself by selecting yourself from the pulldown and clicking the plus icon.</li>
\t\t\t<li>Update if necessary the time frame in the Note/Time field.</li>
\t\t\t<li>Hit \"OK\", to save the update</li>
\t\t</ul>
\t</p>
\t<p>
\t\tTo Cancel an Event
\t\t<ul>
\t\t\t<li>To cancel the entire event, select the event on the calendar and select \"Delete\"</li>
\t\t\t<li>To remove your participation, but leave the event open, simply hit the \"x\" icon next to your name and hit \"OK\".
\t\t\t</li>
\t\t</ul>
\t</p>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/signupInstructions.html.twig";
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
        return array (  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/signupInstructions.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/pages/signupInstructions.html.twig");
    }
}
