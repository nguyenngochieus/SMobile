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
                    <td width="500"><?php echo $item['TIEUDE'] ?></td>
                    <td><?php echo $item['LOAITINTUC'] ?></td>                    
                    <td><?php echo $item['NGAYDANG'] ?></td>                    
                    <td><?php echo $item['TENNGUOIDUNG'] ?></td>                    
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
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tiêu đề</label>
                  <div class="col-sm-10">
                    <input type="text" name="Tieude" id="Tieude" title="Điền tiêu đề bài viết!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tác giả </label>
                  <div class="col-sm-10">
                    <input type="text" name="Tacgia" id="Tentacgia" value="<?=($Name)?>" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" readonly />
                    <input type="hidden" name="Tacgia" id="Tacgia" value="<?=($UserID)?>" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" readonly />
                  </div>                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Loại tin</label>
                  <div class="col-sm-3">
                    <select id="fruits" name="Loaitin" class="form-control ">
                      <option value="1" selected>Tin khuyến mãi </option>
                      <option value="2">Tin công nghệ </option>
                    </select>
                  </div>
                </div>                                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả ngắn </label>
                  <div class="col-sm-10">                    
                    <textarea name="Mota" id="mota" placeholder="Thêm mô tả..." class="ckeditor" rows="5"></textarea> 
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nội dung</label>
                  <div class="col-sm-10">                    
                    <textarea class="ckeditor" rows="5" name="Noidung" id="Noidung"></textarea>     
                  </div>
                </div> 
                
                <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-10">
                <span class="field">
                <div class="col-sm-4">
                  <img src="" id="ViewHinh" alt="" width="150px" height="auto" />
                </div>
                <div class="col-sm-8">
                <input type="text" name="HinhDaiDienTinTuc" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="" />
                <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><br />
                <small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
                 </div>
                  </div>
                </div>

              </div><!-- panel-body -->
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-4">
                    <button class="btn btn-primary">Thêm mới</button>                    
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
