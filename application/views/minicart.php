<?php 
if(!$this->cart->contents()):
    echo '<ul><li>'.lang('no_product').'</li></ul>';
else:
?>   
    <ul>
        <?php foreach ($this->cart->contents() as $items): 
        $product = $this->cart_model->getproduct($items['id']);
        ?>  
        <li><img style="width: 20%" src="<?= base_url()?>upload/images/<?=$product[0]->HINH?>"><a href="#"> <?=$product[0]->TENSANPHAM?></a> <span class="price"><?php echo $this->cart->format_number($items['price']); ?></span></li>                        
        <?php endforeach; ?>
        <div class="cart_bottom">
            <div class="subtotal_menu"><small>Tổng tiền:</small><big><?php echo $this->cart->format_number($this->cart->total()); ?></big></div>
            <a href="<?=base_url()?>cart/giohang">Thanh toán</a></div>
    </ul>
<?php endif; ?>