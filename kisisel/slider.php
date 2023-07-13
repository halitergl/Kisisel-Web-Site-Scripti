	<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						 <?php  
                    $slider=$baglanti->prepare("SELECT * FROM  slider  order by slider_id ASC");
                    $slider->execute();
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
				   	<li style="background-image: url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Hi! <br><?php echo $slidercek['slider_baslik'] ?></h1>
						   					<h2><?php echo $slidercek['slider_yazi'] ?> 
												<p><a href="<?php echo $slidercek['slider_link'] ?>" class="btn btn-primary btn-learn"><?php echo $slidercek['slider_yazi'] ?>  <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
			  <?php } ?>
				  	</ul>
			  	</div>
			</section>