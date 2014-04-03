<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends CI_Controller {
    public function __construct()
    {       
      parent::__construct();

      $this->data['Username'] = $this->login->getLoginUsername();  
      $this->data['Name'] = $this->login->GetName();
      $this->data['UserID'] = $this->login->GetUserID();
      $this->data['Quyen'] = $this->login->GetUserRole();
      
  		session_start();    
  		$this->data['title'] = "Trang chủ";
      $this->cart->product_name_rules .=  "\pL";  
      $this->load->model('public_model'); 
        if(!isset($_GET['lang']))
        {
          $lang = 'vietnamese';
          $this->data['lang_db'] = '';
        }
        else
        {
          $lang=$_GET['lang'];
          if ($lang == 'vietnamese') {
            $this->data['lang_db'] = '';
          }
          else{
            $this->data['lang_db'] = '_EN';
          }
        }

      $this->lang->load('main',$lang);
  		$this->data['menu'] = $this->public_model->GetMenu($this->data['lang_db']);
      $this->data['FMenu1'] = $this->public_model->FMenu1($this->data['lang_db']);
      $this->data['FMenu2'] = $this->public_model->FMenu2($this->data['lang_db']);
      $this->data['FMenu3'] = $this->public_model->FMenu3($this->data['lang_db']);
    }
    public $data;
}
