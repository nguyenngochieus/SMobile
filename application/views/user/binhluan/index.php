    <div class="contentpanel">
      
      <div class="row">

      <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><strong>Danh sách bình luận</strong></a></li>        
      </ul>

        <div class="tab-content mb30">
          <div class="tab-pane active" id="home">
            <div class="row">
            
               <div class="clearfix mb30"></div>
          <h5 class="subtitle mb5">Danh sách bình luận</h5>
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
                    <th>Tên khách hàng</th>
                    <th>Nội dung</th>
                    <th>Thời gian</th> 
                    <th>Thao tác</th>                   
                 </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $item) { ?>              	              
                 <tr id="cate_<?=$item['ID'] ?>" class="odd gradeX">
                    <td><?php echo $item['TENSANPHAM'] ?></td>
                    <td><?php echo $item['TENNGUOIDUNG'] ?></td>
                    <td><?php echo $item['NOIDUNG'] ?></td>
                    <td><?php echo $item['THOIGIAN'] ?></td>
                    <td class="table-action">
	                  <a href="<?=base_url()?>user/binhluan/edit?id=<?php echo $item['ID'] ?>"><i class="fa fa-pencil"></i></a>
	                  <a href="#" onclick="DeleteCate(<?=$item['ID']?>,'<?=$page?>')" class="delete-row"><i class="fa fa-trash-o"></i></a>
	                </td>
                 </tr>     
                <?php } ?>           
              </tbody>
           </table>
          </div><!-- table-responsive -->

            </div>
          </div>
           <!--panel-body -->              
          </div><!-- panel -->
          </form>
            </div>
          </div>
        </div>

      </div>

    </div><!-- contentpanel -->
