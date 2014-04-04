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

        function getproduct($id){
            $query =  $this->db->query('SELECT B2.TENLOAI, TENSANPHAM, DONGIA, HINH FROM SANPHAM B1, LOAISANPHAM B2 WHERE B1.ID = '.$id.' AND B1.LOAI = B2.ID');
            return $query->result();
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
                        'qty'     => $cty,
                        'price'   => $row->DONGIA,
                        'name'    => 'sp'.$id
                    );
                    // Add the data to the cart using the insert function that is available because we loaded the cart library
                    $this->cart->insert($data); 
                    return TRUE; // Finally return TRUE
                }
             
            }else{
                // Nothing found! Return FALSE! 
                return FALSE;
            }
        }    

        function validate_remove_cart_item(){   
            $id = $this->input->post('id');    
            $data = array(
               'rowid' => $id,
               'qty'   => 0
            );

            $this->cart->update($data); 
            return TRUE;     
        }    

        function validate_update_cart(){
     
        // Get the total number of items in cart
        $total = $this->cart->total_items();
         
        // Retrieve the posted information
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty'); 
        // Cycle true all items and update them
        for($i=0;$i < $total;$i++)
        {
            // Create an array with the products rowid's and quantities. 
            $data = array(
               'rowid' => $item[$i],
               'qty'   => $qty[$i]
            );
             
            // Update the cart with the new information
            $this->cart->update($data);
        }
 
    }   
}

     
/* End of file cart_model.php */
/* Location:d ./application/models/cart_model.php */