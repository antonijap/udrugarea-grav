<?php

/* forms/fields/google/google.html.twig */
class __TwigTemplate_bd4a1db5005ba2d93af4154b48645d1842aba2a40dade0d82781f55cf0ac3e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_test_empty($this->getAttribute(($context["field"] ?? null), "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute(($context["field"] ?? null), "security", array()))))) {
            // line 2
            if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
                // line 3
                echo "    ";
                $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
            }
            // line 5
            $context["title"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array())));
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["field"] ?? null), "title", array()) || $this->getAttribute(($context["field"] ?? null), "underline", array()))) {
                // line 7
                echo "    <h1 ";
                if ( !$this->getAttribute(($context["field"] ?? null), "underline", array())) {
                    echo "class=\"no_underline\"";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
                }
                echo "</h1>
    ";
            }
            // line 9
            echo "             
    <div class=\"google-results-wrapper\"> 
    <div class=\"content\"> 
    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png\" height=\"50\"/>
    <div class=\"snippet\"> <h3 class=\"title\"> 
    <a href=\"#\" id=\"target\">";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "googletitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "googletitle", array()), (($this->getAttribute(($context["context"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))) : ((($this->getAttribute(($context["context"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())))), "html", null, true);
            echo "</a> </h3>
    <div class=\"url-breadcrumb\"><span style=\"color: #006621; font-size: normal; display: block;\"> ";
            // line 15
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["context"] ?? null), "url", array(0 => true), "method"), array("//" => "//", "/" => " › ")), "html", null, true);
            echo " </span></div>
    <div class=\"description\" id=\"resultdesc\">";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "googledesc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array(), "any", false, true), "googledesc", array()), \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())), 140))) : (\Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["context"] ?? null), "summary", array())), 140))), "html", null, true);
            echo " </div>
    
    </div>
    </div>
    </div>
    <div id=\"googlecount\" style=\"text-align:center\"></div>
    
    <style>@import url(https://fonts.googleapis.com/css?family=Roboto&subset=greek);.mobile .url-breadcrumb,.title{overflow:hidden;text-overflow:ellipsis}body{min-height:100vh;display:flex;flex-flow:column;font-family:arial,sans-serif}body.grey{background:#f2f2f2;} .content{margin: auto; background-color:#fff;}.google-results-wrapper{margin:auto auto 10px}.content{width:600px;padding:16px}.snippet{width:600px;margin-bottom:26px;box-sizing:border-box}.title{font-size:18px;margin:0;white-space:nowrap;max-width:550px}.title a{color:#1a0dab;font-weight:400;text-decoration:none}.title a:hover{cursor:pointer;text-decoration:underline}.url-breadcrumb{height:18px;margin:1px 0 0;line-height:16px;white-space:nowrap}.url-breadcrumb cite{font-size:14px;color:#006621;font-style:normal}.url-breadcrumb .arrow-down{display:inline-block;vertical-align:middle;width:13px;text-align:center}.url-breadcrumb .arrow-down:after{content:\"\";display:inline-block;border-color:#006621 transparent;border-width:5px 4px 0;border-style:solid;vertical-align:middle;margin:-2px 0 0}.microdata{color:grey;line-height:18px;font-size:13px}.microdata .stars-wrapper{margin:-4px 1px 0;width:65px;height:13px;display:inline-block;vertical-align:middle;background-position:0 50%;}.description{font-size:13px;color:#545454;line-height:1.4;word-wrap:break-word}.description em{color:#6a6a6a;font-weight:700;font-style:normal}.description .date{color:grey}.mobile{font-family:Roboto,sans-serif}.mobile.google-results-wrapper{background:#f2f2f2;padding:10px 8px;width:320px}.mobile .content{padding:0;width:100%}.mobile .snippet{font-size:14px;line-height:20px;width:auto;background-color:#fff;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:2px;margin:0 0 10px;padding:11px 16px}.mobile .title{font-size:16px;white-space:normal}.mobile .url-breadcrumb{border-bottom:1px solid #ebebeb;line-height:20px;margin:0 -16px 9px;padding:0 16px 11px;white-space:nowrap}.mobile .description{color:#222}.mobile .description .date{color:#777}.toggler{margin:15px auto auto;font-family:Roboto,san-serif}.toggler a{color:#bbb}.toggler .desktop{color:#1a0dab}.toggler .mobile .desktop{color:#bbb}.toggler .mobile .mobile{color:#1a0dab}</style>
    
    <script type=\"text/javascript\">\$('#text').keyup(function(){
        var keyed = \$(this).val();\$(\"#target\").html(keyed);
        
        
        });
        \$('#desc').keyup(function(){
        var keyed = \$(this).val();\$(\"#resultdesc\").html(keyed);
        \$(\"#googlecount\").text(\"Characters left: \" + (140 - \$(this).val().length));
        });
    

    </script>
    ";
            // line 37
            if ($this->getAttribute(($context["field"] ?? null), "text", array())) {
                // line 38
                echo "    ";
                echo $this->getAttribute(($context["field"] ?? null), "text", array());
                echo "
    ";
            }
            // line 40
            echo "
    ";
            // line 41
            if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
                // line 42
                echo "        <div class=\"form-section ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
                echo "\">
        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 44
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 45
                        echo "                ";
                        $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                        // line 46
                        echo "                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/google/google.html.twig", 46)->display($context);
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </div>
    ";
            }
            // line 51
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/google/google.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  146 => 49,  132 => 48,  129 => 47,  126 => 46,  123 => 45,  120 => 44,  103 => 43,  98 => 42,  96 => 41,  93 => 40,  87 => 38,  85 => 37,  61 => 16,  57 => 15,  53 => 14,  46 => 9,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field.security is empty or authorize(array(field.security)) %}
{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}
{% set title = (context.header.title ?: context.title) %}
    {% if field.title or field.underline %}
    <h1 {% if not field.underline %}class=\"no_underline\"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>
    {% endif %}
             
    <div class=\"google-results-wrapper\"> 
    <div class=\"content\"> 
    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png\" height=\"50\"/>
    <div class=\"snippet\"> <h3 class=\"title\"> 
    <a href=\"#\" id=\"target\">{{ context.header.googletitle|default(context.title ~ \" | \" ~ site.title )}}</a> </h3>
    <div class=\"url-breadcrumb\"><span style=\"color: #006621; font-size: normal; display: block;\"> {{context.url(true)|replace({\"//\":\"//\", \"/\":\" › \" }) }} </span></div>
    <div class=\"description\" id=\"resultdesc\">{{ context.header.googledesc|default(context.summary|striptags|truncate(140)) }} </div>
    
    </div>
    </div>
    </div>
    <div id=\"googlecount\" style=\"text-align:center\"></div>
    
    <style>@import url(https://fonts.googleapis.com/css?family=Roboto&subset=greek);.mobile .url-breadcrumb,.title{overflow:hidden;text-overflow:ellipsis}body{min-height:100vh;display:flex;flex-flow:column;font-family:arial,sans-serif}body.grey{background:#f2f2f2;} .content{margin: auto; background-color:#fff;}.google-results-wrapper{margin:auto auto 10px}.content{width:600px;padding:16px}.snippet{width:600px;margin-bottom:26px;box-sizing:border-box}.title{font-size:18px;margin:0;white-space:nowrap;max-width:550px}.title a{color:#1a0dab;font-weight:400;text-decoration:none}.title a:hover{cursor:pointer;text-decoration:underline}.url-breadcrumb{height:18px;margin:1px 0 0;line-height:16px;white-space:nowrap}.url-breadcrumb cite{font-size:14px;color:#006621;font-style:normal}.url-breadcrumb .arrow-down{display:inline-block;vertical-align:middle;width:13px;text-align:center}.url-breadcrumb .arrow-down:after{content:\"\";display:inline-block;border-color:#006621 transparent;border-width:5px 4px 0;border-style:solid;vertical-align:middle;margin:-2px 0 0}.microdata{color:grey;line-height:18px;font-size:13px}.microdata .stars-wrapper{margin:-4px 1px 0;width:65px;height:13px;display:inline-block;vertical-align:middle;background-position:0 50%;}.description{font-size:13px;color:#545454;line-height:1.4;word-wrap:break-word}.description em{color:#6a6a6a;font-weight:700;font-style:normal}.description .date{color:grey}.mobile{font-family:Roboto,sans-serif}.mobile.google-results-wrapper{background:#f2f2f2;padding:10px 8px;width:320px}.mobile .content{padding:0;width:100%}.mobile .snippet{font-size:14px;line-height:20px;width:auto;background-color:#fff;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:2px;margin:0 0 10px;padding:11px 16px}.mobile .title{font-size:16px;white-space:normal}.mobile .url-breadcrumb{border-bottom:1px solid #ebebeb;line-height:20px;margin:0 -16px 9px;padding:0 16px 11px;white-space:nowrap}.mobile .description{color:#222}.mobile .description .date{color:#777}.toggler{margin:15px auto auto;font-family:Roboto,san-serif}.toggler a{color:#bbb}.toggler .desktop{color:#1a0dab}.toggler .mobile .desktop{color:#bbb}.toggler .mobile .mobile{color:#1a0dab}</style>
    
    <script type=\"text/javascript\">\$('#text').keyup(function(){
        var keyed = \$(this).val();\$(\"#target\").html(keyed);
        
        
        });
        \$('#desc').keyup(function(){
        var keyed = \$(this).val();\$(\"#resultdesc\").html(keyed);
        \$(\"#googlecount\").text(\"Characters left: \" + (140 - \$(this).val().length));
        });
    

    </script>
    {% if field.text %}
    {{ field.text|raw }}
    {% endif %}

    {% if field.fields %}
        <div class=\"form-section {{ field.field_classes }}\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = data.value(field.name) %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endif %}", "forms/fields/google/google.html.twig", "/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/seo/templates/forms/fields/google/google.html.twig");
    }
}
