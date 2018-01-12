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
  private $c_validated;
  private $c_sid;

  private $c_username_label;
  private $c_password_label;
  private $c_fname_label;
  private $c_lname_label;
  private $c_validated_label;

  private $c_obj_wrapper_session_file;
  private $c_obj_profile_model;
  private $c_obj_bcrypt_wrapper;
  private $c_obj_base64_wrapper;

  private $c_obj_openssl_wrapper;

  private $c_arr_messages;
  private $c_arr_session_messages;

  private $c_saved_indicies;
  private $c_session_saved_indicies;

  public function __construct()  {
      /** @var  c_username actual username information */
      $this->c_username = null;
      /** @var  c_password actual password information */
      $this->c_password = null;
      /** @var  c_fname actual first name information */
      $this->c_fname = null;
      /** @var  c_lname actual last name information */
      $this->c_lname = null;
      /** @var  c_validated actual validated information*/
      $this->c_validated = null;
      /** @var  c_sid actual session id information */
      $this->c_sid = null;

      $this->c_arr_messages = [];
      $this->c_arr_session_messages = [];

      $c_saved_indicies = null;
      $c_session_saved_indicies = null;

      /** @var  c_obj_wrapper_session_file session wrapper */
      $this->c_obj_wrapper_session_file = null;
      /** @var  c_obj_profile_model profile model used for information */
      $this->c_obj_profile_model = null;
      /** @var  c_obj_bcrypt_wrapper hash wrapper using the bcrypt algorithm */
      $this->c_obj_bcrypt_wrapper = null;
      /** @var  c_obj_base64_wrapper encoder wrapper*/
      $this->c_obj_base64_wrapper = null;
      /** @var  c_obj_openssl_wrapper encryption wrapper */
      $this->c_obj_openssl_wrapper = null;

  }

  public function generate_labels(){
      /** @var  c_username_label The label for 'username' in the session file, it is encrypted as an obfuscation tactic */
      $this->c_username_label = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt('username', $this->c_sid));
      /** @var  c_password_label The label for 'password in the session file */
      $this->c_password_label = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt('password', $this->c_sid));
      /** @var  c_fname_label The label for 'fname' in the session file */
      $this->c_fname_label = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt('fname', $this->c_sid));
      /** @var  c_lname_label The label for 'lname' in the session file */
      $this->c_lname_label = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt('lname', $this->c_sid));
      /** @var  c_validated_label The label for 'validated' in the session file */
      $this->c_validated_label = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt('validated', $this->c_sid));
  }

  public function __destruct() { }

  public function set_session_profile($p_profile){
      $this->c_username = $p_profile->perform_detail_retrieval('username');
      $this->c_password = $p_profile->perform_detail_retrieval('password');
      $this->c_fname = $p_profile->perform_detail_retrieval('fname');
      $this->c_lname = $p_profile->perform_detail_retrieval('lname');
      $this->c_validated = $p_profile->perform_detail_retrieval('validated');

      /** This merely sets the session model's information by retrieving it from the profile model */
  }

  public function set_session_array_messages($p_arr_messages){
      $this->c_arr_messages = $p_arr_messages;
  }

  public function set_session_saved_indices($p_saved_indicies){
      $this->c_saved_indicies = $p_saved_indicies;
  }

  public function set_sid($p_sid){
      /** @var  c_sid This is used throughout for validation purposes */
      $this->c_sid = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($p_sid, $p_sid));;
  }

  public function set_wrapper_session_file($p_obj_wrapper_session){
    $this->c_obj_wrapper_session_file = $p_obj_wrapper_session;
  }

  public function set_bcrypt_wrapper($p_bcrypt_wrapper){
      $this->c_obj_bcrypt_wrapper = $p_bcrypt_wrapper;
  }

  public function set_base64_wrapper($p_base64_wrapper){
      $this->c_obj_base64_wrapper = $p_base64_wrapper;
  }

  public function set_openssl_wrapper($p_openssl_wrapper){
      $this->c_obj_openssl_wrapper = $p_openssl_wrapper;
  }


  public function store_data(){
        $this->store_data_in_session_file();
  }

  public function store_secure_data(){
      //    The password is both hashed and encrypted, although this makes it overlong, it is a ngeligible cost
      $this->c_username = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($this->c_username, $this->c_sid));
      $this->c_password = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($this->c_obj_bcrypt_wrapper->create_hashed_password($this->c_password), $this->c_sid));
      $this->c_fname = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($this->c_fname, $this->c_sid));
      $this->c_lname = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($this->c_lname, $this->c_sid));
      $this->c_validated = $this->c_obj_base64_wrapper->encode_base64($this->c_obj_openssl_wrapper->encrypt($this->c_validated, $this->c_sid));

      if($this->c_arr_messages != [] && $this->c_arr_messages != null ){
          $this->c_arr_session_messages = $this->c_arr_messages;
          //for($i = 0; $i< count($this->c_arr_messages); ++$i){
          //    $this->c_arr_session_messages[$i] =  $this->c_obj_openssl_wrapper->encrypt($this->c_arr_messages[$i], $this->c_sid);
          //}
      }

      if($this->c_saved_indicies != '' && $this->c_saved_indicies != null){
            $this->c_session_saved_indicies = $this->c_saved_indicies;
      }

      $this->store_data_in_session_file();

      /** This first encrypts, then encodes most information
       * Except for the password, which is first hashed, then encrypted, then encoded
       */
  }

  public function retrieve_data(){
        $this->retrieve_data_in_session_file();
  }

  public function retrieve_secure_data(){
      $this->retrieve_data_in_session_file();

      $this->c_username = $this->c_obj_openssl_wrapper->decrypt($this->c_obj_base64_wrapper->decode_base64($this->c_username), $this->c_sid);
      $this->c_password = $this->c_obj_openssl_wrapper->decrypt($this->c_obj_base64_wrapper->decode_base64($this->c_password), $this->c_sid);
      $this->c_fname = $this->c_obj_openssl_wrapper->decrypt($this->c_obj_base64_wrapper->decode_base64($this->c_fname), $this->c_sid);
      $this->c_lname = $this->c_obj_openssl_wrapper->decrypt($this->c_obj_base64_wrapper->decode_base64($this->c_lname), $this->c_sid);
      $this->c_validated = $this->c_obj_openssl_wrapper->decrypt($this->c_obj_base64_wrapper->decode_base64($this->c_validated), $this->c_sid);

      if($this->c_arr_messages != [] || $this->c_arr_messages != null ){
          $this->c_arr_session_messages = $this->c_arr_messages;
          //for($i = 0; $i< count($this->c_arr_messages); ++$i){
          //    $this->c_arr_session_messages[$i] =  $this->c_obj_openssl_wrapper->decrypt($this->c_arr_messages[$i], $this->c_sid);
          //}
          //$this->c_arr_messages = [];
      }
      /** This decodes and decrypts the session file information */
  }

  public function clear_data(){
      $this->clear_data_in_session_file();
  }

  public function clear_secure_data(){
      $this->clear_data_in_session_file();

  }

  public function perform_detail_retrieval($p_detail){
      /** This acts as a multi-getter, where necessary information can be extracted from this object */
      if($p_detail == 'username'){
          return $this->c_username;
      }
      else if($p_detail == 'password'){
          return $this->c_password;
      }
      else if($p_detail == 'fname'){
          return $this->c_fname;
      }
      else if($p_detail == 'lname'){
          return $this->c_lname;
      }
      else if($p_detail == 'validated'){
          return $this->c_validated;
      }
      else if($p_detail == 'messages'){
          return $this->c_arr_session_messages;
      }
      else if($p_detail == 'saved'){
          return $this->c_session_saved_indicies;
      }
  }


  private function retrieve_data_in_session_file(){
      $m_retrieve_result = false;
      $m_retrieve_result_username = $this->c_obj_wrapper_session_file->get_session($this->c_username_label);
      $m_retrieve_result_password = $this->c_obj_wrapper_session_file->get_session($this->c_password_label);
      $m_retrieve_result_fname = $this->c_obj_wrapper_session_file->get_session($this->c_fname_label);
      $m_retrieve_result_lname = $this->c_obj_wrapper_session_file->get_session($this->c_lname_label);
      $m_retrieve_result_validated = $this->c_obj_wrapper_session_file->get_session($this->c_validated_label);

      $m_retrieve_result_messages = $this->c_obj_wrapper_session_file->get_session('messages');
      $m_retrieve_result_saved = $this->c_obj_wrapper_session_file->get_session('saved_messages');

      if($m_retrieve_result_messages > 0 && $m_retrieve_result_messages != null){
          for($i = 0; $i < $m_retrieve_result_messages; ++$i){
              array_push($this->c_arr_messages, $this->c_obj_wrapper_session_file->get_session('msg_' . $i));
          }
          //$this->c_arr_session_messages = $this->c_arr_messages;
      }
//      var_dump($m_retrieve_result_saved);

      if($m_retrieve_result_saved != '' && $m_retrieve_result_saved != null){
          $this->c_session_saved_indicies = $m_retrieve_result_saved;
      }

      if ($m_retrieve_result_username !== false && $m_retrieve_result_password !== false &&
          $m_retrieve_result_fname !== false && $m_retrieve_result_lname !== false &&
          $m_retrieve_result_validated !== false )	{

          $this->c_username = $m_retrieve_result_username;
          $this->c_password = $m_retrieve_result_password;
          $this->c_fname = $m_retrieve_result_fname;
          $this->c_lname = $m_retrieve_result_lname;
          $this->c_validated = $m_retrieve_result_validated;

          $m_retrieve_result = true;
      }
      return $m_retrieve_result;
  }

  private function store_data_in_session_file()  {
    $m_store_result = false;

    if($this->c_sid == $this->c_validated) $this->c_validated = 'true';

    $m_store_result_username = $this->c_obj_wrapper_session_file->set_session($this->c_username_label, $this->c_username);
    $m_store_result_password = $this->c_obj_wrapper_session_file->set_session($this->c_password_label, $this->c_password);
    $m_store_result_fname = $this->c_obj_wrapper_session_file->set_session($this->c_fname_label, $this->c_fname);
    $m_store_result_lname = $this->c_obj_wrapper_session_file->set_session($this->c_lname_label, $this->c_lname);
    $m_store_result_validated = $this->c_obj_wrapper_session_file->set_session($this->c_validated_label, $this->c_validated);

    if($this->c_arr_session_messages != [] && $this->c_arr_session_messages != null ){
       $this->c_obj_wrapper_session_file->set_session('messages', count($this->c_arr_session_messages));
       for($i = 0; $i < count($this->c_arr_session_messages); ++$i){
           $this->c_obj_wrapper_session_file->set_session('msg_' . $i, $this->c_arr_session_messages[$i]);
       }
    }

      if($this->c_session_saved_indicies != '' && $this->c_session_saved_indicies != null){
          $this->c_obj_wrapper_session_file->set_session('saved_messages', $this->c_session_saved_indicies);
      }

    if ($m_store_result_username !== false && $m_store_result_password !== false &&
        $m_store_result_fname !== false && $m_store_result_lname !== false &&
        $m_store_result_validated !== false)	{
      $m_store_result = true;
    }
    return $m_store_result;
  }

  private function clear_data_in_session_file(){
      $m_clear_result = false;
      $m_clear_result_username = $this->c_obj_wrapper_session_file->unset_session($this->c_username_label);
      $m_clear_result_password = $this->c_obj_wrapper_session_file->unset_session($this->c_password_label);
      $m_clear_result_fname = $this->c_obj_wrapper_session_file->unset_session($this->c_fname_label);
      $m_clear_result_lname = $this->c_obj_wrapper_session_file->unset_session($this->c_lname_label);
      $m_clear_result_validated = $this->c_obj_wrapper_session_file->unset_session($this->c_validated_label);

      if ($m_clear_result_username !== false && $m_clear_result_password !== false &&
          $m_clear_result_fname !== false && $m_clear_result_lname !== false &&
          $m_clear_result_validated !== false)	{
          $m_clear_result = true;
      }
      return $m_clear_result;
  }

}
