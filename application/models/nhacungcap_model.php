<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Nhacungcap_model extends CI_Model{

	var $table = 'nhacungcap';

	function __construct(){
		parent:: __construct();
	}

	function get_nhacungcap(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Tenncc, $Diachi, $Sdt, $Email)
	{
		$data = array(
			"Tenncc" => $Tenncc,
			"Diachi" => $Diachi,
			"Sdt" => $Sdt,
			"Email" => $Email
			);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Tenncc, $Diachi, $Sdt, $Email)
	{
		$data = array(
			"Tenncc" => $Tenncc,
			"Diachi" => $Diachi,
			"Sdt" => $Sdt,
			"Email" => $Email
		);
		$this->db->where("Id", $Id);
		$query = $this->db->update($this->table, $data);
		if($this->db->affected_rows() > 0) return TRUE;
		return FALSE;
	}

	function delete($id)
	{
		$this->db->delete($this->table,array('id'=>$id));
		if($this->db->affected_rows() > 0 ) return TRUE;
		return FALSE;
	}
}