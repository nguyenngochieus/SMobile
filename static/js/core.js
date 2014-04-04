 var link = "http://localhost/SMobile/"; // Url to your application (including index.php/)
$(document).ready(function() { 
         
    $(".empty").live("click", function(){
    $.get(link + "cart/empty_cart", function(){
        $.get(link + "cart/show_cart", function(cart){
            alert("Product does not exist");
            $("#cart_content").html(cart);
            });
        });
        return false;
    });
 
});
function Submit_Form(id,qty){
     jQuery.post(link + "cart/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
            function(data){                 
                if(data == 'true'){
                    alert('Đã thêm vào giỏ hàng!');
                   jQuery.get(link + "cart/show_cart", function(cart){ // Get the contents of the url cart/show_cart
                        jQuery(".cart_drop").html(cart); // Replace the information in the div #cart_content with the retrieved data
                    });        
                }else{
                    alert("Product does not exist");
                }
         });        
}