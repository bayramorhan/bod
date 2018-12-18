<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

  public function confirm() {
    $data["page"] = 'confirm';
    $this->load->view('template/customer', $data);
  }

  public function register() {
    $data["page"] = 'register';
    $data["jslib"] = 'customer/register';
    $this->load->view('template/customer', $data);
  }

  public function login() {
    $data["page"] = 'login';
    $data["jslib"] = 'customer/login';
    $this->load->view('template/customer', $data);
  }

  public function register_add() {
    //Form Validation Begin
    $this->load->library('form_validation');
    $config = array(
        array(
                'field' => 'firstname',
                'label' => 'Ad',
                'rules' => 'trim|required|min_length[2]|max_length[64]'
            ),
    		array(
                'field' => 'lastname',
                'label' => 'Soyad',
                'rules' => 'trim|required|min_length[2]|max_length[64]'
            ),
        array(
                'field' => 'interests',
                'label' => 'İlgi Alanı',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'region',
                'label' => 'Şehir',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'state',
                'label' => 'Semt',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'trim|required|min_length[6]|max_length[128]|valid_email|is_unique[tbl_customer.cst_email]'
            ),
    		array(
                'field' => 'password_confirm',
                'label' => 'Parola Doğrulaması',
                'rules' => 'trim|required|min_length[6]|max_length[16]|matches[password]'
            ),
    		array(
                'field' => 'password',
                'label' => 'Parola',
                'rules' => 'trim|required|min_length[6]|max_length[16]'
            )
    );

    $this->form_validation->set_rules($config);

    if($this->form_validation->run()){
      //create random activation key
  		$characters = 'ABCDEFGHJKLMNPQRSTUWXYZ123456789';
  		$string = '';
  		$max = strlen($characters) - 1;
  		for ($i = 0; $i < 6; $i++) {
  		     $string .= $characters[mt_rand(0, $max)];
  		}

      $this->load->model('customer_model');
      $this->load->helper('pipe');

      $data = array(
        'cst_email'             => $this->input->post('email', true),
        'cst_password'          => hash('sha256', $this->input->post('password', true)),
        'cst_firstname'         => $this->input->post('firstname', true),
        'cst_lastname'          => $this->input->post('lastname', true),
        'cst_city_id'           => $this->input->post('region', true),
        'cst_state_id'          => $this->input->post('state', true),
        'cst_phone'             => markup_phone($this->input->post('phone', true)),
        'cst_major_category_id' => $this->input->post('interests', true),
        'cst_verify_code'       => $string
      );

      $this->customer_model->register_add($data);

  		$err = array(
  			'msg' => 'Kayıt işlemi başarılı.',
  			'type' => 'success'
  		);
  		echo json_encode( $err, JSON_UNESCAPED_UNICODE );

    } else {
  		$err = array(
  			'msg'  => strip_tags(validation_errors()),
  			'type' => 'failed'
  		);
  		echo json_encode( $err, JSON_UNESCAPED_UNICODE );
  	}
    //Form Validation End
  }

}
