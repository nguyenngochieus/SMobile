<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class dangky extends CI_Controller{
	var $CI;
	public $data;
	private $captcha_path = 'static/captcha/';

	function __construct(){
		parent:: __construct();
	}

	function index(){

		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$role = $this->login->GetUserRole();
			if ($role == 3)
				return redirect(base_url());
			else return redirect(base_url('admin'));
		}
		else
		{
			$this->data['title'] = 'Đăng ký';
			$this->data['page'] = 'dangky';
			$this->load->model('nguoidung_model');		
			$this->load->helper(array('form', 'url', 'captcha'));
			$this->load->library(array('form_validation','session'));        	

			$config = array(
	               array(
	                     'field'   => 'hoten', 
	                     'label'   => 'họ tên', 
	                     'rules'   => 'trim|required|xss_clean|min_length[6]|max_length[20]'               
	                  ),
	               array(
	                     'field'   => 'tendangnhap', 
	                     'label'   => 'tên đăng nhập', 
	                     'rules'   => 'trim|required|xss_clean|min_length[6]|alpha_dash|is_unique[nguoidung.TENDANGNHAP]|max_length[20]'
	                  ),
	               array(
	                     'field'   => 'matkhau', 
	                     'label'   => 'mật khẩu', 
	                     'rules'   => 'required|max_length[20]|min_length[6]|callback_ktmatkhau'
	                  ),
	               array(
	                     'field'   => 'rematkhau', 
	                     'label'   => 'lại mật khẩu', 
	                     'rules'   => 'required|matches[matkhau]'                 
	                  ),   
	               array(
	                     'field'   => 'email', 
	                     'label'   => 'email', 
	                     'rules'   => 'trim|required|valid_email|is_unique[nguoidung.EMAIL]'
	                  ),
	               array(
	                     'field'   => 'namsinh', 
	                     'label'   => 'ngày sinh', 
	                     'rules'   => 'trim|required|callback_ktnamsinh'
	                  ),
	               array(
	                     'field'   => 'captcha', 
	                     'label'   => 'mã xác nhận', 
	                     'rules'   => 'required|callback_ktcaptcha'
	                  )
	            );

			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', 'Chưa nhập %s');
			$this->form_validation->set_message('matches', 'Nhập lại mật khẩu chưa đúng');
			$this->form_validation->set_message('max_length', 'Vui lòng nhập %s không quá 20 ký tự');
			$this->form_validation->set_message('min_length', 'Vui lòng nhập %s nhiều hơn hơn 6 ký tự');
			$this->form_validation->set_message('valid_email', 'Địa chỉ email không hợp lệ');	
			$this->form_validation->set_message('alpha_dash', 'Tên đăng nhập không hợp lệ');
			$this->form_validation->set_message('is_unique', 'Địa chỉ %s đã được sử dụng');	

			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');

			if ($this->form_validation->run() == FALSE){
				$captcha = create_captcha(array(
		            'word'        => strtoupper(substr(md5(time()), 0, 6)),
		            'img_path'    => $this->captcha_path,
		            'img_url'    => $this->captcha_path
		        ));
				$this->data['captcha'] = $captcha;	       
        		$this->session->set_userdata('captcha', $captcha['word']);
				$this->load->view('admin/nguoidung/signup', $this->data);
			}			
			else{				
				$Tennguoidung = $this->input->post('hoten',TRUE);
				$Tendangnhap = $this->input->post('tendangnhap',TRUE);
				$Matkhau = $this->input->post('matkhau',TRUE);
				$Email = $this->input->post('email',TRUE);						
				$Namsinh = $this->input->post('namsinh',TRUE);
				$Namsinh = date('Y-m-d', strtotime($Namsinh));
				$Diachi_input = $this->input->post('diachi',TRUE);				
				$Tinh_Tp = $this->input->post('tinh_tp',TRUE);				
				if($Diachi_input){
					if($Tinh_Tp)
						$Diachi = $Diachi_input.', '.$Tinh_Tp;
					else
						$Diachi = $Diachi_input;
				}
				else {
					$Diachi = $Tinh_Tp;	
				}				
				$Gioitinh = "1";
				$CMND = ""; 
				$SDT = "";
				$Quyen = "3"; 
				$Trangthai = "1"; 
				$HinhDaiDien = "";				

				$tmp = $this->nguoidung_model->insert($Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $Diachi, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
				if($tmp){
					$this->data['ck_success'] = "1";
					echo redirect(base_url('dangnhap/index/success'));
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

	public function ktmatkhau($matkhau)
	{	    
	    if (preg_match("/^[0-9A-Za-z!@#$%]+$/", $matkhau)) return TRUE;
    	else 
    	{
			$this->form_validation->set_message('ktmatkhau', 'Mật khẩu không hợp lệ');
    		return FALSE;
    	}
	} 

	public function ktcaptcha($cap)
	{
		$recaptcha = $this->session->userdata('captcha');
		if ($cap==$recaptcha)
			return TRUE;
		else
		{
			$this->form_validation->set_message('ktcaptcha', 'Mã xác nhận chưa đúng');
			return FALSE;
		}
	}

	public function new_captcha()
    {
        $this->load->helper(array('captcha', 'file'));
        $captcha = create_captcha(array(
            'word'        => strtoupper(substr(md5(time()), 0, 6)),
            'img_path'    => $this->captcha_path,
            'img_url'    => $this->captcha_path
        ));       
        $this->session->set_userdata('captcha', $captcha['word']);        
        $filename = $this->captcha_path . $captcha['time'] . '.jpg';
        $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        $this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Content-Type: image/jpeg');
        $this->output->set_header('Content-Length: ' . filesize($filename));
        echo read_file($filename);
    }
}