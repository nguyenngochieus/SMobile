<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class dangnhap extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
		$this->data['loi'] = "";
	}

	function index($reg = ""){
		if(isset($reg) && $reg != "")
			$this->data['success'] = "Đăng ký thành công! Mời bạn đăng nhập...";
		$this->data['title'] = 'Đăng nhập';
		$this->data['page'] = 'dangnhap';
		$chk = $this->login->checkLogin();		
		if($chk==1||$chk==2)
		{
				return redirect(base_url('admin'));
		}
		if(isset($_POST['username'])&&($_POST['username']!=NULL)&&isset($_POST['password'])&&($_POST['password']!=NULL))
		{
			$remember = FALSE;
			if(isset($_POST['remember'])&&($_POST['remember']==1)) $remember = TRUE;			
			$arr = array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$tmp = $this->login->dangnhap($arr, $remember);
			if($tmp==1)
			{
					return redirect(base_url('admin.html')); 
			}
			else
			{
				switch($tmp)
				{
					case -3 : $loi = 'Username hoặc Password không đúng! Vui lòng thử lại'; break;
					case -7 : $loi = 'Tình trạng tài khoản không hoạt động'; break;
					case -4 : $loi = 'Bạn không có quyền truy cập vào trang này'; break;
					case -6 : $loi = 'Username hoặc Password không đúng! Vui lòng thử lại'; break;
					default: $loi = ''; break;
				}
				$this->data['loi'] = 	$loi;
				$this->load->view('admin/index',$this->data);
			}
		}
		else $this->load->view('admin/index',$this->data);
	}

}