<?php
require("connect.php");
require("menu.php");

$id = $_POST["id"];

$header = $_POST["header"];
$content = $_POST["content"];
$updater = $_POST["updater"];
$time = $_POST["time"];
$image = $_FILES['resim']['name'];

$ekle = "UPDATE news SET header='$header', content='$content', updater='$updater', update_time='$time', picture='$image' WHERE id='$id'";

if ($_POST) {
    if (!file_exists("resimler")) {
        mkdir("resimler");
    }
    $dizin = "resimler/";
    $yuklenecekResim = $dizin . $_FILES["resim"]["name"];

    if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yuklenecekResim)) {
        echo "resminiz yuklendi";
    } else {
        echo $_FILES["resim"]["error"];
    }
}

if($db->query($ekle)) {
    
    echo "<script>swal('Düzenleme İşlemi Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=haber.php");
}

else{
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=haber.php");
}
