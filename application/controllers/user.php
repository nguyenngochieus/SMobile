<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class user extends Public_Controller{

	public $data;

	function __construct(){
		parent:: __construct();	
	}

	function index(){
		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			if($role == 3)				
			{
				redirect(base_url('user/taikhoan'));
			}
			else redirect(base_url('admin'));
		}
		else
			return redirect(base_url('dangnhap'));
	}

	function taikhoan(){
		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			if($role == 3)				
			{
				$this->load->view('include/header',$this->data);
				$this->load->view('user/taikhoan');
				$this->load->view('user/usermenu',$this->data);
				$this->load->view('include/footer',$this->data);
			}
			else redirect(base_url('admin'));
		}
		else
			return redirect(base_url('dangnhap'));
	}

}