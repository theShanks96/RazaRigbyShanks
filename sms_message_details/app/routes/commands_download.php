<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 13/12/2017
 * Time: 13:35
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
    '/commands/download',
    function(Request $request, Response $response) use ($app) {

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

        $this->validated_username = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('username'));
        $this->validated_password = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('password'));
        $this->validated_fname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('fname'));
        $this->validated_lname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('lname'));
        $this->validated_status = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('validated'));

        date_default_timezone_set('Europe/London');
        $datetime = date("Y/m/d") . ' ' . date("H:i:s");

        $this->page_text = $this->validator_obj->sanitise_string('Please select the desired command:');

        return $this->view->render($response,
            'commands_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_get' => 'get',
                'method_post' => 'post',
                'action_saved' => '../commands/saved',
                'action_download' => '../commands/download',
                'action_display' => '../commands/display',
                'action_filter' => '../commands/filter',
                'action_send' => '../commands/send',
                'action_change' => '../commands/change',
                'action_logout' => '../commands/logout',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'greeting_text' => $this->validator_obj->sanitise_string('Welcome Back ' . $this->validated_fname . ' ' . $this->validated_lname),
                'message' => $this->validator_obj->sanitise_string('Messages Sucessfully Downloaded: ' . $datetime),
                'page_text' => $this->page_text,
            ]);



    })->setName('download');