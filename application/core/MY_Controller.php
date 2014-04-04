<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends CI_Controller {
    public function __construct()
    {       
      parent::__construct();
  		session_start();    
  		$this->data['title'] = "Trang chủ";
      $this->cart->product_name_rules .=  "\pL";  
      $this->load->model(array('public_model','bodem_model','cart_model')); 

      $this->data['page'] = '';       
      $this->data['Username'] = $this->login->getLoginUsername();  
      $this->data['Name'] = $this->login->GetName();
      $this->data['UserID'] = $this->login->GetUserID();
      $this->data['Quyen'] = $this->login->GetUserRole();

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
      #if (!isset($_SESSION['BO_DEM']))
      #{ 
      if(substr($_SERVER['REQUEST_URI'],strlen($_SERVER['REQUEST_URI'])-3,3) != "jpg"){
        $this->bodem_model->them($_SERVER['HTTP_USER_AGENT'], $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s'), $_SERVER['REQUEST_URI']);
        #$_SESSION['BO_DEM'] = 'OK';
      }
    }
    public $data;
}
