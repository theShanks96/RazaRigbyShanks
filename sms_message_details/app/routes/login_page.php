<?php
/**
 * login_page.php
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

$app->get('/', function(Request $request, Response $response) {

    $this->validated_username = null;
    $this->validated_password = null;
    $this->validated_fname = null;
    $this->validated_lname = null;
    $this->validated_status = null;
    //$this->profile_model_result = false;
    $this->arr_tainted_params = $request->getParsedBody();

    $this->validator = $this->get('sanitised_validator');
    $this->profile_obj = $this->get('profile_model');
    $this->xml_parser = $this->get('xml_parser');
    $this->session_wrapper = $this->get('session_wrapper');
    $this->session_obj = $this->get('session_model');



    $this->base64_wrapper = $this->get('base64_wrapper');
    $this->bcrypt_wrapper = $this->get('bcrypt_wrapper');
    $this->openssl_wrapper = $this->get('openssl_wrapper');

    $this->session_obj->set_wrapper_session_file($this->session_wrapper);
    $this->session_obj->set_base64_wrapper($this->base64_wrapper);
    $this->session_obj->set_bcrypt_wrapper($this->bcrypt_wrapper);
    $this->session_obj->set_openssl_wrapper($this->openssl_wrapper);
    $this->session_obj->set_sid(session_id());
    $this->session_obj->generate_labels();

    $this->session_obj->set_wrapper_session_file($this->session_wrapper);
    $this->session_obj->retrieve_secure_data();

    $this->validated_username = $this->validator->sanitise_string($this->session_obj->perform_detail_retrieval('username'));
    $this->validated_password = $this->validator->sanitise_string($this->session_obj->perform_detail_retrieval('password'));
    $this->validated_fname = $this->validator->sanitise_string($this->session_obj->perform_detail_retrieval('fname'));
    $this->validated_lname = $this->validator->sanitise_string($this->session_obj->perform_detail_retrieval('lname'));
    $this->validated_status = $this->validator->sanitise_string($this->session_obj->perform_detail_retrieval('validated'));

    $this->page_text = $this->validator->sanitise_string('Please select the desired command:');

    echo $this->validator->sanitise_string('To locate the session file, turn on the echo session_id'); // xampp/tmp/
    //echo session_id();

    if($this->validated_username != null && $this->validated_password != null && $this->validated_status){
        return $this->view->render($response,
            'commands_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_get' => 'get',
                'method_post' => 'post',
                'action_saved' => './commands/saved',
                'action_download' => './commands/download',
                'action_display' => './commands/display',
                'action_filter' => './commands/filter',
                'action_send' => './commands/send',
                'action_change' => './commands/change',
                'action_logout' => './commands/logout',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'greeting_text' => $this->validator->sanitise_string('Welcome Back ' . $this->validated_fname . ' ' . $this->validated_lname),
                'page_text' => $this->page_text,
            ]);
    }
    else{
        return $this->view->render($response,
            'login_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method' => 'post',
                'action_login' => 'index.php/commands',
                'action_signup' => 'index.php/commands',
//      'action' => 'processcountrydetails',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => $this->validator->sanitise_string('Perform many SMS operations and management.'),
                'page_text' => $this->validator->sanitise_string('It is required that you login or register in order to check or send messages.'),
            ]);
    }

})->setName('loginpage');

$app->post(
    '/commands/logout',
    function(Request $request, Response $response) use ($app) {

        /** This part of the app starts the logout procedure
         * this mostly involves clearing the session file and then returning the user to the login_page
         */
        /** @var  validated_username username that has undergone sanitation and validation */
        $this->validated_username = null;
        /** @var  validated_password password that has undergone sanitation and validation */
        $this->validated_password = null;
        /** @var  validated_fname password that has undergone sanitation and validation */
        $this->validated_fname = null;
        /** @var  validated_lname lname that has undergone sanitation and validation */
        $this->validated_lname = null;
        /** @var  validated_status validated that has undergone sanitation and validation */
        $this->validated_status = null;
        /** @var  arr_tainted_params the parsed values from the previous form, unclean and needing sanitation */
        $this->arr_tainted_params = $request->getParsedBody();


        /** @var  validator_obj the object used to sanitise and validate string throughout the app */
        $this->validator_obj = $this->get('sanitised_validator');
        /** @var  profile_obj an object used to model the user profile's information */
        $this->profile_obj = $this->get('profile_model');
        /** @var  session_wrapper used to read and write from session files */
        $this->session_wrapper = $this->get('session_wrapper');
        /** @var  session_obj used to format the necessary information to save to session files */
        $this->session_obj = $this->get('session_model');

        /** @var  base64_wrapper used to encode/decode information for plaintext read/write */
        $this->base64_wrapper = $this->get('base64_wrapper');
        /** @var  bcrypt_wrapper used to hash user passwords using the bcrypt algorithm */
        $this->bcrypt_wrapper = $this->get('bcrypt_wrapper');
        /** @var  openssl_wrapper used to encrypt/decrypt sensitive user information */
        $this->openssl_wrapper = $this->get('openssl_wrapper');

        /** the session object has to have multiple wrappers added to it
         *  these include the encoding, hashing, and encryption classes
         *  at the moment encryption requires the session_id, so this is also added
         *  lastly, the labels in the session file are also encrypted to obfuscate the information
         */
        $this->session_obj->set_wrapper_session_file($this->session_wrapper);
        $this->session_obj->set_base64_wrapper($this->base64_wrapper);
        $this->session_obj->set_bcrypt_wrapper($this->bcrypt_wrapper);
        $this->session_obj->set_openssl_wrapper($this->openssl_wrapper);
        $this->session_obj->set_sid(session_id());
        $this->session_obj->generate_labels();

        $this->session_obj->retrieve_secure_data();
        $this->validated_fname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('fname'));
        $this->validated_lname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('lname'));
        $this->session_obj->clear_data();

        $this->header_text = $this->validator_obj->sanitise_string('Logged Out');
        $this->page_text = $this->validator_obj->sanitise_string($this->validated_fname . ' ' . $this->validated_lname . ', you have been successfully logged out.');

        return $this->view->render($response,
            'alert_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method' => 'get',
                'action' => '../../',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => $this->header_text,
                'page_text' => $this->page_text,
            ]);



    })->setName('logout');
