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
		return $this->db->insert('news', $data);
	}

	function update($data){
		return $this->db->update('news', $data, ['slug' => $data['slug'] ]);
	}

	function delete($slug){
		if(!$slug){
			return false;
		}
		return $this->db->delete('news', ['slug' => $slug]);
	}

}