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

/* security/login.html.twig */
class __TwigTemplate_b2916b43c3934a55341b80472115b9fa8351f6f17d1474b8770b6bac6a9c1d3d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"login\">
        <div class=\"content-profile container\">
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-sm-3\"></div>
                <div class=\"masonry-grid-item col-sm-6\">
                    <form method=\"post\">
                        <fieldset>
                            <legend>Заполните данные для входа</legend>
                            ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 17
        echo "
                            <div class=\"form-group\">
                                <label for=\"inputUsername\">Логин</label>
                                <input type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputPassword\">Пароль</label>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                            </div>

                            <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", [0 => "redirect_to"], "method", false, false, false, 27), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >

                            <div class=\"form-check margin-b-30\">
                                <input type=\"checkbox\" class=\"form-check-input\" name = \"_remember_me\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Запомнить меня</label>
                            </div>

                            <div class=\"margin-b-20\">
                                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\" type=\"submit\">
                                    Войти
                                </button>
                            </div>

                            ";
        // line 43
        $this->loadTemplate("/reset_password/footer_links.html.twig", "security/login.html.twig", 43)->display($context);
        // line 44
        echo "
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  128 => 43,  111 => 29,  106 => 27,  96 => 20,  91 => 17,  85 => 15,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <div id=\"login\">
        <div class=\"content-profile container\">
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-sm-3\"></div>
                <div class=\"masonry-grid-item col-sm-6\">
                    <form method=\"post\">
                        <fieldset>
                            <legend>Заполните данные для входа</legend>
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            <div class=\"form-group\">
                                <label for=\"inputUsername\">Логин</label>
                                <input type=\"text\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputPassword\">Пароль</label>
                                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                            </div>

                            <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.get('redirect_to') }}\"/>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >

                            <div class=\"form-check margin-b-30\">
                                <input type=\"checkbox\" class=\"form-check-input\" name = \"_remember_me\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Запомнить меня</label>
                            </div>

                            <div class=\"margin-b-20\">
                                <button class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\" type=\"submit\">
                                    Войти
                                </button>
                            </div>

                            {% include('/reset_password/footer_links.html.twig') %}

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/security/login.html.twig");
    }
}
