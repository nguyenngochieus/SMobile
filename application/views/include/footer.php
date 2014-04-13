
   <div class="footer_container">
        <!--Footer Starts-->
        <footer>
            <ul class="footer_links">
                <li> <span>ĐIỆN THOẠI</span>
                    <ul>
                    <?php foreach ($FMenu1 as $item) {
                        echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                    } ?> 
                    </ul>
                </li>
                <li  class="seperator"> <span>MÁY TÍNH XÁCH TAY</span>
                    <ul>
                    <?php foreach ($FMenu2 as $item) {
                        echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                    } ?>                         
                    </ul>
                </li>
                <li> <span>MÁY TÍNH BẢNG</span>
                    <ul>
                    <?php foreach ($FMenu3 as $item) {
                        echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                    } ?>   
                    </ul>
                </li>
                <?php $check = $this->login->checkLogin();
                    if($check == 1 || $check == 2 )
                    {?>
                <li> <span>Tài khoản của tôi</span>
                    <ul>
                          <li><a href="<?=base_url()?>user.html">Tài khoản của tôi</a></li>
                          <li><a href="<?=base_url()?>user/taikhoan.html">Thay đổi thông tin</a></li>
                          <li><a href="<?=base_url()?>user/doimatkhau.html">Đổi mật khẩu</a></li>
                          <li><a href="<?=base_url()?>user/lichsudathang.html">Lịch sử mua hàng</a></li>
                          <li><a href="<?=base_url()?>dangxuat.html">Thoát</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <div class="footer_customblock">
                <div class="shipping_info"> <span>GIAO HÀNG TẬN NƠI</span><br>
                    <big>MIỄN PHÍ</big><br>
                    <small>VẬN CHUYỂN NỘI THÀNH</small><br> 
                </div>                   
                <div class="contact_info"> 
                    <big>TƯ VẤN MUA HÀNG</big><br/><br/>
                    <big>0169 466 2923</big> <br/>
                    <big>0167 623 9742</big> 
                </div>                
            </div>
            <address>
            Copyright © 2014 SMobile. All Rights Reserved.<br/> Designed by <a target="_blank" href="https://www.facebook.com/KelvinLee93">Kelvin Lee</a> and <a target="_blank" href="https://www.facebook.com/nguyenngochieu93">Mr.Cupid</a>. SMobile on <a target="_blank" href="https://github.com/mrcupid12/SMobile">GitHub</a>
            </address>
        </footer>
        <!--Footer Ends-->
    </div>
</div>
</body>
</html>
