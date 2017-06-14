<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// konfigurasi helper dan library
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->database();
	}

	public function index()
	{
		// konfigurasi class pagination

		$config['base_url']=base_url()."index.php/kontak/index";
		$config['total_rows']=$this->db->query("SELECT * FROM telepon;")->num_rows();
		$config['per_page']=3;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);

		// konfigurasi model dan view untuk menampilkan data 

		$this->load->model('m_kontak');
		$data['datakontak']=$this->m_kontak->getAll($config);
		$this->load->view('v_kontak', $data);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */