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

	function get_chitiet_tintuc($id){		
		$query = $this->db->query("SELECT T.*, N.TENNGUOIDUNG, L.LOAITINTUC FROM tintuc T,nguoidung N, loaitintuc L WHERE T.TACGIA = N.ID AND T.LOAITIN = L.ID AND T.ID = ".$id);
		return $query->row();
	}

	function get_loaitin($id){
		$query = $this->db->query("SELECT LOAITIN FROM tintuc WHERE ID = ".$id);	
		return $query->row();
	}

	function get_tinlienquan($id,$loai){
		$query = $this->db->query("SELECT TIEUDE, ID, MOTA FROM tintuc T WHERE T.ID <> ".$id." AND LOAITIN = ".$loai." ORDER BY T.NGAYDANG DESC LIMIT 4");
		return $query->result();
	}

	function edit($id){
		
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

		$this->db->trans_start();
		$this->db->where("Id", $Id);
		$query = $this->db->update($this->table, $data);
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