<?php

/* base.twig */
class __TwigTemplate_f3d184a63d99f347bb488f8a8b9522df76ceea4313238844743129c256cc9b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - Ancaor</title>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body>

\t
";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "<body>
";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "<script src=\"./js/jquery/jquery-3.2.1.min.js\"
type=\"text/javascript\" charset=\"utf-8\"></script>
<!-- JS -->
<script src=\"./js/scroll.js?id=";
        // line 76
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"./js/cambios.js?id=";
        // line 77
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "<meta charset=\"UTF-8\">
<!-- Metas -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
<base href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["BASE"]) ? $context["BASE"] : null), "html", null, true);
        echo "\" target=\"_self\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"Author\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["AUTHOR"]) ? $context["AUTHOR"] : null), "html", null, true);
        echo "\" />
<meta property='og:locale' content='es_ES'/>
<meta property='og:type' content='website'/>
<meta property='og:site_name' content='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["WEBSITE"]) ? $context["WEBSITE"] : null), "html", null, true);
        echo "'/>
<meta property='fb:app_id' content='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["FB_ID"]) ? $context["FB_ID"] : null), "html", null, true);
        echo "'/>
<meta name=\"robots\" content=\"index,follow\">
<meta name=\"description\" content=\"Lykrune, Desing Web\">
<meta name=\"keywords\" content=\"Lykrune,Design, Diseño Web\">
<!-- Favicon -->
<link rel=\"icon\" type=\"image/png\" href=\"./images/favicon/Ancaor2017.ico\">
<link rel=\"manifest\" href=\"/manifest.json\">
<meta name=\"msapplication-TileColor\" content=\"#0E2F80\">
<meta name=\"msapplication-TileImage\" content=\"images/favicon/Ancaor2017.ico\">
<meta name=\"theme-color\" content=\"#FF3131\">
<!-- Bootstrap -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/bootstrap/bootstrap.min.css\">
<!-- Fontello -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/fontello/css/fontello.css\">
<!-- ESTILOS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/normalize.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/ancaor/fonts/fonts.css?id=";
        // line 33
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/main.css?id=";
        // line 34
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "<div class=\"footer\">
\t<div class=\"frase-cabecera\">
\t\t<p>";
        // line 45
        echo "\t
\t\t\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://plus.google.com/u/0/115163178064715414276\"><i class=\"icon-google\"> </i></a> 

\t\t\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://github.com/AncaorLog\"><i class=\"icon-github-circled\"> </i></a>
\t\t</p>
\t\t<p> Design by <a class=\"enlace-footer-ext\" href=\"\"> Lykrune © </a> License MIT </p>
\t\t";
        // line 52
        echo "\t\t<!-- <p>  Lykrune Web Page 2017</p> -->
\t</div>
</div>
<div class=\"col-lg-12 powered\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-2 col-lg-1\">
\t\t\t<p class=\"txt3\">Powered by:</p>\t
\t\t\t<!-- <p><a target=\"_blank\" class=\"about-foot\" href=\"about\">About</a></p> -->
\t\t</div>
\t\t<div class=\"col-sm-4 col-lg-4\">
\t\t\t<div class=\"logo-foot\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/php-icon.png\" alt=\"php-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/html5-icon.png\" alt=\"html5-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/css3-icon.png\" alt=\"css3-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/jq-icon.png\" alt=\"jq-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/bs-icon.png\" alt=\"bs-icon\">
\t\t\t</div>
\t\t</div>
\t</div>\t    \t
</div>
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  137 => 45,  133 => 43,  130 => 42,  125 => 40,  119 => 34,  115 => 33,  96 => 17,  92 => 16,  86 => 13,  81 => 11,  74 => 6,  71 => 5,  65 => 4,  56 => 77,  52 => 76,  47 => 73,  45 => 42,  42 => 41,  40 => 40,  34 => 36,  32 => 5,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
<title>{% block title %} {% endblock %} - Ancaor</title>
{% block head %}
<meta charset=\"UTF-8\">
<!-- Metas -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
<base href=\"{{BASE}}\" target=\"_self\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"Author\" content=\"{{AUTHOR}}\" />
<meta property='og:locale' content='es_ES'/>
<meta property='og:type' content='website'/>
<meta property='og:site_name' content='{{ WEBSITE }}'/>
<meta property='fb:app_id' content='{{ FB_ID }}'/>
<meta name=\"robots\" content=\"index,follow\">
<meta name=\"description\" content=\"Lykrune, Desing Web\">
<meta name=\"keywords\" content=\"Lykrune,Design, Diseño Web\">
<!-- Favicon -->
<link rel=\"icon\" type=\"image/png\" href=\"./images/favicon/Ancaor2017.ico\">
<link rel=\"manifest\" href=\"/manifest.json\">
<meta name=\"msapplication-TileColor\" content=\"#0E2F80\">
<meta name=\"msapplication-TileImage\" content=\"images/favicon/Ancaor2017.ico\">
<meta name=\"theme-color\" content=\"#FF3131\">
<!-- Bootstrap -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/bootstrap/bootstrap.min.css\">
<!-- Fontello -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/fontello/css/fontello.css\">
<!-- ESTILOS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/normalize.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/ancaor/fonts/fonts.css?id={{random()}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/main.css?id={{random()}}\">
{% endblock %}
</head>
<body>

\t
{% block content %}{% endblock %}
<body>
{% block footer %}
<div class=\"footer\">
\t<div class=\"frase-cabecera\">
\t\t<p>{#  <a target=\"_blank\" class=\"enlace-footer\" href=\"https://www.facebook.com/profile.php?id=100014813495811\"><i class=\"icon-facebook-1\"> </i> </a> #}\t
\t\t\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://plus.google.com/u/0/115163178064715414276\"><i class=\"icon-google\"> </i></a> 

\t\t\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://github.com/AncaorLog\"><i class=\"icon-github-circled\"> </i></a>
\t\t</p>
\t\t<p> Design by <a class=\"enlace-footer-ext\" href=\"\"> Lykrune © </a> License MIT </p>
\t\t{# \t<p> Lykrune es parte de <a target=\"_blank\" class=\"enlace-footer-ext\" href=\"http://ancaor.com\">Ancaor</a> </p> #}
\t\t<!-- <p>  Lykrune Web Page 2017</p> -->
\t</div>
</div>
<div class=\"col-lg-12 powered\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-2 col-lg-1\">
\t\t\t<p class=\"txt3\">Powered by:</p>\t
\t\t\t<!-- <p><a target=\"_blank\" class=\"about-foot\" href=\"about\">About</a></p> -->
\t\t</div>
\t\t<div class=\"col-sm-4 col-lg-4\">
\t\t\t<div class=\"logo-foot\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/php-icon.png\" alt=\"php-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/html5-icon.png\" alt=\"html5-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/css3-icon.png\" alt=\"css3-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/jq-icon.png\" alt=\"jq-icon\">
\t\t\t\t<img class=\"img-logo-foot\" src=\"./images/bs-icon.png\" alt=\"bs-icon\">
\t\t\t</div>
\t\t</div>
\t</div>\t    \t
</div>
{% endblock %}
<script src=\"./js/jquery/jquery-3.2.1.min.js\"
type=\"text/javascript\" charset=\"utf-8\"></script>
<!-- JS -->
<script src=\"./js/scroll.js?id={{random()}}\"></script>
<script src=\"./js/cambios.js?id={{random()}}\"></script>
</body>
</html>

", "base.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\base.twig");
    }
}
