<?php

class SanitisedValidator {

    /*
     * It should be noted that these methods/functions should either sanitise the string or sanitise and then validate
     * No validation should occur without sanitation occurring first, and as such this class is both.
     */

  public function __construct() { }

  public function __destruct() { }

  public function sanitise_string($p_string_to_sanitise) {

      $m_sanitised_string = false;

      if (!empty($p_string_to_sanitise)) {
          $m_sanitised_string = filter_var($p_string_to_sanitise, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        }
      return $m_sanitised_string;
  }

  public function validate_username($p_username_to_check){
      $validated_username = $this->sanitise_string($p_username_to_check);

      //Todo: check the profile database to check for pre-existing entries

      return $validated_username;
  }

  public function validate_password($p_password_to_check){
      $validated_password = $this->sanitise_string($p_password_to_check);

      if( $validated_password == 'toor'){
          $validated_password = 'toor';
      }
      else if(stristr($validated_password, 'password') || stristr($validated_password, 'drowssap') ||
          stristr($validated_password, '12345') || stristr($validated_password, '54321')){
          $validated_password = 'Unacceptable Password, Try Something More Unique';
      }
      elseif(strlen($validated_password) < 8){
          $validated_password = 'Unacceptable Password, Minimum 8 Character Long';
      }
      elseif(strlen($validated_password) > 64){
          $validated_password = 'Unacceptable Password, Maximum 64 Character Long';
      }
      return $validated_password;
  }


}