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

/* film/read.html.twig */
class __TwigTemplate_fc744eadffedefc7081fe1d17ed9ba33 extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/read.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détails du film : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <h2>Détails du film</h2>

    <dl class=\"row\">
        <dt class=\"col-sm-3\">Titre</dt>
        <dd class=\"col-sm-9\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Année</dt>
        <dd class=\"col-sm-9\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 13), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Genre</dt>
        <dd class=\"col-sm-9\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 16), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Réalisateur</dt>
        <dd class=\"col-sm-9\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 19), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Synopsis</dt>
        <dd class=\"col-sm-9\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 22), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Ajouté le</dt>
        <dd class=\"col-sm-9\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 25), "format", ["d/m/Y H:i"], "method", false, false, false, 25), "html", null, true);
        yield "</dd>

        <dt class=\"col-sm-3\">Modifié le</dt>
        <dd class=\"col-sm-9\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "updatedAt", [], "any", false, false, false, 28), "format", ["d/m/Y H:i"], "method", false, false, false, 28), "html", null, true);
        yield "</dd>
    </dl>

    <a href=\"/film/list\" class=\"btn btn-secondary\">Retour à la liste</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/read.html.twig";
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
        return array (  113 => 28,  107 => 25,  101 => 22,  95 => 19,  89 => 16,  83 => 13,  77 => 10,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du film : {{ film.title }}{% endblock %}

{% block content %}
    <h2>Détails du film</h2>

    <dl class=\"row\">
        <dt class=\"col-sm-3\">Titre</dt>
        <dd class=\"col-sm-9\">{{ film.title }}</dd>

        <dt class=\"col-sm-3\">Année</dt>
        <dd class=\"col-sm-9\">{{ film.year }}</dd>

        <dt class=\"col-sm-3\">Genre</dt>
        <dd class=\"col-sm-9\">{{ film.type }}</dd>

        <dt class=\"col-sm-3\">Réalisateur</dt>
        <dd class=\"col-sm-9\">{{ film.director }}</dd>

        <dt class=\"col-sm-3\">Synopsis</dt>
        <dd class=\"col-sm-9\">{{ film.synopsis }}</dd>

        <dt class=\"col-sm-3\">Ajouté le</dt>
        <dd class=\"col-sm-9\">{{ film.createdAt.format('d/m/Y H:i') }}</dd>

        <dt class=\"col-sm-3\">Modifié le</dt>
        <dd class=\"col-sm-9\">{{ film.updatedAt.format('d/m/Y H:i') }}</dd>
    </dl>

    <a href=\"/film/list\" class=\"btn btn-secondary\">Retour à la liste</a>
{% endblock %}
", "film/read.html.twig", "/var/www/filmoteca/src/views/film/read.html.twig");
    }
}
