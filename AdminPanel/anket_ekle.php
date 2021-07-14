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
   <title>Anket Ekle</title>
</head>
<body>

<div id="content">

    <div class="container">
    <form action="anket_ekle_vt.php" method="post">
        <label>Soru</label>
        <input type="text" name="question" placeholder="Anket Sorusu.." required="required">

        <label>Açıklama</label>
        <input type="text" name="explanation" placeholder="Altyazı.." style="height:80px" required="required">

        <label for="content">Seçenek 1</label>
        <input type="text" id="lname" name="option1" placeholder="..." required="required">
        <label for="content">Seçenek 2</label>
        <input type="text" id="lname" name="option2" placeholder="..." required="required">
        <label for="content">Seçenek 3</label>
        <input type="text" id="lname" name="option3" placeholder="..." required="required">
        <label for="content">Seçenek 4</label>
        <input type="text" id="lname" name="option4" placeholder="..." required="required">

        <label>Oluşturma Zamanı</label>
        <input type="text" name="time" value="<?php echo date('d.m.Y H:i:s'); ?>">

        <label>Oluşturan</label>
        <input type="text" name="owner" value="<?php echo $_SESSION['user']; ?>">
    
        <input type="submit" value="EKLE">
    </form>
    </div>

</div>


<style>
input[type=text], select {
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