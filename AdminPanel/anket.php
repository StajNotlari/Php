<?php
session_start();
require("connect.php");
require("menu.php");
require("menu2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Anket</title>
</head>
<body>

<div id="content">
<div class="container">
   <a href="anket_ekle.php"><button style="width:100%;" type="button" class="btn btn-success">Ekle</button></a>
   <?php
      if ($db->connect_error) 
      {
        die("Bağlantı hatası: " . $db->connect_error);
      }
      $sqlquery = "SELECT * FROM surveys";
      $tablo = $db->query($sqlquery);
      
      if ($tablo->num_rows > 0) 
      {
    ?>
        <table  class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Soru</th>
              <th scope="col">Açıklama</th>
              <th scope="col">Seçenek 1</th>
              <th scope="col">Seçenek 2</th>
              <th scope="col">Seçenek 3</th>
              <th scope="col">Seçenek 4</th>
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
                  <td scope="col"><?=$kayit["question"]?></td>
                  <td scope="col"><?=$kayit["explanation"]?></td>
                  <td scope="col"><?=$kayit["option1"]?></td>
                  <td scope="col"><?=$kayit["option2"]?></td>
                  <td scope="col"><?=$kayit["option3"]?></td>
                  <td scope="col"><?=$kayit["option4"]?></td>
                  <td scope="col"><?=$kayit["creation_time"]?></td>
                  <td scope="col"><?=$kayit["owner"]?></td>
                  <td scope="col"><?=$kayit["update_time"]?></td>
                  <td scope="col"><?=$kayit["updater"]?></td>
                  <td scope="col"><?=$kayit["state"]?></td>
                  <td>
                    <a href="anket_sil.php?id=<?= $kayit["ID"] ?>"> <button type="button" class="btn btn-outline-danger btn-sm">SİL</button></a>
                    <a href="anket_duzenle.php?id=<?= $kayit["ID"] ?>"><button type="button" class="btn btn-outline-primary btn-sm" style="margin-top:5px;">Düzenle</button></a>
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