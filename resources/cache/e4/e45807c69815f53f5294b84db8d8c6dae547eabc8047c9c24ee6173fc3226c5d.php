<?php

/* base.twig */
class __TwigTemplate_a4f5e1b45be694b56e716b08cdff76034514d0c61a14fe2ae55136129206a78e extends Twig_Template
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
        // line 35
        echo "</head>
<body>
";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "<body>
";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "<script src=\"./js/jquery/jquery.min-1.4.2.js\"
type=\"text/javascript\" charset=\"utf-8\"></script>
<!-- JS -->
<script src=\"./js/scroll.js?id=";
        // line 52
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"./js/cambios.js?id=";
        // line 53
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
<meta name=\"theme-color\" content=\"#0E2F80\">
<!-- Bootstrap -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/bootstrap/bootstrap.min.css\">
<!-- Fontello -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/fontello/css/fontello.css\">
<!-- ESTILOS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/normalize.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/main.css?id=";
        // line 33
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"footer\">
\t<div class=\"frase-cabecera\">
\t<p> <a target=\"_blank\" class=\"enlace-footer\" href=\"https://www.facebook.com/profile.php?id=100014813495811\"><i class=\"icon-facebook-1\"> </i> </a>\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://plus.google.com/u/0/101550641324193523984\"><i class=\"icon-google\"> </i></a></p>
\t<p> Design by <a class=\"enlace-footer-ext\" href=\"\"> Lykrune © </a> - Derechos reservados </p>
\t<p> Lykrune es parte de <a target=\"_blank\" class=\"enlace-footer-ext\" href=\"http://ancaor.com\">Ancaor</a> </p>
\t<!-- <p>  Lykrune Web Page 2017</p> -->
\t</div>
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
        return array (  127 => 40,  124 => 39,  119 => 37,  113 => 33,  94 => 17,  90 => 16,  84 => 13,  79 => 11,  72 => 6,  69 => 5,  63 => 4,  54 => 53,  50 => 52,  45 => 49,  43 => 39,  40 => 38,  38 => 37,  34 => 35,  32 => 5,  28 => 4,  23 => 1,);
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
<meta name=\"theme-color\" content=\"#0E2F80\">
<!-- Bootstrap -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/bootstrap/bootstrap.min.css\">
<!-- Fontello -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/fontello/css/fontello.css\">
<!-- ESTILOS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/normalize.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/main.css?id={{random()}}\">
{% endblock %}
</head>
<body>
{% block content %}{% endblock %}
<body>
{% block footer %}
<div class=\"footer\">
\t<div class=\"frase-cabecera\">
\t<p> <a target=\"_blank\" class=\"enlace-footer\" href=\"https://www.facebook.com/profile.php?id=100014813495811\"><i class=\"icon-facebook-1\"> </i> </a>\t<a target=\"_blank\"  class=\"enlace-footer\"  href=\"https://plus.google.com/u/0/101550641324193523984\"><i class=\"icon-google\"> </i></a></p>
\t<p> Design by <a class=\"enlace-footer-ext\" href=\"\"> Lykrune © </a> - Derechos reservados </p>
\t<p> Lykrune es parte de <a target=\"_blank\" class=\"enlace-footer-ext\" href=\"http://ancaor.com\">Ancaor</a> </p>
\t<!-- <p>  Lykrune Web Page 2017</p> -->
\t</div>
</div>
{% endblock %}
<script src=\"./js/jquery/jquery.min-1.4.2.js\"
type=\"text/javascript\" charset=\"utf-8\"></script>
<!-- JS -->
<script src=\"./js/scroll.js?id={{random()}}\"></script>
<script src=\"./js/cambios.js?id={{random()}}\"></script>
</body>
</html>

", "base.twig", "C:\\xampp\\htdocs\\server\\resources\\views\\base.twig");
    }
}
