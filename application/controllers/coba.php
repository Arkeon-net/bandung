<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coba extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		echo 'makan <br\>';
		$this->load->model('Mdl_tempat');
		$data['query'] = $this->Mdl_tempat->get_detail_tempat(1);
		print_r($data);
		echo '<\br>';
		echo '<\br>';
		echo '<\br>';
		// $makan = array('1' => 'test');
		$data = array(
			'nama' => 'saung ijo kabakar', 
			'deskripsi' => 'budaya', 
			'alamat' => 'bag' , 
			'email' => 'haha', 
			'websait' => 'ga' , 
			'facebook' => 'toto', 
			'twetter' => 'aga' , 
			'longitude' => 'aga' , 
			'latitude' => 'aga');
		$this->Mdl_tempat->insert_tempat($data);
	}
}

?>