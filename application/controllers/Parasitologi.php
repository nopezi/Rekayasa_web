<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parasitologi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_login');
		// $this->load->model('m_data2');
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('pagination');
        $this->load->database();
	}

	public function index()
	{
		$config['base_url']=base_url()."index.php/parasitologi/index";
		$config['total_rows']=$this->db->query("SELECT * FROM lab_parasit;")->num_rows();
		$config['per_page']=5;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);

		// konfigurasi model dan view untuk menampilkan data 

		$this->load->model('m_data');
		$data['datalab_parasit']=$this->m_data->getAll($config);
		$this->load->view('tugas/parasitologi', $data);
		
	}

	function edit($id){
		$where = array('id' => $id);
		$data['datalab_parasit'] = $this->m_data->edit_data($where,'lab_parasit')->result();
		$this->load->view('tugas/edit_parasitologi',$data);
	}

	function update(){
	$id  		  = $this->input->post('id');	
	$nama_barang  = $this->input->post('nama_barang');
	$jumlah_awal  = $this->input->post('jumlah_awal');
	$kadaluarsa   = $this->input->post('kadaluarsa');
	$jumlah_akhir = $this->input->post('jumlah_akhir');
	$satuan       = $this->input->post('satuan');
 
	$data = array(
			'nama_barang'  => $nama_barang,
			'jumlah_awal'  => $jumlah_awal,
			'kadaluarsa'   => $kadaluarsa,
			'jumlah_akhir' => $jumlah_akhir,
			'satuan'	   => $satuan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'lab_parasit');
	redirect('login/parasitologi');
}

}

/* End of file Parasitologi.php */
/* Location: ./application/controllers/Parasitologi.php */