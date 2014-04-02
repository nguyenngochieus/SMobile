    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách sản phẩm</strong></a></li>
          <li><a href="#profile" data-toggle="tab"><strong>Thêm sản phẩm</strong></a></li>
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách sản phẩm</h5>
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
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Nhà cung cấp</th>
                    <th>Số lượng</th>
                    <th>Giá thành</th>                    
                    <th>Thao tác </th>
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr id="cate_<?=$item['ID'] ?>" class="odd gradeX">
                    <td><?php echo $item['HINH'] ?></td>
                    <td><?php echo $item['TENSANPHAM'] ?></td>
                    <td><?php echo $item['LOAISANPHAM'] ?></td>
                    <td><?php echo $item['TENNHACUNGCAP'] ?></td>
                    <td class="center"><?php echo $item['SOLUONG'] ?></td>
                    <td class="center"><?php echo $item['DONGIA'] ?></td>
                    <td class="table-action">
	                  <a href="<?=base_url()?>admin/sanpham/edit?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>
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
                 <form id="basicForm" action="<?=base_url()?>admin/<?=$page?>/insert" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Thêm sản phẩm</h4>
                <p>Xin hãy nhập đúng các thông tin sau đây.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên sản phẩm <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="tensanpham" class="form-control" id="tensanpham" placeholder="Điền tên sản phẩm..." />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Loại sản phẩm <span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="loai" name="loai" class="form-control " >
                      <option value="">Chọn loại sản phẩm</option>
                      <?php
                       foreach ($loaisanpham as $sp) {
                        echo '<option value="'.$sp['ID'].'">'.$sp['TENLOAI'].'</option>';
                       }                          
                        ?>
                    </select>
                  </div>
                </div>      

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Nhà cung cấp <span class="asterisk">*</span></label>
                   <div class="col-sm-3">
                   <select id="nhacungcap" name="nhacungcap" class="form-control ">
                      <option value="">Chọn nhà cung cấp</option>
                      <?php
                       foreach ($nhacungcap as $ncc) {
                        echo '<option value="'.$ncc['ID'].'">'.$ncc['TENNCC'].'</option>';
                       }                          
                        ?>
                    </select>
                  </div>
                </div>    
              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Số lượng<span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="soluong" id="soluong" class="form-control" placeholder="Nhập số lượng..." />
                  </div>
                </div>                

                <div class="form-group">
                  <label class="col-sm-2 control-label">Đơn giá<span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="dongia" id="dongia" class="form-control" placeholder="Nhập giá..." />
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả<span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <textarea name="mota" id="mota" placeholder="Thêm mô tả..." class="form-control" rows="10"></textarea>
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mô tả tiếng anh<span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <textarea name="mota_en" id="mota_en" placeholder="Thêm mô tả..." class="form-control" rows="10"></textarea>
                  </div>
                </div>  

                 <div class="form-group">
              <label class="col-sm-2 control-label">Hình đại diện</label>
                <div class="col-sm-4">
                  <span class="field"><img src="" id="ViewHinh" alt="" width="140px" height="181px" /><br />
                  <input type="text" name="HinhDaiDien" class="form-control" id="HinhAnh" onchange="ChangeImage()"  value="" /> <!-- -->
                 </div>
                  <div class="col-sm-6">
                     <a class="btn btn-default" href="javascript:BrowseServer(HinhAnh)" > <span>Chọn hình</span></a> </span><br /><small style="font-size:14px;" class="desc">Click vào nút chọn hình để up hình hoặc dán link hình vào ô trống. Up hình với tỉ lệ width x height: 210x210; 300x300</small> </p>
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
