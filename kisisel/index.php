<?php 

require_once "admin/islem/baglan.php";



$hakkimda=$baglanti->prepare("SELECT * FROM  hakkimda where hakkimda_id=?");
$hakkimda->execute(array(1));
$hakkimdacek=$hakkimda->fetch(PDO::FETCH_ASSOC);



$slider=$baglanti->prepare("SELECT * FROM  slider  order by slider_id ASC");
  $slider->execute();
  while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC));



$ayar=$baglanti->prepare("SELECT * FROM  ayar where ayar_id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);



$basarilar=$baglanti->prepare("SELECT * FROM  basarilar where basari_id=?");
$basarilar->execute(array(1));
$basarilarcek=$basarilar->fetch(PDO::FETCH_ASSOC);




require_once 'header.php';
require_once 'sidebar.php';
require_once 'slider.php';
require_once 'about.php';
require_once 'services.php';
require_once 'counter.php';
require_once 'skills.php';
require_once 'blog.php';
require_once 'contact.php';
require_once 'footer.php';




?>
	