<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('coba');
	}

	public function hallo()
	{
		echo "<center><b>hallo apa kabar</b></center>";
	}

	public function good_bye()
	{
		echo "<center><b>good bye my friend</b></center>";
	}

	public function good_morning($name='nopezi')
	{
		print("<center><b>good morning " .$name ."</b></center>");
	}

	public function good_morning2($name)
	{
		echo "good morning2 " .$name;
	}

	public function i_am($name = 'nopezi', $address = 'jogjakarta', $age = '10 tahun')
	{
		echo "<center><b><h1>nama = ".$name ."<br>";
		echo "alamat = ".$address ."<br>";
		echo "umur = ".$age;
		echo "</h1></b></center>";
	}

	public function i_am2($name,$address,$age)
	{
		echo "name = ".$name."<br/>";
		echo "alamat = ".$address."<br/>";
		echo "umur = ".$age;
	}





	

}
