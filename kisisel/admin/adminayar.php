

<!--- Sidebar -->
<?php include "header.php";  ?>


 


 <?php
$admin_id =1;
$admin =$baglanti->prepare("SELECT * FROM admin WHERE  admin_id=?");
$admin->execute(array($admin_id));
$admin_cek =$admin->fetch(PDO::FETCH_ASSOC);

?>

    

<!--- Content -->

    <section class="content">
        <div class="container-fluid">
          <!--GERİ DÖNÜŞ UYARILARI -->
        <?php
        if (@$_GET["admin-guncelle"]=="bos") {
        ?>
          <div class="alert alert-warning">
              <strong>Dikkat! </strong>Lütfen Boş Alan Bırakmayınız...
          </div>

          <?php
        }else if(@$_GET["admin-guncelle"]=="yes") {
        ?>
          <div class="alert alert-success">
              <strong>Tebrikler! </strong>Başarıyla İşleminiz Gerçekleşti...
          </div>
            <?php
      }else  if (@$_GET["admin-guncelle"]=="no") {
        
        ?>
        <div class="alert alert-danger">
              <strong>Başarısız ! </strong> Olmadı
          </div>
           <?php
      }else  if (@$_GET["adminsifre-guncelle"]=="eskisifrehata") {
        
        ?>
        <div class="alert alert-danger">
              <strong>Başarısız ! </strong> Şifre Hata
          </div>
                       <?php
                    
                      ?>
                        <?php
        }else if(@$_GET["adminsifre-guncelle"]=="yes") {
        ?>
          <div class="alert alert-success">
              <strong>Tebrikler! </strong>Başarıyla İşleminiz Gerçekleşti...
          </div>
            <?php
      }else  if (@$_GET["adminsifre-guncelle"]=="no") {
        
        ?>
        <div class="alert alert-danger">
              <strong>Başarısız ! </strong> Olmadı
          </div>
          
             <!-- END GERİ DÖNÜŞ UYARILARI -->
        <?php 
        }
        ?>


            <!-- Kullanıcı Adı -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin Ayarlar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php?admin_id=<?php echo $admin_id; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı Adı Değiştir</label>
                    <input type="text" name="admin_kadi" class="form-control" id="exampleInputPassword1" value="<?php echo $admin_cek ["admin_kadi"]; ?>">
                  </div>
                      <button type="submit" name="kadi_degistir" class="btn btn-primary">Güncelle</button>
                  </div>
                </div>
              </form>
                 <!-- Şifre--->
                  <form action="islem/islem.php?admin_id=<?php echo $admin_id; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Eski Şifre </label>
                    <input type="password" name="eski_sifre" class="form-control" id="exampleInputPassword1">
                  </div>
               </div>
             </div>

             <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Yeni Şifre</label>
                    <input type="password" name="yeni_sifre" class="form-control" id="exampleInputPassword1">
                  </div>
               </div>
             </div>
             </div>
                <div class="card-footer">
                  <button type="submit" name="sifre_degistir" class="btn btn-primary">Güncelle</button>
                </div>
              </form>
            </div></div>
            <?php include "footer.php";