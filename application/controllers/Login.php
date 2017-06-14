<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_data');
		$this->load->model('m_data2');
		$this->load->helper('url');
		$this->load->library('pagination');
        $this->load->database();
	}

	 function index()
	{
		$this->load->view('tugas/v_login');
		// $this->load->model('m_login');
		
	}


	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			 'username' => $username,
			 'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{

			$this->load->view('tugas/salah');
			
			
		}

	}



	//  DATA PARASITOLOGI



	function parasitologi()
	{
		

		$config['base_url']=base_url()."login/parasitologi";
		$config['total_rows']=$this->db->query("SELECT * FROM lab_parasit;")->num_rows();
		$config['per_page']=3;
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

	

	

	function tambah_parasitologi(){
		$this->load->view('tugas/input_parasitologi');
	}

	function tambah_aksi(){
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

		$this->m_data->input_data($data,'lab_parasit');
		redirect('login/parasitologi');
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

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'lab_parasit');
		redirect('login/parasitologi');
	}



		// DATA IMUNOLOGI

	function imunologi()
	{
		

		$config['base_url']=base_url()."login/imunologi";
		$config['total_rows']=$this->db->query("SELECT * FROM lab_imun;")->num_rows();
		$config['per_page']=3;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);

		// konfigurasi model dan view untuk menampilkan data 

		$this->load->model('m_data2');
		$data['datalab_imun']=$this->m_data2->getAll($config);
		$this->load->view('tugas/imunologi', $data);
	}

	function tambah_imunologi(){
		$this->load->view('tugas/input_imunologi');
	}

	function tambah_aksi2(){
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

		$this->m_data2->input_data2($data,'lab_imun');
		redirect('login/imunologi');
	}



	function edit2($id){
		$where = array('id' => $id);
		$data['datalab_imun'] = $this->m_data2->edit_data2($where,'lab_imun')->result();
		$this->load->view('tugas/edit_imunologi',$data);
	}



	function update2(){
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
 
	$this->m_data2->update_data2($where,$data,'lab_imun');
	redirect('login/imunologi');
}



	function hapus2($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'lab_imun');
		redirect('login/imunologi');
	}







	// LOG OUT

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php *///083126208823
