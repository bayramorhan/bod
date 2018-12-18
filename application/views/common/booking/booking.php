<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="message">
						<p><?php echo $package[0]->pck_name ?></p>
					</div>
					<div class="form_title">
						<h3><strong>1</strong>Tercihleriniz</h3>
						<p>
							Yapacağınız tercihler, randevu sürecinin hızlı ve doğru ilerlemesine yardımcı olacaktır. Tercihlerinizi, eğitmen ile iletişime geçtikten sonra istediğiniz zaman değiştirebilirsiniz.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Ders Ortamı</label>
									<select class="form-control" name="environment" required>
                    <option value="">Seçiniz</option>
                    <?php
                      foreach($environments AS $environment) {
                        echo '<option value="'.$environment->env_id.'">'.$environment->env_name.'</option>';
                      }
                    ?>
                  </select>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Zaman Aralığı</label>
                  <select class="form-control" name="period" required>
                  <option value="">Seçiniz</option>
                    <?php
                      foreach($periods AS $period) {
                        echo '<option value="'.$period->prd_id.'">'.$period->prd_name.'</option>';
                      }
                    ?>
                  </select>
								</div>
							</div>
						</div>
            <div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>İletişim Tercihiniz</label>
									<input type="text" id="telephone_booking" name="telephone_booking" class="form-control" placeholder="00 44 678 94329">
								</div>
							</div>
              <div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Confirm email</label>
									<input type="email" id="email_booking_2" name="email_booking_2" class="form-control" placeholder="jhon@doe.com">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Notunuz (Opsiyonel)</label>
									<textarea id="email_booking" name="email_booking" class="form-control" placeholder="Randevu öncesi merak ettiklerinizi ya da özel notunuzu yazabilirsiniz." rows="4"></textarea>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Ödeme Bilgileri</h3>
						<p>
							Ödeme tercihinizi yapınız.
						</p>
					</div>
					<div class="step">
            <!-- accordion begin -->
            <div role="tablist" class="add_bottom_45 accordion" id="payment">
              <div class="card">
                <div class="card-header" role="tab">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator icon_minus_alt2"></i><img src="/assets/img/wirecard.png" style="max-width:90px" class="img-fluid img-responsive pay_w_card"></a>
                  </h5>
                </div>

                <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Güvenli Ödeme Yöntemi</label>
											<p><small>Ödemenizi Wirecard™ aracılığıyla online olarak yaptığınızda, memnuniyetinizi garanti altına almış olursunuz. Ders ücretinin eğitmene aktarılması için öncelikle dersi tamamlamanız ve ödeme onayı vermeniz gerekir. Siz onay verene kadar eğitmene ücret aktarımı yapılmaz.</small></p>
											<input type="checkbox" value="1" class="css-checkbox" id="confirm_card_payment" name="payment_type" checked>
											<label for="confirm_card_payment" class="css-label">Kredi Kartı ile Öde</label>
									  </div>
                    <!--End row -->
                  </div>
                </div>
              </div>
              <!-- /card -->
              <div class="card">
                <div class="card-header" role="tab">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
                      <i class="indicator icon_plus_alt2"></i><span class="pay_w_cash">Elden Nakit Öde <small>(Önerilmez)</small></span>
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
                  <div class="card-body">
                    <p class="alert alert-danger">
        							<small>Online ödeme yaptığınızda, ücretin eğitmene aktarılması için önce tarafınızdan onay beklenir. Bu yüzden güvenli bir ödeme yöntemidir. Fakat ödemeyi elden nakit olarak yaparsanız bu imkanlardan faydalanamazsınız ve biozelders.com tarafından da sorumluluk kabul edilmez.</small>
        						</p>
        						<p>
                      <div class="checkbox">
                        <input type="checkbox" value="2" class="css-checkbox" id="confirm_cash_payment" name="payment_type">
                        <label for="confirm_cash_payment" class="css-label">Elden Nakit Öde</label>
                        <small>Elden Nakit Öde seçeneğini işaretleyerek <a href="#" target="_blank">Sorumluluk Reddi Beyanı</a>'nı kabul etmiş sayılırsınız.</small>
                      </div>
        						</p>
                  </div>
                </div>
              </div>
              <!-- /card -->
            </div>
            <!-- accordion end -->
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3</strong>Fatura Adresi</h3>
						<p>
							Faturanız elektronik ortamda oluşturulup E-Mail adresinize gönderilecektir.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>E-Mail</label>
								<div class="form-group">
									<input type="email" class="form-control" name="billing_email" value="<?php echo $this->session->user_email ?>" required>
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<hr>
					<!--End step -->
					<div id="policy">
						<div class="form-group">
              <input type="checkbox" value="confirm_policy" class="css-checkbox" id="confirm_policy" name="confirm_policy">
              <label for="confirm_policy" class="css-label">Mesafeli Satış Sözleşmesini ve Kullanım Koşullarını onaylıyorum.</label>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form>
							<div class="title">
								<h3>Randevu Bilgileri</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Tarih: <strong class="float-right"><?php echo $this->session->date ?></strong></li>
									<li>Saat: <strong class="float-right"><?php echo $this->session->time ?></strong></li>
									<li>Eğitmeniniz: <strong class="float-right">Dr. julia Jhones</strong></li>
								</ul>
							</div>
							<ul class="treatments checkout clearfix">
								<li>
									Back Pain visit <strong class="float-right">$55</strong>
								</li>
								<li>
									Cardiovascular screen <strong class="float-right">$55</strong>
								</li>
								<li class="total">
									Toplam <strong class="float-right">110 TL</strong>
								</li>
							</ul>
							<hr>
							<a href="confirm.html" class="btn_1 full-width btn-confirm">Ödeme Yap</a>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
