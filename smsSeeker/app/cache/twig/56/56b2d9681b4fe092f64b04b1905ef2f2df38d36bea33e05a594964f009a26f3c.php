<?php

/* login_page.html.twig */
class __TwigTemplate_00d6d558d6b950d719cbbb56b5de23d617e325f617b72526fb05c85beeeb434f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "login_page.html.twig", 1);
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
        <ul class=\"tab-group\">
            <li class=\"tab active\"><a href=\"#signup\">Sign Up</a></li>
            <li class=\"tab\"><a href=\"#login\">Log In</a></li>
        </ul>

        <div class=\"tab-content\">
            <div id=\"signup\">
                <h1>Sign Up for Access</h1>
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["action_signup"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"top-row\">
                        <div class=\"field-wrap\">
                            <label>
                                First Name<span class=\"req\">*</span>
                            </label>
                            <input  type=\"text\" name=\"fname\" required autocomplete=\"off\" />
                        </div>

                        <div class=\"field-wrap\">
                            <label>
                                Last Name<span class=\"req\">*</span>
                            </label>
                            <input type=\"text\" name=\"lname\" required autocomplete=\"off\"/>
                        </div>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Username<span class=\"req\">*</span>
                        </label>
                        <input type=\"username\" name=\"username\" required autocomplete=\"off\"/>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Select A Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"password\" name=\"password\" required autocomplete=\"off\"/>
                    </div>

                    <input type=\"hidden\" name=\"source\" value=\"signup\"/>

                    <button type=\"submit\" class=\"button green-colour button-block\"/>Sign Up</button>

                </form>

            </div>

            <div id=\"login\">
                <h1>Welcome Back!</h1>

                <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["action_login"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">

                    <div class=\"field-wrap\">
                        <label>
                            Username<span class=\"req\">*</span>
                        </label>
                        <input type=\"username\" name=\"username\" required autocomplete=\"off\"/>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"password\" name=\"password\" required autocomplete=\"off\"/>
                    </div>

                    <input type=\"hidden\" name=\"source\" value=\"login\"/>

                    <button type=\"submit\" class=\"button green-colour button-block\"/>Log In</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src=\"js/script.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "login_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 56,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login_page.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\login_page.html.twig");
    }
}
