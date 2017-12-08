<?php

/* compose_layout.html.twig */
class __TwigTemplate_4eaa2755051e1fd422576e6a1b2b19973ca190552fc6e296e1f156a134e70458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "compose_layout.html.twig", 1);
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
                <h1>Compose & Send Message</h1>
                <p>Authorisation Required</p>
                <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["action_send"] ?? null), "html", null, true);
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
                            Recipient<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"recipient\" required autocomplete=\"off\"/>
                    </div>

                    <div class=\"field-wrap\">
                        <label>
                            Message<span class=\"req\">*</span>
                        </label>
                        <input type=\"text\" name=\"message\" required autocomplete=\"off\"/>
                    </div>

                    <button type=\"submit\" class=\"mini-button button-block\"/>Send Message</button>

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
        return "compose_layout.html.twig";
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
        return new Twig_Source("", "compose_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\compose_layout.html.twig");
    }
}
