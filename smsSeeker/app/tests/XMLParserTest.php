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
		/*
		 * @var string element_name
		 * this function sets element_name to 'element'
		 * tests if parser can clear element_name 
		 * AssertEquals condition must be empty
		 */
        $element_name = 'element';
        $xml_parser->set_element_name($element_name);
        $xml_parser->clear_set_data();
        $expected_element_name = null;

        $this->assertEquals($expected_element_name, $xml_parser->get_element_name(), $xml_parser->get_element_name());

    }

    /**
     * @depends testClearParserData
	 * @var xml_string tests the XML parser. A string is predefined and parsed
	 * @return assertEquals Data that is given in xml_string must match assertEquals condition to pass this test 
	 *
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