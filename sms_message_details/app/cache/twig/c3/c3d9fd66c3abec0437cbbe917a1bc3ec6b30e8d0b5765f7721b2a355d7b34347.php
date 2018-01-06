<?php

/* login_page.html.twig */
class __TwigTemplate_991016f5a7188c3521403fe11dacdfcf4d3d793fb801175c11d20d72af7e2871 extends Twig_Template
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

    <div class=\"form\"> <!--FORM START-->

        <ul class=\"tab-group\">
            <li class=\"tab active\"><a href=\"#signup\">Sign Up</a></li>
            <li class=\"tab\"><a href=\"#login\">Log In</a></li>
        </ul>

        <div class=\"tab-content\"> <!--FORM TAB-CONTENT START-->

            <div id=\"signup\">
                <h1>Sign Up for Access</h1>
                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["action_signup"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"top-row\">
                        <div class=\"field-wrap\">
                            <label>
                                First Name<span class=\"req\">*</span>
                            </label>
                            <input  type=\"text\" name=\"fname\" required autocomplete=\"off\">
                        </div>

                        <div class=\"field-wrap\">
                            <label>
                                Last Name<span class=\"req\">*</span>
                            </label>
                            <input type=\"text\" name=\"lname\" required autocomplete=\"off\">
                        </div>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Username<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"username\" required autocomplete=\"off\">
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Select A Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"password\" name=\"password\" required autocomplete=\"off\">
                    </div>

                    <input type=\"hidden\" name=\"source\" value=\"signup\"/>

                    <button type=\"submit\" class=\"button green-colour button-block\">Sign Up</button>

                </form>
            </div>

            <div id=\"login\">
                <h1>Welcome Back!</h1>

                <form action=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["action_login"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">

                    <div class=\"field-wrap\">
                        <label>
                            Username<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"username\" required autocomplete=\"off\">
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Password<span class=\"req\">*</span>
                        </label>
                        <input type=\"password\" name=\"password\" required autocomplete=\"off\">
                    </div>

                    <input type=\"hidden\" name=\"source\" value=\"login\"/>

                    <button type=\"submit\" class=\"button green-colour button-block\">Log In</button>

                </form>

            </div>

        </div> <!--FORM TAB-CONTENT END-->

    </div> <!--FORM END-->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src=\"js/script.js\"></script>

    <div class = \"w3c-validate\">
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Login</a>
        &nbsp;&nbsp;
        <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">Valid CSS Login</a>
    </div>
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
        return array (  92 => 57,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login_page.html.twig", "D:\\XAMPP\\htdocs\\CTEC3110\\ctec3110-assignment\\sms_message_details\\app\\templates\\login_page.html.twig");
    }
}
