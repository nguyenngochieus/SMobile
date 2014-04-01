<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class admin extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');			
		$this->data['page'] = '';	
		$this->data['loi'] = "";
		$this->load->library('login');
		$this->data['Username'] = $this->login->getLoginUsername();  
		$this->data['Name'] = $this->login->GetName();
	}

	function index(){
		$this->data['title'] = 'Đăng nhập';
		$this->data['page'] = 'dangnhap';
		$chk = $this->login->checkLogin();		
		if($chk==1||$chk==2)
		{
				return redirect(base_url('admin/home'));
		}
		if(isset($_POST['username'])&&($_POST['username']!=NULL)&&isset($_POST['password'])&&($_POST['password']!=NULL))
		{
			$remember = FALSE;
			if(isset($_POST['remember'])&&($_POST['remember']==1)) $remember = TRUE;			
			$arr = array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$tmp = $this->login->dangnhap($arr, $remember);
			if($tmp==1)
			{
					return redirect(base_url('admin/home')); 
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
		else $this->load->view("admin/index",$this->data);
	}

	public function logout(){
		$this->login->logout();
		return redirect(base_url());
	}

	function dangky(){
		
<<<<<<< HEAD
=======
<<<<<<< HEAD
		$config = array(
               array(
                     'field'   => 'hoten', 
                     'label'   => 'Họ tên', 
                     'rules'   => 'trim|required|xss_clean'               
                  ),
               array(
                     'field'   => 'tendangnhap', 
                     'label'   => 'Tên đăng nhập', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'matkhau', 
                     'label'   => 'Mật khẩu', 
                     'rules'   => 'required|max_length[20]|'
                  ),
               array(
                     'field'   => 'rematkhau', 
                     'label'   => 'Nhập lại mật khẩu', 
                     'rules'   => 'required|matches[matkhau]'                 
                  ),   
               array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'trim|required|valid_email'
                  ),
               array(
                     'field'   => 'namsinh', 
                     'label'   => 'Ngày sinh', 
                     'rules'   => 'trim|required|callback_ktnamsinh'
                  )
            );

		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('required', 'Không thể bỏ trống trường này');
		$this->form_validation->set_message('matches', 'Nhập lại mật khẩu chưa đúng');
		$this->form_validation->set_message('max_length', 'Mật khẩu không quá 20 ký tự');
		$this->form_validation->set_message('valid_email', 'Địa chỉ email không hợp lệ');				
		$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
=======
>>>>>>> d32e6795a6bf55d494858bdfaec2ac76eb6c36bf
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
			return redirect(base_url('admin'));
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
	                     'rules'   => 'trim|required|xss_clean|min_length[6]'               
	                  ),
	               array(
	                     'field'   => 'tendangnhap', 
	                     'label'   => 'Tên đăng nhập', 
	                     'rules'   => 'trim|required|xss_clean|min_length[6]|alpha_numeric'
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
	                     'rules'   => 'trim|required|valid_email'
	                  ),
	               array(
	                     'field'   => 'namsinh', 
	                     'label'   => 'Ngày sinh', 
	                     'rules'   => 'trim|required|callback_ktnamsinh'
	                  )
	            );
<<<<<<< HEAD
=======
>>>>>>> 18a8fa51be7b6fcff330ea9bb293c96abbbe4387
>>>>>>> d32e6795a6bf55d494858bdfaec2ac76eb6c36bf

			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', 'Không thể bỏ trống trường này');
			$this->form_validation->set_message('matches', 'Nhập lại mật khẩu chưa đúng');
			$this->form_validation->set_message('max_length', 'Mật khẩu không quá 20 ký tự');
			$this->form_validation->set_message('min_length', 'Vui lòng nhập ít nhất 4 ký tự');
			$this->form_validation->set_message('valid_email', 'Địa chỉ email không hợp lệ');	
			$this->form_validation->set_message('alpha_numeric', 'Tên đăng nhập không hợp lệ');					
			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('admin/nguoidung/signup');
			}			
			else{
				//$Matkhau = do_hash($this->input->post('matkhau',TRUE), 'md5');
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
					echo '<script language="javascript">alert("Đăng ký thành công!")</script>';										
					echo redirect(base_url('admin'));
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

	function home(){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Trang chủ';
			$this->data['page'] = 'trangchu';
			$this->load->view('admin/include/header',$this->data);
			$this->load->view('admin/include/leftpanel',$this->data);
			$this->load->view('admin/include/headerbar',$this->data);
			$this->load->view('admin/include/breadcrumb',$this->data);
			$this->load->view('admin/home/index');
			$this->load->view('admin/include/rightpanel');
			$this->load->view('admin/include/footer');
		}
		else
			return redirect(base_url('admin'));
	}

	function nguoidung($chucnang = "view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Người dùng';
			$this->data['page'] = 'nguoidung';
			$this->load->model('nguoidung_model');		
			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			
			if($chucnang == "view")
			{
				$this->data['result'] = $this->nguoidung_model->get_nguoidung();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/nguoidung/index',$this->data);
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
			elseif ($chucnang == "insert") {
				$Tennguoidung = $this->input->post('hoten',TRUE);
				$Tendangnhap = $this->input->post('username',TRUE);
				$Matkhau = $this->input->post('password',TRUE);
				$Email = $this->input->post('email',TRUE);						
				$Namsinh = $this->input->post('namsinh',TRUE);
				$Namsinh = date('Y-m-d', strtotime($Namsinh));
				$Gioitinh = $this->input->post('gender',TRUE);
				$CMND = $this->input->post('CMND',TRUE);
				$SDT = $this->input->post('SDT',TRUE);
				$Quyen = $this->input->post('quyen',TRUE);
				$Trangthai = $this->input->post('trangthai',TRUE);
				$HinhDaiDien = $this->input->post('HinhDaiDien',TRUE);
				$HinhDaiDien =  substr($HinhDaiDien,22);

				$tmp = $this->nguoidung_model->insert($Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
				if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
				else echo redirect(base_url('admin/error/insert'));
			}
			elseif ($chucnang == "edit") {
				
				$this->form_validation->set_rules('username','','trim|required|max_length[255]|xss_clean');
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$id = 0;
				$Idg = $this->input->get("id");			
				if(is_numeric($Idg)) $id = $Idg;
				if ($this->form_validation->run() == FALSE)
				{
					if($id < 0) echo redirect(base_url('admin/'.$this->data['page']));
					else
					{
						$this->data['result'] = $this->nguoidung_model->edit($id);
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb',$this->data);
						$this->load->view('admin/nguoidung/edit',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
				}
				else
				{
					$Tennguoidung = $this->input->post('hoten',TRUE);
					$Tendangnhap = $this->input->post('username',TRUE);
					$Matkhau = $this->input->post('password',TRUE);
					$Email = $this->input->post('email',TRUE);						
					$Namsinh = $this->input->post('namsinh',TRUE);
					$Namsinh = date('Y-m-d', strtotime($Namsinh));
					$Gioitinh = $this->input->post('gender',TRUE);
					$CMND = $this->input->post('CMND',TRUE);
					$SDT = $this->input->post('SDT',TRUE);
					$Quyen = $this->input->post('quyen',TRUE);
					$Trangthai = $this->input->post('trangthai',TRUE);
					$HinhDaiDien = $this->input->post('HinhDaiDien',TRUE);
					$HinhDaiDien =  substr($HinhDaiDien,22);
					$tmp = $this->nguoidung_model->update($id, $Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
					else echo redirect(base_url('admin/error/edit'));
				}						
			}
			elseif ($chucnang == 'delete') {
					$id = $this->input->post('id',TRUE);
					$a = $this->nguoidung_model->delete($id);
					if($a)
						echo 1;
					else
						echo 0;
				}	
		}
		else
			return redirect(base_url('admin'));
	}

	function hoadon($chucnang = "view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Hóa đơn';
			$this->data['page'] = 'hoadon';
			$this->load->model('hoadon_model');		
			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			
			if($chucnang == "view")
			{			
				$this->data['result'] = $this->hoadon_model->get_hoadon();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/hoadon/index',$this->data);
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
			elseif ($chucnang == "insert") {
				$Madathang = $this->input->post('Madathang',TRUE);
				$Masanpham = $this->input->post('Masanpham',TRUE);
				$Soluong = $this->input->post('Soluong',TRUE);

				$tmp = $this->hoadon_model->insert($Madathang, $Masanpham, $Soluong);			
				if(!$tmp) echo redirect(base_url('admin/'.$this->data['page']));
				else echo redirect(base_url('admin/error/insert'));
			}
		}
		else
			return redirect(base_url('admin'));
		}

	function ktradulieu($chucnang){
		if(!empty($chucnang))
		{			
			$id = $this->input->post("id",TRUE);
			switch ($chucnang) {
				case 'loai_san_pham':
					# code...
					break;
				
				default:echo 0;
					# code...
					break;
			}
		}
	}

	function sanpham($chucnang="view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
	  		$this->load->library('form_validation');
	  		$this->data['title'] = 'Sản phẩm'; 				
			$this->data['page'] = 'sanpham';
			$this->load->model(array('sanpham_model','loaisanpham_model','nhacungcap_model'));//
			$this->data['loaisanpham'] = $this->loaisanpham_model->get_loaisanpham(); //
			$this->data['nhacungcap'] = $this->nhacungcap_model->get_nhacungcap();		//
			if($chucnang=="view")
			{				 
				$this->data['result'] = $this->sanpham_model->get_sanpham();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/sanpham/index',$this->data); //
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
			elseif($chucnang=="insert")
			{
				$this->form_validation->set_rules('tensanpham','','trim|required|max_length[255]|xss_clean'); //
				if ($this->form_validation->run() == FALSE)
				{
					$this->data['result'] = $this->sanpham_model->get_sanpham(); //
					$this->load->view('admin/include/header',$this->data);
					$this->load->view('admin/include/leftpanel',$this->data);
					$this->load->view('admin/include/headerbar');
					$this->load->view('admin/include/breadcrumb',$this->data);
					$this->load->view('admin/sanpham/index',$this->data); //
					$this->load->view('admin/include/rightpanel');
					$this->load->view('admin/include/footer');
				}
				else
				{
					$Tensanpham = $this->input->post('tensanpham',TRUE); //
					$Loai = $this->input->post('loai',TRUE);
					$Nhacungcap = $this->input->post('nhacungcap',FALSE);
					$Soluong = $this->input->post('soluong',TRUE);
					$Hinh_str = $this->input->post('HinhDaiDien',TRUE);
					$Mota = $this->input->post('mota',TRUE);					
					$Mota_en = $this->input->post('mota_en',TRUE);
					$Dongia = $this->input->post('dongia',TRUE);
					$Hinh =  substr($Hinh_str,22); //
					$tmp = $this->sanpham_model->insert($Tensanpham, $Loai, $Nhacungcap, $Soluong, $Hinh, $Mota, $Mota_en, $Dongia); //
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));					
					else echo redirect(base_url('admin/error/insert')); 
				}
			}
			elseif($chucnang=="edit")
			{
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				$this->form_validation->set_rules('tensanpham','','trim|required|max_length[255]|xss_clean'); //
				if ($this->form_validation->run() == FALSE)
				{					
					if($id < 0) echo redirect(base_url('admin/'.$this->data['page']));
					else
					{
						$this->data['result'] = $this->sanpham_model->edit($id); //
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb',$this->data);
						$this->load->view('admin/sanpham/edit',$this->data); //
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
				}
				else
				{
					$Tensanpham = $this->input->post('tensanpham',TRUE); //
					$Loai = $this->input->post('loai',TRUE);
					$Nhacungcap = $this->input->post('nhacungcap',FALSE);
					$Soluong = $this->input->post('soluong',TRUE);
					$Hinh_str = $this->input->post('HinhDaiDien',TRUE);
					$Mota = $this->input->post('mota',TRUE);					
					$Mota_en = $this->input->post('mota_en',TRUE);
					$Dongia = $this->input->post('dongia',TRUE);
					$Hinh =  substr($Hinh_str,22);
					$tmp = $this->sanpham_model->update($id ,$Tensanpham, $Loai, $Nhacungcap, $Soluong, $Hinh, $Mota, $Mota_en, $Dongia);
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
					else echo redirect(base_url('admin/error/update'));
				}
			}			
			elseif($chucnang=="delete")
			{
				$Id = $this->input->post("id", TRUE);
				if(is_numeric($Id)) settype($Id,"int");
				else echo -1;
				$tmp = $this->sanpham_model->delete($Id);
				if($tmp) echo 1;
				else echo -1;
			}
			elseif($chucnang=="deleteall")
			{
				$arr = $this->input->post('id'); 
				for($i=0;$i < count($arr); $i++)
				{						
					if(!$this->sanpham_model->delete($arr[$i])) echo -1;
				}
				echo 1;
			} 
		}
		else
			return redirect(base_url('admin'));
	}

	function tintuc($chucnang = "view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Tin tức';
			$this->data['page'] = 'tintuc';
			$this->load->model('tintuc_model');		
			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			$this->load->helper('date');
			
			if($chucnang == "view")
			{			
				$this->data['result'] = $this->tintuc_model->get_tintuc();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/tintuc/index',$this->data);
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
			elseif ($chucnang == "insert") {
				$Tieude = $this->input->post('Tieude',TRUE);
				$Loaitin = $this->input->post('Loaitin',TRUE);
				$Mota = $this->input->post('Mota',TRUE);
				$Noidung = $this->input->post('Noidung',TRUE);
				$now = date("Y-m-d H:i:s");
				$Ngaydang = $now;
				$Hinh = $this->input->post('HinhDaiDienSanPham',TRUE);
				$Hinh = substr($Hinh,22);
				//$Tacgia = $this->input->post('Tacgia',TRUE);			
				$Tacgia = 1;

				$tmp = $this->tintuc_model->insert($Tieude, $Loaitin, $Mota, $Noidung, $Ngaydang, $Hinh, $Tacgia);
				if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
				else echo redirect(base_url('admin/error/insert'));
			}
			elseif ($chucnang == "edit") {

				$this->form_validation->set_rules('Tieude','','trim|required|max_length[255]|xss_clean');			
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;			
				if ($this->form_validation->run() == FALSE)
				{

					if($id < 0) echo redirect(base_url('admin/'.$this->data['page']));
					else
					{
						$this->data['result'] = $this->tintuc_model->edit($id);
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb');
						$this->load->view('admin/tintuc/edit',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
				}
				else
				{
					$Tieude = $this->input->post('Tieude',TRUE);
					$Loaitin = $this->input->post('Loaitin',TRUE);
					$Mota = $this->input->post('Mota',TRUE);
					$Noidung = $this->input->post('Noidung',TRUE);
					$Ngaydang = $this->input->post('Ngaydang',TRUE);
					$Hinh = $this->input->post('Hinh',TRUE);
					$Tacgia = $this->input->post('Tacgia',TRUE);

					$tmp = $this->tintuc_model->update($id, $Tieude, $Loaitin, $Mota, $Noidung, $Ngaydang, $Hinh, $Tacgia);
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
					else echo redirect(base_url('admin/error/edit'));
				}
			}						
			elseif ($chucnang == 'delete') {
					$id = $this->input->post('id',TRUE);
					$a = $this->tintuc_model->delete($id);
					if($a)
						echo 1;
					else
						echo 0;
				}
			}
		else
			return redirect(base_url('admin'));
	}

	function binhluan($chucnang = "view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Bình luận';
			$this->data['page'] = 'binhluan';
			$this->load->model('binhluan_model');		
			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			$this->load->helper('date');

			
			if($chucnang == "view")
			{			
				$this->data['result'] = $this->binhluan_model->get_binhluan();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/binhluan/index',$this->data);
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}		
			elseif ($chucnang == "edit") {

				$this->form_validation->set_rules('Tensanpham','','trim|required|max_length[255]|xss_clean');			
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				if ($this->form_validation->run() == FALSE)
				{							
					if($id < 0) echo redirect(base_url('admin/'.$this->data['page']));
					else
					{
						$this->data['result'] = $this->binhluan_model->edit($id);
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb');
						$this->load->view('admin/binhluan/edit',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
				}
				else
				{				
					$Noidung = $this->input->post('Noidungbinhluan',TRUE);								
					
					$tmp = $this->binhluan_model->update($id, $Noidung);				
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
					else echo redirect(base_url('admin/error/edit'));
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
		else
			return redirect(base_url('admin'));
	}

	function danhgia($chucnang = "view"){
		$check = $this->login->checkLogin();
		if($check == 1 || $check == 2 )
		{
			$this->data['title'] = 'Đánh giá';
			$this->data['page'] = 'danhgia';
			$this->load->model('danhgia_model');		
			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			
			if($chucnang == "view")
			{
				$this->data['result'] = $this->danhgia_model->get_danhgia();
				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar');
				$this->load->view('admin/include/breadcrumb');
				$this->load->view('admin/danhgia/index',$this->data);
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
			elseif ($chucnang == "edit") {

				$this->form_validation->set_rules('tensanpham','','trim|required|max_length[255]|xss_clean');
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				if ($this->form_validation->run() == FALSE)
				{								
					if($id < 0) echo redirect(base_url('admin/'.$this->data['page']));
					else
					{
						$this->data['result'] = $this->danhgia_model->edit($id);
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb');
						$this->load->view('admin/danhgia/edit',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
				}
				else
				{												
					$Luotxem = $this->input->post('Luotxem',TRUE);
					$Luotmua = $this->input->post('Luotmua',TRUE);
					$Luotdanhgia = $this->input->post('Luotdanhgia',TRUE);
					$Tongdiem = $this->input->post('Tongdiem',TRUE);
					$tmp_Diemdanhgia = round(($Tongdiem/$Luotdanhgia),2);
					$Diemdanhgia = $tmp_Diemdanhgia;

					$tmp = $this->danhgia_model->update($id, $Luotxem, $Luotmua, $Luotdanhgia, $Tongdiem, $Diemdanhgia);
					
					if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
					else echo redirect(base_url('admin/error/edit'));
				}						
			}
		}	
		else
			return redirect(base_url('admin'));
	}
}
