<?php

/* homepageform.html.twig */
class __TwigTemplate_0e5f70f8aacf31420cfec72ca5e4ccc5cb9c481b1c1708633613a87ef8bbfce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "homepageform.html.twig", 1);
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
        echo "    <div id=\"page-content-div\">
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h2>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">
            <fieldset>
                <legend>Country details</legend>
                <br>
                <p>Select a country:</p>
                <select id=\"country\" name=\"country\" required>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["country_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 13
            echo "                        <option>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </select>
                <br>
                <p>Select the required detail:</p>
                <label for=\"code\"><input id=\"code\" type=\"radio\" name=\"detail\" value=\"code\">Country Code</label>
                <label for=\"currency\"><input id=\"currency\" type=\"radio\" name=\"detail\" value=\"currency\">Currency</label>
                <label for=\"curcode\"><input id=\"curcode\" type=\"radio\" name=\"detail\" value=\"curcode\">Currency Code</label>
                <label for=\"gmt\"><input id=\"gmt\" type=\"radio\" name=\"detail\" value=\"gmt\">GMT</label>
                <br><br>
                <input type=\"submit\" value=\"Retrieve the details >>>\">
            </fieldset>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "homepageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  57 => 13,  53 => 12,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/p3t/phpappfolder/includes/country_details/app/templates/homepageform.html.twig");
    }
}
