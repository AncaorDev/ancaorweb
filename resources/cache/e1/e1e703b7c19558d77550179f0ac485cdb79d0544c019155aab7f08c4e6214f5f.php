<?php

/* login.twig */
class __TwigTemplate_95cc6e19db9b73d35abd455aa80a15e9523c069acac7dacdf92376b5aa22056c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
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
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<section id=\"inicio\">
\t";
        // line 8
        $this->loadTemplate("includes/header.twig", "login.twig", 8)->display($context);
        // line 9
        echo "\t
\t<div class=\"content-cabecera\">
\t\t
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  54 => 8,  51 => 7,  48 => 6,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
{% endblock %}
{% block content %}
<section id=\"inicio\">
\t{% include 'includes/header.twig' %}
\t
\t<div class=\"content-cabecera\">
\t\t
\t</div>
</section>

{% endblock %}", "login.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\login.twig");
    }
}
