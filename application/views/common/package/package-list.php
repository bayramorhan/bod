<main>
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Showing 10</strong> of 140 results</h4>
					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
							<input type="submit" value="Search">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->
		<input type="hidden" id="package_filter" value="default" />
		<input type="hidden" id="distinct" value="<?php echo $this->session->active_distinct ?>" />
		<input type="hidden" id="region" value="<?php echo $this->session->active_region ?>" />
		<div class="filters_listing">
			<div class="container">
				<ul class="clearfix">
					<li>
						<h6>Filtre</h6>
						<div class="switch-field">
							<input type="radio" id="all" name="type_patient" value="all" <?php echo $this->session->package_filter_category ? '' : 'checked' ?>>
							<label for="all" onclick="window.location = '<?php echo base_url('package/package_filter_category_set/0') ?>'">TÜM DERSLER</label>
							<input type="radio" id="doctors" name="type_patient" value="doctors" <?php echo $this->session->package_filter_category ? 'checked' : '' ?>>
							<label onclick="window.location = '<?php echo base_url('categories') ?>'" for="doctors"><?php echo $this->session->package_filter_category ? $this->session->package_filter_category_name : 'KATEGORİ SEÇ' ?></label>
						</div>
					</li>
					<li>
						<h6>Görünüm</h6>
						<div class="layout_view">
							<a href="javascript:void(0)" onclick="layoutDefault();"><i class="icon-map-1"></i></a>
							<a href="javascript:void(0)" onclick="layoutTable();"><i class="icon-th"></i></a>
						</div>
					</li>
					<li>
						<h6>Sıralama</h6>
						<select name="orderby" class="selectbox">
						<option value="">AKILLI SIRALAMA</option>
						<option value="closest" <?php echo $this->session->package_ordering == 'closest' ? 'selected' : '' ?>>KONUMUMA YAKIN</option>
						<option value="bestrated" <?php echo $this->session->package_ordering == 'bestrated' ? 'selected' : '' ?>>EN YÜKSEK PUAN</option>
						</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-12 text-center card pending-geolocation">
					<div class="card-body">
						<div class="card-title">
							<i class="fa fa-map-marker fa-lg fa-4x"></i>
						</div>
						<p>Size en yakın özel dersleri haritada görüntüleyebilmek için konum hizmetine izin vermeniz gerekmektedir.</p>
					</div>
				</div>
				<div class="col-lg-8 package-list">

					<div class="list-packages">

					</div>

					<nav aria-label="" class="add_top_20 text-center area-load-more">

						<!-- <ul class="pagination pagination-sm"> -->
							<!-- <li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Önceki</a>
							</li> -->
							<!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li> -->
							<!-- <li class="page-item">
								<a class="page-link" href="#">Sonraki</a>
							</li> -->
						<!-- </ul> -->
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->

				<aside class="col-lg-4" id="sidebar">
					<div id="map_listing" class="normal_list" style="display:none">
					</div>
				</aside>
				<!-- /aside -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
