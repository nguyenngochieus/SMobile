<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class user extends CI_Controller{

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
			$this->load->view('user/include/header',$this->data);
			$this->load->view('user/include/leftpanel',$this->data);
			$this->load->view('user/include/headerbar',$this->data);
			$this->load->view('user/include/breadcrumb',$this->data);
			$this->load->view('user/home/index');
			$this->load->view('user/include/rightpanel');
			$this->load->view('user/include/footer');
		}
		else
			return redirect(base_url('dangnhap.html'));
	}
	
	function binhluan($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];

		if($check == 1 || $check == 2 )
		{
			if($role != 3)
				return redirect(base_url('admin/binhluan'));
			else{
				$this->data['title'] = 'Bình luận';
				$this->data['page'] = 'binhluan';
				$this->load->model('binhluan_model');		
				$this->load->helper(array('form', 'url')); 
				$this->load->library('form_validation');
				$this->load->helper('date');

				
				if($chucnang == "view")
				{			
					$this->data['result'] = $this->binhluan_model->get_binhluan_user($this->data['UserID']);
					$this->load->view('user/include/header',$this->data);
					$this->load->view('user/include/leftpanel',$this->data);
					$this->load->view('user/include/headerbar');
					$this->load->view('user/include/breadcrumb',$this->data);
					$this->load->view('user/binhluan/index',$this->data);
					$this->load->view('user/include/rightpanel');
					$this->load->view('user/include/footer');
				}		
				elseif ($chucnang == "edit") {

					$this->form_validation->set_rules('Tensanpham','','trim|required|max_length[255]|xss_clean');			
					$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
					$id = 0;
					$Idg = $this->input->get("id");
					if(is_numeric($Idg)) $id = $Idg;
					if ($this->form_validation->run() == FALSE)
					{							
						if($id < 0) echo redirect(base_url('user/'.$this->data['page']));
						else
						{
							$this->data['result'] = $this->binhluan_model->edit($id);
							$this->load->view('user/include/header',$this->data);
							$this->load->view('user/include/leftpanel',$this->data);
							$this->load->view('user/include/headerbar');
							$this->load->view('user/include/breadcrumb');
							$this->load->view('user/binhluan/edit',$this->data);
							$this->load->view('user/include/rightpanel');
							$this->load->view('user/include/footer');
						}
					}
					else
					{				
						$Noidung = $this->input->post('Noidungbinhluan',TRUE);								
						
						$tmp = $this->binhluan_model->update($id, $Noidung);				
						if($tmp) echo redirect(base_url('user/'.$this->data['page']));
						else echo redirect(base_url('user/error/edit'));
					}						
				}
				elseif ($chucnang == 'delete') {
						$id = $this->input->post('id',TRUE);
						$a = $this->binhluan_model->delete($id);
						if($a)
							echo 1;
						else
							echo 0;
				}	
			}
		}
		else
			return redirect(base_url('dangnhap'));
	}	
}