<?php

/* partials/footer.html.twig */
class __TwigTemplate_60fb2f3aac61a99b103c464efb289569d86794fd11bdf651ef88aa29617600bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

<footer>
  <div class=\"grid-x dark\">
    <div class=\"shrink cell\">
      <iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fudrugarea%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1756966864551559\" width=\"340\" height=\"214\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
    </div>

    <div class=\"shrink cell\">
      <h4>Podaci udruge</h4>
      <p>OIB: 36184214466</p>
      <p>Registarski broj: 01002887</p>
      <p>IBAN: HR6024030091121002275 (donacije)</p>
      <p>Kontakt: info@udrugarea.hr</p>
    </div>

    <div class=\"shrink cell show-for-large\">
      <h4>Development & dizajn</h4>
      <p><a href=\"http://antonijapek.com\" target=\"_blank\">Antonija Pek</a></p>
      <p>Udruge bez stranice slobodno se javite</p>
    </div>
  </div>
</footer>
";
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "<script
src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
crossorigin=\"anonymous\"></script>
";
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/app.js", 1 => 100), "method");
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  60 => 3,  57 => 2,  29 => 9,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
{% block javascripts %}
<script
src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
crossorigin=\"anonymous\"></script>
{% do assets.addJs('theme://js/app.js', 100) %}
{% endblock %}
{{ assets.js() }}

<footer>
  <div class=\"grid-x dark\">
    <div class=\"shrink cell\">
      <iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fudrugarea%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1756966864551559\" width=\"340\" height=\"214\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
    </div>

    <div class=\"shrink cell\">
      <h4>Podaci udruge</h4>
      <p>OIB: 36184214466</p>
      <p>Registarski broj: 01002887</p>
      <p>IBAN: HR6024030091121002275 (donacije)</p>
      <p>Kontakt: info@udrugarea.hr</p>
    </div>

    <div class=\"shrink cell show-for-large\">
      <h4>Development & dizajn</h4>
      <p><a href=\"http://antonijapek.com\" target=\"_blank\">Antonija Pek</a></p>
      <p>Udruge bez stranice slobodno se javite</p>
    </div>
  </div>
</footer>
{% endblock %}
", "partials/footer.html.twig", "/Users/antonijapek/Development/Valet/udrugarea/user/themes/rea/templates/partials/footer.html.twig");
    }
}
