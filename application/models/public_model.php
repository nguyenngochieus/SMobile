<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class public_model extends CI_Model {
		
	function __construct()
	{
		parent::__construct();
	}
	public function GetMenu($lang = "") 
	{
		$query =  $this->db->query('SELECT ID, TENLOAI'.$lang.' AS TEN FROM LOAISANPHAM');
		return $query->result();
	}

	public function GetTenLoai($id, $lang = "") 
	{
		$query =  $this->db->query('SELECT TENLOAI'.$lang.' AS TEN FROM LOAISANPHAM WHERE ID ='.$id);
		return $query->row();
	}

	public function GetTenNhaCungCap($id, $lang = "") 
	{
		$query =  $this->db->query('SELECT TENNCC'.$lang.' AS TEN FROM NHACUNGCAP WHERE ID ='.$id);
		return $query->row();
	}

	public function GetSanPhamTheoLoai($id,$lang = "")
	{
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE LOAI = '.$id[0].' AND NHACUNGCAP = '.$id[1].' ORDER BY ID ');
		else
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE LOAI = '.$id[0].' ORDER BY ID ');
		return $query->result();
	}

	public function GetNhaCungCapTheoLoai($id)
	{
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT B2.ID, B2.TENNCC FROM SANPHAM B1, NHACUNGCAP B2 WHERE B1.LOAI = '.$id[0].' AND B1.NHACUNGCAP = B2.ID AND B1.NHACUNGCAP <> '.$id[1].' GROUP BY B2.TENNCC ');
		else
			$query =  $this->db->query('SELECT B2.ID, B2.TENNCC FROM SANPHAM B1, NHACUNGCAP B2 WHERE B1.LOAI = '.$id[0].' AND B1.NHACUNGCAP = B2.ID GROUP BY B2.TENNCC ');
		return $query->result();
	}

	public function GetLoaiTheoNhaCungCap($id, $lang = "")
	{
		$query =  $this->db->query('SELECT B2.ID, B2.TENLOAI'.$lang.' AS TENLOAI FROM SANPHAM B1, LOAISANPHAM B2 WHERE B1.NHACUNGCAP = '.$id.' AND B1.LOAI = B2.ID GROUP BY B2.TENLOAI ');
		return $query->result();
	}

	public function GetSanPhamTheoNhaCungCap($id,$lang = "")
	{
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE NHACUNGCAP = '.$id[0].' AND LOAI = '.$id[1].' ORDER BY ID ');
		else
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE NHACUNGCAP = '.$id[0].' ORDER BY ID ');
		return $query->result();
	}

	public function GetSanPhamMoi($lang = "") 
	{
		$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM ORDER BY ID DESC LIMIT 0 , 7');
		return $query->result();
	}

	public function GetSanPhamBanChay($lang = "") 
	{
		$query =  $this->db->query('SELECT B1.ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM B1, DONHANG B2 WHERE B1.ID = B2.MASANPHAM GROUP BY MASANPHAM ORDER BY COUNT(*) DESC LIMIT 0 , 7');
		return $query->result();
	}

	public function GetChiTietSP($id, $lang = "")
	{
		$query =  $this->db->query('SELECT ID, TENSANPHAM,LOAI, DONGIA, HINH, MOTA'.$lang.' AS MOTA, (SELECT B2.TENLOAI'.$lang.' FROM LOAISANPHAM B2 WHERE B1.LOAI = B2.ID ) LOAISANPHAM , (SELECT B3.TENNCC FROM nhacungcap B3 WHERE B1.NHACUNGCAP = B3.ID ) TENNHACUNGCAP FROM SANPHAM B1 WHERE ID ='.$id);
		return $query->result();
	}

	public function GetSanPhamCungLoai($id, $idloai, $lang = "")
	{
		$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM  WHERE LOAI = '.$idloai.' AND Id <> '.$id.' order by ID ');
		return $query->result();
	}

}