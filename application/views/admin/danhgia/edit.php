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
                <h4 class="panel-title">Chỉnh sửa thông tin đánh giá sản phẩm</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tên sản phẩm </label>
                  <div class="col-sm-10">
                    <input type="text" name="tensanpham" class="form-control" id="tensanpham" value="<?php echo $item['TENSANPHAM']?>" readonly/>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt xem </label>
                  <div class="col-sm-10">
                    <input type="text" id="Luotxem" name="Luotxem" class="form-control" value="<?php echo $item['LUOTXEM']?>"/>                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt mua </label>
                  <div class="col-sm-10">
                    <input type="text" id="Luotmua" name="Luotmua" class="form-control" value="<?php echo $item['LUOTMUA']?>" />                    
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lượt đánh giá </label>
                  <div class="col-sm-10">
                    <input type="text" id="Luotdanhgia" name="Luotdanhgia" class="form-control" value="<?php echo $item['LUOTDANHGIA']?>" />                    
                  </div>
                </div>  

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tổng điểm</label>
                  <div class="col-sm-10">
                    <input type="text" id="Tongdiem" name="Tongdiem" class="form-control" value="<?php echo $item['TONGDIEM']?>" />                    
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Điểm đánh giá </label>
                  <div class="col-sm-2">
                    <input type="text" name="Diemdanhgia" class="form-control" id="Diemdanhgia" value="<?php echo $item['DIEMDANHGIA']?>" readonly/>
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
