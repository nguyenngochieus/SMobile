    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách nhân viên</strong></a></li>
          <li><a href="#profile" data-toggle="tab"><strong>Thêm nhân viên</strong></a></li>
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách nhân viên</h5>
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
                    <th>Tên nhân viên</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>SĐT</th>
                    <th>Thao tác </th>
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr id="cate_<?=$item['ID'] ?>" class="odd gradeX">
                    <td><?php echo $item['TENNHANVIEN'] ?></td>
                    <td><?php echo $item['TENDANGNHAP'] ?></td>
                    <td><?php echo $item['EMAIL'] ?></td>
                    <td class="center"><?php echo $item['GIOITINH'] ?></td>
                    <td class="center"><?php echo $item['SDT'] ?></td>
                    <td class="table-action">
	                  <a href="<?=base_url()?>admin/nhanvien/edit?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>
	                  <a href="#" onclick="DeleteCate(<?=$item['ID']?>,'<?=$page?>')" class="delete-row"><i class="fa fa-trash-o"></i></a>
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
                 <form id="basicForm" action="<?=base_url()?>admin/nhanvien/insert" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Thêm nhân viên</h4>
                <p>Xin hãy nhập đúng các thông tin sau đây.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Họ và tên <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="hoten" class="form-control" id="hoten" placeholder="Điền tên..." required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên đăng nhập <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Điền tên đăng nhập..." required />
                  </div>
                </div>      

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Mật khẩu <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Điền mật khẩu..." required />
                  </div>
                </div>    

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Điền email..." required />
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
                      <input type="radio" id="male" value="Nam" name="gender" required="">
                      <label for="male">Nam</label>
                    </div><!-- rdio -->
                    <div class="rdio rdio-primary">
                      <input type="radio" value="Nữ" id="female" name="gender">
                      <label for="female">Nữ</label>
                    </div><!-- rdio -->
                    <label class="error" for="gender"></label>
                  </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">CMND <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input name="CMND" class="form-control" id="CMND" placeholder="Điền CMND ..." required></input>
                  </div>
                </div>          

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Số điện thoại <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input name="SDT" class="form-control" id="SDT" placeholder="Điền số điện thoại ..." required></input>
                  </div>
                </div>        
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Quyền<span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="fruits" name="quyen" class="form-control " required="">
                      <option value="">Chọn quyền</option>   
                      <option value="1">Quản lý</option> 
                      <option value="2">Nhân viên</option>                   
                    </select>
                  </div>
                </div>

                <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-3">
                <span class="field"><img src="" id="ViewHinh" alt="" width="140px" height="181px" /><br />
                <input type="text" name="HinhDaiDien" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="<?=set_value('HinhDaiDien')?>" />
                <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
                  </div>
                </div>
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
