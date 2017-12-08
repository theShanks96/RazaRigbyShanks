<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 08/12/2017
 * Time: 12:37
 */

class MySqlModel{
    private $c_username;
    private $c_password;
    private $c_fname;
    private $c_lname;

    private $c_obj_mysql_wrapper;
    private $c_obj_profile_model;
    private $c_obj_db_handle;
    private $c_obj_sql_queries;

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

    public function set_mysql_wrapper($p_obj_mysql_wrapper)
    {
        $this->c_obj_mysql_wrapper = $p_obj_mysql_wrapper;
    }

    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_mysql_wrapper->set_db_handle( $this->c_obj_db_handle);
        $this->c_obj_mysql_wrapper->set_sql_queries( $this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_mysql_wrapper->store_session_var('user_name', $this->c_username);
        $m_store_result = $this->c_obj_mysql_wrapper->store_session_var('user_password', $this->c_password);

        return $m_store_result;
    }
}