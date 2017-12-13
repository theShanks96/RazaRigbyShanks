<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 13/12/2017
 * Time: 13:37
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
    '/commands/change',
    function(Request $request, Response $response) use ($app) {

        $this->validator_obj = $this->get('sanitised_validator');

        return $this->view->render($response,
            'formlet_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_post' => 'post',
                'action_proceed' => '../commands/change/status',
                'action_back' => '../commands',
                'type' => $this->validator_obj->sanitise_string('password'),
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'header_text' => $this->validator_obj->sanitise_string('Change Password'),
                'entry_zero' => $this->validator_obj->sanitise_string('New Password'),
                'entry_one' => $this->validator_obj->sanitise_string('Confirm New Password'),
                'button_text' => $this->validator_obj->sanitise_string('Change Password'),
            ]);



    })->setName('change');

$app->post(
    '/commands/change/status',
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

        /** @var  authenticated_password This stores whether or not the password has been authenticated */
        $this->authenticated_password = false;

        $this->session_obj->retrieve_secure_data();

        $this->validated_session_username = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('username'));
        $this->validated_session_password = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('password'));

        if (isset($this->arr_tainted_params['username']) && isset($this->arr_tainted_params['password'])) {
            $tainted_username = $this->arr_tainted_params['username'];
            $this->validated_username = $this->validator_obj->validate_username($tainted_username);

            $tainted_password = $this->arr_tainted_params['password'];
            $this->validated_old_password = $this->validator_obj->validate_password($tainted_password);

            $tainted_password = $this->arr_tainted_params['entry_zero'];
            $this->validated_new_password_zero = $this->validator_obj->validate_password($tainted_password);

            $tainted_password = $this->arr_tainted_params['entry_one'];
            $this->validated_new_password_one = $this->validator_obj->validate_password($tainted_password);
        }

        if($this->bcrypt_wrapper->authenticate_password($this->validated_old_password, $this->validated_session_password))
            $this->authenticated_password = true;


        if($this->validated_username != $this->validated_session_username &&
            !$this->authenticated_password){
            $this->page_text = 'Both Username and Current Password were Incorrect.';
            $this->action_back = '../../commands/change';
        }
        elseif($this->validated_username != $this->validated_session_username){
            $this->page_text = 'Incorrect Username.';
            $this->action_back = '../../commands/change';
        }
        elseif(!$this->authenticated_password){
            $this->page_text = 'Incorrect Current Password.';
            $this->action_back = '../../commands/change';
        }
        elseif(stristr($this->validated_new_password_zero, "Unacceptable Password")){
            $this->page_text = $this->validated_new_password_zero;
            $this->action_back = '../../commands/change';
        }
        elseif(stristr($this->validated_new_password_one, "Unacceptable Password")){
            $this->page_text = $this->validated_new_password_one;
            $this->action_back = '../../commands/change';
        }
        elseif($this->validated_new_password_zero != $this->validated_new_password_one){
            $this->page_text = 'New passwords must match.';
            $this->action_back = '../../commands/change';
        }
        else{
            $this->page_text = 'You have successfully changed your password.';
            $this->action_back = '../../commands';
        }

        $this->profile_obj->set_parameters($this->validated_username, $this->validated_new_password_zero,
            $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('fname')),
            $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('lname')));

        $this->session_obj->set_session_profile($this->profile_obj);
        $this->session_obj->store_secure_data();


        return $this->view->render($response,
            'alert_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method' => 'post',
                'action' => $this->action_back,
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => $this->validator_obj->sanitise_string($this->page_heading_2),
                'page_text' => $this->validator_obj->sanitise_string($this->page_text),
            ]);



    })->setName('change_status');