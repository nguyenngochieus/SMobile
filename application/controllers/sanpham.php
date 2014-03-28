<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sanpham extends Public_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->data['title'] = 'Home';        
	}

	public function loaisanpham($ma)
	{		
		$this->data['TenLoai'] = $this->public_model->GetTenLoai($ma,$this->data['lang_db']);
		$this->data['result'] = $this->public_model->GetSanPhamTheoLoai($ma,$this->data['lang_db']);
		$this->data['NhaCungCap'] = $this->public_model->GetNhaCungCapTheoLoai($ma);
		$this->load->view('include/header',$this->data);
		$this->load->view('product/loaisanpham',$this->data);
		$this->load->view('include/footer',$this->data);
	}
	
	
	public function chitiet($ma)
	{
		$this->data['result'] = $this->public_model->GetChiTietSP($ma,$this->data['lang_db']);
		if(count($this->data['result']) == 0 ) echo redirect(base_url());
		$this->data['SPCungLoai'] = $this->public_model->GetSanPhamCungLoai($ma,$this->data['result'][0]->LOAI,$this->data['lang_db']);
		$this->load->view('include/header',$this->data);
		$this->load->view('product/chitiet',$this->data);
		$this->load->view('include/footer',$this->data);
	}

}