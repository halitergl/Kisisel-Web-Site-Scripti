	<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">İletişime Geç</span>
							<h2 class="colorlib-heading">İletişim</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div>
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100905.57801743894!2d29.011606062905784!3d37.78302469609061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73fb1353a6a69%3A0x2e3363fee62068ae!2zRGVuaXpsaSwgS3Vta8Sxc8SxaywgRGVuaXpsaQ!5e0!3m2!1str!2str!4v1671534973033!5m2!1str!2str" width="780" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
										<br>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href=""><?php echo $ayarcek['mail'] ?></a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p><?php echo $ayarcek['adres'] ?></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a></p>
								</div>
							</div>
						</div>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="admin/islem/islem.php" method="POST">
										<div class="form-group">
											<input type="text" name="isim" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
											<input type="text" name="mail" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" name="konu" class="form-control" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea name="mesaj" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" name="mesajgonder" class="btn btn-primary btn-send-message" value="Send Message">
										</div>

										
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
