<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Binhluan_model extends CI_Model{

	var $table = 'binhluan';

	function __construct(){
		parent:: __construct();
	}

	function get_binhluan(){		
		$query = $this->db->query("SELECT B.ID, S.TENSANPHAM, N.TENNGUOIDUNG, B.NOIDUNG, B.THOIGIAN FROM sanpham S, nguoidung N, binhluan B WHERE S.ID = B.MASANPHAM AND N.ID = B.MAKHACHHANG ORDER BY B.THOIGIAN DESC");
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->query("SELECT B.ID, B.MASANPHAM, B.MAKHACHHANG, S.TENSANPHAM, N.TENNGUOIDUNG, B.NOIDUNG, B.THOIGIAN FROM sanpham S, nguoidung N, binhluan B WHERE S.ID = B.MASANPHAM AND N.ID = B.MAKHACHHANG AND B.ID = ".$id);
		return $query->result_array();		
	}

	function update($Id, $Noidung)
	{
		$data = array(
			"Id" => $Id,
			"Noidung"	=>	$Noidung,			
		);		
		$query = $this->db->query("UPDATE binhluan SET NOIDUNG = '".$Noidung."' WHERE ID = ".$Id);		
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