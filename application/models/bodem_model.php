<?php

class bodem_model  extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    var $ma;
    var $trinh_duyet;
    var $ip;
    var $thoi_gian;
    var $link;

	function danh_sach($vi_tri, $so_luong)
	{
		$vi_tri = intval($vi_tri);
		$so_luong = intval($so_luong);
		$sql = "SELECT * FROM BODEM LIMIT $vi_tri, $so_luong";
		return $this->db->query($sql)->result_array();
	}
	
	function so_luong()
	{
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM";
		  $arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}

	function so_luong_theo_ngay($ngay)
	{		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$ngay 0:0:0' <= THOIGIAN and THOIGIAN <= '$ngay 23:59:59'";
		  $arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}

	function so_luong_hom_nay()
	{
		$from = date('Y-m-d 0:0:0');
		$to = date('Y-m-d 23:59:59');
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
        $arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}

	function so_luong_hom_qua()
	{		
		$from = date('Y-m-d 0:0:0', strtotime('-1 days'));
		$to = date('Y-m-d 23:59:59', strtotime('-1 days'));
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
     	$arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}

	function so_luong_tuan_nay()	
	{		
		$x = date('N') - 1;						 
		$from = date('Y-m-d 0:0:0', strtotime("-$x days"));
		
		$to = date('Y-m-d 23:59:59');
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
			$arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}
	function so_luong_tuan_truoc()	
	{		
		$x = (date('N') - 1)*2;						 
		$from = date('Y-m-d 0:0:0', strtotime("-$x days"));
		
		$to = date('Y-m-d 23:59:59');
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
			$arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}

	function so_luong_thang_nay()	
	{					 
		$from = date('Y-m-1 0:0:0');		
		$to = date('Y-m-d 23:59:59');
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
		$arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}
	function so_luong_thang_truoc()	
	{					 
		$from = date('Y-m-d 0:0:0',strtotime("-30 days"));		
		$to = date('Y-m-d 23:59:59',strtotime("-30 days"));
		
		$sql = "SELECT COUNT(*) AS NUMBER FROM BODEM WHERE '$from' <= THOIGIAN and THOIGIAN <= '$to'";
		$arr= current($this->db->query($sql)->result_array());
		return $arr['number'];
	}
	
		
	function xem($ma)
	{
		$ma = intval($ma);

		$sql = "SELECT * FROM BODEM WHERE ID = '$ma'";
		return current($this->db->query($sql)->result_array());
	}
	function xoa($ma)
	{
		$ma = intval($ma);

		$sql = "DELETE FROM BODEM WHERE ID = '$ma'";
		
        return $this->db->query($sql);
	}
	function them($trinh_duyet, $ip, $thoi_gian, $link)
	{
		$trinh_duyet = addslashes($trinh_duyet);
		$ip = addslashes($ip);
		$link = addslashes($link);
		$sql = "INSERT INTO BODEM(TRINHDUYET,IP,THOIGIAN,LINK) VALUES ('$trinh_duyet','$ip','$thoi_gian','$link')";
		return $this->db->query($sql);
	}
	function cap_nhat($ma, $trinh_duyet, $ip, $thoi_gian, $link)
	{
		$ma = intval($ma);
		$trinh_duyet = addslashes($trinh_duyet);
		$ip = addslashes($ip);
		$link = addslashes($link);

		$sql ="UPDATE BODEM SET TRINHDUYET= '$trinh_duyet', ip= '$ip', THOIGIAN= '$thoi_gian', link= '$link' WHERE ID = '$ma'";
			return $this->db->query($sql)->result();
	}
   
 }