<?php

/* includes/header.twig */
class __TwigTemplate_574cb494fdac1076270dd15f32ed60aa75b501b13e76cfab561d8c3fc44bdf09 extends Twig_Template
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
        echo "\t<div class=\"inicio-cabecera\">
\t\t<select id=\"change_theme\" >
\t\t\t<option value=\"0\">Cambiar Tema</option>
\t\t\t<option value=\"1\">Normal</option>
\t\t\t<option value=\"2\">White</option>
\t\t\t<option value=\"3\">Sky</option>
\t\t</select>
\t\t<h3 class=\"txt-cbc\"> Ancaor </h3>
\t\t<p class=\"txtsub-cbc\">\"Ama lo que haces\"</p>
\t</div>
\t<div class=\"navegacion\"  id=\"cbc\" >
\t\t<div class=\"li-ancaor\">
\t\t\t<a href=\"#inicio\" > Inicio <img src=\"./images/ancaor/Ancaor2017.png\" alt=\"Ancaor Logo\"></a>
\t\t</div>
\t\t<nav class=\"inicio-nav\">
\t\t\t<ul>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#inicio\">Inicio</a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-about\"> Ancaor </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-lykrune\"> Lykrune </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-lunarcode\"> LunarCode </a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>";
    }

    public function getTemplateName()
    {
        return "includes/header.twig";
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
        return new Twig_Source("\t<div class=\"inicio-cabecera\">
\t\t<select id=\"change_theme\" >
\t\t\t<option value=\"0\">Cambiar Tema</option>
\t\t\t<option value=\"1\">Normal</option>
\t\t\t<option value=\"2\">White</option>
\t\t\t<option value=\"3\">Sky</option>
\t\t</select>
\t\t<h3 class=\"txt-cbc\"> Ancaor </h3>
\t\t<p class=\"txtsub-cbc\">\"Ama lo que haces\"</p>
\t</div>
\t<div class=\"navegacion\"  id=\"cbc\" >
\t\t<div class=\"li-ancaor\">
\t\t\t<a href=\"#inicio\" > Inicio <img src=\"./images/ancaor/Ancaor2017.png\" alt=\"Ancaor Logo\"></a>
\t\t</div>
\t\t<nav class=\"inicio-nav\">
\t\t\t<ul>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#inicio\">Inicio</a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-about\"> Ancaor </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-lykrune\"> Lykrune </a></li>
\t\t\t\t<li class=\"none\"><a class=\"normal\" href=\"#section-lunarcode\"> LunarCode </a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>", "includes/header.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\includes\\header.twig");
    }
}
