<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Eğitmen Paneli</a>
      </li>
      <li class="breadcrumb-item active">İlanı Düzenle</li>
    </ol>
    <div class="alert alert-info"><i class="fa fa-info-circle"></i> Yapacağınız değişiklikler, ilanınızın listelerdeki sıralamasını olumsuz etkileyebilir. Bu yüzden çok gerekli olmadığı sürece ilanlarınızda değişiklik yapmayınız. Farklı özelliklere sahip birden fazla ilan ekleyebileceğinizi unutmayın.</div>
    <?php echo form_open('#', 'id="edit-package"') ?>
    <input type="hidden" name="package_id" value="<?php echo $package_id ?>" />
    <div class="row">
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-tag"></i>Tanımlamalar</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>İlan Başlığı</label>
                <input type="text" name="package_name" step="any" class="form-control" placeholder="Vereceğiniz özel ders hakkında kısa bir başlık girin." spellcheck="false" autocomplete="off" required>
                <small>İyi seçilmiş bir başlık, satışlarınızı arttırmanıza yardımcı olur.</small>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="package_category" required>
                  <option value="">Özel Ders Kategorisi Seçin</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Alan</label>
                <select class="form-control" name="package_profession" disabled>
                  <option value="">Önce Ders Kategorisi Seçin</option>
                </select>
                <small>Uygun alan bulamadıysanız <a href="#">destek</a> bölümünden iletişime geçiniz.</small>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>


        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-file-text"></i>Açıklama</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea rows="5" class="form-control" name="package_description" style="height:100px;" placeholder="Vereceğiniz özel ders hakkında detaylı bir açıklama girin." required></textarea>
                <small><strong>İpucu:</strong> Ders açıklamasını detaylı ve anlaşılır bir şekilde girmeniz önemlidir. Öğrencinin dersi satın alma olasılığını yükseltebilir.</small>
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Etiketler <a href="#0" data-toggle="tooltip" data-placement="top" title="Virgülle Ayrılmış"><i class="fa fa-fw fa-question-circle"></i></a></label>
                <input type="text" class="form-control" name="package_tags" autocomplete="off" spellcheck="false">
                <div class="tag-list">

                </div>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-clock-o"></i>Ders Verebileceğiniz Zamanlar</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <ul class="list-group periods">
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>Konum Bilgileri</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>İl</label>
                <select class="form-control" name="package_location" required>
                  <option value="">İl Seçiniz</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>İlçe</label>
                <select class="form-control" name="package_state" disabled>
                  <option value="">Önce İl Seçin</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <div id="map" style="width:100%;height:300px"></div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <small>Konum bilgisi sayesinde öğrenciler yakınlarındaki dersleri daha rahat bulabilir. Burada belirteceğiniz semt veya bu semte yakın olan öğrenciler, konuma göre arama yaparken sizi üst sırada görebilir. Özel dersin verileceği
                  konum, mevcut konumuz ile aynı ise bu alanı olduğu gibi bırakabilirsiniz.</small>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>

      <div class="col-md-6">

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-try"></i>Fiyatlandırma</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Minimum Ders Saati</label>
                <input type="number" class="form-control" name="package_min_hours" min="1" max="12" placeholder="0" spellcheck="false" autocomplete="off" required>
                <small>Vereceğiniz eğitimin verimli olabilmesi için alınması gereken minimum ders saati.</small>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Maksimum Ders Saati</label>
                <input type="number" class="form-control" name="package_max_hours" min="1" max="48" spellcheck="false" autocomplete="off" placeholder="0" required>
                <small>Öğrencinin tek seferde alabileceği maksimum ders saati.</small>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Saat Başına Ücret (<i class="fa fa-try"></i>)</label>
                <input type="number" step="any" class="form-control" name="package_price" spellcheck="false" autocomplete="off" placeholder="Her saat için ödenmesi gereken miktar." required>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-tag"></i>Ders Ortamları</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <ul class="list-group environments-first">
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <ul class="list-group environments-last">
                </ul>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-tag"></i>Kapak Görseli</h2>
          </div>
          <div class="row">
            <div class="col-md-12 uploaded-cover text-center" style="display:none"></div>

            <div class="col-md-12">
              <div class="form-group">
                <select class="form-control" name="cover-toggle" required>
                  <option value="profile">Profil Fotoğrafı</option>
                  <option value="custom">Farklı Görsel Yükle</option>
                </select>
              </div>
              <div class="form-group cancel-upload" style="display:none">
                <button class="btn btn-info btn-sm" type="button" onclick="cancelUpload()">Vazgeç</button>
              </div>
            </div>

          <div class="custom-cover-upload" style="display:none">
            <div class="col-md-12 uploader">
              <div class="form-group">
                <input type="file" class="form-control" name="custom-image" accept="image/*">
                <input type="hidden" name="img-source">
                <input type="hidden" name="current-source">
                <small>Yüklemek istediğiniz görseli seçiniz.</small>
              </div>
            </div>
          </div>

          </div>
          <!-- /row-->
        </div>

      </div>

      <!-- /row-->
    </div>
    <!-- /box_general-->


    <p>
      <button type="submit" class="btn btn-info btn-sm" style="cursor:pointer">Kaydet ve Onaya Gönder</button>
    </p>
    <input type="hidden" name="user_latitude" id="user_latitude" value="<?php echo $package_lat ?>"/>
    <input type="hidden" name="user_longtitude" id="user_longtitude" value="<?php echo $package_lng ?>"/>
  </form>
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->

<!--begin::Modal-->
<div class="modal" id="m_modal_1" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Görseli Kırp</h5>
      </div>
      <div class="modal-body">
        <div id="crop_image"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-crop-cancel" data-dismiss="modal">İptal</button>
        <button type="button" class="btn btn-primary btn-crop">Kırp ve Kaydet</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal" id="modal-alert" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-alert-title"></h5>
      </div>
      <div class="modal-body">
        <div id="modal-alert-content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.location = '/manager/packages'" style="cursor:pointer">Tamam</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal" id="modal-progress" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" style="width:360px">
        <div id="modal-progress-content">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->
