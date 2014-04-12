<div id="content" class="full_page">
      <ul class="breadcrumb">
        <li><a href="<?= base_url()?>">Trang chủ</a></li>
        <li><a href="<?= base_url()?>user">Tài khoản</a></li>
        <li class="active"><a href="<?= base_url()?>user/taikhoan">Thay đổi thông tin</a></li>        
      </ul>
  <h1>Thông tin tài khoản của tôi</h1>
  <form action="" method="post" id="doithongtintaikhoan">
    <h2>Thông tin cá nhân của bạn</h2>
    <div class="content">
        <table class="form">
        <tr>
          <td>Họ tên:</td>
          <td><input type="text" id="hoten" name="hoten" value="<?=$UserInfo[0]->TENNGUOIDUNG?>" /></td>
          <td><?php echo form_error('hoten'); ?></td>
        </tr>
        <tr>
          <td>Tên đăng nhập:</td>
          <td><input type="text" id="tendangnhap" name="tendangnhap" value="<?=$UserInfo[0]->TENDANGNHAP?>" readonly /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" id="email" name="email" value="<?=$UserInfo[0]->EMAIL?>" readonly /></td>
        </tr>
        <tr>
          <td>Ngày sinh:</td>
          <td><input type="date" id="ngaysinh" name="ngaysinh" value="<?=$UserInfo[0]->NGAYSINH?>"/></td>
          <td><?php echo form_error('ngaysinh'); ?></td>
        </tr>
        <tr>
          <td>Giới tính: </td>
          <td> <input type="radio" id="male" value="1" name="gioitinh"
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
            <td>Địa chỉ:</td>
            <td><input type="text" id="diachi" name="diachi" value="<?=$UserInfo[0]->DIACHI?>" /></td>
            <td><?php echo form_error('diachi'); ?></td>
          </tr>
          <tr>
            <td>CMND:</td>
            <td><input type="text" id="cmnd" name="cmnd" value="<?=$UserInfo[0]->CMND?>" /></td>
            <td><?php echo form_error('cmnd'); ?></td>
          </tr>
          <tr>
            <td>SDT:</td>
            <td><input type="text" id="sdt" name="sdt" value="<?=$UserInfo[0]->SDT?>" /></td>
            <td><?php echo form_error('sdt'); ?></td>
          </tr>
      </table>
    </div>
    <div class="buttons">
      <div class="center">
        <input type="submit" name="submit" class="button brown_btn" value="Thực hiện" />
      </div>
    </div>
  </form>
  <br />
  </div>      
  </section>
        <!--Mid Section Ends-->
</div>
