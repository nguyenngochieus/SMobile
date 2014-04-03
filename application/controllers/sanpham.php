<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sanpham extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->data['page'] = 'sanpham';
	}	

	public function loaisanpham($url)
	{	
		$arr = explode('-',$url);
		$ma = current($arr);		
		if(isset($arr[1]) && $arr[1] != '')		
			$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($arr[1],$this->data['lang_db'])->TEN;
		else
			$this->data['TenNhaCungCap'] = "";
		$this->data['idLoai'] = $ma;		
		$this->data['TenLoai'] = $this->public_model->GetTenLoai($ma,$this->data['lang_db']);
		$this->data['result'] = $this->public_model->GetSanPhamTheoLoai($arr,$this->data['lang_db']);
		$this->data['NhaCungCap'] = $this->public_model->GetNhaCungCapTheoLoai($arr);
		$this->data['page'] = 'sanpham'.$this->data['idLoai'];
		$this->load->view('include/header',$this->data);
		$this->load->view('product/loaisanpham',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function nhacungcap($url)
	{	
		$arr = explode('-',$url);
		$ma = current($arr);
		if(isset($arr[1]) && $arr[1] != '')
		{
			$this->data['idLoai'] = $arr[1];
			$this->data['TenLoai'] = $this->public_model->GetTenloai($arr[1],$this->data['lang_db'])->TEN;
		}		
		else
			$this->data['TenLoai'] = "";
		$this->data['idNhaCungCap'] = $ma;	
		$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($ma,$this->data['lang_db']);
		$this->data['result'] = $this->public_model->GetSanPhamTheoNhaCungCap($arr,$this->data['lang_db']);
		$this->data['Loai'] = $this->public_model->GetLoaiTheoNhaCungCap($ma,$this->data['lang_db']);
		$this->data['page'] = 'sanpham'.$this->data['idLoai'];
		$this->load->view('include/header',$this->data);
		$this->load->view('product/nhacungcap',$this->data);
		$this->load->view('include/footer',$this->data);
	}
	
	
	public function chitiet($ma)
	{
		$this->data['result'] = $this->public_model->GetChiTietSP($ma,$this->data['lang_db']);
		if(count($this->data['result']) == 0 ) echo redirect(base_url());
		$this->data['SPCungLoai'] = $this->public_model->GetSanPhamCungLoai($ma,$this->data['result'][0]->LOAI,$this->data['lang_db']);
		$this->data['page'] = 'sanpham'.$this->data['idLoai'];
		$this->load->view('include/header',$this->data);
		$this->load->view('product/chitiet',$this->data);
		$this->load->view('include/footer',$this->data);
	}

}