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

/* home.html.twig */
class __TwigTemplate_53022f797e80560088ec29e1e08262e1b980febaff03a3566b12903ea4983574 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo "Bienvenue";
        
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
        echo "

<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3 text-center \">Bienvenue sur <img src=\"/img/logo.png\" alt=\"logo Symbnb\" class=\"\" ></h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location</p>
        <hr class=\"my-4\">
        <p>Vous êtes en voyage ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
        <p class=\"lead\">
            <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Nos annonces</a>
        </p>
    </div>

    <h2 class=\"h1 my-5\">Nos appartements stars</h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class=\"h1 my-5\">Nos propriétaires stars</h2>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Jean-Marc Cestrières</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar de JMC\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, repellat.</p>
                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Jean-Marc Cestrières</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar de JMC\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, repellat.</p>
                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
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

{% block title %}Bienvenue{% endblock %}

{% block body %}


<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3 text-center \">Bienvenue sur <img src=\"/img/logo.png\" alt=\"logo Symbnb\" class=\"\" ></h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location</p>
        <hr class=\"my-4\">
        <p>Vous êtes en voyage ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
        <p class=\"lead\">
            <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Nos annonces</a>
        </p>
    </div>

    <h2 class=\"h1 my-5\">Nos appartements stars</h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49 &euro; / nuit</strong> <br>
                    <small>Pas encore noté</small>
                </div>

                <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                <div class=\"card-body\">
                    <h4 class=\"card-title\">Appartement de ouf !</h4>
                    <p class=\"card-text\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore odit nesciunt dolor consectetur magni impedit nemo delectus adipisci cum distinctio.</p>
                    <a href=\"#\" class=\"btn btn-warning\">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class=\"h1 my-5\">Nos propriétaires stars</h2>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Jean-Marc Cestrières</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar de JMC\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, repellat.</p>
                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Jean-Marc Cestrières</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar de JMC\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, repellat.</p>
                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
{% endblock %}
", "home.html.twig", "/var/www/html/symbnb/templates/home.html.twig");
    }
}
