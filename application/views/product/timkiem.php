<div class="section_container">
        <!--Mid Section Starts-->
        <section>
        <div id="notification"></div> 
<div id="content" class="full_page">  
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">Trang chủ</a></li>
        <li class="active"><a href="<?=$link?>">Tìm kiếm</a></li>
    </ul>
  <h1>Tìm kiếm<?=(isset($_GET['filter_name']) && $_GET['filter_name'] !='')?' - '.$_GET['filter_name']:''?></h1>
  <b>Tìm kiếm theo thông số</b>
  <div class="content">
    <p>&nbsp;&nbsp;&nbsp;Tìm:            

        <input type="text" name="filter_name" value="<?=(isset($_GET['filter_name']) && $_GET['filter_name'] !='')?$_GET['filter_name']:''?>" />
        <select name="filter_category_id">
            <option value="0" <?=(isset($_GET['filter_category_id']) && $_GET['filter_category_id'] == 0)?"selected":''?>>--- Loại sản phẩm ---</option>
            <?php 
                foreach ($Loai as $item_loai) {?>
            <option value="<?=$item_loai->ID?>" <?=(isset($_GET['filter_category_id']) && $_GET['filter_category_id'] == $item_loai->ID)?"selected":''?>><?=$item_loai->TEN?></option>
            <?php    }        ?>
        </select>  

        Giá tiền từ: <input type="number" name="filter_price_from" value="<?=(isset($_GET['filter_price_from']) && $_GET['filter_price_from'] !='')?$_GET['filter_price_from']:''?>"  />  
        đến : <input type="number" name="filter_price_to" value="<?=(isset($_GET['filter_price_to']) && $_GET['filter_price_to'] !='')?$_GET['filter_price_to']:''?>" />        
    </p>
    <br />
        <input type="checkbox" name="filter_description" value="" id="description" <?=(isset($_GET['filter_description']) && $_GET['filter_description']=='true')?" checked ":''?> />
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
    <div id="all-product" class="products_grid search">
    <ul>        
        <?php
        if(count($result) == 0)
            echo '<p stype="font-size:13pt;">Không tìm thấy sản phẩm theo yêu cầu</p>';
        else
        {
            foreach ($result as $item) {        
        ?>         
            <li>  
            <a href="<?=base_url()?>sanpham/chitiet/<?=$item->ID?>" class="product_image">
            <img src="<?=base_url()?>upload/images/<?=$item->HINH?>" alt="<?=$item->TENSANPHAM?>" /></a>               
            <div class="product_info">
                <h3><a href="<?=base_url()?>sanpham/chitiet/<?=$item->ID?>"><?=$item->TENSANPHAM?></a></h3>
                <small>
                <?=$this->public_model->cut($item->MOTA,100)?>
                </small> 
            </div>
            <div class="price_info">
                <button class="price_add" title="" type="button" onclick="addToCart('28');">
                    <span class="pr_price"><?=number_format($item->DONGIA,"0",",",".")?></span>
                    <span class="pr_add" onclick="Submit_Form(<?=$item->ID?>,1)"><?=lang('addcart')?></span>
                </button>
            </div>
        </li>   

        <?php                       
            }
        }
        ?>                       
    </ul>
    </div>
    <!--Product List Ends-->
    <?=$this->pagination->create_links()?>
    </div>
<script type="text/javascript"><!--
$('#content input[name=\'filter_name\']').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#button-search').trigger('click');
    }
});

var url = "";


$('#button-search').bind('click', function() {
    url = 'http://localhost/SMobile/sanpham/timkiem.html?s=t';
    
    var filter_name = $('#content input[name=\'filter_name\']').attr('value');
    
    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_price_from = $('#content input[name=\'filter_price_from\']').attr('value');
    
    if (filter_price_from) {
        url += '&filter_price_from=' + encodeURIComponent(filter_price_from);
    }

    var filter_price_to = $('#content input[name=\'filter_price_to\']').attr('value');
        
    if (filter_price_to) {
        url += '&filter_price_to=' + encodeURIComponent(filter_price_to);
    }

    var filter_category_id = $('#content select[name=\'filter_category_id\']').attr('value');
    
    if (filter_category_id > 0) {
        url += '&filter_category_id=' + encodeURIComponent(filter_category_id);
    }    
     
    var filter_description = $('#content input[name=\'filter_description\']:checked').attr('value');
    
    if (filter_description) {
        url += '&filter_description=true';
    }

    location = url;
});

function change_sort(link)        
{
    window.location.href = link +'&sort=' + jQuery('select[name=sort]').val();
}

function change_item(link)
{
    window.location.href = link +'&item=' + jQuery('select[name=item]').val();
}

//--></script> 
          
    </section>
        <!--Mid Section Ends-->
    </div>