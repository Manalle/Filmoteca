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

/* fragments/footer.html.twig */
class __TwigTemplate_32bc50e379056b0b92f1ca5caef3bfb9 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<footer class=\"bg-light text-center py-3 mt-auto\">
\t<div class=\"container\">
\t\t<p class=\"mb-0\">&copy;
\t\t\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
\t\t\tFilmoteca. Tous droits réservés.</p>
\t</div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fragments/footer.html.twig";
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
        return array (  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"bg-light text-center py-3 mt-auto\">
\t<div class=\"container\">
\t\t<p class=\"mb-0\">&copy;
\t\t\t{{ \"now\"|date(\"Y\") }}
\t\t\tFilmoteca. Tous droits réservés.</p>
\t</div>
</footer>", "fragments/footer.html.twig", "/var/www/filmoteca/src/views/fragments/footer.html.twig");
    }
}
