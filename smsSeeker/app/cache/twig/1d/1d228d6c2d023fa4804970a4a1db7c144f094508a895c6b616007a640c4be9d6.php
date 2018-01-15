<?php

/* formlet_layout.html.twig */
class __TwigTemplate_fc02203a862a789f73df5ff680699cad33dbe9a2da0f0828d2b39ad82b2d44c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "formlet_layout.html.twig", 1);
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
        echo "
    <div class=\"form\">

        <div class=\"tab-content\">
            <div id=\"signup\">
                <h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["header_text"] ?? null), "html", null, true);
        echo "</h1>
                <p>Authorisation Required</p>
                <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["action_proceed"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"top-row\">
                        <div class=\"field-wrap\">
                            <label>
                                Username<span class=\"req\">*</span>
                            </label>
                            <input type=\"text\" name=\"username\" required autocomplete=\"off\"/>
                        </div>

                        <div class=\"field-wrap\">
                            <label>
                                Password<span class=\"req\">*</span>
                            </label>
                            <input type=\"password\" name=\"password\" required autocomplete=\"off\"/>
                        </div>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            ";
        // line 29
        echo twig_escape_filter($this->env, ($context["entry_zero"] ?? null), "html", null, true);
        echo "<span class=\"req\">*</span>
                        </label>
                        <input type=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" name=\"entry_zero\" required autocomplete=\"off\"/>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            ";
        // line 36
        echo twig_escape_filter($this->env, ($context["entry_one"] ?? null), "html", null, true);
        echo "<span class=\"req\">*</span>
                        </label>
                        <input type=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" name=\"entry_one\" required autocomplete=\"off\"/>
                    </div>

                    <button type=\"submit\" class=\"mini-button green-colour button-block\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["button_text"] ?? null), "html", null, true);
        echo "</button>

                </form>

                <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["action_back"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Go Back</button>

                </form>

            </div>

            <div id=\"login\">
                <form></form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src=\"../js/script.js\"></script>

    <div class = \"w3c-validate\">
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Table Page</a>
        &nbsp;&nbsp;
        <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">Valid CSS Table Page</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "formlet_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  91 => 41,  85 => 38,  80 => 36,  72 => 31,  67 => 29,  43 => 10,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formlet_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\smsSeeker\\app\\templates\\formlet_layout.html.twig");
    }
}
