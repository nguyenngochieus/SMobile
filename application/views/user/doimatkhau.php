<div id="content" class="full_page">  <ul class="breadcrumb">
                        <li><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=common/home">Home</a></li>
                                <li><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=account/account">Account</a></li>
                                <li class="active"><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=account/password">Change Password</a></li>
                    </ul>
  <h1>Đổi mật khẩu</h1>
  <form action="" method="post" id="doimatkhau">
    <h2>Mật khẩu của bạn</h2>
    <div class="content">
      <table class="form">
        <tr>
          <td><span class="required">*</span> Mật khẩu cũ:</td>
          <td><input type="password" class="input-text" id="matkhaucu" name="matkhaucu" autofocus></td>
          <td><?php echo form_error('matkhaucu'); ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> Mật khẩu mới:</td>
          <td><input type="password"  class="input-text" id="matkhaumoi" name="matkhaumoi"></td>
          <td> <?php echo form_error('matkhaumoi'); ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> Nhập lại mật khẩu:</td>
          <td> <input type="password"  class="input-text"  id="rematkhau" name="rematkhau"></td>
          <td><?php echo form_error('rematkhau'); ?></td>
        </tr>
      </table>
    </div>
    <div class="buttons">
      <div class="left"><a href="<?=base_url()?>user" class="button">Trở lại</a></div>
      <div class="right" style="margin-right:200px;"><input type="submit" value="Thực hiện" class="button" /></div>
    </div>
  </form>
  </div>
    </section>
        <!--Mid Section Ends-->
    </div>

