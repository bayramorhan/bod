<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

  public function confirm() {
    $data["page"] = 'confirm';
    $this->load->view('template/trainer', $data);
  }

  public function register() {
    $data["page"] = 'register';
    $data["jslib"] = 'trainer/register';
    $this->load->view('template/trainer', $data);
  }

  public function login() {
    $data["page"] = 'login';
    $data["jslib"] = 'trainer/login';
    $this->load->view('template/trainer', $data);
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
                'field' => 'main_profession',
                'label' => 'Ana Uzmanlık Dalı',
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
                'field' => 'job',
                'label' => 'Mesleğiniz',
                'rules' => 'trim|required|min_length[3]|max_length[64]'
            ),
    		array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'trim|required|min_length[6]|max_length[128]|valid_email|is_unique[tbl_trainer.trn_email]'
            ),
        array(
                'field' => 'gender',
                'label' => 'Cinsiyet',
                'rules' => 'trim|required'
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
      $characters_sms = 'ABCDEFGHJKLMNPQRSTUWXYZ123456789';
  		$string = '';
      $string_sms = '';
  		$max = strlen($characters) - 1;
  		for ($i = 0; $i < 6; $i++) {
  		     $string .= $characters[mt_rand(0, $max)];
           $string_sms .= $characters_sms[mt_rand(0, $max)];
  		}

      $this->load->model('trainer_model');
      $this->load->helper('pipe');

      $data = array(
        'trn_email'             => $this->input->post('email', true),
        'trn_password'          => hash('sha256', $this->input->post('password', true)),
        'trn_firstname'         => $this->input->post('firstname', true),
        'trn_lastname'          => $this->input->post('lastname', true),
        'trn_city_id'           => $this->input->post('region', true),
        'trn_state_id'          => $this->input->post('state', true),
        'trn_job'               => $this->input->post('job', true),
        'trn_gender'            => $this->input->post('gender', true),
        'trn_phone'             => markup_phone($this->input->post('phone', true)),
        'trn_major_category_id' => $this->input->post('main_profession', true),
        'trn_verify_code'       => $string,
        'trn_verify_code_sms'   => $string_sms
      );

      $this->trainer_model->register_add($data);

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
