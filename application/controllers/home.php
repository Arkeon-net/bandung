<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_tempat');
	}

	public function index()
	{
		$template = $this->template->load();
		$new = $this->mdl_tempat->get_list_tempat_limit_date(9);
		$newplaces = array();
		$c = 0;
		foreach ($new->result() as $key) {
			$newplaces[$c]['nama'] = $key->nama;
			$newplaces[$c]['id'] = $key->id;
			$c++;
		}
		$data['place'] = $newplaces;
		$template['content'] = $this->load->view('front/homepage',$data,true);
		$this->load->view('template/container', $template);
	}

	function grid(){
		$template = $this->template->load();
		$template['content'] = $this->load->view('front/category_grid',"",true);
		$this->load->view('template/container',$template);
	}

	function placeDetail($id){
		$template = $this->template->load();
		$place = $this->mdl_tempat->get_detail_tempat($id);
		$placedetail = array();
		foreach ($place as $key) {
			$placedetail['nama'] = $key->nama;
			$placedetail['deskripsi'] = $key->deskripsi;
			$placedetail['alamat'] = $key->alamat;
			$placedetail['website'] = $key->website;
			$placedetail['email'] = $key->email;
			$placedetail['telepon'] = $key->telepon;
			$placedetail['facebook'] = $key->facebook;
			$placedetail['twitter'] = $key->twitter;
			$placedetail['longitude'] = $key->longitude;
			$placedetail['latitude'] = $key->latitude;
		}
		$data['place'] = $placedetail;
		$template['content'] = $this->load->view('front/place_detail', $data, true);
		$this->load->view('template/container', $template);
	}

	function maps(){
		$template = $this->template->load();
		$template['content'] = $this->load->view('front/maps', "", true);
		$this->load->view('template/container', $template);
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */