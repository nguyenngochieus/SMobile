    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <div class="full_page">                                
                <div class="checkout_steps">
                    <ol id="checkoutSteps">
                    <h1></h1>
                        <li class="section allow active" id="opc-login">
                            <div class="step-title"><h2>Đổi mật khẩu</h2></div>
                            <div id="checkout-step-login">
                                <div class="col2-set">
                                    <div class="col-1">                                 
                                        <form method="post" id="doimatkhau" action="">
                                                                                        
                                                <ul class="form-list">
                                                    <li>
                                                        <label>Mật khẩu cũ:</label>
                                                        <div class="input-box">
                                                            <input type="password" class="input-text" id="matkhaucu" name="matkhaucu">
                                                        </div>
                                                        <?php echo form_error('matkhaucu'); ?>
                                                    </li>
                                                    <li>
                                                        <label class="required">Mật khẩu mới:</label>
                                                        <div class="input-box">
                                                            <input type="password"  class="input-text" id="matkhaumoi" name="matkhaumoi">
                                                        </div>
                                                        <?php echo form_error('matkhaumoi'); ?>
                                                    </li>
                                                    </li>
                                                    <li>
                                                        <label class="required">Nhập lại khẩu mới:</label>
                                                        <div class="input-box">
                                                            <input type="password"  class="input-text"  id="rematkhau" name="rematkhau">
                                                        </div>
                                                        <?php echo form_error('rematkhau'); ?>
                                                    </li>                                                    
                                                </ul>
                                                <br/>
                                                <br/>
                                            
                                            <input type="submit" name="submit" class="button brown_btn" value="Thực hiện" />
                                        </form>
                                    </div>                                    
                                </div>

                            </div>
                        </li>
                        
                    </ol>
                </div>                
