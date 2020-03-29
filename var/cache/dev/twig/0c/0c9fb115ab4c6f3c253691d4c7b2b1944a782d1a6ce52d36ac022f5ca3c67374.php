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

/* admin/partials/header.html.twig */
class __TwigTemplate_e45311b446457a1fa33aaf2625badb0878f5aa964758701ba6ae443de605d120 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 2
        echo "
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info sticky-top\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"/img/logoadmin.png\" alt=\"logo Symbnb\" class=\"logo-mini\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-line\"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_index");
        echo "\">
                        <i class=\"fas fa-hotel\"></i>
                            Annonces
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-folder\"></i>
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        echo "\">
                            <i class=\"fas fa-comments\"></i>
                            Commentaires
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-users\"></i>  
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\"class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" id=\"accountDropdownLink\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "picture", [], "any", false, false, false, 52), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "fullName", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"avatar avatar-mini\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "fullName", [], "any", false, false, false, 52), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                        </div>
                    </li>
                ";
        }
        // line 59
        echo "                </ul>
            </div>
        </nav>

        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 64
            echo "
        <div class=\"container\">
            <div class=\"alert alert-";
            // line 66
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 68
                echo "                    <p>";
                echo $context["message"];
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </div>
        </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 70,  149 => 68,  145 => 67,  141 => 66,  137 => 64,  133 => 63,  127 => 59,  120 => 55,  110 => 52,  106 => 50,  104 => 49,  96 => 44,  79 => 30,  64 => 18,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Barre de navigation admin#}

        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info sticky-top\">
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><img src=\"/img/logoadmin.png\" alt=\"logo Symbnb\" class=\"logo-mini\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-line\"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_ads_index') }}\">
                        <i class=\"fas fa-hotel\"></i>
                            Annonces
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-folder\"></i>
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('admin_comment_index')}}\">
                            <i class=\"fas fa-comments\"></i>
                            Commentaires
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-users\"></i>  
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a href=\"{{path('homepage')}}\" target=\"_blank\"class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" id=\"accountDropdownLink\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{app.user.picture}}\" alt=\"Avatar de {{app.user.fullName}}\" class=\"avatar avatar-mini\"> {{app.user.fullName}}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"{{path('admin_account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
                        </div>
                    </li>
                {% endif %}
                </ul>
            </div>
        </nav>

        {% for label, messages in app.flashes %}

        <div class=\"container\">
            <div class=\"alert alert-{{label}}\">
                {% for message in messages %}
                    <p>{{message | raw}}</p>
                {% endfor %}
            </div>
        </div>
            
        {% endfor %}", "admin/partials/header.html.twig", "/var/www/html/symbnb/templates/admin/partials/header.html.twig");
    }
}
