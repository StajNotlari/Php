<?php
session_start();
require("connect.php");
require("menu.php");
require("menu2.php");

if(!isset($_SESSION["user"]))  header("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Anasayfa</title>
</head>
<body>


<div id="content">
<div class="jumbotron" style="margin-top:50px;">
  <h1 class="display-4">Admin Panel'e hoşgeldin!</h1>
  <p class="lead">Burada; haber, içerik, anket ekleyip çıkarabilir, gerekli düzenlemeleri yapabilirsin. </p>
  <hr class="my-4">

  <p class="lead">
    <a class="btn btn-outline-primary btn-md" href="haber.php" role="button">Haydi Başlayalım</a>
  </p>
</div>
</div>


</body>
</html>