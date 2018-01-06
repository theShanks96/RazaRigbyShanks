<?php

/* table_layout.html.twig */
class __TwigTemplate_e189d966b819f1f416a60ea20a33f4761bd286d982b9bb1142d7e1648facd169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "table_layout.html.twig", 1);
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
        echo "    <div class=\"table-super\">
        <div class=\"tab-content\">
            <div id=\"signup\">
                <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h1>

                    <fieldset>
                        <legend style=\"color: #BDC3C7;\">Displayed Information</legend>

                        <table class=\"legend-table\" >
                            <tr><th colspan=\"2\" class=\"legend-table\">Metadata</th><th colspan=\"2\" class=\"legend-table\">Content</th></tr>
                            <tr><td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Sender</td>
                                <td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Switches</td></tr>
                            <tr><td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Receiver</td>
                                <td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Temperature</td></tr>
                            <tr><td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Timestamp</td>
                                <td><input type=\"checkbox\" checked=\"checked\" name=\"Sender\"> </td> <td class=\"legend-table\">Keypad</td></tr>
                        </table>

                    </fieldset>

                    <table class=\"decorated\">
                        <tr class=\"decorated\">
                            <th class=\"decorated\" colspan=\"4\">Metadata</th>
                            <th class=\"decorated\" colspan=\"4\">Content</th>
                        </tr>

                        <tr class=\"decorated\">
                            <th class=\"decorated\"></th>
                            <th class=\"decorated\">Sender</th>
                            <th class=\"decorated\">Receiver</th>
                            <th class=\"decorated\">Timestamp</th>
                            <th class=\"decorated\">Switches</th>
                            <th class=\"decorated\">Temp.</th>
                            <th class=\"decorated\">Keypad</th>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\"><input type=\"checkbox\"></td>
                            <td class=\"decorated\">Jill</td>
                            <td class=\"decorated\">Smith</td>
                            <td class=\"decorated\">50</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">21</td>
                            <td class=\"decorated\">50</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\"><input type=\"checkbox\">  </td>
                            <td class=\"decorated\">Eve</td>
                            <td class=\"decorated\">Jackson</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">32</td>
                            <td class=\"decorated\">50</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\"><input type=\"checkbox\">  </td>
                            <td class=\"decorated\">Eve</td>
                            <td class=\"decorated\">Jackson</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">43</td>
                            <td class=\"decorated\">50</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\"><input type=\"checkbox\">  </td>
                            <td class=\"decorated\">Eve</td>
                            <td class=\"decorated\">Jackson</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">45</td>
                            <td class=\"decorated\">50</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\"><input type=\"checkbox\">  </td>
                            <td class=\"decorated\">Eve</td>
                            <td class=\"decorated\">Jackson</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">94</td>
                            <td class=\"decorated\">67</td>
                            <td class=\"decorated\">50</td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td><form action=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["action_saved"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["post_method"] ?? null), "html", null, true);
        echo "\"><button type=\"submit\" class=\"mini-button green-colour button-block\">Save Messages</button></form></td>
                            <td><form action=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["action_last"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["post_method"] ?? null), "html", null, true);
        echo "\"><button type=\"submit\" class=\"mini-button green-colour button-block\">Last Page</button></form></td>
                            <td><form action=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["action_next"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["post_method"] ?? null), "html", null, true);
        echo "\"><button type=\"submit\" class=\"mini-button green-colour button-block\">Next Page</button></form></td>
                            <td><form action=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["action_back"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\"><button type=\"submit\" class=\"mini-button blue-colour button-block\">Go Back</button></form></td>
                        </tr>
                    </table>



            </div>

            <div id=\"login\">

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <div>
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Table Pagee</a>
        &nbsp;&nbsp;
        <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">Valid CSS Table Page</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "table_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 90,  132 => 89,  126 => 88,  120 => 87,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table_layout.html.twig", "D:\\XAMPP\\htdocs\\CTEC3110\\ctec3110-assignment\\sms_message_details\\app\\templates\\table_layout.html.twig");
    }
}
