<?php
namespace rifatMVC;

class Home extends Controllers 
{
    public function index()
    {
        $model = Loader::model("Student");
        $data['students'] = $model->get_students();
        $data['user'] = read_from_session('user');
        
        Loader::view('home', $data);
    }
}
