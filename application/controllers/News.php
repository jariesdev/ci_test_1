<?php
class News extends CI_Controller {
	function __construct (){
		parent::__construct();	
		$this->load->model('news_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
	}

	function index (){
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News Arvhive';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer', $data);
	}

	function view ($slug = null){
		$data['news_item'] = $this->news_model->get_news($slug);

		$data['title'] = 'News Title';

		$this->load->view('templates/header', $data);
		$this->load->view('news/item', $data);
		$this->load->view('templates/footer', $data);
	}
	function edit ($slug = null){
		$data['news_item'] = $this->news_model->get_news($slug);

		if($this->input->post()){
			$udata['title'] = $this->input->post('title');
			$udata['slug'] = strtolower(str_replace(' ', '_', $this->input->post('title')));
			$udata['text'] = $this->input->post('text');
			$this->news_model->update($udata);

			$data['edit-result'] = true;

			redirect(site_url('news/'.$udata['slug']));
		}

		$data['title'] = 'Edit';

		$this->load->view('templates/header', $data);
		$this->load->view('news/edit', $data);
		$this->load->view('templates/footer', $data);
	}

	function add_news(){

		if($this->input->post()){
			$ndata['title'] = $this->input->post('title');
			$ndata['slug'] = strtolower(str_replace(' ', '_', $this->input->post('title')));
			$ndata['text'] = $this->input->post('text');
			// $ndata['texasdt'] = $this->input->post('text');
			$this->news_model->insert($ndata);
			$data['add_result'] = true;
		}

		$data['title'] = 'Add News';
		$this->load->view('templates/header', $data);
		$this->load->view('news/add-news', $data);
		$this->load->view('templates/footer', $data);
	}

	function delete($slug = NULL){
		$data['news_item'] = $this->news_model->get_news($slug);
		if($data['news_item']){
			$this->news_model->delete($slug);
			$data['delete_result'] = true;
		}else{
			$data['news_item'] = false;
		}

		$data['title'] = 'Delete News';

		$this->load->view('templates/header', $data);
		$this->load->view('news/delete', $data);
		$this->load->view('templates/footer', $data);
	}
}