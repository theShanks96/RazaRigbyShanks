<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 12:33
 */

 /**
  * Configuration file for the SMS system. Contains configuration system
  *
  *
  *
  */
 
ini_set('display_errors', 'On'); // Configuration setting for displaying errors. Display_errors returns a string on fatal errors.
ini_set('html_errors', 'On'); // Display HTML errors in a string

define('m2m_username', '17kongbeta'); //Constant value related to the username field of the system. Useful for obtaining username information
define('m2m_password', 'GoofyGoober2048'); // Password field
define('m2m_destination', '+447817814149'); //Phone number field
define('group_denomination', '17-3110-AN');

define('DIRSEP', DIRECTORY_SEPARATOR); 

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1)); // defines URL path. Composed of three parts, SCRIPT_NAME/
$css_path = $url_root . '/css/standard.css'; // concatenate root path with /css/standard.css to store as the css_path.
$session_path = $url_root; // Assign a variable titled session_path. Contents of session path are the same as the url root.
define('CSS_PATH', $css_path); // location of css path is assigned using variable containing the path 
define('SESSION_PATH', $session_path); // assign session path location using variable
define('ROOT_PATH', $url_root); // assign root path using variable url_root
define('APP_NAME', 'SMS Seeker'); // name of service
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);



//Algorithm definitions. Bcrypt cost of 12 is used indicating the hash runs 12 times
define ('BCRYPT_ALGO', PASSWORD_DEFAULT); 
define ('BCRYPT_COST', 12);


//Open SSL key and initialisation vector. Keys can be symmetric and asymmetic.
// The initialisation vector is used with the key to prevent duplication 
define ('OPENSSL_KEY', 'gbmr2sbqvt84ns3ka6nupj4apo');
define ('OPENSSL_IV', '4929610407272976');


/**
 * Settings including debug mode, displaying errors, assigning class path and cache settings
 * PDO (PHP Data Objects) settings relate to the database. The database that will be used is mysql
 * default access password is defined in the user_password part.
 * UTF-8 is used as a charset for compatability with older APIs as UTF-16 will require 16 bit strings
 */
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
      'db_name' => 'user_informationDB',
      'port' => '3306',
      'user_name' => 'user_access',
      'user_password' => 'DC&Np5fnFj!v!ueo',
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
