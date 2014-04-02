 <div class="section_container"> 
    <!--Mid Section Starts-->
    <section> 
      <!--CART STARTS-->
      <div id="shopping_cart" class="full_page">
        <h1><?=lang('giohang')?></h1>
        <div class="message success">Sửa giỏ hàng thành công</div>
        <div class="action_buttonbar">
          <button type="button" title="" class="continue"><?=lang('tieptucmuahang')?></button>
          <button type="button" onClick="parent.location='leisure_checkout.html'" title="" class="checkout"><?=lang('thanhtoan')?></button>
        </div>
        <div class="cart_table">
        <?php echo form_open(base_url().'cart/update_cart'); ?>
          <table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
            <tr>
              <th colspan="2"><?=lang('sanpham')?></th>
              <th class="align_center" width="6%"></th>
              <th class="align_center" width="12%"><?=lang('giatien')?></th>
              <th class="align_center" width="10%"><?=lang('soluong')?></th>
              <th class="align_center" width="12%"><?=lang('thanhtien')?></th>
              <th class="align_center" width="6%"></th>
            </tr>
            <?php foreach ($this->cart->contents() as $items): ?>  
            <tr>
              <?php echo form_hidden('rowid[]', $items['rowid']); ?>
              <td width="10%"><img src="images/cart1.jpg"></td>
              <td class="align_left" width="44%"><a class="pr_name" href="#">
                <?php echo $items['name']; ?>

                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                    <p>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                        <?php endforeach; ?>
                    </p>

                <?php endif; ?>
              </a><span class="pr_info">Proin gravida </span></td>
              <td class="align_center"><a href="#" class="edit">Edit</a></td>
              <td class="align_center vline"><span class="price"><?=$this->cart->format_number($items['price']);?></span></td>
              <td class="align_center vline"><?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'qty_box')); ?></td>
              <td class="align_center vline"><span class="price"><?=$this->cart->format_number($items['subtotal']); ?></span></td>
              <td class="align_center vline"><a href="<?=base_url()?>cart/remove_cart_item?id=<?=$items['rowid']?>" class="remove"></a></td>
            </tr>   
            <?php endforeach; ?>   
          </table>
          <div class="totals">
          <p><?php echo form_submit('', 'Update your Cart'); echo anchor(base_url().'cart/empty_cart', 'Empty Cart', 'class="empty"');?></p>
            <table id="totals-table">
                <tr>
                  <td width="60%" colspan="1" class="align_left" ><strong><?=lang('thanhtien')?></strong></td>
                  <td class="align_right" style=""><strong><span class="price"><?=$this->cart->format_number($this->cart->total());?></span></strong></td>
                </tr>
                <tr>
                  <td width="60%" colspan="1" class="align_left" ><?=lang('phivanchuyen')?></td>
                  <td class="align_right" style=""><span class="price">$0.00</span></td>
                </tr>
                <tr>
                  <td width="60%" colspan="1" class="align_left total" ><?=lang('tongcong')?></td>
                  <td class="align_right" style=""><span class="total">$109.00</span></td>
                </tr>                
            </table>
          </div>
        </div>
        <?php echo form_close();?>
        <div class="action_buttonbar">
          <button type="button" title="" class="continue"><?=lang('tieptucmuahang')?></button>
          <button type="button"  onClick="parent.location='leisure_checkout.html'" title="" class="checkout"><?=lang('thanhtoan')?></button>
        </div>
      </div>
      <!--CART ENDS--> 
      
      <div class="checkout_tax">
      	<div class="shipping_tax">
        	<h4>Estimate Shipping and Tax</h4>
            <p>Enter your destination to get a shipping estimate.</p>
            <label>Country</label><select><option>Canada</option></select><label>Postal code</label><input type="text">
            <br class="clear"/>
            <label>State</label><select><option>Vancouver</option></select>
            <button type="button" title="" class="brown_btn">Get a Quote</button>
        </div>
        <div class="checkout_discount">
        	<h4>Discount codes</h4>
            <p>Enter your coupon code if you have one.</p>
            <input type="text">
            <button type="button" title="" class="brown_btn">Apply Coupon</button>
        </div>
      </div>
      
      
      <!--Newsletter_subscribe Starts-->
      <div class="subscribe_block">
        <div class="find_us">
          <h3>Find us on</h3>
          <a class="twitter" href="#"></a> <a class="facebook" href="#"></a> <a class="rss" href="#"></a> </div>
        <div class="subscribe_nl">
          <h3>Subscribe to our Newsletter</h3>
          <small>Instant wardrobe updates, new arrivals, fashion news, don’t miss a beat – sign up to our newsletter now.</small>
          <form id="newsletter" method="post" action="#">
            <input type="text" class="input-text" value="Enter your email" title="Enter your email" id="newsletter" name="email">
            <button class="button" title="" type="submit"></button>
          </form>
        </div>
      </div>
      <!--Newsletter_subscribe Ends--> 
    </section>
    <!--Mid Section Ends--> 
  </div>