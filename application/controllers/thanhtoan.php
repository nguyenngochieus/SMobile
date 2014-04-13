<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thanhtoan extends Public_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model(array('nguoidung_model','cart_model','thongtindonhang_model','hoadon_model'));
		$this->data['page'] = 'thanhtoan';
		$this->data['id'] = $this->login->GetUserID();	
	}

	public function index()
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
			if($this->session->userdata('nguoidung') != NULL)
			{
				$this->data['address'] = $this->session->userdata('nguoidung');
			}
			else
			{
				$user = $this->nguoidung_model->edit2($this->data['id']);
				$userdata = array( 'name' => $user[0]->TENNGUOIDUNG, 'SDT' => $user[0]->SDT, 'diachi' => $user[0]->DIACHI); 
				$this->session->set_userdata('nguoidung', $userdata);					
				$this->data['address'] = $this->session->userdata('nguoidung');	
			}
			$this->data['id'] = $this->login->GetUserID();
			$this->load->view('thanhtoan/shipping-address',$this->data);
		}
		else
		{
			echo 'false';
		}
	}

	public function shipping_option()
	{
		if($this->session->userdata('ptvc') != NULL && $this->session->userdata('comment') != NULL)
			{
				$this->data['ptvc'] = $this->session->userdata('ptvc');
				$this->data['comment'] = $this->session->userdata('comment');
			}	
			else{
				$this->data['ptvc'] = 1;
				$this->data['comment'] = '';
			}		
		$this->load->view('thanhtoan/shipping-option',$this->data);		
	}

	public function confirm()
	{
		if($this->cart->contents())
		{
			if($this->session->userdata('ptvc') != NULL)
			{
				if($this->session->userdata('ptvc') == 2)
				{
					$this->data['phivanchuyen'] = 50000;
				}
				else
					$this->data['phivanchuyen'] = 0;
			}	
			else{
				$this->data['phivanchuyen'] = 0;
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
					$userdata = array( 'name' => $this->input->post('name',TRUE), 
										'SDT' => $this->input->post('SDT',TRUE), 
										'diachi' =>  $this->input->post('address',TRUE).', '.$this->input->post('country',TRUE) ); 
					$this->session->set_userdata('nguoidung', $userdata);
					$arr['str'] = $this->input->post('name',TRUE).', '.$this->input->post('SDT',TRUE).', '.$this->input->post('address',TRUE).', '.$this->input->post('country',TRUE);
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
		$this->session->set_userdata('ptvc', $this->input->post('id',TRUE));
		$this->session->set_userdata('comment', $this->input->post('comment',TRUE));
		echo 'true'; 
	}

	public function done()
	{
		$this->load->view('thanhtoan/invoice');
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{	
			if($this->cart->contents())
			{
				if($this->session->userdata('nguoidung') != NULL &&  $this->session->userdata('ptvc') != NULL)
				{
					$nguoidung = $this->session->userdata('nguoidung');
					$Tongtienhang = $this->cart->total();
					$Tennguoinhan = $nguoidung['name'];
					$Diachi = $nguoidung['diachi'];
					$SDT = $nguoidung['SDT'];
					$Makhachhang = $this->data['id'];
					$Phuongthucvanchuyen = $this->session->userdata('ptvc');
					$Ghichu = $this->session->userdata('comment');
					$this->data['maxacnhan'] = time();
					$tmp = 	$this->thongtindonhang_model->insert($Tongtienhang, $Tennguoinhan, $Diachi, $SDT, $Makhachhang, $Phuongthucvanchuyen, $Ghichu, $this->data['maxacnhan']);
					if($tmp)
					{
						$iddh= $this->thongtindonhang_model->get_id_thongtindathang($this->data['maxacnhan']);
						foreach ($this->cart->contents() as $items){
							$Madathang = $iddh->ID;
							$Masanpham = $items['id'];
							$Soluong = $items['qty'];
							$tmp = $this->hoadon_model->insert($Madathang, $Masanpham, $Soluong);
						}
						echo redirect(base_url('thanhtoan/success/'.$iddh->ID));
					} 
					else echo redirect(base_url('admin/error/insert'));					    
					
				}
				else
				{
					redirect(base_url().'home/loi');
				}				
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
	public function success($id)
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2)
		{
			if($this->cart->contents())
			{
				$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang_id($id);
				if($this->data['result'])
				{
					$this->data['id'] = $id;
					$this->load->view('include/header',$this->data);
					$this->load->view('thanhtoan/success',$this->data);
					$this->load->view('include/footer',$this->data);
				}			
			}
			else
			{
				redirect(base_url());
			}
		}
		else
		{
			redirect(base_url());
		}
	}
}