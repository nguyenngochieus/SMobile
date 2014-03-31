    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--SIDE NAV STARTS-->
            <div id="side_nav">
                <div class="sideNavCategories">
                    <h1><?=$TenNhaCungCap->TEN?></h1>
                    <ul class="category departments">
                        <li class="header"><?=lang('cungncc') ?></li>
                       <?php foreach ($Loai as $item_loai) {
                          ?>
                            <li><a href="<?=base_url()?>sanpham/loaisanpham/<?=$item_loai->ID?>-<?=$idNhaCungCap?>"><?=$item_loai->TENLOAI?></a></li>
                          <?php
                       } ?>                       
                    </ul>
                    <ul class="category price">
                        <li class="header"><?=lang('menu_gia') ?></li>
                        <li><a href="#">0 - 1.000.000</a></li>
                        <li><a href="#">1.000.000 - 5.000.000 </a></li>
                        <li><a href="#">Trên 5.000.000</a></li>
                    </ul>
                </div>
            </div>
            <!--SIDE NAV ENDS-->
            <!--MAIN CONTENT STARTS-->
            <div id="main_content">
                <div class="category_banner"> <img src="<?=base_url()?>static/images/promo_cat_banner.jpg"/> </div>
                <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <?php if($TenLoai != "") {?>
                        <li><a href="<?=base_url()?>sanpham/loaisanpham/<?=$idLoai?>"><?=$TenLoai?></a></li>
                    <?php } ?>
                    <li class="active"><a href="#"><?=$TenNhaCungCap->TEN?></a></li>
                </ul>
                <!--Toolbar-->
                <div class="toolbar">
                    <div class="sortby">
                        <label>Sort by :</label>
                        <select>
                            <option>PRICE</option>
                            <option>NAME</option>
                        </select>
                    </div>
                    <div class="viewby">
                        <label>View as :</label>
                        <a class="list" href="#"></a> <a class="grid" href="#"></a> </div>
                    <div class="show_no">
                        <label>Show :</label>
                        <select>
                            <option>12 ITEMS</option>
                            <option>24 ITEMS</option>
                        </select>
                    </div>
                </div>
                <!--Toolbar-->
                <!--Product List Starts-->
                <div class="products_list products_slider">
                    <ul>
                        <?php
                    foreach ($result as $item) {
                        ?>
                    <li> <a class="product_image"><img src="<?= base_url()?>upload/images/<?=$item->HINH?>"/></a>
                        <div class="product_info">
                            <h3><a href="leisure_detail.html"><?=$item->TENSANPHAM?></a></h3>
                            <small><?=substr($item->MOTA, 0 ,100)?>...</small> </div>
                        <div class="price_info">
                            <button class="price_add" title="" type="button"><span class="pr_price"><?=number_format($item->DONGIA,"0",",",".")?></span><span class="pr_add"><?=lang('addcart')?></span></button>
                        </div>
                    </li>   
                        <?php                       
                            }
                        ?>                                
                    </ul>
                </div>
                <!--Product List Ends-->
                <!--Toolbar-->
                <div class="toolbar">
                    <div class="sortby">
                        <label>Sort by :</label>
                        <select>
                            <option>PRICE</option>
                            <option>NAME</option>
                        </select>
                    </div>
                    <div class="show_no">
                        <label>Show :</label>
                        <select>
                            <option>12 ITEMS</option>
                            <option>24 ITEMS</option>
                        </select>
                    </div>
                </div>
                <!--Toolbar-->
            </div>
            <!--MAIN CONTENT ENDS-->
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
    </div>