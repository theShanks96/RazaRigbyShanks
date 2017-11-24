<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 24/10/17
 * Time: 10:01
 */

class CountryDetailsModel
{
  private $c_country;
  private $c_detail;
  private $c_result;
  private $c_obj_xml_parser;

  public function __construct(){}

  public function __destruct(){}

  public function set_parameters($p_country, $p_detail)
  {
    $this->c_country = $p_country;
    $this->c_detail = $p_detail;
  }

  public function set_xml_parser($p_obj_xml_parser)
  {
    $this->c_obj_xml_parser = $p_obj_xml_parser;
  }

  public function perform_detail_retrieval()
  {
    $soapresult = null;
    $result = null;
    $obj_soap_client_handle = null;
    $obj_soap_client_handle = $this->create_soap_client();

    if ($obj_soap_client_handle !== false)
    {
      $soapresult = $this->retrieve_detail($obj_soap_client_handle);
    }

    if ($soapresult != null)
    {
      $this->c_obj_xml_parser->set_xml_string_to_parse($soapresult);
      $this->c_obj_xml_parser->parse_the_xml_string();
      $result = $this->c_obj_xml_parser->get_parsed_data();
    }

    $this->c_result = $result;
  }

  private function create_soap_client()
  {
    $obj_soap_client_handle = false;

    $m_arr_soapclient = ['trace' => true, 'exceptions' => true];
    $m_wsdl = 'http://www.webservicex.net/country.asmx?WSDL';

    try
    {
      $obj_soap_client_handle = new SoapClient($m_wsdl, $m_arr_soapclient);
//      var_dump($obj_soap_client_handle->__getFunctions());
//      var_dump($obj_soap_client_handle->__getTypes());
    }
    catch (SoapFault $m_obj_exception)
    {
      trigger_error($m_obj_exception);
    }

    return $obj_soap_client_handle;
  }

  private function retrieve_detail($p_obj_soap_client_handle)
  {
    $result = null;
    $details = null;

    $parameter = ['CountryName' => $this->c_country];

    if ($this->c_detail == 'curcode')
        $this->c_detail = 'currency';

    $soapfunction = DETAIL_TYPES[$this->c_detail];
    try
    {
      $details = $p_obj_soap_client_handle->__soapCall($soapfunction, [$parameter]);
      if (isset($details->GetCurrencyByCountryResult))
      {
        $result = $details->GetCurrencyByCountryResult;
      }
      if (isset($details->GetGMTbyCountryResult))
      {
        $result = $details->GetGMTbyCountryResult;
      }
      if (isset($details->GetISOCountryCodeByCountyNameResult))
      {
          $result = $details->GetISOCountryCodeByCountyNameResult;
      }
      if (isset($details->GetCurrencyCodeByCurrencyResult))
      {
          $result = $details->GetCurrencyCodeByCurrencyResult;
      }
//      var_dump($p_obj_soap_client_handle->__getLastRequest());
//      var_dump($p_obj_soap_client_handle->__getLastResponse());
//      var_dump($p_obj_soap_client_handle->__getLastRequestHeaders());
//      var_dump($p_obj_soap_client_handle->__getLastResponseHeaders());
    }
    catch (SoapFault $m_obj_exception)
    {
      trigger_error($m_obj_exception);
    }

    return $result;
  }

  public function get_result()
  {
    return $this->c_result;
  }

  private function select_detail()
  {

  }
}