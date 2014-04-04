<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class doimatkhau extends Public_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
	}

	function index(){
		$this->load->view('include/header',$this->data);
		$this->load->view('user/doimatkhau',$this->data);
		$this->load->view('user/usermenu',$this->data);
		$this->load->view('include/footer',$this->data);
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$config = array(	
           array(
                 'field'   => 'matkhaucu', 
                 'label'   => 'Mật khẩu cũ', 
                 'rules'   => 'trim|xss_clean|required|callback_ktmatkhaucu'
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
		$this->form_validation->set_error_delimiters('<div>', '</div>');

		$role = $this->data['Quyen'];
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			if($role == 3)				
			{						
				if ($this->form_validation->run() == FALSE){
					$this->load->view('include/header',$this->data);
					$this->load->view('user/doimatkhau',$this->data);
					$this->load->view('user/usermenu',$this->data);
					$this->load->view('include/footer',$this->data);
				}
				else{
					echo "2"; exit();
					$this->load->model('nguoidung_model');
					$Matkhaumoi = $this->input->post('matkhaumoi',TRUE);
					$Id = $this->data['UserID'];

					$tmp = $this->nguoidung_model->doimatkhau($Id, $Matkhaumoi);
					if($tmp){						
						echo redirect(base_url('user/taikhoan'));
					} 
					else echo redirect(base_url('user/error/doimatkhau'));
				}
			}
			else redirect(base_url('admin'));
		}
		else
			return redirect(base_url('dangnhap'));
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
	
	public function ktmatkhaucu($matkhau){		
		$matkhau = md5($matkhau);
		$matkhaucu = $this->db->query('SELECT MATKHAU FROM nguoidung WHERE ID = '.$this->data['UserID']);
	    if ($matkhau==$matkhaucu) return TRUE;
    	else 
    	{
			$this->form_validation->set_message('ktmatkhaucu', 'Mật khẩu cũ không đúng');
    		return FALSE;
    	}		
	}
}