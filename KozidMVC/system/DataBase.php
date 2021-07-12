<?php
namespace rifatMVC;


class DataBase 
{
    private static $db_connection = NULL;
    
    private static function create_db_connection()
    {
        require 'config/db.php';

        $db_connection = new \mysqli($db_config['host'], $db_config['user'], $db_config['password'], $db_config['db']);

        if ($db_connection->connect_error)
            die("Connection failed: " . $db_connection->connect_error);
        
        return $db_connection;
    }
    
    private static function get_connection()
    {
        if(self::$db_connection == NULL)
            self::$db_connection = self::create_db_connection ();
        
        return self::$db_connection;
    }
    
    public static function get_data_uses_by_sql($sql)
    {
        $result = self::run_sql($sql);

        $data = [];
        while($row = $result->fetch_assoc()) 
            array_push ($data, $row);

        return $data;
    }
    
    public static function run_sql($sql)
    {
        return self::get_connection()->query($sql);
    }
    
    public static function write_last_error()
    {
        echo mysqli_error(self::get_connection());
    }
}
