<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thanhtoan extends Public_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model(array('nguoidung_model','cart_model','thongtindonhang_model','hoadon_model'));
		$this->data['page'] = 'thanhtoan';
		$this->data['id'] = $this->login->GetUserID();	
		$this->data['maxacnhan'] = '';	
		$this->data['phivanchuyen'] = 0;	
		$this->data['ptvc'] = 1;
		$this->data['comment'] = NULL;	
		$this->data['name'] = '';
		$this->data['SDT'] = '';
		$this->data['diachi'] = '';		
	}

	public function index()
	{
		$this->load->view('include/header',$this->data);
		$this->load->view('thanhtoan/index');
		$this->load->view('include/footer',$this->data);
	}

	public function test()
	{
		//if($this->cart->contents())
		//{
			$this->load->view('include/header',$this->data);
			$this->load->view('thanhtoan/thanhtoan');
			$this->load->view('include/footer',$this->data);
		//}
		//else
		//{
		//	redirect(base_url());
		//}
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
			{
				$this->data['phivanchuyen'] = 50000;
				$this->data['ptvc'] = 1;
			}
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
				echo json_encode(array('error'=>0,'msg'=>'Đăng nhập thành công'));
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
				echo json_encode(array('error'=>1,'msg'=>$loi));
			}
		}else{
			echo json_encode(array('error'=>2,'msg'=>'Vui lòng nhập username và password!'));
		}
		
	}

	public function kiemtradiachi()
	{
		$arr= array();
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			$id = $this->input->post('id',TRUE);
			if($id == 'existing')
			{
				$arr['id'] = 1;
				$arr['success'] = 1;
			}
			elseif ($id == 'new') {
				$arr['id'] = 2;
				$arr['success'] = 1;
				if(!isset($_POST['address'])||($_POST['address']==NULL)){
					$arr['address'] = "Bạn chưa nhập địa chỉ";
					$arr['success'] = 0;}
				if(!isset($_POST['country'])||($_POST['country']== "")){
					$arr['country'] = "Bạn chưa chọn tỉnh/thành";
					$arr['success'] = 0;}
				if($arr['success'] == 1)
				{
					$diachi = $this->input->post('address',TRUE).', '.$this->input->post('country',TRUE);
					$this->nguoidung_model->update_diachi($this->login->GetUserID(),$diachi);
				}
			}			
			echo json_encode(array('error'=>$arr));			
		}
		else
		{
			echo 'false';
		}	 
	}

	public function kiemtradiachigiaohang()
	{		
		$arr= array();
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			$id = $this->input->post('id',TRUE);
			if($id == 'existing')
			{
				$arr['id'] = 1;
				$arr['success'] = 1;
				$arr['str'] = '';
			}
			elseif ($id == 'new') {
				$arr['id'] = 2;
				$arr['success'] = 1;
				if(!isset($_POST['name'])||($_POST['name']==NULL)){
					$arr['name'] = "Bạn chưa nhập tên";
					$arr['success'] = 0;}
				if(!isset($_POST['SDT'])||($_POST['SDT']==NULL)){
					$arr['SDT'] = "Bạn chưa nhập số điện thoại";
					$arr['success'] = 0;}
				elseif (!is_numeric($_POST['SDT']) || strlen($_POST['SDT']) <9 || strlen($_POST['SDT']) >12) {
					$arr['SDT_n'] = "Xin nhập đúng số điện thoại";
					$arr['success'] = 0;}				
				if(!isset($_POST['address'])||($_POST['address']==NULL)){
					$arr['address'] = "Bạn chưa nhập địa chỉ";
					$arr['success'] = 0;}
				if(!isset($_POST['country'])||($_POST['country']== "")){
					$arr['country'] = "Bạn chưa chọn tỉnh/thành";
					$arr['success'] = 0;}
				if($arr['success'] == 1)
				{
					$this->data['name'] = $this->input->post('name',TRUE);
					$this->data['SDT'] = $this->input->post('SDT',TRUE);
					$this->data['diachi'] = $this->input->post('address',TRUE).', '.$this->input->post('country',TRUE);
					$arr['str'] = $this->data['name'].', '.$this->data['SDT'].', '.$this->data['diachi'];
				}
			}			
			echo json_encode(array('error'=>$arr));			
		}
		else
		{
			echo 'false';
		}	 
	}

	public function kiemtrahinhthucgiaohang()
	{
		$id = $this->input->post('id',TRUE);
		$this->data['comment'] = $this->input->post('comment',TRUE);
		echo $id; 
	}

	public function success()
	{
		$this->load->view('thanhtoan/invoice');
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			if($this->cart->contents())
			{
				$Tongtienhang = $this->cart->total();
				$Tennguoinhan = $this->data['name'];
				$Diachi = $this->data['diachi'];
				$SDT = $this->data['SDT'];
				$Makhachhang = $this->data['id'];
				$Phuongthucvanchuyen = $this->data['ptvc'];
				$Ghichu = $this->data['comment'];
				$this->data['maxacnhan'] = time();
				$this->thongtindonhang_model->insert($Tongtienhang, $Tennguoinhan, $Diachi, $SDT, $Makhachhang, $Phuongthucvanchuyen, $Ghichu, $this->data['maxacnhan']);	    
				$iddh = $this->thongtindonhang_model->get_id_thongtindonhang($this->data['maxacnhan']);
			}
			else
			{
				redirect(base_url().'home');
			}
		}
		else
		{
			echo 'false';
		}
	}

}