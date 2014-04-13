<div id="content" class="full_page">  <ul class="breadcrumb">
               <li><a href="<?=base_url()?>">Trang chủ</a></li>
              <li><a href="<?=base_url()?>user">Tài khoản</a></li>
              <li class="active"><a href="<?=base_url()?>user/lichsudathang">Lịch sử mua hàng</a></li>
					</ul>
  <h1>Lịch sử mua hàng</h1>

  <?php foreach ($result as $item) { ?>
     <div class="order-list">
    <div class="order-id"><b>Mã đặt hàng:</b> #<?=$item['ID']?></div>
    <div class="order-status"><b>Trạng thái:</b> <?= $item['TINHTRANG'] ==0 ? 'Chưa thanh toán' : 'Đã thanh toán' ;?></div>
    <div class="order-content">
      <div><b>Ngày giao dịch:</b> <?=date_format(date_create($item['NGAYDATHANG']),"d/m/Y")?><br />
        <b>Số sản phẩm:</b> <?=$item['SOSANPHAM']?></div>
      <div><b>Khách hàng:</b> <?=$item['TENNGUOIDUNG']?><br />
        <b>Thành tiền:</b> <?=number_format($item['THANHTIEN'],"0",",",".")?> VNĐ</div>
      <div class="order-info"><a href="<?=base_url()?>user/donhang.html?id=<?=$item['ID']?>"><img src="<?=base_url()?>static/images/info.png" alt="Xem" title="Xem" /></a>&nbsp;&nbsp;
      <a href="<?=base_url()?>user/dathanglai.html?id=<?=$item['ID']?>"><img src="<?=base_url()?>static/images/reorder.png" alt="Đặt hàng lại" title="Đặt hàng lại" /></a></div>
    </div>
  </div>
  <?php } ?>

    <div class="buttons">
    <div class="right"><a href="<?=base_url()?>user" class="button">Trở lại</a></div>
  </div>
  </div>		
	</section>
        <!--Mid Section Ends-->
    </div>