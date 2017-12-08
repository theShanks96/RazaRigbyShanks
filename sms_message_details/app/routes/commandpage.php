<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 01/12/2017
 * Time: 11:25
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
    '/commandpage/login',
    function(Request $request, Response $response) use ($app)
    {
        $this->logged_in = false;
        $this->session_model = null;

        $this->validated_username = false;
        $this->validated_password = false;
        $this->validated_fname = false;
        $this->validated_lname = false;
        $this->operation = false;
        $this->profile_model_result = false;
        $this->arr_tainted_params = $request->getParsedBody();

        $this->selected_detail = 'All Good';

        $this->validator = $this->get('sanitised_validator');
        $this->profile_model = $this->get('profile_model');
        $this->xml_parser = $this->get('xml_parser');

        $this->retrieval_session = $this->get('session_model');
        $this->retrieval_session->set_wrapper_session_file($this->session_wrapper);
        $this->retrieval_session->retrieve_data();


        $username_temp = $this->validator->sanitise_string($this->retrieval_session->get_username());
        $password_temp = $this->validator->sanitise_string($this->retrieval_session->get_password());
        $fname = $this->validator->sanitise_string($this->retrieval_session->get_fname());
        $lname = $this->validator->sanitise_string($this->retrieval_session->get_lname());

        if (isset($this->arr_tainted_params['username']))
        {
            $tainted_username = $this->arr_tainted_params['username'];
            $this->validated_username = $this->validator->validate_username($tainted_username);
        }

        if (isset($this->arr_tainted_params['password']))
        {
            $tainted_password = $this->arr_tainted_params['password'];
            $this->validated_password = $this->validator->validate_password($tainted_password);
        }

        if (isset($this->arr_tainted_params['fname']))
        {
            $tainted_fname = $this->arr_tainted_params['fname'];
            $this->validated_fname = $this->validator->sanitise_string($tainted_fname);
        }

        if (isset($this->arr_tainted_params['lname'])) {
            $tainted_lname = $this->arr_tainted_params['lname'];
            $this->validated_lname = $this->validator->sanitise_string($tainted_lname);
        }

        if($this->validated_username == false && $this->validated_password == false){
            $this->validated_username = $username_temp;
            $this->validated_password = $password_temp;
            $this->validated_fname = $fname;
            $this->validated_lname = $lname;
        }

        if ($this->validated_username && $this->validated_password)
        {
            $this->profile_model->set_parameters(
                $this->validated_username,
                $this->validated_password,
                $this->validated_fname,
                $this->validated_lname
            );

            $this->profile_model->set_xml_parser($this->xml_parser);

            //$this->profile_model->perform_detail_retrieval();
            $this->profile_model_result = $this->profile_model->get_result();
        }


        $this->all_good = false;
        $this->page_text = 'The following information is incorrect: ';

        if( $this->validated_username == "root" && $this->validated_password == "toor"){

            $this->profile_obj = $this->get('profile_model');
            $this->profile_obj->set_parameters($this->validated_username, $this->validated_password, 'Rooty', 'Toot');

            $this->page_text = 'Please select the desired command. ';

            // logging the profile information into the session
            $this->session_wrapper = $this->get('session_wrapper');
            $this->storage_session = $this->get('session_model');

            $this->storage_session->set_session_profile($this->profile_obj);
            $this->storage_session->set_wrapper_session_file($this->session_wrapper);
            $this->storage_session->store_data();

            echo 'session id: ' . session_id();

            $this->retrieval_session = $this->get('session_model');
            $this->retrieval_session->set_wrapper_session_file($this->session_wrapper);
            $this->retrieval_session->retrieve_data();


            $username_temp = $this->retrieval_session->get_username();
            $password_temp = $this->retrieval_session->get_password();
            $fname = $this->retrieval_session->get_fname();
            $lname = $this->retrieval_session->get_lname();

            return $this->view->render($response,
                'command_page.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'landing_page' => LANDING_PAGE,
                    'method_get' => 'get',
                    'method_post' => 'post',
                    'action_saved' => '../commandpage/saved',
                    'action_download' => '../commandpage/download',
                    'action_display' => '../commandpage/display',
                    'action_filter' => '../commandpage/filter',
                    'action_send' => '../commandpage/send',
                    'action_logout' => '../commandpage/logout',
                    'initial_input_box_value' => null,
                    'page_title' => APP_NAME,
                    'page_heading_1' => APP_NAME,
                    'greeting_text' => 'Welcome Back ' . $fname . ' ' . $lname,
                    'page_text' => $this->page_text,
                ]);
        }
        else{

            if( $this->validated_username != "root" ){
                $this->page_text .= 'username ';
            }

            if( $this->validated_password != "toor"){
                $this->page_text .= 'password';
            }


            return $this->view->render($response,
                'invalid.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'landing_page' => LANDING_PAGE,
                    'method' => 'get',
                    'action' => '../../',
                    'initial_input_box_value' => null,
                    'page_title' => APP_NAME,
                    'page_heading_1' => APP_NAME,
                    'page_heading_2' => 'Invalid Information',
                    'page_text' => $this->page_text,
                ]);
        }


    });
$app->post(
    '/commandpage/signup',
    function(Request $request, Response $response) use ($app)
    {
        $this->validated_username = false;
        $this->validated_password = false;
        $this->validated_fname = false;
        $this->validated_lname = false;
        $this->operation = false;
        $this->profile_model_result = false;
        $this->arr_tainted_params = $request->getParsedBody();

        $this->selected_detail = 'All Good';

        $this->validator = $this->get('sanitised_validator');
        $this->profile_model = $this->get('profile_model');
        $this->xml_parser = $this->get('xml_parser');

        if (isset($this->arr_tainted_params['username']))
        {
            $tainted_username = $this->arr_tainted_params['username'];
            $this->validated_username = $this->validator->validate_username($tainted_username);
        }

        if (isset($this->arr_tainted_params['password']))
        {
            $tainted_password = $this->arr_tainted_params['password'];
            $this->validated_password = $this->validator->validate_password($tainted_password);
        }

        if (isset($this->arr_tainted_params['fname']))
        {
            $tainted_fname = $this->arr_tainted_params['fname'];
            $this->validated_fname = $this->validator->sanitise_string($tainted_fname);
        }

        if (isset($this->arr_tainted_params['lname']))
        {
            $tainted_lname = $this->arr_tainted_params['lname'];
            $this->validated_lname = $this->validator->sanitise_string($tainted_lname);
        }

        $this->page_text = 'Please select the desired command. ';

        $this->profile_obj = $this->get('profile_model');
        $this->profile_obj->set_parameters($this->validated_username, $this->validated_password, $this->validated_fname, $this->validated_lname);

        $this->page_text = 'Please select the desired command. ';

        // logging the profile information into the session
        $this->session_wrapper = $this->get('session_wrapper');
        $this->storage_session = $this->get('session_model');

        $this->storage_session->set_session_profile($this->profile_obj);
        $this->storage_session->set_wrapper_session_file($this->session_wrapper);
        $this->storage_session->store_data();

        $this->sid = session_id();

        $this->retrieval_session = $this->get('session_model');
        $this->retrieval_session->set_wrapper_session_file($this->session_wrapper);
        $this->retrieval_session->retrieve_data();


        $retrieved_username = $this->retrieval_session->get_username();
        $retrieved_password = $this->retrieval_session->get_password();
        $retrieved_fname = $this->retrieval_session->get_fname();
        $retrieved_lname = $this->retrieval_session->get_lname();

        return $this->view->render($response,
            'command_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_get' => 'get',
                'method_post' => 'post',
                'action_saved' => '../commandpage/saved',
                'action_download' => '../commandpage/download',
                'action_display' => '../commandpage/display',
                'action_filter' => '../commandpage/filter',
                'action_send' => '../commandpage/send',
                'action_logout' => '../commandpage/logout',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'greeting_text' => 'Welcome For the First Time ' . $retrieved_fname . ' ' . $retrieved_lname,
                'page_text' => $this->page_text,
            ]);



    });

$app->post(
    '/commandpage/saved',
    function(Request $request, Response $response) use ($app)
    {
        $fname = 'Rooty';
        $lname = 'Toot';


        return $this->view->render($response,
            'table_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_post' => 'post',
                'action_back' => '../commandpage/login',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => 'Saved Messages',
            ]);



    });

$app->post(
    '/commandpage/download',
    function(Request $request, Response $response) use ($app)
    {
        $fname = 'Rooty';
        $lname = 'Toot';

        $datetime = date("Y/m/d") . ' ' . date("h:ia");

        $this->page_text = 'Please select the desired command. ';

        return $this->view->render($response,
            'command_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_get' => 'get',
                'method_post' => 'post',
                'action_saved' => '../commandpage/saved',
                'action_download' => '../commandpage/download',
                'action_display' => '../commandpage/display',
                'action_filter' => '../commandpage/filter',
                'action_send' => '../commandpage/send',
                'action_logout' => '../commandpage/logout',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'greeting_text' => 'Welcome Back ' . $fname . ' ' . $lname,
                'message' => 'Messages Sucessfully Downloaded: ' . $datetime,
                'page_text' => $this->page_text,
            ]);



    });

$app->post(
    '/commandpage/display',
    function(Request $request, Response $response) use ($app)
    {
        $fname = 'Rooty';
        $lname = 'Toot';

        $datetime = date("Y/m/d") . ' ' . date("h:ia");

        $this->page_text = 'Please select the desired command. ';

        return $this->view->render($response,
            'table_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_post' => 'post',
                'action_back' => '../commandpage/login',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => 'Saved Messages',
            ]);



    });

$app->post(
    '/commandpage/filter',
    function(Request $request, Response $response) use ($app)
    {

        $this->page_text = 'Please select the desired command. ';

        return $this->view->render($response,
            'table_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_post' => 'post',
                'action_back' => '../commandpage/login',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => 'Saved Messages',
            ]);



    });

$app->post(
    '/commandpage/send',
    function(Request $request, Response $response) use ($app)
    {


        return $this->view->render($response,
            'compose_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_get' => 'get',
                'method_post' => 'post',
                'action_send' => '',
                'action_back' => '../commandpage/login',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'message' => 'Messages Sucessfully Downloaded:',
                'page_text' => 'hello',
            ]);



    });

$app->post(
    '/commandpage/logout',
    function(Request $request, Response $response) use ($app)
    {
        $this->session_model = $this->get('session_model');
        $this->session_wrapper = $this->get('session_wrapper');
        $this->session_model->set_wrapper_session_file($this->session_wrapper);
        $this->session_model->retrieve_data();

        $retrieved_fname = $this->session_model->get_fname();
        $retrieved_lname = $this->session_model->get_lname();

        return $this->view->render($response,
            'logout_page.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method' => 'get',
                'action' => '../../',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_text' => $retrieved_fname . ' ' . $retrieved_lname . ', you\'ve been successfully logged out.',
            ]);



    });
