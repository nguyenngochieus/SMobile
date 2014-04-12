<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class user extends Public_Controller{

	public $data;

	function __construct(){
		parent:: __construct();	
		$this->load->model('thongtindonhang_model');
		$this->data['id'] = $this->login->GetUserID();
	}

	function index(){
		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
				$this->data['ten'] = $this->login->GetName();
				$this->load->view('include/header',$this->data);
				$this->load->view('user/usermenu',$this->data);
				$this->load->view('user/index',$this->data);				
				$this->load->view('include/footer',$this->data);
		}
		else
			return redirect(base_url('dangnhap'));
	}

	function taikhoan(){
		$this->load->library('form_validation');
		$this->load->model('nguoidung_model');

		$config = array(	
           array(
                 'field'   => 'hoten', 
                 'label'   => 'Họ tên', 
                 'rules'   => 'trim|required|xss_clean|min_length[6]|max_length[20]'
              ),
           array(
                 'field'   => 'ngaysinh', 
                 'label'   => 'Ngày sinh', 
                 'rules'   => 'trim|required'
              ),
           array(
                 'field'   => 'sdt', 
                 'label'   => 'Số điện thoại', 
                 'rules'   => 'numeric|max_length[11]|min_length[10]'
              ),		               
           array(
                 'field'   => 'cmnd', 
                 'label'   => 'Số CMND', 
                 'rules'   => 'numeric|exact_length[9]'
              )
        );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('required', '%s không được bỏ trống');
		$this->form_validation->set_message('max_length', '%s quá dài');
		$this->form_validation->set_message('min_length', '%s quá ngắn');
		$this->form_validation->set_message('numeric', 'Vui lòng chỉ nhập số');
		$this->form_validation->set_message('exact_length', 'Vui lòng nhập chính xác 9 số CMND');
		$this->form_validation->set_error_delimiters('<label><font color="red">', '</font></label>');

		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
				if ($this->form_validation->run() == FALSE){	
					$this->data['UserInfo'] = $this->nguoidung_model->edit2($this->data['UserID']);												
					$this->load->view('include/header',$this->data);
					$this->load->view('user/usermenu',$this->data);
					$this->load->view('user/taikhoan',$this->data);					
					$this->load->view('include/footer',$this->data);
				}
				else{	
					$Id = $this->data['UserID'];						
					$Tennguoidung = $this->input->post('hoten',TRUE);
					$Email = $this->input->post('email',TRUE);
					$Ngaysinh = $this->input->post('ngaysinh',TRUE);
					$Ngaysinh = date('Y-m-d', strtotime($Ngaysinh));
					$Gioitinh = $this->input->post('gioitinh',TRUE);
					$Diachi = $this->input->post('diachi',TRUE);
					$CMND = $this->input->post('cmnd',TRUE);
					$SDT = $this->input->post('sdt',TRUE);

					$tmp = $this->nguoidung_model->update_user($Id, $Tennguoidung, $Email, $Ngaysinh, $Gioitinh, $Diachi, $CMND, $SDT);
					if($tmp){						
						echo redirect(base_url('user'));
					} 
					else echo redirect(base_url('user/error/doimatkhau'));
				}
		}
		else
			return redirect(base_url('dangnhap'));
	}

	function doimatkhau(){
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('nguoidung_model');

		$config = array(	
           array(
                 'field'   => 'matkhaucu', 
                 'label'   => 'Mật khẩu cũ', 
                 'rules'   => 'required|callback_ktmatkhaucu'
              ),
           array(
                 'field'   => 'matkhaumoi', 
                 'label'   => 'Mật khẩu mới', 
                 'rules'   => 'required|max_length[20]|min_length[6]|callback_ktmatkhau'
              ),	               
           array(
                 'field'   => 'rematkhau', 
                 'label'   => 'Nhập lại mật khẩu', 
                 'rules'   => 'required|matches[matkhaumoi]'
              )
        );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('required', '%s không được bỏ trống');
		$this->form_validation->set_message('max_length', '%s không quá 20 ký tự');
		$this->form_validation->set_message('min_length', '%s không thể ít hơn 6 ký tự');
		$this->form_validation->set_message('matches', 'Nhập lại mật khẩu chưa đúng');
		$this->form_validation->set_error_delimiters('<label><font color="red">', '</font></label>');

		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{						
				if ($this->form_validation->run() == FALSE){
					$this->load->view('include/header',$this->data);
					$this->load->view('user/usermenu',$this->data);
					$this->load->view('user/doimatkhau',$this->data);					
					$this->load->view('include/footer',$this->data);
				}
				else{										
					$Matkhaumoi = $this->input->post('matkhaumoi',TRUE);
					$Id = $this->data['UserID'];

					$tmp = $this->nguoidung_model->doimatkhau($Id, $Matkhaumoi);
					if($tmp){						
						echo redirect(base_url('user'));
					} 
					else echo redirect(base_url('user/error/doimatkhau'));
				}
		}
		else
			return redirect(base_url('dangnhap'));
	}		

	public function ktmatkhau($matkhau){
	    if (preg_match("/^[0-9A-Za-z!@#$%]+$/", $matkhau)) return TRUE;
    	else 
    	{
			$this->form_validation->set_message('ktmatkhau', 'Mật khẩu không hợp lệ');
    		return FALSE;
    	}
	} 
	
	public function ktmatkhaucu($matkhau){
		$matkhau = md5($matkhau);		
		$tmp = $this->nguoidung_model->kt_matkhaucu($matkhau);	
	    if ($tmp) return TRUE;
    	else 
    	{
			$this->form_validation->set_message('ktmatkhaucu', 'Mật khẩu cũ không đúng');
    		return FALSE;
    	}		
	}

	public function lichsudathang()
	{
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
				$this->data['result'] = $this->thongtindonhang_model->get_lichsudathang($this->data['id']);
				$this->load->view('include/header',$this->data);
				$this->load->view('user/usermenu',$this->data);
				$this->load->view('user/lichsudathang',$this->data);					
				$this->load->view('include/footer',$this->data);
		}
		else
			return redirect(base_url('dangnhap'));
	}

	public function donhang()
	{		
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			if(isset($_GET['id']) && $_GET['id'] != '')
			{
				$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang_id($this->input->get('id',TRUE));
				$this->data['giohang'] = $this->thongtindonhang_model->get_giohang_id($this->data['result']->ID);
				$this->load->view('include/header',$this->data);
				$this->load->view('user/usermenu',$this->data);
				$this->load->view('user/donhang',$this->data);					
				$this->load->view('include/footer',$this->data);
			}
			else return redirect(base_url('user'));

		}
		else
			return redirect(base_url('dangnhap'));
	}

	public function dathanglai()
	{		
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			if(isset($_GET['id']) && $_GET['id'] != '')
			{
				$this->data['giohang'] = $this->thongtindonhang_model->get_giohang_id($this->input->get('id',TRUE));
				if($this->cart->contents())
				{
					$this->cart->destroy();
				}
				foreach ($this->data['giohang'] as $item) {
					$arr =	array(
	                       'id'      => $item->MASANPHAM,
	                       'qty'     => $item->SOLUONG,
	                       'price'   => $item->DONGIA,
	                       'name'    => 'SP'.$item->MASANPHAM
	                    );
					$this->cart->insert($arr);
				}	
				$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang_id($this->input->get('id',TRUE));
				$this->data['giohang'] = $this->thongtindonhang_model->get_giohang_id($this->data['result']->ID);
				$this->load->view('include/header',$this->data);
				$this->load->view('cart/giohang',$this->data);				
				$this->load->view('include/footer',$this->data);
			}
			else return redirect(base_url('user'));

		}
		else
			return redirect(base_url('dangnhap'));
	}		
}
