<?php 
 
    class Cart_model extends CI_Model { // Our Cart_model class extends the Model class
         
    	function __construct(){
			parent:: __construct();
		}

        // Function to retrieve an array with all product information
        function retrieve_products(){
            $query = $this->db->get('sanpham'); // Select the table products
            return $query->result_array(); // Return the results in a array.
        }         

        function validate_add_cart_item(){
     
            $id = $this->input->post('product_id'); // Assign posted product_id to $id
            $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
             
            $this->db->where('id', $id); // Select where id matches the posted id
            $query = $this->db->get('sanpham', 1); // Select the products where a match is found and limit the query by 1
             
            // Check if a row has matched our product id
            if($query->num_rows > 0){
             
            // We have a match!
                foreach ($query->result() as $row)
                {
                    // Create an array with product information
                    $data = array(
                        'id'      => $id,
                        'qty'     => $cty
                    );
                    var_dump($data);
                    // Add the data to the cart using the insert function that is available because we loaded the cart library
                    $this->cart->insert($data); 
                    var_dump($this->cart->contents());
                    return TRUE; // Finally return TRUE
                }
             
            }else{
                // Nothing found! Return FALSE! 
                return FALSE;
            }
        }       
    }
     
/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */