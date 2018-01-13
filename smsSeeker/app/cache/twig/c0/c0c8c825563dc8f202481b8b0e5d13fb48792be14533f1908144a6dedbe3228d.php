<?php

/* banner.html.twig */
class __TwigTemplate_83da3f74ab379b77d09d9f8ab5247e9b18bd85c5f15197c12614a5916abc6ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "banner.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'banner' => array($this, 'block_banner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    // line 3
    public function block_banner($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"banner-div\">
        <h1 class=\"headerblock\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_heading_1"] ?? null), "html", null, true);
        echo "</h1>
        <p>
            A product of group 17-3110-AN
            <br>
            Raza P1523890X, Rigby P15223403, Shanks P15225881
        </p>
        <hr class=\"deepline\"/>
    </div>
    <div id=\"clear-div\"></div>
";
    }

    public function getTemplateName()
    {
        return "banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banner.html.twig", "H:\\p3t\\phpappfolder\\public_php\\ctec3110-assignment\\sms_message_details\\app\\templates\\banner.html.twig");
    }
}
