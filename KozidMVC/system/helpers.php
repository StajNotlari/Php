<?php
/*Show All Error Message*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

/*Functions*/
function redirect_to_url($url)
{
    header('Location: '.$url);
    die();
}

function is_user_logged_in()
{
    $user = read_from_session('user');
    return $user == NULL ? FALSE : $user;
}

function write_in_session($key, $value)
{
    $_SESSION[$key] = $value;
}

function read_from_session_and_delete($key)
{
    $value = read_from_session($key);
    write_in_session($key, NULL);
    return $value;
}

function read_from_session($key)
{
    return @$_SESSION[$key];
}

function write_object_and_stop($object)
{
    echo json_encode($object);
    exit;
}

function write_go_back_link($link_value = '[Geri]')
{
    echo '<br><a href="#" onclick="history.go(-1);return false;">'.$link_value.'</a>';
}

?>