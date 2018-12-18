<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    public function package_list() {

      $data["page"] = 'package/package-list';
      $data["packages"] = $result;
      $custom_scripts = array(
        'package-list' => array(
          'https://maps.googleapis.com/maps/api/js?key=AIzaSyDp--FgFjBq01RpvPeK2HylnDDUbY9cgZw',
            base_url('assets/js/infobox.js')
          )
      );
      $data["scripts"] = $custom_scripts['package-list'];
      $data["jslib"] = 'package-list';
      $this->load->view('template/default', $data);
    }

    public function package_ordering_set($orderby) {
      $this->session->set_userdata('package_ordering', $orderby);
    }

    public function package_filter_category_set($category) {
      $this->load->model('output_model');
      $this->session->set_userdata('package_filter_category_name', $this->output_model->get_category_name($category)[0]->ctg_name);
      $this->session->set_userdata('package_filter_category', $category);
      redirect(base_url('package/package_list'));
    }

    public function package_detail($package_id) {
      $this->load->model('output_model');
      $this->session->user_id ? $this->output_model->add_package_display($package_id, $this->session->user_id) : '';
      $data["package"] = $this->output_model->get_package_detail($package_id);
      $locations = $this->output_model->get_package_locations($package_id);
      $periods = $this->output_model->get_package_periods($package_id);
      $environments = $this->output_model->get_package_environments($package_id);
      $location_list = array();
      $period_list = array();
      $environment_list = array();
      foreach($locations AS $location) {
        array_push($location_list, $location->stt_name);
      }
      foreach($periods AS $period) {
        array_push($period_list, $period->prd_name);
      }
      foreach($environments AS $environment) {
        array_push($environment_list, $environment->env_name);
      }
      $disabled_days = array();
      $days =  date_create()->diff(date_create(date('01-01-Y')))->days;
      $today = date('d-m-Y');
      for($i=0;$i<$days;$i++) {
        array_push($disabled_days, date('m/d/Y', strtotime("-".$i." days")));
      }
      $data["days_disabled"] = $disabled_days;
      $data["locations"] = $location_list;
      $data["periods"] = $period_list;
      $data["environments"] = $environment_list;
      $data["prices"] = $this->output_model->get_package_price_list($package_id);
      $data["jslib"] = 'package-detail';
      $data["page"] = 'package/package-detail';
      $this->load->view('template/default', $data);
    }


}
