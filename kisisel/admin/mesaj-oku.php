
<!--- Sidebar -->
<?php include "header.php" ;

include "kontrol.php"; ?>

<!--- Content -->
<?php
$mesaj_id = $_GET["mesaj_id"];
$mesajlar =$baglanti->prepare("SELECT * FROM mesajlar  WHERE  mesaj_id=?");
$mesajlar->execute(array($mesaj_id));
$mesajcek =$mesajlar->fetch(PDO::FETCH_ASSOC);

$okunma = $baglanti->prepare("UPDATE mesajlar SET mesaj_okunma=? WHERE mesaj_id=?");
$okunma->execute(array(1,$mesaj_id));
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Mesaj Oku</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                              <span style="color: #3F51B5;"> <?php echo $mesajcek ["isim"]; ?></span><small><br>
                                <b style="color: #BBDEFB;"> <?php echo $mesajcek ["mail"]; ?></b></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                  <span style="color: #DCE775;"><?php echo $mesajcek ["tarih"]; ?></span>
  
                                   
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          <p><b>Konu :</b><?php echo $mesajcek ["konu"]; ?></p>
                           <span><b style="color: black;">Mesaj : </b><?php echo $mesajcek ["mesaj"]; ?></span>
                        </div>
                    </div>
                    <a href="mesajlar.php"><button class="btn btn-primary">Mesajlara Dön</button></a>
                </div>
        </div>
    </section>
</div></section>
    <!--- Footer -->
<?php include "footer.php" ?>