<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="//biozelders.com" title="Findoctor">BiÖzelDers</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<div class="main-menu">
						<ul>
							<li><a href="//biozelders.com">Anasayfa</a></li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Özel Dersler<i class="icon-down-open-mini"></i></a>
								<ul class="top-menu-category-list">
								</ul>
							</li>
              <li class="submenu">
								<a href="#0" class="show-submenu">
                  <i class="fa fa-bell fa-lg"></i>
                  <div class="badge badge-danger" style="position: absolute; top: -6px; right: -4px;">1</div>
                </a>
								<ul>
									<li><a href="//biozelders.com/customer/login">Kullanıcı Girişi</a></li>
									<li><a href="//biozelders.com/trainer/login">Eğitmen Girişi</a></li>
								</ul>
							</li>
              <li class="submenu">
								<a href="#0" class="show-submenu">
                  <img src="<?php echo base_url('assets/img/customer/'.$this->session->avatar) ?>" alt="" style="width: 30px;border-radius: 50%;">
                  <?php echo $this->session->user_firstname.' '.$this->session->user_lastname ?>
                </a>
								<ul>
									<li><a href="//biozelders.com/customer/register">Profil</a></li>
									<li><a href="//biozelders.com/trainer/register">Ayarlar</a></li>
                  <li><a href="//biozelders.com/login/logout">Güvenli Çıkış</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
