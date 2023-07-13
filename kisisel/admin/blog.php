<?php include 'header.php';

require_once 'sidebar.php'; ?>

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
       

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">slider tablosu</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->   
              <div class="card-body table-responsive p-0">

                <table class="table table-hover text-nowrap">
                  <a href="blog-ekle"><button style="float:right" type="submit" class="btn btn-success">Yeni Blog ekle</button></a>
                  <thead>
                    <tr>
                      <th>slider resim</th>
                      <th>slider başlık</th>
                      <th>slider açıklama</th>
                      <th>slider Buton Link</th>
                      <th>Düzenle</th>
                      <th>Sil</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $blog=$baglanti->prepare("SELECT * FROM  blog  order by blog_id ASC");
                    $blog->execute();
                    while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <td><img style="width:370px" src="resimler/blog/<?php echo $blogcek['resim'] ?>"></td>
                        <td><?php echo $blogcek['baslik'] ?></td>
                        <td><?php echo $blogcek['kim'] ?></td>
                        <td><?php echo $blogcek['yazi'] ?></td>
                      <td>
                    
                        

                        <a href="blog-duzenle?id=<?php echo $blogcek['blog_id'] ?>"><button type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <form action="islem/islem.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                           <input type="hidden" name="resim" value="<?php echo $blogcek['resim'] ?>">
                        <td><button name="blogsil" type="submit" class="btn btn-danger">Sil</button></td>

                      </form>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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