<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Tintuc_model extends CI_Model{

	var $table = 'tintuc';

	function __construct(){
		parent:: __construct();
	}

	function get_tintuc(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Tieude, $Loaitin, $Mota, $Noidung, $Ngaydang, $Hinh, $Tacgia)
	{
		$data = array(
			"Tieude" => $Tieude,
			"Loaitin" => $Loaitin,
			"Mota"	=>	$Mota,
			"Noidung" => $Noidung,
			"Ngaydang" => $Ngaydang,
			"Hinh" => $Hinh,
			"Tacgia" => $Tacgia	
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Tieude, $Loaitin, $Mota, $Noidung, $Ngaydang, $Hinh, $Tacgia)
	{
		$data = array(
			"Id" => $Id,
			"Tieude" => $Tieude,
			"Loaitin" => $Loaitin,
			"Mota"	=>	$Mota,
			"Noidung" => $Noidung,
			"Ngaydang" => $Ngaydang,
			"Hinh" => $Hinh,
			"Tacgia" => $Tacgia	
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