<?php include 'header.php';

require_once 'sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">



         <?php
        if (@$_GET["yuklenme"]=="basarili") {
        ?>
          <div class="alert alert-success">
              <strong>Tebrikler! </strong>Başarıyla İşleminiz Gerçekleşti...
          </div>

          <?php
      }else  if (@$_GET["yuklenme"]=="basarisiz") {
        
        ?>
        <div class="alert alert-danger">
              <strong>Hata! </strong> İşleminiz Gerçekleştirilirken Bir Hata Oluştu...
          </div>
                       <?php
                    }
                      ?>
             <!-- END GERİ DÖNÜŞ UYARILARI -->


             
      <div class="container-fluid">
       
        <div class="row">
    



 
<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Genel ayarlar </h3>      

                   </div> 
             
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site başlığı</label>
                    <input value="<?php echo $ayarcek['baslik'] ?>" name="Baslik" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama</label>
                    <input value="<?php echo $ayarcek['aciklama'] ?>" name="aciklama" type="text" class="form-control"  placeholder="Lütfen sitenizin açıklamasını giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar kelime</label>
                    <input value="<?php echo $ayarcek['anahtarkelime'] ?>" name="anahtarkelime" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Alt Başlığı Giriniz<p style="color: red">*<small>Lütfen Değiştirmeyiniz</small></p></label>
                    <input value="<?php echo $ayarcek['footer'] ?>" name="footer" type="text" class="form-control"  placeholder="Lütfen sitenizin Alt Başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alt Başlık Linkini Giriniz<p style="color: red">*<small>Lütfen Değiştirmeyiniz</small></p></label>
                    <input value="<?php echo $ayarcek['footerlink'] ?>" name="footerlink" type="text" class="form-control"  placeholder="Lütfen sitenizin Alt Linkini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adres</label>
                    <input value="<?php echo $ayarcek['adres'] ?>" name="adres" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Mail</label>
                    <input value="<?php echo $ayarcek['mail'] ?>" name="mail" type="text" class="form-control"  placeholder="Lütfen sitenizin Alt Başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefon</label>
                    <input value="<?php echo $ayarcek['telefon'] ?>" name="telefon" type="text" class="form-control"  placeholder="Lütfen sitenizin Alt Linkini giriniz.">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>






 
<div class="card card-primary col-md-12">
            
     
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              <input type="hidden" name="eskilogo" value="<?php echo $ayarcek['logo'] ?>">
                       <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <img style="width:250px" src="resimler/logo/<?php echo $ayarcek['logo'] ?>">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <input  name="logo" type="file" class="form-control"  >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="logokaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>







          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'; ?>