<?php
/**
 * MySQLQueries.php
 *
 * This class provides functions to perform operations on the
 */

class MySqlQueries {

    public function __construct() { }

    public function __destruct() { }

    public static function check_database_var()
    {
        $m_query_string  = "SELECT database_value ";
        $m_query_string .= "FROM information_table ";
        $m_query_string .= "WHERE database_id = :database_id ";
        $m_query_string .= "AND database_label = :database_label ";
        $m_query_string .= "LIMIT 1";
        return $m_query_string;
    }

    public static function create_database_var()
    {
        $m_query_string  = "INSERT INTO information_table ";
        $m_query_string .= "SET database_id = :database_id, ";
        $m_query_string .= "database_label = :database_label, ";
        $m_query_string .= "database_value = :database_value ";
        return $m_query_string;
    }

    public static function set_database_var()
    {
        $m_query_string  = "UPDATE information_table ";
        $m_query_string .= "SET database_value = :database_value ";
        $m_query_string .= "WHERE database_id = :database_id ";
        $m_query_string .= "AND database_label = :database_label";
        return $m_query_string;
    }

    public static function get_database_var()
    {
        $m_query_string  = "SELECT database_value ";
        $m_query_string .= "FROM information_table ";
        $m_query_string .= "WHERE database_id = :database_id ";
        $m_query_string .= "AND database_label = :database_label";
        return $m_query_string;
    }
}