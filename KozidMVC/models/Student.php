<?php
namespace rifatMVC;

class Student extends Models 
{
    public function get_students()
    {
        $sql = 'select * from students';
        return DataBase::get_data_uses_by_sql($sql);
    }
    
    public function get_student($id)
    {
        $sql = 'select * from students where id = ' . $id;
        $data = DataBase::get_data_uses_by_sql($sql);
        
        return @$data[0];
    }
    
    public function add_student($new_student)
    {
        $sql = "insert into students values (NULL, '".$new_student['name']."', '".$new_student['surname']."', '".$new_student['department']."')";
        return DataBase::run_sql($sql);
    }
    
    public function update_student($new_student)
    {
        $sql = "update students set name = '".$new_student['name']."', surname = '".$new_student['surname']."', department = '".$new_student['department']."' where id = ".$new_student['id'];
        return DataBase::run_sql($sql);
    }
    
    public function delete_student($student_id)
    {
        $sql = "delete from students where id = $student_id";
        return DataBase::run_sql($sql);
    }
}
