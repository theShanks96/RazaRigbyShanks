<?php
/**
 * Created by PhpStorm.
 * User: Shanks
 * Date: 08/12/2017
 * Time: 12:37
 */

class MySqlModel
{
    /** @var String $c_username The username of a user on the app  */
    private $c_username;
    /** @var String $c_password The password of a user on the app  */
    private $c_password;
    /** @var String $c_fname The first name of a user on the app  */
    private $c_fname;
    /** @var String $c_lname The surname of a user on the app  */
    private $c_lname;

    /** @var Object $c_obj_mysql_wrapper NOT SURE WHAT THIS IS  */
    private $c_obj_mysql_wrapper;
    /** @var Object $c_obj_profile_model This is used to model a users profile  */
    private $c_obj_profile_model;
    /** @var Object $c_obj_db_handle Holds a reference to the database  */
    private $c_obj_db_handle;
    /** @var Object $c_obj_sql_queries This is used to access SQL queries from the MySQL class  */
    private $c_obj_sql_queries;

    /**
     * Class constructor that creates an instance of the MySQLModel class
     *
     * Initialises the username, password, first name, surname, session file Object and the profile model object to
     * null
     */
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

    /**
     * NOT SURE WHAT THIS DOES
     *
     * @param Object $p_obj_mysql_wrapper
     */
    public function set_mysql_wrapper($p_obj_mysql_wrapper)
    {
        $this->c_obj_mysql_wrapper = $p_obj_mysql_wrapper;
    }

    /**
     * A function that sets a reference to the database. It takes a database object handle as a parameter and assigns
     * it to the mysql wrapper class variable
     *
     * @param Object $p_obj_db_handle
     */
    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    /**
     * A function that sets the sql queries to be used on the database. It takes an sql queries object as a parameter
     * and assigns it to sql queries class variable
     *
     * @param Object $p_obj_sql_queries
     */
    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

    /**
     * A function that assigns a database for data to be stored and the sql queries to be carried out on that database
     * in order to store the data in the given database.
     *
     * It initialises the store result variable to false and takes the username and password class variables as parameters
     * to the store_session_var function and assigns it to the store result variable.
     *
     * The store result variable is returned which now holds the data to be stored in the database
     *
     * @return NOT SURE
     */
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