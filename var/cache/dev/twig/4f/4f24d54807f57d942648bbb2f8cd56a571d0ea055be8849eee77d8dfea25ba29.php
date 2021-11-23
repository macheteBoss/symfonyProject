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

/* main/index.html.twig */
class __TwigTemplate_34dbc6de8deb9466bfb695b614d45da9772874ca7e009ce3f620d88c0fed7517 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <!--========== SLIDER ==========-->
    ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"container\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 11, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 12
                echo "                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"";
                if ((0 === twig_compare($context["i"], 0))) {
                    echo " class=\"active\"";
                }
                echo "></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 19, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 20
                echo "                <div class=\"item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                    echo " active";
                }
                echo "\">
                    <img class=\"img-responsive\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "imageUrl", [], "any", false, false, false, 21), "html", null, true);
                echo "\" alt=\"Slider Image\">
                    <div class=\"container\">
                        <div class=\"carousel-centered\">
                            <div class=\"margin-b-40\">
                                <h2 class=\"carousel-title\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "</h2>
                                <p class=\"color-white\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
                            </div>
                            ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "button", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                                <p class = \"js_nav-item\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "urlButton", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" class=\"btn-theme btn-theme-sm btn-white-brd text-uppercase\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "titleButton", [], "any", false, false, false, 29), "html", null, true);
                    echo "</a></p>
                            ";
                }
                // line 31
                echo "                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div>
    </div>
    ";
        }
        // line 38
        echo "    <!--========== END SLIDER ==========-->

    <!-- Equipment -->
    ";
        // line 41
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["equipment"]) || array_key_exists("equipment", $context) ? $context["equipment"] : (function () { throw new RuntimeError('Variable "equipment" does not exist.', 41, $this->source); })())), 0))) {
            // line 42
            echo "    <div id=\"about\">
        <div class=\"content-lg container\">
            <!-- Masonry Grid -->
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-xs-6 col-sm-6 col-md-1\"></div>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["equipment"]) || array_key_exists("equipment", $context) ? $context["equipment"] : (function () { throw new RuntimeError('Variable "equipment" does not exist.', 47, $this->source); })()), 0, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["equip"]) {
                // line 48
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["equip"], "allotted", [], "any", false, false, false, 48), false))) {
                    // line 49
                    echo "                        <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                        echo " sm-margin-b-30";
                    }
                    echo "\">
                            <div class=\"";
                    // line 50
                    if (((1 === twig_compare(twig_length_filter($this->env, (isset($context["equipment"]) || array_key_exists("equipment", $context) ? $context["equipment"] : (function () { throw new RuntimeError('Variable "equipment" does not exist.', 50, $this->source); })())), 2)) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50))) {
                        echo "margin-t-60 ";
                    }
                    echo "margin-b-60\">
                                <h2>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "title", [], "any", false, false, false, 51), "html", null, true);
                    echo "</h2>
                                <p>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "description", [], "any", false, false, false, 52), "html", null, true);
                    echo "</p>
                            </div>
                            <img class=\"full-width img-responsive wow fadeInUp\" src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "imageUrl", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" alt=\"Portfolio Image\" data-wow-duration=\".3\" data-wow-delay=\".";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) + 2), "html", null, true);
                    echo "s\">
                        </div>
                    ";
                } else {
                    // line 57
                    echo "                        <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57)) {
                        echo " sm-margin-b-30";
                    }
                    echo "\">
                            <div class=\"margin-b-60\">
                                <img class=\"full-width img-responsive wow fadeInUp\" src=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "imageUrl", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" alt=\"Portfolio Image\" data-wow-duration=\".3\" data-wow-delay=\".";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59) + 2), "html", null, true);
                    echo "s\">
                            </div>
                            <h2>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "</h2>
                            <p>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equip"], "description", [], "any", false, false, false, 62), "html", null, true);
                    echo "</p>
                        </div>
                    ";
                }
                // line 65
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    ";
        }
        // line 71
        echo "    <!-- End Equipment -->

    <!-- Latest Products -->
    <div id=\"products\">
        <div class=\"content-lg container\">
            <div class=\"row margin-b-40\">
                <div class=\"col-sm-6\">
                    <h2>Доступные игры</h2>
                    <p>Не нашли своей игры? Свяжитесь с нами, возможно, мы что-нибудь придумаем.</p>
                </div>
            </div>
            <!--// end row -->

            ";
        // line 84
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 84, $this->source); })())), 0))) {
            // line 85
            echo "            <div class=\"row loadGames\">
                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 87
                echo "                    <div class=\"col-sm-4 sm-margin-b-50 loadGamesItem\">
                        <div class=\"margin-b-20\">
                            <img class=\"img-responsive\" src=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 89), "html", null, true);
                echo "\" alt=\"Latest Products Image\">
                        </div>
                        <h4>
                            <a href=\"javascript:void(0)\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 92), "html", null, true);
                echo "</a>
                            <span class=\"text-uppercase margin-l-20\">";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["product"], "team", [], "any", false, false, false, 93)) {
                    echo "Можно в 2-м";
                } else {
                    echo "Одиночная игра";
                }
                echo "</span>
                        </h4>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            </div>
            <div style = \"margin-top : 50px; text-align: center;\">
                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\" id = \"moreGames\">Показать ещё</button>
            </div>
            ";
        }
        // line 102
        echo "        </div>
    </div>
    <!-- End Latest Products -->

    <div id=\"who\">
        <div class=\"bg-color-sky-light\">
            <div class=\"content-lg container\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-5 md-margin-b-60\">
                        <div class=\"margin-t-50 margin-b-30\">
                            <h2>Почему выбирают нас ?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class=\"list-unstyled footer-list\">
                                <li class=\"footer-list-item\" style = \"margin:20px 0;\"><b>Велком:</b><br><a href=\"tel:375256425924\">+375(25) 642-59-24</a></li>
                                <li class=\"footer-list-item\"><b>МТС:</b><br><a href=\"tel:375292177701\">+375(29) 217-77-01</a></li>
                            </ul>
                        </div>
                        <div class = \"js_nav-item\">
                            <a href=\"#pricing\" class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">Цены</a>
                        </div>
                    </div>
                    ";
        // line 123
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 123, $this->source); })())), 0))) {
            // line 124
            echo "                    <div class=\"col-md-5 col-sm-7 col-md-offset-2\">
                        <!-- Accordion -->
                        <div class=\"accordion\">
                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 128, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 129
                echo "                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\" role=\"tab\" id=\"heading";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 130), "html", null, true);
                echo "\">
                                            <h4 class=\"panel-title\">
                                                <a class=\"panel-title-child\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), "html", null, true);
                echo "\" aria-expanded=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 132)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), "html", null, true);
                echo "\">
                                                    ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, false, 133), "html", null, true);
                echo "
                                                </a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
                echo "\" class=\"panel-collapse collapse";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 137)) {
                    echo " in";
                }
                echo "\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
                echo "\">
                                            <div class=\"panel-body\">
                                                ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "description", [], "any", false, false, false, 139), "html", null, true);
                echo "
                                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                            </div>
                        </div>
                        <!-- End Accodrion -->
                    </div>
                    ";
        }
        // line 149
        echo "                </div>
                <!--// end row -->
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div id=\"pricing\">
        <div class=\"bg-color-sky-light\">
            <div class=\"content-lg container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Цены</h2>
                        <p>Вы можете выбрать любой период аренды. Для точной установки цены, пожалуйста, свяжитесь с нами.</p>
                    </div>
                </div>
                ";
        // line 165
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 165, $this->source); })())), 0))) {
            // line 166
            echo "                <div class=\"row row-space-1\">
                    ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 167, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 168
                echo "                        <div class=\"col-sm-4 sm-margin-b-2\">
                            <!-- Pricing -->
                            <div class=\"pricing";
                // line 170
                if (twig_get_attribute($this->env, $this->source, $context["price"], "allotted", [], "any", false, false, false, 170)) {
                    echo " pricing-active";
                }
                echo "\">
                                <div class=\"margin-b-30\">
                                    <i class=\"pricing-icon icon-chemistry\"></i>
                                    <h3>";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "title", [], "any", false, false, false, 173), "html", null, true);
                echo " <span> - BLR</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 173), "html", null, true);
                echo "</h3>
                                    ";
                // line 174
                if (twig_get_attribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 174)) {
                    // line 175
                    echo "                                        <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "description", [], "any", false, false, false, 175), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 177
                echo "                                </div>
                                <ul class=\"list-unstyled pricing-list margin-b-50\">
                                    ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["price"], "list", [], "any", false, false, false, 179));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 180
                    echo "                                        <li class=\"pricing-list-item\">";
                    echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                                </ul>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                </div>
                ";
        }
        // line 189
        echo "                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Service -->
    <div id=\"service\">
        <div class=\"bg-color-sky-light\" data-auto-height=\"true\">
            <div class=\"content-lg container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Как мы работаем</h2>
                    </div>
                </div>
                <!--// end row -->
                ";
        // line 205
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["conditions"]) || array_key_exists("conditions", $context) ? $context["conditions"] : (function () { throw new RuntimeError('Variable "conditions" does not exist.', 205, $this->source); })())), 0))) {
            // line 206
            echo "                <div class=\"row row-space-1 margin-b-2\">
                    ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conditions"]) || array_key_exists("conditions", $context) ? $context["conditions"] : (function () { throw new RuntimeError('Variable "conditions" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                // line 208
                echo "                        <div class=\"col-sm-4 sm-margin-b-2\">
                            <div class=\"service";
                // line 209
                if (twig_get_attribute($this->env, $this->source, $context["condition"], "allotted", [], "any", false, false, false, 209)) {
                    echo " bg-color-base";
                }
                echo "\" data-height=\"height\">
                                <div class=\"service-element\">
                                    <i class=\"";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "icon", [], "any", false, false, false, 211), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["condition"], "allotted", [], "any", false, false, false, 211)) {
                    echo " color-white";
                }
                echo "\"></i>
                                </div>
                                <div class=\"service-info\">
                                    <h3";
                // line 214
                if (twig_get_attribute($this->env, $this->source, $context["condition"], "allotted", [], "any", false, false, false, 214)) {
                    echo " class=\"color-white\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "title", [], "any", false, false, false, 214), "html", null, true);
                echo "</h3>
                                    ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, $context["condition"], "description", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                                        <p class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["condition"], "allotted", [], "any", false, false, false, 216)) {
                        echo "color-white ";
                    }
                    echo "margin-b-5\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "description", [], "any", false, false, false, 216), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 218
                echo "                                </div>
                                <a href=\"#\" class=\"content-wrapper-link\"></a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                </div>
                ";
        }
        // line 225
        echo "                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Work -->
    <div id=\"work\">
        <div class=\"section-seperator\">
            <div class=\"content-md container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Галерея</h2>
                        <p>Немного мотивации...</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class=\"masonry-grid row\">
                    <div class=\"masonry-grid-sizer col-xs-6 col-sm-6 col-md-1\"></div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/img/800x400/1-big.jpg"), "html", null, true);
        echo "\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/img/397x415/1.jpg"), "html", null, true);
        echo "\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/img/397x300/1.jpg"), "html", null, true);
        echo "\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/img/397x300/2.jpg"), "html", null, true);
        echo "\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/img/397x300/3.jpg"), "html", null, true);
        echo "\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
    </div>
    <!-- End Work -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 406,  765 => 367,  723 => 328,  681 => 289,  639 => 250,  612 => 225,  608 => 223,  598 => 218,  588 => 216,  586 => 215,  578 => 214,  569 => 211,  562 => 209,  559 => 208,  555 => 207,  552 => 206,  550 => 205,  532 => 189,  528 => 187,  518 => 182,  509 => 180,  505 => 179,  501 => 177,  495 => 175,  493 => 174,  487 => 173,  479 => 170,  475 => 168,  471 => 167,  468 => 166,  466 => 165,  448 => 149,  441 => 144,  422 => 139,  411 => 137,  404 => 133,  392 => 132,  387 => 130,  384 => 129,  367 => 128,  361 => 124,  359 => 123,  336 => 102,  329 => 97,  315 => 93,  311 => 92,  305 => 89,  301 => 87,  297 => 86,  294 => 85,  292 => 84,  277 => 71,  270 => 66,  256 => 65,  250 => 62,  246 => 61,  239 => 59,  231 => 57,  223 => 54,  218 => 52,  214 => 51,  208 => 50,  201 => 49,  198 => 48,  181 => 47,  174 => 42,  172 => 41,  167 => 38,  162 => 35,  145 => 31,  137 => 29,  135 => 28,  130 => 26,  126 => 25,  119 => 21,  112 => 20,  95 => 19,  88 => 14,  75 => 12,  71 => 11,  65 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}

    <!--========== SLIDER ==========-->
    {% if slider|length > 0 %}
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"container\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                {% for i in slider|keys %}
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"{{ i }}\"{% if i == 0 %} class=\"active\"{% endif %}></li>
                {% endfor %}
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for slide in slider %}
                <div class=\"item{% if loop.first %} active{% endif %}\">
                    <img class=\"img-responsive\" src=\"{{ slide.imageUrl }}\" alt=\"Slider Image\">
                    <div class=\"container\">
                        <div class=\"carousel-centered\">
                            <div class=\"margin-b-40\">
                                <h2 class=\"carousel-title\">{{ slide.title }}</h2>
                                <p class=\"color-white\">{{ slide.description }}</p>
                            </div>
                            {% if slide.button %}
                                <p class = \"js_nav-item\"><a href=\"{{ slide.urlButton }}\" class=\"btn-theme btn-theme-sm btn-white-brd text-uppercase\">{{ slide.titleButton }}</a></p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}
    <!--========== END SLIDER ==========-->

    <!-- Equipment -->
    {% if equipment|length > 0 %}
    <div id=\"about\">
        <div class=\"content-lg container\">
            <!-- Masonry Grid -->
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-xs-6 col-sm-6 col-md-1\"></div>
                {% for equip in equipment|slice(0, 3) %}
                    {% if equip.allotted == false %}
                        <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4{% if loop.first %} sm-margin-b-30{% endif %}\">
                            <div class=\"{% if equipment|length > 2 and loop.last %}margin-t-60 {% endif %}margin-b-60\">
                                <h2>{{ equip.title }}</h2>
                                <p>{{ equip.description }}</p>
                            </div>
                            <img class=\"full-width img-responsive wow fadeInUp\" src=\"{{ equip.imageUrl }}\" alt=\"Portfolio Image\" data-wow-duration=\".3\" data-wow-delay=\".{{ loop.index + 2 }}s\">
                        </div>
                    {% else %}
                        <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4{% if loop.first %} sm-margin-b-30{% endif %}\">
                            <div class=\"margin-b-60\">
                                <img class=\"full-width img-responsive wow fadeInUp\" src=\"{{ equip.imageUrl }}\" alt=\"Portfolio Image\" data-wow-duration=\".3\" data-wow-delay=\".{{ loop.index + 2 }}s\">
                            </div>
                            <h2>{{ equip.title }}</h2>
                            <p>{{ equip.description }}</p>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    {% endif %}
    <!-- End Equipment -->

    <!-- Latest Products -->
    <div id=\"products\">
        <div class=\"content-lg container\">
            <div class=\"row margin-b-40\">
                <div class=\"col-sm-6\">
                    <h2>Доступные игры</h2>
                    <p>Не нашли своей игры? Свяжитесь с нами, возможно, мы что-нибудь придумаем.</p>
                </div>
            </div>
            <!--// end row -->

            {% if products|length > 0 %}
            <div class=\"row loadGames\">
                {% for product in products %}
                    <div class=\"col-sm-4 sm-margin-b-50 loadGamesItem\">
                        <div class=\"margin-b-20\">
                            <img class=\"img-responsive\" src=\"{{ product.imageUrl }}\" alt=\"Latest Products Image\">
                        </div>
                        <h4>
                            <a href=\"javascript:void(0)\">{{ product.title }}</a>
                            <span class=\"text-uppercase margin-l-20\">{% if product.team %}Можно в 2-м{% else %}Одиночная игра{% endif %}</span>
                        </h4>
                    </div>
                {% endfor %}
            </div>
            <div style = \"margin-top : 50px; text-align: center;\">
                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\" id = \"moreGames\">Показать ещё</button>
            </div>
            {% endif %}
        </div>
    </div>
    <!-- End Latest Products -->

    <div id=\"who\">
        <div class=\"bg-color-sky-light\">
            <div class=\"content-lg container\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-5 md-margin-b-60\">
                        <div class=\"margin-t-50 margin-b-30\">
                            <h2>Почему выбирают нас ?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class=\"list-unstyled footer-list\">
                                <li class=\"footer-list-item\" style = \"margin:20px 0;\"><b>Велком:</b><br><a href=\"tel:375256425924\">+375(25) 642-59-24</a></li>
                                <li class=\"footer-list-item\"><b>МТС:</b><br><a href=\"tel:375292177701\">+375(29) 217-77-01</a></li>
                            </ul>
                        </div>
                        <div class = \"js_nav-item\">
                            <a href=\"#pricing\" class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">Цены</a>
                        </div>
                    </div>
                    {% if faqs|length > 0 %}
                    <div class=\"col-md-5 col-sm-7 col-md-offset-2\">
                        <!-- Accordion -->
                        <div class=\"accordion\">
                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                {% for faq in faqs %}
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\" role=\"tab\" id=\"heading{{ loop.index }}\">
                                            <h4 class=\"panel-title\">
                                                <a class=\"panel-title-child\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\" aria-expanded=\"{% if loop.first %}true{% else %}false{% endif %}\" aria-controls=\"collapse{{ loop.index }}\">
                                                    {{ faq.title }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse{% if loop.first %} in{% endif %}\" role=\"tabpanel\" aria-labelledby=\"heading{{ loop.index }}\">
                                            <div class=\"panel-body\">
                                                {{ faq.description }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <!-- End Accodrion -->
                    </div>
                    {% endif %}
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div id=\"pricing\">
        <div class=\"bg-color-sky-light\">
            <div class=\"content-lg container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Цены</h2>
                        <p>Вы можете выбрать любой период аренды. Для точной установки цены, пожалуйста, свяжитесь с нами.</p>
                    </div>
                </div>
                {% if prices|length > 0 %}
                <div class=\"row row-space-1\">
                    {% for price in prices|slice(0, 3) %}
                        <div class=\"col-sm-4 sm-margin-b-2\">
                            <!-- Pricing -->
                            <div class=\"pricing{% if price.allotted %} pricing-active{% endif %}\">
                                <div class=\"margin-b-30\">
                                    <i class=\"pricing-icon icon-chemistry\"></i>
                                    <h3>{{ price.title }} <span> - BLR</span> {{ price.price }}</h3>
                                    {% if price.description %}
                                        <p>{{ price.description }}</p>
                                    {% endif %}
                                </div>
                                <ul class=\"list-unstyled pricing-list margin-b-50\">
                                    {% for row in price.list %}
                                        <li class=\"pricing-list-item\">{{ row }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    {% endfor %}
                </div>
                {% endif %}
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Service -->
    <div id=\"service\">
        <div class=\"bg-color-sky-light\" data-auto-height=\"true\">
            <div class=\"content-lg container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Как мы работаем</h2>
                    </div>
                </div>
                <!--// end row -->
                {% if conditions|length > 0 %}
                <div class=\"row row-space-1 margin-b-2\">
                    {% for condition in conditions %}
                        <div class=\"col-sm-4 sm-margin-b-2\">
                            <div class=\"service{% if condition.allotted %} bg-color-base{% endif %}\" data-height=\"height\">
                                <div class=\"service-element\">
                                    <i class=\"{{ condition.icon }}{% if condition.allotted %} color-white{% endif %}\"></i>
                                </div>
                                <div class=\"service-info\">
                                    <h3{% if condition.allotted %} class=\"color-white\"{% endif %}>{{ condition.title }}</h3>
                                    {% if condition.description %}
                                        <p class=\"{% if condition.allotted %}color-white {% endif %}margin-b-5\">{{ condition.description }}</p>
                                    {% endif %}
                                </div>
                                <a href=\"#\" class=\"content-wrapper-link\"></a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                {% endif %}
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Work -->
    <div id=\"work\">
        <div class=\"section-seperator\">
            <div class=\"content-md container\">
                <div class=\"row margin-b-40\">
                    <div class=\"col-sm-6\">
                        <h2>Галерея</h2>
                        <p>Немного мотивации...</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class=\"masonry-grid row\">
                    <div class=\"masonry-grid-sizer col-xs-6 col-sm-6 col-md-1\"></div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"{{ asset('/public/img/800x400/1-big.jpg') }}\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"{{ asset('/public/img/397x415/1.jpg') }}\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"{{ asset('/public/img/397x300/1.jpg') }}\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"{{ asset('/public/img/397x300/2.jpg') }}\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class=\"masonry-grid-item col-xs-12 col-sm-6 col-md-4\">
                        <!-- Work -->
                        <div class=\"work work-popup-trigger\">
                            <div class=\"work-overlay\">
                                <img class=\"full-width img-responsive\" src=\"{{ asset('/public/img/397x300/3.jpg') }}\" alt=\"Portfolio Image\">
                            </div>
                            <div class=\"work-popup-overlay\">
                                <div class=\"work-popup-content\">
                                    <a href=\"javascript:void(0);\" class=\"work-popup-close\">Hide</a>
                                    <div class=\"margin-b-30\">
                                        <h3 class=\"margin-b-5\">Art Of Coding</h3>
                                        <span>Clean &amp; Minimalistic Design</span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 work-popup-content-divider sm-margin-b-20\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                <ul class=\"list-inline work-popup-tag\">
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Design,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Coding,</a></li>
                                                    <li class=\"work-popup-tag-item\"><a class=\"work-popup-tag-link\" href=\"#\">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"margin-t-10 sm-margin-t-0\">
                                                <p class=\"margin-b-5\"><strong>Project Leader:</strong> John Doe</p>
                                                <p class=\"margin-b-5\"><strong>Designer:</strong> Alisa Keys</p>
                                                <p class=\"margin-b-5\"><strong>Developer:</strong> Mark Doe</p>
                                                <p class=\"margin-b-5\"><strong>Customer:</strong> Keenthemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
    </div>
    <!-- End Work -->

{% endblock %}
", "main/index.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/main/index.html.twig");
    }
}
