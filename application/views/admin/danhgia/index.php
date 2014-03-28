    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách đánh giá</strong></a></li>
          <li><a href="#profile" data-toggle="tab"><strong>Thêm đánh giá</strong></a></li>
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách đánh giá</h5>
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
                    <th>Mã sản phẩm</th>
                    <th>Lượt xem</th>
                    <th>Lượt mua</th>
                    <th>Lượt đánh giá</th>
                    <th>Tổng điểm</th>
                    <th>Điểm đánh giá</th>
                    <th>Thao tác </th>
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr id="cate_<?=$item['ID'] ?>" class="odd gradeX">
                    <td><?php echo $item['MASANPHAM'] ?></td>
                    <td><?php echo $item['LUOTXEM'] ?></td>
                    <td><?php echo $item['LUOTMUA'] ?></td>
                    <td><?php echo $item['LUOTDANHGIA'] ?></td>
                    <td><?php echo $item['TONGDIEM'] ?></td>
                    <td><?php echo $item['DIEMDANHGIA'] ?></td>
                    <td class="table-action">
	                  <a href="<?=base_url()?>admin/danhgia/edit?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>
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
                 <form id="basicForm" action="<?=base_url()?>admin/danhgia/insert" method="post" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Thêm đánh giá</h4>
                <p>Xin hãy nhập đúng các thông tin sau đây.</p>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mã sản phẩm <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Masanpham" class="form-control" id="Masanpham" placeholder="Điền mã sản phẩm..." required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt xem <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Luotxem" class="form-control" id="Luotxem" placeholder="Điền lượt xem..." required />
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt mua <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Luotmua" class="form-control" id="Luotmua" placeholder="Điền lượt mua..." required />
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt đánh giá <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Luotdanhgia" class="form-control" id="Luotdanhgia" placeholder="Điền đánh giá..." required />
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tổng điểm <span class="asterisk">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="Tongdiem" class="form-control" id="Tongdiem" placeholder="Điền tổng điểm..." required />
                  </div>
                </div> 


                <div class="form-group">
                  <label class="col-sm-2 control-label">Điểm đánh giá <span class="asterisk">*</span></label>
                  <div class="col-sm-3">
                    <select id="fruits" name="Diemdanhgia" class="form-control " required="">
                      <option value="">Chọn điểm </option>
                      <?php                        
                       for($i = 1; $i <= 10; $i++){
                          echo '<option value="'.$i.'">'.$i.'</option>';
                        }    
                        ?>
                    </select>
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
