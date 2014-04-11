 <div class="section_container"> 
    <!--Mid Section Starts-->
    <?php foreach ($result as $item) {
    ?>
    <section>
    <ul class="breadcrumb">
      <li><a href="<?=base_url()?>">Home</a></li>
      <li><a href="<?=base_url()?>loaisanpham/<?=$item->LOAI?>"><?=$item->LOAISANPHAM?></a></li>
      <li class="active"><a href="#"><?=$item->TENSANPHAM?></a></li>
    </ul>
    <!--PRODUCT DETAIL STARTS-->
    <div id="product_detail"> 
      <!--Product Left Starts-->
      <div class="product_leftcol"> <img src="<?= base_url()?>upload/images/<?=$item->HINH?>"/>      
      </div>
      <!--Product Left Ends--> 
      <!--Product Right Starts-->
      <div class="product_rightcol"> <small class="pr_type"><?=$item->LOAISANPHAM?></small>
        <h1><?=$item->TENSANPHAM?></h1>
        <h2><?=lang('nhacungcap')?>: <?=$item->TENNHACUNGCAP?></h2><br />
        
        
        <div class="pr_price"> <big><?=number_format($item->DONGIA,"0",",",".")?></big> <small><?php echo number_format($giab = $item->DONGIA + $item->DONGIA * 20 /100,"0",",",".");?></small> </div>

           <div class="add_to_buttons">
          <button onclick="Submit_Form(<?=$item->ID?>,1)" class="add_cart"><?=lang('addcart')?></button>
        </div>        
      </div>
    <!--Product Right Ends--> 
  </div>
  <!--PRODUCT DETAIL ENDS--> 
  <div class="simpleTabs">
    <ul class="simpleTabsNavigation">
      <li><a href="#tab-description">Mô tả</a></li>
            <li><a href="#tab-attribute">Xem bình luận (<?=count($result_cm)?>)</a></li>
                  <li><a href="#tab-review">Bình luận</a></li>
          </ul>
    <div class="simpleTabsContent">
      <p><?=$item->MOTA?></p>
    </div>
    <div class="simpleTabsContent">
    <?php
    if(count($result_cm)>0)
    {
     foreach ($result_cm as $item_cm) {          
     ?>
      <div class="comment">
        <div class="custom">
          <p class="name"><?=$item_cm['TENKHACHHANG']?></p>
          <p class="email"><?=$item_cm['EMAIL']?></p>
          <time class="date" datetime="<?=$item_cm['THOIGIAN']?>">(Ngày gửi: <?=date_format(date_create($item_cm['THOIGIAN']),"Y/m/d")?>)</time>
        </div>
        <div class="content_comment"> 
        <?=$item_cm['NOIDUNG']?> 
        </div>
      </div>
      <div style="clear:both;border-bottom: 1px  solid #EEEEEE;margin-top:10px; margin-bottom:10px;height:10px;"></div>
      <?php }
    }
    else
      echo "<h2>Chưa có bình luận nào</h2>";
      ?>
    </div>
            <div class="simpleTabsContent">
<form action="<?=base_url()?>sanpham/comment/<?=$item->ID?>" method="post">
      <div id="review"></div>      
      <h2 id="review-title">Viết bình luận</h2>
      <b>Tên của bạn:</b><br />
      <input type="text" name="name" value="" />
      <br />
      <b>Email:</b><br />
      <input type="text" name="email" value="" />
      <br />
      <b>Bình luận của bạn:</b>
      <textarea name="text" cols="40" rows="8" style="width: 98%;"></textarea>
      <span style="font-size: 11px;"><span style="color: #FF0000;">Chú ý:</span> Mã HTML sẽ không khả dụng</span><br />
      <br />
      <b>Nhập các kí tự trong hình vào ô dưới đây để chắc rằng bạn không phải là máy:</b><br />
      <input type="text" name="captcha" value="" />
      <br />
      <img src="" alt="" id="captcha" />"Capcha"<br />
      <br />
      <div class="buttons">
        <div class="right"><input class="button" type="submit" value="Tiếp tục" /></div>
      </div>
</form>

    </div>
        </div>
  <!--Product List Starts-->
  <div class="products_list products_slider">
    <h2 class="sub_title"><?=lang('SPCungLoai')?></h2>
    <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
    <?php foreach ($SPCungLoai as $item_sp) {
      ?>

      <li> <a class="product_image"><img src="<?= base_url()?>upload/images/<?=$item_sp->HINH?>"/></a>
        <div class="product_info">
          <h3><a href="leisure_detail.html"><?=$item_sp->TENSANPHAM?></a></h3>
          <small><?=substr($item->MOTA, 0 ,100)?>...</small> </div>
        <div class="price_info"> 
          <button class="price_add" title="" type="button"><span class="pr_price"><?=number_format($item->DONGIA,"0",",",".")?></span><span class="pr_add"><?=lang('addcart')?></span></button>
        </div>
      </li>     
     <?php
    } ?>
    </ul>
  </div>
  <!--Product List Ends--> 
  
  </section>
  <!--Mid Section Ends--> 
      <?php
    } ?>
</div>
<script type="text/javascript">

  $.fn.tabs = function() {
  var selector = this;
  
  this.each(function() {
    var obj = $(this); 
    
    $(obj.attr('href')).hide();
    
    $(obj).click(function() {
      $(selector).removeClass('selected');
      
      $(selector).each(function(i, element) {
        $($(element).attr('href')).hide();
      });
      
      $(this).addClass('selected');
      
      $($(this).attr('href')).fadeIn();
      
      return false;
    });
  });

  $(this).show();
  
  $(this).first().click();
};
</script>