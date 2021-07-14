<?php
try 
{
    $sunucu = "localhost";
    $kullanici = "root";
    $parola = "";
    $veritabani = "admin";
    $db = new mysqli($sunucu, $kullanici, $parola, $veritabani);	
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} 
catch ( PDOException $e )
{
    print $e->getMessage();
}
?>