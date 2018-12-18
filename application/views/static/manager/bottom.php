<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Çıkış Yapılacak</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Oturumunuzu kapatmaya hazırsanız lütfen aşağıda bulunan "Güvenli Çıkış" butonuna basınız.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Vazgeç</button>
        <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Güvenli Çıkış</a>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/manager/vendor/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/manager/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/manager/vendor/chart.js/Chart.js"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/jquery.selectbox-0.2.js"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/retina-replace.min.js"></script>
<script src="<?php echo base_url() ?>assets/manager/vendor/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/manager/js/admin.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url() ?>assets/manager/js/admin-charts.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url() ?>assets/js/tags.js"></script>
<script src="<?php echo base_url() ?>assets/js/croppie.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url() ?>assets/manager/js/lightbox.min.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url() ?>assets/manager/js/admin-datatables.js"></script>
<script src="<?php echo base_url('assets/js/pages/manager/'.@$jslib.'.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp--FgFjBq01RpvPeK2HylnDDUbY9cgZw&callback=initMap" async defer></script>

</body>
</html>
