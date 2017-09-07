<?php

/* error/500.twig */
class __TwigTemplate_57ee89e863f74dc6374d8167f2f6a1bd9884c720b9b47799c65f41bd30627bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "error/500.twig", 1);
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/error.css\">
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<section id=\"inicio\" style=\"background: url(./images/fondos/lock.png);background-size: cover;\">
\t<div class=\"inicio-cabecera\">
\t\t<h3 class=\"txt-cbc\"> Ancaor </h3>
\t\t<p class=\"txtsub-cbc\">\"Ama lo que haces\"</p>
\t</div>
\t<div>
\t\t<nav class=\"inicio-nav\" id=\"cbc\">
\t\t\t<ul>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#inicio\">Inicio</a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#diseno\"> Lykrune </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#about\"> LunarCode </a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
\t<div class=\"content-cabecera\">
\t\t<h3 id=\"text-logo-body\" class=\"text-logo-body animate-left\"><img src=\"./images/lock.png\" alt=\"Ancaor Logo\">  </h3>
\t\t<div class=\"separador\">
\t\t\t<hr>
\t\t</div>
\t\t<p id=\"text-frase\" class=\"txt-msj animate-right\">";
        // line 26
        echo "ERROR 500";
        echo "</p>
\t\t<p id=\"text-frase\" class=\"animate-left\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["datos"]) ? $context["datos"] : null), "html", null, true);
        echo "</p>
\t\t<h3 id=\"none\"> </h3>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "error/500.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  69 => 26,  48 => 7,  45 => 6,  36 => 3,  30 => 2,  11 => 1,);
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/error.css\">
{% endblock %}
{% block content %}
<section id=\"inicio\" style=\"background: url(./images/fondos/lock.png);background-size: cover;\">
\t<div class=\"inicio-cabecera\">
\t\t<h3 class=\"txt-cbc\"> Ancaor </h3>
\t\t<p class=\"txtsub-cbc\">\"Ama lo que haces\"</p>
\t</div>
\t<div>
\t\t<nav class=\"inicio-nav\" id=\"cbc\">
\t\t\t<ul>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#inicio\">Inicio</a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#diseno\"> Lykrune </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#about\"> LunarCode </a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
\t<div class=\"content-cabecera\">
\t\t<h3 id=\"text-logo-body\" class=\"text-logo-body animate-left\"><img src=\"./images/lock.png\" alt=\"Ancaor Logo\">  </h3>
\t\t<div class=\"separador\">
\t\t\t<hr>
\t\t</div>
\t\t<p id=\"text-frase\" class=\"txt-msj animate-right\">{{ \"ERROR 500\" }}</p>
\t\t<p id=\"text-frase\" class=\"animate-left\">{{ datos }}</p>
\t\t<h3 id=\"none\"> </h3>
\t</div>
</section>
{% endblock %}", "error/500.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\error\\500.twig");
    }
}
