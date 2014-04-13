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

	public function FMenu1($lang = "") 
	{
		$query =  $this->db->query('SELECT S.LOAI, S.NHACUNGCAP, N.TENNCC AS TENNCC FROM SANPHAM S, NHACUNGCAP N WHERE LOAI = 1 AND N.ID = S.NHACUNGCAP GROUP BY S.NHACUNGCAP ORDER BY TENNCC ASC');
		return $query->result();
	}

	public function FMenu2($lang = "") 
	{
		$query =  $this->db->query('SELECT S.LOAI, S.NHACUNGCAP, N.TENNCC AS TENNCC FROM SANPHAM S, NHACUNGCAP N WHERE LOAI = 2 AND N.ID = S.NHACUNGCAP GROUP BY S.NHACUNGCAP ORDER BY TENNCC ASC');
		return $query->result();
	}

	public function FMenu3($lang = "") 
	{
		$query =  $this->db->query('SELECT S.LOAI, S.NHACUNGCAP, N.TENNCC AS TENNCC FROM SANPHAM S, NHACUNGCAP N WHERE LOAI = 3 AND N.ID = S.NHACUNGCAP GROUP BY S.NHACUNGCAP ORDER BY TENNCC ASC');
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

	public function GetSanPhamTheoLoai($id,$lang = "",$sort='',$number, $offset)
	{
		switch ($sort) {
			case 'price':
				$sort = "DONGIA";
				break;
			case 'price_desc':
				$sort = "DONGIA DESC";
				break;
			case 'name':
				$sort = "TENSANPHAM";
				break;
			case 'name_desc':
				$sort = "TENSANPHAM DESC";
				break;			
			default: $sort = "ID";break;
		}
		
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE LOAI = '.$id[0].' AND NHACUNGCAP = '.$id[1].' ORDER BY '.$sort.' LIMIT '.$number.' , '.$offset);
		else
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE LOAI = '.$id[0].' ORDER BY '.$sort.' LIMIT '.$number.' , '.$offset);
		return $query->result();
	}

	public function count_SanPhamTheoLoai($id)
	{		
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT * FROM SANPHAM WHERE LOAI = '.$id[0].' AND NHACUNGCAP = '.$id[1]);	
		else
			$query =  $this->db->query('SELECT * FROM SANPHAM WHERE LOAI = '.$id[0]);
		return $query->num_rows();
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

	public function GetSanPhamTheoNhaCungCap($id,$lang = "",$sort,$number, $offset)
	{
		switch ($sort) {
			case 'price':
				$sort = "DONGIA";
				break;
			case 'price_desc':
				$sort = "DONGIA DESC";
				break;
			case 'name':
				$sort = "TENSANPHAM";
				break;
			case 'name_desc':
				$sort = "TENSANPHAM DESC";
				break;			
			default: $sort = "ID";break;
		}
		
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE NHACUNGCAP = '.$id[0].' AND LOAI = '.$id[1].' ORDER BY '.$sort.' LIMIT '.$number.' , '.$offset);
		else
			$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE NHACUNGCAP = '.$id[0].' ORDER BY '.$sort.' LIMIT '.$number.' , '.$offset);
		return $query->result();
	}

	public function count_SanPhamTheoNCC($id)
	{		
		if(isset($id[1]) && $id[1] != '')
			$query =  $this->db->query('SELECT * FROM SANPHAM WHERE NHACUNGCAP = '.$id[0].' AND LOAI = '.$id[1]);	
		else
			$query =  $this->db->query('SELECT * FROM SANPHAM WHERE NHACUNGCAP = '.$id[0]);
		return $query->num_rows();
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
		$query =  $this->db->query('SELECT ID, TENSANPHAM,LOAI ,NHACUNGCAP, DONGIA, HINH, MOTA'.$lang.' AS MOTA, (SELECT B2.TENLOAI'.$lang.' FROM LOAISANPHAM B2 WHERE B1.LOAI = B2.ID ) LOAISANPHAM , (SELECT B3.TENNCC FROM nhacungcap B3 WHERE B1.NHACUNGCAP = B3.ID ) TENNHACUNGCAP FROM SANPHAM B1 WHERE ID ='.$id);
		return $query->result();
	}

	public function GetChiTietDT($id)
	{
		$query =  $this->db->query('SELECT * FROM chitietdienthoai WHERE MASANPHAM ='.$id);
		return $query->result();
	}

	public function GetChiTietLT($id)
	{
		$query =  $this->db->query('SELECT * FROM chitietlaptop WHERE MASANPHAM ='.$id);
		return $query->result();
	}

	public function GetChiTietMTB($id)
	{
		$query =  $this->db->query('SELECT * FROM chitietmaytinhbang WHERE MASANPHAM ='.$id);
		return $query->result();
	}

	public function GetDanhGia($id)
	{
		$query =  $this->db->query('SELECT * FROM danhgia WHERE MASANPHAM ='.$id);
		return $query->result();		
	}

	public function GetSanPhamCungLoai($id, $idloai, $idncc, $lang = "")
	{
		$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM  WHERE LOAI = '.$idloai.' AND NHACUNGCAP = '.$idncc.' AND Id <> '.$id.' order by ID ');
		return $query->result();
	}

	public function TimKiem($filter_name,$lang = "",$sort, $number, $offset,$filter_price_from,$filter_price_to,$filter_category_id,$filter_description)
	{
		switch ($sort) {
			case 'price':
				$sort = "DONGIA";
				break;
			case 'price_desc':
				$sort = "DONGIA DESC";
				break;
			case 'name':
				$sort = "TENSANPHAM";
				break;
			case 'name_desc':
				$sort = "TENSANPHAM DESC";
				break;			
			default: $sort = "ID";break;
		}	
		if($filter_name != '')
			if($filter_description == 'false')
				$filter_name = ' AND TENSANPHAM LIKE "%'.$filter_name.'%"';
			else
				$filter_name = ' AND MOTA LIKE "%'.$filter_name.'%"';
		if($filter_price_from != '')
			$filter_price_from = " AND DONGIA > ".$filter_price_from;
		if($filter_price_to != '')
			$filter_price_to = " AND DONGIA < ".$filter_price_to;
		if($filter_category_id > 0)
			$filter_category_id = " AND LOAI = ".$filter_category_id;
		else
			$filter_category_id = '';
		$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE ID > 0 '.$filter_name.$filter_price_from.$filter_price_to.$filter_category_id.' ORDER BY '.$sort.' LIMIT '.$number.' , '.$offset);
		return $query->result();
	}

		public function count_TimKiem($filter_name,$lang = "",$sort,$filter_price_from,$filter_price_to,$filter_category_id,$filter_description)
	{
		switch ($sort) {
			case 'price':
				$sort = "DONGIA";
				break;
			case 'price_desc':
				$sort = "DONGIA DESC";
				break;
			case 'name':
				$sort = "TENSANPHAM";
				break;
			case 'name_desc':
				$sort = "TENSANPHAM DESC";
				break;			
			default: $sort = "ID";break;
		}	
		if($filter_name != '')
			if($filter_description == 'false')
				$filter_name = ' AND TENSANPHAM LIKE "%'.$filter_name.'%"';
			else
				$filter_name = ' AND MOTA LIKE "%'.$filter_name.'%"';
		if($filter_price_from != '')
			$filter_price_from = " AND DONGIA > ".$filter_price_from;
		if($filter_price_to != '')
			$filter_price_to = " AND DONGIA < ".$filter_price_to;
		if($filter_category_id > 0)
			$filter_category_id = " AND LOAI = ".$filter_category_id;
		else
			$filter_category_id = '';
		$query =  $this->db->query('SELECT ID, TENSANPHAM, DONGIA, HINH, MOTA'.$lang.' AS MOTA FROM SANPHAM WHERE ID > 0 '.$filter_name.$filter_price_from.$filter_price_to.$filter_category_id.' ORDER BY '.$sort);
		return $query->result();
	}


	public function cut($str, $len) {
	    $str = trim($str);
	    if (strlen($str) <= $len) return $str;
	    $str = substr($str, 0, $len);
	    if ($str != "") {
	        if (!substr_count($str, " ")) return $str." ...";
	        while (strlen($str) && ($str[strlen($str) - 1] != " ")) $str = substr($str, 0, -1);
	        $str = substr($str, 0, -1)." ...";
	    }
	    return $str;
	}

	public function update_view($id)
	{
		$query =  $this->db->query('UPDATE danhgia SET LUOTXEM = LUOTXEM + 1 WHERE MASANPHAM = '.$id);
	}

	public function GetTinKhuyenMai()
	{
		$query =  $this->db->query('SELECT * FROM TINTUC WHERE LOAITIN = 1 ORDER BY NGAYDANG DESC LIMIT 4');
		return $query->result();
	}

	public function GetTinCongNghe()
	{
		$query =  $this->db->query('SELECT * FROM TINTUC WHERE LOAITIN = 2 ORDER BY NGAYDANG DESC LIMIT 4');
		return $query->result();
	}

	function thongke_tintuc_binhluan_danhgia()
	{
		$query = $this->db->query('SELECT COUNT(*) AS TINTUC, (SELECT COUNT(*) FROM binhluan) AS BINHLUAN, (SELECT SUM(LUOTDANHGIA) FROM danhgia) AS DANHGIA  FROM tintuc');
		return $query->result();		
	}
}