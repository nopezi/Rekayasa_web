<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller
{
    
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $this->load->view('home/vhome');
    }

    public function detail()
    {
        $this->load->view('home/detail');
    }
}
