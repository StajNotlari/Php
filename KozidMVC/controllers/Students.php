<?php

namespace rifatMVC;

class Students extends Controllers 
{
    public function __construct() 
    {
        if(!is_user_logged_in()) redirect_to_url('?wanted_page=/Session/LoginForm');
    }
    
    function index()
    {
        $model = Loader::model('Student');
        $students = $model->get_students();
        
        Loader::view('student_list', $students);
    }
    
    function edit($id)
    {
        $model = Loader::model('Student');
        $student = $model->get_student($id);
        
        Loader::view('student_edit_form', $student);
    }
    
    function update()
    {
        $new_student = 
        [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'department' => $_POST['department'],
        ];
        
        $model = Loader::model('Student');
        $is_success = $model->update_student($new_student);
        
        if($is_success)
            Loader::view('student_success');
        else
            Loader::view('student_fail');
    }
    
    function create()
    {
        Loader::view('student_create_form');
    }
    
    function add()
    {
        $new_student = 
        [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'department' => $_POST['department'],
        ];
        
        $model = Loader::model('Student');
        $is_success = $model->add_student($new_student);
        
        if($is_success)
            Loader::view('student_success');
        else
            Loader::view('student_fail');
    }
    
    function show($id)
    {
        $model = Loader::model('Student');
        $student = $model->get_student($id);
        
        Loader::view('student_show', $student);
    }
    
    function delete($id)
    {
        $model = Loader::model('Student');
        $is_success = $model->delete_student($id);
        
        if($is_success)
            Loader::view('student_success');
        else
            Loader::view('student_fail');
    }
}
