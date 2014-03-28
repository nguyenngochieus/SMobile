<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Nguoidung_model extends CI_Model{

	var $table = 'nguoidung';

	function __construct(){
		parent:: __construct();
		$this->load->helper('security');
	}

	function get_nguoidung(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien)
	{		
		$Matkhau = do_hash($Matkhau, 'md5');
		$data = array(
			"Tennguoidung" => $Tennguoidung,
			"Tendangnhap" => $Tendangnhap,
			"Matkhau"	=>	$Matkhau,
			"Email" => $Email,
			"Ngaysinh" => $Namsinh,
			"Gioitinh" => $Gioitinh,
			"CMND" => $CMND,
			"SDT" => $SDT,
			"Quyen"	=>	$Quyen,
			"Trangthai" => $Trangthai,
			"HinhAnh" => $HinhDaiDien
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien)
	{
		$data = array(
			"Tennguoidung" => $Tennguoidung,
			"Tendangnhap" => $Tendangnhap,
			"Matkhau"	=>	$Matkhau,
			"Email" => $Email,
			"Ngaysinh" => $Namsinh,
			"Gioitinh" => $Gioitinh,
			"CMND" => $CMND,
			"SDT" => $SDT,
			"Quyen"	=>	$Quyen,
			"Trangthai" => $Trangthai,
			"HinhAnh" => $HinhDaiDien
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