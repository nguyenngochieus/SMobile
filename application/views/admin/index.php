<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?=base_url()?>static/admin/images/favicon.png" type="image/png">

  <title>Đăng nhập</title>

  <link href="<?=base_url()?>static/admin/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?=base_url()?>static/admin/jshtml5shiv.js"></script>
  <script src="<?=base_url()?>static/admin/jsrespond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> SMobile <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Chào mừng bạn đến với SMobile!</strong></h5>
                    
                    <div class="mb20"></div>
                    <strong>Chưa có tài khoản? <a href="signup.html">Đăng ký ngay...</a></strong>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="">
                    <h4 class="nomargin">Đăng nhập</h4>                  
                
                    <input type="text" class="form-control uname" placeholder="Tài khoản" />
                    <input type="password" class="form-control pword" placeholder="Mật khẩu" />
                    <a href="#"><small>Quên mật khẩu?</small></a>
                    <button class="btn btn-success btn-block">Đăng nhập</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014 - SMobile
            </div>            
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="<?=base_url()?>static/admin/jsjquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>static/admin/jsjquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>static/admin/jsbootstrap.min.js"></script>
<script src="<?=base_url()?>static/admin/jsmodernizr.min.js"></script>
<script src="<?=base_url()?>static/admin/jsretina.min.js"></script>

<script src="<?=base_url()?>static/admin/jscustom.js"></script>

</body>
</html>
