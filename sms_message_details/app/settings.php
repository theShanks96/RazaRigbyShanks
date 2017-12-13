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
define('ROOT_PATH', $url_root);
define('APP_NAME', 'SMS Seeker');
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);

define ('BCRYPT_ALGO', PASSWORD_DEFAULT);
define ('BCRYPT_COST', 12);

define ('OPENSSL_KEY', 'gbmr2sbqvt84ns3ka6nupj4apo');
define ('OPENSSL_IV', '0123456789012345');

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
  'pdo' => [
      'rdbms' => 'mysql',
      'host' => 'localhost',
      'db_name' => 'session_db',
      'port' => '3306',
      'user_name' => 'session_user',
      'user_password' => 'session_user_pass',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'options' => [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => true,
      ],
  ]

];

return $settings;
