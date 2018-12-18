<aside class="col-xl-4 col-lg-4" id="sidebar">
  <div class="box_general_3 booking">
    <?php echo form_open('#', 'id = "booking_form"') ?>
      <div class="title">
      <h3>Randevu Talebi</h3>
      <small>Eğitmene bir randevu talebi iletin.</small>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <input class="form-control" type="text" id="booking_date" name="booking_date" data-lang="tr" data-default-date="<?php echo date('m-d-Y', strtotime("+1 days")) ?>" data-min-year="<?php echo date('Y') ?>" data-max-year="<?php echo date('Y') ?>" data-meridians="false" data-disabled-days="<?php echo implode(",", $days_disabled) ?>">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <input class="form-control" type="text" id="booking_time" name="booking_time" value="9:00">
          </div>
        </div>
        <div class="col-md-12">
          <small>Randevu tarihini, eğitmenle iletişime geçtikten sonra istediğiniz zaman değiştirebilirsiniz.</small>
        </div>
      </div>
      <!-- /row -->
      <ul class="treatments clearfix">
        <?php foreach($prices AS $price) { ?>
        <li>
          <div class="checkbox">
            <input type="checkbox" value="<?php echo $price->ppl_id ?>" class="css-checkbox" id="visit<?php echo $price->ppl_id ?>" name="package_items[]">
            <label for="visit<?php echo $price->ppl_id ?>" class="css-label"><?php echo $price->ppl_item_name ?>
              <select name="package_items_hour[]" class="pull-right form-control" style="width:auto;height:30px;min-height:30px;padding: .100rem .75rem;">
                <?php for($i=$price->ppl_hours_min;$i<=12;$i++) {
                  echo '<option value="'.$i.'">'.$i.' saat</option>';
                } ?>
              </select>
            </label>
          </div>
        </li>
        <?php } ?>
      </ul>
      <hr>
      <button type="submit" class="btn_1 full-width"><i class="fa fa-chevron-right"></i> Sonraki Adım</button><br>
    </form>
  </div>
  <!-- /box_general -->
</aside>
