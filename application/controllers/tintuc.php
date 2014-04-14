<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tintuc extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->data['page'] = 'tintuc';	
		$this->load->model('tintuc_model');			
	}

	public function index()
	{	
		if(isset($_GET['id']) && $_GET['id'] != '')
		{		
			$id = $this->input->get('id',TRUE);
			$this->data['result'] = $this->tintuc_model->get_chitiet_tintuc($id);
			$loai = $this->tintuc_model->get_loaitin($id);
			$this->data['tinlienquan'] = $this->tintuc_model->get_tinlienquan($id,$loai->LOAITIN);
			$this->load->view('include/header',$this->data);
			$this->load->view('tintuc/index',$this->data);
			$this->load->view('include/footer',$this->data);
		}
		else
			redirect(base_url());

	}
}