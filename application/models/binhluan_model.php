//Test commit by Hi?u
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Binhluan_model extends CI_Model{

	var $table = 'binhluan';

	function __construct(){
		parent:: __construct();
	}

	function get_binhluan(){		
		$query = $this->db->query("SELECT B.ID, S.TENSANPHAM, N.TENNGUOIDUNG, B.NOIDUNG, B.THOIGIAN FROM sanpham S, nguoidung N, binhluan B WHERE S.ID = B.MASANPHAM AND N.ID = B.MAKHACHHANG");
		return $query->result_array();
	}

	function edit($id){
		echo $id;
		$query = $this->db->get_where($this->table,array('ID'=>$id));
		return $query->result_array();
	}

	function insert($Masanpham, $Makhachhang, $Noidung, $Thoigian)
	{			
		$data = array(
			"Masanpham" => $Masanpham,
			"Makhachhang" => $Makhachhang,
			"Noidung"	=>	$Noidung,
			"Thoigian" => $Thoigian			
		);
		$this->db->insert($this->table, $data);
		if($this->db->insert_id() > 0) return TRUE;
		return FALSE;
	}

	function update($Id, $Masanpham, $Makhachhang, $Noidung, $Thoigian)
	{
		$data = array(
			"Id" => $Id,
			"Masanpham" => $Masanpham,
			"Makhachhang" => $Makhachhang,
			"Noidung"	=>	$Noidung,
			"Thoigian" => $Thoigian	
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