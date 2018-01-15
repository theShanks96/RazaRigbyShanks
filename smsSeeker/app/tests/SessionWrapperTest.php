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