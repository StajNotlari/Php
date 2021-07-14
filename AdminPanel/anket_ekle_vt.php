<?php
require("connect.php");
require("menu.php");


$question = $_POST["question"];
$explanation = $_POST["explanation"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];
$option3 = $_POST["option3"];
$option4 = $_POST["option4"];
$owner = $_POST["owner"];
$time = $_POST["time"];

$ekle = "insert into surveys(question,explanation,option1,option2,option3,option4,owner,creation_time) values('$question','$explanation', '$option1', '$option2', '$option3', '$option4', '$owner','$time')";

if($db->query($ekle)) {
    
    echo "<script>swal('Kayıt Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=anket.php");
}

else{
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=anket.php");
}


?>