<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 16:47
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/ProfileModel.php';
use PHPUnit\Framework\TestCase;

final class ProfileModelTest extends TestCase {
/*
 * @var arr_profile_details contains an array username, password, first name.
 * @return this function that gets a session_id() and retrieves array data to validate a function
 *
 */
    public function testDetailRetrieval(){
        $arr_profile_details = array('BillyBob12', 'TalladegaNights23', 'Robert', 'Paulson');
        $profile_obj = new ProfileModel();
        $profile_obj->set_parameters($arr_profile_details[0], $arr_profile_details[1], $arr_profile_details[2], $arr_profile_details[3]);

        $this->assertEquals($arr_profile_details[0], $profile_obj->perform_detail_retrieval('username'));
        $this->assertEquals($arr_profile_details[1], $profile_obj->perform_detail_retrieval('password'));
        $this->assertEquals($arr_profile_details[2], $profile_obj->perform_detail_retrieval('fname'));
        $this->assertEquals($arr_profile_details[3], $profile_obj->perform_detail_retrieval('lname'));
        $this->assertEquals(session_id(), $profile_obj->perform_detail_retrieval('validated'));

    }

}