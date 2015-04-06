<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Model extends CI_Model {

	public $table_name = 'app_users';
	
	public function __construct() {
		parent::__construct();
	} # __construct
	
	public function signin() {
		
	}
} # users_model

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */