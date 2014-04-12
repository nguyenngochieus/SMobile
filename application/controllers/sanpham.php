<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sanpham extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->load->model('binhluan_model');
		$this->data['link'] = '';
		$this->data['page'] = 'sanpham';
	}	

	public function loaisanpham($url)
	{
		$this->data['link'] = $url;	
		$sort = '';
		$item = 12;
		$arr = explode('-',$url);
		$ma = current($arr);		
		if(isset($arr[1]) && $arr[1] != '')		
			$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($arr[1],$this->data['lang_db'])->TEN;
		else
			$this->data['TenNhaCungCap'] = "";
		if(isset($_GET['sort']))
			$sort = $this->input->get('sort',true);
		if(isset($_GET['item']))
			$item = $this->input->get('item',true);
		$this->data['idLoai'] = $ma;		
		$this->data['TenLoai'] = $this->public_model->GetTenLoai($ma,$this->data['lang_db']);
		// pagination
        $this->load->library('pagination');
        // config pagination
        $config['base_url'] = base_url('sanpham/loaisanpham/'.$url); // xác định trang phân trang 
        $config['total_rows'] = $this->public_model->count_SanPhamTheoLoai($arr); // xác định tổng số record 
        $config['per_page'] = $item; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 4; // xác định segment chứa page number    
        $config['full_tag_open'] = '<div class="pagination"><div class="links">';
        $config['full_tag_close'] = '</div></div>';         
        $this->pagination->initialize($config); 
        $page = $this->uri->segment(4);
        if (!$this->uri->segment(4))
       		$page = 0;    
		$this->data['result'] = $this->public_model->GetSanPhamTheoLoai($arr,$this->data['lang_db'],$sort,$page,$config['per_page']);
		$this->data['NhaCungCap'] = $this->public_model->GetNhaCungCapTheoLoai($arr);
		$this->data['page'] = 'loaisanpham'.$ma; // dùng cho main menu		
		$this->load->view('include/header',$this->data);
		$this->load->view('product/loaisanpham',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function nhacungcap($url)
	{		
		$this->data['link'] = $url;	
		$sort = '';
		$item = 12;
		$arr = explode('-',$url);
		$ma = current($arr);
		if(isset($arr[1]) && $arr[1] != '')
		{
			$this->data['idLoai'] = $arr[1];
			$this->data['TenLoai'] = $this->public_model->GetTenloai($arr[1],$this->data['lang_db'])->TEN;
			$this->data['page'] = 'loaisanpham'.$this->data['idLoai']; // dùng cho main menu			
		}		
		else
			$this->data['TenLoai'] = "";
		if(isset($_GET['sort']))
			$sort = $this->input->get('sort',true);
		if(isset($_GET['item']))
			$item = $this->input->get('item',true);
		$this->data['idNhaCungCap'] = $ma;	
		$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($ma,$this->data['lang_db']);
		// pagination
        $this->load->library('pagination');
        // config pagination
        $config['base_url'] = base_url('sanpham/loaisanpham/'.$url); // xác định trang phân trang 
        $config['total_rows'] = $this->public_model->count_SanPhamTheoNCC($arr); // xác định tổng số record 
        $config['per_page'] = $item; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 4; // xác định segment chứa page number    
        $config['full_tag_open'] = '<div class="pagination"><div class="links">';
        $config['full_tag_close'] = '</div></div>';         
        $this->pagination->initialize($config); 
        $page = $this->uri->segment(4);
        if (!$this->uri->segment(4))
       		$page = 0;    
		$this->data['result'] = $this->public_model->GetSanPhamTheoNhaCungCap($arr,$this->data['lang_db'],$sort,$page,$config['per_page']);
		$this->data['Loai'] = $this->public_model->GetLoaiTheoNhaCungCap($ma,$this->data['lang_db']);		
		$this->load->view('include/header',$this->data);
		$this->load->view('product/nhacungcap',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function timkiem()
	{
		$key = $this->input->get('q',true);
		$this->data['link'] = $key;	
		$sort = '';
		$item = '';			
		if(isset($_GET['sort']))
			$sort = $this->input->get('sort',true);
		if(isset($_GET['item']))
			$sort = $this->input->get('item',true);
		$this->data['result'] = $this->public_model->TimKiem($key,$this->data['lang_db'],$sort,$item);
		$this->data['Loai'] = $this->public_model->GetMenu($this->data['lang_db']);
		$this->data['page'] = 'timkiem';
		$this->load->view('include/header',$this->data);
		$this->load->view('product/timkiem',$this->data);
		$this->load->view('include/footer',$this->data);
	}
	
	public function chitiet($ma)
	{

		if(isset($ma) && $ma != "")
		{
			$this->data['result'] = $this->public_model->GetChiTietSP($ma,$this->data['lang_db']);			
			if($this->data['result'][0]->LOAI==1)
				$this->data['detail'] = $this->public_model->GetChiTietDT($this->data['result'][0]->ID);
			elseif ($this->data['result'][0]->LOAI==2)
				$this->data['detail'] = $this->public_model->GetChiTietLT($this->data['result'][0]->ID);
			elseif ($this->data['result'][0]->LOAI==3)
				$this->data['detail'] = $this->public_model->GetChiTietMTB($this->data['result'][0]->ID);								
			$this->data['result_cm'] = $this->binhluan_model->get_binhluan_sp($ma);
			if(count($this->data['result']) == 0 ) echo redirect(base_url());
			$this->data['SPCungLoai'] = $this->public_model->GetSanPhamCungLoai($ma,$this->data['result'][0]->LOAI,$this->data['lang_db']);
			$this->data['page'] = 'loaisanpham';
			$this->load->helper('form');
			$this->load->view('include/header',$this->data);
			$this->load->view('product/chitiet',$this->data);
			$this->load->view('include/footer',$this->data);
		}
		else
			redirect(base_url());
	}

	public function comment($ma)
	{		
		if(isset($ma) && $ma != "")
		{
			$name = $this->input->post('name',TRUE);
			$email = $this->input->post('email',TRUE);
			$text = $this->input->post('text',TRUE);
			$tmp = $this->binhluan_model->insert($ma,$name,$email,$text);
			if($tmp) echo redirect(base_url('sanpham/chitiet/'.$ma));
			else echo redirect(base_url('admin/error/insert'));
		}
		else
			redirect(base_url());
	}

	public function danhgia($id)
	{
		
	}
}