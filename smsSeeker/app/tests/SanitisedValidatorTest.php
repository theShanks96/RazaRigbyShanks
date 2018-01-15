<?php
// this is the required path nature for the phpunittests to properly function
 require_once '../../coursework/smsSeeker/app/src/SanitisedValidator.php';
 use PHPUnit\Framework\TestCase;

 final class SanitisedValidatorTest extends TestCase{

     public function testSanitiseXSS(){
         $xss_string = "</script>alert('gotcha');</script>";
         $this->assertEquals("alert('gotcha');", SanitisedValidator::sanitise_string($xss_string));
     }

     /**
      * @depends testSanitiseXSS
      */
     public function testPasswordValidation(){
         $validator_obj = new SanitisedValidator();

         $too_short = "dqNyJbb";    //  length = 7, must be at least 8
         $too_long = "bkAtuqpRGzMRpgGGkDmqPcPHfVkbWpotoJHManKzUwmjBRxomZyYVQKCsmrJuVg4E"; //  length = 65, maximum must be 64
         $unoriginal = "Password12345drowssap";   //  cannot contain password, drowssap, or 12345

         $this->assertContains('Minimum should be 8 Characters', $validator_obj->validate_password($too_short), strlen($too_short));
         $this->assertContains('Maximum is limited to 64 Characters', $validator_obj->validate_password($too_long), strlen($too_long));
         $this->assertContains('Try Something More Unique', $validator_obj->validate_password($unoriginal));

     }

     /**
        * @depends testSanitiseXSS
        */
     public function testFirstNameValidation(){
         $validator_obj = new SanitisedValidator();

         $short_name = 'Bob';
         $proper_name = 'Robert';
         $overlong_name = 'Robert, the first of his name, of the mountain and the riverclans.';

         $this->assertContains('should be between 4 and 20', $validator_obj->validate_fname($short_name), strlen($short_name));
         $this->assertEquals('Robert', $validator_obj->validate_fname($proper_name), strlen($proper_name));
         $this->assertContains('should be between 4 and 20', $validator_obj->validate_fname($overlong_name), strlen($overlong_name));

         $invalid_name = 'root';

         $this->assertContains('Invalid first name', $validator_obj->validate_fname($invalid_name), strlen($invalid_name));
     }

     /**
      * @depends testSanitiseXSS
      */
     public function testLastNameValidation(){
         $validator_obj = new SanitisedValidator();

         $short_name = 'Psn';
         $proper_name = 'Paulson';
         $overlong_name = 'Paulson, son to Smith, grandson to O\'Malley';

         $this->assertContains('should be between 4 and 20', $validator_obj->validate_lname($short_name), strlen($short_name));
         $this->assertEquals('Paulson', $validator_obj->validate_lname($proper_name), strlen($proper_name));
         $this->assertContains('should be between 4 and 20', $validator_obj->validate_lname($overlong_name), strlen($overlong_name));

         $invalid_name = 'root';

         $this->assertContains('last name cannot', $validator_obj->validate_lname($invalid_name), strlen($invalid_name));
     }

     /**
      * @depends testSanitiseXSS
      */
     public function testMessageValidation(){
         $validator_obj = new SanitisedValidator();

         $arr_first_message_to_check = array('SOURCEMSISDN'=> '1236899869', 'DESTINATIONMSISDN'=>'6986489433', 'RECEIVEDTIME'=>'<>01/01/2018<>' ,'MESSAGE'=>'17-3110-AN,on,off,on,off,forward,12,#');
         $arr_second_message_to_check = array('SOURCEMSISDN'=> '1236899869', 'DESTINATIONMSISDN'=>'6986489433', 'RECEIVEDTIME'=>'<>01/01/2018<>' ,'MESSAGE'=>'22-2222-22,on,off,on,off,forward,12,#');
         $arr_message_correct = array('6986489433', '01/01/2018', 'on', 'off', 'on', 'off', 'forward', '12', '#');
         $message_incorrect = null;

         $this->assertEquals($arr_message_correct, $validator_obj->validate_message($arr_first_message_to_check));
         $this->assertEquals($message_incorrect, $validator_obj->validate_message($arr_second_message_to_check));
     }
 }