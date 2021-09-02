<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/index.html.twig */
class __TwigTemplate_45e87dd1c4317e61638b05f8b6d62ec95abf176527f20935f22b647aecccd94d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipe index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1 class=\"p-4 text-center text-uppercase text-secondary\">team builder
\t</h1>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<h2 class=\"mb-3\">Ajouter une équipe</h2>
\t\t\t\t\t<form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_ajouter");
        echo "\" method=\"POST\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input class=\"p-1\" type=\"text\" name=\"epuipe_nom\" placeholder=\"ajouter une équipe\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8 \">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th>nom</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h2 class=\"mb-3\">Ajouter une Personne</h1>
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<form class=\"text-center\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_ajouter");
        echo "\" method=\"POST\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<input class=\"p-2 mb-2  form-control\" type=\"text\" name=\"personne_nom\" placeholder=\"nom de la personne\">
\t\t\t\t\t\t\t<input class=\"p-2 form-control mb-3\" type=\"text\" name=\"personne_prenom\" placeholder=\"prenom de la personne\">
\t\t\t\t\t\t\t<select class=\"form-select\" name=\"personne_equipes[]\" id=\"equipe_personnes\" multiple=\"multiple\">
\t\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\" d-grid gap-2 d-md-block\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Ajouter personnes</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th>nom et pernom</th>
\t\t\t\t\t\t\t<th>action</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "fullname", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 76,  203 => 72,  198 => 70,  195 => 69,  191 => 68,  175 => 54,  164 => 52,  160 => 51,  152 => 46,  142 => 38,  132 => 34,  128 => 33,  123 => 31,  120 => 30,  116 => 29,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Equipe index
{% endblock %}

{% block body %}
\t<h1 class=\"p-4 text-center text-uppercase text-secondary\">team builder
\t</h1>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<h2 class=\"mb-3\">Ajouter une équipe</h2>
\t\t\t\t\t<form action=\"{{ path('app_equipe_ajouter') }}\" method=\"POST\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input class=\"p-1\" type=\"text\" name=\"epuipe_nom\" placeholder=\"ajouter une équipe\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-8 \">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th>nom</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for equipe in equipes %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ equipe.nom}}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_equipe_modification',{id:equipe.id}) }}\"><i class=\"fas fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('app_equipe_suppression',{id:equipe.id}) }}\"><i class=\"fas fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h2 class=\"mb-3\">Ajouter une Personne</h1>
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<form class=\"text-center\" action=\"{{ path('app_personne_ajouter') }}\" method=\"POST\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<input class=\"p-2 mb-2  form-control\" type=\"text\" name=\"personne_nom\" placeholder=\"nom de la personne\">
\t\t\t\t\t\t\t<input class=\"p-2 form-control mb-3\" type=\"text\" name=\"personne_prenom\" placeholder=\"prenom de la personne\">
\t\t\t\t\t\t\t<select class=\"form-select\" name=\"personne_equipes[]\" id=\"equipe_personnes\" multiple=\"multiple\">
\t\t\t\t\t\t\t\t{% for equipe in equipes %}
\t\t\t\t\t\t\t\t\t<option value=\"{{equipe.id}}\">{{equipe.nom}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\" d-grid gap-2 d-md-block\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Ajouter personnes</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<th>nom et pernom</th>
\t\t\t\t\t\t\t<th>action</th>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for personne in personnes %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ personne.fullname}}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('app_personne_supprimer',{id:personne.id}) }}\"><i class=\"fas fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

{% endblock %}
", "app/index.html.twig", "C:\\wamp64\\www\\team\\templates\\app\\index.html.twig");
    }
}
