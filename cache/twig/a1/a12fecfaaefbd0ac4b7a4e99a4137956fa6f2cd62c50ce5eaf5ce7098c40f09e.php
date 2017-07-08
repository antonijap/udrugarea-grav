<?php

/* forms/fields/schema/schema.html.twig */
class __TwigTemplate_8daf805529129dc3170245fbc83418ca56fd25efdb13b5495c856c6da44b44f8 extends Twig_Template
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
        echo "<script type=\"text/javascript\">

\$(\"[name='data[header][articleenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglearticle\").show();
        console.log(\"show\")
    } else {
        \$(\".togglearticle\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][articleenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglearticle\").hide();
        console.log(\"show\");
    }
});

\$(\"[name='data[header][personenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".toggleperson\").show();
        console.log(\"show\");
    } else {
        \$(\".toggleperson\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][personenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".toggleperson\").hide();
        console.log(\"show\");

    }
});

\$(\"[name='data[header][eventenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".toggleevent\").show();
        console.log(\"show\");
    } else {
        \$(\".toggleevent\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][eventenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".toggleevent\").hide();
        console.log(\"show\");
    }
});

\$(\"[name='data[header][musicalbumenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglemusicalbum\").show();
        console.log(\"show\");
    } else {
        \$(\".togglemusicalbum\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][musicalbumenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglemusicalbum\").hide();
        console.log(\"show\");
    }
});
\$(\"[name='data[header][restaurantenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglerestaurant\").show();
        console.log(\"show\");
    } else {
        \$(\".togglerestaurant\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][restaurantenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglerestaurant\").hide();
        console.log(\"show\");
    }
});
\$(\"[name='data[header][musiceventenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglemusicevent\").show();
        console.log(\"show\");
    } else {
        \$(\".togglemusicevent\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][musiceventenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglemusicevent\").hide();
        console.log(\"status = 0 hide musicevent\");
    }
    else {
        \$(\".togglemusicevent\").show();  
    };
        
    }
);
</script>";
    }

    public function getTemplateName()
    {
        return "forms/fields/schema/schema.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">

\$(\"[name='data[header][articleenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglearticle\").show();
        console.log(\"show\")
    } else {
        \$(\".togglearticle\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][articleenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglearticle\").hide();
        console.log(\"show\");
    }
});

\$(\"[name='data[header][personenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".toggleperson\").show();
        console.log(\"show\");
    } else {
        \$(\".toggleperson\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][personenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".toggleperson\").hide();
        console.log(\"show\");

    }
});

\$(\"[name='data[header][eventenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".toggleevent\").show();
        console.log(\"show\");
    } else {
        \$(\".toggleevent\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][eventenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".toggleevent\").hide();
        console.log(\"show\");
    }
});

\$(\"[name='data[header][musicalbumenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglemusicalbum\").show();
        console.log(\"show\");
    } else {
        \$(\".togglemusicalbum\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][musicalbumenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglemusicalbum\").hide();
        console.log(\"show\");
    }
});
\$(\"[name='data[header][restaurantenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglerestaurant\").show();
        console.log(\"show\");
    } else {
        \$(\".togglerestaurant\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][restaurantenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglerestaurant\").hide();
        console.log(\"show\");
    }
});
\$(\"[name='data[header][musiceventenabled]']\").click(function() {
    var status = \$(this).val();
    if (status != 0) {
        \$(\".togglemusicevent\").show();
        console.log(\"show\");
    } else {
        \$(\".togglemusicevent\").hide();
    }
});

\$(document).ready(function() {
    var status = \$(\"[name='data[header][musiceventenabled]'][checked='checked']\").val();
    if (status == 0) {
        \$(\".togglemusicevent\").hide();
        console.log(\"status = 0 hide musicevent\");
    }
    else {
        \$(\".togglemusicevent\").show();  
    };
        
    }
);
</script>", "forms/fields/schema/schema.html.twig", "/Users/antonijapek/Development/Valet/udrugarea-grav/user/plugins/seo/templates/forms/fields/schema/schema.html.twig");
    }
}
