<?php
/**
 * loginpage.php
 *
 * display the check primes application homepage
 *
 * allows the user to enter a value for testing if prime
 *
 * Author: CF Ingrams
 * Email: <cfi@dmu.ac.uk>
 * Date: 18/10/2015
 *
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app->active_profile = $this->get('profile_model');

$app->get('/', function(Request $request, Response $response)
{
echo 'session id: ' . session_id();
  return $this->view->render($response,
    'login_page.html.twig',
    [
      'css_path' => CSS_PATH,
      'landing_page' => LANDING_PAGE,
      'method' => 'post',
      'action_login' => 'index.php/commandpage/login',
      'action_signup' => 'index.php/commandpage/signup',
//      'action' => 'processcountrydetails',
      'initial_input_box_value' => null,
      'page_title' => APP_NAME,
      'page_heading_1' => APP_NAME,
      'page_heading_2' => 'Perform many SMS operations and management.',
      'page_text' => 'It is required that you login or register in order to check or send messages.',
    ]);
})->setName('loginpage');
