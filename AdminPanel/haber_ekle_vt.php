<?php
require("connect.php");
require("menu.php");

$header = $_POST["header"];
$content = $_POST["content"];
$owner = $_POST["owner"];
$time = $_POST["time"];
$image = $_FILES['resim']['name'];

$ekle = "insert into news(header,content,owner,creation_time,picture) values('$header','$content','$owner','$time','$image')";

if ($_POST) {
    if (!file_exists("resimler")) {
        mkdir("resimler");
    }
    $dizin = "resimler/";
    $yuklenecekResim = $dizin . $_FILES["resim"]["name"];

    if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yuklenecekResim)) {
        echo "Resminiz Yüklendi";
    } else {
        echo $_FILES["resim"]["error"];
    }
}

if ($db->query($ekle)) {

    echo "<script>swal('Kayıt Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
    header("Refresh: 1; url=haber.php");
} else {
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=haber.php");
}