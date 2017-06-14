<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view('tugas/admin');
		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */