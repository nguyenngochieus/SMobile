    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
		<div id="notification"></div> 
	
<div id="content" class="full_page">
	<ul class="breadcrumb">
		<li><a href="<?=base_url()?>">Home</a></li>
		<li><a href="<?=base_url()?>cart/giohang.html">Giỏ hàng</a></li>
		<li><a href="<?=base_url()?>cart/thanhtoan">Thanh toán</a></li>
		<li class="active"><a href="<?=base_url()?>thantoan/success">Thành công</a></li>
	</ul>
  <h1>Đơn hàng số #<?=$id?> đã được xử lý thành công!</h1>
  <div class="success"><p>Đơn hàng của bạn <a href="<?=base_url()?>user/donhang.html?id=<?=$id?>">#<?=$id?></a> đã được xử lý thành công!</p><p>Bạn có thể xem lại lịch sử mua hàng tại <a href="<?=base_url()?>user.html">trang tài khoản</a> và nhấn vào đường dẫn <a href="<?=base_url()?>user/lichsudathang.html">Lịch sử mua hàng</a>.</p><p>Nếu bạn muốn lưu thông tin về máy, bạn có thể tải về tại <a href="<?=base_url()?>user.html">đây</a>.</p><p>Liên lạc với chúng tôi nếu có thắc mắc về cửa hàng</a>.</p><p>Cảm ơn vì đã sử dụng cửa hàng của chúng tôi!</p></div>
  <div class="action_buttonbar">
		<button type="button" onClick="window.top.location.href='<?=base_url()?>'" title="" class="continue">Tiếp tục</button>
	</div>
  </div>			
</section>
    <!--Mid Section Ends-->
</div>