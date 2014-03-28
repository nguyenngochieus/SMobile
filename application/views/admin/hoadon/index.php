    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách hóa đơn</strong></a></li>
          <li><a href="#profile" data-toggle="tab"><strong>Thêm hóa đơn</strong></a></li>
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
                    <th>Mã sản phẩm</th>
                    <th>Số lượng</th>                    
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr>
                    <td><?php echo $item['MADATHANG'] ?></td>
                    <td><?php echo $item['MASANPHAM'] ?></td>
                    <td><?php echo $item['SOLUONG'] ?></td>                    
	                </td>
                 </tr>     
                <?php } ?>           
              </tbody>
           </table>
          </div><!-- table-responsive -->

            </div>
          </div>
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

                

              </div><!-- panel-body -->
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-4">
                    <button class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
            </div>
          </div>
        </div>

      </div>

    </div><!-- contentpanel -->
