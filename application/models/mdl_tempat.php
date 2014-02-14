<?php

class Mdl_tempat extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list tempat
	function get_list_tempat()
	{
		$query = $this->db->get('tempat');
		return $query->result();
	}

	// mengambil detail tempat
	// $id -> id daya yang mau di ambil
	function get_detail_tempat($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('tempat', $array);
		return $query->result();
	}

	// insert tempat 
	// $data -> array field yang baru
	function insert_tempat($data)
	{
		$this->db->insert('tempat', $data);
	}

	// update tempat
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_tempat($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete tempat
	// $id -> id tempat yang mau di delete
	function delete_tempat($id)
	{
		$this->db->delete('tempat', array('id' => $id)); 
	}
}

?>