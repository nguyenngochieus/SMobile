<div class="section_container">
        <!--Mid Section Starts-->
        <section>
<style type="text/css">
    .unordered a{
    text-decoration: none;
    color: black;
    font-size: 12pt;
    }

    #content label{
    font-size: 12pt;
    }

    #content a:hover{
    color: #adadad;
    }

    .news{
        font-size: 11pt;
    }

</style>
<div class="full_page">
        <h1>TIN TỨC</h1>
        <!--CHECKOUT STEPS STARTS-->
        <div class="news" style="width: 100%">
            <ol id="checkoutSteps">
                <li class="section allow active">
                    <div class="" style="background-color:#444444; text-align:center; color:white">
                        <h2 style="width:100%; padding: 20px 0"><label style="font-size: 17px !important;"><?=$result->TIEUDE?></label></h2>
                    </div> 
                    <div id="content" style="background-image:url(<?=base_url()?>static/images/bg1.png)" >
    <div>
    <h4 class="widgettitle" style="padding: 10px;">

    <label><?=$result->LOAITINTUC?></label>
    <div style="margin-right:10px; float:left;">
        <img src="<?=base_url()?>upload/files/<?=$result->HINH?>" Width="300px" />
    </div>
    <h1 style="line-height:30px; padding: 0px;"><label style="font-size: 18pt;
width: 65%;"><?=$result->TIEUDE?></label></h1>
    <h5>Được đăng bởi <label><?=$result->TENNGUOIDUNG?></label> | <span>
        <label><?=date_format(date_create($result->NGAYDANG),'d/m/Y')?></label></span></h5>
    <br />
    <p style="color:gray;" >
       <?=$result->MOTA?>
    </p>
    <div style="clear:both;"></div>
     <div style="width:100%; margin-top:20px; line-height: 20pt;">
        <?=$result->NOIDUNG?>
     </div>
    </div>
    
    <div style="float:left; width:100%;">
        <hr />
        <h2 style="font-size:20pt">Tin cùng chuyên mục</h2>
        <ul class="unordered" style="margin-left:10px !important;list-style-type:square;line-height:27px !important;">
            <?php foreach ($tinlienquan as $item) {  ?>
            <li>
                <a href="<?=base_url()?>tintuc.html?id=<?=$item->ID?>"><?=$item->TIEUDE?></a>
            </li>     
            <?php } ?>               
        </ul>

    </div>
                    </div>

                </li>
            </ol>
        </div>
        <!--CHECKOUT STEPS ENDS-->
            </section>
        <!--Mid Section Ends-->
    </div>