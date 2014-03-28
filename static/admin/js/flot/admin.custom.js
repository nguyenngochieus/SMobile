function DeleteCate(id,page)
{
	jQuery.ajax({
		url: "" + jQuery('#url').val() + "adminpanel/ktradulieu/" + page + ".html",
		type: "POST",
		data: {id: id},
		cache: false
	}).done(function(data) {
		if(data > 0)
		{
			jQuery('.msgalert').fadeIn();
			jQuery('.question').fadeOut(300, function() {
						jQuery(this).remove();
					});	
		}
		else
		{
			jQuery.ajax({
				url: "" + jQuery('#url').val() + "adminpanel/" + page + "/delete.html",
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
					jQuery('.msgerror').fadeIn();
				}
			});
		}
		
	});
}