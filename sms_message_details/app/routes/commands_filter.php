<?php
/**
 * Not sure what this page is for
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/commands/filter', function(Request $request, Response $response) use ($app)
{
    /** @var Object $validator_obj is used to ensure Strings are both sanitised and validated throughout the app */
    $this->validator_obj = $this->get('sanitised_validator');

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

})->setName('filter');