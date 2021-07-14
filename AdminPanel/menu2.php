<?php

$currentPage = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$stripCurrentPage = explode("/",$currentPage);
$pageName = end($stripCurrentPage);
?>
<div id="menu">
    <ul>
        <li>
            <a><?php echo $_SESSION['user']; ?> </a>
        </li>
        <li>
            <a href="index.php" class="<?php if($pageName == "index.php"){echo "active";} ?>">Anasayfa</a>
        </li>
        <li>
            <a href="haber.php" class="<?php if($pageName == "haber.php"){echo "active";} ?>">Haberler</a>
        </li>
        <li>
            <a href="icerik.php" class="<?php if($pageName == "icerik.php"){echo "active";} ?>">İçerikler</a>
        </li>
        <li> 
            <a href="anket.php" class="<?php if($pageName == "anket.php"){echo "active";} ?>">Anket</a>
        </li>
        <li>
            <a href="login.php"><b>Çıkış Yap</b></a>
        </li>
    </ul>
</div>