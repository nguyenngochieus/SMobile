</section>


<script src="<?=base_url()?>static/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>static/admin/js/modernizr.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>static/admin/js/toggles.min.js"></script>
<script src="<?=base_url()?>static/admin/js/retina.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.cookies.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.alerts.js"></script>

<!--form -->
<script src="<?=base_url()?>static/admin/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-fileupload.min.js"></script>
<script src="<?=base_url()?>static/admin/js/ckfinder/ckfinder_v1.js"></script>
<script src="<?=base_url()?>static/admin/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-wysihtml5.js"></script>

<script src="<?=base_url()?>static/admin/js/jquery.datatables.min.js"></script>
<script src="<?=base_url()?>static/admin/js/chosen.jquery.min.js"></script>

<script src="<?=base_url()?>static/admin/js/custom.js"></script>


<script src="<?=base_url()?>static/admin/js/admin.custom.js"></script>
<script>
  jQuery(document).ready(function() {    

    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Delete row in a table
    //jQuery('.delete-row').click(function(){
     
        
      //  return false;
    //});
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
    
      // Basic Form
    jQuery("#basicForm").validate({

        rules: { 
            hoten: "required",
            username: "required", 
            password: "password",
            email: { 
                required: true, 
                email: true
            },
            CMND: {
                required: true,
                number: true,
                minlenght:9,
            },
            SDT: {
                required: true,
                number: true,
                minlenght:9,
            },
            gender: "required",
            trangthai: "required",
            namsinh: "required",
            quyen: "required",
            soluong: {
                required: true,
                number: true,
                maxlenght:4,
            },
        }, 
        messages: { 
            hoten: "Hãy điền họ tên",
            username: "Hãy điền tên đăng nhập", 
            password: "Hãy điền mật khẩu",
            email: { 
                required: "Hãy nhập một địa chỉ email hợp lệ", 
                email:"Địa chỉ email không hợp lệ"
            },
            CMND: {
                required: "Hãy nhập số CMND",
                number: "Hãy nhập đúng số CMND",
                minlenght: "Hãy nhập đúng số CMND"
            },
            SDT: {
                required: "Hãy nhập số điện thoại",
                number: "Hãy nhập đúng số điện thoại",
                minlenght: "Hãy nhập đúng số điện thoại"
            },
            gender: "Xin chọn giới tính",
            trangthai: "Xin chọn trạng thái",
            namsinh: "Xin chọn năm sinh",
            quyen: "Xin chọn quyền",
            soluong: {
                required: "Hãy nhập số lượng",
                number: "Hãy nhập đúng số lượng",
                maxlenght: "Số lượng quá lớn"
            },
        }, 

       
      highlight: function(element) {
        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
      },
      success: function(element) {
        jQuery(element).closest('.form-group').removeClass('has-error');
      }
    });   
  

  
    });
</script>
</body>

</html>
