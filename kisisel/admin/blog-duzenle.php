<?php include 'header.php';

require_once 'sidebar.php';


 

$blog=$baglanti->prepare("SELECT * FROM  blog where blog_id=:blog_id");
$blog->execute(array(

'blog_id'=>$_GET['id']
));
$blogcek=$blog->fetch(PDO::FETCH_ASSOC);








?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">





        <div class="card card-primary col-md-12">
          <div class="card-header">
            <h3 class="card-title">sliderler </h3>         </div> <?php 

            if (@$_GET['yuklenme']=="basarili") { ?>
              <h6 style="color:green">(Yükleme işlemi başarılı)</h6>
            <?php }

            elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
              <h6 style="color:red">(Yükleme işlemi başarısız)</h6>


              <?php }   ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

  <div class="form-group">
                    <label for="exampleInputEmail1">Blog resim</label>
                    <input  name="resim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog başlık</label>
                    <input value="<?php echo $blogcek['baslik'] ?>"  name="baslik" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adını giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Yazı</label>
                    <input  value="<?php echo $blogcek['yazi'] ?>"  name="yazi" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Kim Yazdı</label>
                    <input value="<?php echo $blogcek['kim'] ?>"  name="kim" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
             
             
               
               

<input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
<input type="hidden" name="eskiresim" value="<?php echo $blogcek['resim'] ?>">
  
                 

                    </select>
                  </div>
                  <div class="card-footer">
                    <button name="blogduzenle" type="submit" class="btn btn-primary">Gönder</button>
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