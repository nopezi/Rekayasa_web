<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
    {
    	$sql = "SELECT * FROM contact";
    	$query = $this->db->query($sql);
    	$kontak = $query->result_array();
        $this->load->view('contact/index', compact('kontak'));
    }

    public function create()
    {

    	$this->load->view('contact/create');
    }

    public function update()
    {
    	$content = $this->load->view('contact/update',
    		array(), true);

    	$this->load->view('contact/application',
    		array(
    			'content' => $content

    			));
    }



	

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */