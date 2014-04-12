<div class="section_container">
        <!--Mid Section Starts-->
        <section>
        <div id="notification"></div> 
<div id="content" class="full_page">  <ul class="breadcrumb">
                        <li><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=common/home">Home</a></li>
                                <li class="active"><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/search&amp;filter_name=dress&amp;filter_category_id=67">Search</a></li>
                    </ul>
  <h1>Tìm kiếm - dress</h1>
  <b>Tìm kiếm theo thông số</b>
  <div class="content">
    <p>&nbsp;&nbsp;&nbsp;Tìm:            

        <input type="text" name="filter_name" value="" />
        <select name="filter_category_id">
            <option value="0">---- Loại sản phẩm ----</option>
            <?php 
                foreach ($Loai as $item_loai) {
                    echo '<option value="'.$item_loai->ID.'">'.$item_loai->TEN.'</option>';
                }        ?>
        </select>  

        Giá tiền từ: <input type="number" name="filter_price_from" value="" />  
        đến : <input type="number" name="filter_price_to" value="" />        
    </p>
    <br />
        <input type="checkbox" name="filter_description" value="1" id="description" />
        <label for="description">Tìm kiếm trong mô tả sản phẩm</label>
  </div>
  <div class="buttons">
    <div class="right"><input type="button" value="Tìm kiếm" id="button-search" class="button" /></div>
  </div>
  <h2>Các sản phẩm tìm được</h2>
                <!--Toolbar-->               
                <div class="toolbar">
                    <div class="sortby">
                        <label><?=lang('sort_by')?> :</label>
                        <select name="sort" onchange="change_sort('<?=$link?>')">
                            <option value=""><?=lang('default')?></option>
                            <option value="price" <?=(isset($_GET['sort']) && $_GET['sort']=='price')?"selected":''?>><?=lang('giatien')?></option>
                            <option value="price_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='price_desc')?"selected":''?>><?=lang('giatien_desc')?></option>
                            <option value="name" <?=(isset($_GET['sort']) && $_GET['sort']=='name')?"selected":''?>><?=lang('ten')?></option>
                            <option value="name_desc" <?=(isset($_GET['sort']) && $_GET['sort']=='name_desc')?"selected":''?>><?=lang('ten_desc')?></option>
                        </select>
                    </div>
                    <div class="show_no">
                        <label><?=lang('show')?> :</label>
                        <select name="item" onchange="change_item('<?=$link?>')">
                            <option value="12" <?=(isset($_GET['item']) && $_GET['item']=='12')?"selected":''?>>12 <?=lang('item')?></option>
                            <option value="24" <?=(isset($_GET['item']) && $_GET['item']=='24')?"selected":''?>>24 <?=lang('item')?></option>
                        </select>
                    </div>
                </div>
                <!--Toolbar-->
    <!--Product List Starts-->
    <div id="all-product" class="products_grid search">
    <ul>
        <li>
            <a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/product&amp;filter_name=dress&amp;filter_category_id=67&amp;product_id=28" class="product_image">
            <img src="http://themes.hsyn.org/leisure/fashion_shop/image/cache/data/products/new/7-1-224x224.jpg" alt="Butterfly Print Dress" /></a>               
            <div class="product_info">
                <h3><a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/product&amp;filter_name=dress&amp;filter_category_id=67&amp;product_id=28">Butterfly Print Dress</a></h3>
                <small>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab..
                </small> 
            </div>
            <div class="price_info">
                <button class="price_add" title="" type="button" onclick="addToCart('28');">
                    <span class="pr_price">$119.50</span>
                    <span class="pr_add">Add to Cart</span>
                </button>
            </div>
        </li>                        
    </ul>
    </div>
    <!--Product List Ends-->
  <div class="pagination"><div class="links"> <b>1</b>  <a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/search&amp;filter_name=dress&amp;filter_category_id=67&amp;page=2">2</a>  <a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/search&amp;filter_name=dress&amp;filter_category_id=67&amp;page=2">&gt;</a> <a href="http://themes.hsyn.org/leisure/fashion_shop/index.php?route=product/search&amp;filter_name=dress&amp;filter_category_id=67&amp;page=2">&gt;|</a> </div><div class="results">Showing 1 to 9 of 10 (2 Pages)</div></div>
    </div>
<script type="text/javascript"><!--
$('#content input[name=\'filter_name\']').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#button-search').trigger('click');
    }
});

var url = "http://localhost/SMobile/";
function change_sort(link)        
{
    window.location.href = url + 'sanpham/loaisanpham/'+ link+'.html?sort=' + jQuery('select[name=sort]').val();
}

function change_item(link)
{
    window.location.href = url + 'sanpham/loaisanpham/'+ link+'.html?item=' + jQuery('select[name=item]').val();
}


$('#button-search').bind('click', function() {
    url = 'http://localhost/SMobile/sanpham/timkiem.html?s=t';
    
    var filter_name = $('#content input[name=\'filter_name\']').attr('value');
    
    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_category_id = $('#content select[name=\'filter_category_id\']').attr('value');
    
    if (filter_category_id > 0) {
        url += '&filter_category_id=' + encodeURIComponent(filter_category_id);
    }
    
    var filter_sub_category = $('#content input[name=\'filter_sub_category\']:checked').attr('value');
    
    if (filter_sub_category) {
        url += '&filter_sub_category=true';
    }
        
    var filter_description = $('#content input[name=\'filter_description\']:checked').attr('value');
    
    if (filter_description) {
        url += '&filter_description=true';
    }

    location = url;
});

function display(view) {
    if (view == 'list') {
        $('#all-product').removeClass('products_grid');
        $('#all-product').addClass('products_list');
        
        $('#list').removeClass('list');
        $('#list').addClass('list-active');
        $('#grid').removeClass('grid-active');
        $('#grid').addClass('grid');
        
        $.cookie('display', 'list'); 
    } else {
        $('#all-product').removeClass('products_list');
        $('#all-product').addClass('products_grid');
        
        $('#list').removeClass('list-active');
        $('#list').addClass('list');
        $('#grid').removeClass('grid');
        $('#grid').addClass('grid-active');
        
        $.cookie('display', 'grid');
    }
}
    // LIST-GRID TOGGLE EFFECT
    $('.viewby #list').click(function(){
            $('#all-product').removeClass('products_grid');
            $('#all-product').addClass('products_list');
            $.cookie('display', 'list');
        });
    
    $('.viewby #grid').click(function(){
            $('#all-product').removeClass('products_list');
            $('#all-product').addClass('products_grid');
            $.cookie('display', 'grid');
        });     
            
            
view = $.cookie('display');

if (view) {
    display(view);
} else {
    display('grid');
}
//--></script> 
          
    </section>
        <!--Mid Section Ends-->
    </div>