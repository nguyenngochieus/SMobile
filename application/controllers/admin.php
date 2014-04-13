<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class admin extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();		
		$this->data['page'] = '';				
		$this->data['Username'] = $this->login->getLoginUsername();  
		$this->data['Name'] = $this->login->GetName();
		$this->data['UserID'] = $this->login->GetUserID();
		$this->data['Quyen'] = $this->login->GetUserRole();
	}	
	// Hoàn thành
	function index(){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
				$this->data['title'] = 'Trang chủ';
				$this->data['page'] = 'trangchu';
				$this->load->model(array('nguoidung_model','sanpham_model'));				 
				$this->data['thongke_nguoidung'] = $this->nguoidung_model->thongke_nguoidung();
				$this->data['thongke_sanpham_top10sell'] = $this->sanpham_model->thongke_sanpham_top10sell();
				$this->data['thongke_sanpham_top10rate'] = $this->sanpham_model->thongke_sanpham_top10rate();
				$this->data['thongke_sanpham_soluong'] = $this->sanpham_model->thongke_sanpham_soluong();
				$this->data['thongke_sanpham_tongmuaxem'] = $this->sanpham_model->thongke_sanpham_tongmuaxem();
				
				//var_dump($this->data['thongke_sanpham_tongmuaxem']); exit();

				$this->load->view('admin/include/header',$this->data);
				$this->load->view('admin/include/leftpanel',$this->data);
				$this->load->view('admin/include/headerbar',$this->data);
				$this->load->view('admin/include/breadcrumb',$this->data);
				$this->load->view('admin/home/index');
				$this->load->view('admin/include/rightpanel');
				$this->load->view('admin/include/footer');
			}
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function nguoidung($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
				$this->data['title'] = 'Người dùng';
				$this->data['page'] = 'nguoidung';
				$this->load->model('nguoidung_model');
				$this->load->helper(array('form', 'url')); 
				$this->load->library('form_validation');
				
				if($chucnang == "view")
				{
					if(isset($_GET['quyen']) && $_GET['quyen'] > 0)
						$this->data['result'] = $this->nguoidung_model->get_nguoidung_quyen($_GET['quyen']);
					else
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
					$config = array(	
		               array(
		                     'field'   => 'tendangnhap', 
		                     'label'   => 'Tên đăng nhập', 
		                     'rules'   => 'is_unique[nguoidung.TENDANGNHAP]'
		                  ),
		               array(
		                     'field'   => 'email', 
		                     'label'   => 'Email', 
		                     'rules'   => 'is_unique[nguoidung.EMAIL]'
		                  )
		            );
					
					$this->form_validation->set_rules($config);
					$this->form_validation->set_message('is_unique', '%s đã được sử dụng');	
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger" >
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
					
					if ($this->form_validation->run() == FALSE){
						$this->data['result'] = $this->nguoidung_model->get_nguoidung();
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb',$this->data);
						$this->load->view('admin/nguoidung/index',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}			
					else{	
						$Tennguoidung = $this->input->post('hoten',TRUE);
						$Tendangnhap = $this->input->post('tendangnhap',TRUE);
						$Matkhau = $this->input->post('matkhau',TRUE);
						$Email = $this->input->post('email',TRUE);						
						$Namsinh = $this->input->post('namsinh',TRUE);
						$Namsinh = date('Y-m-d', strtotime($Namsinh));
						$Gioitinh = $this->input->post('gioitinh',TRUE);
						$Diachi = $this->input->post('diachi',TRUE);
						$CMND = $this->input->post('CMND',TRUE);
						$SDT = $this->input->post('SDT',TRUE);
						$Quyen = $this->input->post('quyen',TRUE);
						$Trangthai = $this->input->post('trangthai',TRUE);
						$HinhDaiDien = $this->input->post('HinhDaiDien',TRUE);
						$HinhDaiDien =  substr($HinhDaiDien,22);

						$tmp = $this->nguoidung_model->insert($Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $Diachi, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
						if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
						else echo redirect(base_url('admin/error/insert'));
					}
				}
				elseif ($chucnang == "edit") {	
					$this->form_validation->set_rules('tendangnhap','','trim');		
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
						$Tendangnhap = $this->input->post('tendangnhap',TRUE);
						$Matkhau_old = $this->input->post('matkhaucu',TRUE);
						$Matkhau_new = $this->input->post('matkhaumoi',TRUE);
						if ($Matkhau_new){
							$Matkhau = $Matkhau_new;
							$Matkhau = do_hash($Matkhau,'md5');
						}
						else $Matkhau = $Matkhau_old;												
						$Email = $this->input->post('email',TRUE);						
						$Namsinh = $this->input->post('namsinh',TRUE);
						$Namsinh = date('Y-m-d', strtotime($Namsinh));
						$Gioitinh = $this->input->post('gioitinh',TRUE);
						$Diachi = $this->input->post('diachi',TRUE);
						$CMND = $this->input->post('CMND',TRUE);
						$SDT = $this->input->post('SDT',TRUE);
						$Quyen = $this->input->post('quyen',TRUE);
						$Trangthai = $this->input->post('trangthai',TRUE);
						$HinhDaiDien = $this->input->post('HinhDaiDien',TRUE);
						$HinhDaiDien =  substr($HinhDaiDien,22);
						
						$tmp = $this->nguoidung_model->update($id, $Tennguoidung, $Tendangnhap, $Matkhau, $Email, $Namsinh, $Gioitinh, $Diachi, $CMND, $SDT, $Quyen, $Trangthai, $HinhDaiDien);
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
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function hoadon($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
				$this->data['title'] = 'Hóa đơn';
				$this->data['page'] = 'hoadon';
				$this->load->model('thongtindonhang_model');		
				$this->load->helper(array('form', 'url')); 
				$this->load->library('form_validation');
				
				if($chucnang == "view")
				{			
					$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang();
					$this->load->view('admin/include/header',$this->data);
					$this->load->view('admin/include/leftpanel',$this->data);
					$this->load->view('admin/include/headerbar');
					$this->load->view('admin/include/breadcrumb',$this->data);
					$this->load->view('admin/hoadon/index',$this->data);
					$this->load->view('admin/include/rightpanel');
					$this->load->view('admin/include/footer');
				}
				elseif ($chucnang == "edit") {
					if(isset($_GET['id']) && $_GET['id'] >0)
					{
						$id = $this->input->get('id',TRUE);
						$this->form_validation->set_rules('validate','','trim|required|max_length[255]|xss_clean');
						if ($this->form_validation->run() == FALSE)
						{
							$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang_id($id);
							$this->data['giohang'] = $this->thongtindonhang_model->get_giohang_id($this->data['result']->ID);
							$this->load->view('admin/include/header',$this->data);
							$this->load->view('admin/include/leftpanel',$this->data);
							$this->load->view('admin/include/headerbar');
							$this->load->view('admin/include/breadcrumb',$this->data);
							$this->load->view('admin/hoadon/edit',$this->data);
							$this->load->view('admin/include/rightpanel');
							$this->load->view('admin/include/footer');
						}
						else 
						{						
							$tinhtrang = $this->input->post('tinhtrang',TRUE);	
							$tmp = $this->thongtindonhang_model->update_admin($id, $tinhtrang);			
							if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
							else echo redirect(base_url('admin/error/insert'));
						}
					}
					else
						redirect(base_url('admin/hoadon'));
				}
				elseif ($chucnang == "chitiet") {
					if(isset($_GET['id']) && $_GET['id'] >0)
					{
						$id = $this->input->get('id',TRUE);
						$this->data['result'] = $this->thongtindonhang_model->get_thongtindathang_id($id);
						$this->data['giohang'] = $this->thongtindonhang_model->get_giohang_id($this->data['result']->ID);
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb',$this->data);
						$this->load->view('admin/hoadon/chitiet',$this->data);
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
					else
						redirect(base_url('admin/hoadon'));
					
				}
			}
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function sanpham($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
		  		$this->load->library('form_validation');
		  		$this->data['title'] = 'Sản phẩm'; 				
				$this->data['page'] = 'sanpham';
				$this->load->model(array('sanpham_model','loaisanpham_model','nhacungcap_model','public_model'));//
				$this->data['loaisanpham'] = $this->loaisanpham_model->get_loaisanpham(); //
				$this->data['nhacungcap'] = $this->nhacungcap_model->get_nhacungcap();		//
				if($chucnang=="view")
				{				 
					if(isset($_GET['loai']) && $_GET['loai'] > 0)
						$this->data['result'] = $this->sanpham_model->get_sanpham_loai($_GET['loai']);
					else
						$this->data['result'] = $this->sanpham_model->get_sanpham();				
					$this->data['Loai'] = $this->public_model->GetMenu();
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
						$this->data['result'] = $this->sanpham_model->get_sanpham(); 
						$this->load->view('admin/include/header',$this->data);
						$this->load->view('admin/include/leftpanel',$this->data);
						$this->load->view('admin/include/headerbar');
						$this->load->view('admin/include/breadcrumb',$this->data);
						$this->load->view('admin/sanpham/index',$this->data); 
						$this->load->view('admin/include/rightpanel');
						$this->load->view('admin/include/footer');
					}
					else
					{
						$Tensanpham = $this->input->post('tensanpham',TRUE); 
						$Loai = $this->input->post('loai',TRUE);
						$Nhacungcap = $this->input->post('nhacungcap',FALSE);
						$Soluong = $this->input->post('soluong',TRUE);
						$Hinh_str = $this->input->post('HinhDaiDien',TRUE);
						$Mota = $this->input->post('mota',TRUE);					
						$Mota_en = $this->input->post('mota_en',TRUE);
						$Dongia = $this->input->post('dongia',TRUE);
						$Hinh =  substr($Hinh_str,22); 

						$tmp = $this->sanpham_model->insert($Tensanpham, $Loai, $Nhacungcap, $Soluong, $Hinh, $Mota, $Mota_en, $Dongia);
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
							$this->data['result'] = $this->sanpham_model->edit($id);
							$this->load->view('admin/include/header',$this->data);
							$this->load->view('admin/include/leftpanel',$this->data);
							$this->load->view('admin/include/headerbar');
							$this->load->view('admin/include/breadcrumb',$this->data);
							$this->load->view('admin/sanpham/edit',$this->data); 
							$this->load->view('admin/include/rightpanel');
							$this->load->view('admin/include/footer');
						}
					}
					else
					{
						$Tensanpham = $this->input->post('tensanpham',TRUE); 
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
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function tintuc($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
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
					$Hinh = $this->input->post('HinhDaiDienTinTuc',TRUE);
					$Hinh = substr($Hinh,22);				
					$Tacgia = $this->login->GetUserID();

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
							$now = date("Y-m-d H:i:s");
							$Ngaydang = $now;
							$Hinh = $this->input->post('HinhDaiDienTinTuc',TRUE);
							$Hinh = substr($Hinh,22);
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
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function binhluan($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
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
		}
		else
			return redirect(base_url('dangnhap'));
	}
	// Hoàn thành
	function danhgia($chucnang = "view"){
		$check = $this->login->checkLogin();
		$role = $this->data['Quyen'];
		if($check == 1 || $check == 2 )
		{
			if($role == 3)
				return redirect(base_url());
			else{
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
		}		
		else
			return redirect(base_url('dangnhap'));
	}
	// Chức năng phụ		
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
}
