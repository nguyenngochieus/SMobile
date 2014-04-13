    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách hóa đơn</strong></a></li>
          <!-- <li><a href="#profile" data-toggle="tab"><strong>Thêm hóa đơn</strong></a></li> -->
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách hóa đơn</h5>
           <div class="alert alert-danger msgalert" style=" display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Có lỗi!</strong> Dữ liệu đang được sử dụng!
              </div>
           <div class="alert alert-danger msgerror" style=" display:none;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Có lỗi!</strong> Xảy ra lỗi xử lý!
            </div>
           <div class="alert alert-success msgsuccess" style=" display:none;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Xử lý thành công!
            </div>

          <br />
          <div class="table-responsive">
          <table class="table table-hover" id="table2">
              <thead>
                 <tr>
                    <th>Mã hóa đơn</th>
                    <th>Tên người dùng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Số sản phẩm</th> 
                    <th>Thành tiền</th> 
                    <th>Tình trạng</th>     
                    <th>Thao tác </th>              
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr>
                    <td><a href="<?=base_url()?>admin/hoadon/chitiet?id=<?=$item['ID'] ?>"><?=$item['ID'] ?></a></td>
                    <td><?=$item['TENNGUOIDUNG'] ?></td>
                    <td><?=date_format(date_create($item['NGAYDATHANG']),'d/m/Y');?></td>   
                    <td><?=$item['SOSANPHAM'] ?></td> 
                    <td><?=number_format($item['THANHTIEN'],"0",",",".")?></td> 
                    <td><?=($item['TINHTRANG'] == 0)?'Chưa thanh toán' : 'Đã thanh toán';?></td>
                    <td><a href="<?=base_url()?>admin/hoadon/edit?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>                    
	                </td>
                 </tr>     
                <?php } ?>           
              </tbody>
           </table>
          </div><!-- table-responsive -->

            </div>
          </div>
          <!-- Tạm đóng chức năng thêm hóa đơn ở admin
          <div class="tab-pane" id="profile">
            <div class="row">
                 <form id="basicForm" action="<?=base_url()?>admin/hoadon/insert" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Thêm hóa đơn</h4>
                <p>Xin hãy nhập đúng các thông tin sau đây.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mã hóa đơn <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Madathang" class="form-control" id="Madathang" placeholder="Điền mã hóa đơn..." required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mã sản phẩm <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Masanpham" class="form-control" id="Masanpham" placeholder="Điền mã sản phẩm..." required />
                  </div>
                </div>      

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Số lượng <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Soluong" class="form-control" id="Soluong" placeholder="Điền số lượng..." required />
                  </div>
                </div>    
              </div> -->             
          </div><!-- panel -->
          </form>
            </div>
          </div>
        </div>

      </div>

    </div><!-- contentpanel -->
