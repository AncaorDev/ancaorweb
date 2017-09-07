<?php

/* server/time.twig */
class __TwigTemplate_110b82aee6e5c2663b6973fd7303cd63d79fbacf55e791e84a0097869448e3ed extends Twig_Template
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
        echo "<div class=\"col-md-12\" style=\"background: black\">
\t<p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["datos"]) ? $context["datos"] : null), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "server/time.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-12\" style=\"background: black\">
\t<p>{{datos}}</p>
</div>", "server/time.twig", "C:\\xampp\\htdocs\\AncaorZ\\resources\\views\\server\\time.twig");
    }
}
