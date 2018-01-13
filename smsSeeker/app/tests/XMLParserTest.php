<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 17:55
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/XMLParser.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class XMLParserTest extends TestCase{

    public function testClearParserData(){
        $xml_parser = new XmlParser();

        $element_name = 'element';
        $xml_parser->set_element_name($element_name);
        $xml_parser->clear_set_data();
        $expected_element_name = null;

        $this->assertEquals($expected_element_name, $xml_parser->get_element_name(), $xml_parser->get_element_name());

    }

    /**
     * @depends testClearParserData
     */
    public function testXMLParsing(){
        $xml_parser = new XmlParser();

        $xml_string = '<Names><Name><FirstName>John</FirstName><LastName>Smith</LastName></Name>';
        $xml_parser->set_xml_string_to_parse($xml_string);
        $xml_parser->parse_the_xml_string();
        $parsed_xml = implode(',', $xml_parser->get_parsed_data());

        $this->assertEquals('John,Smith', $parsed_xml, $parsed_xml);

    }

}