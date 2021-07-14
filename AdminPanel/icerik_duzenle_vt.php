<?php
require("connect.php");
require("menu.php");

$id = $_POST['id'];

$header = $_POST["header"];
$content = $_POST["content"];
$updater = $_POST["updater"];
$time = $_POST["time"];

$ekle = "UPDATE contents SET header='$header', content='$content', updater='$updater', update_time='$time' WHERE id='$id'";

if($db->query($ekle)) {
    
    echo "<script>swal('Düzenleme İşlemi Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=icerik.php");
}

else{
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=icerik.php");
}


?>