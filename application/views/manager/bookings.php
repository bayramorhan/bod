<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Eğitmen Paneli</a>
        </li>
        <li class="breadcrumb-item active">Randevular</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Randevu Listesi</h2>
				<div class="filter">
					<select name="status_filter" class="selectbox">
            <option value="all">Tümü</option>
            <?php
              foreach($status AS $st) {
                echo '<option value="'.$st->bks_id.'">'.$st->bks_name.'</option>';
              }
            ?>
					</select>
				</div>
			</div>
			<div class="list_general">
        <?php echo form_open('#') ?>
        </form>
				<ul>
          <?php foreach($bookings AS $b) { ?>
					<li>
						<figure><img src="<?php echo base_url('assets/img/customer/').$b->cst_picture ?>" alt=""></figure>
						<h4><?php echo $b->cst_firstname.' '.$b->cst_lastname ?> <i class="<?php echo $stclass[$b->bks_id] ?>"><?php echo $b->bks_name ?></i></h4>
						<ul class="booking_details">
							<li><strong>Randevu Tarihi</strong> <?php echo date('d.m.Y', strtotime($b->bkn_date_created)) ?></li>
							<li><strong>Ödeme Şekli</strong> <?php echo $b->pt_name ?></li>
							<li><strong>Ders</strong> <?php echo $b->bkn_package_name ?></li>
							<li><strong>Kategori</strong> <?php echo $b->ctg_name.' / '.$b->prf_name ?></li>
							<li><strong>Randevu Notu</strong> <?php echo $b->bkn_comment != null ? $b->bkn_comment : '-' ?></li>
              <li><small><a href="#" class="btn btn-info btn-xs"><i class="fa fa-envelope"></i> Mesaj Gönder</a> <?php echo $b->bks_id == '8' ? '<a href="#" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Puan Ver</a>' : '' ?></small></li>
						</ul>
            <?php if($b->bks_id == '1') { ?>
						<ul class="buttons">
							<li><a href="javascript:void(0)" onclick="approveBooking(<?php echo $b->bkn_id ?>, <?php echo $b->cst_id ?>)" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Onayla</a></li>
							<li><a href="javascript:void(0)" onclick="denyBooking(<?php echo $b->bkn_id ?>, <?php echo $b->cst_id ?>)" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Reddet</a></li>
						</ul>
          <?php } else if($b->bks_id == '2') { ?>
            <ul class="buttons">
              <li><a href="javascript:void(0)" onclick="cancelBooking(<?php echo $b->bkn_id ?>, <?php echo $b->cst_id ?>)" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> İptal Et</a></li>
            </ul>
          <?php } ?>
					</li>
          <?php } ?>
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Önceki</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Sonraki</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->

    <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Randevu Onayı</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Randevuyu onayladığınızda, kullanıcının özel dersi almak isteyebileceği tarih ve saatlerde uygun olduğunuzu kabul etmiş sayılırsınız. Bu konuda emin değilseniz, öncelikle kullanıcı ile irtibata geçmeniz, randevunun iptal edilme olasılığını düşürecektir.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Daha Sonra</button>
            <a class="btn btn-info btn-approve" href="javascript:void(0)">Onayla</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="denyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Randevuyu Reddet</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" rows="3" placeholder="Kısa bir açıklama girin."></textarea>
            <small>Randevuyu iptal etmeden önce, kullanıcıyla veya destek ekibimizle iletişime geçerek sorunu çözmeyi deneyebilirsiniz. Çok sık randevu reddetmeniz durumunda, genel değerlendirmeniz olumsuz etkilenerek, listelemelerdeki sıralamanız düşebilir ya da hesabınız bloke edilebilir. Bu durumu önleyebilmek adına ilan detaylarını daha açıklayıcı bir şekilde güncelleyebilirsiniz.</small>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Vazgeç</button>
            <a class="btn btn-danger btn-deny" href="javascript:void(0)">Reddet</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Randevuyu İptal Et</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" rows="3" placeholder="Kısa bir açıklama girin."></textarea>
            <small>Randevuyu iptal etmeden önce, kullanıcıyla veya destek ekibimizle iletişime geçerek sorunu çözmeyi deneyebilirsiniz. Tarafınızdan iptal edilen randevuların sayısı arttığında, bu durum listelerdeki sıralamanızı oldukça düşürebilir.</small>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Vazgeç</button>
            <a class="btn btn-danger btn-cancel" href="javascript:void(0)">İptal Et</a>
          </div>
        </div>
      </div>
    </div>
