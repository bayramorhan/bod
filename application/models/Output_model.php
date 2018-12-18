<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Output_model extends CI_Model {

  public function get_package_id_from_ppl($item) {
    $this->db->where('ppl_id', $item);
    return $this->db->get('tbl_package_price_list')->result()[0]->ppl_package_id;
  }

  public function increase_package_display($package) {
    $this->db->where('pck_id', $package);
    $this->db->set('pck_displayed', 'pck_displayed + 1', FALSE);
    $this->db->update('tbl_package');
  }

  public function is_package_displayed($package, $user) {
    $this->db->where('dsp_package_id', $package);
    $this->db->where('dsp_customer_id', $user);
    return count($this->db->get('tbl_package_display')->result()) < 1 ? false : true;
  }

  public function add_package_display($package, $user) {
    if(!$this->is_package_displayed($package, $user) &&  $package != 0) {
      $data = array(
        'dsp_package_id' => $package,
        'dsp_customer_id' => $user
      );
      $this->db->insert('tbl_package_display', $data);

      $this->increase_package_display($package);
    }
  }

  public function get_package_price_list($package_id) {
    $this->db->where('ppl_package_id', $package_id);
    return $this->db->get('tbl_package_price_list')->result();
  }

  public function get_package_environments($package_id) {
    $this->db->where('pen.pen_package_id', $package_id);
    $this->db->join('tbl_environment AS en', 'en.env_id = pen.pen_environment_id');
    return $this->db->get('tbl_package_environment AS pen')->result();
  }

  public function get_package_periods($package_id) {
    $this->db->where('pp.pp_package_id', $package_id);
    $this->db->join('tbl_periods AS pr', 'pr.prd_id = pp.pp_period_id');
    return $this->db->get('tbl_package_periods AS pp')->result();
  }

  public function get_package_locations($package_id) {
    $this->db->where('pll.pll_package_id', $package_id);
    $this->db->join('tbl_city AS cty', 'cty.cty_id = pll.pll_location_id');
    $this->db->join('tbl_city_state AS stt', 'stt.stt_id = pll.pll_state_id');
    return $this->db->get('tbl_package_location_list AS pll')->result();
  }

  public function get_package_detail($package_id) {
    $this->db->select('pc.pck_id, pc.pck_name, trn.trn_firstname,trn.trn_lastname, trn.trn_job, pc.pck_review, cty.cty_name, stt.stt_name, gnd.gnd_name, pc.pck_cover, pc.pck_picture, pc.pck_description, cta.ctg_id, cta.ctg_name, trn.trn_id, pc.pck_displayed');
    $this->db->where('pc.pck_id', $package_id);
    $this->db->join('tbl_trainer AS trn', 'trn.trn_id = pc.pck_trainer_id');
    $this->db->join('tbl_city AS cty', 'cty.cty_id = trn.trn_city_id');
    $this->db->join('tbl_city_state AS stt','stt.stt_id = trn.trn_state_id');
    $this->db->join('tbl_trainer_gender AS gnd', 'gnd.gnd_id = trn.trn_gender');
    $this->db->join('tbl_category AS cta', 'cta.ctg_id = pc.pck_category_id');
    return $this->db->get('tbl_package AS pc')->result();
  }

  public function get_category_name($category_id) {
    $this->db->where('ctg_id', $category_id);
    return $this->db->get('tbl_category')->result();
  }

  public function get_package_list_count($user_state_id) {
    $this->db->where('pc.pck_status', '2');
    if($this->session->active_state) {
      $this->db->where(''.$user_state_id.' IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)',NULL,FALSE);
    }
    if($this->session->package_filter_category) {
      $this->db->where('pc.pck_category_id', $this->session->package_filter_category);
    }
    return count($this->db->get('tbl_package AS pc')->result());
  }

  public function get_package_list($user_state_id, $lat, $long, $page) {
      $ordering = $this->session->package_ordering;
      if($lat != null) {
        $this->db->select('
          pc.pck_id,pc.pck_name,
          pc.pck_category_id,
          pc.pck_profession_id,
          pc.pck_trainer_id,
          pc.pck_location_id,
          pc.pck_state_id,
          pc.pck_latitude,
          pc.pck_longtitude,
          pc.pck_cover,
          pc.pck_picture,
          pc.pck_description,
          sh.cty_id,
          sh.cty_name,
          lc.stt_id,
          lc.stt_name,
          lc.latitude,
          lc.longtitude,
          tra.trn_id,
          tra.trn_firstname,
          tra.trn_lastname,
          tra.trn_job,
          tra.trn_city_id,
          tra.trn_state_id,
          tra.trn_gender,
          tra.trn_picture,
          pc.pck_review,
          cta.ctg_name,
          (6371 * acos (cos ( radians('.$lat.') ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians('.$long.') ) + sin ( radians('.$lat.') ) * sin( radians( pc.pck_latitude ) ) )) AS distance');
      } else {
        $this->db->select('
          pc.pck_id,pc.pck_name,
          pc.pck_category_id,
          pc.pck_profession_id,
          pc.pck_trainer_id,
          pc.pck_location_id,
          pc.pck_state_id,
          pc.pck_latitude,
          pc.pck_longtitude,
          pc.pck_cover,
          pc.pck_picture,
          pc.pck_description,
          sh.cty_id,
          sh.cty_name,
          lc.stt_id,
          lc.stt_name,
          lc.latitude,
          lc.longtitude,
          tra.trn_id,
          tra.trn_firstname,
          tra.trn_lastname,
          tra.trn_job,
          tra.trn_city_id,
          tra.trn_state_id,
          tra.trn_gender,
          tra.trn_picture,
          pc.pck_review,
          cta.ctg_name');
      }
        $this->db->join('tbl_city_state AS lc', 'lc.stt_id = pc.pck_state_id', 'left');
        $this->db->join('tbl_trainer AS tr', 'tr.trn_id = pc.pck_trainer_id', 'left');
        $this->db->join('tbl_profession AS pr', 'pr.prf_id = pc.pck_profession_id', 'left');
        $this->db->join('tbl_city AS sh', 'sh.cty_id = pc.pck_location_id', 'left');
        $this->db->join('tbl_trainer AS tra', 'tra.trn_id = pc.pck_trainer_id', 'left');
        $this->db->join('tbl_category AS cta', 'cta.ctg_id = pc.pck_category_id', 'left');
        $this->db->where('pc.pck_status', '2');
        if($this->session->package_filter_category) {
          $this->db->where('pc.pck_category_id', $this->session->package_filter_category);
        }
        if($this->session->active_state) {
          $this->db->where(''.$user_state_id.' IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)');
        }
        if($ordering != null) {
          if($ordering == 'closest') {
              $this->db->order_by('distance', 'ASC');
          } else if($ordering == 'bestrated') {
            $this->db->order_by('pc.pck_review', 'DESC');
          }
        } else {
          $this->db->order_by('pc.pck_review', 'desc');
          if($lat != null) {
            $this->db->order_by('distance', 'ASC');
          }
        }
        if($page==null) {
      			return $this->db->get('tbl_package AS pc',12,0)->result();
      		} else {
      			return $this->db->get('tbl_package AS pc',12,$page)->result();
      		}
  }

  public function get_booking_status() {
    return $this->db->get('tbl_booking_status')->result();
  }

  public function get_categories()
  	{
      return $this->db->get('tbl_category')->result();
  	}

  public function get_professions($category_id)
  	{
      $this->db->where('prf_category_id', $category_id);
      return $this->db->get('tbl_profession')->result();
  	}

  public function get_environments()
  	{
      return $this->db->get('tbl_environment')->result();
  	}

  public function get_periods()
  	{
      return $this->db->get('tbl_periods')->result();
  	}

  public function get_category_tags()
  	{
      return $this->db->get('tbl_category')->result();
  	}

  public function get_cities() {
    return $this->db->get('tbl_city')->result();
  }

  public function get_states($city) {
    $this->db->where('stt_city_id', $city);
    return $this->db->get('tbl_city_state')->result();
  }

}
