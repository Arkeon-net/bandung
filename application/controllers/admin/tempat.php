<?php

	class Tempat extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){ 
			$this->load->view('admin/main', array( 'content' => 'tempat' ) );
		}
		function add(){
			$this->load->view('admin/main', array( 'content' => 'add_tempat') );
		}
	}
