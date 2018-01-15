<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 17:15
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/BcryptWrapper.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class BcryptWrapperTest extends TestCase{
	/*
	 * This function is desgined to test the hashing function 
	 * @var string_to_hash an initial string set to MjyPtqmxgcJWUZpR for testing purposes
	 * @var string_hashed  is a string that has a create_hashed_password function run on it
	 * @var expected_hash_length = 60. The hash is expected to be 60 in length and is compared in the Assertequals condition
	 */

    public function testStringHashing(){
        $bcrypt_wrapper = new BcryptWrapper();

        $string_to_hash = "MjyPtqmxgcJWUZpR";
        $string_hashed = $bcrypt_wrapper->create_hashed_password($string_to_hash);
        $expected_hash_length = 60;

        $this->assertEquals($expected_hash_length, strlen($string_hashed), strlen($string_hashed));
    }

    /**
     * @depends testStringHashing
     */
    public function testAuthentication(){
        $bcrypt_wrapper = new BcryptWrapper();

        $string_to_hash = "MjyPtqmxgcJWUZpR";
        $string_hashed = $bcrypt_wrapper->create_hashed_password($string_to_hash);
        $string_authenticated = $bcrypt_wrapper->authenticate_password($string_to_hash, $string_hashed);

        $this->assertTrue($string_authenticated);
    }

}