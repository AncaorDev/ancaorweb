<?php

/* contacto.twig */
class __TwigTemplate_a4304d4dd0ee68dcb53488e8e6856b63383ed29f5cb89fd3b695707e9e2d4119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "contacto.twig", 1);
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
        echo " Contaco ";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/contacto.css?id=";
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
\t
\t";
        // line 9
        $this->loadTemplate("includes/header.twig", "contacto.twig", 9)->display($context);
        // line 10
        echo "\t<div class=\"content-cabecera\">
\t\t<div class=\"form-contact\">
\t\t\t<div id=\"content-form\" class=\"col-xs-12 col-md-6 col-md-push-3\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t <h2 id=\"\">Contacto</h2>
\t\t\t\t    ";
        // line 16
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t      <label for=\"input\" class=\"col-lg-4 control-label\">Nombre</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Ingrese Nombre\">
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    ";
        // line 23
        echo "\t\t\t\t    ";
        // line 24
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t      <label for=\"input\" class=\"col-lg-4 control-label\">Correo</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Ingrese Correo\">
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    ";
        // line 31
        echo "\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t    <div class=\"form-group\">
\t\t\t\t      <label for=\"textArea\" class=\"col-lg-4 control-label\">Mensaje</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
\t\t\t\t        <span class=\"help-block\">Escriba su mensaje.</span>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    ";
        // line 40
        echo "\t\t\t\t    ";
        // line 41
        echo "\t\t\t\t     <div class=\"form-group\">
\t\t\t\t      <div class=\"col-lg-11 col-lg-offset-1\">
\t\t\t\t        <button type=\"submit\" class=\"btn btn-danger\">Enviar</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    ";
        // line 47
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "contacto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 47,  95 => 41,  93 => 40,  84 => 32,  82 => 31,  74 => 24,  72 => 23,  64 => 16,  57 => 10,  55 => 9,  51 => 7,  48 => 6,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
{% block title %} Contaco {% endblock %}
{% block head %}{{parent()}}
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/contacto.css?id={{random()}}\">
{% endblock %}
{% block content %}
<section id=\"inicio\">
\t
\t{% include 'includes/header.twig' %}
\t<div class=\"content-cabecera\">
\t\t<div class=\"form-contact\">
\t\t\t<div id=\"content-form\" class=\"col-xs-12 col-md-6 col-md-push-3\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t <h2 id=\"\">Contacto</h2>
\t\t\t\t    {# Group #}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t      <label for=\"input\" class=\"col-lg-4 control-label\">Nombre</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Ingrese Nombre\">
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    {# end Group  #}
\t\t\t\t    {# Group #}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t      <label for=\"input\" class=\"col-lg-4 control-label\">Correo</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Ingrese Correo\">
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    {# end Group  #}
\t\t\t\t\t{# Group #}
\t\t\t\t    <div class=\"form-group\">
\t\t\t\t      <label for=\"textArea\" class=\"col-lg-4 control-label\">Mensaje</label>
\t\t\t\t      <div class=\"col-lg-6\">
\t\t\t\t        <textarea class=\"form-control\" rows=\"3\" id=\"textArea\"></textarea>
\t\t\t\t        <span class=\"help-block\">Escriba su mensaje.</span>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    {# end Group  #}
\t\t\t\t    {# Group #}
\t\t\t\t     <div class=\"form-group\">
\t\t\t\t      <div class=\"col-lg-11 col-lg-offset-1\">
\t\t\t\t        <button type=\"submit\" class=\"btn btn-danger\">Enviar</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t    {# end Group  #}
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

{% endblock %}", "contacto.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\contacto.twig");
    }
}
