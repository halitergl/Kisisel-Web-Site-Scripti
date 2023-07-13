    <?php require 'header.php';
include "kontrol.php";

?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Ad</th>
                      <th>Soyad</th>
                      <th>Konu</th>
                      <th>Mesaj</th>
                      <th>Tarih</th>
                    </tr>
                  </thead>
                  <tbody>
                            <?php 
$mesajlar =$baglanti->prepare("SELECT * FROM mesajlar ORDER BY  mesaj_id  DESC");
$mesajlar->execute();
$mesaj_cek =$mesajlar->fetchAll(PDO::FETCH_ASSOC);
$say = $mesajlar->rowcount();
if ($say) {
foreach ($mesaj_cek as $row) {
   if ($row["mesaj_okunma"]==1) {
    # code...
  
    ?>
                    <tr>
                     
                       <th scope="row" ><?php echo $row ["mesaj_id"]; ?></th>
                      <td><?php echo $row ["isim"]; ?></td>
                      <td><?php echo $row ["mail"]; ?></td>
                      <td><span class="tag tag-success"><?php echo $row ["konu"]; ?></span></td>
                      <td><?php echo $row ["mesaj"]; ?></td>
                       <td><?php echo $row ["tarih"]; ?></td>
                       <td><span class="fa fa-eye" style="color: #00FF00;"></span></td>

                      <td><a href="mesaj-oku.php?mesaj_id=<?php echo $row ["mesaj_id"]; ?>"><button class="btn btn-primary">Oku</button></a>
                        <a href="islem/islem.php?mesajsil_id=<?php echo $row ["mesaj_id"]; ?>"><button class="btn btn-danger">Sil</button></a>
                    </tr>
                    <?php
                                  }else{
                                    ?>
                                     <tr>
                                       
                                        <th scope="row" ><?php echo $row ["mesaj_id"]; ?></th> 
                                        <td><?php echo $row ["isim"]; ?></td>
                                         <td><?php echo $row ["mail"]; ?></td>
                                         <td><span class="tag tag-success"><?php echo $row ["konu"]; ?></span></td>
                                           <td><?php echo $row ["mesaj"]; ?></td>
                                           <td><?php echo $row ["tarih"]; ?></td>
                                           <td><span class="fa fa-eye" style="color: #ff0000 ;"></span></td>


                                        <td><a href="mesaj-oku.php?mesaj_id=<?php echo $row ["mesaj_id"]; ?>"><button class="btn btn-primary">Oku</button></a>
                                            <a href="islem/islem.php?mesajsil_id=<?php echo $row ["mesaj_id"]; ?>"><button class="btn btn-danger">Sil</button></a>
                                        
                                    </tr>
                                    <?php

                                  }
                                }
                            }else{
                                    ?>
                                    <td>Şuan Hiç Mesajınız Bulunmamaktadır</td>
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
        </div>
   <?php require 'footer.php';?>