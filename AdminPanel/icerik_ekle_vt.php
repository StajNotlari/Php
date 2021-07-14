<?php
require("connect.php");
require("menu.php");



$header = $_POST["header"];
$content = $_POST["content"];
$owner = $_POST["owner"];
$time = $_POST["time"];

$ekle = "insert into contents(header,content,owner,creation_time) values('$header','$content', '$owner','$time')";

if($db->query($ekle)) {
    
    echo "<script>swal('Kayıt Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=icerik.php");
}

else{
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=icerik.php");
}


?>