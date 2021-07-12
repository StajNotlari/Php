<?php
namespace rifatMVC;

class Session extends Controllers 
{
    public function __construct() 
    {
        if(!strstr($_SERVER['REQUEST_URI'], 'Logout') && is_user_logged_in()) redirect_to_url('?');
    }
    
    public function index()
    {
        $user_info = 
        [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];
        
        $model = Loader::model('User');
        $user = $model->login_control($user_info);
        
        if($user)
        {
            write_in_session('user', $user);
            redirect_to_url('?');
        }
        else
        {
            write_in_session('message', 'Kullanıcı ad yada şifre hatalı!');
            redirect_to_url('?wanted_page=/Session/LoginForm');
        }
    }
    
    public function logout()
    {
        write_in_session('user', NULL);
        redirect_to_url('?');
    }

    public function loginForm()
    {
        $data['mesaj'] = read_from_session_and_delete('message');
        Loader::view('login_form', $data);
    }
}
