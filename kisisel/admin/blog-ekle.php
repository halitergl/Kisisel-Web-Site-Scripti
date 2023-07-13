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
             <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

                     <div class="form-group">
                    <label for="exampleInputEmail1">Blog resim</label>
                    <input  name="blogresim" type="file" class="form-control"  >
                  </div> 
                 
                       <div class="form-group">
                    <label for="exampleInputPassword1"> İsim Soyisim:</label>
                    <input name="kim" type="text" class="form-control"  placeholder="Lütfen misyon giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1"> Başlık </label>
                    <input name="baslik" type="text" class="form-control"  placeholder="Lütfen vizyon giriniz.">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1"> Yazı </label>
                    <input name="yazi" type="text" class="form-control"  placeholder="Lütfen vizyon giriniz.">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="blogkaydet" type="submit" class="btn btn-primary">Gönder</button>
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