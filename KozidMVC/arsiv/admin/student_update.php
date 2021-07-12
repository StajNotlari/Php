<?php

require 'helpers.php';

connect_to_db();

$student_id = $_POST['id'];
$student_name = $_POST['name'];
$student_surname = $_POST['surname'];
$student_department = $_POST['department'];

$sql = "update students set name = '$student_name', surname = '$student_surname', department = '$student_department' where id = $student_id";

if(run_sql_on_db($sql))
{
    echo 'Güncelleme başarılı. <a href="index.php">Listeye Git</a>';
}
else
{
    echo 'Bir hata oluştu: ' . mysqli_error($db_connection);
    write_go_back_link();
}

require 'footer.php';
?>