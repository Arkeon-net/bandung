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
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'home/grid/';
		$config['total_rows'] = $this->mdl_tempat->get_count_tempat();
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;
		$config['num_links'] = 4;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = "</a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		$this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['rows'] = $config['total_rows'];
        $data["results"] = $this->mdl_tempat->get_tempat_paging($config["per_page"], $page,'nama','asc');
        $data["links"] = $this->pagination->create_links();

		$template = $this->template->load();
		$template['content'] = $this->load->view('front/category_grid',$data,true);
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