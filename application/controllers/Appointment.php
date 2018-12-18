<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      if(!$_POST) {
        $this->session->user_id ? '' : redirect(base_url('customer/login'));
      } else {
        $this->session->user_id ? '' : show_error('Forbidden Request', 403);
      }
    }

  public function confirm() {
    $this->load->model('output_model');
    $package_id = $this->output_model->get_package_id_from_ppl($this->session->items[0]);
    $data["package"] = $this->output_model->get_package_detail($package_id);
    $data["periods"] = $this->output_model->get_package_periods($package_id);
    $data["environments"] = $this->output_model->get_package_environments($package_id);
    $data["page"] = 'booking/booking';
    $data["jslib"] = 'booking';
    $this->load->view('template/default', $data);
  }

  public function new_appointment() {
    $data = array(
      'date' => $this->input->post('booking_date'),
      'time' => $this->input->post('booking_time'),
      'items' => $this->input->post('package_items'),
      'hours' => $hours = $this->input->post('package_items_hour')
    );
    $this->add_to_cart($data);
  }

  public function add_to_cart($data) {
    foreach($data AS $key=>$value) {
      $this->session->set_userdata($key, $value);
    }
  }

}
