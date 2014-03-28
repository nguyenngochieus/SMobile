  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> SMobile <span>]</span></h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
        <!-- Dòng này chỉ hiển thị trên thiết bị hoặc màn hình nhỏ -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="<?=base_url()?>static/admin/images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>Kelvin Lee</h4>
                    <span>"Dòng cảm nghĩ..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Tài khoản</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Hồ sơ</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Tùy chỉnh</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Hỗ trợ</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Đăng xuất</span></a></li>
            </ul>
        </div>
      <!-- Dòng này chỉ hiển thị trên thiết bị hoặc màn hình nhỏ -->

      <h5 class="sidebartitle"> Điều hướng</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="<?=base_url()?>admin"><i class="fa fa-dashboard"></i> <span> Bảng điều khiển</span></a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-user"></i> <span> Người dùng</span></a>
          <ul class="children">
            <li><a href="<?=base_url()?>admin/nhanvien"><i class="fa fa-caret-right active"></i> Nhân viên</a></li>
            <li><a href="<?=base_url()?>admin/khachhang"><i class="fa fa-caret-right"></i> Khách hàng</a></li>
          </ul>
        </li>
        <li><a href="<?=base_url()?>admin/sanpham"><i class="fa fa-laptop"></i> <span> Sản phẩm</span></a></li>
        <li><a href="<?=base_url()?>admin/hoadon"><i class="fa fa-file-text"></i> <span> Hóa đơn</span></a></li>
        <li><a href="<?=base_url()?>admin/tintuc"><i class="fa fa-rss"></i> <span> Tin tức</span></a></li>
        <li><a href="<?=base_url()?>admin/binhluan"><i class="fa fa-comment-o"></i> <span> Bình luận</span></a></li>
        <li><a href="<?=base_url()?>admin/danhgia"><i class="fa fa-check-square-o"></i> <span> Đánh giá</span></a></li>
      </ul>
      <!--
      <div class="infosummary">
        <h5 class="sidebartitle">Information Summary</h5>    
        <ul>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Daily Traffic</span>
                    <h4>630, 201</h4>
                </div>
                <div id="sidebar-chart" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Average Users</span>
                    <h4>1, 332, 801</h4>
                </div>
                <div id="sidebar-chart2" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Disk Usage</span>
                    <h4>82.2%</h4>
                </div>
                <div id="sidebar-chart3" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">CPU Usage</span>
                    <h4>140.05 - 32</h4>
                </div>
                <div id="sidebar-chart4" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Memory Usage</span>
                    <h4>32.2%</h4>
                </div>
                <div id="sidebar-chart5" class="chart"></div>   
            </li>
        </ul>
      </div> --> <!-- infosummary -->
      
    </div><!-- leftpanelinner -->
  </div>