<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class admin extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');			
		$this->data['page'] = '';	
	}

	function index(){
		$this->data['title'] = 'Trang chủ';
		$this->data['page'] = 'trangchu';
		$this->load->view('admin/include/header',$this->data);
		$this->load->view('admin/include/leftpanel',$this->data);
		$this->load->view('admin/include/headerbar');
		$this->load->view('admin/include/breadcrumb',$this->data);
		$this->load->view('admin/index');
		$this->load->view('admin/include/rightpanel');
		$this->load->view('admin/include/footer');
	}

	function nguoidung($chucnang = "view"){
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
			else echo redirect(base_url('admin/error/insert.html'));
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
				else echo redirect(base_url('admin/error/edit.html'));
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

	function hoadon($chucnang = "view"){
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
			else echo redirect(base_url('admin/error/insert.html'));
		}
	}

	public function ktradulieu($chucnang){
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

	public function sanpham($chucnang="view"){
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
					else echo redirect(base_url('admin/error/insert.html')); 
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
					else echo redirect(base_url('admin/error/update.html'));
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

	function tintuc($chucnang = "view"){
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
			$Hinh = $this->input->post('Hinh',TRUE);
			$Tacgia = $this->input->post('Tacgia',TRUE);			

			$tmp = $this->tintuc_model->insert($Tieude, $Loaitin, $Mota, $Noidung, $Ngaydang, $Hinh, $Tacgia);
			if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
			else echo redirect(base_url('admin/error/insert.html'));
		}
		elseif ($chucnang == "edit") {

			$this->form_validation->set_rules('username','','trim|required|max_length[255]|xss_clean');
			$this->form_validation->set_rules('hoten','','trim|alpha_numeric|xss_clean');
			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
			if ($this->form_validation->run() == FALSE)
			{
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				echo $id;
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
				else echo redirect(base_url('admin/error/edit.html'));
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

	function binhluan($chucnang = "view"){

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
		elseif ($chucnang == "insert") {
			$Masanpham = $this->input->post('Masanpham',TRUE);
			$Makhachhang = $this->input->post('Makhachhang',TRUE);
			$Noidung = $this->input->post('Noidung',TRUE);
			$now = date("Y-m-d H:i:s");			
			$Thoigian = $now;

			$tmp = $this->binhluan_model->insert($Masanpham, $Makhachhang, $Noidung, $Thoigian);
			if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
			else echo redirect(base_url('admin/error/insert.html'));
		}
		elseif ($chucnang == "edit") {

			$this->form_validation->set_rules('username','','trim|required|max_length[255]|xss_clean');
			$this->form_validation->set_rules('hoten','','trim|alpha_numeric|xss_clean');
			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
			if ($this->form_validation->run() == FALSE)
			{
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				echo $id;
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
				$Masanpham = $this->input->post('masanpham',TRUE);
				$Makhachhang = $this->input->post('makhachhang',TRUE);
				$Noidung = $this->input->post('noidung',TRUE);
				$Thoigian = $this->input->post('thoigian',TRUE);				

				$tmp = $this->binhluan_model->update($id, $Masanpham, $Makhachhang, $Noidung, $Thoigian);
				if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
				else echo redirect(base_url('admin/error/edit.html'));
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

	function danhgia($chucnang = "view"){
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
		elseif ($chucnang == "insert") {
			$Masanpham = $this->input->post('Masanpham',TRUE);
			$Luotxem = $this->input->post('Luotxem',TRUE);
			$Luotmua = $this->input->post('Luotmua',TRUE);
			$Luotdanhgia = $this->input->post('Luotdanhgia',TRUE);
			$Tongdiem = $this->input->post('Tongdiem',TRUE);
			$Diemdanhgia = $this->input->post('Diemdanhgia',TRUE);		

			$tmp = $this->danhgia_model->insert($Masanpham, $Luotxem, $Luotmua, $Luotdanhgia, $Tongdiem, $Diemdanhgia);
			if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
			else echo redirect(base_url('admin/error/insert.html'));
		}
		elseif ($chucnang == "edit") {

			$this->form_validation->set_rules('username','','trim|required|max_length[255]|xss_clean');
			$this->form_validation->set_rules('hoten','','trim|alpha_numeric|xss_clean');
			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
			if ($this->form_validation->run() == FALSE)
			{
				$id = 0;
				$Idg = $this->input->get("id");
				if(is_numeric($Idg)) $id = $Idg;
				echo $id;
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
				$Masanpham = $this->input->post('Masanpham',TRUE);
				$Luotxem = $this->input->post('Luotxem',TRUE);
				$Luotmua = $this->input->post('Luotmua',TRUE);
				$Luotdanhgia = $this->input->post('Luotdanhgia',TRUE);
				$Tongdiem = $this->input->post('Tongdiem',TRUE);
				$Diemdanhgia = $this->input->post('Diemdanhgia',TRUE);

				$tmp = $this->danhgia_model->update($id, $Masanpham, $Luotxem, $Luotmua, $Luotdanhgia, $Tongdiem, $Diemdanhgia);
				if($tmp) echo redirect(base_url('admin/'.$this->data['page']));
				else echo redirect(base_url('admin/error/edit.html'));
			}						
		}
		elseif ($chucnang == 'delete') {
				$id = $this->input->post('id',TRUE);
				$a = $this->danhgia_model->delete($id);
				if($a)
					echo 1;
				else
					echo 0;
			}	
	}	
}