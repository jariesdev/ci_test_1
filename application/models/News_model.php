<?php

class News_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	function get_news( $slug = false ){
		if($slug === false){
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', ['slug' => $slug] );
		return $query->row_array();
	}

	function insert($data){
		$this->db->insert('news', $data);
	}

	function update($data){
		$this->db->update('news', $data);
	}

}