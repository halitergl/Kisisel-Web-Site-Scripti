<?php include 'header.php';

require_once 'sidebar.php';?>

<?php 
$basari_id = $_GET["basari_id"];
$basarilar =$baglanti->prepare("SELECT * FROM basarilar WHERE basari_id=? ");
$basarilar->execute(array($basari_id));
$basari_cek =$basarilar->fetch(PDO::FETCH_ASSOC);
   
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
              <form action="islem/islem.php?basari_id=<?php echo $basari_cek ["basari_id"]; ?>" method="POST">
                <div class="card-body">
                        <div class="form-group">     
                 
                       <div class="form-group">
                    <label for="exampleInputPassword1"> Kutu</label>
                    <input value="<?php echo $basari_cek["kutu"]; ?>" name="kutu" type="text" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1"> Kutu İcon</label>
                    <input value="<?php echo $basari_cek["kutu_icon"]; ?>" name="kutu_icon" type="text" class="form-control">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Kutu Renk</label>
                    <input value="<?php echo $basari_cek["kutu_renk"]; ?>" name="kutu_renk" type="text" class="form-control">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="basariduzenle" type="submit" class="btn btn-primary">Gönder</button>
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