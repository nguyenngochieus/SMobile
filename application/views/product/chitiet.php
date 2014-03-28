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
        <p class="short_dc"> <?=$item->MOTA?>
        
        <div class="pr_price"> <big><?=number_format($item->DONGIA,"0",",",".")?></big> <small><?php echo number_format($giab = $item->DONGIA + $item->DONGIA * 20 /100,"0",",",".");?></small> </div>

           <div class="add_to_buttons">
          <button onClick="parent.location='leisure_cart.html'" class="add_cart"><?=lang('addcart')?></button>
        </div>
        <div class="product_overview">
          <h4>Quick Overview</h4>
          <ul>
            <li>Long sleeves with single button cuffs.</li>
            <li>Cuffs can be rolled up and secured with button-tabs.</li>
            <li>Standing collar with notched detailing.</li>
            <li>Front button placket.</li>
            <li>Hem is longer in back.</li>
          </ul>
        </div>
      </div>
    <!--Product Right Ends--> 
  </div>
  <!--PRODUCT DETAIL ENDS--> 
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
  
  <!--Newsletter_subscribe Starts-->
  <div class="subscribe_block">
    <div class="find_us">
      <h3>Find us on</h3>
      <a class="twitter" href="#"></a> <a class="facebook" href="#"></a> <a class="rss" href="#"></a> </div>
    <div class="subscribe_nl">
      <h3>Subscribe to our Newsletter</h3>
      <small>Instant wardrobe updates, new arrivals, fashion news, don’t miss a beat – sign up to our newsletter now.</small>
      <form id="newsletter" method="post" action="#">
        <input type="text" class="input-text" value="Enter your email" title="Enter your email" id="newsletter" name="email">
        <button class="button" title="" type="submit"></button>
      </form>
    </div>
  </div>
  <!--Newsletter_subscribe Ends-->
  
  </section>
  <!--Mid Section Ends--> 
      <?php
    } ?>
</div>