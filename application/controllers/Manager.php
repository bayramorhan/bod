<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      // access managing
      $this->session->user_type == 'trainer' ? '' : exit(show_error('Lütfen <a href="'.base_url('trainer/login').'">giriş yapın.</a>', '403', 'Oturum Süresi Doldu'));
    }

  public function add_booking_history($booking, $trainer, $customer, $status, $comment) {
    $this->load->model('manager_model');
    $data = array(
      'bkh_booking_id' => $booking,
      'bkh_trainer_id' => $trainer,
      'bkh_customer_id' => $customer,
      'bkh_booking_status_id' => $status,
      'bkh_comment' => $comment,
      'action_type' => 'trainer'
    );
    $this->manager_model->add_booking_history($data);
  }

  public function update_booking_status() {
    $booking_id = $this->input->post('bid');
    $customer_id = $this->input->post('cid');
    $status = $this->input->post('status');
    $comment = $this->input->post('comment');
    $this->load->model('manager_model');
    $data = array(
      'bkn_status' => $status
    );

    $comments = array(
      '2' => 'Randevu Onaylandı',
      '3' => $comment == null ? 'İade Talep Edildi' : $comment,
      '4' => $comment == null ? 'İade Talep Edildi' : $comment,
      '5' => 'İptal Edildi',
      '6' => $comment == null ? 'İade Talep Edildi' : $comment,
      '7' => 'İade Edildi',
      '8' => 'Tamamlandı'
    );

    $this->manager_model->update_booking_status($booking_id, $data);
    $this->add_booking_history($booking_id, $this->session->user_id, $customer_id, $status, $comments[$status]);
  }

  public function package_alter() {
    $package_id = $this->input->post('package_id');
    $this->load->library('form_validation');
    $config = array(
        array(
                'field' => 'package_name',
                'label' => 'İlan Başlığı',
                'rules' => 'trim|required|min_length[8]|max_length[128]'
            ),
    		array(
                'field' => 'package_category',
                'label' => 'Özel Ders Kategorisi',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_profession',
                'label' => 'Alan',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_description',
                'label' => 'İlan Açıklaması',
                'rules' => 'trim|required|min_length[32]|max_length[2048]'
            ),
        array(
                'field' => 'package_periods[]',
                'label' => 'Ders Verilebilecek Zamanlar',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'package_location',
                'label' => 'İl',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_state',
                'label' => 'İlçe',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'package_min_hours',
                'label' => 'Minimum Ders Saati',
                'rules' => 'trim|required|min[1]|max[12]'
            ),
    		array(
                'field' => 'package_max_hours',
                'label' => 'Maksimum Ders Saati',
                'rules' => 'trim|required|min[1]|max[48]'
            ),
    		array(
                'field' => 'package_price',
                'label' => 'Saatlik Ücret',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'package_environments[]',
                'label' => 'Ders Ortamı',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'cover-toggle',
                'label' => 'Kapak Görseli',
                'rules' => 'trim|required'
            )
    );

    $this->form_validation->set_rules($config);

    if($this->form_validation->run()){
      if($this->input->post('img-source')!=null)
      {
        if($this->input->post('cover-toggle') == 'custom') {
          $cover = 'custom';
          $this->input->post('current-source') != null ? unlink('assets/img/cover/'.$this->input->post('current-source')) : '';
          //Image Handling
      		$image = $this->input->post('img-source');
      		$image_array_1 = explode(";", $image);
      		$image_array_2 = explode(",", $image_array_1[1]);
      		$data_img = base64_decode($image_array_2[1]);
      		$characters = 'ABCDEFGHJKLMNPQRSTUWXYZ0123456789';
      		$code = '';
      		$max = strlen($characters) - 1;
      		for ($i = 0; $i < 6; $i++) {
      				 $code.= $characters[mt_rand(0, $max)];
      		}
      		$image_name = time().'_'.$code.'.jpg';
      		file_put_contents('assets/img/cover/'.$image_name, $data_img);
        } else {
          $cover = 'profile';
          $this->input->post('current-source') != null ? unlink('assets/img/cover/'.$this->input->post('current-source')) : '';
          $image_name = null;
        }
      } else {
        if($this->input->post('cover-toggle') == 'custom') {
          $cover = $this->input->post('current-source') != null ? 'custom' : 'profile';
          $image_name = $this->input->post('current-source') != null ? $this->input->post('current-source') : null;
        } else {
          $cover = 'profile';
          $image_name = null;
          $this->input->post('current-source') != null ? unlink('assets/img/cover/'.$this->input->post('current-source')) : '';
        }
      }

      $this->load->model('manager_model');

      $data = array(
        'pck_category_id'     => $this->input->post('package_category', true),
        'pck_profession_id'   => $this->input->post('package_profession', true),
        'pck_trainer_id'      => $this->session->user_id,
        'pck_location_id'     => $this->input->post('package_location', true),
        'pck_state_id'        => $this->input->post('package_state', true),
        'pck_latitude'        => $this->input->post('user_latitude', true),
        'pck_longtitude'      => $this->input->post('user_longtitude', true),
        'pck_name'            => $this->input->post('package_name', true),
        'pck_price'           => $this->input->post('package_price', true),
        'pck_cover'           => $cover,
        'pck_picture'         => $image_name,
        'pck_hours_min'       => $this->input->post('package_min_hours', true),
        'pck_hours_max'       => $this->input->post('package_max_hours', true),
        'pck_description'     => $this->input->post('package_description', true),
        'pck_status'          => '1'
      );

      //İlanı güncelle
      $this->manager_model->package_alter($package_id, $data);

      $this->manager_model->remove_env($package_id);
      $this->manager_model->remove_per($package_id);

      //İlan ders ortamlarını kaydet
      foreach($this->input->post('package_environments') AS $e) {
        $this->manager_model->package_environment_add($e, $package_id);
      }

      //İlan ders zamanlarını kaydet
      foreach($this->input->post('package_periods') AS $p) {
        $this->manager_model->package_period_add($p, $package_id);
      }

      //Varsa yeni ilan etkietlerini kaydet
      foreach(explode(',', $this->input->post('package_tags')) AS $t) {
        $t != null ? $this->manager_model->package_tag_add(trim($t), $package_id, '1') : null;
      }

  		$err = array(
  			'title' => 'Özel Ders İlanı Güncellendi',
        'content' => 'İlanınız onaylandıktan sonra yayına alınacaktır. Onay sürecinde bir güncelleme olduğunda, kayıtlı e-mail adresiniz üzerinden bilgilendirileceksiniz.',
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
   }

   public function get_price_item_content() {
     $this->load->view('partitions/price_list_item');
   }

   public function get_location_item_content() {
     $this->load->view('partitions/location_list_item');
   }

  public function get_package_per_json($package_id) {
    $this->load->model('manager_model');
    $periods = $this->manager_model->get_package_per($package_id);
    echo json_encode($periods, JSON_UNESCAPED_UNICODE);
  }

  public function get_package_env_json($package_id) {
    $this->load->model('manager_model');
    $environments = $this->manager_model->get_package_env($package_id);
    echo json_encode($environments, JSON_UNESCAPED_UNICODE);
  }

  public function remove_package_tag($tag_id) {
    $this->load->model('manager_model');
    $this->manager_model->remove_tag($tag_id);
  }

  public function get_package_tags_json($package_id) {
    $this->load->model('manager_model');
    $tags = $this->manager_model->get_package_tags($package_id);
    echo json_encode($tags, JSON_UNESCAPED_UNICODE);
  }

  public function get_package_json($package_id) {
    $this->load->model('manager_model');
    $package = $this->manager_model->get_package_object($package_id);
    echo json_encode($package, JSON_UNESCAPED_UNICODE);
  }

  public function edit_package($package_id) {
    $this->load->model('manager_model');
    $coordinates = $this->manager_model->get_package_coordinates($package_id);
    $data["package_lat"] = $coordinates[0]->pck_latitude;
    $data["package_lng"] = $coordinates[0]->pck_longtitude;
    $data["page"] = 'edit-package';
    $data["jslib"] = 'edit-package';
    $data["package_id"] = $package_id;
    $this->load->view('template/manager', $data);
  }

  public function package_add() {
    $this->load->library('form_validation');
    $config = array(
        array(
                'field' => 'package_name',
                'label' => 'İlan Başlığı',
                'rules' => 'trim|required|min_length[8]|max_length[128]'
            ),
    		array(
                'field' => 'package_category',
                'label' => 'Özel Ders Kategorisi',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_profession',
                'label' => 'Alan',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_description',
                'label' => 'İlan Açıklaması',
                'rules' => 'trim|required|min_length[32]|max_length[2048]'
            ),
        array(
                'field' => 'package_periods[]',
                'label' => 'Ders Verilebilecek Zamanlar',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'price_item_name[]',
                'label' => 'Fiyat Seçenek Adı',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'price_item_hour[]',
                'label' => 'Minimum Saat',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'price_item_price[]',
                'label' => 'Seçenek Fiyatı',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_states[]',
                'label' => 'Ders Verebileceğiniz Semtler',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'package_location',
                'label' => 'İl',
                'rules' => 'trim|required'
            ),
        array(
                'field' => 'package_state',
                'label' => 'İlçe',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'package_environments[]',
                'label' => 'Ders Ortamı',
                'rules' => 'trim|required'
            ),
    		array(
                'field' => 'cover-toggle',
                'label' => 'Kapak Görseli',
                'rules' => 'trim|required'
            )
    );

    $this->form_validation->set_rules($config);

    if($this->form_validation->run()){
      if($this->input->post('img-source')!=null)
      {
        //Image Handling
    		$image = $this->input->post('img-source');
    		$image_array_1 = explode(";", $image);
    		$image_array_2 = explode(",", $image_array_1[1]);
    		$data_img = base64_decode($image_array_2[1]);
    		$characters = 'ABCDEFGHJKLMNPQRSTUWXYZ0123456789';
    		$code = '';
    		$max = strlen($characters) - 1;
    		for ($i = 0; $i < 6; $i++) {
    				 $code.= $characters[mt_rand(0, $max)];
    		}
    		$image_name = time().'_'.$code.'.jpg';
    		file_put_contents('assets/img/cover/'.$image_name, $data_img);
      }

      $this->load->model('manager_model');

      if($image_name == null) {
        $image_name = $this->input->post('cover-toggle', true) == 'profile' ? $this->session->user_avatar : 'pck_imageholder.jpg';
      }

      $data = array(
        'pck_category_id'     => $this->input->post('package_category', true),
        'pck_profession_id'   => $this->input->post('package_profession', true),
        'pck_trainer_id'      => $this->session->user_id,
        'pck_location_id'     => $this->input->post('package_location', true),
        'pck_state_id'        => $this->input->post('package_state', true),
        'pck_latitude'        => $this->input->post('user_latitude', true),
        'pck_longtitude'      => $this->input->post('user_longtitude', true),
        'pck_name'            => $this->input->post('package_name', true),
        'pck_cover'           => $this->input->post('cover-toggle', true),
        'pck_picture'         => $image_name,
        'pck_description'     => $this->input->post('package_description', true),
        'pck_status'          => '1'
      );

      //İlanı veritabanına kaydet
      $package_id = $this->manager_model->package_add($data);

      //İlan ders ortamlarını kaydet
      foreach($this->input->post('package_environments') AS $e) {
        $this->manager_model->package_environment_add($e, $package_id);
      }

      //İlan fiyat seçeneklerini kaydet
      for($i=0;$i<count($this->input->post('price_item_name'));$i++) {
        $name   =   $this->input->post('price_item_name')[$i];
        $hour   =   $this->input->post('price_item_hour')[$i];
        $price  =   $this->input->post('price_item_price')[$i];
        $this->manager_model->package_price_add($name, $hour, $price, $package_id);
      }

      //İlan il ve ilçe seçeneklerini kaydet
      for($i=0;$i<count($this->input->post('package_states'));$i++) {
        $location   =   $this->input->post('package_locations')[0];
        $state   =   $this->input->post('package_states')[$i];
        $this->manager_model->package_location_add($location, $state, $package_id);
      }

      //İlan ders zamanlarını kaydet
      foreach($this->input->post('package_periods') AS $p) {
        $this->manager_model->package_period_add($p, $package_id);
      }

      //Varsa ilan etkietlerini kaydet
      foreach(explode(',', $this->input->post('package_tags')) AS $t) {
        $t != null ? $this->manager_model->package_tag_add(trim($t), $package_id, '1') : null;
      }

  		$err = array(
  			'title' => 'Özel Ders İlanı Kaydedildi',
        'content' => 'İlanınız onaylandıktan sonra yayına alınacaktır. Onay sürecinde bir güncelleme olduğunda, kayıtlı e-mail adresiniz üzerinden bilgilendirileceksiniz.',
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
   }

   public function bookings() {
     $this->load->model('output_model');
     $this->load->model('manager_model');
     $data["stclass"] = array(
       '1' => 'pending',
       '2' => 'approved',
       '3' => 'cancel',
       '4' => 'pending',
       '5' => 'cancel',
       '6' => 'pending',
       '7' => 'cancel',
       '8' => 'approved'
     );
     $data["status"] = $this->output_model->get_booking_status();
     $data["bookings"] = $this->manager_model->get_booking_list();
     $data["jslib"] = 'bookings';
     $data["page"] = 'bookings';
     $this->load->view('template/manager', $data);
   }

  public function new_package() {
    $data["jslib"] = 'new-package';
    $data["page"] = 'new-package';
    $this->load->view('template/manager', $data);
  }

  public function get_package_list() {
    $this->load->model('manager_model');
    $result = $this->manager_model->get_package_list($this->session->user_id);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
  }

  public function packages() {
    $data["page"] = 'packages';
    $data["jslib"] = 'packages';
    $this->load->view('template/manager', $data);
  }

  public function index() {
    $data["page"] = 'default';
    $this->load->view('template/manager', $data);
  }

}
