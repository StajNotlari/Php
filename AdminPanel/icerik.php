<?php
session_start();
require("connect.php");
require("menu.php");
require("menu2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>İçerikler</title>
</head>
<body>

<div id="content">

<div class="container">

    <a href="icerik_ekle.php"><button style="width:100%;" type="button" class="btn btn-success">Ekle</button></a>
   
    <?php
      if ($db->connect_error) 
      {
        die("Bağlantı hatası: " . $db->connect_error);
      }
      $sqlquery = "SELECT * FROM contents";
      $tablo = $db->query($sqlquery);
      
      if ($tablo->num_rows > 0) 
      {
    ?>
        <table  class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Başlık</th>
              <th scope="col">Özet İçerik</th>
              <th scope="col">Oluşturma Zamanı</th>
              <th scope="col">Oluşturan</th>
              <th scope="col">Düzenleme Zamanı</th>
              <th scope="col">Düzenleyen</th>
              <th scope="col">Durum</th>
              <th scope="col">İşlem</th>
            </tr>
            </thead>

              <?php
                while($kayit = $tablo->fetch_assoc()) 
                {
              ?>
                <tr>
                  <td scope="col"><?=$kayit["ID"]?></td>
                  <td scope="col"><?=$kayit["header"]?></td>
                  <td scope="col"><?=$kayit["content"]?></td>
                  <td scope="col"><?=$kayit["creation_time"]?></td>
                  <td scope="col"><?=$kayit["owner"]?></td>
                  <td scope="col"><?=$kayit["update_time"]?></td>
                  <td scope="col"><?=$kayit["updater"]?></td>
                  <td scope="col"><?=$kayit["state"]?></td>
                  <td>
                    <a href="icerik_sil.php?id=<?= $kayit["ID"] ?>"> <button type="button" class="btn btn-outline-danger btn-sm">SİL</button></a>
                    <a href="icerik_duzenle.php?id=<?= $kayit["ID"] ?>"><button type="button" class="btn btn-outline-primary btn-sm" style="margin-top:5px;">Düzenle</button></a>
                  </td>
                </tr>

              <?php
                }
              ?>

         </table>
              <?php  
                  } 
                  else
                  {
                    echo "<script>swal('Kayıt Bulunamadı', 'Geçmek İçin OK tuşuna basın', 'warning')</script>";
                   
                  } 
              ?>

</div>
</div>

</body>
</html>