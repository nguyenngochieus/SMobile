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
                    <p class="mt5 mb20">Đã có tài khoản? <a href="<?=base_url()?>admin"><strong>Đăng nhập ngay...</strong></a></p>
                                    
                    <div class="mb10"> 
                        <label class="control-label">Họ tên</label>                       
                        <input type="text" id="hoten" name="hoten" title="Điền họ tên của bạn!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" maxlength="20" value="<?php echo set_value('hoten'); ?>" /> 
                        <?php echo form_error('hoten'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Tên đăng nhập</label>
                        <input type="text" id="tendangnhap" name="tendangnhap" title="Điền tên đăng nhập!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" maxlength="20" value="<?php echo set_value('tendangnhap'); ?>"/>                        
                        <?php echo form_error('tendangnhap'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Mật khẩu</label>
                        <input type="password" id="matkhau" name="matkhau" title="Điền mật khẩu!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" value="<?php echo set_value('matkhau'); ?>"/>
                        <?php echo form_error('matkhau'); ?>    
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Nhập lại mật khẩu</label>
                        <input type="password" id="rematkhau" name="rematkhau" title="Nhập lại mật khẩu!" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                        <?php echo form_error('rematkhau'); ?>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Email</label>
                        <input type="text" id="email" name="email" title="Nhập địa chỉ email" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" value="<?php echo set_value('email'); ?>"/>
                        <?php echo form_error('email'); ?>
                    </div>  
                    
                    <div class="mb10">
                        <label class="control-label">Ngày sinh</label>
                        <div class="input-group">
                          <input name="namsinh" type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" value="<?php echo set_value('namsinh'); ?>">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>                          
                        </div>
                        <?php echo form_error('namsinh'); ?>
                    </div>  

                    <div class="mb10">
                        <label class="control-label">Giới tính</label>                                    
                          <div class="rdio rdio-primary">
                            <input type="radio" id="male" value="1" name="gioitinh" checked>                      
                            <label for="male">Nam</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" value="0" id="female" name="gioitinh">
                            <label for="female">Nữ</label>
                          </div>                   
                    </div>

                                                                          
                    <br/>
                    <button class="btn btn-success btn-block">Đăng ký</button>     
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



<script>
    jQuery(document).ready(function(){
        
        // Chosen Select
        jQuery(".chosen-select").chosen({
            'width':'100%',
            'white-space':'nowrap',
            disable_search_threshold: 10
        });
        
    });

</script>

</body>
</html>
