<?php
/**
 * commands_saved.php
 *
 * This page stores all of a users saved messages, and also displays details about the saved messages such as sender,
 * receiver and timestamp.
 *
 * User: Shanks
 * Date: 13/12/2017
 * Time: 13:35
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/commands/saved', function(Request $request, Response $response) use ($app)
{
    /** @var Object $validator_obj is used to ensure Strings are both sanitised and validated throughout the app */
    $this->validator_obj = $this->get('sanitised_validator');

    /**
     * Returns the table_layout.html page, which presents a table, allowing the user to view their messages
     * while also allowing them to filter the metadata of message with a tick box. Messages can also be saved.
     */
    return $this->view->render($response,
        'table_layout.html.twig',
        [
            'css_path' => CSS_PATH,
            'landing_page' => LANDING_PAGE,
            'method_post' => 'post',
            'action_back' => '../commands',
            'initial_input_box_value' => null,
            'page_title' => APP_NAME,
            'page_heading_1' => APP_NAME,
            'page_heading_2' => $this->validator_obj->sanitise_string('Saved Messages'),
        ]);

})->setName('saved');