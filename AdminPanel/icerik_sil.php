<?php
require("menu.php");

$id = $_GET['id'];

$baglanti = new mysqli("localhost", "root", "", "admin");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->query("DELETE FROM contents WHERE ID = ". $id);

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

if ($baglanti->affected_rows > 0) {
    
     echo  "<script>swal('Silme İşlemi Başarılı', 'Geçmek İçin Bekleyin', 'success')</script>";
     header("Refresh: 1; url=icerik.php");
} else {
    echo "<script>swal('HATA oluştu', 'Geçmek İçin Lütfen Bekleyin', 'warning')</script>";
    header("Refresh: 1; url=icerik.php");
}
$baglanti->close();
