<?php

/* login.twig */
class __TwigTemplate_83ef960c4162448a48870f27f06215d82b9e0f07d8570df593dbd3faf2001042 extends Twig_Template
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/login.css?id=";
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
\t<div class=\"inicio-cabecera\">
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
        return array (  51 => 7,  48 => 6,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\login.twig");
    }
}
