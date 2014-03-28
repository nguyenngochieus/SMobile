<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Hoadon_model extends CI_Model{

	var $table = 'dathang';

	function __construct(){
		parent:: __construct();
	}

	function get_hoadon(){		
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function insert($Madathang, $Masanpham, $Soluong)
	{
		$data = array(
			"Madathang" => $Madathang,
			"Masanpham" => $Masanpham,
			"Soluong"	=>	$Soluong			
		);
		$q = $this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}
}