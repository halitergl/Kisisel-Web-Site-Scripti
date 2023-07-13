<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">Hakkımda</span>
										<h2 class="colorlib-heading"><?php echo $hakkimdacek['hakkimda_baslik'] ?></h2>
										<p><strong><?php echo $hakkimdacek['hakkimda_yazi'] ?></strong> </p>
									</div>
								</div>
							</div>
							<div class="row">
								                <?php
$basarilar =$baglanti->prepare("SELECT * FROM basarilar ORDER BY basari_id DESC");
$basarilar->execute();
$basarilarcek =$basarilar->fetchAll(PDO::FETCH_ASSOC);
foreach ($basarilarcek as $row) {
   

?>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-<?php echo $row['kutu_renk'] ?>">
										<i class="<?php echo $row['kutu_icon'] ?>"></i>
										<h3><?php echo $row['kutu'] ?></h3>
									</div>
								</div>
								<?php
}

?>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>