<?php include 'header.php';

require_once 'sidebar.php';?>

<?php 
$neyaparim_id = $_GET["neyaparim_id"];
$neyaparim =$baglanti->prepare("SELECT * FROM neyaparim WHERE neyaparim_id=? ");
$neyaparim->execute(array($neyaparim_id));
$neyaparim_cek =$neyaparim->fetch(PDO::FETCH_ASSOC);
   
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
              <form action="islem/islem.php?neyaparim_id=<?php echo $neyaparim_cek ["neyaparim_id"]; ?>" method="POST">
                <div class="card-body">
                        <div class="form-group">     
                 
                       <div class="form-group">
                    <label for="exampleInputPassword1"> Başlık </label>
                    <input value="<?php echo $neyaparim_cek["neyaparim_baslik"]; ?>" name="neyaparim_baslik" type="text" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1"> Ne Yaparım Yazı </label>
                    <input value="<?php echo $neyaparim_cek["neyaparim_yazi"]; ?>" name="neyaparim_yazi" type="text" class="form-control">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1"> Ne Yaparım Renk </label>
                    <input value="<?php echo $neyaparim_cek["neyaparim_renk"]; ?>" name="neyaparim_renk" type="text" class="form-control">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1"> Ne Yaparım İcon </label>
                    <input value="<?php echo $neyaparim_cek["neyaparim_icon"]; ?>" name="neyaparim_icon" type="text" class="form-control">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="yaptiklarimduzenle" type="submit" class="btn btn-primary">Gönder</button>
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