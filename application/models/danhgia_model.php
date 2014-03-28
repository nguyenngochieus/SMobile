<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Danhgia_model extends CI_Model{

	var $table = 'danhgia';

	function __construct(){
		parent:: __construct();
	}

	function get_danhgia(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Masanpham, $Luotxem, $Luotmua, $Luotdanhgia, $Tongdiem, $Diemdanhgia)
	{
		$Matkhau = do_hash($Matkhau, 'md5');
		$data = array(
			"Masanpham" => $Masanpham,
			"Luotxem" => $Luotxem,
			"Luotmua"	=>	$Luotmua,
			"Luotdanhgia" => $Luotdanhgia,
			"Tongdiem" => $Tongdiem,
			"Diemdanhgia" => $Diemdanhgia			
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Masanpham, $Luotxem, $Luotmua, $Luotdanhgia, $Tongdiem, $Diemdanhgia)
	{
		$data = array(
			"Id" => $Id,
			"Masanpham" => $Masanpham,
			"Luotxem" => $Luotxem,
			"Luotmua"	=>	$Luotmua,
			"Luotdanhgia" => $Luotdanhgia,
			"Tongdiem" => $Tongdiem,
			"Diemdanhgia" => $Diemdanhgia
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