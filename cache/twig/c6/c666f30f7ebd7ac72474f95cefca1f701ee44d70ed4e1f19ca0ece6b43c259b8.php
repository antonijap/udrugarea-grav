<?php

/* single-page.html.twig */
class __TwigTemplate_38a88139646b025c3fdd37dc2831c888af4880d46222ed0fc1335cd58a8e2352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "single-page.html.twig", 1);
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
        echo "  <div class=\"single-page\">
    <div class=\"grid-x\">
      <div class=\"cell\">
        ";
        // line 7
        $this->loadTemplate("partials/breadcrumbs.html.twig", "single-page.html.twig", 7)->display($context);
        // line 8
        echo "        <h1>";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        <p>";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "single-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
  <div class=\"single-page\">
    <div class=\"grid-x\">
      <div class=\"cell\">
        {% include 'partials/breadcrumbs.html.twig' %}
        <h1>{{ page.title }}</h1>
        <p>{{ page.content }}</p>
      </div>
    </div>
  </div>
{% endblock %}
", "single-page.html.twig", "/Users/antonijapek/Development/Valet/udrugarea/user/themes/rea/templates/single-page.html.twig");
    }
}
