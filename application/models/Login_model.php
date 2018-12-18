<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User_model class.
 *
 * @extends CI_Model
 */
class Login_model extends CI_Model {
	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	public function resolve_customer_login($username, $password) {

		$this->db->select('cst_password');
		$this->db->from('tbl_customer');
		$this->db->where('cst_email', $username);
		$this->db->where('cst_status', '1');
		$hash = $this->db->get()->row('cst_password');

		return $this->verify_password_hash($password, $hash);

	}


	public function resolve_trainer_login($username, $password) {

		$this->db->select('trn_password');
		$this->db->from('tbl_trainer');
		$this->db->where('trn_email', $username);
		$this->db->where('trn_status', '1');
		$hash = $this->db->get()->row('trn_password');

		return $this->verify_password_hash($password, $hash);

	}

	/**
	 * get_user_id_from_username function.
	 *
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_trainer_id_from_username($username) {

		$this->db->select('trn_id');
		$this->db->from('tbl_trainer');
		$this->db->where('trn_email', $username);
		return $this->db->get()->row('trn_id');

	}

	public function get_customer_id_from_username($username) {

		$this->db->select('cst_id');
		$this->db->from('tbl_customer');
		$this->db->where('cst_email', $username);
		return $this->db->get()->row('cst_id');

	}

	/**
	 * get_user function.
	 *
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_trainer($trainer_id) {

		$this->db->from('tbl_trainer AS ct');
		$this->db->join('tbl_city_state AS sta', 'sta.stt_id = ct.trn_state_id');
		$this->db->where('ct.trn_id', $trainer_id);
		return $this->db->get()->row();

	}

	public function get_customer($customer_id) {

		$this->db->from('tbl_customer AS ct');
		$this->db->join('tbl_city_state AS sta', 'sta.stt_id = ct.cst_state_id');
		$this->db->join('tbl_city AS cty', 'cty.cty_id = ct.cst_city_id');
		$this->db->where('ct.cst_id', $customer_id);
		return $this->db->get()->row();

	}


	/**
	 * verify_password_hash function.
	 *
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {

		if(hash('sha256',$password)==$hash) {
			return TRUE;
		} else {
			return FALSE;
		}

	}


}
