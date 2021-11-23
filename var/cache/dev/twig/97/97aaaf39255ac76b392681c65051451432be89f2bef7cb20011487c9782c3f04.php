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

/* reset_password/request.html.twig */
class __TwigTemplate_79bf0d3502079f7325dd136ba0a44fd869be66dce4b4870593d4f2f94f8fbb24 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 2, $this->source); })()), [0 => "fields.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reset your password";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div id=\"resetPassword\">
        <div class=\"content-profile container\">
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-sm-3\"></div>
                <div class=\"masonry-grid-item col-sm-6\">
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                        <fieldset>
                            <legend>Сбросить пароль</legend>
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 16
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'row');
        echo "
                            <div class = \"margin-b-30\">
                                <small>
                                    Введите свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля.
                                </small>
                            </div>
                            <div class = \"margin-b-20\">
                                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">
                                    Отправить ссылку
                                </button>
                            </div>

                            ";
        // line 30
        $this->loadTemplate("/reset_password/footer_links.html.twig", "reset_password/request.html.twig", 30)->display($context);
        // line 31
        echo "
                        </fieldset>
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  120 => 31,  118 => 30,  102 => 18,  93 => 16,  89 => 15,  83 => 12,  76 => 7,  69 => 6,  56 => 4,  48 => 1,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme requestForm 'fields.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block body %}
    <div id=\"resetPassword\">
        <div class=\"content-profile container\">
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-sm-3\"></div>
                <div class=\"masonry-grid-item col-sm-6\">
                    {{ form_start(requestForm) }}
                        <fieldset>
                            <legend>Сбросить пароль</legend>
                            {% for flashError in app.flashes('reset_password_error') %}
                                <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
                            {% endfor %}
                            {{ form_row(requestForm.email) }}
                            <div class = \"margin-b-30\">
                                <small>
                                    Введите свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля.
                                </small>
                            </div>
                            <div class = \"margin-b-20\">
                                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">
                                    Отправить ссылку
                                </button>
                            </div>

                            {% include('/reset_password/footer_links.html.twig') %}

                        </fieldset>
                    {{ form_end(requestForm) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "reset_password/request.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/reset_password/request.html.twig");
    }
}
