<div id="content" class="full_page">  <ul class="breadcrumb">
			    <li><a href="<?=base_url()?>">Trang chủ</a></li>
					<li><a href="<?=base_url()?>user">Tài khoản</a></li>
					<li><a href="<?=base_url()?>.user/lichsudathang">Lịch sử mua hàng</a></li>
					<li class="active"><a href="<?=base_url()?>user/donhang.html?id=<?=$result->ID?>">Thông tin đơn hàng</a></li>
					</ul>
  <h1>Thông tin đơn hàng</h1> 
  <table class="list">
    <thead>
      <tr>
        <td class="left" colspan="2">Chi tiết đơn hàng</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="left" style="width: 50%;">          <b>Đơn hàng số:</b> #<?=$result->ID?><br />
          <b>Ngày đặt hàng:</b> <?=date_format(date_create($result->NGAYDATHANG),'d/m/Y')?></td>
        <td class="left" style="width: 50%;">          <b>Phương thức vận chuyển:</b> <?=$result->PHUONGTHUCVANCHUYEN == 1? 'Chuyển phát thường':'Chuyển phát nhanh'?></td>
      </tr>
    </tbody>
  </table>
  <table class="list">
    <thead>
      <tr>
        <td class="left">Địa chỉ thanh toán</td>
                <td class="left">Địa chỉ giao hàng</td>
              </tr>
    </thead>
    <tbody>
      <tr>
        <td class="left"><?=$result->TENNGUOIDUNG?>,<br /><?=$result->DIACHI_TT?>,<br /><?php
        if($result->SDT_TT!=''){
          echo number_format($result->SDT_TT,"0"," "," ");
        }?><br /><?=$result->EMAIL?></td>
                <td class="left"><?=$result->TENNGUOINHAN?>,<br /><?=$result->DIACHI?>,<br /><?=number_format($result->SDT,"0"," "," ")?></td>
              </tr>
    </tbody>
  </table>
  <table class="list">
    <thead>
      <tr>
        <td class="left">Tên sản phẩm</td>
        <td class="left">Loại</td>
        <td class="center">Số lượng</td>
        <td class="right">Đơn giá</td>
        <td class="right">Thành tiền</td>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($giohang as $item) { ?>
        <tr>
        <td class="left"><?=$item->TENSANPHAM?></td>
        <td class="left"><?=$item->LOAISANPHAM?></td>
        <td class="center"><?=$item->SOLUONG?></td>
        <td class="right"><?=number_format($item->DONGIA,"0",",",".")?></td>
        <td class="right"><?=number_format($item->DONGIA* $item->SOLUONG,"0",",",".")?></td>        
        </tr>
    <?php } ?>
                </tbody>
    <tfoot>
            <tr>
        <td colspan="3"></td>
        <td class="right"><b>Thành tiền:</b></td>
        <td class="right"><?=number_format($result->TONGTIENHANG,"0",",",".")?> VNĐ</td>
                <td></td>
              </tr>
            <tr>
        <td colspan="3"></td>
        <td class="right"><b>Phí vận chuyển:</b></td>
        <td class="right"><?=$result->PHUONGTHUCVANCHUYEN == 2?'50.000':'0.00'?> VNĐ</td>
                <td></td>
              </tr>
            <tr>
        <td colspan="3"></td>
        <td class="right"><b>Tổng cộng:</b></td>
        <td class="right"><?=number_format($result->THANHTIEN,"0",",",".")?> VNĐ</td>
                <td></td>
              </tr>
          </tfoot>
  </table>
      <h2>Lịch sử giao dịch</h2>
  <table class="list">
    <thead>
      <tr>
        <td class="left">Ngày đặt hàng</td>
        <td class="left">Tình trạng</td>
        <td class="left">Ghi chú</td>
      </tr>
    </thead>
    <tbody>
            <tr>
        <td class="left"><?=date_format(date_create($result->NGAYDATHANG),'d/m/Y')?></td>
        <td class="left"><?=$result->TINHTRANG ==0 ? 'Chưa thanh toán' : 'Đã thanh toán' ;?></td>
        <td class="left"><?=$result->GHICHU?></td>
      </tr>
          </tbody>
  </table>
    <div class="buttons">
    <div class="right"><a href="<?=base_url()?>user/lichsudathang.html" class="button">Trở về</a></div>
  </div>
  </div>			
	</section>
        <!--Mid Section Ends-->
    </div>