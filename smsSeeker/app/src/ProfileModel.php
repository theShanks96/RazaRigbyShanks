<?php
/**
 * ProfileModel.php
 *
 * This class is used to create a profile for each user that signs up to the app. It provides functions set the users
 * details as well as retrieving them.
 */

class ProfileModel
{
    /** @var Boolean $c_result NOT SURE WHAT THIS DOES  */
    private $c_result;
    /** @var String $c_username The username a user signs up with */
    private $c_username;
    /** @var String $c_password The password a user signs up with */
    private $c_password;
    /** @var String fname The first name a user signs up with */
    private $c_fname;
    /** @var String $c_lname The surname a user signs up with */
    private $c_lname;
    /** @var String $c_validated NOT SURE WHAT THIS IS FOR */
    private $c_validated;
    /** @var  WHAT TYPE $c_obj_xml_parser NOTE SURE WHAT THIS IS FOR   */
    private $c_obj_xml_parser;

    public function __construct(){}

    public function __destruct(){}

    /**
     * This function simply sets the users details with the given parameters.
     *
     * @param String $p_username
     * @param String $p_password
     * @param String $p_fname
     * @param String $p_lname
     */

    public function set_parameters($p_username, $p_password, $p_fname, $p_lname)
    {
        $this->c_username = $p_username;
        $this->c_password = $p_password;
        $this->c_fname = $p_fname;
        $this->c_lname = $p_lname;
        $this->c_validated = session_id();
        //  Todo: a better method of validation, session_id is overlong
    }

    /** This function simply initialises the class xml_parser object to the given parameter xml_parser object  */

    public function set_xml_parser($p_obj_xml_parser)
    {
        $this->c_obj_xml_parser = $p_obj_xml_parser;
    }

    /**
     * This function is used to retrieve a particular detail of a user, this is dependent on the passed in parameter.
     * If the passed in parameter is equal to the String 'username' then return the set class username variable, else
     * it it's equal to 'password' then return the set class password, else if it's equal to 'fname' then return the
     * set class first name, else if it's equal to 'lname' then return the set class surname and finally if it's equal
     * to 'validated' then return NOT SURE WHAT VALIDATED IS FOR.
     *
     * @param String $p_detail
     * @return String
     */

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