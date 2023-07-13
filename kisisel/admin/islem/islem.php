<?php
require_once '../islem/baglan.php';


if (isset($_POST['ayarkaydet'])) {



	$duzenle=$baglanti->prepare("UPDATE ayar SET 



		baslik=:baslik,
		aciklama=:aciklama,
		anahtarkelime=:anahtarkelime,
		footer=:footer,
		footerlink=:footerlink,
		adres=:adres,
		mail=:mail,
		telefon=:telefon


		WHERE ayar_id=1

		");


	$update=$duzenle->execute(array(

		'baslik'=>$_POST['Baslik'],
		'aciklama'=>$_POST['aciklama'],
		'anahtarkelime'=>$_POST['anahtarkelime'],
		'footer'=>$_POST['footer'],
		'footerlink'=>$_POST['footerlink'],
		'adres'=>$_POST['adres'],
		'mail'=>$_POST['mail'],
		'telefon'=>$_POST['telefon']



	));
	if ($update) {

		header("Location:../ayarlar?yuklenme=basarili");
	}
	else{
		header("Location:../ayarlar?yuklenme=basarisiz");
	}



}






if (isset($_POST['logokaydet'])) {

  

	$uploads_dir='../resimler/logo';
	@$tmp_name= $_FILES['logo'] ["tmp_name"];
	@$name= $_FILES['logo'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


	$duzenle=$baglanti->prepare("UPDATE ayar SET 



		logo=:logo

		WHERE ayar_id=1

		");

	$update=$duzenle->execute(array(

		'logo'=>$resimyolu


	));
	if ($update) {

		$resimsil=$_POST['eskilogo'];
		unlink("../resimler/logo/$resimsil");


		header("Location:../ayarlar?yuklenme=basarili");
	}
	else{
		header("Location:../ayarlar?yuklenme=basarisiz");
	}

}

if (isset($_POST['sliderkaydet'])) {


	$uploads_dir='../resimler/slider';
	@$tmp_name= $_FILES['slideresim'] ["tmp_name"];
	@$name= $_FILES['slideresim'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
	$sliderkaydet=$baglanti->prepare("INSERT into slider SET 

		
		

		
		
		
		
		

		slider_baslik=:slider_baslik,
		slider_yazi=:slider_yazi,
		slider_link=:slider_link,
		slider_resim=:slider_resim


		");

	$insert=$sliderkaydet->execute(array(
		'slider_baslik'=>$_POST['sliderbaslik'],
		'slider_yazi'=>$_POST['slideraciklama'],
		'slider_link'=>$_POST['sliderlink'],	
		'slider_resim'=>$resimyolu




	));
	if ($insert) {

		header("Location:../slider?yuklenme=basarili");
	}
	else{
		header("Location:../slider?yuklenme=basarisiz");
	}

}


if (isset($_POST['sliderduzenle'])) {

	$slideid=$_POST['id'];

	if ($_FILES['slideresim']   ["size"]>0) {

		$uploads_dir='../resimler/slider';
		@$tmp_name= $_FILES['slideresim'] ["tmp_name"];
		@$name= $_FILES['slideresim'] ["name"];


		$sayi=rand(1,1000000);
		$sayi2=rand(1,100000);
		$sayi3=rand(10000, 20000000);


		$sayilar=$sayi.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
		$duzenle=$baglanti->prepare("UPDATE slider SET 



			slider_baslik=:slider_baslik,
			slider_yazi=:slider_yazi,
			slider_link=:slider_link,
			slider_resim=:slider_resim

			WHERE slider_id=$slideid

			");

		$update=$duzenle->execute(array(

			'slider_baslik'=>$_POST['sliderbaslik'],
			'slider_yazi'=>$_POST['slideraciklama'],
			'slider_link'=>$_POST['sliderlink'],
			'slider_resim'=>$resimyolu


		));
		if ($update) {

			$resimsil=$_POST['eskiresim'];
			unlink("../resimler/slider/$resimsil");

			header("Location:../slider.php?yuklenme=basarili");
		}
		else{
			header("Location:../slider.php?yuklenme=basarisiz");
		}




	}
	else{

		$duzenle=$baglanti->prepare("UPDATE slider SET 



			slider_baslik=:slider_baslik,
			slider_yazi=:slider_yazi,
			slider_link=:slider_link
			WHERE slider_id=$slideid

			");

		$update=$duzenle->execute(array(

			'slider_baslik'=>$_POST['sliderbaslik'],
			'slider_yazi'=>$_POST['slideraciklama'],
			'slider_link'=>$_POST['sliderlink']
		


		));
		if ($update) {

			header("Location:../slider.php?yuklenme=basarili");
		}
		else{
			header("Location:../slider.php?yuklenme=basarisiz");
		}
	}
}




if (isset($_POST['slidersil'])) {


	$slidersil=$baglanti->prepare("DELETE from  slider where slider_id=:slider_id ");

	$slidersil->execute(array(
		'slider_id'=>$_POST['id']


	));

	if ($slidersil) {

		$resimsil=$_POST['resim'];
		unlink("../resimler/slider/$resimsil");
		Header("Location:../slider?yuklenme=basarili");
	}
	else{
		Header("Location:../slider?yuklenme=hata");
	}
}








if (isset($_POST['hakkimdakaydet'])) {



	$duzenle=$baglanti->prepare("UPDATE hakkimda SET 



		hakkimda_baslik=:hakkimda_baslik,
		hakkimda_yazi=:hakkimda_yazi

		WHERE hakkimda_id=1

		");


	$update=$duzenle->execute(array(

		'hakkimda_baslik'=>$_POST['baslik'],
		'hakkimda_yazi'=>$_POST['yazi']



	));
	if ($update) {

		header("Location:../hakkimda?yuklenme=basarili");
	}
	else{
		header("Location:../hakkimda?yuklenme=basarisiz");
	}



}

// Başarı Kaydet


if (isset($_POST['basarikaydet'])) {

	$basarikaydet=$baglanti->prepare("INSERT into basarilar SET 



		kutu=:kutu,
		kutu_icon=:kutu_icon,
		kutu_renk=:kutu_renk


		");

	$insert=$basarikaydet->execute(array(
		'kutu'=>$_POST['kutu'],
		'kutu_icon'=>$_POST['kutu_icon'],
		'kutu_renk'=>$_POST['kutu_renk']




	));
	if ($insert) {

		header("Location:../basarilar?yuklenme=basarili");
	}
	else{
		header("Location:../basarilar?yuklenme=basarisiz");
	}

}







	// Başarı Ayarlar

	extract($_POST);
if (isset($basariduzenle)) {

	$basari_id = $_GET["basari_id"];
	
	if (!$kutu || !$kutu_icon || !$kutu_renk ){
		header("Location: basarilar.php?hizmet-guncelle=bos");
	}else{
		$query = $baglanti->prepare("UPDATE basarilar SET kutu=?, kutu_icon=?, kutu_renk=?  WHERE basari_id=?");
		$update = $query->execute (array($kutu,$kutu_icon,$kutu_renk, $basari_id));

		if ($update) {
			header("Location:../basarilar?yuklenme=basarili");
	}
	else{
		header("Location:../basarilar?yuklenme=basarisiz");
			}

			
		}
	}


// Başarı Silme İşlem

		extract($_GET);
if (isset($basarisil_id)) {
		$query = $baglanti->prepare("DELETE FROM basarilar WHERE basari_id=?");
		$delete = $query->execute (array($basarisil_id));

		if ($delete) {
			header("Location:../basarilar?yuklenme=basarili");
	}
	else{
		header("Location:../basarilar?yuklenme=basarisiz");
					}
		
		}

// Yaptıklarım Ekle

if (isset($_POST['yaptiklarimkaydet'])) {

	$yaptiklarimkaydet=$baglanti->prepare("INSERT into neyaparim SET 



		neyaparim_baslik=:neyaparim_baslik,
		neyaparim_yazi=:neyaparim_yazi,
		neyaparim_renk=:neyaparim_renk,
		neyaparim_icon=:neyaparim_icon


		");

	$insert=$yaptiklarimkaydet->execute(array(
		'neyaparim_baslik'=>$_POST['neyaparim_baslik'],
		'neyaparim_yazi'=>$_POST['neyaparim_yazi'],
		'neyaparim_renk'=>$_POST['neyaparim_renk'],
		'neyaparim_icon'=>$_POST['neyaparim_icon']




	));
	if ($insert) {

		header("Location:../yaptiklarim?yuklenme=basarili");
	}
	else{
		header("Location:../yaptiklarim?yuklenme=basarisiz");
	}

}







	// Yaptıklarım Düzenle Ayarlar

	extract($_POST);
if (isset($yaptiklarimduzenle)) {

	$neyaparim_id = $_GET["neyaparim_id"];
	
	if (!$neyaparim_baslik || !$neyaparim_yazi || !$neyaparim_renk || !$neyaparim_icon ){
		header("Location: neyaparim?hizmet-guncelle=bos");
	}else{
		$query = $baglanti->prepare("UPDATE neyaparim SET neyaparim_baslik=?,neyaparim_yazi=?, neyaparim_renk=?, neyaparim_icon=?  WHERE neyaparim_id=?");
		$update = $query->execute (array($neyaparim_baslik,$neyaparim_yazi,$neyaparim_renk,$neyaparim_icon, $neyaparim_id));

		if ($update) {
			header("Location:../yaptiklarim?yuklenme=basarili");
	}
	else{
		header("Location:../yaptiklarim?yuklenme=basarisiz");
			}

			
		}
	}


// Yaptıklarım Silme İşlem

		extract($_GET);
if (isset($neyaparimisil_id)) {
		$query = $baglanti->prepare("DELETE FROM neyaparim WHERE neyaparim_id=?");
		$delete = $query->execute (array($neyaparimisil_id));

		if ($delete) {
			header("Location:../yaptiklarim?yuklenme=basarili");
	}
	else{
		header("Location:../yaptiklarim?yuklenme=basarisiz");
					}
		
		}







// Blog Kaydet

if (isset($_POST['blogkaydet'])) {


	$uploads_dir='../resimler/blog';
	@$tmp_name= $_FILES['blogresim'] ["tmp_name"];
	@$name= $_FILES['blogresim'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
	$blogkaydet=$baglanti->prepare("INSERT into blog SET 

		
		

		
		
		
		
		

		kim=:kim,
		baslik=:baslik,
		yazi=:yazi,
		resim=:resim


		");

	$insert=$blogkaydet->execute(array(
		'kim'=>$_POST['kim'],
		'baslik'=>$_POST['baslik'],
		'yazi'=>$_POST['yazi'],	
		'resim'=>$resimyolu




	));
	if ($insert) {

		header("Location:../blog?yuklenme=basarili");
	}
	else{
		header("Location:../blog?yuklenme=basarisiz");
	}

}

// Blog Düzenle

if (isset($_POST['blogduzenle'])) {

	$blog_id=$_POST['id'];

	if ($_FILES['resim']   ["size"]>0) {

		$uploads_dir='../resimler/blog';
		@$tmp_name= $_FILES['resim'] ["tmp_name"];
		@$name= $_FILES['resim'] ["name"];


		$sayi=rand(1,1000000);
		$sayi2=rand(1,100000);
		$sayi3=rand(10000, 20000000);


		$sayilar=$sayi.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
		$duzenle=$baglanti->prepare("UPDATE blog SET 



			baslik=:baslik,
			yazi=:yazi,
			kim=:kim,
			resim=:resim

			WHERE blog_id={$_POST['id']}

			");

		$update=$duzenle->execute(array(

			'baslik'=>$_POST['baslik'],
			'yazi'=>$_POST['yazi'],
			'kim'=>$_POST['kim'],
			'resim'=>$resimyolu


		));
		if ($update) {

			$resimsil=$_POST['eskiresim'];
			unlink("../resimler/blog/$resimsil");

			header("Location:../blog.php?yuklenme=basarili");
		}
		else{
			header("Location:../blog.php?yuklenme=basarisiz");
		}




	}
	else{

		$duzenle=$baglanti->prepare("UPDATE blog SET 


			baslik=:baslik,
			yazi=:yazi,
			kim=:kim
		
			WHERE blog_id={$_POST['id']}

			");

		$update=$duzenle->execute(array(

			'baslik'=>$_POST['baslik'],
			'yazi'=>$_POST['yazi'],
			'kim'=>$_POST['kim']
		


		));
		if ($update) {

			header("Location:../blog.php?yuklenme=basarili");
		}
		else{
			header("Location:../blog.php?yuklenme=basarisiz");
		}
	}
}

// Blog Sil
if (isset($_POST['blogsil'])) {


	$blogsil=$baglanti->prepare("DELETE from  blog where blog_id=:blog_id ");

	$blogsil->execute(array(
		'blog_id'=>$_POST['id']


	));

	if ($blogsil) {

		$resimsil=$_POST['resim'];
		unlink("../resimler/blog/$resimsil");
		Header("Location:../blog?yuklenme=basarili");
	}
	else{
		Header("Location:../blog?yuklenme=hata");
	}
}



//Mesaj // İletişim
if(isset($_POST['mesajgonder'])){
    $mesajim=$baglanti->prepare("INSERT INTO mesajlar SET isim=:isim,mail=:mail,konu=:konu,mesaj=:mesaj");
    $insert=$mesajim->execute(array('isim'=> $_POST['isim'],
        'mail'=> $_POST['mail'],
        'konu'=> $_POST['konu'],
        'mesaj'=> $_POST['mesaj']
 
));
    if ($insert) {
        header("Location: ../../index?mesaj=ok");
    }

}

// Mesaj Silme İşlemi
		extract($_GET);
		if(isset($mesajsil_id)){

			$query = $baglanti->prepare("DELETE FROM mesajlar WHERE mesaj_id=?");
		$delete = $query->execute (array($mesajsil_id));

		if ($delete) {
			header("Location: ../mesajlar?yuklenme=yes");
			}else{
			header("Location:  ../mesajlar?yuklenme=no");
					}
		
		}

		// Giriş İşlemi
if (isset($_POST["giris"])) {

  $admin_kadi = htmlspecialchars(trim($_POST["admin_kadi"]));
  $admin_sifre = htmlspecialchars(trim(md5($_POST["admin_sifre"])));

  if (!$admin_kadi || !$admin_sifre) {
    header("Location: ../login.php?giris=bos");
  

}else{
  $query = $baglanti->prepare("SELECT * FROM admin WHERE admin_kadi=? AND admin_sifre=?");
  $query->execute(array($admin_kadi,$admin_sifre));
  $admin_giris = $query->fetch(PDO::FETCH_ASSOC);


  if ($admin_giris) {

    $_SESSION["login"] = true;
    $_SESSION["admin_kadi"] = $admin_giris["admin_kadi"];
    $_SESSION["admin_id"] = $admin_giris["admin_id"];

    header("Location: ../index.php");
  }else{
    header("Location: ../login.php?giris=no");
  }
}
}

// Admin Güncelle Düzenleme
	extract($_POST);
	if (isset($kadi_degistir)) {
		$admin_id = $_GET["admin_id"];
		if ($admin_kadi) {
			$adminguncelle = $baglanti->prepare("UPDATE admin SET admin_kadi=? WHERE admin_id=?");
			$adminupdate = $adminguncelle->execute(array($admin_kadi,$admin_id));

			if ($adminupdate) {
				header("Location: ../adminayar?admin-guncelle=yes");
			}else{
				header("Location: ../adminayar?admin-guncelle=no");
			}
			}else{
				header("Location: ../adminayar?admin-guncelle=bos");
			}
			}
 
// Admin Şifre Düzenleme
			if (isset($_POST["sifre_degistir"])) {


				$id = $_GET["admin_id"];


				$eski_sifre = md5($_POST["eski_sifre"]);
				$yeni_sifre = md5($_POST["yeni_sifre"]);


			$kullanicisor = $baglanti->prepare("SELECT * FROM admin WHERE admin_sifre=:admin_sifre");
			$kullanicisor->execute(array('admin_sifre' => $eski_sifre));

			// dönen satır sayısını belirtir
			$say=$kullanicisor->rowcount();
			if ($say==0) {
				header("Location: adminayar.php?adminsifre-guncelle=eskisifrehata");
			}else{
				$adminguncelle = $baglanti->prepare("UPDATE admin SET admin_sifre=? WHERE admin_id=?");
				$adminupdate = $adminguncelle->execute(array($yeni_sifre,$id));

				if ($adminupdate) {
				header("Location: ../adminayar.php?adminsifre-guncelle=yes");
			}else{
				header("Location: ../adminayar.php?adminsifre-guncelle=no");
	}
		}

	}
