<?php

require 'helpers.php';

connect_to_db();

$student_name = $_POST['name'];
$student_surname = $_POST['surname'];
$student_department = $_POST['department'];

$sql = "insert into students values (NULL, '$student_name', '$student_surname', '$student_department')";

if(run_sql_on_db($sql))
{
    echo 'Ekleme başarılı. <a href="index.php">Listeye Git</a>';
}
else
{
    echo 'Bir hata oluştu: ' . mysqli_error($db_connection);
    write_go_back_link();
}

require 'footer.php';
?>