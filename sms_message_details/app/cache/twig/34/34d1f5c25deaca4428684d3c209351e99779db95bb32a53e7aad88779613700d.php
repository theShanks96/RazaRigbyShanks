<?php

/* invalidat.html.twig */
class __TwigTemplate_ad54587f3fb5aef9cfbd462c5c0589a9742a83dc90d07fc064795d6c570bc269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "invalidat.html.twig", 1);
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
        echo "    <div class=\"form\">
        <div class=\"tab-content\">
            <div id=\"signup\">
                <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h1>
                <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">
                    <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>

                    <button type=\"submit\" class=\"button button-block\"/>Go Back</button>

                </form>

            </div>

            <div id=\"login\">

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src=\"js/script.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "invalidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "invalidat.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\invalidat.html.twig");
    }
}
