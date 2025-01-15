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

/* film/list.html.twig */
class __TwigTemplate_9e90099877ac7a065d5692f75ee15441 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des films";
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
        yield "    <h2 class=\"mb-4\">
        <i class=\"fas fa-list\" aria-hidden=\"true\"></i> Liste des films
    </h2>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty(($context["films"] ?? null))) {
            // line 11
            yield "        <p class=\"alert alert-warning\">Aucun film disponible pour le moment.</p>
    ";
        } else {
            // line 13
            yield "        <table class=\"table table-bordered table-hover table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                    <th>Réalisateur</th>
                    <th>Synopsis</th>
                    <th>Ajouté le</th>
                    <th>Modifié le</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["films"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 30
                yield "                    <tr>
                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                        <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                        <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "type", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                        <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "director", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                        <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "synopsis", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                        <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 37), "format", ["d/m/Y H:i"], "method", false, false, false, 37), "html", null, true);
                yield "</td>
                        <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["film"], "updatedAt", [], "any", false, false, false, 38), "format", ["d/m/Y H:i"], "method", false, false, false, 38), "html", null, true);
                yield "</td>
                        <td>
                            <a href=\"/film/delete?id=";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 40), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            </tbody>
        </table>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/list.html.twig";
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
        return array (  152 => 46,  140 => 40,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  104 => 30,  100 => 29,  82 => 13,  78 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des films{% endblock %}

{% block content %}
    <h2 class=\"mb-4\">
        <i class=\"fas fa-list\" aria-hidden=\"true\"></i> Liste des films
    </h2>

    {% if films is empty %}
        <p class=\"alert alert-warning\">Aucun film disponible pour le moment.</p>
    {% else %}
        <table class=\"table table-bordered table-hover table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                    <th>Réalisateur</th>
                    <th>Synopsis</th>
                    <th>Ajouté le</th>
                    <th>Modifié le</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                {% for film in films %}
                    <tr>
                        <td>{{ film.id }}</td>
                        <td>{{ film.title }}</td>
                        <td>{{ film.year }}</td>
                        <td>{{ film.type }}</td>
                        <td>{{ film.director }}</td>
                        <td>{{ film.synopsis }}</td>
                        <td>{{ film.createdAt.format('d/m/Y H:i') }}</td>
                        <td>{{ film.updatedAt.format('d/m/Y H:i') }}</td>
                        <td>
                            <a href=\"/film/delete?id={{ film.id }}\" class=\"btn btn-danger btn-sm\">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "film/list.html.twig", "/var/www/filmoteca/src/views/film/list.html.twig");
    }
}
