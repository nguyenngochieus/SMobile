<div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <div class="full_page">
                <h1>Thanh toán</h1>
                <!--CHECKOUT STEPS STARTS-->
                <form method="post" action="<?=base_url()?>thanhtoan" id="thanhtoan" style="margin-left: 30px;">
                  <fieldset title="Đăng nhập">
                    <legend>Thông tin đăng nhập</legend> 
                    <label for="username">Tên đăng nhập</label>
                        <input style="width:50%" id="username" name="username" type="text" placeholder="Tài khoản" />
                    <label for="password">Mật khẩu</label>    
                        <input style="width:50%" id="password" name="password" type="password" placeholder="Mật khẩu" />
                        <button class="button" type="submit">Đăng nhập</button>
                        <a style="float:center" href="#"><small>Quên mật khẩu?</small></a>  
                        <br/><br/>
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>                       
                  </fieldset>

                  <fieldset title="Thông tin khách hàng">
                    <legend>Điền thông tin thanh toán</legend>
                     <label for="hoten">Tên đăng nhập</label>
                     <input style="width:50%" name="hoten" type="text" />
                     <label for="email">Email</label>
                     <input style="width:50%" name="email" type="text" />
                     <label for="SDT">Số điện thoại</label>
                     <input style="width:50%" name="SDT" type="text" />
                     <label for="CMND">Chứng minh nhân dân</label>
                     <input style="width:50%" name="CMND" type="text" />
                  </fieldset>

                  <fieldset title="Thông tin giao hàng">
                    <legend>Thông tin giao hàng</legend>
                    <label for="hotennn">Tên người nhận</label>
                     <input style="width:50%" name="hotennguoinhan" type="text" />
                     <label for="diachinn">Địa chỉ</label>
                     <input style="width:50%" name="diachinn" type="text" />
                     <label for="SDTnn">Số điện thoại</label>
                     <input style="width:50%" name="SDTnn" type="text" />
                  </fieldset>

                  <fieldset title="Kiểm tra giỏ hàng">
                    <legend>Xem lại giỏ hàng</legend>
                    
                  </fieldset>

                  <input type="submit" value="Hoàn tất" />
                </form>
                <!--CHECKOUT STEPS ENDS-->                
            </div>
      
        </section>
        <!--Mid Section Ends-->
    </div>
    <style type="text/css">
    .button{
        border: 1px solid #CCC;
        color: black;
        cursor: pointer;
        font: 1.2em verdana;
        padding: 7px 15px 8px;
        text-decoration: none;
        -khtml-border-radius: 3px;
        -moz-border-radius: 3px;
        -opera-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }
    </style>
    <script type="text/javascript">
         $(function() {
      $('#thanhtoan').stepy({ titleClick: true,  duration  : 400,  transition: 'fade',backLabel: 'Trở lại',  nextLabel: 'Tiếp theo' });
        });
    </script>
