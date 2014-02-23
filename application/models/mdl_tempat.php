<?php

class Mdl_tempat extends CI_Model {

	private $_table = 'tempat';
	
	function __contruct()
	{
		parent::__contruct();
	}

	//mengambil semua list tempat
	function get_list_tempat()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	function get_count_tempat(){
		$query = $this->db->count_all($this->_table);
		return $query;
	}

	function get_tempat_paging($limit,$start,$order_by,$ordermet){
		$this->db->limit($limit,$start);
		$this->db->order_by($order_by,$ordermet);
		$query = $this->db->get($this->_table);

		if ($query->num_rows>0) {
			foreach ($query->result() as $key) {
				$data[] = $key;
			}
			return $data;
		}else{
			return 0;
		}
	}

	//mengambil tempat berdasarkan limit order by date
	function get_list_tempat_limit_date($limit){
		$this->db->limit($limit);
		$this->db->order_by('date_input','desc');
		$query = $this->db->get($this->_table);
		return $query;
	}

	//mengambil detail tempat bedasarkan id
	function get_detail_tempat($id)
	{
		$array = array('id' => $id);
		$query = $this->db->get_where($this->_table, $array);
		return $query->result();
	}

	//insert tempat
	function insert_tempat($data)
	{
		$this->db->insert($this->_table, $data);
	}

	//update tempat
	function update_tempat($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($data);
	}


	//delete tempat
	function delete_tempat($id)
	{
		$this->db->delete($this->_table, array('id' => $id)); 
	}
}

?>