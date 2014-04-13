<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tintuc extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->data['page'] = 'tintuc';				
	}

	public function index()
	{
		$this->data['TinKhuyenMai'] = $this->public_model->GetTinKhuyenMai($this->data['lang_db']);
		$this->data['TinCongNghe'] = $this->public_model->GetTinCongNghe($this->data['lang_db']);
		$this->data['SanPhamMoi'] = $this->public_model->GetSanPhamMoi($this->data['lang_db']);
		$this->data['SanPhamBanChay'] = $this->public_model->GetSanPhamBanChay($this->data['lang_db']);		
		$this->load->view('include/header',$this->data);
		$this->load->view('home/index',$this->data);
		$this->load->view('include/footer',$this->data);
	}
}