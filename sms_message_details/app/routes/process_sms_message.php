<?php
/**
 * Created by PhpStorm.
 * User: cfi
 * Date: 20/11/15
 * Time: 14:01
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
  '/processcountrydetails',
  function(Request $request, Response $response) use ($app)
  {
    $validated_country = false;
    $validated_detail = false;
    $country_detail_result = false;
    $comment = '';

    $arr_tainted_params = $request->getParsedBody();

    $validator = $this->get('validator');
    $countrydetails_model = $this->get('countrydetails_model');
    $xml_parser = $this->get('xml_parser');

    if (isset($arr_tainted_params['country']))
    {
      $tainted_country = $arr_tainted_params['country'];
      $validated_country = $validator->validate_country($tainted_country);
    }

    if (isset($arr_tainted_params['detail']))
    {
      $tainted_detail = $arr_tainted_params['detail'];
      $validated_detail = $validator->validate_detail_type($tainted_detail);
    }

    if ($validated_country && $validated_detail)
    {
      $countrydetails_model->set_parameters(
        $validated_country,
        $validated_detail
      );

      $countrydetails_model->set_xml_parser($xml_parser);

      $countrydetails_model->perform_detail_retrieval();
      $country_detail_result = $countrydetails_model->get_result();
    }

    var_dump($country_detail_result);
    if ($country_detail_result === false || $country_detail_result == null)
    {
      $selected_detail = 'not available';
    }
    else
    {
      $selected_detail = DETAIL_TYPES[$validated_detail];
    }

      if (isset($country_detail_result['COUNTRYCODE']) && $selected_detail == DETAIL_TYPES['code'])
      {
          $comment = 'The country code is ' . $country_detail_result['COUNTRYCODE'];
      }

      if (isset($country_detail_result['CURRENCY']) && $selected_detail == DETAIL_TYPES['currency'])
    {
      $comment = 'The currency in use is the ' . $country_detail_result['CURRENCY'];
    }

      if (isset($country_detail_result['CURRENCYCODE']) && $selected_detail == DETAIL_TYPES['curcode'])
      {
          $comment = 'The currency code is ' . $country_detail_result['CURRENCYCODE'];
      }

    if (isset($country_detail_result['GMT']) && $selected_detail == DETAIL_TYPES['gmt'])
    {
      $comment = 'Time zone difference to GMT is ' . $country_detail_result['GMT'] . ' hours';
    }


    return $this->view->render($response,
      'display_result.html.twig',
      [
        'css_path' => CSS_PATH,
        'landing_page' => LANDING_PAGE,
        'initial_input_box_value' => null,
        'page_title' => APP_NAME,
        'page_heading_1' => APP_NAME,
        'page_heading_2' => 'Result',

        'country_name' => $validated_country,
        'detail' => $selected_detail,
        'result' => $comment,
      ]);
  });
