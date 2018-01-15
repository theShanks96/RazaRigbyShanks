<?php

/* table_layout.html.twig */
class __TwigTemplate_84e7d46c1f3305f643ceb0fb354a5a164824d0e0147134f10aae5ab789018eee extends Twig_Template
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
                            <tr><td><input type=\"checkbox\" checked id=\"destination_check\"> </td> <td class=\"legend-table\">Destination</td>
                                <td><input type=\"checkbox\" checked id=\"switches_check\"> </td> <td class=\"legend-table\">Switches</td>
                            <td><input type=\"checkbox\" checked id=\"temperature_check\"> </td> <td class=\"legend-table\">Temperature</td>
                                </tr>
                            <tr><td><input type=\"checkbox\" checked id=\"timestamp_check\"> </td> <td class=\"legend-table\">Timestamp</td>
                                <td><input type=\"checkbox\" checked id=\"fan_check\"> </td> <td class=\"legend-table\">Fan Direction</td>
                            <td><input type=\"checkbox\" checked id=\"keypad_check\"> </td> <td class=\"legend-table\">Keypad</td>
                                </tr>

                        </table>

                    </fieldset>

                    <table class=\"decorated\">
                        <tr class=\"decorated\">
                            <th class=\"decorated\" rowspan=\"2\">#</th>
                            <th class=\"decorated\" rowspan=\"2\" id=\"destination_0\">Destination</th>
                            <th class=\"decorated\" rowspan=\"2\" id=\"timestamp_0\">Timestamp</th>
                            <th class=\"decorated\" colspan=\"4\" id=\"switches_0\">Switches</th>
                            <th class=\"decorated\" rowspan=\"2\" id=\"fan_0\">Fan</th>
                            <th class=\"decorated\" rowspan=\"2\" id=\"temperature_0\">Temp.</th>
                            <th class=\"decorated\" rowspan=\"2\" id=\"keypad_0\">Keypad</th>
                        </tr>
                        <tr>
                            <th class=\"decorated\" id=\"switches_1\">0</th>
                            <th class=\"decorated\" id=\"switches_2\">1</th>
                            <th class=\"decorated\" id=\"switches_3\">2</th>
                            <th class=\"decorated\" id=\"switches_4\">3</th>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["Zero_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_1\">";
        // line 44
        echo twig_escape_filter($this->env, ($context["Zero_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_1\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["Zero_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_5\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_6\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["Zero_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_7\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_8\">";
        // line 49
        echo twig_escape_filter($this->env, ($context["Zero_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_1\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["Zero_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_1\">";
        // line 51
        echo twig_escape_filter($this->env, ($context["Zero_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_1\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["Zero_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 55
        echo twig_escape_filter($this->env, ($context["One_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_2\">";
        // line 56
        echo twig_escape_filter($this->env, ($context["One_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_2\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["One_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_9\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["One_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_10\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["One_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_11\">";
        // line 60
        echo twig_escape_filter($this->env, ($context["One_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_12\">";
        // line 61
        echo twig_escape_filter($this->env, ($context["One_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_2\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["One_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_2\">";
        // line 63
        echo twig_escape_filter($this->env, ($context["One_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_2\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["One_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 67
        echo twig_escape_filter($this->env, ($context["Two_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_3\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["Two_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_3\">";
        // line 69
        echo twig_escape_filter($this->env, ($context["Two_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_13\">";
        // line 70
        echo twig_escape_filter($this->env, ($context["Two_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_14\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["Two_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_15\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["Two_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_16\">";
        // line 73
        echo twig_escape_filter($this->env, ($context["Two_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_3\">";
        // line 74
        echo twig_escape_filter($this->env, ($context["Two_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_3\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["Two_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_3\">";
        // line 76
        echo twig_escape_filter($this->env, ($context["Two_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 79
        echo twig_escape_filter($this->env, ($context["Three_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_4\">";
        // line 80
        echo twig_escape_filter($this->env, ($context["Three_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_4\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["Three_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_17\">";
        // line 82
        echo twig_escape_filter($this->env, ($context["Three_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_18\">";
        // line 83
        echo twig_escape_filter($this->env, ($context["Three_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_19\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["Three_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_20\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["Three_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_4\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["Three_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_4\">";
        // line 87
        echo twig_escape_filter($this->env, ($context["Three_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_4\">";
        // line 88
        echo twig_escape_filter($this->env, ($context["Three_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 91
        echo twig_escape_filter($this->env, ($context["Four_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_5\">";
        // line 92
        echo twig_escape_filter($this->env, ($context["Four_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_5\">";
        // line 93
        echo twig_escape_filter($this->env, ($context["Four_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_21\">";
        // line 94
        echo twig_escape_filter($this->env, ($context["Four_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_22\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["Four_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_23\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["Four_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_24\">";
        // line 97
        echo twig_escape_filter($this->env, ($context["Four_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_5\">";
        // line 98
        echo twig_escape_filter($this->env, ($context["Four_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_5\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["Four_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_5\">";
        // line 100
        echo twig_escape_filter($this->env, ($context["Four_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 103
        echo twig_escape_filter($this->env, ($context["Five_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_6\">";
        // line 104
        echo twig_escape_filter($this->env, ($context["Five_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_6\">";
        // line 105
        echo twig_escape_filter($this->env, ($context["Five_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_25\">";
        // line 106
        echo twig_escape_filter($this->env, ($context["Five_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_26\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["Five_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_27\">";
        // line 108
        echo twig_escape_filter($this->env, ($context["Five_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_28\">";
        // line 109
        echo twig_escape_filter($this->env, ($context["Five_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_6\">";
        // line 110
        echo twig_escape_filter($this->env, ($context["Five_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_6\">";
        // line 111
        echo twig_escape_filter($this->env, ($context["Five_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_6\">";
        // line 112
        echo twig_escape_filter($this->env, ($context["Five_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 115
        echo twig_escape_filter($this->env, ($context["Six_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_7\">";
        // line 116
        echo twig_escape_filter($this->env, ($context["Six_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_7\">";
        // line 117
        echo twig_escape_filter($this->env, ($context["Six_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_29\">";
        // line 118
        echo twig_escape_filter($this->env, ($context["Six_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_30\">";
        // line 119
        echo twig_escape_filter($this->env, ($context["Six_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_31\">";
        // line 120
        echo twig_escape_filter($this->env, ($context["Six_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_32\">";
        // line 121
        echo twig_escape_filter($this->env, ($context["Six_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_7\">";
        // line 122
        echo twig_escape_filter($this->env, ($context["Six_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_7\">";
        // line 123
        echo twig_escape_filter($this->env, ($context["Six_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_7\">";
        // line 124
        echo twig_escape_filter($this->env, ($context["Six_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 127
        echo twig_escape_filter($this->env, ($context["Seven_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_8\">";
        // line 128
        echo twig_escape_filter($this->env, ($context["Seven_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_8\">";
        // line 129
        echo twig_escape_filter($this->env, ($context["Seven_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_33\">";
        // line 130
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_34\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["Seven_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_35\">";
        // line 132
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_36\">";
        // line 133
        echo twig_escape_filter($this->env, ($context["Seven_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_8\">";
        // line 134
        echo twig_escape_filter($this->env, ($context["Seven_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_8\">";
        // line 135
        echo twig_escape_filter($this->env, ($context["Seven_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_8\">";
        // line 136
        echo twig_escape_filter($this->env, ($context["Seven_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 139
        echo twig_escape_filter($this->env, ($context["Eight_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_9\">";
        // line 140
        echo twig_escape_filter($this->env, ($context["Eight_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_9\">";
        // line 141
        echo twig_escape_filter($this->env, ($context["Eight_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_37\">";
        // line 142
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_38\">";
        // line 143
        echo twig_escape_filter($this->env, ($context["Eight_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_39\">";
        // line 144
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_40\">";
        // line 145
        echo twig_escape_filter($this->env, ($context["Eight_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_9\">";
        // line 146
        echo twig_escape_filter($this->env, ($context["Eight_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_9\">";
        // line 147
        echo twig_escape_filter($this->env, ($context["Eight_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_9\">";
        // line 148
        echo twig_escape_filter($this->env, ($context["Eight_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"decorated\">
                            <td class=\"decorated\">";
        // line 151
        echo twig_escape_filter($this->env, ($context["Nine_Indicator"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"destination_10\">";
        // line 152
        echo twig_escape_filter($this->env, ($context["Nine_Destination"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"timestamp_10\">";
        // line 153
        echo twig_escape_filter($this->env, ($context["Nine_Timestamp"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_41\">";
        // line 154
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Zero"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_42\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["Nine_Switches_One"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_43\">";
        // line 156
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Two"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"switches_44\">";
        // line 157
        echo twig_escape_filter($this->env, ($context["Nine_Switches_Three"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"fan_10\">";
        // line 158
        echo twig_escape_filter($this->env, ($context["Nine_Fan"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"temperature_10\">";
        // line 159
        echo twig_escape_filter($this->env, ($context["Nine_Temperature"] ?? null), "html", null, true);
        echo "</td>
                            <td class=\"decorated\" id=\"keypad_10\">";
        // line 160
        echo twig_escape_filter($this->env, ($context["Nine_Keypad"] ?? null), "html", null, true);
        echo "</td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <form action=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["action_save"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"save\"/>
                                <div class=\"field-wrap\">
                                    <label style=\"margin-left: 10%\">
                                        Entries to alter: separate with commas (,)
                                    </label>
                                    <input type=\"text\" name=\"alters\" style=\"width: 80%; margin-left: 10%;\"/>
                                </div>
                                <td><button type=\"submit\" class=\"mini-button green-colour button-block\" >";
        // line 174
        echo twig_escape_filter($this->env, ($context["Selected_Messages"] ?? null), "html", null, true);
        echo "</button></form></td>

                            <td><form action=\"";
        // line 176
        echo twig_escape_filter($this->env, ($context["action_last"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"last\"/>
                                    <input type=\"hidden\" name=\"last_page\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "\"/>
                                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Last Page</button></form></td>
                            <td> <p class=\"button-block mini-button\" style=\"background: #34495E\"> ";
        // line 180
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["total_pages"] ?? null), "html", null, true);
        echo " </p> </td>
                            <td><form action=\"";
        // line 181
        echo twig_escape_filter($this->env, ($context["action_next"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"source\" value=\"next\"/>
                                    <input type=\"hidden\" name=\"last_page\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "\"/>
                                    <button type=\"submit\" class=\"mini-button green-colour button-block\">Next Page</button></form></td>
                            <td><form action=\"";
        // line 185
        echo twig_escape_filter($this->env, ($context["action_back"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method_post"] ?? null), "html", null, true);
        echo "\">
                                    <button type=\"submit\" class=\"mini-button blue-colour button-block\">Go Back</button></form></td>
                        </tr>
                    </table>



            </div>

            <div id=\"login\">
                <form></form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src=\"../js/script.js\"></script>
    <script  src=\"../js/table_script.js\"></script>

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
        return array (  547 => 185,  542 => 183,  535 => 181,  529 => 180,  524 => 178,  517 => 176,  512 => 174,  499 => 166,  490 => 160,  486 => 159,  482 => 158,  478 => 157,  474 => 156,  470 => 155,  466 => 154,  462 => 153,  458 => 152,  454 => 151,  448 => 148,  444 => 147,  440 => 146,  436 => 145,  432 => 144,  428 => 143,  424 => 142,  420 => 141,  416 => 140,  412 => 139,  406 => 136,  402 => 135,  398 => 134,  394 => 133,  390 => 132,  386 => 131,  382 => 130,  378 => 129,  374 => 128,  370 => 127,  364 => 124,  360 => 123,  356 => 122,  352 => 121,  348 => 120,  344 => 119,  340 => 118,  336 => 117,  332 => 116,  328 => 115,  322 => 112,  318 => 111,  314 => 110,  310 => 109,  306 => 108,  302 => 107,  298 => 106,  294 => 105,  290 => 104,  286 => 103,  280 => 100,  276 => 99,  272 => 98,  268 => 97,  264 => 96,  260 => 95,  256 => 94,  252 => 93,  248 => 92,  244 => 91,  238 => 88,  234 => 87,  230 => 86,  226 => 85,  222 => 84,  218 => 83,  214 => 82,  210 => 81,  206 => 80,  202 => 79,  196 => 76,  192 => 75,  188 => 74,  184 => 73,  180 => 72,  176 => 71,  172 => 70,  168 => 69,  164 => 68,  160 => 67,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  112 => 52,  108 => 51,  104 => 50,  100 => 49,  96 => 48,  92 => 47,  88 => 46,  84 => 45,  80 => 44,  76 => 43,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table_layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\smsSeeker\\app\\templates\\table_layout.html.twig");
    }
}
