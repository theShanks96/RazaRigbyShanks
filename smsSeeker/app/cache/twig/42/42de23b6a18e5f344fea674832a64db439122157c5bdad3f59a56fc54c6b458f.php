<?php

/* compose_layout.html.twig */
class __TwigTemplate_54611b84cff7780df7a49f0975bbad8a464dc06554a4ded428e770d08e632a55 extends Twig_Template
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
                                Current Password<span class=\"req\">*</span>
                            </label>
                            <input type=\"password\" name=\"password\" required autocomplete=\"off\"/>
                        </div>
                    </div>

                    <div class=\"field-wrap\">
                        <table class=\"decorated\">
                            <tr class=\"decorated\">
                                <th class=\"decorated\" colspan=\"4\">Switches</th>
                                <th class=\"decorated\" colspan=\"2\" rowspan=\"2\">Fan Direction</th>
                            </tr>
                            <tr class=\"decorated\">
                                <td class=\"decorated\">0</td>
                                <td class=\"decorated\">1</td>
                                <td class=\"decorated\">2</td>
                                <td class=\"decorated\">3</td>
                            </tr>
                            <tr class=\"decorated\">
                                <td class=\"decorated\"><input type=\"checkbox\" name=\"switch_zero\"></td>
                                <td class=\"decorated\"><input type=\"checkbox\" name=\"switch_one\"></td>
                                <td class=\"decorated\"><input type=\"checkbox\" name=\"switch_two\"></td>
                                <td class=\"decorated\"><input type=\"checkbox\" name=\"switch_three\"></td>
                                <td class=\"decorated\"><input type=\"radio\" value=\"forward\" name=\"radio_fan\" checked=\"checked\">Forward</td>
                                <td class=\"decorated\"><input type=\"radio\" value=\"reverse\" name=\"radio_fan\">Reverse</td>
                            </tr>

                            <tr class=\"decorated\">
                                <th class=\"decorated\" class=\"decorated\" colspan=\"4\" >Temperature</th>
                                <th class=\"decorated\" class=\"decorated\" colspan=\"2\" >Keypad</th>
                            </tr>
                            <tr>
                                <td class=\"decorated\">-10</td>
                                <td class=\"decorated\" colspan=\"2\"><input type=\"range\" min=\"-10\" max=\"50\" name=\"temperature\" id=\"temperature_slider\"></td>
                                <td class=\"decorated\">+50</td>
                                <td class=\"decorated\" colspan=\"2\">
                                    <select name=\"keypad\">
                                        <option value=\"*\">*</option>
                                        <option value=\"0\">0</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"#\">#</option>
                                    </select>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <button type=\"submit\" class=\"mini-button green-colour button-block\">";
        // line 77
        echo twig_escape_filter($this->env, ($context["button_text"] ?? null), "html", null, true);
        echo "</button>

                </form>

                <form action=\"";
        // line 81
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
    <script src=\"../../js/script.js\"></script>

    <div class = \"w3c-validate\">
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Table Page</a>
        &nbsp;&nbsp;
        <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">Valid CSS Table Page</a>
    </div>
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
        return array (  122 => 81,  115 => 77,  43 => 10,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "compose_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework_temp\\sms_message_details\\app\\templates\\compose_layout.html.twig");
    }
}
