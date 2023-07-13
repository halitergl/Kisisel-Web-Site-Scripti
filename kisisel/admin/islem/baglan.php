<?php

session_start();
ob_start();

try{
	$baglanti = new PDO("mysql:host=localhost; dbname=yenisitem; charset=utf8","root","");
} catch(PDOException $error) {
	echo "<center><b style='color:red;'>Veritabanı Bağlanılmadı!</b></center>"; $error->getMessage();
}
?>