 <?php

/**
	* SQLQueries.php
	*
	* hosts all SQL queries to be used by the Model
	*
	* Author: CF Ingrams
	* Email: <clinton@cfing.co.uk>
	* Date: 22/10/2017
	*
	* @author CF Ingrams <clinton@cfing.co.uk>
	* @copyright CFI
	*/

class SQLQueries
{
	public function __construct() { }

	public function __destruct() { }

  public static function check_database_var()
  {
    $m_query_string  = "SELECT database_var_name ";
    $m_query_string .= "FROM database ";
    $m_query_string .= "WHERE database_var_name = :database_var_name ";
    $m_query_string .= "LIMIT 1";
    return $m_query_string;
  }

  public static function create_database_var()
	{
		$m_query_string  = "INSERT INTO database ";
		$m_query_string .= "SET database_var_name = :database_var_name, ";
		$m_query_string .= "database_value = :database_var_value ";
		return $m_query_string;
	}

	public static function set_database_var()
	{
		$m_query_string  = "UPDATE database ";
		$m_query_string .= "SET database_value = :database_var_value ";
		$m_query_string .= "WHERE database_var_name = :database_var_name";
		return $m_query_string;
	}

	public static function get_database_var()
	{
		$m_query_string  = "SELECT database_value ";
		$m_query_string .= "FROM database ";
		$m_query_string .= "WHERE database_var_name = :database_var_name";
		return $m_query_string;
	}
}
