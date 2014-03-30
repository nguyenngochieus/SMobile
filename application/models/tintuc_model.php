<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Tintuc_model extends CI_Model{

	var $table = 'tintuc';

	function __construct(){
		parent:: __construct();
	}

	function get_tintuc(){		
		$query = $this->db->query("SELECT T.ID, T.TIEUDE, T.LOAITIN, T.MOTA, T.NOIDUNG, T.NGAYDANG, T.HINH, T.TACGIA, N.TENNGUOIDUNG, L.LOAITINTUC FROM tintuc T,nguoidung N, loaitintuc L WHERE T.TACGIA = N.ID AND T.LOAITIN = L.ID ORDER BY T.NGAYDANG DESC");
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->query("SELECT T.ID, T.TIEUDE, T.LOAITIN, T.MOTA, T.NOIDUNG, T.NGAYDANG, T.HINH, T.TACGIA, N.TENNGUOIDUNG, L.LOAITINTUC FROM tintuc T,nguoidung N, loaitintuc L WHERE T.TACGIA = N.ID AND T.LOAITIN = L.ID AND T.ID = ".$id);
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