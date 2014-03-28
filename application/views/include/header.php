<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=lang('title')?></title>
<!--CSS-->
<link rel="stylesheet" href="<?= base_url()?>static/css/styles.css">
<!--Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
<!--Javascript-->
<script type="text/javascript" src="<?= base_url()?>static/js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.flexslider.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?= base_url()?>static/js/form_elements.js" ></script>
<script type="text/javascript" src="<?= base_url()?>static/js/custom.js"></script>
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
                <div class="language_switch"> <a href="?lang=english" title="ENGLISH">EN</a> <a  class="active" href="?lang=vietnamese" title="VIETNAMESE">VI</a> </div>
                <!--Language Switcher Ends-->
                <!--Top Links Starts-->
                <ul class="top_links">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Login</a></li>
                    <li class="highlight"><a href="#">Sign Up</a></li>
                </ul>
                <!--Top Links Ends-->
            </div>
            <!--Logo Starts-->
            <h1 class="logo"> <a href="<?= base_url()?>"><img src="<?= base_url()?>static/images/logo.png" /></a> </h1>
            <!--Logo Ends-->
            <!--Search Starts-->
            <form class="header_search">
                <div class="form-search">
                    <input id="search" type="text" name="q" value="" class="input-text" autocomplete="off" placeholder="Search">
                    <button type="submit" title="Search"></button>
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
                <li class="active"><a href="<?=base_url()?>">Home</a></li>
                <?php foreach ($menu as $item) {
                    echo '<li><a href="'.base_url().'sanpham/loaisanpham/'.$item->ID.'">'.$item->TEN.'</a></li>';
                } ?>
            </ul>
            <div class="minicart"> <a href="#" class="minicart_link" > <span class="item"><b>2</b> ITEM /</span> <span class="price"><b>$69.20</b></span> </a>
                <div class="cart_drop"> <span class="darw"></span>
                    <ul>
                        <li><img src="<?= base_url()?>static/images/mini_c_item1.png"><a href="#">Clogs Beach/Garden Clog</a> <span class="price">$49.90</span></li>
                        <li><img src="<?= base_url()?>static/images/mini_c_item2.png"><a href="#">Faded chambray shorts</a> <span class="price">$12.90</span></li>
                        <div class="cart_bottom">
                            <div class="subtotal_menu"><small>Subtotal:</small><big>$69.20</big></div>
                            <a href="leisure_cart.html">Checkout</a></div>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navigation Ends-->
    </div>