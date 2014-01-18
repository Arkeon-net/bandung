<?php

class Mdl_user extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list user
	function get_list_user()
	{
		$query = $this->db->get('user');
		return $query->result();
	}

	// mengambil detail user
	// $id -> id daya yang mau di ambil
	function get_detail_user($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('user', $array);
		return $query->result();
	}

	// insert user
	// $data -> array field yang baru
	function insert_user($data)
	{
		$this->db->insert('user', $data);
	}

	// update user
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_user($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete user
	// $id -> id user yang mau di delete
	function delete_user($id)
	{
		$this->db->delete('user', array('id' => $id)); 
	}
}

?>