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
                <h4 class="panel-title">Chỉnh sửa tin tức</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tiêu đề </label>
                  <div class="col-sm-10">
                    <input type="text" name="Tieude" id="Tieude" value="<?=$item['TIEUDE']?>" title="Điền tiêu đề bài viết!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tác giả </label>
                  <div class="col-sm-10">
                    <input type="text" name="Tacgia" id="Tentacgia" value="<?=$item['TENNGUOIDUNG']?>" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" readonly />
                    <input type="hidden" name="Tacgia" id="Tacgia" value="<?=$item['TACGIA']?>" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" readonly />
                  </div>                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Loại tin </label>
                  <div class="col-sm-3">
                    <select id="fruits" name="Loaitin" class="form-control ">
                      <option value="1" <?php if ($item['LOAITIN'] == 1) {
                              echo 'selected';
                      } ?>>Tin khuyến mãi </option>
                      <option value="2" <?php if ($item['LOAITIN'] == 1) {
                              echo 'selected';
                      } ?>>Tin công nghệ </option>
                    </select>
                  </div>
                </div>                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả ngắn </label>
                  <div class="col-sm-10">                    
                    <textarea name="Mota" id="mota" placeholder="Thêm mô tả..." class="ckeditor" rows="5"><?= $item['MOTA']?></textarea> 
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nội dung </label>
                  <div class="col-sm-10">                    
                    <textarea class="ckeditor" rows="20" name="Noidung" id="Noidung"><?=$item['NOIDUNG']?></textarea>     
                  </div>
                </div> 
                
                <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
              <div class="col-sm-10">
                <span class="field">
                <div class="col-sm-4">
                  <img src="<?=base_url()?>upload/files/<?php echo $item['HINH'];?>" id="ViewHinh" alt="" width="150px" height="auto" />
                </div>
                <div class="col-sm-8">
                <input type="text" name="HinhDaiDienTinTuc" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="/SMobile/upload/files/<?php echo $item['HINH'];?>" />
                <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><br />
                <small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
                 </div>
                  </div>
                </div>
              </div>
            </div>

              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-5 col-sm-offset-4">
                    <button class="btn btn-primary">Cập nhật</button>                    
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
          <?php } ?>
      </div>

    </div><!-- contentpanel -->
