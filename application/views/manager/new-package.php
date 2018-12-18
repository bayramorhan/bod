<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Eğitmen Paneli</a>
      </li>
      <li class="breadcrumb-item active">Yeni İlan Oluştur</li>
    </ol>
    <?php echo form_open('#', 'id="new-package"') ?>
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
                <input type="text" class="form-control" name="package_tags" placeholder="Örn: sınava hazırlık, gitar dersi, özel yüzme dersi, bilgisayar dersi..." spellcheck="false" autocomplete="off">
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

        <div class="box_general padding_bottom location-list">
          <div class="header_box version_2">
            <h2><i class="fa fa-map"></i>Ders Verebileceğiniz İlçeler</h2>
          </div>
          <div class="row location-list-item">
            <div class="col-md-5">
              <div class="form-group">
                <label>İl</label>
                <select class="form-control" name="package_locations[]" required>
                  <option value="">İl Seçiniz</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>İlçe</label>
                <select class="form-control" name="package_states[]" disabled>
                  <option value="">Önce İl Seçin</option>
                </select>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label>&nbsp;</label>
                <button class="btn btn-info" data-toggle="tooltip" title="Seçenek Ekle" type="button" onclick="duplicateLocation()"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>

      <div class="col-md-6">

        <div class="box_general padding_bottom price-list">
          <div class="header_box version_2">
            <h2><i class="fa fa-try"></i> Fiyatlandırma</h2>
          </div>
          <div class="row price-list-item">
            <div class="col-md-5">
              <div class="form-group">
                <label>Seçenek Adı</label>
                <input type="text" class="form-control" name="price_item_name[]" spellcheck="false" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Minimum Ders Saati</label>
                <input type="number" class="form-control" name="price_item_hour[]" min="1" spellcheck="false" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Saat Başına Ücret (<i class="fa fa-try"></i>)</label>
                <input type="number" step="any" class="form-control" name="price_item_price[]" spellcheck="false" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label>&nbsp;</label>
                <button class="btn btn-info" data-toggle="tooltip" title="Seçenek Ekle" type="button" onclick="duplicatePrice()"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <small>Çoklu fiyat özelliği sayesinde, farklı varyasyonlarda fiyatlandırma yapabilirsiniz.</small><br>
          <small><a href="/assets/img/option_usage_1.jpg" data-lightbox="image-1" data-title="Kullanım Örneği 1">Kullanım Örneği #1</a></small><br>
          <small><a href="/assets/img/option_usage_2.jpg" data-lightbox="image-2" data-title="Kullanım Örneği 2">Kullanım Örneği #2</a></small>
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
            <div class="col-md-12">
              <div class="form-group">
                <select class="form-control" name="cover-toggle" required>
                  <option value="profile">Profil Fotoğrafı</option>
                  <option value="custom">Farklı Görsel Yükle</option>
                </select>
                <small>Özel ders ilanınız, listelerde bu görsel ile yayınlanacak.</small>
              </div>
            </div>

          <div class="custom-cover-upload" style="display:none">
            <div class="col-md-12 uploader">
              <div class="form-group">
                <input type="file" class="form-control" name="custom-image" accept="image/*">
                <input type="hidden" name="img-source" accept="image/*">
                <small>Yüklemek istediğiniz görseli seçiniz.</small>
              </div>
            </div>
          </div>

          </div>
          <!-- /row-->
        </div>

        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>Konumum</h2>
          </div>
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>İl</label>
                  <select class="form-control" name="package_location" required>
                    <option value="">İl Seçiniz</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
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
                <small>Konum bilgisi sayesinde öğrenciler yakınlarındaki dersleri daha rahat bulabilir. Burada seçeceğiniz konuma yakın olan öğrenciler, konuma göre arama yaparken sizi üst sırada görebilir.</small>
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
    <input type="hidden" name="user_latitude" id="user_latitude" value="<?php echo $this->session->user_latitude ?>" />
    <input type="hidden" name="user_longtitude" id="user_longtitude" value="<?php echo $this->session->user_longtitude ?>" />
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

<script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 14
        });
        infoWindow = new google.maps.InfoWindow;



        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            var marker = new google.maps.Marker({position: pos, map: map, draggable: true});

            google.maps.event.addListener(marker, 'dragend', function(event) {
                $('#user_latitude').val(event.latLng.lat());
                $('#user_longtitude').val(event.latLng.lng());
            });

            infoWindow.setPosition(pos);
            infoWindow.setContent('Konumunuz.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          var pos = {
            lat: parseFloat($('#user_latitude').val()),
            lng: parseFloat($('#user_longtitude').val())
          };
          map.setCenter(pos);
          // Browser doesn't support Geolocation
          //handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      }
    </script>
