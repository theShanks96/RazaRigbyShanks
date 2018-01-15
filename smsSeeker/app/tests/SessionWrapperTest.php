<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 11/01/2018
 * Time: 17:53
 */

// this is the required path nature for the phpunittests to properly function
require_once '../../coursework/smsSeeker/app/src/SessionWrapper.php';
require_once '../../coursework/smsSeeker/app/settings.php';
use PHPUnit\Framework\TestCase;

final class SessionWrapperTest extends TestCase{
/*
 * @param full_name string array called full name. For testing purpose, robert paulson occupies array[0].
 * The array is designed to hold the first name and last name. full_name_storage will contain the array.
 */
    public function testStoreToSession(){
        $session_wrapper = new SessionWrapper();
        $full_name = array('full_name', 'Robert Paulson');

        $m_full_name_storage = $session_wrapper->set_session($full_name[0], $full_name[1]);
        $this->assertTrue($m_full_name_storage);

    }

    /**
     * @depends testStoreToSession
     */
    public function testRetrieveToSession(){
        $session_wrapper = new SessionWrapper();
        $full_name = array('full_name', 'Robert Paulson');

        $m_full_name_storage = $session_wrapper->set_session($full_name[0], $full_name[1]);
        $m_full_name_retrieve = $session_wrapper->get_session($full_name[0]);

        $this->assertEquals($full_name[1], $m_full_name_retrieve, $m_full_name_retrieve);

    }
}