<?php

/* commands_page.html.twig */
class __TwigTemplate_3702b446c51113be20101f042d0a15cb12aad7ae5d18d90674e3848fb7849072 extends Twig_Template
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

    <h1 class=\"red-colour\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["message_1"] ?? null), "html", null, true);
        echo "</h1>


    <div class=\"form\"> <!--FORM START-->
        <div class=\"tab-content\"> <!--TAB-CONTENT START-->

            <div id=\"signup\"> <!--SIGNUP START-->
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["greeting_text"] ?? null), "html", null, true);
        echo "</h1>
                <p>";
        // line 13
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["action_saved"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Saved Messages</button>
                </form>
                <table class=\"free\">
                    <tr class=\"free\">
                        <td><form action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["action_download"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"mini-button green-colour button-block\">Download Messages</button>
                        </form></td>
                        <td><form action=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["action_clear"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"mini-button red-colour button-block\">Clear</button>
                        </form></td>
                    </tr>
                </table>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["action_display"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Display Messages</button>
                </form>
                <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["action_send"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Send Message</button>
                </form>

                <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["action_change"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" style=\"margin-top: 1em\" class=\"mini-button blue-colour button-block\">Change Password</button>
                </form>

                <form action=\"";
        // line 38
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
        // line 51
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
        return array (  125 => 51,  107 => 38,  98 => 34,  89 => 30,  81 => 27,  71 => 22,  63 => 19,  53 => 14,  49 => 13,  45 => 12,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "commands_page.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\smsSeeker\\app\\templates\\commands_page.html.twig");
    }
}
