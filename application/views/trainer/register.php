<main>
		<div id="hero_register">
			<div class="container margin_120_95">
				<div class="row">
					<div class="col-lg-6">
						<h1>Özel Ders Ver</h1>
						<p class="lead">Platform üzerinden özel ders satışı yapabilir ve randevu verebilirsin.</p>
						<div class="box_feat_2">
							<i class="fa fa-map-marker"></i>
							<h3>Konumuna Yakın Öğrencileri Bul</h3>
							<p>Bulunduğun konuma yakın olan ve özel ders almak isteyen öğrencileri kolayca listele.</p>
						</div>
						<div class="box_feat_2">
							<i class="fa fa-credit-card"></i>
							<h3>Kredi Kartıyla Satış</h3>
							<p>Öğrenciler, verdiğin özel dersi anında kredi kartı ile satın alabilirler. Her satışından puan kazanarak üst seviyelere çıkıp daha çok öğrencinin seni bulmasını sağlayabilirsin.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-date"></i>
							<h3>Randevu Ver</h3>
							<p>Özel dersini satın alan öğrenci ile biozelders.com üzerinden irtibata geçerek randevu zamanı belirle.</p>
						</div>
					</div>
					<!-- /col -->
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<?php echo form_open('#') ?>
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" name="firstname" placeholder="Adın" autocomplete="off" spellcheck="false" onblur="this.value = capitalizeFirstLetter(this.value)" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="lastname" placeholder="Soyadın" autocomplete="off" spellcheck="false" onblur="this.value = capitalizeFirstLetter(this.value)" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<select name="main_profession" class="form-control" required>
												<option value="">Ana Uzmanlık Dalı</option>
											</select>
											<small>Kayıt olduktan sonra daha fazla uzmanlık alanı ekleyebilirsin.</small>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" name="region" required>
												<option value="">İl</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control" name="state" disabled>
												<option value="">İlçe</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="phone" placeholder="Telefon Numaran" autocomplete="off" spellcheck="false">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="job" placeholder="Mesleğin" autocomplete="off" spellcheck="false" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="E-Mail Adresin" autocomplete="off" spellcheck="false" required>
										</div>
									</div>
                  <div class="col-md-6">
										<div class="form-group">
                      <select class="form-control" name="gender" required>
												<option value="">Cinsiyetin</option>
                        <option value="female">Kadın</option>
                        <option value="male">Erkek</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Parola" autocomplete="off" spellcheck="false" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="password_confirm" class="form-control" placeholder="Parola (Tekrar)" autocomplete="off" spellcheck="false" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<p class="text-center add_top_30"><button type="submit" class="btn_1">Kayıt Ol</button></p>
								<div class="text-center"><small>Doğrulama işlemleri sırasında kullanılacak olan e-posta, telefon gibi bilgileri doğru girdiğinden emin ol.</small></div>
							</form>
						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	</main>
	<!-- /main -->
