<?php
session_start();
require("connect.php");
require("menu.php");
require("menu2.php");
$id = $_GET['id'];
date_default_timezone_set('Europe/Istanbul');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Haber Düzenle</title>
</head>

<body>

  <div id="content">

    <?php
    if ($db->connect_error) {
      die("Bağlantı hatası: " . $db->connect_error);
    }
    $sqlquery = "SELECT * FROM news WHERE ID =$id";
    $tablo = $db->query($sqlquery);

    if ($tablo->num_rows > 0) {
    ?>

      <div class="container">

        <?php
        while ($kayit = $tablo->fetch_assoc()) {
        ?>
          <form action="haber_duzenle_vt.php" method="post" enctype="multipart/form-data">

            <label>Başlık</label>
            <input type="text" name="header" value="<?= $kayit["header"] ?>" required="required">

            <label>İçerik</label>
            <input type="text" name="content" value="<?= $kayit["content"] ?>" style="height:100px" required="required">

            <label>Düzenleme Zamanı</label>
            <input type="text" name="time" value="<?php echo date('d.m.Y H:i:s'); ?>">

            <label>Düzenleyen</label>
            <input type="text" name="updater" value="<?php echo $_SESSION['user']; ?>">
            <input type="text" style="display:none" name="id" value="<?php echo $id; ?>">

            <label">Resim Yükle</label><br>
              <input type="file" name="resim" />
              <input type="submit" value="DÜZENLE">
          </form>
      </div>

    <?php
        }
    ?>

  <?php
    } else {
      echo "<script>swal('Kayıt Bulunamadı', 'Geçmek İçin OK tuşuna basın', 'warning')</script>";
    }
  ?>

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
      background-color: #008bff;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #007bff;
    }

    div {
      background-color: #f2f2f2;
    }
  </style>

</body>

</html>