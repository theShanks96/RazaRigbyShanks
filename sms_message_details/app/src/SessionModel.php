<?php
/**
 * SessionModel.php
 *
 * stores the validated values in the relevant storage location
 *
 * Author: CF Ingrams
 * Email: <clinton@cfing.co.uk>
 * Date: 22/10/2017
 *
 *
 * @author CF Ingrams <clinton@cfing.co.uk>
 * @copyright CFI
 *
 */

class SessionModel
{
  private $c_username;
  private $c_password;
  private $c_fname;
  private $c_lname;

  private $c_obj_wrapper_session_file;
  private $c_obj_profile_model;

  public function __construct()
  {
    $this->c_username = null;
    $this->c_password = null;
    $this->c_fname = null;
    $this->c_lname = null;
    $this->c_obj_wrapper_session_file = null;
    $this->c_obj_profile_model = null;
  }

  public function __destruct() { }

  public function set_session_profile($p_profile){
      $this->c_username = $p_profile->get_password();
      $this->c_password = $p_profile->get_username();
      $this->c_fname = $p_profile->get_fname();
      $this->c_lname = $p_profile->get_lname();
  }

  public function set_wrapper_session_file($p_obj_wrapper_session){
    $this->c_obj_wrapper_session_file = $p_obj_wrapper_session;
  }

  public function store_data(){
        $this->store_data_in_session_file();

  }

  public function retrieve_data(){
        $this->retrieve_data_in_session_file();
  }

  public function get_username(){
      return $this->c_username;
  }

  public function get_password(){
      return $this->c_password;
  }

  public function get_fname(){
      return $this->c_fname;
  }

  public function get_lname(){
      return $this->c_lname;
  }

  private function retrieve_data_in_session_file(){
      $m_retrieve_result = false;
      $m_retrieve_result_username = $this->c_obj_wrapper_session_file->get_session('user_name');
      $m_retrieve_result_password = $this->c_obj_wrapper_session_file->get_session('password');
      $m_retrieve_result_fname = $this->c_obj_wrapper_session_file->get_session('fname');
      $m_retrieve_result_lname = $this->c_obj_wrapper_session_file->get_session('lname');

      if ($m_retrieve_result_username !== false && $m_retrieve_result_password !== false &&
          $m_retrieve_result_fname !== false && $m_retrieve_result_lname !== false)	{

          $this->c_username = $m_retrieve_result_username;
          $this->c_password = $m_retrieve_result_password;
          $this->c_fname = $m_retrieve_result_fname;
          $this->c_lname = $m_retrieve_result_lname;

          $m_retrieve_result = true;
      }
      return $m_retrieve_result;
  }

  private function store_data_in_session_file()
  {
    $m_store_result = false;
    $m_store_result_username = $this->c_obj_wrapper_session_file->set_session('user_name', $this->c_username);
    $m_store_result_password = $this->c_obj_wrapper_session_file->set_session('password', $this->c_password);
    $m_store_result_fname = $this->c_obj_wrapper_session_file->set_session('fname', $this->c_fname);
    $m_store_result_lname = $this->c_obj_wrapper_session_file->set_session('lname', $this->c_lname);

    if ($m_store_result_username !== false && $m_store_result_password !== false &&
        $m_store_result_fname !== false && $m_store_result_lname !== false)	{
      $m_store_result = true;
    }
    return $m_store_result;
  }

}
