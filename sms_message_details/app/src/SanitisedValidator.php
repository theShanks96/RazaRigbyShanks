<?php

class SanitisedValidator {

    /**
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

  public function validate_fname($p_fname_to_check)
  {
      $validated_fname = $this->sanitise_string(p_fname_to_check);

      if (strlen($validated_fname) < 4 || strlen($validated_fname) > 20 )
          $validated_lname = 'A first name should be between 4 and 20 characters';

      elseif (strisstr($validated_fname) == 'root' || strisstr($validated_fname) == 'user' )
          $validated_lname = 'Invalid first name';

      return $validated_fname;
  }

  public function validate_lname($p_lname_to_check)
  {
      $validated_lname = $this->sanitise_string(p_lname_to_check);

      if (strlen($validated_lname) < 4 || strlen($validated_lname) > 20 )
          $validated_lname = 'A last name should be between 4 and 20 characters';

      elseif (strisstr($validated_lname) == 'root' || strisstr($validated_lname) == 'user')
          $validated_lname = 'A last name cannot be' . $validated_lname;

      return $validated_lname;
  }

  public function validate_username($p_username_to_check){
      $validated_username = $this->sanitise_string($p_username_to_check);

      //Todo: check the profile database to check for pre-existing entries

      return $validated_username;
  }

  public function validate_password($p_password_to_check){
      $validated_password = $this->sanitise_string($p_password_to_check);

      if( $validated_password == 'root'){
          $validated_password = 'root';
      }
      else if(stristr($validated_password, 'password') || stristr($validated_password, 'drowssap') ||
          stristr($validated_password, '12345') || stristr($validated_password, '54321')){
          $validated_password = 'Unacceptable Password, Try Something More Unique';
      }
      elseif(strlen($validated_password) < 8){
          $validated_password = 'Unacceptable Password, Minimum should be 8 Characters';
      }
      elseif(strlen($validated_password) > 64){
          $validated_password = 'Unacceptable Password, Maximum is limited to 64 Characters';
      }
      return $validated_password;
  }


}