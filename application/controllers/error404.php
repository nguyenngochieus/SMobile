<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class error404 extends CI_Controller{

	public $data;

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('error404');
	}

}