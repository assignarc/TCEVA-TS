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

/* pages/mission.html.twig */
class __TwigTemplate_40e9f2318d7f5c9ba0ec8435fac8e766 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/mission.html.twig", 1);
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
        yield "<div class=\"main\">
\t<div class=\"title\">Trophy Club Emergency Volunteer Association</div>
\t\t<p>The Trophy Club Emergency Volunteer Association (TCEVA) serves
\t\t\tunder the umbrellas of both the Trophy Club Police and Fire
\t\t\tDepartments. It is a 501(c)(3) organization that utilizes its funds
\t\t\tto support Trophy Club’s first responders through the purchase of
\t\t\tequipment, supplies, and trainings, as well as participation in
\t\t\tvarious programs. Some of these programs include:</p>
\t\t<ul>
\t\t\t<li>Traffic control</li>
\t\t\t<li>Citizen on Patrol (COP) Volunteers enhance the safety of our
\t\t\t\tcommunity by patrolling in a specially marked vehicle and alerting
\t\t\t\tthe Police of any suspicious activity. This position requires
\t\t\t\ttraining.</li>
\t\t\t<li>Community Emergency Response Teams (CERT)</li>
\t\t\t<li>First Responder Rehab (REHAB)</li>
\t\t</ul>
\t\t<p>Our volunteers either live or work in Trophy Club and come from
\t\t\tvarious professional and personal backgrounds. Many of us have
\t\t\tadditional training and certifications, which allow us to volunteer
\t\t\tin several different programs while assisting the town with
\t\t\temergencies and public events.</p>
\t\t<p>Membership is contingent upon passing a background check. All
\t\t\tmembers are expected to follow the Volunteer Code of Conduct as
\t\t\tdefined in the TCEVA policies, and membership will continue at the
\t\t\tdiscretion of the Trophy Club Police chief and Fire Chief.</p>
\t\t<p>
\t\t\tA membership application is available <a
\t\t\t\thref=\"../images/TCEVAMembershipApplication.pdf\" >Here</a>
\t\t</p>
\t\t<br>
\t\t<p>Our mission statement:</p>
\t\t<p>To support and assist the Trophy Club Police Department and
\t\t\tFire Department, promote public awareness and education by serving as
\t\t\tambassadors of the Trophy Club Police Department and Fire Department
\t\t\tto the public and to other agencies, and promote a safe environment
\t\t\tfor First Responders and Residents through service and activities.</p>

\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/mission.html.twig";
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
        return new Source("", "pages/mission.html.twig", "/Users/vishalkhapre/Documents/Code/TCEVA/TCEVA-TS/templates/pages/mission.html.twig");
    }
}
