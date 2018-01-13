<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 13/01/2018
 * Time: 17:55
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/SoapModel.php';
require_once '../../coursework/smsSeeker/app/src/SanitisedValidator.php';
require_once '../../coursework/smsSeeker/app/src/XMLParser.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class SoapModelTest extends TestCase{

    public function testSendMessage(){
        $validator_obj = new SanitisedValidator();
        $xml_parser = new XmlParser();
        $soap_obj = new SoapModel();

        $soap_obj->set_validator($validator_obj);
        $soap_obj->set_xml_parser($xml_parser);

        $send_result = $soap_obj->send_message(m2m_destination, group_denomination.',PhpUnit');
        $this->assertEquals('message_sent', $send_result, $send_result);

    }

    /**
     * @depends testSendMessage
     */
    public function testPeekMessages(){
        $validator_obj = new SanitisedValidator();
        $xml_parser = new XmlParser();
        $soap_obj = new SoapModel();

        $soap_obj->set_validator($validator_obj);
        $soap_obj->set_xml_parser($xml_parser);

        $arr_tainted_messages = $soap_obj->peek_messages(m2m_destination);
        $arr_validated_messages = [];
        foreach($arr_tainted_messages as $msg){
            $validated = $validator_obj->validate_message($msg);
            if($validated != null){
                array_push($arr_validated_messages, implode(',', $validated));
            }
        }

        $string_validated_messages = implode(',', $arr_validated_messages);

        $this->assertTrue(count($arr_validated_messages) >= 1, count($arr_validated_messages));
        $this->assertContains('PhpUnit', $string_validated_messages, $string_validated_messages);
    }
}