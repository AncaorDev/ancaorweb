<?php

/* inicio.twig */
class __TwigTemplate_3f5a51f3ce9d2a5b003b0f2e2baf7042177b80c35415d8b0aec25cd1100cca98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "inicio.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Inicio ";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/inicio.css?id=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
";
        // line 5
        $context["img"] = twig_random($this->env, 5);
        // line 6
        echo "<style type=\"text/css\">
\t#inicio {
\t\tbackground: url('./images/fondos/";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo ".jpg');
\t\tbackground-position: center -40%;
\t    background-size: cover;
\t    width: 100%;
\t    max-width: 100%;
\t    max-height: 100%;
\t    height: 100%;
\t    background-repeat: no-repeat;
\t    /*background-position: 0px 0px; */
\t    background-attachment: fixed;
\t}
\t@media (min-width: 720px) {
\t\t#inicio {
\t\t\tbackground-position: 50% -52%;
\t\t}    \t
\t}
\t@media (min-width: 1440px) {
\t\t#inicio {
\t\t\tbackground-position: 50% -10%;
\t\t}  
\t}
</style>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "<section id=\"inicio\">
\t<div class=\"inicio-cabecera\">
\t\t
\t\t<select id=\"change_theme\" >
\t\t\t\t<option>Cambiar Tema</option>
\t\t\t\t<option>Normal</option>
\t\t\t\t<option>White</option>
\t\t\t\t<option>Sky</option>
\t\t</select>
\t\t<h3 class=\"txt-cbc\"> Ancaor </h3>
\t\t<p class=\"txtsub-cbc\">\"Ama lo que haces\"</p>
\t</div>
\t<div>
\t\t<nav class=\"inicio-nav\" id=\"cbc\">
\t\t\t<ul>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#inicio\">Inicio</a></li>
\t\t\t\t<li class=\"none\" style=\"display: none\"><a class=\"normal\" href=\"\">  </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#lykrune\"> Lykrune </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#lunarcode\"> LunarCode </a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
\t<div class=\"content-cabecera\">
\t\t<div id=\"logo-body\" class=\"logo-body animate-left\"><img src=\"./images/ancaor/Ancaor2017.png\" alt=\"Ancaor Logo\"></div>
\t\t<p class=\"btn-inicio txt-frase\"> Sobre Ancaor </p>
\t\t<div class=\"separador\">
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"content-cab-frase\">
\t\t\t<p class=\"txt-frase\">Frase aleatoria:  
\t\t\t\t<span id=\"change_phrase\" class=\"btn btn-danger\">  Cambiar frase </span>
\t\t\t</p>
\t\t\t
\t\t</div>
\t\t<p id=\"text-frase\" class=\"text-frase animate-right\"> \"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "frase", array(), "array"), "html", null, true);
        echo " \"</p>
\t\t<p id=\"var\"> </p>
\t\t<h3 id=\"none\"> </h3>
\t\t<a id=\"cont-icon\" href=\"#section-about\"><i id=\"icon-down\" class=\"icon-down-open\"></i></a>
\t</div>
</section>
<section id=\"section-about\" class=\"section-about\">
\t<h2>¿Qué es Ancaor?</h2>
</section>
<section id=\"lykrune\"> 
\t<h1 id=\"t-lykrune\" class=\"t-lykrune\">Lykrune Art</h1>
\t<div class=\"space\">
\t\t<hr>
\t</div>
\t<div  class=\"container cont-image\">
\t\t\t<div class=\"row data-image\">
\t\t\t\t<p>Lykrune Art es área encargada del diseño y arte</p>
\t\t\t\t<a href=\"\">Mas Información</a>\t\t\t
\t\t\t</div>
\t</div>

</section>

<section id=\"lunarcode\">\t
\t<h1 class=\"t-lykrune\">LunarCode</h1>
\t<div class=\"space\">
\t\t<hr>
\t</div>
\t<div class=\"container cont-about\">
\t\t<div class=\"row data-about\">
\t\t\t<div class=\"col-xs-4 col-md-4 col-sm-4 img-about\">
\t\t\t\t<img  src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["DIR_RS"]) ? $context["DIR_RS"] : null), "html", null, true);
        echo "images/perfil/perfil.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-xs-8 col-md-8 col-sm-8 texto-about\">

\t\t\t\t\t<p class=\"frase\">Comence a diseñar, con el único fin de crear algo que sea a mi propio gusto. <br>
\t\t\t\t\tEn lo personal es algo pesado y a veces llego a frustrame, pero al obtener el resultado deseado te da una gran satisfacción y mas aún cuando puedo decir , YO realice esto :3
\t\t\t\t\t</p>
\t\t\t\t\t<span class=\"frase-autor\"> Anthony (Lykrune) </span>
\t\t\t</div>
\t\t</div>
\t</div>\t
</section>

";
    }

    public function getTemplateName()
    {
        return "inicio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  118 => 66,  82 => 32,  79 => 31,  52 => 8,  48 => 6,  46 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "inicio.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\inicio.twig");
    }
}
