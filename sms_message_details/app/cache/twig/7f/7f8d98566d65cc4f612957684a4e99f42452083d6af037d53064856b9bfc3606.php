<?php

/* display_result.html.twig */
class __TwigTemplate_f8ab9ceb061e0aaa9fbc3d591cfb9e5d3433a0fcd715f8191a4e70373e04ae89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "display_result.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "banner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <div id=\"lg-form-container\">
  <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h2>
  <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
    <p>Country selected was <b>";
        // line 6
        echo twig_escape_filter($this->env, ($context["country_name"] ?? null), "html", null, true);
        echo "</b></p>
    <p>Required detail was <b>";
        // line 7
        echo twig_escape_filter($this->env, ($context["detail"] ?? null), "html", null, true);
        echo "</b></p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["result"] ?? null), "html", null, true);
        echo "</p>
    <p class=\"curr_page\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Another go</a></p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "display_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_result.html.twig", "/p3t/phpappfolder/includes/country_details/app/templates/display_result.html.twig");
    }
}
