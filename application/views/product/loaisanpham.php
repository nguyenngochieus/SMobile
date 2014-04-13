    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
        
            <!--SIDE NAV STARTS-->
            <div id="side_nav">
                <div class="sideNavCategories">
                    <h1><?=$TenLoai->TEN?><h3 style="font-size:15pt; float:right"><?=$TenNhaCungCap?></h3></h1>
                    <div class="clear"></div>
                    <ul class="category departments">
                        <li class="header"><?=lang('nhacungcap') ?></li>
                       <?php foreach ($NhaCungCap as $item_ncc) {
                          ?>
                            <li><a href="<?=base_url()?>sanpham/nhacungcap.html?url=<?=$item_ncc->ID?>-<?=$idLoai?>"><?=$item_ncc->TENNCC?></a></li>
                          <?php
                       } ?>                       
                    </ul>
                    <ul class="category price">
                        <li class="header"><?=lang('menu_gia') ?></li>
                        <li><a href="#">$50 to $100</a></li>
                        <li><a href="#">$100 to $200</a></li>
                        <li><a href="#">$200 to $500</a></li>
                    </ul>
                </div>
            </div>
            <!--SIDE NAV ENDS-->
            <!--MAIN CONTENT STARTS-->
            <div id="main_content">
                <div class="category_banner"> <img src="<?=base_url()?>static/images/promo_cat_banner.jpg"/> </div>                
                <ul class="breadcrumb">
                    <li><a href="<?= base_url()?>">Trang chủ</a></li>
                    <li class="active"><a href="<?=base_url()?>sanpham/loaisanpham.html?url=<?=$idLoai?>"><?=$TenLoai->TEN?></a></li>                
                </ul>
                <!--Toolbar-->               
                <div class="toolbar">
                    <div class="sortby">
                        <label><?=lang('sort_by')?> :</label>
                        <select name="sort" onchange="change_sort('<?=$link_sort?>')">
                            <option value=""><?=lang('default')?></option>
                            <option value="price" <?=(isset($_GET['sort']) && $_GET['sort']=='price')?"selected":''?>><?=lang('giatien')?></option>
                            <option value="price_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='price_desc')?"selected":''?>><?=lang('giatien_desc')?></option>
                            <option value="name" <?=(isset($_GET['sort']) && $_GET['sort']=='name')?"selected":''?>><?=lang('ten')?></option>
                            <option value="name_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='name_desc')?"selected":''?>><?=lang('ten_desc')?></option>
                        </select>
                    </div>
                    <div class="show_no">
                        <label><?=lang('show')?> :</label>
                        <select name="item" onchange="change_item('<?=$link_item?>')">
                            <option value="12" <?=(isset($_GET['item']) && $_GET['item']=='12')?"selected":''?>>12 <?=lang('item')?></option>
                            <option value="24" <?=(isset($_GET['item']) && $_GET['item']=='24')?"selected":''?>>24 <?=lang('item')?></option>
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
                            <h3><a href="<?= base_url()?>sanpham/chitiet/<?=$item->ID?>"><?=$item->TENSANPHAM?></a></h3>
                            <small><?=$this->public_model->cut($item->MOTA,100)?></small> </div>
                        <div class="price_info">
                            <button class="price_add" title="" type="button"><span class="pr_price"><?=number_format($item->DONGIA,"0",",",".")?></span><span class="pr_add" onclick="Submit_Form(<?=$item->ID?>,1)"><?=lang('addcart')?></span></button>
                        </div>
                    </li>   
                        <?php                       
                            }
                        ?>                                
                    </ul>
                </div>
                        <?=$this->pagination->create_links()?>                               
                <!--Product List Ends-->
                <div class="toolbar">
                    <div class="sortby">
                        <label><?=lang('sort_by')?> :</label>
                        <select name="sort" onchange="change_sort('<?=$link_sort?>')">
                            <option value=""><?=lang('default')?></option>
                            <option value="price" <?=(isset($_GET['sort']) && $_GET['sort']=='price')?"selected":''?>><?=lang('giatien')?></option>
                            <option value="price_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='price_desc')?"selected":''?>><?=lang('giatien_desc')?></option>
                            <option value="name" <?=(isset($_GET['sort']) && $_GET['sort']=='name')?"selected":''?>><?=lang('ten')?></option>
                            <option value="name_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='name_desc')?"selected":''?>><?=lang('ten_desc')?></option>
                        </select>
                    </div>
                    <div class="show_no">
                        <label><?=lang('show')?> :</label>
                        <select name="item" onchange="change_item('<?=$link_item?>')">
                            <option value="12" <?=(isset($_GET['item']) && $_GET['item']=='12')?"selected":''?>>12 <?=lang('item')?></option>
                            <option value="24" <?=(isset($_GET['item']) && $_GET['item']=='24')?"selected":''?>>24 <?=lang('item')?></option>
                        </select>
                    </div>
                </div>
            </div>
            <!--MAIN CONTENT ENDS-->            
        </section>
        <!--Mid Section Ends-->
    </div>
     <script type="text/javascript">
        function change_sort(link)        
        {
            window.location.href = link+'&sort=' + jQuery('select[name=sort]').val();
        }

        function change_item(link)
        {
            window.location.href = link+'&item=' + jQuery('select[name=item]').val();
        }
    </script>