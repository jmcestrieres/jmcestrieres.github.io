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

/* ad/show.html.twig */
class __TwigTemplate_cfe350f41683aaa6bd3b58535f8d30f3ec175fdd1ab7c97096fd8db44d0e92d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

<div class=\"ad-title\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "coverImage", [], "any", false, false, false, 8), "html", null, true);
        echo ")\">
    <div class=\"container\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "introduction", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
        <p class=\"h2\">
            <strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "rooms", [], "any", false, false, false, 13), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13), 2, ",", " "), "html", null, true);
        echo " &euro;</strong> par nuit
        </p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Réserver</a>
        ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 16, $this->source); })()), "author", [], "any", false, false, false, 16)))) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\">Modifier l'annonce</a>
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
            echo " ?`)\">Supprimer l'annonce</a>
        ";
        }
        // line 20
        echo "    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">
            ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26);
        echo "

                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "images", [], "any", false, false, false, 30));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 31
            echo "                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) {
                echo "class=\"active\"";
            }
            echo "></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </ol>
                <div class=\"carousel-inner\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "                    <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                echo "active";
            }
            echo "\">
                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block textducarousel\">
                            <h5>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                            <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                </div>

        <hr>

        ";
        // line 57
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 57, $this->source); })()), "comments", [], "any", false, false, false, 57)), 0)) {
            // line 58
            echo "            <h2 class=\"mb-3\">Commentaires de nos voyageurs</h2>
            <div class=\"alert alert-info\">
                <h5 class=\"alert-heading text-center\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                            Note globale donnée par nos voyageurs
                        </div>
                        <div class=\"col\">
                            ";
            // line 66
            $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 66)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 66, $this->source); })()), "avgRatings", [], "any", false, false, false, 66)]));
            // line 67
            echo "                            <br>
                            <small>(Calculée sur ";
            // line 68
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 68, $this->source); })()), "comments", [], "any", false, false, false, 68)), "html", null, true);
            echo " avis)</small>
                        </div>
                    </div>
                </h5>
            </div>
            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 73, $this->source); })()), "comments", [], "any", false, false, false, 73));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 74
                echo "                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 75), "firstName", [], "any", false, false, false, 75), "html", null, true);
                echo "</strong> a dit :
                    <blockquote>
                        ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 77), "html", null, true);
                echo "
                    </blockquote>
                    <strong>Note donnée : </strong> 

                ";
                // line 81
                $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 81)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 81)]));
                // line 82
                echo "
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "        ";
        } else {
            // line 86
            echo "            <h2>Cette annonce n'a pas reçu encore de commentaires ...</h2>
        ";
        }
        // line 88
        echo "
        </div>
        <div class=\"col\">
        ";
        // line 91
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 91, $this->source); })()), "author", [], "any", false, false, false, 91);
        // line 92
        echo "            <div class=\"row\">
                <div class=\"col-3\">
                    <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 95, $this->source); })()), "picture", [], "any", false, false, false, 95), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 95, $this->source); })()), "fullName", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"col\">
                    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 99, $this->source); })()), "slug", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">
                        <h3>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 100, $this->source); })()), "fullName", [], "any", false, false, false, 100), "html", null, true);
        echo "</h3>
                    </a>
                    <span class=\"badge badge-primary\">";
        // line 102
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 102, $this->source); })()), "ads", [], "any", false, false, false, 102)), "html", null, true);
        echo " annonces</span>
                </div>
            </div>
            ";
        // line 105
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105);
        echo "
        </div>
    </div>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 105,  369 => 102,  364 => 100,  360 => 99,  351 => 95,  347 => 94,  343 => 92,  341 => 91,  336 => 88,  332 => 86,  329 => 85,  313 => 82,  311 => 81,  304 => 77,  299 => 75,  296 => 74,  279 => 73,  271 => 68,  268 => 67,  266 => 66,  256 => 58,  254 => 57,  239 => 44,  221 => 40,  217 => 39,  212 => 37,  205 => 36,  188 => 35,  184 => 33,  163 => 31,  146 => 30,  139 => 26,  131 => 20,  124 => 18,  119 => 17,  117 => 16,  113 => 15,  106 => 13,  101 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ad.title}}{% endblock %}

{% block body %}


<div class=\"ad-title\" style=\"background-image: url({{ad.coverImage}})\">
    <div class=\"container\">
        <h1>{{ad.title}}</h1>
        <p>{{ad.introduction}}</p>
        <p class=\"h2\">
            <strong>{{ad.rooms}} chambres</strong> pour <strong>{{ad.price| number_format(2, ',', ' ')}} &euro;</strong> par nuit
        </p>
        <a href=\"{{path('booking_create', {'slug': ad.slug})}}\" class=\"btn btn-primary btn-sm\">Réserver</a>
        {% if app.user and app.user == ad.author %}
        <a href=\"{{path('ads_edit', {'slug': ad.slug})}}\" class=\"btn btn-secondary btn-sm\">Modifier l'annonce</a>
        <a href=\"{{path('ads_delete', {'slug': ad.slug})}}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : {{ad.title}} ?`)\">Supprimer l'annonce</a>
        {% endif %}
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">
            {{ ad.content | raw }}

                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                    {% for image in ad.images %}
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.first %}class=\"active\"{% endif %}></li>
                    {% endfor %}
                    </ol>
                <div class=\"carousel-inner\">
                    {% for image in ad.images %}
                    <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                        <img src=\"{{image.url}}\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block textducarousel\">
                            <h5>{{ ad.title }}</h5>
                            <p>{{ image.caption }}</p>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                </div>

        <hr>

        {% if ad.comments|length > 0 %}
            <h2 class=\"mb-3\">Commentaires de nos voyageurs</h2>
            <div class=\"alert alert-info\">
                <h5 class=\"alert-heading text-center\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                            Note globale donnée par nos voyageurs
                        </div>
                        <div class=\"col\">
                            {% include \"partials/rating.html.twig\" with {'rating': ad.avgRatings} %}
                            <br>
                            <small>(Calculée sur {{ad.comments|length}} avis)</small>
                        </div>
                    </div>
                </h5>
            </div>
            {% for comment in ad.comments %}
                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>{{comment.author.firstName}}</strong> a dit :
                    <blockquote>
                        {{comment.content}}
                    </blockquote>
                    <strong>Note donnée : </strong> 

                {% include \"partials/rating.html.twig\" with {'rating': comment.rating} %}

                </div>
            {% endfor %}
        {% else %}
            <h2>Cette annonce n'a pas reçu encore de commentaires ...</h2>
        {% endif %}

        </div>
        <div class=\"col\">
        {% set a = ad.author %}
            <div class=\"row\">
                <div class=\"col-3\">
                    <a href=\"{{path('user_show', {'slug': a.slug})}}\">
                        <img src=\"{{a.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{a.fullName}}\">
                    </a>
                </div>
                <div class=\"col\">
                    <a href=\"{{path('user_show', {'slug': a.slug})}}\">
                        <h3>{{a.fullName}}</h3>
                    </a>
                    <span class=\"badge badge-primary\">{{a.ads | length}} annonces</span>
                </div>
            </div>
            {{a.description | raw}}
        </div>
    </div>
</div>




{% endblock %}", "ad/show.html.twig", "/var/www/html/symbnb/templates/ad/show.html.twig");
    }
}
