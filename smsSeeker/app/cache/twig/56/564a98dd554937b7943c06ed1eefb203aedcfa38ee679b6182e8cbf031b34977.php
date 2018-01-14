<?php

/* formlet_layout.html.twig */
class __TwigTemplate_6b284eee0286689b0ad5f0c34db80c572e2f07ed912166ad05fcc20de0358386 extends Twig_Template
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
                <h1>Change Password</h1>
                <p>Authorisation Required</p>
                <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["action_change"] ?? null), "html", null, true);
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
                                Current Password<span class=\"req\">*</span>
                            </label>
                            <input type=\"password\" name=\"password\" required autocomplete=\"off\"/>
                        </div>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            New Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"new_password_0\" required autocomplete=\"off\"/>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Repeat New Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"new_password_1\" required autocomplete=\"off\"/>
                    </div>

                    <button type=\"submit\" class=\"mini-button button-block\"/>Change Password</button>

                </form>

                <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["action_back"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"mini-button button-block\"/>Go Back</button>

                </form>

            </div>

            <div id=\"login\">

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src=\"js/script.js\"></script>
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
        return array (  80 => 45,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formlet_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\formlet_layout.html.twig");
    }
}
