    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách đánh giá</strong></a></li>          
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
                    <th>Tên sản phẩm</th>
                    <th>Lượt xem</th>
                    <th>Lượt mua</th>
                    <th>Lượt đánh giá</th>
                    <th>Tổng điểm</th>
                    <th>Điểm đánh giá</th>
                    <th>Thao tác</th>                    
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr class="odd gradeX">
                    <td><?php echo $item['TENSANPHAM'] ?></td>
                    <td><?php echo $item['LUOTXEM'] ?></td>
                    <td><?php echo $item['LUOTMUA'] ?></td>
                    <td><?php echo $item['LUOTDANHGIA'] ?></td>
                    <td><?php echo $item['TONGDIEM'] ?></td>
                    <td><?php echo $item['DIEMDANHGIA'] ?></td>
                    <td class="table-action">
                    <a href="<?=base_url()?>admin/danhgia/edit?id=<?php echo $item['MASANPHAM'] ?>"><i class="fa fa-pencil"></i></a>                    
	                </td>
                 </tr>     
                <?php } ?>           
              </tbody>
           </table>
          </div><!-- table-responsive -->

            </div>
          </div>
          
          </form>
            </div>
          </div>
        </div>

      </div>

    </div><!-- contentpanel -->
