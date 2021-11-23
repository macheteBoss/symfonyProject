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

/* /reset_password/footer_links.html.twig */
class __TwigTemplate_a8a7738b7d0d73277320ce87b5a82295d8750d353109a610eb39e0ebf64a4f47 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/reset_password/footer_links.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2), "app_login"))) {
            // line 3
            echo "        <a class = \"special\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            echo "\">Забыли пароль?</a>
    ";
        } else {
            // line 5
            echo "        <a class = \"special\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Авторизация</a>
    ";
        }
        // line 7
        echo "    ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7), "app_register"))) {
            // line 8
            echo "        <a class = \"special\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Регистрация</a>
    ";
        }
        // line 10
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/reset_password/footer_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 8,  57 => 7,  51 => 5,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    {% if app.request.attributes.get('_route') == 'app_login' %}
        <a class = \"special\" href=\"{{ path('app_forgot_password_request') }}\">Забыли пароль?</a>
    {% else %}
        <a class = \"special\" href=\"{{ path('app_login') }}\">Авторизация</a>
    {% endif %}
    {% if app.request.attributes.get('_route') != 'app_register' %}
        <a class = \"special\" href=\"{{ path('app_register') }}\">Регистрация</a>
    {% endif %}
</div>", "/reset_password/footer_links.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/reset_password/footer_links.html.twig");
    }
}
