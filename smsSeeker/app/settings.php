<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 12:33
 */

ini_set('display_errors', 'off');
ini_set('html_errors', 'off');

define('m2m_username', '17kongbeta');
define('m2m_password', 'GoofyGoober2048');
define('m2m_destination', '+447817814149');
define('group_denomination', '17-3110-AN');

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
define ('OPENSSL_IV', '4929610407272976');
define ('OPENSSL_DB_KEY', 'WmrNRKFYYPFyNbJE68vyTpSQckQsbL3T');
define ('OPENSSL_ID_KEY', 'iGauf6fzfpWNe9ixtfiaK65aNq9riX3K');

$settings = [
  "settings" => [
    'displayErrorDetails' => false,
    'addContentLengthHeader' => false,
    'mode' => 'release',
    'debug' => false,
    'class_path' => __DIR__ . '/src/',
    'view' => [
      'template_path' => __DIR__ . '/templates/',
      'twig' => [
        'cache' => __DIR__ . '/cache/twig',
        'auto_reload' => true,
      ]],
  'pdo' => [
      'rdbms' => 'mysql',
      'host' => 'localhost',
      'db_name' => 'userbase_smsseeker',
      'port' => '3306',
      'user_name' => 'admin_Rj6HHXwh',
      'user_password' => 'Fs2ck4KGeUCJD5k9',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'options' => [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => true,
      ],
  ]
]
];

return $settings;
