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

/* booking/show.html.twig */
class __TwigTemplate_b34888aae34164b60b698dd6abd9bfa3be0abb8e8fadf5c3c54ee76da3da606b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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

        echo "Réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "ad", [], "any", false, false, false, 7);
        // line 8
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "author", [], "any", false, false, false, 8);
        // line 9
        echo "
<div class=\"container\">
    <h1 class=\"my-5\">Votre réservation (n°";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo ")</h1>

    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13), "get", [0 => "withAlert"], "method", false, false, false, 13)) {
            // line 14
            echo "    
        <div class=\"alert alert-success\">
            <h4 class=\"alert-heading\">Bravo !</h4>
            <p>
                Votre réservation auprès de 
                <strong>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()), "fullName", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
                </strong>
                pour l'annonce
                <strong>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                </strong>
                a bien été prise en compte !
            </p>
        </div>

    ";
        }
        // line 31
        echo "
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "startDate", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 42, $this->source); })()), "endDate", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "duration", [], "any", false, false, false, 44), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Montant total</dt>
                    <dd class=\"col-md-8\">";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 46, $this->source); })()), "amount", [], "any", false, false, false, 46), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 48), "Auncun commentaire")) : ("Auncun commentaire")), "html", null, true);
        echo "</dd>
                </dl>

                <hr>

                <h2 class=\"alert-heading\">Votre hôte</h2>
                <div class=\"row mb-3\">
                    <div class=\"col-3\">
                        <img class=\"avatar avatar-medium\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 56, $this->source); })()), "picture", [], "any", false, false, false, 56), "html", null, true);
        echo "\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 56, $this->source); })()), "fullName", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-9\">
                        <h4>
                            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 60, $this->source); })()), "slug", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 60, $this->source); })()), "fullName", [], "any", false, false, false, 60), "html", null, true);
        echo "</a>
                        </h4>
                        <span class=\"badge badge-primary\">";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 62, $this->source); })()), "ads", [], "any", false, false, false, 62)), "html", null, true);
        echo " annonces</span>
                    </div>
                </div>
                ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65);
        echo "
                <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 66, $this->source); })()), "slug", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Plus d'info sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 66, $this->source); })()), "firstName", [], "any", false, false, false, 66), "html", null, true);
        echo "</a>
            </div>

            <div class=\"alert alert-light\" id=\"comment\">
                <h2 class=\"alert-heading\">Votre avis compte !</h2>
                ";
        // line 71
        if (1 === twig_compare(twig_date_converter($this->env), twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 71, $this->source); })()), "endDate", [], "any", false, false, false, 71)))) {
            // line 72
            echo "                    ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 72, $this->source); })()), "ad", [], "any", false, false, false, 72), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)], "method", false, false, false, 72);
            // line 73
            echo "                    ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 73, $this->source); })()))) {
                // line 74
                echo "                        <blockquote>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 74, $this->source); })()), "content", [], "any", false, false, false, 74), "html", null, true);
                echo "</blockquote>

                        <strong>Note :</strong> ";
                // line 76
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 76)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 76, $this->source); })()), "rating", [], "any", false, false, false, 76)]));
                // line 77
                echo "                    ";
            } else {
                // line 78
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_start');
                echo "
                        ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'widget');
                echo "
                        <button class=\"btn btn-success btn-sm\">Confirmer</button>
                        ";
                // line 81
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet</p>
                
                
                ";
        }
        // line 88
        echo "            </div>

        </div>
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\">Votre hébergement</h2>
                <h4>
                    <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 95, $this->source); })()), "slug", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 95, $this->source); })()), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "</a>
                </h4>
                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 97, $this->source); })()), "coverImage", [], "any", false, false, false, 97), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), "html", null, true);
        echo "\" class=\"img-fluid\">
                ";
        // line 98
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 98, $this->source); })()), "content", [], "any", false, false, false, 98);
        echo "

                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 100, $this->source); })()), "slug", [], "any", false, false, false, 100)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Plus d'information</a>

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
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 100,  282 => 98,  276 => 97,  269 => 95,  260 => 88,  254 => 84,  251 => 83,  246 => 81,  241 => 79,  236 => 78,  233 => 77,  231 => 76,  225 => 74,  222 => 73,  219 => 72,  217 => 71,  207 => 66,  203 => 65,  197 => 62,  190 => 60,  181 => 56,  170 => 48,  165 => 46,  160 => 44,  155 => 42,  150 => 40,  145 => 38,  136 => 31,  124 => 24,  115 => 20,  107 => 14,  105 => 13,  100 => 11,  96 => 9,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Réservation n°{{booking.id}}{% endblock %}

{% block body %}

{% set ad = booking.ad %}
{% set author = ad.author %}

<div class=\"container\">
    <h1 class=\"my-5\">Votre réservation (n°{{booking.id}})</h1>

    {% if app.request.query.get('withAlert') %}
    
        <div class=\"alert alert-success\">
            <h4 class=\"alert-heading\">Bravo !</h4>
            <p>
                Votre réservation auprès de 
                <strong>
                    <a href=\"{{path('user_show', {'slug': author.slug})}}\">{{author.fullName}}</a>
                </strong>
                pour l'annonce
                <strong>
                    <a href=\"{{path('ads_show', {'slug': ad.slug})}}\">{{ad.title}}</a>
                </strong>
                a bien été prise en compte !
            </p>
        </div>

    {% endif %}

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">{{booking.id}}</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">{{booking.startDate | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">{{booking.endDate | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">{{booking.duration}}</dd>
                    <dt class=\"col-md-4\">Montant total</dt>
                    <dd class=\"col-md-8\">{{booking.amount | number_format(2, ',', ' ')}} &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">{{booking.comment | default('Auncun commentaire')}}</dd>
                </dl>

                <hr>

                <h2 class=\"alert-heading\">Votre hôte</h2>
                <div class=\"row mb-3\">
                    <div class=\"col-3\">
                        <img class=\"avatar avatar-medium\" src=\"{{author.picture}}\" alt=\"Avatar de {{author.fullName}}\">
                    </div>
                    <div class=\"col-9\">
                        <h4>
                            <a href=\"{{path('user_show', {'slug': author.slug})}}\">{{author.fullName}}</a>
                        </h4>
                        <span class=\"badge badge-primary\">{{author.ads | length}} annonces</span>
                    </div>
                </div>
                {{author.description | raw}}
                <a href=\"{{path('user_show', {'slug': author.slug})}}\" class=\"btn btn-primary btn-sm\">Plus d'info sur {{author.firstName}}</a>
            </div>

            <div class=\"alert alert-light\" id=\"comment\">
                <h2 class=\"alert-heading\">Votre avis compte !</h2>
                {% if date() > date(booking.endDate) %}
                    {% set comment = booking.ad.commentFromAuthor(app.user) %}
                    {% if comment is not null %}
                        <blockquote>{{comment.content}}</blockquote>

                        <strong>Note :</strong> {% include \"partials/rating.html.twig\" with {'rating': comment.rating} %}
                    {% else %}
                        {{form_start(form)}}
                        {{form_widget(form)}}
                        <button class=\"btn btn-success btn-sm\">Confirmer</button>
                        {{form_end(form)}}
                    {% endif %}
                {% else %}
                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet</p>
                
                
                {% endif %}
            </div>

        </div>
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\">Votre hébergement</h2>
                <h4>
                    <a href=\"{{path('ads_show', {'slug': ad.slug})}}\">{{ad.title}}</a>
                </h4>
                <img src=\"{{ad.coverImage}}\" alt=\"Image de {{ad.title}}\" class=\"img-fluid\">
                {{ad.content | raw}}

                <a href=\"{{path('ads_show', {'slug': ad.slug})}}\" class=\"btn btn-primary btn-sm\">Plus d'information</a>

            </div>
        </div>
    </div>
</div>

{% endblock %}", "booking/show.html.twig", "/var/www/html/symbnb/templates/booking/show.html.twig");
    }
}
