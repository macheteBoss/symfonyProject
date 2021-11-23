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

/* reset_password/check_email.html.twig */
class __TwigTemplate_0a87d36660e1c3bacfbe7ee56904d9b506a08ec0e442fc94197d69cbbe96d77c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Password Reset Email Sent";
        
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
                    <form method=\"post\">
                        <fieldset>
                            <legend>Получение ссылки</legend>
                            <div class = \"margin-b-30\">
                                <p>
                                    На вас адрес электронной почты было отправлено электронное письмо, содержащее ссылку, которую вы можете использовать для сброса пароля.<br>
                                    Внимание! Ссылка истекает через <b>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 18, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 18, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 18), "ResetPasswordBundle"), "html", null, true);
        echo "</b>.
                                </p>
                                <p>Если вы не получили электронное письмо, проверьте папку <b>\"Спам\"</b>.</p>
                                <p>Если ничего не получилось, пожалуйста, напишите нам: <a class = \"special\" href=\"mailto:info@arendapsvtb.by\">info@arendapsvtb.by</a></p>
                            </div>
                            <a href = \"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">Ввести другой Email</a>
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
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  86 => 18,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Password Reset Email Sent{% endblock %}


{% block body %}
    <div id=\"resetPassword\">
        <div class=\"content-profile container\">
            <div class=\"masonry-grid row\">
                <div class=\"masonry-grid-sizer col-sm-3\"></div>
                <div class=\"masonry-grid-item col-sm-6\">
                    <form method=\"post\">
                        <fieldset>
                            <legend>Получение ссылки</legend>
                            <div class = \"margin-b-30\">
                                <p>
                                    На вас адрес электронной почты было отправлено электронное письмо, содержащее ссылку, которую вы можете использовать для сброса пароля.<br>
                                    Внимание! Ссылка истекает через <b>{{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}</b>.
                                </p>
                                <p>Если вы не получили электронное письмо, проверьте папку <b>\"Спам\"</b>.</p>
                                <p>Если ничего не получилось, пожалуйста, напишите нам: <a class = \"special\" href=\"mailto:info@arendapsvtb.by\">info@arendapsvtb.by</a></p>
                            </div>
                            <a href = \"{{ path('app_forgot_password_request') }}\" class=\"btn-theme btn-theme-sm btn-white-bg text-uppercase\">Ввести другой Email</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reset_password/check_email.html.twig", "/home/developer/web/arendapsvtb.by/public_html/templates/reset_password/check_email.html.twig");
    }
}
