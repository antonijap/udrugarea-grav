<?php

/* udomi.html.twig */
class __TwigTemplate_ff4cd45418b626c0857b4ca8b4c7eec5fc6e9675549c9e41d8d80c69c5abf7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "udomi.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'udomi' => array($this, 'block_udomi'),
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
        echo "
  <div class=\"single-page\">
    <!-- Intro Udomi -->
    <div class=\"grid-x\">
      <div class=\"small-12 cell\">
        ";
        // line 9
        $this->loadTemplate("partials/breadcrumbs.html.twig", "udomi.html.twig", 9)->display($context);
        // line 10
        echo "        <h1>";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        <h2>";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "intro", array());
        echo "</h2>
        <p>";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
      </div>
    </div>

    <!-- Udomi -->
    <div class=\"grid-x grid-margin-x gallery\">
      ";
        // line 18
        $this->displayBlock('udomi', $context, $blocks);
        // line 29
        echo "    </div>
  </div>


";
    }

    // line 18
    public function block_udomi($context, array $blocks = array())
    {
        // line 19
        echo "      ";
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 20
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "      <div class=\"small-12 medium-6 large-4 cell\">
        <a href=\"";
            // line 22
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
          <img class=\"thumb\" src=\"";
            // line 23
            echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "thumbnail", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["page"], "title", array());
            echo "\">
        </a>

      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      ";
    }

    public function getTemplateName()
    {
        return "udomi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  87 => 23,  83 => 22,  80 => 21,  75 => 20,  72 => 19,  69 => 18,  61 => 29,  59 => 18,  50 => 12,  46 => 11,  41 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
    <!-- Intro Udomi -->
    <div class=\"grid-x\">
      <div class=\"small-12 cell\">
        {% include 'partials/breadcrumbs.html.twig' %}
        <h1>{{ page.title }}</h1>
        <h2>{{ page.header.intro }}</h2>
        <p>{{ page.content }}</p>
      </div>
    </div>

    <!-- Udomi -->
    <div class=\"grid-x grid-margin-x gallery\">
      {% block udomi %}
      {% set collection = page.collection() %}
      {% for page in collection %}
      <div class=\"small-12 medium-6 large-4 cell\">
        <a href=\"{{ page.url }}\">
          <img class=\"thumb\" src=\"{{ page.header.thumbnail }}\" alt=\"{{ page.title }}\">
        </a>

      </div>
      {% endfor %}
      {% endblock %}
    </div>
  </div>


{% endblock %}
", "udomi.html.twig", "/Users/antonijapek/Development/Valet/udrugarea-grav/user/themes/rea/templates/udomi.html.twig");
    }
}
