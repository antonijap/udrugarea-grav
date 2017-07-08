<?php

/* base.html.twig */
class __TwigTemplate_0d608f5580099cdd62e14a9e085c90bf9f2b100af4032650d27ce6a21e16b70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
</head>

<body>
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "  ";
        $this->loadTemplate("partials/analytics.html.twig", "base.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 32)->display($context);
        // line 33
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "seo", array()), "enabled", array())) {
            // line 16
            echo "    ";
            $this->loadTemplate("partials/seo_data.html.twig", "base.html.twig", 16)->display($context);
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/app.css"), "method");
        // line 21
        echo "    ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  105 => 29,  101 => 21,  98 => 20,  95 => 19,  87 => 22,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  65 => 12,  58 => 7,  55 => 6,  49 => 33,  46 => 32,  43 => 31,  41 => 29,  35 => 25,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>

{% block head %}
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% if config.plugins.seo.enabled %}
    {% include 'partials/seo_data.html.twig' %}
    {% endif %}

    {% block stylesheets %}
        {% do assets.addCss('theme://css/app.css') %}
    {% endblock %}
    {{ assets.css() }}

{% endblock head %}

</head>

<body>
  {% block content %}
  {% endblock %}
  {% include 'partials/analytics.html.twig' %}
  {% include 'partials/footer.html.twig' %}
</body>
</html>
", "base.html.twig", "/Users/antonijapek/Development/Valet/udrugarea-grav/user/themes/rea/templates/base.html.twig");
    }
}
