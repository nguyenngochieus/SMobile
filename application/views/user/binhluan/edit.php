    <div class="contentpanel">
      
      <div class="row">
      <?php 
      foreach($result as $item) {?>
      		<form id="basicForm" action="" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Chỉnh sửa bình luận</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên sản phẩm </span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Tensanpham" class="form-control" id="hoten" value="<?php echo $item['TENSANPHAM']?>" placehoder="Điền tên..." required readonly/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên khách hàng </span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Tenkhachhang" class="form-control" id="username" value="<?php echo $item['TENNGUOIDUNG']?>" required readonly />
                  </div>
                </div>    

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nội dung </span></label>
                  <div class="col-sm-10">                    
                     <textarea id="Noidung" name="Noidungbinhluan" class="ckeditor" rows="10"><?php echo $item['NOIDUNG']?></textarea>                            
                  </div>
                </div>                    

                <div class="form-group">
                  <label class="col-sm-2 control-label">Ngày đăng</span></label>
                  <div class="col-sm-6">
                     <div class="input-group">
                      <input name="Thoigian" type="text" class="form-control" value="<?php $mysql_date = date('m/d/Y', strtotime($item['THOIGIAN'])); echo $mysql_date; ?>" readonly>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                  </div>
                </div>

              </div><!-- panel-body -->
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-4">
                    <button class="btn btn-primary">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
          <?php } ?>
      </div>

    </div><!-- contentpanel -->
