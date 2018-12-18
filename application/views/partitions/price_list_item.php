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
      <button class="btn btn-danger" data-toggle="tooltip" title="Seçenek Sil" type="button" onclick="$(this).closest('.price-list-item').fadeOut(300);"><i class="fa fa-minus"></i></button>
    </div>
  </div>
</div>
