<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 13/12/2017
 * Time: 13:36
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
    '/commands/send',
    function(Request $request, Response $response) use ($app) {

        $this->validator_obj = $this->get('sanitised_validator');

        return $this->view->render($response,
            'formlet_layout.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'method_post' => 'post',
                'action_proceed' => '',
                'action_back' => '../commands',
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'type' => $this->validator_obj->sanitise_string('text'),
                'header_text' => $this->validator_obj->sanitise_string('Send Message'),
                'entry_zero' => $this->validator_obj->sanitise_string('Receiver SIM'),
                'entry_one' => $this->validator_obj->sanitise_string('Message'),
                'button_text' => $this->validator_obj->sanitise_string('Send Message'),
            ]);



    })->setName('send');