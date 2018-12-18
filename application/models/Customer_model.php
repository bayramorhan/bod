<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

  public function register_add($data)
  	{
      $this->db->insert('tbl_customer', $data);
      return true;
  	}


}
