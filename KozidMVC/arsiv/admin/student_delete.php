<?php

require 'helpers.php';

connect_to_db();

$student_id = $_GET['id'];

$sql = "delete from students where id = $student_id";

if(run_sql_on_db($sql))
{
    echo 'Silme başarılı. <a href="index.php">Listeye Git</a>';
}
else
{
    echo 'Bir hata oluştu: ' . mysqli_error($db_connection);
    write_go_back_link();
}

require 'footer.php';
?>