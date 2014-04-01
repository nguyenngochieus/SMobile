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
                <h4 class="panel-title">Chỉnh sửa thông tin sản phẩm </h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên sản phẩm </label>
                  <div class="col-sm-10">
                    <input type="text" name="tensanpham" class="form-control" id="tensanpham" value="<?= $item['TENSANPHAM']?>" placeholder="Điền tên sản phẩm..." required />
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Loại sản phẩm </label>
                  <div class="col-sm-3">
                    <select id="fruits" name="loai" class="form-control " required="">
                      <option value="" >Chọn loại sản phẩm</option>
                      <?php
                       foreach ($loaisanpham as $sp) {
                        if($sp['ID'] == $item['LOAI'])
                          echo '<option value="'.$sp['ID'].'" selected>'.$sp['TENLOAI'].'</option>';
                        else
                          echo '<option value="'.$sp['ID'].'">'.$sp['TENLOAI'].'</option>';
                       }                          
                        ?>
                    </select>
                  </div>
                </div>      

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Nhà cung cấp </label>
                   <div class="col-sm-3">
                   <select id="fruits" name="nhacungcap" class="form-control " required="">
                      <option value="">Chọn nhà cung cấp</option>
                      <?php
                       foreach ($nhacungcap as $ncc) {
                        if($ncc['ID'] == $item['NHACUNGCAP'])
                          echo '<option value="'.$ncc['ID'].'" selected>'.$ncc['TENNCC'].'</option>';
                        else                          
                          echo '<option value="'.$ncc['ID'].'">'.$ncc['TENNCC'].'</option>';
                       }                          
                        ?>
                    </select>
                  </div>
                </div>    

                <div class="form-group">
                  <label class="col-sm-2 control-label">Số lượng</label>
                  <div class="col-sm-10">
                    <input type="number" name="soluong" id="soluong" class="form-control" value="<?= $item['SOLUONG']?>" placeholder="Nhập số lượng..." required />
                  </div>
                </div>                

                <div class="form-group">
                  <label class="col-sm-2 control-label">Đơn giá</label>
                  <div class="col-sm-10">
                    <input type="number" name="dongia" id="dongia" class="form-control" value="<?= $item['DONGIA']?>" placeholder="Nhập giá..." required />
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả</label>
                  <div class="col-sm-10">
                    <textarea name="mota" id="mota" placeholder="Thêm mô tả..." class="ckeditor" rows="10"><?= $item['MOTA']?></textarea>                    
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả tiếng anh</label>
                  <div class="col-sm-10">
                    <textarea name="mota_en" id="mota_en" placeholder="Thêm mô tả..." class="form-control" rows="10"><?= $item['MOTA_EN']?></textarea>
                  </div>
                </div>  

             <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
                <div class="col-sm-4">
                  <span class="field"><img src="<?=base_url()?>upload/files/<?php echo $item['HINH'];?>" id="ViewHinh" alt="" width="140px" height="181px" /><br />
                  <input type="text" name="HinhDaiDien" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="/SMobile/upload/files/<?php echo $item['HINH'];?>" />
                 </div>
                  <div class="col-sm-6">
                     <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><br /><small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
                  </div>
              </div>

              </div><!-- panel-body -->
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
