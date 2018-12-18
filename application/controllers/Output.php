<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Output extends CI_Controller {

  public function get_package_list_count() {
    !$this->input->get('package_list') ? exit('Forbidden Request') : '';
    $this->load->model('output_model');
    $result = $this->output_model->get_package_list_count($this->session->active_state);
    echo $result;
  }

  public function get_package_list($page = null) {
    !$this->input->get('package_list') ? exit('Forbidden Request') : '';
    $this->load->model('output_model');
    $lat = $this->input->get('lat') ? $this->input->get('lat') : null;
    $long = $this->input->get('lng') ? $this->input->get('lng') : null;
    $result = $this->output_model->get_package_list($this->session->active_state, $lat, $long, $page);

    echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
  }

  public function get_booking_status() {
    $this->load->model('output_model');
    $result = $this->output_model->get_booking_status();
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
  }

  public function get_categories($format = 'json')
  	{
      $this->load->model('output_model');
      $result = $this->output_model->get_categories();

      print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);
  	}

    public function get_professions($category_id, $format = 'json')
    	{
        $this->load->model('output_model');
        $result = $this->output_model->get_professions($category_id);

        print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);
    	}

  public function get_category_tags($format = 'json') {
    $this->load->model('output_model');
    $result = $this->output_model->get_category_tags();

    print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);

  }

  public function get_environments($format = 'json') {
    $this->load->model('output_model');
    $result = $this->output_model->get_environments();

    print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);

  }

  public function get_periods($format = 'json') {
    $this->load->model('output_model');
    $result = $this->output_model->get_periods();

    print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);

  }

  public function get_cities($format = 'json') {
    $this->load->model('output_model');
    $result = $this->output_model->get_cities();

    print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);
  }

  public function get_states($format = 'json') {
    $this->load->model('output_model');
    $city = $this->input->get('city');
    $result = $this->output_model->get_states($city);

    print_r($format == 'json' ? json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) : $result);
  }

}
