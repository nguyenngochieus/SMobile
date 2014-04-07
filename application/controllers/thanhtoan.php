<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thanhtoan extends Public_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model(array('nguoidung_model','cart_model'));
		$this->data['page'] = 'thanhtoan';
		$this->data['id'] = $this->login->GetUserID();		
		$this->data['phivanchuyen'] = 0;	
		$this->data['comment'] = '';			
	}

	public function index()
	{
		$this->load->view('include/header',$this->data);
		$this->load->view('thanhtoan/index');
		$this->load->view('include/footer',$this->data);
	}

	public function test()
	{
		if($this->cart->contents())
		{
			$this->load->view('include/header',$this->data);
			$this->load->view('thanhtoan/thanhtoan');
			$this->load->view('include/footer',$this->data);
		}
		else
		{
			redirect(base_url());
		}
	}

	public function login()
	{		
			$this->load->view('thanhtoan/login');
	}

	public function address()
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			$this->data['id'] = $this->login->GetUserID();		
			$this->data['address'] = $this->nguoidung_model->get_diachi($this->data['id']);						
			$this->load->view('thanhtoan/address',$this->data);
		}
		else
		{
			echo 'Error';
		}
	}

	public function shipping_address()
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			$this->data['id'] = $this->login->GetUserID();		
			$this->data['address'] = $this->nguoidung_model->get_diachi($this->data['id']);						
			$this->load->view('thanhtoan/shipping-address',$this->data);
		}
		else
		{
			echo 'false';
		}
	}

	public function shipping_option()
	{
		$this->load->view('thanhtoan/shipping-option');
	}

	public function confirm($id = 1)
	{
		if($this->cart->contents())
		{
			if($id == 2)
				$this->data['phivanchuyen'] = 50000;
			$this->load->view('thanhtoan/confirm',$this->data);		    
		}
		else
		{
			redirect(base_url().'home');
		}
	}

	public function kiemtrauser()
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}

	public function kiemtralogin()
	{
		if(isset($_POST['username'])&&($_POST['username']!=NULL)&&isset($_POST['password'])&&($_POST['password']!=NULL))
		{
			$remember = FALSE;			
			$arr = array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$tmp = $this->login->dangnhap($arr, $remember);
			if($tmp==1)
			{
				echo 'true';
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
				echo $loi;
			}
		}else{
			echo 'Xin hãy nhập username và password';
		}
		
	}

	public function kiemtradiachi()
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			echo 'true';
		}
		else
		{
			echo 'false';
		}	 
	}

	public function kiemtradiachigiaohang()
	{
		$id = $this->input->post('id',TRUE);
		echo 'true';
	}

	public function kiemtrahinhthucgiaohang()
	{
		$id = $this->input->post('id',TRUE);
		$this->data['comment'] = $this->input->post('comment',TRUE);
		echo $id; 
	}

}