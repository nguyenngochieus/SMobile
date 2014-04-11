<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class thongtindonhang_model extends CI_Model{

	var $table = 'thongtindathang';

	function __construct(){
		parent:: __construct();
	}

	function get_thongtindathang(){		
		$query = $this->db->query('SELECT B1.*, B2.TENNGUOIDUNG FROM THONGTINDATHANG B1, NGUOIDUNG B2 WHERE B1.MAKHACHHANG = B2.ID ORDER BY NGAYDATHANG');
		return $query->result_array();
	}

	function get_lichsudathang($Id){
		$query = $this->db->query('SELECT B1.*, B2.TENNGUOIDUNG,(SELECT SUM(SOLUONG) FROM DONHANG WHERE MADATHANG = B1.ID ) AS SOSANPHAM FROM THONGTINDATHANG B1, NGUOIDUNG B2 WHERE B1.MAKHACHHANG = B2.ID AND B1.MAKHACHHANG = '.$Id.' ORDER BY NGAYDATHANG');
		return $query->result_array();
	}

	function get_id_thongtindathang($Maxacnhan){		
		$query = $this->db->query('SELECT ID FROM THONGTINDATHANG WHERE MAXACNHAN ='.$Maxacnhan);
		return $query->row();
	}

	function get_thongtindathang_id($id){		
		$query = $this->db->query('SELECT B1.*, B2.TENNGUOIDUNG, B2.EMAIL, B2.SDT AS SDT_TT, B2.DIACHI AS DIACHI_TT FROM THONGTINDATHANG B1, NGUOIDUNG B2 WHERE B1.MAKHACHHANG = B2.ID AND B1.ID = '.$id.' ORDER BY NGAYDATHANG');
		return $query->row();
	}

	function get_giohang_id($id){		
		$query = $this->db->query('SELECT B1.*, (SELECT B2.TENLOAI FROM LOAISANPHAM B2 WHERE B1.LOAI = B2.ID ) AS LOAISANPHAM, B3.*  FROM SANPHAM B1, DONHANG B3 WHERE B3.MASANPHAM = B1.ID AND MADATHANG = '.$id);
		return $query->result();
	}

	function insert($Tongtienhang, $Tennguoinhan, $Diachi, $SDT, $Makhachhang, $Phuongthucvanchuyen,$Ghichu, $Maxacnhan)
	{
		if($Phuongthucvanchuyen == 0){
			$Thanhtien = $Tongtienhang;}
		else{
			$Thanhtien = $Tongtienhang + 50000;}
		$data = array(
			"Ngaydathang" =>  date('Y-m-d',time()),
			"Tongtienhang" => $Tongtienhang,
			"Tinhtrang"	=> 0,
			"Tennguoinhan" => $Tennguoinhan,
			"Diachi" => $Diachi,
			"SDT" => $SDT,
			"Makhachhang" => $Makhachhang,
			"Manvgiaohang" => 1,
			"Phuongthucthanhtoan" => 1,
			"Phuongthucvanchuyen"	=>	$Phuongthucvanchuyen,
			"Thanhtien" => $Thanhtien,
 			"Ghichu" => $Ghichu,
 			"Maxacnhan" => $Maxacnhan
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Ngaydathang, $Tongtienhang, $Tinhtrang, $Tennguoinhan, $Diachi, $SDT, $Makhachhang, $Manvgiaohang, $Phuongthucthanhtoan, $Phuongthucvanchuyen)
	{		
		$data = array(
			"Ngaydathang" => $Ngaydathang,
			"Tongtienhang" => $Tongtienhang,
			"Tinhtrang"	=>	$Tinhtrang,
			"Tennguoinhan" => $Tennguoinhan,
			"Diachi" => $Diachi,
			"SDT" => $SDT,
			"Makhachhang" => $Makhachhang,
			"Manvgiaohang" => $Manvgiaohang,
			"Phuongthucthanhtoan" => $Phuongthucthanhtoan,
			"Phuongthucvanchuyen"	=>	$Phuongthucvanchuyen
		);		
		$this->db->trans_start();
		$this->db->where("Id", $Id);
		$query = $this->db->update($this->table, $data);							
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
			return FALSE;
		else return TRUE;		
	}

}