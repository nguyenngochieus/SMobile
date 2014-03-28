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
                <h4 class="panel-title">Chỉnh sửa thông tin nhân viên</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Họ và tên <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="hoten" class="form-control" id="hoten" value="<?php echo $item['TENNHANVIEN']?>" placehoder="Điền tên..." required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên đăng nhập <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $item['TENDANGNHAP']?>" required readonly />
                  </div>
                </div>      

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" value="<?=$item['EMAIL'] ?>" required readonly />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Năm sinh<span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="fruits" name="namsinh" class="form-control " required="">
                      <option value="">Chọn năm sinh</option>
                      <?php
                        $now = getdate();
                       for($i = $now["year"] - 10; $i >= 1970; $i--){
                       		if($i == $item['NAMSINH'])
                       			echo '<option selected = "selected" value="'.$i.'">'.$i.'</option>';
                       		else
                         		echo '<option value="'.$i.'">'.$i.'</option>';
                        }    
                        ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Giới tính<span class="asterisk">*</span></label>
                  <div class="col-sm-9">
                    <div class="rdio rdio-primary">
                      <input type="radio" id="male" value="Nam" name="gender" required="" <?php if ($item['GIOITINH'] == "Nam"): echo "checked"; ?>
                      <?php endif ?>>
                      <label for="male">Nam</label>
                    </div><!-- rdio -->
                    <div class="rdio rdio-primary">
                      <input type="radio" value="Nữ" id="female" name="gender" <?php if ($item['GIOITINH'] == "Nữ"): echo "checked"; ?>
                      <?php endif ?>>
                      <label for="female">Nữ</label>
                    </div><!-- rdio -->
                    <label class="error" for="gender"></label>
                  </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">CMND <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input name="CMND" class="form-control" id="CMND" value="<?php echo $item['CMND'] ?>" placeholder="Điền CMND ..." required></input>
                  </div>
                </div>          

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Số điện thoại <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input name="SDT" class="form-control" id="SDT" value="<?php echo $item['SDT'] ?>" placeholder="Điền số điện thoại ..." required></input>
                  </div>
                </div>        
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Quyền<span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="fruits" name="quyen" class="form-control " required="">                         
                      <?php if($item['QUYEN'] == 1){
                      			echo "<option selected='selected' value='1'>Quản lý</option>";
                            echo "<option value='2'>Nhân viên</option>";
                      		}                       			
                      		elseif ($item['QUYEN'] == 2) {
                            echo "<option value='1'>Quản lý</option>";
                      			echo "<option selected='selected' value='2'>Nhân viên</option>";
                      		}                      			
                      ?>                                     
                    </select>
                  </div>
                </div>

                <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-10">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="input-append">
                    <div class="uneditable-input">
                      <i class="glyphicon glyphicon-file fileupload-exists"></i>
                      <span class="fileupload-preview"></span>
                    </div>
                    <span class="btn btn-default btn-file">
                      <span class="fileupload-new">Chọn hình</span>
                      <span class="fileupload-exists">Đổi</span>
                      <input type="file">
                    </span>
                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                  </div>
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
