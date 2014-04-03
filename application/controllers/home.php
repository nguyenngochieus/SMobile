<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->data['page'] = 'trangchu';				
		$this->data['Username'] = $this->login->getLoginUsername();  
		$this->data['Name'] = $this->login->GetName();
		$this->data['UserID'] = $this->login->GetUserID();
		$this->data['Quyen'] = $this->login->GetUserRole();
	}

	public function index()
	{
		$this->data['SanPhamMoi'] = $this->public_model->GetSanPhamMoi($this->data['lang_db']);
		$this->data['SanPhamBanChay'] = $this->public_model->GetSanPhamBanChay($this->data['lang_db']);
		$this->load->view('include/header',$this->data);
		$this->load->view('home/index',$this->data);
		$this->load->view('include/footer',$this->data);
	}
}