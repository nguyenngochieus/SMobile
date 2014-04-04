<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thanhtoan extends Public_Controller {

	public function __construct(){
		parent:: __construct();		
		$this->data['page'] = 'trangchu';				
	}

	public function index()
	{
		$this->load->view('include/header',$this->data);
		$this->load->view('thanhtoan/index');
		$this->load->view('include/footer',$this->data);
	}
}