<?php
/**
 * commands_download.php
 *
 * This page allows a user to download any pending messages from the SMS server
 *
 * User: Shanks
 * Date: 13/12/2017
 * Time: 13:35
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/commands/download', function(Request $request, Response $response) use ($app)
{
    /**
     * Note that a lot of the same variables and functions are used here as in the login_page.php file so the comments
     * would be the same, therefore to see those particular DocBlock comments refer to the login_page.php file. Any
     * variables or function calls that are unique to this page will be commented.
     */

    $this->validated_username = null;
    $this->validated_password = null;
    $this->validated_fname = null;
    $this->validated_lname = null;
    $this->validated_status = null;

    $this->arr_tainted_params = $request->getParsedBody();

    $this->validator_obj = $this->get('sanitised_validator');
    $this->profile_obj = $this->get('profile_model');
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
    $this->session_obj->retrieve_secure_data();

    $this->validated_username = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('username'));
    $this->validated_password = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('password'));
    $this->validated_fname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('fname'));
    $this->validated_lname = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('lname'));
    $this->validated_status = $this->validator_obj->sanitise_string($this->session_obj->perform_detail_retrieval('validated'));

    /**
     * When downloading messages it is useful to know what time and date they were downloaded, therefore the timezone
     * should be set, which in this case is Europe/London for GMT +0. The date format is also specified.
     */
    date_default_timezone_set('Europe/London');
    $datetime = date("Y/m/d") . ' ' . date("H:i:s");

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
            'page_text' => $this->validator_obj->sanitise_string('Please select the desired command:'),
        ]);

})->setName('download');