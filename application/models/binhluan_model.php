<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Binhluan_model extends CI_Model{

	var $table = 'binhluan';

	function __construct(){
		parent:: __construct();
	}

	function get_binhluan(){		
		$query = $this->db->query("SELECT B.*, S.TENSANPHAM FROM sanpham S, binhluan B WHERE S.ID = B.MASANPHAM ORDER BY B.THOIGIAN DESC");
		return $query->result_array();
	}

	function get_binhluan_sp($id){		
		$query = $this->db->query("SELECT B.*, S.TENSANPHAM FROM sanpham S, binhluan B WHERE S.ID = B.MASANPHAM AND S.ID =".$id." ORDER BY B.THOIGIAN DESC");
		return $query->result_array();
	}

	function edit($id){
		
		$query = $this->db->query("SELECT B.*, S.TENSANPHAM FROM sanpham S, binhluan B WHERE S.ID = B.MASANPHAM AND B.ID = ".$id);
		return $query->result_array();		
	}

	function insert($MASANPHAM, $TENKHACHHANG, $EMAIL, $NOIDUNG)
	{
		$Matkhau = do_hash($Matkhau, 'md5');
		$data = array(
			"MASANPHAM" => $MASANPHAM,
			"TENKHACHHANG" => $TENKHACHHANG,
			"EMAIL" => $EMAIL,
			"NOIDUNG" => $NOIDUNG,
			"THOIGIAN" => date('Y-m-d',time()),						
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Noidung)
	{
		$data = array(
			"Id" => $Id,
			"Noidung"	=>	$Noidung,			
		);					

		$this->db->trans_start();
		$query = $this->db->query("UPDATE binhluan SET NOIDUNG = '".$Noidung."' WHERE ID = ".$Id);							
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
			return FALSE;
		else return TRUE;
	}

	function delete($id)
	{
		$this->db->delete($this->table,array('id'=>$id));
		if($this->db->affected_rows() > 0 ) return TRUE;
		return FALSE;
	}
}