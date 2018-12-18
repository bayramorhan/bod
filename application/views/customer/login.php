<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
					<h1>Kullanıcı Girişi</h1>
					<?php echo form_open('#') ?>
						<div class="box_form clearfix">
							<div class="box_login">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
							</div>
							<div class="box_login last">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="E-Mail Adresi" autocomplete="off" spellcheck="false" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Parola" required>
									<a href="#0" class="forgot"><small>Parolamı Unuttum</small></a>
								</div>
								<div class="form-group">
									<button class="btn_1 btn-login" type="submit">Giriş</button>
								</div>
							</div>
						</div>
					</form>
					<p class="text-center link_bright">Hesabın yok mu? <a href="/customer/register"><strong>Kayıt Ol</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>
	<!-- /main -->
