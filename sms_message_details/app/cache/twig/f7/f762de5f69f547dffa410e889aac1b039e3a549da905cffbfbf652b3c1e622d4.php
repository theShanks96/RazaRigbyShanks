<?php

/* commands_page.html.twig */
class __TwigTemplate_f6f2001cab0da0a51401b9ce0eecda047f26e229a5e490a0459376104d6f6c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "commands_page.html.twig", 1);
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
        <div class=\"tab-content\"> <!--TAB-CONTENT START-->

            <div id=\"signup\"> <!--SIGNUP START-->
                <h1>";
        // line 9
        echo twig_escape_filter($this->env, ($context["greeting_text"] ?? null), "html", null, true);
        echo "</h1>
                <p>";
        // line 10
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["action_saved"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Saved Messages</button>
                </form>
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["action_download"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Download Messages</button>
                </form>
                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["action_display"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Display Messages</button>
                </form>
                <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["action_send"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Send Message</button>
                </form>

                <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["action_change"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" style=\"margin-top: 1em\" class=\"mini-button blue-colour button-block\">Change Password</button>
                </form>

                <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["action_logout"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" style=\"margin-top: 1em\" class=\"mini-button red-colour button-block\">Logout</button>
                </form>
            </div> <!--SIGNUP END-->

            <div id=\"login\"> <!--LOGIN START-->

            </div> <!--LOGIN END-->


        </div><!--TAB-CONTENT END-->
    </div> <!--FORM END-->

    <p>";
        // line 41
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <div class = \"w3c-validate\">
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Table Page</a>
        &nbsp;&nbsp;
        <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">Valid CSS Table Page</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "commands_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  89 => 28,  80 => 24,  71 => 20,  63 => 17,  55 => 14,  47 => 11,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "commands_page.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework_temp\\sms_message_details\\app\\templates\\commands_page.html.twig");
    }
}
