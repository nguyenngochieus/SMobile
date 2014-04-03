<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class user extends Public_Controller{

	public $data;

	function __construct(){
		parent:: __construct();		
		$this->data['page'] = '';				
		$this->data['Username'] = $this->login->getLoginUsername();  
		$this->data['Name'] = $this->login->GetName();
		$this->data['UserID'] = $this->login->GetUserID();
		$this->data['Quyen'] = $this->login->GetUserRole();
	}

	function index(){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Trang chủ';
			$this->data['page'] = 'trangchu';
			$this->load->view('include/header',$this->data);
			$this->load->view('home/index');			
			$this->load->view('include/footer');
		}
		else
			return redirect(base_url('dangnhap'));
	}

	function taikhoan(){
			$this->load->view('include/header',$this->data);
			$this->load->view('user/taikhoan');
			$this->load->view('include/footer',$this->data);
	}

	function doimatkhau(){
			$this->load->view('include/header',$this->data);
			$this->load->view('user/doimatkhau');
			$this->load->view('include/footer',$this->data);
	}
	

}