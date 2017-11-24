<?php

class Validator
{
  public function __construct() { }

  public function __destruct() { }

  public function validate_country($p_country_to_check)
  {
    $checked_country = false;

    $arr_country_names = COUNTRY_NAMES;
    if (in_array($p_country_to_check, $arr_country_names) === true)
    {
      if ($p_country_to_check !== $arr_country_names[0])
      {
        $checked_country = $p_country_to_check;
      }
      else
      {
        $checked_country = 'none selected';
      }
    }
    return $checked_country;
  }

  public function validate_detail_type($p_type_to_check)
  {
    $checked_detail_type = false;
    $arr_detail_types = DETAIL_TYPES;
    if (array_key_exists($p_type_to_check, $arr_detail_types) === true)
    {
      $checked_detail_type = $p_type_to_check;
    }

    return $checked_detail_type;
  }
}