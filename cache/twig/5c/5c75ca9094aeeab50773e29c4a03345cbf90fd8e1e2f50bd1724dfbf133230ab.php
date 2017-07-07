<?php

/* home.html.twig */
class __TwigTemplate_a0126d597d1554100856e3b02cd194a9682b3fc6a8560daf873f8cf3a7d994e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        echo "<div class=\"intro\">
    <div class=\"grid-x\">
        <div class=\"small-12 cell\">
            <img src=\"images/logo.svg\" class=\"logo\" alt=\"Udruga Rea\">
        </div>
        <div class=\"small-12 cell\">
            <h1>Rea</h1>
        </div>
        <div class=\"cell\">
            <h2>Udruga Rea je registrirana neprofitna nevladina organizacija, skupina volontera čiji je cilj udomljavanje napuštenih pasa i mačaka grada Samobora i okolice.</h2>
        </div>
        <div class=\"cell\" style=\"margin-top: 2.5em;\">
            <a href=\"/udomi\" class=\"button text-center\">Udomi</a>
            <a href=\"/doniraj\" class=\"hollow button text-center\">Doniraj</a>
        </div>
    </div>
</div>

<div class=\"grid-x dark align-justify align-middle\">
    <div class=\"small-12 medium-12 large-4 cell info-box\">
        <h3>Postani kuma ili kum</h3>
        <p>Idealno za one koji ne mogu udomiti, a žele pomoći.</p>
        <a href=\"kumstvo\" class=\"hollow button\">Želim biti kuma</a>

        <h3>Tražimo čuvalice</h3>
        <p>Nemamo sklonište, ovisimo o čuvalicama. Udruga osigurava sve što je potrebno za našeg štićenika.</p>
        <a href=\"cuvalice\" class=\"hollow button\">Želim biti čuvalica</a>
    </div>

    <div class=\"auto cell show-for-large align-self-stretch\">
        <img src=\"/images/pets.jpg\" alt=\"Images\">
    </div>
</div>

<section id=\"udomljavanje\">
  <div class=\"grid-container udomi\">
    <!-- Intro Udomi -->
    <div class=\"grid-x\">
      <div class=\"small-12 cell\">
        <h3>Pronađi svog novog najboljeg prijatelja</h3>
      </div>

      <div class=\"small-12 large-8 cell\">
        <p>
          Ovdje možete vidjeti naše predivne peseke i mace. Kako bismo osigurali maksimalno adekvatan novi dom za naše štićenike pripremili smo ugovor koji se potpisuje prilikom udomljavanja. Ukoliko imaš bilo kakva pitanja slobodno <a href=\"mailto:info@udrugarea.hr?subject=Upit\">nam se javi</a>.
        </p>
      </div>
    </div>

    <!-- Udomi -->
    <div class=\"grid-x grid-margin-x gallery\">
        ";
        // line 55
        $this->displayBlock('udomi', $context, $blocks);
        // line 66
        echo "    </div>
  </div>

</section>
";
    }

    // line 55
    public function block_udomi($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 57
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 58
            echo "        <div class=\"small-12 medium-6 large-4 cell\">
          <a href=\"";
            // line 59
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
              <img class=\"thumb\" src=\"";
            // line 60
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
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  113 => 60,  109 => 59,  106 => 58,  101 => 57,  98 => 56,  95 => 55,  87 => 66,  85 => 55,  32 => 4,  29 => 3,  11 => 1,);
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
<div class=\"intro\">
    <div class=\"grid-x\">
        <div class=\"small-12 cell\">
            <img src=\"images/logo.svg\" class=\"logo\" alt=\"Udruga Rea\">
        </div>
        <div class=\"small-12 cell\">
            <h1>Rea</h1>
        </div>
        <div class=\"cell\">
            <h2>Udruga Rea je registrirana neprofitna nevladina organizacija, skupina volontera čiji je cilj udomljavanje napuštenih pasa i mačaka grada Samobora i okolice.</h2>
        </div>
        <div class=\"cell\" style=\"margin-top: 2.5em;\">
            <a href=\"/udomi\" class=\"button text-center\">Udomi</a>
            <a href=\"/doniraj\" class=\"hollow button text-center\">Doniraj</a>
        </div>
    </div>
</div>

<div class=\"grid-x dark align-justify align-middle\">
    <div class=\"small-12 medium-12 large-4 cell info-box\">
        <h3>Postani kuma ili kum</h3>
        <p>Idealno za one koji ne mogu udomiti, a žele pomoći.</p>
        <a href=\"kumstvo\" class=\"hollow button\">Želim biti kuma</a>

        <h3>Tražimo čuvalice</h3>
        <p>Nemamo sklonište, ovisimo o čuvalicama. Udruga osigurava sve što je potrebno za našeg štićenika.</p>
        <a href=\"cuvalice\" class=\"hollow button\">Želim biti čuvalica</a>
    </div>

    <div class=\"auto cell show-for-large align-self-stretch\">
        <img src=\"/images/pets.jpg\" alt=\"Images\">
    </div>
</div>

<section id=\"udomljavanje\">
  <div class=\"grid-container udomi\">
    <!-- Intro Udomi -->
    <div class=\"grid-x\">
      <div class=\"small-12 cell\">
        <h3>Pronađi svog novog najboljeg prijatelja</h3>
      </div>

      <div class=\"small-12 large-8 cell\">
        <p>
          Ovdje možete vidjeti naše predivne peseke i mace. Kako bismo osigurali maksimalno adekvatan novi dom za naše štićenike pripremili smo ugovor koji se potpisuje prilikom udomljavanja. Ukoliko imaš bilo kakva pitanja slobodno <a href=\"mailto:info@udrugarea.hr?subject=Upit\">nam se javi</a>.
        </p>
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

</section>
{% endblock %}
", "home.html.twig", "/Users/antonijapek/Development/Valet/udrugarea/user/themes/rea/templates/home.html.twig");
    }
}
