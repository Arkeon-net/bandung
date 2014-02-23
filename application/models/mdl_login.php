<?php

class Mdl_login extends CI_Model {
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list login
	function get_list_login()
	{
		$query = $this->db->get('login');
		return $query->result();
	}

	// mengambil detail login
	// $id -> id daya yang mau di ambil
	function get_detail_login($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where('login', $array);
		return $query->result();
	}

	// insert login
	// $data -> array field yang baru
	function insert_login($data)
	{
		$this->db->insert('login', $data);
	}

	// update login
	// $id -> id yang mau di update
	// $data -> array field yang mau di update
	function update_login($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}

	// delete login
	// $id -> id login yang mau di delete
	function delete_login($id)
	{
		$this->db->delete('login', array('id' => $id)); 
	}
}

?>