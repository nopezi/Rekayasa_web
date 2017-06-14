<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	private $limit = 4;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('image_model', 'image');
	}

	public function index()
	{
		$query = $this->image->all($this->limit);
		$total_rows = $this->image->count();
		$links = pagination($total_rows, $this->limit);
		$this->load->view('site/index', compact('query', 'total_rows', 'links'));

		
	}

	public function latest()
	{
		$query = $this->image->latest()->all($this->limit);
		$total_rows = $this->image->count();
		$links = pagination($total_rows, $this->limit);
		$this->load->view('site/index', compact('query', 'total_rows', 'links'));

	}

	public function popular()
	{
		$query = $this->image->popular()->all($this->limit);
		$total_rows = $this->image->count();
		$links = pagination($total_rows, $this->limit);
		$this->load->view('site/index', compact('query', 'total_rows', 'links'));

	}

	public function detail($id)
	{
		$row = $this->image->find($id);
		$random_images = $this->image->random_images($id);
		$left_image = $random_images->first_row();
		$right_image = $random_images->last_row();
		$this->load->view('site/detail', compact('row', 'left_image', 'right_image'));
	}

	

	// public function generate()
	// {
	// 	for ($i=1; $i <= 8 ; $i++) { 
	// 		$title = "Image " .$i;
	// 		$this->db->insert("images", array(

	// 			'title' => $title,
	// 			'filename' => urlencode($title) .".jpg",
	// 			'created_at' => date("Y-m-d H:i:s"),
	// 			'view_count' => rand(0, 10),
	// 			'download_count' => rand(0, 10)

	// 			));
	// 		echo $this->db->last_query();
	// 	}
	// }


}

/* End of file Site.php */
/* Location: ./application/controllers/Site.php */