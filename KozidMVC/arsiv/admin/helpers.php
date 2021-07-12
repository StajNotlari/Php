<?php
/*Show All Error Message*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*Variables*/
$db_connection = NULL;

/*Functions*/
function connect_to_db()
{
    $server_name = "localhost";
    $user_name = "root";
    $password = "1234Aa";
    $database_name = "mvc_web_site_db";

    global $db_connection;
    $db_connection = new mysqli($server_name, $user_name, $password, $database_name);
    
    if ($db_connection->connect_error)
        die("Connection failed: " . $db_connection->connect_error);
}

function get_data_from_db_uses_by_sql($sql)
{
    global $db_connection;
    $result = $db_connection->query($sql);

    $data = [];
    while($row = $result->fetch_assoc()) 
        array_push ($data, $row);

    return $data;
}

function run_sql_on_db($sql)
{
    global $db_connection;
    return $db_connection->query($sql);
}

function write_go_back_link($link_value = '[Geri]')
{
    echo '<br><a href="#" onclick="history.go(-1);return false;">'.$link_value.'</a>';
}

function write_object_and_stop($object)
{
    echo json_encode($object);
    exit;
}

?>