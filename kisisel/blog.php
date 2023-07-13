
			<section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Oku</span>
							<h2 class="colorlib-heading">Bloglar</h2>
						</div>
					</div>
					<div class="row">
																													                <?php

                    $blog=$baglanti->prepare("SELECT * FROM  blog  order by blog_id ASC");
                    $blog->execute();
                    while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) { ?>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="bloglar?id=<?php echo $blogcek ["blog_id"]; ?>" class="blog-img"><img src="admin/resimler/blog/<?php echo $blogcek ["resim"]; ?>" class="img-responsive"></a>
								<div class="desc">
									<span><small><?php echo $blogcek['tarih'] ?> </small> | <small> <?php echo $blogcek['kim'] ?> </small></span>
									<h3><a href="bloglar.php?id=<?php echo $blogcek ["blog_id"]; ?>"><?php echo $blogcek['baslik'] ?></h3></a>
									<p><?php echo $blogcek['yazi'] ?></p>
								</div>
							</div>
						</div>
							<?php
}

?>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Bloglar <i class="icon-reload"></i></a></p>
						</div>
				</div>
			</section>
