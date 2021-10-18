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

/* wow/legal.html.twig */
class __TwigTemplate_362b916d4ef853bec3c74c5213a258448db44afb405c0b93ad9cbf760a3d05c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wow/legal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wow/legal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wow/legal.html.twig", 1);
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

        echo "Wow Chronicles - Mentions légales";
        
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
        echo "    <div style=\"width: 60%; display: flex; align-items: center; flex-direction: column; margin-right: 20%; margin-left: 20%\">
        <h1 class=\"centrage\">Mentions légales</h1>
        <h3 class=\"centrage\">En vigueur au 16/10/2021</h3>
        <br>

        <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
        Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
        visiteurs, ci-après l\"\"Utilisateur\", du site wow-chronicle.fr , ci-après le \"Site\", les présentes mentions légales.</p>
        <p>La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.</p>
        <br>

        <h3>ARTICLE 1 - L'EDITEUR</h3>
        <p>L’édition et la direction de la publication du Site est assurée par Axel Salem, domiciliée IUT du
        Limousin, dont le numéro de téléphone est 0618080635, et l'adresse e-mail sitecommuwow@gmail.com.</p>
        <br>

        <h3>ARTICLE 2 - L'HEBERGEUR</h3>
        <p>L'hébergeur du Site est la société OVH, dont le siège social est situé au 2 rue Kellermann - 59100
        Roubaix - France , avec le numéro de téléphone : 1007 + adresse mail de contact</p>
        <br>

        <h3>ARTICLE 3 - ACCES AU SITE</h3>
        <p>Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
        programmée ou non et pouvant découlant d’une nécessité de maintenance.</p>
        <p>En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.</p>
        <br>

        <h3>ARTICLE 4 - COLLECTE DES DONNEES</h3>
        <p>Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
        de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
        et aux libertés.</p>
        <p>En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
        d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
            exerce ce droit :</p>

        <p>Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
        sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
            telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wow/legal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wow Chronicles - Mentions légales{% endblock %}

{% block body %}
    <div style=\"width: 60%; display: flex; align-items: center; flex-direction: column; margin-right: 20%; margin-left: 20%\">
        <h1 class=\"centrage\">Mentions légales</h1>
        <h3 class=\"centrage\">En vigueur au 16/10/2021</h3>
        <br>

        <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
        Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
        visiteurs, ci-après l\"\"Utilisateur\", du site wow-chronicle.fr , ci-après le \"Site\", les présentes mentions légales.</p>
        <p>La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.</p>
        <br>

        <h3>ARTICLE 1 - L'EDITEUR</h3>
        <p>L’édition et la direction de la publication du Site est assurée par Axel Salem, domiciliée IUT du
        Limousin, dont le numéro de téléphone est 0618080635, et l'adresse e-mail sitecommuwow@gmail.com.</p>
        <br>

        <h3>ARTICLE 2 - L'HEBERGEUR</h3>
        <p>L'hébergeur du Site est la société OVH, dont le siège social est situé au 2 rue Kellermann - 59100
        Roubaix - France , avec le numéro de téléphone : 1007 + adresse mail de contact</p>
        <br>

        <h3>ARTICLE 3 - ACCES AU SITE</h3>
        <p>Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
        programmée ou non et pouvant découlant d’une nécessité de maintenance.</p>
        <p>En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.</p>
        <br>

        <h3>ARTICLE 4 - COLLECTE DES DONNEES</h3>
        <p>Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
        de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
        et aux libertés.</p>
        <p>En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
        d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
            exerce ce droit :</p>

        <p>Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
        sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
            telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.</p>
    </div>
{% endblock %}
", "wow/legal.html.twig", "D:\\Fichiers\\Documents\\IUT\\Cours\\Annee_2\\M3104\\TP\\SiteWow\\templates\\wow\\legal.html.twig");
    }
}
