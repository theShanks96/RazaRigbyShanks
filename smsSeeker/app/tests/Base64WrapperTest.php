<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 17:37
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/Base64Wrapper.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class Base64WrapperTest extends TestCase{
/*
 * The purpose of this function nis to test encoding and decoding. 
 * @var string_to_encode the original string that is passed through to be encoded. 
 * @var encoded_string string after encoding. A base of 64 is used
 * @return assertEquals The length is checked of the encoded string 
 */

    public function testEncoding(){
        $base64_wrapper = new Base64Wrapper();

        $string_to_encode = 'billybob@email.com';
        $encoded_string = $base64_wrapper->encode_base64($string_to_encode);
        $expected_string_length = 24;

        $this->assertEquals($expected_string_length, strlen($encoded_string), $encoded_string);

    }

    /**
     * This function tests for decoding
	 * @var string_to_encode sets the initial string to encode and decode. 
	 * @var encoded_string string_to_encode will encode the initial string (string_to_encode)
	 * @var decoded_string initial string is decoded 
	 * @return assertEquals strings are compared to see if they match the initial string.
	 *
     */
    public function testDecoding(){
        $base64_wrapper = new Base64Wrapper();

        $string_to_encode = 'billybob@email.com';
        $encoded_string = $base64_wrapper->encode_base64($string_to_encode);
        $decoded_string = $base64_wrapper->decode_base64($encoded_string);

        $this->assertEquals($string_to_encode, $decoded_string, $decoded_string);
    }
}