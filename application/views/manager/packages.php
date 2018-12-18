<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Eğitmen Paneli</a>
        </li>
        <li class="breadcrumb-item active">İlan Yönetimi</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Özel Ders İlanlarım
          <div class="pull-right">
            <button type="button" class="btn btn-info btn-sm" onclick="window.location = '/manager/new_package'" style="cursor:pointer"><i class="fa fa-plus-circle"></i> İlan Oluştur</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>İlan Başlığı</th>
                  <th>Kategori</th>
                  <th>Toplam Kazanç</th>
                  <th>Durumu</th>
                  <th>İşlem</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Onay bekleyen ilanlarınız varsa en kısa sürede kontrol edilerek tarafınıza bilgilendirme yapılacaktır.</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
