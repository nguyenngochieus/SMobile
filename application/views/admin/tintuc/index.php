    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách tin tức</strong></a></li>
          <li><a href="#profile" data-toggle="tab"><strong>Thêm tin tức</strong></a></li>
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách tin tức</h5>
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
                    <th>Tiêu đề</th>
                    <th>Loại tin</th>                                      
                    <th>Ngày đăng</th>                    
                    <th>Tác giả</th>
                    <th>Thao tác </th>
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr id="cate_<?=$item['ID'] ?>" class="odd gradeX">
                    <td width="350"><?php echo $item['TIEUDE'] ?></td>
                    <td width="100" class="center"><?php echo $item['LOAITIN'] ?></td>                    
                    <td><?php echo $item['NGAYDANG'] ?></td>                    
                    <td><?php echo $item['TACGIA'] ?></td>                    
                    <td class="table-action">
	                  <a href="<?=base_url()?>admin/tintuc/edit.html?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>
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
                 <form id="basicForm" action="<?=base_url()?>admin/tintuc/insert" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Thêm tin tức</h4>
                <p>Xin hãy nhập đúng các thông tin sau đây.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tiêu đề <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Tieude" class="form-control" id="Tieude" placeholder="Điền tiêu đề..." required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Loại tin <span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="fruits" name="Loaitin" class="form-control " required="">
                      <option value="1">Tin khuyến mãi </option>
                      <option value="2">Tin công nghệ </option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả ngắn <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Mota" class="form-control" id="Mota" placeholder="Điền mô tả..." required />
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nội dung <span class="asterisk">*</span></label>
                  <div class="col-sm-10">                    
                    <textarea class="form-control" required="" placeholder="Nội dung bài viết..." rows="5" name="Noidung" id="Noidung"></textarea>     
                  </div>
                </div> 
                

                <!--
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
            </div> -->

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
