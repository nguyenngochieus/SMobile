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
                <h4 class="panel-title">Chỉnh sửa thông tin người dùng</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Họ và tên</label>
                  <div class="col-sm-10">
                    <input type="text" name="hoten" class="form-control" value="<?=$item['TENNGUOIDUNG']?>" id="hoten" placeholder="Điền tên..." />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên đăng nhập</label>
                  <div class="col-sm-10">
                    <input type="text" name="tendangnhap" class="form-control" value="<?=$item['TENDANGNHAP']?>" id="tendangnhap" placeholder="Điền tên đăng nhập..." readonly />
                  </div>
                </div>      

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mật khẩu mới</label>
                  <div class="col-sm-10">
                    <input type="password" name="matkhaumoi" title="Thay đổi mật khẩu mới cho người dùng hoặc bỏ trống" value="" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" id="matkhau"/>
                    <input type="hidden" name="matkhaucu" class="form-control" id="matkhau" value="<?=$item['MATKHAU']?>" placeholder="Điền mật khẩu..." />
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" value="<?=$item['EMAIL']?>" placeholder="Điền email..." readonly />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Ngày sinh</label>
                  <div class="col-sm-6">
                     <div class="input-group">
                      <input name="namsinh" type="text" class="form-control" value="<?php $mysql_date = date('m/d/Y', strtotime($item['NGAYSINH'])); echo $mysql_date; ?>" placeholder="mm/dd/yyyy" id="datepicker">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Giới tính</label>
                  <div class="col-sm-9">
                    <div class="rdio rdio-primary">
                      <input type="radio" id="male" value="1" name="gioitinh"
                      <?php if ($item['GIOITINH'] == 1) {
                              echo 'checked';
                      } ?>>
                      <label for="male">Nam</label>
                    </div><!-- rdio -->
                    <div class="rdio rdio-primary">
                      <input type="radio" value="0" id="female" name="gioitinh" <?php if ($item['GIOITINH'] == 0) {
                              echo 'checked';
                      } ?>>
                      <label for="female">Nữ</label>
                    </div><!-- rdio -->                    
                  </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">CMND</label>
                  <div class="col-sm-10">
                    <input name="CMND" class="form-control" id="CMND" value="<?=$item['CMND']?>" placeholder="Điền CMND ..."></input>
                  </div>
                </div>          
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Số điện thoại</label>
                  <div class="col-sm-10">
                    <input name="SDT" class="form-control" id="SDT" value="<?=$item['SDT']?>" placeholder="Điền số điện thoại ..."></input>
                  </div>
                </div>        
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Quyền</label>
                  <div class="col-sm-3">
                    <select id="fruits" name="quyen" class="form-control ">                        
                      <option value="1" <?php if ($item['QUYEN'] == 1) { echo 'selected="selected"';} ?>>Quản lý</option> 
                      <option value="2" <?php if ($item['QUYEN'] == 2) { echo 'selected="selected"';} ?>>Nhân viên</option>
                      <option value="3" <?php if ($item['QUYEN'] == 3) { echo 'selected="selected"';} ?>>Khách hàng</option>                
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Chọn trạng thái</label>
                  <div class="col-sm-9">
                    <div class="col-sm-4">
                      <div class="rdio rdio-primary">
                        <input type="radio" id="on" value="1" name="trangthai" <?php if ($item['TRANGTHAI'] == 1) {
                              echo 'checked';
                      } ?>>
                        <label for="on">Đang hoạt động</label>
                      </div><!-- rdio -->
                    </div>
                    <div class="col-sm-4">
                      <div class="rdio rdio-primary">
                        <input type="radio" id="off" value="0" name="trangthai" <?php if ($item['TRANGTHAI'] == 0) {
                              echo 'checked';
                      } ?>>
                        <label for="off">Ngưng hoạt động</label>
                      </div><!-- rdio -->
                    </div>                           
                    <label class="error" for="trangthai"></label>
                  </div>
                  </div>

                <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-10">
                <span class="field">
                <div class="col-sm-4">
                  <img src="<?=base_url()?>upload/files/<?php echo $item['HINHANH'];?>" id="ViewHinh" alt="" width="150px" height="auto" />
                </div>
                <div class="col-sm-8">
                <input type="text" name="HinhDaiDien" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="/SMobile/upload/files/<?php echo $item['HINHANH'];?>" />
                <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><br />
                <small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
                 </div>
                  </div>
                </div>
              </div>
            </div>

              </div><!-- panel-body -->
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-4">
                    <button class="btn btn-primary">Cập nhật</button>
                    <button type="cancel"  class="btn btn-default" value="cancel">Hủy</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
          <?php } ?>
      </div>

    </div><!-- contentpanel -->
