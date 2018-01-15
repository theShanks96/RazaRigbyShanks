<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 17:01
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/OpenSSLWrapper.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class OpenSSLWrapperTest extends TestCase{
	/*
	 *
	 *
	 *
	 *
	 *
	 */
    public function testEncryption(){
        $openssl_wrapper = new OpenSSLWrapper();

        $string_to_encrypt = "Hello World";
        $string_encrypted = $openssl_wrapper->encrypt($string_to_encrypt, OPENSSL_KEY);
        $expected_encrypted_length = 24;

        $this->assertEquals($expected_encrypted_length, strlen($string_encrypted), 'Difference in length: ' . abs(strlen($string_encrypted) - $expected_encrypted_length));
    }

    /**
     * @depends testEncryption
	 * 
     */
    public function testDecryption(){
        $openssl_wrapper = new OpenSSLWrapper();

        $string_to_encrypt = "Hello World";
        $string_encrypted = $openssl_wrapper->encrypt($string_to_encrypt, OPENSSL_KEY);
        $string_decrypted = $openssl_wrapper->decrypt($string_encrypted, OPENSSL_KEY);

        $this->assertEquals($string_to_encrypt, $string_decrypted, $string_decrypted);
    }
}