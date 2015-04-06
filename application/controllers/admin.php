<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $data = array();
	
	function __construct() {
		parent::__construct();
		/* load library "session" */
		$this->load->library('session');
		/* checkin "signin" */
		$exception_uri_string = array('admin/signin', 'admin/signout');
		if (in_array(uri_string(), $exception_uri_string) === FALSE) {
			if ((bool)$this->session->userdata('signin') === FALSE) {
				redirect('admin/signin', 'refresh');
			}
		}
		$this->data['title'] = 'Admin';
	}
	
	public function index() {
		$this->data['current_page'] = ((bool)$this->uri->segment(2)) ? $this->uri->segment(2): 'dashboard';
		if ($this->data['current_page'] !== 'signin') {
			switch ($this->data['current_page']) {
				case 'dashboard':
					echo 'dashboard';
					break;
				case 'signout':
					$this->_signout();
					break;
				default:
					echo 'N/A';
			}
			$this->_to_string($this->data);
		} else {
			$this->_signin();
		}
	}
	
	public function _signin() {
		if ((bool)$this->input->post('input-submit') === TRUE) {
			$this->db->select('row_id as user_id, group_id, user_name, user_email');
			$this->db->where('user_name', $this->input->post('input-username'));
			$this->db->where('user_password', hash('sha512', $this->input->post('input-password')));
			$this->db->order_by('user_name');
			$query = $this->db->get('app_users');
			$user = $query->row_array();
			if (count($user) > 0) {
				$user['signin'] = TRUE;
				$this->session->set_userdata($user);
				redirect('admin/dashboard', 'refresh');
			}
		}
		$this->data['title'] .= ' - Sign In';
		$this->data['signin_status'] = ((bool)$this->session->flashdata('signin_status'))? $this->session->flashdata('signin_status'): NULL;
		$this->load->view('signin_view', $this->data);
	}
	
	public function _signout() {
		$this->session->sess_destroy();
		redirect('admin/signin', 'refresh');
	}
	
	public function _to_string($data) {
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */