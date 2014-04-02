<?php 
if(!$this->cart->contents()):
    echo '<ul><li>'.lang('no_product').'</li></ul>';
else:
?>   
    <ul>
        <?php foreach ($this->cart->contents() as $items): ?>  
        <li><img src="<?= base_url()?>static/images/mini_c_item1.png"><a href="#"> <?php echo $items['name']; ?></a> <span class="price"><?php echo $this->cart->format_number($items['price']); ?></span></li>                        
        <?php endforeach; ?>
        <div class="cart_bottom">
            <div class="subtotal_menu"><small>Subtotal:</small><big><?php echo $this->cart->format_number($this->cart->total()); ?></big></div>
            <a href="leisure_cart.html">Checkout</a></div>
    </ul>
<?php endif; ?>