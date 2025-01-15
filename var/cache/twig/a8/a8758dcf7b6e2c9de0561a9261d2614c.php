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

/* film/create.html.twig */
class __TwigTemplate_4ac4af73e0114184508e15016cff7460 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/create.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Créer un film";
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
        yield "    <h2>Créer un nouveau film</h2>
    <form method=\"POST\" action=\"/film/create\">
        
        <div class=\"mb-3\">
            <label for=\"title\" class=\"form-label\">Titre</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required>
        </div>

        <
        <div class=\"mb-3\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" required>
        </div>

        
        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Genre</label>
            <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" required>
        </div>

        
        <div class=\"mb-3\">
            <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
            <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" rows=\"3\" required></textarea>
        </div>

       
        <div class=\"mb-3\">
            <label for=\"director\" class=\"form-label\">Réalisateur</label>
            <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" required>
        </div>

        
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/create.html.twig";
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
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un film{% endblock %}

{% block content %}
    <h2>Créer un nouveau film</h2>
    <form method=\"POST\" action=\"/film/create\">
        
        <div class=\"mb-3\">
            <label for=\"title\" class=\"form-label\">Titre</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required>
        </div>

        <
        <div class=\"mb-3\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input type=\"number\" class=\"form-control\" id=\"year\" name=\"year\" required>
        </div>

        
        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Genre</label>
            <input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" required>
        </div>

        
        <div class=\"mb-3\">
            <label for=\"synopsis\" class=\"form-label\">Synopsis</label>
            <textarea class=\"form-control\" id=\"synopsis\" name=\"synopsis\" rows=\"3\" required></textarea>
        </div>

       
        <div class=\"mb-3\">
            <label for=\"director\" class=\"form-label\">Réalisateur</label>
            <input type=\"text\" class=\"form-control\" id=\"director\" name=\"director\" required>
        </div>

        
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
    </form>
{% endblock %}
", "film/create.html.twig", "/var/www/filmoteca/src/views/film/create.html.twig");
    }
}
