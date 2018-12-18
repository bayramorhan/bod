<aside class="col-xl-4 col-lg-4" id="sidebar">
  <div class="box_general_3 booking">
      <div class="title">
      <h3>Randevu Al</h3>
      <small>Eğitmene bir randevu talebi iletin.</small>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <div class="alert alert-info">
              Randevu oluşturabilmek için giriş yapmalısınız.
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <div class="form-group">
            <button type="button" class="btn_1" onclick="window.location = '<?php echo base_url('customer/login') ?>'">Giriş Yap</button>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <div class="form-group">
            <small>Hesabınız mı yok? <a href="<?php echo base_url('customer/register') ?>">Kayıt Olun</a></small>
          </div>
        </div>
      </div>
      <!-- /row -->
  </div>
  <!-- /box_general -->
</aside>
