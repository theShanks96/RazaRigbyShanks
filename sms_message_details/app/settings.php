<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 12:33
 */

ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'country_details.%t');

define('DIRSEP', DIRECTORY_SEPARATOR);

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/css/standard.css';
$session_path = $url_root;
define('CSS_PATH', $css_path);
define('SESSION_PATH', $session_path);
define('APP_NAME', 'SMS Seeker');
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);

$arr_detail_types = ['code' => 'GetISOCountryCodeByCountyName', 'currency' => 'GetCurrencyByCountry', 'curcode' => 'GetCurrencyCodeByCurrencyName', 'gmt' => 'GetGMTbyCountry'];
define('DETAIL_TYPES', $arr_detail_types);

$settings = [
  "settings" => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'mode' => 'development',
    'debug' => true,
    'class_path' => __DIR__ . '/src/',
    'view' => [
      'template_path' => __DIR__ . '/templates/',
      'twig' => [
        'cache' => __DIR__ . '/cache/twig',
        'auto_reload' => true,
      ]],
  ],

];

return $settings;
