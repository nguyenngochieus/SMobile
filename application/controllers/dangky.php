<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class dangky extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
	}

	function index(){

		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
			return redirect(base_url('admin.html'));
		else
		{
			$this->data['title'] = 'Đăng ký';
			$this->data['page'] = 'dangky';
			$this->load->model('nguoidung_model');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');					
			
			$config = array(
	               array(
	                     'field'   => 'hoten', 
	                     'label'   => 'Họ tên', 
	                     'rules'   => 'trim|required|xss_clean|min_length[6]|max_length[20]'               
	                  ),
	               array(
	                     'field'   => 'tendangnhap', 
	                     'label'   => 'Tên đăng nhập', 
	                     'rules'   => 'trim|required|xss_clean|min_length[6]|alpha_numeric|is_unique[nguoidung.TENDANGNHAP]|max_length[20]'
	                  ),
	               array(
	                     'field'   => 'matkhau', 
	                     'label'   => 'Mật khẩu', 
	                     'rules'   => 'required|max_length[20]|min_length[6]'
	                  ),
	               array(
	                     'field'   => 'rematkhau', 
	                     'label'   => 'Nhập lại mật khẩu', 
	                     'rules'   => 'required|matches[matkhau]'                 
	                  ),   
	               array(
	                     'field'   => 'email', 
	                     'label'   => 'Email', 
	                     'rules'   => 'trim|required|valid_email|is_unique[nguoidung.EMAIL]'
	                  ),
	               array(
	                     'field'   => 'namsinh', 
	                     'label'   => 'Ngày sinh', 
	                     'rules'   => 'trim|required|callback_ktnamsinh'
	                  )
	            );

			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', '%s không được bỏ trống');
			$this->form_validation->set_message('matches', 'Nhập lại mật khẩu chưa đúng');
			$this->form_validation->set_message('max_length', '%s không quá 20 ký tự');
			$this->form_validation->set_message('min_length', '%s không thể ít hơn 6 ký tự');
			$this->form_validation->set_message('valid_email', 'Địa chỉ email không hợp lệ');	
			$this->form_validation->set_message('alpha_numeric', 'Tên đăng nhập không hợp lệ');
			$this->form_validation->set_message('is_unique', '%s đã được sử dụng');	

			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('admin/nguoidung/signup');
			}			
			else{				
				$Tennguoidung = $this->input->post('hoten',TRUE);
				$Tendangnhap = $this->input->post('tendangnhap',TRUE);
				$Matkhau = $this->input->post('matkhau',TRUE);
				$Email = $this->input->post('email',TRUE);						
				$Namsinh = $this->input->post('namsinh',TRUE);
				$Namsinh = date('Y-m-d', strtotime($Namsinh));
				$Gioitinh = "1";
				$CMND = ""; 
				$SDT = "";
				$Quyen = "3"; 
				$Trangthai = "1"; 
				$HinhDaiDien = "";

				$tmp = $this->nguoidung_model->insert($Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
				if($tmp){
					$this->data['ck_success'] = "1";
					echo redirect(base_url('dangnhap/index/success.html'));
				} 
				else echo redirect(base_url('admin/error/insert'));			
			}
		}		
	}

	public function ktnamsinh($input){    	
		list($thang,$ngay,$nam)=explode("/",$input);		
    	if (checkdate($thang,$ngay,$nam)) return TRUE;
    	else 
    	{
			$this->form_validation->set_message('ktnamsinh', 'Ngày sinh không hợp lệ');
    		return FALSE;
    	}
	}	

}