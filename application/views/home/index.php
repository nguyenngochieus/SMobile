
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--Banner Starts-->
            <div id="banner_section">
                <div class="flexslider">
                    <ul class="slides">
                        <li> <img src="<?= base_url()?>static/images/lm_banner_1.jpg" />
                            <!--<div class="flex-caption">
                     <h3>Explore the summer collection!</h3>
              </div>-->
                        </li>
                        <li> <img src="<?= base_url()?>static/images/lm_banner_2.jpg" />
                            <!--<div class="flex-caption">
                      <h3>Shop now!</h3>
               </div> -->
                        </li>
                        <li> <img src="<?= base_url()?>static/images/lm_banner_3.jpg" /> </li>
                    </ul>
                </div>
                <div class="promo_banner">
                    <div class="home_banner"><a href="<?= base_url()?>sanpham/loaisanpham.html?id=1"><img src="<?= base_url()?>static/images/promo_hb_1.jpg"></a></div>
                    <div class="home_banner"><a href="<?= base_url()?>sanpham/loaisanpham.html?id=2"><img src="<?= base_url()?>static/images/promo_hb_2.jpg"></a></div>
                    <div class="home_banner"><a href="<?= base_url()?>sanpham/loaisanpham.html?id=3"><img src="<?= base_url()?>static/images/promo_hb_3.jpg"></a></div>
                </div>
            </div>
            <!--Banner Ends-->
            <!--Product List Starts-->        
            
            <div class="products_list products_slider">
                <h2 class="sub_title"><?=lang('sp_moi')?></h2>
                <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango products">
                <?php foreach ($SanPhamMoi as $item): ?>
                    <li> <a class="product_image"><img src="<?= base_url()?>upload/images/<?=$item->HINH?>"/></a>
                        <div class="product_info">
                            <h3><a href="<?=base_url()?>sanpham/chitiet/<?=$item->ID?>"><?=$item->TENSANPHAM?></a></h3>
                            <small><?=$this->public_model->cut($item->MOTA,100)?></small> </div>                        
                        <div class="price_info">                                                
                            <button class="price_add" title="" type="button" >
                                <span class="pr_price">
                                    <?=number_format($item->DONGIA,"0",",",".")?>
                                </span>     
                                <span class="pr_add" onclick="Submit_Form(<?=$item->ID?>,1)"><?=lang('addcart')?></span>                                           
                            </button >                          
                        </div>
                        
                    </li>   
                <?php endforeach; ?>                 
                </ul>
            </div>
            <!--Product List Ends-->
            <!--Product List Starts-->
            <div class="products_list products_slider">
                <h2 class="sub_title"><?=lang('sp_banchay')?></h2>
                <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
                   <?php
                    foreach ($SanPhamBanChay as $item) {
                ?>
                    <li> <a class="product_image"><img src="<?= base_url()?>upload/images/<?=$item->HINH?>"/></a>
                        <div class="product_info">
                            <h3><a href="<?=base_url()?>sanpham/chitiet/<?=$item->ID?>"><?=$item->TENSANPHAM?></a></h3>
                            <small><?=$this->public_model->cut($item->MOTA,100)?></small> </div>
                        <div class="price_info">
                            <button class="price_add" title="" type="button"><span class="pr_price"><?=number_format($item->DONGIA,"0",",",".")?></span><span class="pr_add" onclick="Submit_Form(<?=$item->ID?>,1)" ><?=lang('addcart')?></span></button>
                        </div>
                    </li>   
                <?php                       
                    }
                ?>             
                </ul>
            </div>
            <!--Product List Ends-->
<style type="text/css">
    .unordered a{
        text-decoration: none;
        color: black;
        font-size: 10pt;
    }

     .span6 label{
        font-size: 8pt;
    }

    .span6 a:hover{
        color: #adadad;
    }

</style>
                <div class="products_list products_slider">        
            <h2 class="sub_title">TIN TỨC</h2>
        <br />
        <div class="row-fluid">
            <div class="span6">
                <h4 class="widgettitle" style="font-size: 26px; font-weight: bold; line-height: 56px;">Tin khuyến mãi </></h4>
                <div style="line-height: 20px">
                    <div class="r" style="float: right; width: 55%;">
                        <h4 style="font-size: 16px !important; color: #444444">
                            <a><?=$TinKhuyenMai[0]->TIEUDE?></a>
                        </h4>
                        <label Text="Label"><?=$TinKhuyenMai[0]->MOTA?></label>
                    </div>
                    <img ID="imgKhuyenmai"  src="<?=base_url()?>upload/files/<?=$TinKhuyenMai[0]->HINH?>" Width="200px" />

                </div>
                <!--widgetcontent-->

                <div>
                    <br />
                    <br />
                    <h1 style="font-size: large">Tin cùng chuyên mục</h1>
                    <ul class="unordered" style="margin-left: 10px !important; list-style-type: square; line-height: 25px !important; width: 370px !important">
                        <li style="list-style: none"></li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinKhuyenMai[1]->ID?>"><?=$TinKhuyenMai[1]->TIEUDE?></a>
                        </li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinKhuyenMai[2]->ID?>"><?=$TinKhuyenMai[2]->TIEUDE?></a>
                        </li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinKhuyenMai[3]->ID?>"><?=$TinKhuyenMai[3]->TIEUDE?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--span6-->
            <div class="span6">
                <h4 class="widgettitle" style="font-size: 26px; font-weight: bold; line-height: 56px;">Tin công nghệ</h4>
                <div style="line-height: 20px">
                    <div class="r" style="float: right; width: 55%;">
                        <h4 style="font-size: 16px !important; color: #444444">
                            <a><?=$TinCongNghe[0]->TIEUDE?></a>
                        </h4>
                        <label Text="Label"><?=$TinCongNghe[0]->MOTA?></label>
                    </div>
                    <img ID="imgKhuyenmai"  src="<?=base_url()?>upload/files/<?=$TinCongNghe[0]->HINH?>" Width="200px" />
                </div>
                <!--widgetcontent-->
                <div>
                    <br />
                    <br />
                    <h1 style="font-size: large">Tin cùng chuyên mục</h1>
                    <ul class="unordered" style="margin-left: 10px !important; list-style-type: square; line-height: 25px !important; width: 370px !important">
                        <li style="list-style: none"></li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinCongNghe[1]->ID?>"><?=$TinCongNghe[1]->TIEUDE?></a>
                        </li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinCongNghe[2]->ID?>"><?=$TinCongNghe[2]->TIEUDE?></a>
                        </li>
                        <li style="width: 115%">
                            <a href="<?=base_url()?>tintuc?id=<?=$TinCongNghe[3]->ID?>"><?=$TinCongNghe[3]->TIEUDE?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
        </section>
        <!--Mid Section Ends-->
    </div>
 