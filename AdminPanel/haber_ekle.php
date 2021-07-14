<?php
session_start();
require("connect.php");
require("menu.php");
require("menu2.php");
date_default_timezone_set('Europe/Istanbul');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Haber Ekle</title>
</head>

<body>

  <div id="content">

    <div class="container">
      <form action="haber_ekle_vt.php" method="post" enctype="multipart/form-data">
        <label>Başlık</label>
        <input type="text" name="header" placeholder="Haber başlığı.." required="required">

        <label>Özet İçerik</label>
        <input type="text" name="content" placeholder="Kısa içerik.." style="height:100px" required="required">

        <label>Oluşturma Zamanı</label>
        <input type="text" name="time" value="<?php echo date('d.m.Y H:i:s'); ?>">

        <label>Oluşturan</label>
        <input type="text" name="owner" value="<?php echo $_SESSION['user']; ?>">

        <label">Resim Yükle</label><br>
          <input type="file" name="resim" />
          <input type="submit" value="EKLE">
      </form>

    </div>

  </div>


  <style>
    input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      background-color: #f2f2f2;
    }
  </style>

</body>

</html>