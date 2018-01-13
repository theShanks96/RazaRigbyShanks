<?php

/* commands_page.html.twig */
class __TwigTemplate_4b46d6814cedfb6b23163d96eceaef52d3321d27335d736c78282d3842f47943 extends Twig_Template
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

    <div class=\"form\">
        <div class=\"tab-content\">
            <div id=\"signup\">
                <h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["greeting_text"] ?? null), "html", null, true);
        echo "</h1>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["page_text"] ?? null), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["action_saved"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\"/>Saved Messages</button>
                </form>
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["action_download"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\"/>Download Messages</button>
                </form>
                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["action_display"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\"/>Display Messages</button>
                </form>
                <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["action_filter"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button blue-colour button-block\"/>Filter by Metadata</button>
                </form>
                <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["action_send"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"mini-button green-colour button-block\"/>Send Message</button>
                </form>

                <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["action_change"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" style=\"margin-top: 1em\" class=\"mini-button blue-colour button-block\"/>Change Password</button>
                </form>

                <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["action_logout"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                    <button type=\"submit\" style=\"margin-top: 1em\" class=\"mini-button red-colour button-block\"/>Logout</button>
                </form>

            </div>
            <div id=\"login\">
            </div>
        </div><!-- tab-content -->

    </div> <!-- /form -->
    <p>";
        // line 40
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
        return array (  111 => 40,  96 => 30,  87 => 26,  78 => 22,  70 => 19,  62 => 16,  54 => 13,  46 => 10,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "commands_page.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\commands_page.html.twig");
    }
}
