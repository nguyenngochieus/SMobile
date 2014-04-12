<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Đăng ký thành viên SMobile">
  <meta name="author" content="Kelvin Lee & Cupid">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Đăng ký</title>

  <link href="<?=base_url()?>static/admin/css/style.default.css" rel="stylesheet">
  <link href="<?=base_url()?>static/admin/css/bootstrap-combined.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?= base_url()?>static/admin/js/html5shiv.js"></script>
  <script src="<?= base_url()?>static/admin/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signuppanel">
        
        <div class="row">
            
            <div class="col-md-6">
                
                <div class="signup-info">
                    <div class="logopanel">
                        <h1><span>[</span> SMobile <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                                    
                    <p>SMobile là hệ thống mua bán thiết bị di động trực tuyến.</p>
                    <p>Đăng ký ngay hôm nay để hưởng nhiều ưu đãi hấp dẫn dành cho thành viên SMobile.</p>
                    <div class="mb20"></div>
                    
                    <div class="feat-list">
                        <i class="fa fa-bitcoin"></i>
                        <h4 class="text-success">Nhiều ưu đãi lớn</h4>                        
                    </div>

                    <div class="feat-list">
                        <i class="fa fa-bolt"></i>
                        <h4 class="text-success">Thanh toán nhanh chóng</h4>                        
                    </div>
                    
                    <div class="feat-list">
                        <i class="fa fa-usd"></i>
                        <h4 class="text-success">Giá cả hợp lý</h4>                        
                    </div>

                    <div class="feat-list">
                        <i class="fa fa-truck"></i>
                        <h4 class="text-success">Giao hàng tận nơi</h4>                        
                    </div>                                    
                                       
                </div><!-- signup-info -->
            
            </div><!-- col-sm-6 -->

            <div class="col-md-6">                
                <form id="basicForm" action="" method="post" class="form-horizontal">
                    
                    <h3 class="nomargin">Đăng ký</h3>
                    <p class="mt5 mb20">Đã có tài khoản? <a href="<?=base_url()?>dangnhap.html"><strong>Đăng nhập ngay...</strong></a></p>
                                    
                    <div class="mb10"> 
                        <label class="control-label">Họ tên <span class="asterisk">*</span></label>                       
                        <input type="text" id="hoten" name="hoten" title="Điền họ tên của bạn!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" value="<?php echo set_value('hoten'); ?>" autofocus/> 
                        <?php echo form_error('hoten'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Tên đăng nhập <span class="asterisk">*</span></label>
                        <input type="text" id="tendangnhap" name="tendangnhap" title="Điền tên đăng nhập!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" value="<?php echo set_value('tendangnhap'); ?>"/>                        
                        <?php echo form_error('tendangnhap'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Mật khẩu <span class="asterisk">*</span></label>
                        <input type="password" id="matkhau" name="matkhau" title="Điền mật khẩu!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips"/>
                        <p></p>                                              
                                          
                        <?php echo form_error('matkhau'); ?>    
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Nhập lại mật khẩu <span class="asterisk">*</span></label>
                        <input type="password" id="rematkhau" name="rematkhau" title="Nhập lại mật khẩu!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                        <?php echo form_error('rematkhau'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Email <span class="asterisk">*</span></label>
                        <input type="text" id="email" name="email" title="Nhập địa chỉ email" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" value="<?php echo set_value('email'); ?>"/>
                        <?php echo form_error('email'); ?>
                    </div>  
                    
                    <div class="mb10">
                        <label class="control-label">Ngày sinh <span class="asterisk">*</span></label>
                        <div class="input-group">
                          <input name="namsinh" type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" value="<?php echo set_value('namsinh'); ?>">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>                          
                        </div>
                        <?php echo form_error('namsinh'); ?>
                    </div>

                    <div class="mb10">
                        <label class="control-label">Địa chỉ</label>                                                                        
                        <div class="col-sm-6">
                            <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ..." />
                        </div>
                        <div class="col-sm-6">
                            <select id="fruits" name="tinh_tp" class="form-control ">
                                <option value="">Chọn tỉnh/thành</option>
                                <option value="An Giang">An Giang</option>
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bạc Liêu">Bạc Liêu</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Bến Tre">Bến Tre</option>
                                <option value="Bình Định">Bình Định</option>
                                <option value="Bình Dương">Bình Dương</option>
                                <option value="Bình Phước">Bình Phước</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Đắk Lắk">Đắk Lắk</option>
                                <option value="Đắk Nông">Đắk Nông</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Đồng Nai">Đồng Nai</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                                <option value="Gia Lai">Gia Lai</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hậu Giang">Hậu Giang</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Khánh Hòa">Khánh Hòa</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                                <option value="Kon Tum">Kon Tum</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lâm Đồng">Lâm Đồng</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Lào Cai">Lào Cai</option>
                                <option value="Long An">Long An</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Nghệ An">Nghệ An</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Ninh Thuận">Ninh Thuận</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Quảng Trị">Quảng Trị</option>
                                <option value="Sóc Trăng">Sóc Trăng</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Tây Ninh">Tây Ninh</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Thanh Hóa">Thanh Hóa</option>
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                <option value="Tiền Giang">Tiền Giang</option>
                                <option value="Trà Vinh">Trà Vinh</option>
                                <option value="Tuyên Quang">Tuyên Quang</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Phú Yên">Phú Yên</option>
                                <option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
                                <option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
                                <option value="Tp.Hà Nội">Tp.Hà Nội</option>
                                <option value="TP  HCM">TP HCM</option>
                            </select>
                        </div>
                    </div>                    
                    
                    <div class="mb10">
                        <label class="control-label">Mã xác nhận <span class="asterisk">*</span></label>
                        <input type="text" id="captcha" name="captcha" title="Nhập mã xác nhận bên dưới" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" /><br/><br/>
                        <center><?php echo $captcha['image']; ?><a href="#" title="Đổi dãy mã xác nhận khác" id="new_captcha"><img src="<?=base_url()?>static/images/reload.png" height="32" width="32"></a></center>
                        <center><?php echo form_error('captcha'); ?></center>
                    </div>                       
                                                                        
                    <br/>
                    <button class="btn btn-success btn-block">Đăng ký</button><br/>
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> <a href="<?=base_url()?>">Quay lại SMobile</a>   
                </form>
            </div><!-- col-sm-6 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014 - SMobile
            </div>
            
        </div>
        
    </div><!-- signuppanel -->
  
</section>

<script src="<?=base_url()?>static/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>static/admin/js/modernizr.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>static/admin/js/toggles.min.js"></script>
<script src="<?=base_url()?>static/admin/js/retina.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.cookies.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.alerts.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-fileupload.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-wysihtml5.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.datatables.min.js"></script>
<script src="<?=base_url()?>static/admin/js/chosen.jquery.min.js"></script>
<script src="<?=base_url()?>static/admin/js/custom.js"></script>
<script src="<?=base_url()?>static/admin/js/admin.custom.js"></script>
<script src="<?=base_url()?>static/admin/js/progressbar.js"></script>



<script>
$(function(){
    $('#new_captcha').button({
        text: false,
        icons: {
            primary: 'ui-icon-refresh'
        }
    }).click(function(event){
        event.preventDefault();
        $(this).prev().attr('src', 'dangky/new_captcha?'+Math.random());
    });
});
</script>

</body>
</html>
