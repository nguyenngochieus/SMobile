<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends Public_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['SanPhamMoi'] = $this->public_model->GetSanPhamMoi($this->data['lang_db']);
		$this->load->view('include/header',$this->data);
		$this->load->view('home/index',$this->data);
		$this->load->view('include/footer',$this->data);
	}
}