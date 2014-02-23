<?php

class Mdl_role extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list role
	function get_list_role()
	{
		$query = $this->db->get('role');
		return $query->result();
	}

	// mengambil detail role
	// $id -> id daya yang mau di ambil
	function get_detail_role($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('role', $array);
		return $query->result();
	}

	// insert role
	// $data -> array field yang baru
	function insert_role($data)
	{
		$this->db->insert('role', $data);
	}

	// update role
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_role($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete role
	// $id -> id role yang mau di delete
	function delete_role($id)
	{
		$this->db->delete('role', array('id' => $id)); 
	}
}

?>