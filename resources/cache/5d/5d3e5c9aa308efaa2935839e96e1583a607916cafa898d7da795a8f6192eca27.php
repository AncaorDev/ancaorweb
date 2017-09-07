<?php

/* inicio.twig */
class __TwigTemplate_82af9fa5a70e35103009f6916362d25a4ed763dd5e13d2848506388e4c2b6bd7 extends Twig_Template
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
\t\t\tbackground-position: 50% -32%;
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
\t\t
\t";
        // line 34
        $this->loadTemplate("includes/header.twig", "inicio.twig", 34)->display($context);
        // line 35
        echo "
\t<div class=\"content-cabecera\">
\t\t<div id=\"logo-body\" class=\"logo-body animate-left\"><img src=\"./images/ancaor/Ancaor2017.png\" alt=\"Ancaor Logo\"></div>
\t\t<a href=\"#section-about\" class=\"btn-normal btn-inicio txt-about\"> Sobre Ancaor </a>
\t\t<div class=\"separador\">
\t\t\t";
        // line 41
        echo "\t\t</div>
\t\t<div class=\"frase\">
\t\t\t<div class=\"content-cab-frase\">
\t\t\t\t<p class=\"txt-frase\">Frase aleatoria:  
\t\t\t\t\t<span id=\"change_phrase\" class=\"btn btn-danger\">  Cambiar frase </span>
\t\t\t\t</p>\t
\t\t\t</div>
\t\t\t<span style=\"clear: both\"></span>
\t\t\t<p id=\"text-frase\" class=\"text-frase show-left\"> \"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "frase", array(), "array"), "html", null, true);
        echo " \"</p>
\t\t</div>
\t\t<a id=\"cont-icon\" href=\"#section-about\"><i id=\"icon-down\" class=\"icon-down-open\"></i></a>
\t</div>
</section>
<section class=\"section\" id=\"section-about\" >
\t<div class=\"content\">
\t\t<h2 id=\"txt-title\" class=\"txt-title\">¿Qué es Ancaor?</h2>
\t\t<p class=\"txt-parrafo\">Ancaor en resumen son las iniciales de mi nombre y apellidos lo cual significa son representción mia Anthony Cajacuri Ordoñez, decidí crear dos áreas que representan las cosas que me gustan como la programación y dibujar, estas son LunarCode Dev y Lykrune Art respectivamente.</p>
\t\t<p class=\"txt-parrafo\">En lo personal considero no tener mucho talento para ambas cosas, pero pongo todo mi esfuerzo en aprenderlas, como motivación usa la frase “El trabajo duro supera al talento cuando el talento no trabaja duro” de Ben Lehner.</p>

\t\t<p class=\"txt-parrafo2\">
\t\t\tSi te interesa saber sobre mis habilidades y mas detalles personales dale a mas información,  si deseas saber sobre mis trabajos de arte, diseño ve a la sección lykrune y si deseas saber sobre mis trabajos de programación ve a la sección LunarCode. <br>
\t\t\tSin más que decir , bienvenido a mi mundo. <br> <br>
\t\t\tSi tienes alguna consulta dale <a class=\"btn-normal btn-blue\" href=\"contacto\">clic aquí</a>
\t\t</p>
\t</div>
</section>
<section class=\"section\" id=\"section-lykrune\"> 
\t<div class=\"content\">
\t\t<h1  id=\"txt-title\" class=\"txt-title\">Lykrune Art</h1>
\t\t<div class=\"space\">
\t\t\t<hr>
\t\t</div>
\t\t<p class=\"txt-parrafo\">
\t\t\tLykrune Art es el área encargada del diseño y arte.
\t\t</p>
\t\t<p class=\"txt-parrafo\">
\t\t\t<a class=\"btn-normal btn-blue\" href=\"http://lykrune.ml\">Mas Información</a>
\t\t</p>
\t</div>
</section>

<section class=\"section\" id=\"section-lunarcode\">\t
\t<h1 class=\"t-lykrune\">LunarCode</h1>
\t<div class=\"space\">
\t\t<hr>
\t</div>
\t<p class=\"txt-parrafo\">
\t\t\tLunarCode Dev es el área encargada de la programación.
\t\t</p>
\t\t<p class=\"txt-parrafo\">
\t\t\tEsta zona aún esta en desarrollo
\t\t</p>
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
        return array (  105 => 49,  95 => 41,  88 => 35,  86 => 34,  82 => 32,  79 => 31,  52 => 8,  48 => 6,  46 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig\" %}
{% block title %} Inicio {% endblock %}
{% block head %}{{parent()}}
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/inicio.css?id={{random()}}\">
{% set img = random(5)  %}
<style type=\"text/css\">
\t#inicio {
\t\tbackground: url('./images/fondos/{{img}}.jpg');
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
\t\t\tbackground-position: 50% -32%;
\t\t}    \t
\t}
\t@media (min-width: 1440px) {
\t\t#inicio {
\t\t\tbackground-position: 50% -10%;
\t\t}  
\t}
</style>
{% endblock %}
{% block content %}
<section id=\"inicio\">
\t\t
\t{% include 'includes/header.twig' %}

\t<div class=\"content-cabecera\">
\t\t<div id=\"logo-body\" class=\"logo-body animate-left\"><img src=\"./images/ancaor/Ancaor2017.png\" alt=\"Ancaor Logo\"></div>
\t\t<a href=\"#section-about\" class=\"btn-normal btn-inicio txt-about\"> Sobre Ancaor </a>
\t\t<div class=\"separador\">
\t\t\t{# <hr> #}
\t\t</div>
\t\t<div class=\"frase\">
\t\t\t<div class=\"content-cab-frase\">
\t\t\t\t<p class=\"txt-frase\">Frase aleatoria:  
\t\t\t\t\t<span id=\"change_phrase\" class=\"btn btn-danger\">  Cambiar frase </span>
\t\t\t\t</p>\t
\t\t\t</div>
\t\t\t<span style=\"clear: both\"></span>
\t\t\t<p id=\"text-frase\" class=\"text-frase show-left\"> \"{{ datos['frase'] }} \"</p>
\t\t</div>
\t\t<a id=\"cont-icon\" href=\"#section-about\"><i id=\"icon-down\" class=\"icon-down-open\"></i></a>
\t</div>
</section>
<section class=\"section\" id=\"section-about\" >
\t<div class=\"content\">
\t\t<h2 id=\"txt-title\" class=\"txt-title\">¿Qué es Ancaor?</h2>
\t\t<p class=\"txt-parrafo\">Ancaor en resumen son las iniciales de mi nombre y apellidos lo cual significa son representción mia Anthony Cajacuri Ordoñez, decidí crear dos áreas que representan las cosas que me gustan como la programación y dibujar, estas son LunarCode Dev y Lykrune Art respectivamente.</p>
\t\t<p class=\"txt-parrafo\">En lo personal considero no tener mucho talento para ambas cosas, pero pongo todo mi esfuerzo en aprenderlas, como motivación usa la frase “El trabajo duro supera al talento cuando el talento no trabaja duro” de Ben Lehner.</p>

\t\t<p class=\"txt-parrafo2\">
\t\t\tSi te interesa saber sobre mis habilidades y mas detalles personales dale a mas información,  si deseas saber sobre mis trabajos de arte, diseño ve a la sección lykrune y si deseas saber sobre mis trabajos de programación ve a la sección LunarCode. <br>
\t\t\tSin más que decir , bienvenido a mi mundo. <br> <br>
\t\t\tSi tienes alguna consulta dale <a class=\"btn-normal btn-blue\" href=\"contacto\">clic aquí</a>
\t\t</p>
\t</div>
</section>
<section class=\"section\" id=\"section-lykrune\"> 
\t<div class=\"content\">
\t\t<h1  id=\"txt-title\" class=\"txt-title\">Lykrune Art</h1>
\t\t<div class=\"space\">
\t\t\t<hr>
\t\t</div>
\t\t<p class=\"txt-parrafo\">
\t\t\tLykrune Art es el área encargada del diseño y arte.
\t\t</p>
\t\t<p class=\"txt-parrafo\">
\t\t\t<a class=\"btn-normal btn-blue\" href=\"http://lykrune.ml\">Mas Información</a>
\t\t</p>
\t</div>
</section>

<section class=\"section\" id=\"section-lunarcode\">\t
\t<h1 class=\"t-lykrune\">LunarCode</h1>
\t<div class=\"space\">
\t\t<hr>
\t</div>
\t<p class=\"txt-parrafo\">
\t\t\tLunarCode Dev es el área encargada de la programación.
\t\t</p>
\t\t<p class=\"txt-parrafo\">
\t\t\tEsta zona aún esta en desarrollo
\t\t</p>
</section>

{% endblock %}", "inicio.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\inicio.twig");
    }
}
