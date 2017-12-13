<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 01/12/2017
 * Time: 11:16
 */

class ProfileModel
{

    private $c_result;
    private $c_username;
    private $c_password;
    private $c_fname;
    private $c_lname;
    private $c_validated;
    private $c_obj_xml_parser;

    public function __construct(){}

    public function __destruct(){}

    public function set_parameters($p_username, $p_password, $p_fname, $p_lname)
    {
        $this->c_username = $p_username;
        $this->c_password = $p_password;
        $this->c_fname = $p_fname;
        $this->c_lname = $p_lname;
        $this->c_validated = session_id();
        //  Todo: a better method of validation, session_id is overlong

    }

    public function set_xml_parser($p_obj_xml_parser)
    {
        $this->c_obj_xml_parser = $p_obj_xml_parser;
    }

    public function perform_detail_retrieval($p_detail){
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
    }

    public function get_result()
    {
        return true;
    }

}