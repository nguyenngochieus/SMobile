var url = "http://localhost/SMobile/";
function DeleteCate(id,page)
{
	 var c = confirm("Xác nhận xóa dữ liệu?");
      if(c)
       {
		jQuery.ajax({
			url: "" + url + "admin/ktradulieu/" + page + ".html",
			type: "POST",
			data: {id: id},
			cache: false
		}).done(function(data) {
			if(data > 0)
			{
				jQuery('.msgalert').fadeIn();
			}
			else
			{
				jQuery.ajax({
					url: "" + url + "admin/" + page + "/delete.html",
					type: "POST",
					data: {id: id},
					cache: false
				}).done(function(data) {
					if(data==1)
					{
						jQuery('.msgsuccess').fadeIn();
						jQuery('#cate_'+id).fadeOut(function()
						{
							jQuery(this).remove();
						});
					}
					else
					{
						alert(url);
						jQuery('.msgerror').fadeIn();
					}
				});
			}
			
		});
	}
}

//---------------CK Finder-----------------
function BrowseServer(inputData) {
        var finder = new CKFinder();
        finder.BasePath = url + 'static/admin/js/ckfinder/';
        finder.SelectFunction = SetFileField;
        finder.SelectFunctionData = inputData;
        finder.Popup();
    }
function SetFileField(fileUrl, data) {
	jQuery("#HinhAnh").attr('value',  fileUrl);
	jQuery("#ViewHinh").attr('src',  fileUrl);
}

function ChangeImage()
{
	var val = jQuery('#HinhAnh').val();
	jQuery('#ViewHinh').attr('src',val);
}
//---------------CK Finder-----------------


//---------------wysihtml5-----------------
//jQuery('#mota').wysihtml5({color: true,html:true});
jQuery('#mota_en').wysihtml5({color: true,html:true});

//---------------Datepicker----------------
jQuery('#datepicker').datepicker();


