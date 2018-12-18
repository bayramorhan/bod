<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer_model extends CI_Model {

  public function register_add($data)
  	{
      $this->db->insert('tbl_trainer', $data);
      return true;
  	}


}
