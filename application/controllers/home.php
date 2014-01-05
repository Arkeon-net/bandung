<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$template = $this->template->load();
		$template['content'] = $this->load->view('front/homepage',"",true);
		$this->load->view('template/container', $template);
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */