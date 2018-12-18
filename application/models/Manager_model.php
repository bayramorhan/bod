<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {

  public function get_package_coordinates($package_id) {
    $this->db->select('pck_latitude, pck_longtitude');
    $this->db->where('pck_id', $package_id);
    return $this->db->get('tbl_package')->result();
  }

  public function add_booking_history($data) {
    $this->db->insert('tbl_booking_history', $data);
  }

  public function update_booking_status($booking_id, $data) {
    $this->db->where('bkn_id', $booking_id);
    $this->db->update('tbl_booking', $data);
  }

  public function get_booking_list() {
    $this->db->where('bkn_trainer_id', '1');
    $this->db->join('tbl_customer', 'tbl_customer.cst_id = tbl_booking.bkn_customer_id');
    $this->db->join('tbl_booking_status', 'tbl_booking_status.bks_id = tbl_booking.bkn_status');
    $this->db->join('tbl_category', 'tbl_category.ctg_id = tbl_booking.bkn_category_id');
    $this->db->join('tbl_profession', 'tbl_profession.prf_id = tbl_booking.bkn_profession_id');
    $this->db->join('tbl_payment_type', 'tbl_payment_type.pt_id = tbl_booking.bkn_payment_type');
    $this->db->order_by('tbl_booking.bkn_date_created', 'desc');
    return $this->db->get('tbl_booking')->result();
  }

  public function package_alter($package_id, $data) {
    $this->db->where('pck_id', $package_id);
    $this->db->update('tbl_package', $data);
  }

  public function get_package_per($package_id) {
    $this->db->where('pp_package_id', $package_id);
    return $this->db->get('tbl_package_periods')->result();
  }

  public function get_package_env($package_id) {
    $this->db->where('pen_package_id', $package_id);
    return $this->db->get('tbl_package_environment')->result();
  }

  public function remove_per($package_id) {
    $this->db->where('pp_package_id', $package_id);
    $this->db->delete('tbl_package_periods');
  }

  public function remove_env($package_id) {
    $this->db->where('pen_package_id', $package_id);
    $this->db->delete('tbl_package_environment');
  }

  public function remove_tag($tag_id) {
    $this->db->where('pct_id', $tag_id);
    $this->db->delete('tbl_package_tag');
  }

  public function get_package_tags($package_id) {
    $this->db->where('pct_package_id', $package_id);
    return $this->db->get('tbl_package_tag')->result();
  }

  public function get_package_object($package_id) {
    $this->db->join('tbl_category', 'tbl_category.ctg_id = tbl_package.pck_category_id');
    $this->db->join('tbl_profession', 'tbl_profession.prf_id = tbl_package.pck_profession_id');
    $this->db->join('tbl_city', 'tbl_city.cty_id = tbl_package.pck_location_id');
    $this->db->join('tbl_city_state', 'tbl_city_state.stt_id = tbl_package.pck_state_id');
    $this->db->join('tbl_package_status', 'tbl_package_status.id = tbl_package.pck_status');
    $this->db->where('pck_id', $package_id);
    return $this->db->get('tbl_package')->result();
  }

  public function package_tag_add($t, $package_id, $trainer_id) {
    $data = array(
      'pct_package_id' => $package_id,
      'pct_trainer_id' => $trainer_id,
      'pct_name'       => $t
    );
    $this->db->insert('tbl_package_tag', $data);
  }

  public function package_location_add($location, $state, $package_id) {
    $data = array(
      'pll_package_id' => $package_id,
      'pll_location_id' => $location,
      'pll_state_id' => $state
    );
    $this->db->insert('tbl_package_location_list', $data);
  }

  public function package_price_add($name, $hour, $price, $package_id) {
    $data = array(
      'ppl_package_id' => $package_id,
      'ppl_item_name' => $name,
      'ppl_item_price' => $price,
      'ppl_hours_min' => $hour
    );
    $this->db->insert('tbl_package_price_list', $data);
  }

  public function package_period_add($p, $package_id) {
    $data = array(
      'pp_package_id' => $package_id,
      'pp_period_id' => $p
    );
    $this->db->insert('tbl_package_periods', $data);
  }

  public function package_environment_add($e, $package_id) {
    $data = array(
      'pen_package_id' => $package_id,
      'pen_environment_id' => $e
    );
    $this->db->insert('tbl_package_environment', $data);
  }

  public function package_add($package) {
    $this->db->insert('tbl_package', $package);
    return $this->db->insert_id();
  }

  public function get_package_list($trainer_id)
  	{
      $this->db->join('tbl_category', 'tbl_category.ctg_id = tbl_package.pck_category_id');
      $this->db->join('tbl_profession', 'tbl_profession.prf_id = tbl_package.pck_profession_id');
      $this->db->join('tbl_city', 'tbl_city.cty_id = tbl_package.pck_location_id','left');
      $this->db->join('tbl_city_state', 'tbl_city_state.stt_id = tbl_package.pck_state_id', 'left');
      $this->db->join('tbl_package_status', 'tbl_package_status.id = tbl_package.pck_status');
      $this->db->where('pck_trainer_id', $trainer_id);
      return $this->db->get('tbl_package')->result();
  	}


}
