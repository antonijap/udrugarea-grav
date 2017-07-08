<?php

/* single-animal.html.twig */
class __TwigTemplate_a2a9cf170d60367688f2972bb8c306e24d1d85219308cff32a5893994a3d43d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "single-animal.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"single-animal\">
    <div class=\"grid-x\">
      <div class=\"cell\">
        ";
        // line 7
        $this->loadTemplate("partials/breadcrumbs.html.twig", "single-animal.html.twig", 7)->display($context);
        // line 8
        echo "        <h1>";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        <h2>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "intro", array());
        echo "</h2>
        <p>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
        ";
        // line 11
        $this->loadTemplate("partials/contact-single-animal.html.twig", "single-animal.html.twig", 11)->display($context);
        // line 12
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "single-animal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  51 => 11,  47 => 10,  43 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
  <div class=\"single-animal\">
    <div class=\"grid-x\">
      <div class=\"cell\">
        {% include 'partials/breadcrumbs.html.twig' %}
        <h1>{{ page.title }}</h1>
        <h2>{{ page.header.intro }}</h2>
        <p>{{ page.content }}</p>
        {% include 'partials/contact-single-animal.html.twig' %}
      </div>
    </div>
  </div>
{% endblock %}
", "single-animal.html.twig", "/Users/antonijapek/Development/Valet/udrugarea-grav/user/themes/rea/templates/single-animal.html.twig");
    }
}
