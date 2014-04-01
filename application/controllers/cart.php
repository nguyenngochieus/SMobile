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
		print_r($data['products']); 
	} 
 
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */