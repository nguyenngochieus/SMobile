<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=lang('title')?></title>
<link href="<?=base_url()?>static/images/cart.png" rel="icon" />
<!--CSS-->
<link rel="stylesheet" href="<?=base_url()?>static/css/styles.css">
<link rel="stylesheet" href="<?=base_url()?>static/css/short_code.css">
<link type="text/css" rel="stylesheet" href="<?=base_url()?>static/css/jquery.stepy.css" />
<!--Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
<!--Javascript-->

<script type="text/javascript" src="<?= base_url()?>static/js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/admin/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.flexslider.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/simpletabs.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/form_elements.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.stepy.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/custom.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/core.js"></script>

<!--[if lt IE 9]>
    <script src="<?= base_url()?>static/js/html5.js"></script>
<![endif]-->
<!-- mobile setting -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="wrapper">
    <div class="header_container">
        <!--Header Starts-->
        <header>
            <div class="top_bar clear">
                <!--Language Switcher Starts-->
                <!--<div class="language_switch"> <a href="?lang=english" title="ENGLISH">EN</a> <a class="active" href="?lang=vietnamese" title="VIETNAMESE">VI</a> </div>-->
                <!--Language Switcher Ends-->
                <!--Top Links Starts-->
                <ul class="top_links">
                <?php if ($Quyen == 0)
                    { ?>
                        <li><a href="<?=base_url()?>dangnhap"><?=lang('dang_nhap')?></a></li>
                        <li><a href="<?=base_url()?>dangky"><?=lang('dang_ky')?></a></li>
                        <?php                                                
                    } 
                    else{ 
                        ?>
                        <li><a href="<?=base_url()?>user"><?=lang('tai_khoan')?></a></li>
                        <li><a href="<?=base_url()?>dangxuat"><?=lang('dang_xuat')?></a></li>
                        <?php
                    } ?>
                </ul>
                <!--Top Links Ends-->
            </div>
            <!--Logo Starts-->
            <h1 class="logo"> <a href="<?= base_url()?>"><img src="<?= base_url()?>static/images/logo.png" /></a> </h1>
            <!--Logo Ends-->
            <!--Search Starts-->
            <form class="header_search" action="<?=base_url()?>sanpham/timkiem">
                <div class="form-search">
                    <input id="search" type="search" name="filter_name" class="input-text" autocomplete="on" placeholder="<?=lang('search')?>...">
                    <button type="submit" title="Tìm kiếm"></button>
                </div>
            </form>
            <!--Search Ends-->

        </header>
        <!--Header Ends-->
    </div>
    <div class="navigation_container">
        <!--Navigation Starts-->
        <nav>
            <ul class="primary_nav">
                <li<?php if ($page=='trangchu') echo ' class="active"'; ?>><a href="<?=base_url()?>">Trang chủ</a></li>
                <li<?php if ($page=='loaisanpham1') echo ' class="active"'; ?>><a href="<?=base_url()?>sanpham/loaisanpham.html?url=1">Điện thoại</a>
                    <ul class="sub_menu">
                        <li> <a href="#">Nhà cung cấp</a>
                            <ul>
                                <?php foreach ($FMenu1 as $item) {
                                    echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                                } ?>                                 
                            </ul>
                        </li>
                    </ul>
                </li>
                <li<?php if ($page=='loaisanpham2') echo ' class="active"'; ?>><a href="<?=base_url()?>sanpham/loaisanpham.html?url=2">Máy tính xách tay</a>
                    <ul class="sub_menu">
                        <li> <a href="#">Nhà cung cấp</a>
                            <ul>
                                <?php foreach ($FMenu2 as $item) {
                                    echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                                } ?>  
                            </ul>
                        </li>
                    </ul>
                </li>
                <li<?php if ($page=='loaisanpham3') echo ' class="active"'; ?>><a href="<?=base_url()?>sanpham/loaisanpham.html?url=3">Máy tính bảng</a>
                    <ul class="sub_menu">
                        <li> <a href="#">Nhà cung cấp</a>
                            <ul>
                                <?php foreach ($FMenu3 as $item) {
                                    echo '<li><a href="'.base_url().'sanpham/nhacungcap.html?url='.$item->NHACUNGCAP.'-'.$item->LOAI.'">'.$item->TENNCC.'</a></li>';
                                } ?>                                 
                            </ul>
                        </li>
                    </ul>
                </li>
                <li<?php if ($page=='loaisanpham4') echo ' class="active"'; ?>><a href="<?=base_url()?>sanpham/loaisanpham.html?url=4">Phụ kiện</a></li>                    
            </ul>
            <div class="minicart" id="cart_content"> 
            <a href="#" class="minicart_link" >
                <span class="item"><b><?=$this->cart->total_items()?></b> <?=lang('item')?> /</span> <span class="price"><b><?=$this->cart->format_number($this->cart->total())?></b></span> </a>
                <div class="cart_drop"> <span class="darw"></span>
                 <?php echo $this->load->view('minicart'); ?>
                 </div>
            </div>
        </nav>
        <!--Navigation Ends-->
    </div>