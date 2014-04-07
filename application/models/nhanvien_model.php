<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Nhanvien_model extends CI_Model{

	var $table = 'nhanvien';

	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->helper('security');
	}

	function get_nhanvien(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function edit($id){
		
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Tennhanvien, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Hinh)
	{
		$Matkhau = do_hash($Matkhau, 'md5');
		$data = array(
			"Tennhanvien" => $Tennhanvien,
			"Tendangnhap" => $Tendangnhap,
			"Matkhau"	=>	$Matkhau,
			"Email" => $Email,
			"Namsinh" => $Namsinh,
			"Gioitinh" => $Gioitinh,
			"CMND" => $CMND,
			"SDT" => $SDT,
			"Quyen"	=>	$Quyen
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Tennhanvien, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Hinh)
	{
		$data = array(
			"Id" => $Id,
			"Tennhanvien" => $Tennhanvien,
			"Tendangnhap" => $Tendangnhap,
			"Matkhau"	=>	$Matkhau,
			"Email" => $Email,
			"Namsinh" => $Namsinh,
			"Gioitinh" => $Gioitinh,
			"CMND" => $CMND,
			"SDT" => $SDT,
			"Quyen"	=>	$Quyen
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