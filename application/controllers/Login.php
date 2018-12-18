<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      // access managing
    }

    public function authorize_customer() {

      $this->load->library('form_validation');
      $config = array(
          array(
                  'field' => 'email',
                  'label' => 'E-Mail',
                  'rules' => 'trim|required|min_length[3]|max_length[128]'
              ),
          array(
                  'field' => 'password',
                  'label' => 'Parola',
                  'rules' => 'trim|required'
              )
      );

      $this->form_validation->set_rules($config);

      if($this->form_validation->run()){

        $this->load->model('login_model');

        $username = $this->input->post('email');
        $password = $this->input->post('password');
        if($this->login_model->resolve_customer_login($username, $password)) {

          $customer_id = $this->login_model->get_customer_id_from_username($username);
          $customer    = $this->login_model->get_customer($customer_id);

          $data = array(
            'user_id' => $customer->cst_id,
            'user_email' => $customer->cst_email,
            'user_firstname' => $customer->cst_firstname,
            'user_lastname' => $customer->cst_lastname,
            'user_type' => 'customer',
            'user_latitude' => $customer->latitude,
            'user_longtitude' => $customer->longtitude,
            'active_state' => $customer->cst_state_id,
            'active_distinct' => $customer->stt_name,
            'active_region' => $customer->cty_name,
            'city_id' => $customer->cst_city_id,
            'avatar' => $customer->cst_picture,
            'logged_in' => true
          );

          $this->session->set_userdata($data);

          $err = array(
            'msg' => 'Giriş Yapıldı',
            'type' => 'success'
          );
        } else {
          $err = array(
            'msg' => 'Giriş Yapılamadı',
            'type' => 'failed'
          );
        }

      } else {
        $err = array(
          'msg' => strip_tags(validation_errors()),
          'type' => 'failed'
        );
      }

      echo json_encode( $err, JSON_UNESCAPED_UNICODE );

    }

  public function authorize_trainer() {

    $this->load->library('form_validation');
    $config = array(
        array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'trim|required|min_length[3]|max_length[128]'
            ),
    		array(
                'field' => 'password',
                'label' => 'Parola',
                'rules' => 'trim|required'
            )
    );

    $this->form_validation->set_rules($config);

    if($this->form_validation->run()){

      $this->load->model('login_model');

      $username = $this->input->post('email');
      $password = $this->input->post('password');
      if($this->login_model->resolve_trainer_login($username, $password)) {

        $trainer_id = $this->login_model->get_trainer_id_from_username($username);
				$trainer    = $this->login_model->get_trainer($trainer_id);

        $data = array(
          'user_id' => $trainer->trn_id,
          'user_email' => $trainer->trn_email,
          'user_firstname' => $trainer->trn_firstname,
          'user_lastname' => $trainer->trn_lastname,
          'user_type' => 'trainer',
          'user_latitude' => $trainer->latitude,
          'user_longtitude' => $trainer->longtitude,
          'user_avatar' => $trainer->trn_picture,
          'logged_in' => true
        );

        $this->session->set_userdata($data);

        $err = array(
    			'msg' => 'Giriş Yapıldı',
    			'type' => 'success'
    		);
      } else {
        $err = array(
    			'msg' => 'Giriş Yapılamadı',
    			'type' => 'failed'
    		);
      }

    } else {
      $err = array(
  			'msg' => strip_tags(validation_errors()),
  			'type' => 'failed'
  		);
    }

    echo json_encode( $err, JSON_UNESCAPED_UNICODE );

  }

  public function logout() {

		// create the data object
		$data = new stdClass();

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

      redirect(base_url());

		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect(base_url());

		}

	}

}
