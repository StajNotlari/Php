<?php
require("connect.php");
require("menu.php");

$id = $_POST['id'];

$question = $_POST["question"];
$explanation = $_POST["explanation"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];
$option3 = $_POST["option3"];
$option4 = $_POST["option4"];
$updater = $_POST["updater"];
$time = $_POST["time"];

$ekle = "UPDATE surveys SET question='$question', explanation='$explanation', option1='$option1', option2='$option2', option3='$option3', option4='$option4', updater='$updater', update_time='$time' WHERE id='$id'";

if($db->query($ekle)) {
    
    echo "<script>swal('Kayıt İşlemi Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=anket.php");
}

else{
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=anket.php");
}


?>