<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Ben Neler Yaparım ?</span>
							<h2 class="colorlib-heading">Yaptıklarım</h2>
						</div>

					</div>

					<div class="row row-pt-md">
																	
																							                <?php
$neyaparim =$baglanti->prepare("SELECT * FROM neyaparim ORDER BY neyaparim_id DESC");
$neyaparim->execute();
$neyaparimcek =$neyaparim->fetchAll(PDO::FETCH_ASSOC);
foreach ($neyaparimcek as $row) {
   

?>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-<?php echo $row['neyaparim_renk'] ?>">
								<span class="icon">
									<i class="<?php echo $row['neyaparim_icon'] ?>"></i>
								</span>
								<div class="desc">
									<h3><?php echo $row['neyaparim_baslik'] ?></h3>
									<p><?php echo $row['neyaparim_yazi'] ?></p>
								</div>

								</div>	

							</div>																<?php
}

?>

					
						
					</div>
				</div>
			</section>