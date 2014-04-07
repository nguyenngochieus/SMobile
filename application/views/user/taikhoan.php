<div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <div class="full_page">    
            	<div class="checkout_steps">
                    <ol id="checkoutSteps">
                    <h1></h1>
                        <li class="section allow active" id="opc-login">
                            <div class="step-title"><h2>Thông tin tài khoản</h2></div>
                            <div id="checkout-step-login">
                                <form method="post" id="doithongtintaikhoan" action="">
                                    <table class="form">
                                            <tr>                                              
                                                <td><label><b>Họ tên: </b></label><br/><input type="text" id="hoten" name="hoten" value="<?=$UserInfo[0]->TENNGUOIDUNG?>"/>
                                                <br/><?php echo form_error('hoten'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><b>Tên đăng nhập: </b></label><br/><input type="text" id="tendangnhap" name="tendangnhap" value="<?=$UserInfo[0]->TENDANGNHAP?>" readonly />
                                                </td>                                            
                                            </tr>
                                            <tr>
                                                <td><label><b>Email: </b></label><br/><input type="text" id="email" name="email" value="<?=$UserInfo[0]->EMAIL?>" readonly />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><b>Ngày sinh: </b></label><br/><input type="date" id="ngaysinh" name="ngaysinh" value="<?=$UserInfo[0]->NGAYSINH?>"/>                                                
                                                <br/><?php echo form_error('ngaysinh'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                              <td><label><b>Giới tính: </b></label><br/>                                              
                                                <input type="radio" id="male" value="1" name="gioitinh"
                                                  <?php if ($UserInfo[0]->GIOITINH == 1) {
                                                          echo 'checked';
                                                  } ?>>
                                                  <label for="male">Nam</label>
                                                <input type="radio" value="0" id="female" name="gioitinh" <?php if ($UserInfo[0]->GIOITINH == 0) {
                                                          echo 'checked';
                                                  } ?>>
                                                  <label for="female">Nữ</label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><label><b>Địa chỉ: </b></label><br/><input type="text" id="diachi" name="diachi" value="<?=$UserInfo[0]->DIACHI?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><b>CMND: </b></label><br/><input type="text" id="cmnd" name="cmnd" value="<?=$UserInfo[0]->CMND?>" />
                                                <br/><?php echo form_error('cmnd'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><b>Số điện thoại: </b></label><br/><input type="text" id="sdt" name="sdt" value="<?=$UserInfo[0]->SDT?>" />
                                                <br/><?php echo form_error('sdt'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                              <td>                                             
                                              <input type="hidden" name="HinhDaiDien" id="HinhDaiDien" value="/SMobile/upload/files/<?php echo $UserInfo[0]->HINHANH;?>" />
                                              <input type="hidden" name="matkhau" id="matkhau" value="<?php echo $UserInfo[0]->MATKHAU;?>" />
                                              <input type="hidden" name="quyen" id="quyen" value="<?php echo $UserInfo[0]->QUYEN;?>" />
                                              <input type="hidden" name="trangthai" id="trangthai" value="<?php echo $UserInfo[0]->TRANGTHAI;?>" />
                                              </td>
                                            </tr>
                                    </table>  
                                    <br/>                  
                                    <div class="buttons">
                                        <input type="submit" name="submit" class="button brown_btn" value="Thực hiện" />                             
                                    </div>
                                </form>                               
                            </div>
                        </li>
                        
                    </ol>
                </div>