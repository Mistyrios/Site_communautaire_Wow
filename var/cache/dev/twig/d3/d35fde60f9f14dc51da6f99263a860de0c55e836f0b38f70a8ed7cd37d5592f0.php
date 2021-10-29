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

/* search/index.html.twig */
class __TwigTemplate_36330f6f622b705a7f56282039417f54d47f8ebea17d59023c825a06c75bcc48 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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

        echo "Wow Chronicles - Résultat de la recherche";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "method", [], "any", false, false, false, 6) == "POST")) {
            // line 7
            echo "        <div>
            ";
            // line 8
            if ((twig_length_filter($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 8, $this->source); })())) == 0)) {
                // line 9
                echo "                <h4>Aucun résulat pour votre recherche.</h4>
            ";
            } else {
                // line 11
                echo "                <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 13
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tag"], "articles", [], "any", false, false, false, 13));
                    foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                        // line 14
                        echo "                        <article style=\"display: flex; align-items: center; flex-direction: column\">
                            <h2>";
                        // line 15
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 15), "html", null, true);
                        echo "</h2>
                            <div class=\"metadata espaceCustom\">Ecrit le ";
                        // line 16
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 16), "d/m/y"), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 16), "H:i"), "html", null, true);
                        echo " dans la catégorie ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
                        echo "</div>
                            <div class=\"content\" style=\"display: flex; align-items: center; flex-direction: column\">
                                <img src=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 18)), "thumbnail1"), "html", null, true);
                        echo "\" alt=\"\" style=\"width: 40%\" class=\"espaceCustom\">
                                <div style=\"display: flex; flex-direction: row\">
                                    <p>Tags de l'article :&nbsp</p>
                                    ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "tags", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                            // line 22
                            echo "                                        <p style=\"color: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "couleur", [], "any", false, false, false, 22), "html", null, true);
                            echo "\">#";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 22), "html", null, true);
                            echo "&nbsp</p>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "                                </div>
                                <p>";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 25)), "truncate", [0 => 100, 1 => "[...]", 2 => false], "method", false, false, false, 25);
                        echo "</p>
                                <a href=\"";
                        // line 26
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Lire la suite</a>
                            </div>
                        </article>
                        <hr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tag"], "videos", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                        // line 32
                        echo "                        <article style=\"display: flex; align-items: center; flex-direction: column\">
                            <h2>";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "titre", [], "any", false, false, false, 33), "html", null, true);
                        echo "</h2>
                            <div class=\"metadata espaceCustom\">Ecrit le ";
                        // line 34
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "postedAt", [], "any", false, false, false, 34), "d/m/y"), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "postedAt", [], "any", false, false, false, 34), "H:i"), "html", null, true);
                        echo " dans la catégorie ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "type", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                        echo "</div>
                            <div class=\"content\" style=\"display: flex; align-items: center; flex-direction: column\">
                                <iframe class=\"espaceCustom\" width=\"560\" height=\"315\" src=\"";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "lien", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" title=\"YouTube video player\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div style=\"display: flex; flex-direction: row\">
                                    <p>Tags de la vidéo :&nbsp</p>
                                    ";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["video"], "tags", [], "any", false, false, false, 39));
                        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                            // line 40
                            echo "                                        <p style=\"color: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "couleur", [], "any", false, false, false, 40), "html", null, true);
                            echo "\">#";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", [], "any", false, false, false, 40), "html", null, true);
                            echo "&nbsp</p>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                                </div>
                                <p>Auteur : ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "auteur", [], "any", false, false, false, 43), "html", null, true);
                        echo "</p>
                                <p>";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 44)), "truncate", [0 => 100, 1 => "[...]", 2 => false], "method", false, false, false, 44);
                        echo "</p>
                                <a href=\"";
                        // line 45
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_video", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Lire la suite</a>
                            </div>
                        </article>
                        <hr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            ";
            }
            // line 52
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 52,  237 => 51,  231 => 50,  220 => 45,  216 => 44,  212 => 43,  209 => 42,  198 => 40,  194 => 39,  188 => 36,  179 => 34,  175 => 33,  172 => 32,  167 => 31,  156 => 26,  152 => 25,  149 => 24,  138 => 22,  134 => 21,  128 => 18,  119 => 16,  115 => 15,  112 => 14,  107 => 13,  103 => 12,  100 => 11,  96 => 9,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wow Chronicles - Résultat de la recherche{% endblock %}

{% block body %}
    {% if app.request.method == 'POST' %}
        <div>
            {% if tags | length == 0 %}
                <h4>Aucun résulat pour votre recherche.</h4>
            {% else %}
                <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
                {% for tag in tags %}
                    {% for article in tag.articles %}
                        <article style=\"display: flex; align-items: center; flex-direction: column\">
                            <h2>{{ article.titre}}</h2>
                            <div class=\"metadata espaceCustom\">Ecrit le {{ article.createdAt | date('d/m/y') }} à {{ article.createdAt | date('H:i') }} dans la catégorie {{ article.type.nom }}</div>
                            <div class=\"content\" style=\"display: flex; align-items: center; flex-direction: column\">
                                <img src=\"{{ asset(article.image) | imagine_filter('thumbnail1') }}\" alt=\"\" style=\"width: 40%\" class=\"espaceCustom\">
                                <div style=\"display: flex; flex-direction: row\">
                                    <p>Tags de l'article :&nbsp</p>
                                    {% for tag in article.tags %}
                                        <p style=\"color: {{ tag.couleur }}\">#{{ tag.nom }}&nbsp</p>
                                    {% endfor %}
                                </div>
                                <p>{{ article.contenu | u.truncate(100,'[...]',false) | raw }}</p>
                                <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-primary\">Lire la suite</a>
                            </div>
                        </article>
                        <hr>
                    {% endfor %}
                    {% for video in tag.videos %}
                        <article style=\"display: flex; align-items: center; flex-direction: column\">
                            <h2>{{ video.titre}}</h2>
                            <div class=\"metadata espaceCustom\">Ecrit le {{ video.postedAt | date('d/m/y') }} à {{ video.postedAt | date('H:i') }} dans la catégorie {{ video.type.nom }}</div>
                            <div class=\"content\" style=\"display: flex; align-items: center; flex-direction: column\">
                                <iframe class=\"espaceCustom\" width=\"560\" height=\"315\" src=\"{{ video.lien }}\" title=\"YouTube video player\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div style=\"display: flex; flex-direction: row\">
                                    <p>Tags de la vidéo :&nbsp</p>
                                    {% for tag in video.tags %}
                                        <p style=\"color: {{ tag.couleur }}\">#{{ tag.nom }}&nbsp</p>
                                    {% endfor %}
                                </div>
                                <p>Auteur : {{ video.auteur }}</p>
                                <p>{{ video.description | u.truncate(100,'[...]',false) | raw }}</p>
                                <a href=\"{{ path('show_video', {'id': video.id}) }}\" class=\"btn btn-primary\">Lire la suite</a>
                            </div>
                        </article>
                        <hr>
                    {% endfor %}
                {% endfor %}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}
", "search/index.html.twig", "D:\\Fichiers\\Documents\\IUT\\Cours\\Annee_2\\M3104\\TP\\SiteWow\\templates\\search\\index.html.twig");
    }
}
