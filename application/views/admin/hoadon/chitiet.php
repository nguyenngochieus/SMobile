    <div class="contentpanel">
      
      <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    
                    <h5 class="subtitle mb10">Khách hàng</h5>
                    <img src="<?=base_url()?>static/images/logo.png" class="img-responsive mb10" alt="" />
                    <address>
                        <strong><?=$result->TENNGUOIDUNG?>,</strong><br>
                        <?=$result->DIACHI_TT?><br>
                        <?=$result->EMAIL?><br>
                        <abbr title="Phone">Điện thoại:</abbr> <?php
                            if($result->SDT_TT!=''){
                              echo number_format($result->SDT_TT,"0"," "," ");
                            }else echo "Chưa cập nhật";?>
                    </address>
                    
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6 text-right">
                    <h5 class="subtitle mb10">Đơn hàng số .</h5>
                    <h4 class="text-primary">#<?=$result->ID?></h4>
                    
                    <h5 class="subtitle mb10">Gởi hàng đến</h5>
                    <address>
                        <strong><?=$result->TENNGUOINHAN?>,</strong><br>
                        <?=$result->DIACHI?><br>
                        <br>
                        <abbr title="Phone">Điện thoại:</abbr><?=number_format($result->SDT,"0"," "," ")?>
                    </address>
                    
                    <p><strong>Ngày đặt hàng:</strong><?=date_format(date_create($result->NGAYDATHANG),'d/m/Y')?></p>
                                       
                </div>
            </div><!-- row -->
            
            <div class="table-responsive">
            <table class="table table-invoice">
            <thead>
              <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($giohang as $item) { ?>
              <tr>
                <td>
                    <div class="text-primary"><strong><?=$item->TENSANPHAM?></strong></div>
                    <small><?=$item->LOAISANPHAM?></small>
                </td>
                <td><?=$item->SOLUONG?></td>
                <td><?=number_format($item->DONGIA,"0",",",".")?></td>
                <td><?=number_format($item->DONGIA* $item->SOLUONG,"0",",",".")?></td>
              </tr>      
              <?php } ?>        
            </tbody>
          </table>
          </div><!-- table-responsive -->
          
            <table class="table table-total">
                <tbody>
                    <tr>
                        <td><strong>Thành tiền :</strong></td>
                        <td><?=number_format($result->TONGTIENHANG,"0",",",".")?> VNĐ</td>
                    </tr>
                    <tr>
                        <td><strong>Phí vận chuyển :</strong></td>
                        <td><?=$result->PHUONGTHUCVANCHUYEN == 2?'50.000':'0.00'?> VNĐ</td>
                    </tr>
                    <tr>
                        <td><strong>TỔNG CỘNG :</strong></td>
                        <td><?=number_format($result->THANHTIEN,"0",",",".")?> VNĐ</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="text-right btn-invoice">
                <a class="btn btn-primary mr5" href="<?=base_url()?>admin/hoadon"><i class="fa fa-mail-reply mr5"></i> Trở lại</a>
                <a href="<?=base_url()?>admin/hoadon/edit?id=<?=$result->ID?>" class="btn btn-white"><i class="fa fa-edit mr5"></i> Chỉnh sửa</a>
            </div>
            
            <div class="mb40"></div>            
            
        </div><!-- panel-body -->
      </div><!-- panel -->
      
    </div>
    
  </div><!-- mainpanel -->