<div class="checkout-product product_table">
	<div class="hidden-phone">
	  <table>
		<thead>
		  <tr>
			<td class="name"><?=lang('sanpham')?></td>
			<td class="model">Loại sản phẩm</td>
			<td style="text-align: center;">Số lượng</td>
			<td class="price"><?=lang('giatien')?></td>
			<td class="total"><?=lang('thanhtien')?></td>
		  </tr>
		</thead>
		<tbody>
		<?php foreach ($this->cart->contents() as $items): 
              $product = $this->cart_model->getproduct($items['id']);                       
        ?>  
		  <tr>
			<td class="name"><a href="<?=base_url()?>sanpham/chitiet/<?=$items['id']?>"><?=$product[0]->TENSANPHAM?></a></td>
			<td class="model"><?=$product[0]->TENLOAI?></td>
			<td style="text-align: center;"><?=$items['qty']?></td>
			<td class="price"><?=$this->cart->format_number($items['price']); ?></td>
			<td class="total"><?=$this->cart->format_number($items['subtotal']); ?></td>
		  </tr>
		  <?php endforeach; ?>
		</tbody>
		<tfoot>
		  		  <tr>
			<td colspan="4" class="price"><b><?=lang('thanhtien')?> :</b></td>
			<td class="total"><?=$this->cart->format_number($this->cart->total());?> đ</td>
		  </tr>
		  		  <tr>
			<td colspan="4" class="price"><b><?=lang('phivanchuyen')?>:</b></td>
			<td class="total"><?=number_format($phivanchuyen,"0",",",".")?></td>
		  </tr>
		  		  <tr>
			<td colspan="4" class="price"><b><?=lang('tongcong')?></b></td>
			<td class="total"><?=$this->cart->format_number($this->cart->total() + $phivanchuyen);?></td>
		  </tr>
		  		</tfoot>
	  </table>
	</div>
</div>
<div class="payment"><div class="buttons">
  <div class="right">
    <input type="button" value="Xác nhận thanh toán" id="button-confirm" class="button" />
  </div>
</div>
<script type="text/javascript"><!--
var url = 'http://localhost/SMobile/';
$('#button-confirm').bind('click', function() {
	$.ajax({ 
		type: 'get',
		url: 'index.php?route=payment/cod/confirm',
		success: function() {
			location = url + 'thanhtoan/done';
		}		
	});
});
//--></script> 
</div>
