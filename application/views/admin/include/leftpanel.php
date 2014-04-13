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
                    <h4><?=($Name=="")?$Username:$Name?></h4>                    
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Tài khoản</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <!-- <li><a href="<?=base_url()?>admin/nguoidung/edit?id=<?=($UserID)?>"><i class="fa fa-user"></i> <span>Hồ sơ</span></a></li> -->
            <!--  <li><a href="#"><i class="fa fa-cog"></i> <span>Tùy chỉnh</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Hỗ trợ</span></a></li> -->
              <li><a href="<?=base_url()?>admin/dangxuat"><i class="fa fa-sign-out"></i> <span>Đăng xuất</span></a></li>
            </ul>
        </div>
      <!-- Dòng này chỉ hiển thị trên thiết bị hoặc màn hình nhỏ -->

      <h5 class="sidebartitle">Điều hướng </h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        
        <li class="<?php if ($page=='trangchu') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin"><i class="fa fa-dashboard"></i> <span> Trang chủ</span></a></li>
        <li class="<?php if ($page=='nguoidung') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/nguoidung"><i class="fa fa-user"></i> <span> Người dùng</span></a></li>
        <li class="<?php if ($page=='sanpham') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/sanpham"><i class="fa fa-laptop"></i> <span> Sản phẩm</span></a></li>
        <li class="<?php if ($page=='hoadon') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/hoadon"><i class="fa fa-file-text"></i> <span> Hóa đơn</span></a></li>
        <li class="<?php if ($page=='tintuc') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/tintuc"><i class="fa fa-rss"></i> <span> Tin tức</span></a></li>
        <li class="<?php if ($page=='binhluan') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/binhluan"><i class="fa fa-comment-o"></i> <span> Bình luận</span></a></li>
        <li class="<?php if ($page=='danhgia') echo 'active'; else echo ''?>"><a href="<?=base_url()?>admin/danhgia"><i class="fa fa-check-square-o"></i> <span> Đánh giá</span></a></li>        
        <li><a href="<?=base_url()?>dangxuat"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a></li>
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