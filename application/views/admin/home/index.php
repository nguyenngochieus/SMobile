  <!-- header -->
  <!-- end header -->

  <!-- leftpanel -->
  <!-- end leftpanel -->

  <!-- header bar -->
  <!-- end headerbar -->
    
  <!-- breadcrumb --> 
  <!-- end breadcrumb -->

  <!-- mainpanel -->
    <div class="contentpanel">
      
      <div class="row">
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">
            <a href="<?=base_url()?>admin/nguoidung">
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?=base_url()?>static/admin/images/is-user.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">KHÁCH HÀNG</small>
                    <h1><?=$thongke_nguoidung[2]->SOLUONG?></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">QUẢN TRỊ</small>
                    <h4><?=$thongke_nguoidung[0]->SOLUONG?></h4>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label">NHÂN VIÊN</small>
                    <h4><?=$thongke_nguoidung[1]->SOLUONG?></h4>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
            </a>
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?=base_url()?>static/admin/images/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">% Unique Visitors</small>
                    <h1>54.40%</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label">Avg. Visit Duration</small>
                <h4>01:80:22</h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?=base_url()?>static/admin/images/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Page Views</small>
                    <h1>300k+</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label">% Bounce Rate</small>
                <h4>34.23%</h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-dark panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?=base_url()?>static/admin/images/is-money.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Today's Earnings</small>
                    <h1>$655</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">Last Week</small>
                    <h4>$32,322</h4>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label">Last Month</small>
                    <h4>$503,000</h4>
                  </div>
                </div><!-- row -->
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->
      
      <div class="col-md-6">          
          <p class="btn btn-black">Top 10 sản phẩm bán chạy nhất</p><br/><br/>
          <div class="table-responsive">
          <table class="table table-hover mb30">
            <thead>
              <tr>
                <th>#</th>
                <th>TÊN SẢN PHẨM</th>
                <th>SỐ LƯỢT MUA</th>                
              </tr>
            </thead>
            <tbody>              
              <?php
              $i = 0; 
              foreach ($thongke_sanpham_top10sell as $item) {
                  echo '<tr><td>'.++$i.'</td>';
                  echo '<td>'.$item->TENSANPHAM.'</td>';
                  echo '<td>'.$item->LUOTMUA.'</td></tr>';                      
              } 
              ?>   
            </tbody>
          </table>
          </div><!-- table-responsive -->
        </div><!-- col-md-6 -->
        
        <div class="col-md-6">  
          <p class="btn btn-black">Top 10 sản phẩm được đánh giá cao nhất</p><br/><br/>                  
          <div class="table-responsive">
          <table class="table table-hover mb30">
            <thead>
              <tr>
                <th>#</th>
                <th>TÊN SẢN PHẨM</th>
                <th>ĐIỂM ĐÁNH GIÁ</th> 
              </tr>
            </thead>
            <tbody>
              <?php
                $i = 0; 
                foreach ($thongke_sanpham_top10rate as $item) {
                    echo '<tr><td>'.++$i.'</td>';
                    echo '<td>'.$item->TENSANPHAM.'</td>';
                    echo '<td>'.$item->DIEMDANHGIA.'</td></tr>';                      
                } 
              ?>  
            </tbody>
          </table>
          </div><!-- table-responsive -->
        </div>


      </div>


 
      
    </div><!-- contentpanel -->
    
  <!-- end mainpanel -->
  
  <!-- rightpanel -->
  <!-- end rightpanel -->
  
  <!-- footer -->
  <!-- end footer -->