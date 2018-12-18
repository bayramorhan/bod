<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
					<li><a href="<?php echo base_url('package/category/'.$package[0]->ctg_id) ?>"><?php echo $package[0]->ctg_name ?></a></li>
					<li><?php echo $package[0]->pck_name ?></li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">Genel Bilgiler</a></li>
								<li><a href="#section_2">Yorumlar</a></li>
								<li><a href="#sidebar">Randevu</a></li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-lg-5 col-md-4">
										<figure>
											<img src="<?php echo $package[0]->pck_cover == 'custom' ? base_url('assets/img/cover/'.$package[0]->pck_picture) : base_url('assets/img/trainer/'.$package[0]->pck_picture) ?>" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-lg-7 col-md-8">
										<small><?php echo $package[0]->trn_firstname.' '.$package[0]->trn_lastname.' | <span style="font-weight:normal">'.$package[0]->trn_job.'</span>' ?></small>
										<h1><?php echo $package[0]->pck_name ?></h1>
										<span class="rating">
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star"></i>
											<small>(<?php echo $package[0]->pck_review ?>)</small>
											<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
										</span>
										<ul class="statistic">
											<li><?php echo $package[0]->pck_displayed ?> Görüntülenme</li>
											<li>124 Patients</li>
										</ul>
										<ul class="contacts">
                      <li><a href="<?php echo base_url('trainer/'.$package[0]->trn_id) ?>"><small><i class="fa fa-user"></i> Eğitmen Profilini Görüntüle</small></a></li>
										</ul>
									</div>
								</div>
							</div>

							<hr>

              <div class="indent_title_in">
								<i class="pe-7s-note2"></i>
								<h3>İlan Açıklaması</h3>
							</div>
							<div class="wrapper_indent">
								<p><?php echo $package[0]->pck_description ?></p>
								<!-- /row-->
							</div>

              <hr>
              <div class="indent_title_in">
								<i class="pe-7s-map-2"></i>
								<h3>Ders Verdiği İlçeler</h3>
							</div>
							<div class="wrapper_indent">
                <?php echo implode(", ", $locations) ?>
								<!-- /row-->
							</div>

              <hr>
              <div class="indent_title_in">
								<i class="pe-7s-timer"></i>
								<h3>Ders Verdiği Zamanlar</h3>
							</div>
							<div class="wrapper_indent">
                <?php echo implode(", ", $periods) ?>
								<!-- /row-->
							</div>

              <hr>
              <div class="indent_title_in">
								<i class="pe-7s-home"></i>
								<h3>Tercih Edilen Ders Ortamları</h3>
							</div>
							<div class="wrapper_indent">
                <?php echo implode(", ", $environments) ?>
								<!-- /row-->
							</div>

              <hr>

							<div class="indent_title_in">
								<i class="pe-7s-cash"></i>
								<h3>Fiyatlandırma</h3>
							</div>
							<div class="wrapper_indent">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Konu</th>
											<th>Alt Limit</th>
                      <th>Saatlik Ücret</th>
										</tr>
									</thead>
									<tbody>
                    <?php foreach($prices AS $price) { ?>
										<tr>
											<td><?php echo $price->ppl_item_name ?></td>
											<td><?php echo $price->ppl_hours_min ?> saat</td>
                      <td><?php echo $price->ppl_item_price ?> TL</td>
										</tr>
                  <?php } ?>
									</tbody>
								</table>
                <small><strong>Alt Limit :</strong> Dersi anlamanız açısından önemli ve gerekli olan minimum süredir ve doğrudan eğitimi verecek kişiler tarafından belirlenenir.</small>
							</div>

						</div>
						<!-- /section_1 -->
					</div>
					<!-- /box_general -->

					<div id="section_2">
						<div class="box_general_3">
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>4.7</strong>
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<small>4 Kişi Puan Verdi</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 puan</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 puan</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 puan</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 puan</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 puan</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->

								<hr>

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Ahsan – April 01, 2016
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Sara – March 31, 2016
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- End review-box -->
							</div>
							<!-- End review-container -->
						</div>
					</div>
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				<?php $this->session->user_id ? $this->load->view('partitions/sidebar_appointment') : $this->load->view('partitions/sidebar_appointment_login') ?>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
