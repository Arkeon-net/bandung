<?php

class Mdl_taxonomi extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list taxonomi
	function get_list_taxonomi()
	{
		$query = $this->db->get('taxonomi');
		return $query->result();
	}

	// mengambil detail taxonomi
	// $id -> id daya yang mau di ambil
	function get_detail_taxonomi($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('taxonomi', $array);
		return $query->result();
	}

	// insert taxonomi
	// $data -> array field yang baru
	function insert_taxonomi($data)
	{
		$this->db->insert('taxonomi', $data);
	}

	// update taxonomi
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_taxonomi($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete taxonomi
	// $id -> id taxonomi yang mau di delete
	function delete_taxonomi($id)
	{
		$this->db->delete('taxonomi', array('id' => $id)); 
	}
}

?>