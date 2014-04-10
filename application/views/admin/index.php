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
  <script src="<?=base_url()?>static/admin/js/html5shiv.js"></script>
  <script src="<?=base_url()?>static/admin/js/respond.min.js"></script>
  <![endif]-->
<style type="text/css">    
    .nousername,.nopassword { display: none; }
</style>
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
                      <?php if(isset($success) && $success !="")
                      {
                        ?>
                             <div class="alert alert-success">
                              <h4 style="font-family:Lucida Sans Unicode"><?=$success?></h4>
                             </div>
                         <?php 
                         }
                        else
                        {
                          ?> 
                          <strong>Chưa có tài khoản? <a href="<?=base_url()?>dangky.html">Đăng ký ngay...</a></strong>
                          <?php 
                        }                          
                            ?>   

                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form id="login" method="post" action="">
                    <h4 class="nomargin">Đăng nhập</h4>

                    <div class="alert alert-danger nousername">
                      <div class="loginmsg">Bạn chưa nhập username</div>
                    </div><!--nousername-->
                        
                    <div class="alert alert-danger nopassword" <?=($loi=='')?'':'style="display:block;"'?>>
                      <div class="loginmsg"  ><?=$loi?></div>
                    </div><!--nopassword-->                  
                
                    <input id="username" name="username" type="text" class="form-control uname" placeholder="Tài khoản" autofocus />
                    <input id="password" name="password" type="password" class="form-control pword" placeholder="Mật khẩu" />
                    <div class="mb20"></div>
                    <div style="float:left"><input type="checkbox" name="remember" value="1" />   Lưu tài khoản</div>
                    <div class="mb10"></div>
                    <button class="btn btn-success btn-block">Đăng nhập</button>
                    <a style="float:center" href="#"><small>Quên mật khẩu?</small></a>  
                    <br/><br/>
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> <a href="<?=base_url()?>">Quay lại SMobile</a>
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
<script type="text/javascript">
  jQuery(document).ready(function(){     
    
  ///// LOGIN FORM SUBMIT /////
    jQuery('#login').submit(function(){
    
      if(jQuery('#username').val() == '' && jQuery('#password').val() == '') {
        jQuery('.nousername').fadeIn();
        jQuery('.nopassword').hide();
        return false; 
      }
    });

  });
</script>

<script src="<?=base_url()?>static/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>static/admin/js/modernizr.min.js"></script>
<script src="<?=base_url()?>static/admin/js/retina.min.js"></script>

<script src="<?=base_url()?>static/admin/js/custom.js"></script>

</body>
</html>

