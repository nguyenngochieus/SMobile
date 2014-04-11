<div class="section_container">
        <!--Mid Section Starts-->
        <section>
           <div id="content" class="full_page">  <h1>Thanh toán</h1>
  <div class="checkout_steps">
	<ol id="checkoutSteps">
		<li id="checkout" class="sct">
		  <div class="step-title">Bước 1: Xác nhận tài khoản</div>
		  <div class="checkout-content"></div>
		</li>
		<li id="payment-address" class="sct">
		  <div class="step-title"><span>Bước 2: Thông tin khách hàng</span></div>
		  <div class="checkout-content"></div>
		</li>
		<li id="shipping-address" class="sct">
		  <div class="step-title">Bước 3: Thông tin giao hàng</div>
		  <div class="checkout-content"></div>
		</li>
		<li id="shipping-method" class="sct">
		  <div class="step-title">Bước 4: Cách thức giao hàng</div>
		  <div class="checkout-content"></div>
		</li>
		<li id="confirm" class="sct">
		  <div class="step-title">Bước 5: Xác nhận hóa đơn</div>
		  <div class="checkout-content"></div>
		</li>
	</ol>
  </div>
  </div>
      
        </section>
        <!--Mid Section Ends-->
    </div>
    <script type="text/javascript">
var url = 'http://localhost/SMobile/';

$('#checkout .checkout-content input[name=\'account\']').live('change', function() {
	if ($(this).attr('value') == 'register') {
		$('#payment-address .step-title span').html('Step 2: Account &amp; Billing Details');
	} else {
		$('#payment-address .step-title span').html('Step 2: Billing Details');
	}
});

$('.step-title a').live('click', function() {
	$('.checkout-content').slideUp('slow');
	$('.sct').removeClass('section allow active');
	
	$(this).parent().parent().find('.checkout-content').slideDown('slow');
	$(this).closest('.sct').addClass('section allow active');
});

$(document).ready(function() {
		$.ajax({
		url: url + 'thanhtoan/kiemtrauser',
		type: 'post',
		data: {username: 'true'},
		cache: false,		
		success: function(data) {
			if(data == 'false')
			{
				$.ajax({
					url: url + 'thanhtoan/login',
					dataType: 'html',
					success: function(html) {
						$('#checkout .checkout-content').html(html);
							
						$('#checkout .checkout-content').slideDown('slow');
						
						$('.sct').removeClass('section allow active');
						$('#checkout').addClass('section allow active');
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});	
			}
			else
			{
				$.ajax({
				url: url + 'thanhtoan/address',
				dataType: 'html',
				success: function(html) {
					$('.warning, .error').remove();
					
					$('#payment-address .checkout-content').html(html);
						
					$('#checkout .checkout-content').slideUp('slow');
						
					$('#payment-address .checkout-content').slideDown('slow');
					
					$('.sct').removeClass('section allow active');
					$('#payment-address').addClass('section allow active');
					
					$('#payment-address').addClass('section allow active');
						
					$('.step-title a').remove();
											
					$('#checkout').removeClass('section allow active');
					}
				});
			}			
		},
	});	
		
});

// Login
$('#button-login').live('click', function() {	
	$.ajax({
		url: url + 'thanhtoan/kiemtralogin',
		type: 'post',
		data: {username: $('#username').val(), password: $('#password').val()},
		cache: false,
		dataType : 'json',
		beforeSend: function() {
			$('#button-login').attr('disabled', true);
			$('#button-login').after('<span class="wait">&nbsp;<img src="http://localhost/SMobile/static/images/loading.gif" alt="" /></span>');
		},		
		complete: function() {
			$('#button-login').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {
			if(json['error'] == 0)
			{
				$.ajax({
				url: url + 'thanhtoan/address',
				dataType: 'html',
				success: function(html) {
					$('.warning, .error').remove();
					
					$('#payment-address .checkout-content').html(html);
						
					$('#checkout .checkout-content').slideUp('slow');
						
					$('#payment-address .checkout-content').slideDown('slow');
					
					$('.sct').removeClass('section allow active');
					$('#payment-address').addClass('section allow active');
					
					$('#payment-address').addClass('section allow active');
						
					$('.step-title a').remove();
											
					$('#checkout').removeClass('section allow active');
					}
				});
			}
			else
			{
				$('.warning, .error').fadeOut('slow');
				$('.warning, .error').remove();
				$('#checkout .checkout-content').prepend('<div class="warning" style="display: none;">' + json['msg'] + '</div>');
				
				$('.warning').fadeIn('slow');
				//setTimeout(function(){$('.warning').fadeOut('slow');},3000);//3s
			}
			
		},
	});	
});

// Payment Address			
$('#button-payment-address').live('click', function() {	
	$.ajax({
		url: url + 'thanhtoan/kiemtradiachi',
		type: 'post',
		data: {id: $('input:radio[name=payment_address]:checked').val(),address: $('#payment-address #address').val(), country: $('#payment-address #country option:selected').val()},
		cache: false,
		dataType : 'json',
		beforeSend: function() {
			$('#button-payment-address').after('<span class="wait">&nbsp;<img src="http://localhost/SMobile/static/images/loading.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-payment-address').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {			
			$('.warning, .error').remove();
			if (json['error']['success'] == 0) {
				if(json['error']['address'])
				{
					$('#payment-address #address').after('<span class="error">' + json['error']['address'] + '</span>');
				}
				if(json['error']['country'])
				{
					$('#payment-address #country').after('<span class="error">' + json['error']['country'] + '</span>');
				}
			}
			else{
				if(json['error']['success'] == 1)
				{
					$.ajax({
					url: url + 'thanhtoan/shipping_address',
					dataType: 'html',
					success: function(html) {
					$('#shipping-address .checkout-content').html(html);
				
					$('#payment-address .checkout-content').slideUp('slow');
					
					$('#shipping-address .checkout-content').slideDown('slow');
					
					$('.sct').removeClass('section allow active');
					$('#shipping-address').addClass('section allow active');
					
					
					$('#payment-address .step-title a').remove();
					$('#shipping-address .step-title a').remove();
					$('#shipping-method .step-title a').remove();
					$('#payment-method .step-title a').remove();
					
					$('#payment-address .step-title').append('<a class="edit">Chỉnh sửa &raquo;</a>');	
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});								
				$.ajax({
					url: url + 'thanhtoan/address',
					dataType: 'html',
					success: function(html) {
						$('#payment-address .checkout-content').html(html);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});	
				}
			}							
		} 		
	});	
});

// Shipping Address			
$('#button-shipping-address').live('click', function() {	
	$.ajax({
		url: url + 'thanhtoan/kiemtradiachigiaohang',
		type: 'post',
		data: {id: $('input:radio[name=shipping_address]:checked').val(), name: $('#shipping-address #name').val(),	SDT: $('#shipping-address #SDT').val(), address: $('#shipping-address #address').val(), country: $('#shipping-address #country option:selected').val()},
		cache: false,		
		dataType : 'json',
		beforeSend: function() {
			$('#button-shipping-address').after('<span class="wait">&nbsp;<img src="http://localhost/SMobile/static/images/loading.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-shipping-address').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(json) {			
			$('.warning, .error').remove();
			if (json['error']['success'] == 0) {
				if(json['error']['name'])
				{
					$('#shipping-address #name').after('<span class="error">' + json['error']['name'] + '</span>');
				}
				if(json['error']['SDT'])
				{
					$('#shipping-address #SDT').after('<span class="error">' + json['error']['SDT'] + '</span>');
				}
				if(json['error']['SDT_n'])
				{
					$('#shipping-address #SDT').after('<span class="error">' + json['error']['SDT_n'] + '</span>');
				}
				if(json['error']['address'])
				{
					$('#shipping-address #address').after('<span class="error">' + json['error']['address'] + '</span>');
				}
				if(json['error']['country'])
				{
					$('#shipping-address #country').after('<span class="error">' + json['error']['country'] + '</span>');
				}
			}
			else{
				if(json['error']['success'] == 1)
				{
					$.ajax({
						url: url + 'thanhtoan/shipping_option',
						dataType: 'html',
						success: function(html) {
							$('#shipping-method .checkout-content').html(html);
							
							$('#shipping-address .checkout-content').slideUp('slow');							
							if(json['error']['str'])
							{
								$( "#shipping-address #address_id option:selected" ).text(json['error']['str']);
							}						
							
							$('#shipping-method .checkout-content').slideDown('slow');
							
							$('.sct').removeClass('section allow active');
							$('#shipping-method').addClass('section allow active');
							
							$('#shipping-address .step-title a').remove();
							$('#shipping-method .step-title a').remove();
							$('#payment-method .step-title a').remove();
							
							$('#shipping-address .step-title').append('<a class="edit">Chỉnh sửa &raquo;</a>');
						},
						error: function(xhr, ajaxOptions, thrownError) {
							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						}
					});
								
					$.ajax({
						url: url + 'thanhtoan/shipping_address',
						dataType: 'html',
						success: function(html) {
							$('#shipping-address .checkout-content').html(html);
						},
						error: function(xhr, ajaxOptions, thrownError) {
							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						}
					});
				}
			}							
		} 		
	});	
});

//button shippng method
$('#button-shipping-method').live('click', function() {
	$.ajax({
		url: url + 'thanhtoan/kiemtrahinhthucgiaohang',
		type: 'post',
		data: {id: $(".radio input[type='radio']:checked").val(), comment :$("#comment").val() },
		cache: false,
		beforeSend: function() {
			$('#button-shipping-method').attr('disabled', true);
			$('#button-shipping-method').after('<span class="wait">&nbsp;<img src="http://localhost/SMobile/static/images/loading.gif" alt="" /></span>');
		},	
		complete: function() {
			$('#button-shipping-method').attr('disabled', false);
			$('.wait').remove();
		},			
		success: function(data) {	
			if (data == 'true') {
				$.ajax({
					url: url + 'thanhtoan/confirm/',
					dataType: 'html',
					success: function(html) {
						$('#confirm .checkout-content').html(html);
						
						$('#shipping-method .checkout-content').slideUp('slow');
						
						$('#confirm .checkout-content').slideDown('slow');
						
						$('.sct').removeClass('section allow active');
						$('#confirm').addClass('section allow active');
						
						$('#shipping-method .step-title a').remove();
						
						$('#shipping-method .step-title').append('<a class="edit">Chỉnh sửa &raquo;</a>');	
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
					}
				});
				}
			
			} ,
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});
    </script>
<style type="text/css">
.page_selector{ position:absolute; right:0px; top:28%;}
.page_selector a.page_open{ display:inline-block; width:60px; height:12px; background:#252525; color:#fff; text-align:center; font-size:14px; padding:20px 0px; font-weight:bold; text-decoration:none; float:left;}
.page_selector ul{ float:left; background:#f0f0f0; padding:10px 0px; border-top:solid 2px #000; border-bottom:solid 2px #000; display:none;}
.page_selector ul li{ padding:8px 10px; }
.page_selector ul li a{ font-weight:bold; text-decoration:none; color:#000; display:block; padding:2px 5px; text-transform:uppercase; font-size:11px;}

.store_selector{ position:fixed; z-index:2000; left:0px; top:28%;}
.store_selector .store_open{display:inline-block; width:128px; height:55px;}
.store_selector div{ float:left; width:157px; height:226px; display:none;}
</style>

<script type="text/javascript">
$(document).ready(function(){
	//SLIDE TOGGLE
	jQuery(".page_open").toggle(function() {
		 $('.page_selector ul').slideDown(300);	
		 }, function(){
		 $('.page_selector ul').slideUp(300);		 
	});	
	//SLIDE TOGGLE
	jQuery(".store_open").toggle(function() {
		 $('.store_selector div').slideDown(300);	
		 }, function(){
		 $('.store_selector div').slideUp(300);		 
	});		
});

</script>