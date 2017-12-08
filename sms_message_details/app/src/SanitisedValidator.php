<?php

class SanitisedValidator {

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

      return $validated_username;
  }

  public function validate_password($p_password_to_check){
      $validated_password = $this->sanitise_string($p_password_to_check);

      return $validated_password;
  }


}