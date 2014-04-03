<?php
 
class Cart extends Public_Controller { 
     
    public function __construct()
	{
		parent::__construct();
		$this->load->model('cart_model');
		$this->data['Username'] = $this->login->getLoginUsername();  
		$this->data['Name'] = $this->login->GetName();
		$this->data['UserID'] = $this->login->GetUserID();
		$this->data['Quyen'] = $this->login->GetUserRole();
	}

    public function index()
	{
	    $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products     
	    $data['content'] = 'cart/products'; // Select our view file that will display our products
	    $this->load->view('home', $data); // Display the page with the above defined content 
	} 

	public function giohang()
	{
		if($this->cart->contents())
		{
			$this->load->view('include/header',$this->data);
		    $this->load->view('cart/giohang.php');
		    $this->load->view('include/footer');
		}
		else
		{
			redirect(base_url().'home');
		}
		
	}

	function add_cart_item(){
     
    if($this->cart_model->validate_add_cart_item() == TRUE){         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
            redirect(base_url().'home'); // If javascript is not enabled, reload the page with new data
        }
        else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
	        }
	    }     
	} 

	function remove_cart_item(){
    $id = $this->input->get('id',TRUE);    
    if($this->cart_model->validate_remove_cart_item($id) == TRUE){         
        // Check if user has javascript enabled
        //if($this->input->post('ajax') != '1'){
        redirect(base_url().'cart/giohang'); // If javascript is not enabled, reload the page with new data
        }
        else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
	        }
	      
	} 

	function show_cart(){
    	$this->load->view('minicart');
	}

	function empty_cart(){
	    $this->cart->destroy(); // Destroy all cart data
	    redirect(base_url().'home'); // Refresh the page
	}

	function update_cart(){
	    $this->cart_model->validate_update_cart();
	    redirect(base_url().'cart/giohang');
	}
}
