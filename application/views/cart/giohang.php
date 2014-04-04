 <div class="section_container"> 
    <!--Mid Section Starts-->
    <section> 
      <!--CART STARTS-->
      <div id="shopping_cart" class="full_page">
        <h1><?=lang('giohang')?></h1>
          <div class="message error msgalert" style=" display:none;">
                <strong>Có lỗi!</strong> Dữ liệu đang được sử dụng!
              </div>
           <div class="message error msgerror" style=" display:none;">
              <strong>Có lỗi!</strong> Xảy ra lỗi xử lý!
            </div>
           <div class="message success msgsuccess" <?php if(isset($_GET['i']) && $_GET['i'] == "success") echo ""; else echo 'style="display:none"'?>>
              Xử lý thành công!
            </div>
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
            <?php foreach ($this->cart->contents() as $items): 
              $product = $this->cart_model->getproduct($items['id']);                       
              ?>  
            <tr id="cate_<?=$items['rowid']?>">
              <?php echo form_hidden('rowid[]', $items['rowid']); ?>
              <td width="10%"><img src="<?= base_url()?>upload/images/<?=$product[0]->HINH?>" style="max-width:60%"></td>
              <td class="align_left" width="44%"><a class="pr_name" href="<?=base_url()?>sanpham/<?=$items['id']?>">
                <?=$product[0]->TENSANPHAM?>

                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                    <p>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                        <?php endforeach; ?>
                    </p>

                <?php endif; ?>
              </a><span class="pr_info"><?=$product[0]->TENLOAI?> </span></td>
              <td class="align_center"><a href="#" class="edit">Edit</a></td>
              <td class="align_center vline"><span class="price"><?=$this->cart->format_number($items['price']);?></span></td>
              <td class="align_center vline"><?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'qty_box')); ?></td>
              <td class="align_center vline"><span class="price"><?=$this->cart->format_number($items['subtotal']); ?></span></td>
              <td class="align_center vline"><a href="#" onclick="DeleteItem('<?=$items['rowid']?>')" class="remove"></a></td>
            </tr>   
            <?php endforeach; ?>   
          </table>
          <div class="totals">
          <p><?php echo form_submit('', lang('update_cart'),'class="continuee"'); echo anchor(base_url().'cart/empty_cart', lang('empty_cart'));?></p>
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
                  <td class="align_right" style=""><span class="total"><?=$this->cart->format_number($this->cart->total());?></span></td>
                </tr>                
            </table>
          </div>
        </div>
        <?php echo form_close();?>
        <div class="action_buttonbar">
          <button type="button" onClick="parent.location='<?=base_url()?>'" title="" class="continue"><?=lang('tieptucmuahang')?></button>
          <button type="button" onClick="parent.location='<?=base_url()?>thanhtoan'" title="" class="checkout"><?=lang('thanhtoan')?></button>
        </div>
      </div>
      <!--CART ENDS-->       
   
    </section>
    <!--Mid Section Ends--> 
  </div>

<style type="text/css">
  .continuee{
    margin-left: 40px;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    padding: 8px 14px;
    background: #544F4B;
    border: 0px;
    line-height: 100%;
    cursor: pointer;
  }
</style>
<script type="text/javascript">
  var url = "http://localhost/SMobile/"; 
    function DeleteItem(id)
    {
         var c = confirm("Xác nhận xóa dữ liệu? ");
          if(c)
           {
            jQuery.ajax({
                url: "" + url + "cart/remove_cart_item/",
                type: "POST",
                data: {id: id},
                cache: false
            }).done(function(data) {
                if(data == 'true')
                {
                    jQuery('.msgsuccess').fadeIn();
                    jQuery('#cate_'+id).fadeOut(function()
                    {
                        jQuery(this).remove();
                    });
                }
                else
                {
                    alert(data);
                    jQuery('.msgerror').fadeIn();
                }
                
            });
        }
    }
    </script>