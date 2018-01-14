<?php

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		echo 'page index';
	}

	function view( $page = 'homepage' ){
		if(!file_exists(APPPATH)){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('/templates/header', $data);
		$this->load->view('/pages/'.$page, $data);
		$this->load->view('/templates/footer', $data);
	}
}