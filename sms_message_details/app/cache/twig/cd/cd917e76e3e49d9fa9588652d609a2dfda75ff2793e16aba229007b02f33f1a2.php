<?php

/* table_layout.html.twig */
class __TwigTemplate_950a03fb580b4041f7a1bb25f7ac222aa0545cb1175f61cbe3d0d7a8ca286d37 extends Twig_Template
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
                            <tr><th colspan=\"2\" class=\"legend-table\">Metadata</th><th colspan=\"4\" class=\"legend-table\">Content</th></tr>
                            <tr><td><input type=\"checkbox\" checked=\"checked\" id=\"destination\"> </td> <td class=\"legend-table\">Destination</td>
                                <td><input type=\"checkbox\" checked=\"checked\" name=\"Switches\"> </td> <td class=\"legend-table\">Switches</td>
                            <td><input type=\"checkbox\" checked=\"checked\" name=\"Temperature\"> </td> <td class=\"legend-table\">Temperature</td></tr>
                            <tr><td><input type=\"checkbox\" checked=\"checked\" name=\"Timestamp\"> </td> <td class=\"legend-table\">Timestamp</td>
                                <td><input type=\"checkbox\" checked=\"checked\" name=\"Fan\"> </td> <td class=\"legend-table\">Fan Direction</td>
                            <td><input type=\"checkbox\" checked=\"checked\" name=\"Keypad\"> </td> <td class=\"legend-table\">Keypad</td></tr>
                        </table>

                    </fieldset>

                    <table class=\"decorated\">
                        <tr class=\"decorated\">
                            <th class=\"decorated\" colspan=\"3\">Metadata</th>
                            <th class=\"decorated\" colspan=\"8\">Content</th>
                        </tr>

                        <tr class=\"decorated\">
                            <th class=\"decorated\" rowspan=\"2\">#</th>
                            <th class=\"decorated\" rowspan=\"2\">Destination</th>
                            <th class=\"decorated\" rowspan=\"2\">Timestamp</th>
                            <th class=\"decorated\" colspan=\"4\">Switches</th>
                            <th class=\"decorated\" rowspan=\"2\">Fan</th>
                            <th class=\"decorated\" rowspan=\"2\">Temp.</th>
                            <th class=\"decorated\" rowspan=\"2\">Keypad</th>
                        </tr>
                        <tr>
                            <th class=\"decorated\">0</th>
                            <th class=\"decorated\">1</th>
                            <th class=\"decorated\">2</th>
                            <th class=\"decorated\">3</th>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["Zero_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" name=\"destination\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["Zero_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["Zero_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 49
        echo twig_escape_filter($this->env, ($context["Zero_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 51
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["Zero_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["Zero_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["Zero_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["One_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["One_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["One_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 60
        echo twig_escape_filter($this->env, ($context["One_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 61
        echo twig_escape_filter($this->env, ($context["One_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["One_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 63
        echo twig_escape_filter($this->env, ($context["One_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["One_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 65
        echo twig_escape_filter($this->env, ($context["One_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 66
        echo twig_escape_filter($this->env, ($context["One_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 69
        echo twig_escape_filter($this->env, ($context["Two_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 70
        echo twig_escape_filter($this->env, ($context["Two_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["Two_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["Two_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 73
        echo twig_escape_filter($this->env, ($context["Two_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 74
        echo twig_escape_filter($this->env, ($context["Two_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["Two_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 76
        echo twig_escape_filter($this->env, ($context["Two_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 77
        echo twig_escape_filter($this->env, ($context["Two_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 78
        echo twig_escape_filter($this->env, ($context["Two_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["Three_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 82
        echo twig_escape_filter($this->env, ($context["Three_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 83
        echo twig_escape_filter($this->env, ($context["Three_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["Three_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["Three_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["Three_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 87
        echo twig_escape_filter($this->env, ($context["Three_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 88
        echo twig_escape_filter($this->env, ($context["Three_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 89
        echo twig_escape_filter($this->env, ($context["Three_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 90
        echo twig_escape_filter($this->env, ($context["Three_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 93
        echo twig_escape_filter($this->env, ($context["Four_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 94
        echo twig_escape_filter($this->env, ($context["Four_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["Four_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["Four_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 97
        echo twig_escape_filter($this->env, ($context["Four_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 98
        echo twig_escape_filter($this->env, ($context["Four_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["Four_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 100
        echo twig_escape_filter($this->env, ($context["Four_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 101
        echo twig_escape_filter($this->env, ($context["Four_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 102
        echo twig_escape_filter($this->env, ($context["Four_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 105
        echo twig_escape_filter($this->env, ($context["Five_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 106
        echo twig_escape_filter($this->env, ($context["Five_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["Five_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 108
        echo twig_escape_filter($this->env, ($context["Five_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 109
        echo twig_escape_filter($this->env, ($context["Five_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 110
        echo twig_escape_filter($this->env, ($context["Five_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 111
        echo twig_escape_filter($this->env, ($context["Five_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 112
        echo twig_escape_filter($this->env, ($context["Five_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 113
        echo twig_escape_filter($this->env, ($context["Five_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 114
        echo twig_escape_filter($this->env, ($context["Five_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 117
        echo twig_escape_filter($this->env, ($context["Six_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 118
        echo twig_escape_filter($this->env, ($context["Six_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 119
        echo twig_escape_filter($this->env, ($context["Six_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 120
        echo twig_escape_filter($this->env, ($context["Six_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 121
        echo twig_escape_filter($this->env, ($context["Six_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 122
        echo twig_escape_filter($this->env, ($context["Six_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 123
        echo twig_escape_filter($this->env, ($context["Six_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 124
        echo twig_escape_filter($this->env, ($context["Six_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 125
        echo twig_escape_filter($this->env, ($context["Six_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 126
        echo twig_escape_filter($this->env, ($context["Six_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 129
        echo twig_escape_filter($this->env, ($context["Seven_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 130
        echo twig_escape_filter($this->env, ($context["Seven_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["Seven_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 132
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 133
        echo twig_escape_filter($this->env, ($context["Seven_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 134
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 135
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 136
        echo twig_escape_filter($this->env, ($context["Seven_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 137
        echo twig_escape_filter($this->env, ($context["Seven_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 138
        echo twig_escape_filter($this->env, ($context["Seven_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 141
        echo twig_escape_filter($this->env, ($context["Eight_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 142
        echo twig_escape_filter($this->env, ($context["Eight_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 143
        echo twig_escape_filter($this->env, ($context["Eight_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 144
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 145
        echo twig_escape_filter($this->env, ($context["Eight_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 146
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 147
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 148
        echo twig_escape_filter($this->env, ($context["Eight_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 149
        echo twig_escape_filter($this->env, ($context["Eight_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 150
        echo twig_escape_filter($this->env, ($context["Eight_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 153
        echo twig_escape_filter($this->env, ($context["Nine_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 154
        echo twig_escape_filter($this->env, ($context["Nine_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["Nine_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 156
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 157
        echo twig_escape_filter($this->env, ($context["Nine_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 158
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 159
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 160
        echo twig_escape_filter($this->env, ($context["Nine_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 161
        echo twig_escape_filter($this->env, ($context["Nine_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\">";
        // line 162
        echo twig_escape_filter($this->env, ($context["Nine_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <form action=\"";
        // line 168
        echo twig_escape_filter($this->env, ($context["action_save"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"save\"/>
                                <div class=\"field-wrap\"><label style=\"margin-left: 10%\">
                                        Entries to alter: separate with commas (,)
                                    </label>
                                <input type=\"text\" name=\"alters\" style=\"width: 80%; margin-left: 10%;\"/></div>
                                <td><button type=\"submit\" class=\"mini-button green-colour button-block\" >";
        // line 174
        echo twig_escape_filter($this->env, ($context["Selected_Messages"] ?? null), "html", null, true);
        echo "</button></form></td>
                            <td><form action=\"";
        // line 175
        echo twig_escape_filter($this->env, ($context["action_last"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"last\"/>
                                    <input type=\"hidden\" name=\"last_page\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "\"/>
                                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Last Page</button></form></td>
                            <td> <p class=\"button-block mini-button\" style=\"background: #34495E\"> ";
        // line 179
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["total_pages"] ?? null), "html", null, true);
        echo " </p> </td>
                            <td><form action=\"";
        // line 180
        echo twig_escape_filter($this->env, ($context["action_next"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"next\"/>
                                    <input type=\"hidden\" name=\"last_page\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "\"/>
                                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Next Page</button></form></td>
                            <td><form action=\"";
        // line 184
        echo twig_escape_filter($this->env, ($context["action_back"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Go Back</button></form></td>
                        </tr>
                    </table>



            </div>

            <div id=\"login\">

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src=\"js/script.js\"></script>
    <script  src=\"js/table_script.js\"></script>

    <div class = \"w3c-validate\">
        <a href=\"http://validator.w3.org/check?uri=referer\">Valid HTML 5 Table Page</a>
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
        return array (  546 => 184,  541 => 182,  534 => 180,  528 => 179,  523 => 177,  516 => 175,  512 => 174,  501 => 168,  492 => 162,  488 => 161,  484 => 160,  480 => 159,  476 => 158,  472 => 157,  468 => 156,  464 => 155,  460 => 154,  456 => 153,  450 => 150,  446 => 149,  442 => 148,  438 => 147,  434 => 146,  430 => 145,  426 => 144,  422 => 143,  418 => 142,  414 => 141,  408 => 138,  404 => 137,  400 => 136,  396 => 135,  392 => 134,  388 => 133,  384 => 132,  380 => 131,  376 => 130,  372 => 129,  366 => 126,  362 => 125,  358 => 124,  354 => 123,  350 => 122,  346 => 121,  342 => 120,  338 => 119,  334 => 118,  330 => 117,  324 => 114,  320 => 113,  316 => 112,  312 => 111,  308 => 110,  304 => 109,  300 => 108,  296 => 107,  292 => 106,  288 => 105,  282 => 102,  278 => 101,  274 => 100,  270 => 99,  266 => 98,  262 => 97,  258 => 96,  254 => 95,  250 => 94,  246 => 93,  240 => 90,  236 => 89,  232 => 88,  228 => 87,  224 => 86,  220 => 85,  216 => 84,  212 => 83,  208 => 82,  204 => 81,  198 => 78,  194 => 77,  190 => 76,  186 => 75,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  166 => 70,  162 => 69,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  124 => 58,  120 => 57,  114 => 54,  110 => 53,  106 => 52,  102 => 51,  98 => 50,  94 => 49,  90 => 48,  86 => 47,  82 => 46,  78 => 45,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework_temp\\sms_message_details\\app\\templates\\table_layout.html.twig");
    }
}
