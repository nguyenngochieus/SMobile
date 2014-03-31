  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>            
      
      <div class="header-right">
        <ul class="headermenu">          
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="<?=base_url()?>upload/files/snowstorm-sivir-skin.jpg" alt="" />
                <?=($Name=="")?$Username:$Name?>
                <span class="caret"></span>
              </button> 
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> Hồ sơ</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Tùy chỉnh</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Hỗ trợ</a></li>
                <li><a href="<?=base_url()?>admin/logout"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a></li>
              </ul>
            </div>
          </li>          
        </ul>
      </div><!-- header-right -->
      
    </div>