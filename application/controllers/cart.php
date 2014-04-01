<?php
 
class Cart extends CI_Controller { // Our Cart class extends the Controller class
     
    public function __construct()
	{
		parent::__construct();
		$this->load->model('cart_model');
	}

    public function index()
	{
	    $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products     
	    $data['content'] = 'cart/products'; // Select our view file that will display our products
	    $this->load->view('home', $data); // Display the page with the above defined content 
	} 

	function add_cart_item(){
     
    if($this->cart_model->validate_add_cart_item() == TRUE){
         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
            redirect('home'); // If javascript is not enabled, reload the page with new data
        }
        else{
            echo 'fafa'; // If javascript is enabled, return true, so the cart gets updated
	        }
	    }     
	} 

	function show_cart(){
    $this->load->view('cart');
	}
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */