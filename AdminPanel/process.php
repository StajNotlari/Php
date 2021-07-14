<html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>

<?php
session_start();
require("connect.php");

@$kullanici = $_POST['user'];
@$parola = $_POST['pass'];

$sql = "SELECT * from login where email='$kullanici' and password='$parola'";
$sorgu = mysqli_query($db, $sql);

$dizi = mysqli_fetch_array($sorgu);

if ($dizi != 0) {
  $_SESSION["user"] = $kullanici;
  echo "<script>swal('Giriş Başarılı', 'Geçmek İçin Lütfen Bekleyin', 'success')</script>";
  header("Refresh: 1; url=index.php");
} elseif (strlen($kullanici) == 0 || strlen($parola) == 0) {}
 else {
  echo "<script>swal('Girdiğin bilgileri tekrar kontrol eder misin?', 'Geçmek İçin Lütfen OK tuşuna basın', 'warning')</script>";
}

?>