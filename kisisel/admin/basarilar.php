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
              <h3 class="card-title">Kategori tablosu</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
            

                  <div class="input-group-append">
             
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->   
            <div class="card-body table-responsive p-0">

              <table class="table table-hover text-nowrap">
                <a href="basari-ekle"><button style="float:right" type="submit" class="btn btn-success">Yeni Başarı ekle</button></a>
                <thead>
                  <tr>
                    <th>Kategori numara</th>
                    <th>Kategori adı</th>
                   <th>Düzenle</th>
                    <th>Sil</th>
            
                  </tr>
                </thead>
                <tbody>
                                                     <?php 
$basarilar =$baglanti->prepare("SELECT * FROM basarilar ORDER BY basari_id DESC ");
$basarilar->execute();
$basarilarcek =$basarilar->fetchAll(PDO::FETCH_ASSOC);
$say = $basarilar->rowcount();
if ($say) {
foreach ($basarilarcek as $row) {
    ?>
                    <tr>
                      <td><?php echo $row['basari_id'] ?></td>
                      <td><?php echo $row['kutu'] ?></td>

                      </span></td>
                    
                      <td><a href="basari-duzenle.php?basari_id=<?php echo $row ["basari_id"]; ?>"><button type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <td><a href="islem/islem.php?basarisil_id=<?php echo $row['basari_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button></a></td>
                    </tr>
                  <?php } ?>
                   <?php
                                 }
                                      ?>
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