<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sanpham extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->load->model('binhluan_model');
		$this->load->library('pagination');
		$this->data['link'] = '';
		$this->data['page'] = 'sanpham';
	}	

	public function loaisanpham()
	{
		$url = $this->input->get('url',true);
		$this->data['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";		
		$this->data['link_sort'] = $this->data['link'];
		$this->data['link_item'] = $this->data['link'];
		$sort = '';
		$item = 12;			
		if(isset($_GET['sort']))
		{
			$sort = $this->input->get('sort',true);
			$this->data['link_sort'] = str_replace( '&sort='.$sort, '', $this->data['link'] );
		}
		if(isset($_GET['item']))
		{
			$item = $this->input->get('item',true);
			$this->data['link_item'] = str_replace( '&item='.$item, '', $this->data['link'] );
		}

		$arr = explode('-',$url);
		$ma = current($arr);		
		if(isset($arr[1]) && $arr[1] != '')		
			$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($arr[1],$this->data['lang_db'])->TEN;
		else
			$this->data['TenNhaCungCap'] = "";

		$this->data['idLoai'] = $ma;		
		$this->data['TenLoai'] = $this->public_model->GetTenLoai($ma,$this->data['lang_db']);

        $config['page_query_string'] = TRUE;
        $config['per_page'] = $item; 
        $this->data['per_page'] = 0;

        if(isset($_GET['per_page']) && $_GET['per_page'] != '')
        {
        	$this->data['per_page'] = $this->input->get('per_page',TRUE);
        	$this->data['link'] = str_replace( '&per_page='.$this->data['per_page'], '', $this->data['link'] );
        }        	
     	 // config pagination
        $config['base_url'] = $this->data['link']; 
        $config['total_rows'] = $this->public_model->count_SanPhamTheoLoai($arr); 
        $config['per_page'] = $item; 
        $config['full_tag_open'] = '<div class="pagination"><div class="links">';
        $config['full_tag_close'] = '</div></div>';         
        $this->pagination->initialize($config); 

		$this->data['result'] = $this->public_model->GetSanPhamTheoLoai($arr,$this->data['lang_db'],$sort,$this->data['per_page'],$config['per_page']);
		$this->data['NhaCungCap'] = $this->public_model->GetNhaCungCapTheoLoai($arr);
		$this->data['page'] = 'loaisanpham'.$ma; // dùng cho main menu		
		$this->load->view('include/header',$this->data);
		$this->load->view('product/loaisanpham',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function nhacungcap()
	{		
		$url = $this->input->get('url',true);
		$this->data['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";		
		$this->data['link_sort'] = $this->data['link'];
		$this->data['link_item'] = $this->data['link'];
		$sort = '';
		$item = 12;			
		if(isset($_GET['sort']))
		{
			$sort = $this->input->get('sort',true);
			$this->data['link_sort'] = str_replace( '&sort='.$sort, '', $this->data['link'] );
		}
		if(isset($_GET['item']))
		{
			$item = $this->input->get('item',true);
			$this->data['link_item'] = str_replace( '&item='.$item, '', $this->data['link'] );
		}

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

		$this->data['idNhaCungCap'] = $ma;	
		$this->data['TenNhaCungCap'] = $this->public_model->GetTenNhaCungCap($ma,$this->data['lang_db']);
        $config['page_query_string'] = TRUE;
        $config['per_page'] = $item; 
        $this->data['per_page'] = 0;

        if(isset($_GET['per_page']) && $_GET['per_page'] != '')
        {
        	$this->data['per_page'] = $this->input->get('per_page',TRUE);
        	$this->data['link'] = str_replace( '&per_page='.$this->data['per_page'], '', $this->data['link'] );
        }        	

     	 // config pagination
        $config['base_url'] = $this->data['link']; 
        $config['total_rows'] = $this->public_model->count_SanPhamTheoNCC($arr); 
        $config['per_page'] = $item; 
        $config['full_tag_open'] = '<div class="pagination"><div class="links">';
        $config['full_tag_close'] = '</div></div>';         
        $this->pagination->initialize($config); 
        
		$this->data['result'] = $this->public_model->GetSanPhamTheoNhaCungCap($arr,$this->data['lang_db'],$sort,$this->data['per_page'],$config['per_page']);
		$this->data['Loai'] = $this->public_model->GetLoaiTheoNhaCungCap($ma,$this->data['lang_db']);		
		$this->load->view('include/header',$this->data);
		$this->load->view('product/nhacungcap',$this->data);
		$this->load->view('include/footer',$this->data);
	}

	public function timkiem()
	{
		$this->data['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";		
		$this->data['link_sort'] = $this->data['link'];
		$this->data['link_item'] = $this->data['link'];
		$sort = '';
		$item = 12;			
		if(isset($_GET['sort']))
		{
			$sort = $this->input->get('sort',true);
			$this->data['link_sort'] = str_replace( '&sort='.$sort, '', $this->data['link'] );
		}
		if(isset($_GET['item']))
		{
			$item = $this->input->get('item',true);
			$this->data['link_item'] = str_replace( '&item='.$item, '', $this->data['link'] );
		}

		$filter_name = '';
		$filter_price_from = '';
		$filter_price_to = '';
		$filter_category_id  = 0;
		$filter_description = 'false';
		
		if(isset($_GET['filter_name']))
			$filter_name = $this->input->get('filter_name',true);
		if(isset($_GET['filter_price_from']))
			$filter_price_from = $this->input->get('filter_price_from',true);
		if(isset($_GET['filter_price_to']))
			$filter_price_to = $this->input->get('filter_price_to',true);
		if(isset($_GET['filter_category_id']))
			$filter_category_id = $this->input->get('filter_category_id',true);
		if(isset($_GET['filter_description']))
			$filter_description = $this->input->get('filter_description',true);
		// pagination
        $config['page_query_string'] = TRUE;
        $config['per_page'] = $item; 
        $this->data['per_page'] = 0;
        if(isset($_GET['per_page']) && $_GET['per_page'] != '')
        {
        	$this->data['per_page'] = $this->input->get('per_page',TRUE);
        	$this->data['link'] = str_replace( '&per_page='.$this->data['per_page'], '', $this->data['link'] );
        }        	

     	 // config pagination
        $config['base_url'] = $this->data['link']; 
        $config['total_rows'] = count($this->public_model->count_TimKiem($filter_name,$this->data['lang_db'],$sort,$filter_price_from,$filter_price_to,$filter_category_id,$filter_description));
        if(!isset($_GET['filter_name']) || $_GET['filter_name'] == '')
        	 $config['total_rows'] = 0;
        $config['per_page'] = $item; 
        $config['uri_segment'] = 4; 
        $config['full_tag_open'] = '<div class="pagination"><div class="links">';
        $config['full_tag_close'] = '</div></div>';         
        $this->pagination->initialize($config);   

		$this->data['result'] = $this->public_model->TimKiem($filter_name,$this->data['lang_db'],$sort,$this->data['per_page'],$config['per_page'],$filter_price_from,$filter_price_to,$filter_category_id,$filter_description);
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
				$this->data['detail'] = $this->public_model->GetChiTietDT($ma);
			elseif ($this->data['result'][0]->LOAI==2)
				$this->data['detail'] = $this->public_model->GetChiTietLT($ma);
			elseif ($this->data['result'][0]->LOAI==3)
				$this->data['detail'] = $this->public_model->GetChiTietMTB($ma);								
			$this->data['result_cm'] = $this->binhluan_model->get_binhluan_sp($ma);
			$this->data['result_rv'] = $this->public_model->GetDanhGia($ma);			
			if(count($this->data['result']) == 0 ) echo redirect(base_url());
			$this->data['SPCungLoai'] = $this->public_model->GetSanPhamCungLoai($ma,$this->data['result'][0]->LOAI,$this->data['result'][0]->NHACUNGCAP,$this->data['lang_db']);
			$this->data['page'] = 'loaisanpham';
			$this->public_model->update_view($ma);
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

	public function danhgia($ma)
	{
		if(isset($ma) && $ma != "")
		{
			$diemdanhgia = $this->input->post('diemdanhgia',TRUE);
			$getdanhgia = $this->public_model->GetDanhGia($ma);
			$Tongdiem = $getdanhgia[0]->TONGDIEM + $diemdanhgia;
			$Luotdanhgia = $getdanhgia[0]->LUOTDANHGIA + 1;			
			$Diemdanhgia = round(($Tongdiem/$Luotdanhgia),2);			
			$this->load->model('danhgia_model');
			$tmp = $this->danhgia_model->update_rv($ma, $Luotdanhgia, $Tongdiem, $Diemdanhgia);
			if($tmp) echo redirect(base_url('sanpham/chitiet/'.$ma));
			else echo redirect(base_url('admin/error/insert'));
		}
	}
}