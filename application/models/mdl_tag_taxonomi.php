<?php

class Mdl_tag_taxonomi extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list tag_taxonomi
	function get_list_tag_taxonomi()
	{
		$query = $this->db->get('tag_taxonomi');
		return $query->result();
	}

	// mengambil detail tag_taxonomi
	// $id -> id daya yang mau di ambil
	function get_detail_tag_taxonomi($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('tag_taxonomi', $array);
		return $query->result();
	}

	// insert tag_taxonomi
	// $data -> array field yang baru
	function insert_tag_taxonomi($data)
	{
		$this->db->insert('tag_taxonomi', $data);
	}

	// update tag_taxonomi
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_tag_taxonomi($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete tag_taxonomi
	// $id -> id tag_taxonomi yang mau di delete
	function delete_tag_taxonomi($id)
	{
		$this->db->delete('tag_taxonomi', array('id' => $id)); 
	}
}

?>