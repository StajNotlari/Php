<?php
namespace rifatMVC;

class User extends Models 
{
    public function login_control($user_info)
    {
        $sql = "select * from users where state and username = '".$user_info['username']."' and password = '".$user_info['password']."'";
        $user = DataBase::get_data_uses_by_sql($sql);
        return $user == [] ? FALSE : $user[0];
    }
}
