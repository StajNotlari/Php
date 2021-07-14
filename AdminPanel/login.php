<?php
require("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body style="background-image:url(bg.jpg); background-repeat:no-repeat; background-size: cover;">


<form method="POST" style="width:700px; height:600px; margin-top: 320px; margin-left:150px;">
<h1 style="color:white">LOGIN</h1>
  <div class="form-group">
    <input type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email giriniz" required="required">
    <small id="emailHelp" class="form-text text-muted">E-postanızı asla başkalarıyla paylaşmayacağız.</small>
  </div>

  <div class="form-group">
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Şifreniz" required="required">
  </div>

  <div>
  <button type="submit" class="btn btn-outline-secondary" style="margin-top: 10px; color:white">Giriş</button>  

  <button type="submit" class="btn btn-link" style="color:white; margin-left:496px; text-decoration:none;">Şifremi Unuttum</button>
</div>
  
</form>





</body>
</html>
