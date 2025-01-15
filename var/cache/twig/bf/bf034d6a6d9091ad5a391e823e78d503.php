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

/* film/update.html.twig */
class __TwigTemplate_27bb964d30f8b454896482ebb1d52299 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/update.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le film : ";
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
        yield "    <h2>Modifier le film</h2>
    <form method=\"POST\" action=\"/film/update?id=";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
        <div class=\"mb-3\">
            <label for=\"title\" class=\"form-label\">Titre</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 14), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Type</label>
            <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 18), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"director\" class=\"form-label\">Réalisateur</label>
            <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 22), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
            <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" rows=\"3\" required>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 26), "html", null, true);
        yield "</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/update.html.twig";
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
        return array (  108 => 26,  101 => 22,  94 => 18,  87 => 14,  80 => 10,  74 => 7,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le film : {{ film.title }}{% endblock %}

{% block content %}
    <h2>Modifier le film</h2>
    <form method=\"POST\" action=\"/film/update?id={{ film.id }}\">
        <div class=\"mb-3\">
            <label for=\"title\" class=\"form-label\">Titre</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"{{ film.title }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" value=\"{{ film.year }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Type</label>
            <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" value=\"{{ film.type }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"director\" class=\"form-label\">Réalisateur</label>
            <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" value=\"{{ film.director }}\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
            <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" rows=\"3\" required>{{ film.synopsis }}</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
    </form>
{% endblock %}
", "film/update.html.twig", "/var/www/filmoteca/src/views/film/update.html.twig");
    }
}
