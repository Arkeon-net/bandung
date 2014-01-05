<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{

	function load(){
	    $ci = & get_instance();
	    
	    $temp['head'] = $ci->load->view('template/head',"",true);
	    $temp['header'] = $ci->load->view('template/header',"",true);
	    $temp['footer'] = $ci->load->view('template/footer',"",true);
	    
	    return $temp;
	}

	

}

/* End of file template.php */
/* Location: ./application/libraries/template.php */
