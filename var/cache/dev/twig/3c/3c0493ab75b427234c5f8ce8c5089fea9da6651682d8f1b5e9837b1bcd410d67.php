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

/* base.html.twig */
class __TwigTemplate_df953bc09159ec67f788f693509fc6b27d597e969229a9eca5fa19fe6e5216b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </head>
    <body id=\"body\" data-spy=\"scroll\" data-target=\".header\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link href=\"http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <!-- PAGE LEVEL PLUGIN STYLES -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <!-- THEME STYLES -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- PAGE LEVEL PLUGINS -->
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.easing.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.back-to-top.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.smooth-scroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.wow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/js/swiper.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/masonry/jquery.masonry.pkgd.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/masonry/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U\"></script>

            <!-- PAGE LEVEL SCRIPTS -->
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/wow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/swiper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/google-map.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "
            ";
        // line 86
        $this->displayBlock('main', $context, $blocks);
        // line 87
        echo "
            ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 160
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "                <header class=\"header navbar-fixed-top\">
                    <!-- Navbar -->
                    <nav class=\"navbar\" role=\"navigation\">
                        <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"menu-container js_nav-item\">
                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"toggle-icon\"></span>
                                </button>

                                <!-- Logo -->
                                <div class=\"logo\">
                                    <a class=\"logo-wrap\" href=\"/\">
                                        <img class=\"logo-img logo-img-main\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-new.png"), "html", null, true);
        echo "\" alt=\"Asentus Logo\">
                                    </a>
                                </div>
                                <!-- End Logo -->
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class=\"collapse navbar-collapse nav-collapse\">
                                <div class=\"menu-container\">
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#body\">Начало</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#about\">Комплект</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#products\">Игры</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#who\">Почему мы?</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#pricing\">Цены</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#work\">Галерея</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Navbar Collapse -->
                        </div>
                    </nav>
                    <!-- Navbar -->
                </header>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "                <footer class=\"footer\">
                    <!-- Links -->
                    <div class=\"section-seperator\">
                        <div class=\"content-md container\">
                            <div class=\"row\">
                                <div class=\"col-sm-2 sm-margin-b-30\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#body\">Начало</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#about\">Комплект</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#products\">Игры</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#who\">Почему мы?</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#pricing\">Цены</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#work\">Галерея</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class=\"col-sm-2 sm-margin-b-30\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"footer-list-item\"><a href=\"#\" target=\"_blank\">Instagram</a></li>
                                        <li class=\"footer-list-item\"><a href=\"#\" target=\"_blank\">Группа VK</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class=\"col-sm-3\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"footer-list-item\"><b>Велком:</b><br><a href=\"tel:375256425924\">+375(25) 642-59-24</a></li>
                                        <li class=\"footer-list-item\"><b>МТС:</b><br><a href=\"tel:375292177701\">+375(29) 217-77-01</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!-- End Links -->

                    <!-- Copyright -->
                    <div class=\"content container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <img class=\"footer-logo\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-new.png"), "html", null, true);
        echo "\" alt=\"Aitonepage Logo\">
                            </div>
                            <div class=\"col-xs-6 text-right\">
                                <p class=\"margin-b-0\">ИП “Семейников А.А”. Регистрационный номер: 391833110</p>
                                <p>@ 2021</p>
                            </div>
                        </div>
                        <!--// end row -->
                    </div>
                    <!-- End Copyright -->
                </footer>
                <!--========== END FOOTER ==========-->

                <!-- Back To Top -->
                <a href=\"javascript:void(0);\" class=\"js-back-to-top back-to-top\">Top</a>

                <script>
                    \$(document).ready(function () {
                        var size_item = \$(\".loadGames .loadGamesItem\").size();
                        var countItemsLoad = 6;
                        \$('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
                        \$('#moreGames').click(function () {
                            countItemsLoad = (countItemsLoad + 3 <= size_item) ? countItemsLoad + 3 : size_item;
                            \$('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
                        });
                    });
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  355 => 132,  310 => 89,  303 => 88,  291 => 86,  259 => 60,  243 => 46,  236 => 45,  229 => 160,  227 => 88,  224 => 87,  222 => 86,  219 => 85,  216 => 45,  209 => 44,  200 => 40,  196 => 39,  192 => 38,  188 => 37,  184 => 36,  177 => 32,  173 => 31,  169 => 30,  165 => 29,  161 => 28,  157 => 27,  153 => 26,  147 => 23,  143 => 22,  138 => 21,  131 => 20,  122 => 18,  116 => 15,  112 => 14,  106 => 11,  102 => 10,  99 => 9,  92 => 8,  79 => 5,  70 => 161,  68 => 44,  64 => 42,  61 => 20,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
        {% block stylesheets %}
            <link href=\"http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

            <!-- PAGE LEVEL PLUGIN STYLES -->
            <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('vendor/swiper/css/swiper.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

            <!-- THEME STYLES -->
            <link href=\"{{ asset('css/layout.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('vendor/jquery.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/jquery-migrate.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

            <!-- PAGE LEVEL PLUGINS -->
            <script src=\"{{ asset('vendor/jquery.easing.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/jquery.back-to-top.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/jquery.smooth-scroll.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/jquery.wow.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U\"></script>

            <!-- PAGE LEVEL SCRIPTS -->
            <script src=\"{{ asset('js/layout.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('js/components/wow.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('js/components/swiper.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('js/components/masonry.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('js/components/google-map.min.js') }}\" type=\"text/javascript\"></script>
        {% endblock %}
    </head>
    <body id=\"body\" data-spy=\"scroll\" data-target=\".header\">
        {% block body %}
            {% block header %}
                <header class=\"header navbar-fixed-top\">
                    <!-- Navbar -->
                    <nav class=\"navbar\" role=\"navigation\">
                        <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"menu-container js_nav-item\">
                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"toggle-icon\"></span>
                                </button>

                                <!-- Logo -->
                                <div class=\"logo\">
                                    <a class=\"logo-wrap\" href=\"/\">
                                        <img class=\"logo-img logo-img-main\" src=\"{{ asset('img/logo-new.png') }}\" alt=\"Asentus Logo\">
                                    </a>
                                </div>
                                <!-- End Logo -->
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class=\"collapse navbar-collapse nav-collapse\">
                                <div class=\"menu-container\">
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#body\">Начало</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#about\">Комплект</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#products\">Игры</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#who\">Почему мы?</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#pricing\">Цены</a></li>
                                        <li class=\"js_nav-item nav-item\"><a class=\"nav-item-child nav-item-hover\" href=\"#work\">Галерея</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Navbar Collapse -->
                        </div>
                    </nav>
                    <!-- Navbar -->
                </header>
            {% endblock %}

            {% block main %}{% endblock %}

            {% block footer %}
                <footer class=\"footer\">
                    <!-- Links -->
                    <div class=\"section-seperator\">
                        <div class=\"content-md container\">
                            <div class=\"row\">
                                <div class=\"col-sm-2 sm-margin-b-30\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#body\">Начало</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#about\">Комплект</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#products\">Игры</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#who\">Почему мы?</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#pricing\">Цены</a></li>
                                        <li class=\"js_nav-item footer-list-item\"><a href=\"#work\">Галерея</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class=\"col-sm-2 sm-margin-b-30\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"footer-list-item\"><a href=\"#\" target=\"_blank\">Instagram</a></li>
                                        <li class=\"footer-list-item\"><a href=\"#\" target=\"_blank\">Группа VK</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class=\"col-sm-3\">
                                    <!-- List -->
                                    <ul class=\"list-unstyled footer-list\">
                                        <li class=\"footer-list-item\"><b>Велком:</b><br><a href=\"tel:375256425924\">+375(25) 642-59-24</a></li>
                                        <li class=\"footer-list-item\"><b>МТС:</b><br><a href=\"tel:375292177701\">+375(29) 217-77-01</a></li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!-- End Links -->

                    <!-- Copyright -->
                    <div class=\"content container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <img class=\"footer-logo\" src=\"{{ asset('img/logo-new.png') }}\" alt=\"Aitonepage Logo\">
                            </div>
                            <div class=\"col-xs-6 text-right\">
                                <p class=\"margin-b-0\">ИП “Семейников А.А”. Регистрационный номер: 391833110</p>
                                <p>@ 2021</p>
                            </div>
                        </div>
                        <!--// end row -->
                    </div>
                    <!-- End Copyright -->
                </footer>
                <!--========== END FOOTER ==========-->

                <!-- Back To Top -->
                <a href=\"javascript:void(0);\" class=\"js-back-to-top back-to-top\">Top</a>

                <script>
                    \$(document).ready(function () {
                        var size_item = \$(\".loadGames .loadGamesItem\").size();
                        var countItemsLoad = 6;
                        \$('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
                        \$('#moreGames').click(function () {
                            countItemsLoad = (countItemsLoad + 3 <= size_item) ? countItemsLoad + 3 : size_item;
                            \$('.loadGames .loadGamesItem:lt('+ countItemsLoad +')').show();
                        });
                    });
                </script>
            {% endblock %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/base.html.twig");
    }
}
