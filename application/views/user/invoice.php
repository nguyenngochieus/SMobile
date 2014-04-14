<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hóa đơn thanh toán</title>
<!--Javascript-->

<!--Purchase this item from Themeforest-->
</head>
<body style="background-color:#e6e6e6; margin:0px; padding:0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#e6e6e6; font-family:Arial, Helvetica, sans-serif;">
  <!--HEADER CONTAINER STARTS-->
  <tr>
    <td align="center"><!--HEADER STARTS-->
      <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" height="27" colspan="2">&nbsp;</td>
        </tr>        
        <tr>
          <td height="7" colspan="2"></td>
        </tr>
      </table>
      <!--HEADER ENDS--></td>
  </tr>
  <!--HEADER CONTAINER ENDS-->
  <!--MID CONTAINER STARTS-->
  <tr>
    <td><table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="14" align="center" valign="bottom" colspan="3"><img valign="bottom" src="<?= base_url()?>static/images/top_sh.png" width="602" height="40" /></td>
        </tr>
        <tr>
          <td class="lsh" width="10" align="right" valign="top"></td>
          <td width="600" align="center" valign="top" style="background-color:#FFFFFF; border:solid 1px #d8d8d4; border-width:0px 1px 0px;"><!--CONTENT SECTION STARTS-->
            <table align="center" width="570" height="50" border="0" cellspacing="0" cellpadding="0">
              <tr>
                 <td valign="middle" align="left"><a href="#"><img src="<?= base_url()?>static/images/logo.png" alt="Logo Header" width="145" height="74" border="0" /></a></td>
                <!--Section Title-->
                <td width="177" align="center" valign="bottom"><h1 style="color:#F38256; font-size:40px; margin:0px; padding:0px; font-weight:normal; line-height:28px;">Hóa đơn</h1></td>
              </tr>
            </table>
            <!--Billing Info Starts-->
            <table style="background-color:#f3f3f3; border-top:solid 2px #F38256;" width="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="3" width="28">&nbsp;</td>
                <td colspan="2" height="20"></td>
                <td rowspan="3" width="28">&nbsp;</td>
              </tr>
              <tr>
                <td width="270" align="left" valign="bottom" style="border-right:solid 1px #cacaca;">
                <!--Billing From-->
                <table width="230" border="0" cellspacing="0" cellpadding="0" style="color:#5a5a5a; font-size:12px; line-height:18px;">
                    <tr>
                      <td colspan="2" align="left" valign="top" height="30"><strong style="font-weight:bold; color:#000;">SMobile Inc</strong></td>
                    </tr>
                    <tr>
                      <td width="76">Khách hàng</td>
                      <td width="154">:  &nbsp;<?=$result->TENNGUOIDUNG?></td>
                    </tr>
                    <tr>
                      <td>E-Mail </td>
                      <td>:   &nbsp;<?=$result->EMAIL?></td>
                    </tr>
                    <?php
                    if($result->SDT_TT!=''){ ?>
                    <tr>
                      <td>Điện thoại </td>
                      <td>:  &nbsp;<?=number_format($result->SDT_TT,"0"," "," ")?></td>
                    </tr>
                    <?php } ?>
                  </table></td>
                <td align="center" width="270" valign="bottom">
                <!--Billing To-->
                <table width="270" border="0" cellspacing="0" cellpadding="0" style="color:#5a5a5a; font-size:12px; line-height:18px;">
                    <tr>
                      <td colspan="2" align="left" valign="top" height="30"><strong style="font-weight:bold; color:#000;">Người nhận:</strong></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="left"><?=$result->TENNGUOINHAN?>,<br /><?=$result->DIACHI?>,<br /><?php if($result->SDT != '') echo number_format($result->SDT,"0"," "," ")?></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="2" height="20"></td>
              </tr>
            </table>
            <!--Billing Info Ends-->
            <table width="570" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                
                <table a="a" width="200" height="25" border="0" cellspacing="0" cellpadding="0" style="background-color:#dadada;">
                    <tr>
                      <td width="10"></td>
                      <!--Invoice No-->
                      <td width="200" align="center" valign="middle" style="font-weight:bold; color:#000; font-size:12px;">Hóa đơn no.<?=$result->ID?> (<?=date_format(date_create($result->NGAYDATHANG),'d/m/Y')?>)</td>
                      <td width="10">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
            </table>
            <table width="570" border="0" cellspacing="0" cellpadding="0" style="border:solid 1px #d1d1d1;">
              <tr>
                <td>
                <!--Invoice Table Starts-->
                <table width="570" border="0" cellspacing="0" cellpadding="10" style="border:solid 1px #fff;">
                    <tr>
                      <th width="220" height="30" align="left" valign="middle" style="background-color:#545454; color:#FFF; font-size:12px; font-weight:normal">Sản phẩm</th>
                      <th width="80" height="30" align="center" valign="middle" style="background-color:#545454; color:#FFF; font-size:12px; font-weight:normal">Loại</th>
                      <th width="50" height="30" align="center" valign="middle" style="background-color:#545454; color:#FFF; font-size:12px; font-weight:normal">Đơn giá</th>
                      <th width="80" height="30" align="center" valign="middle" style="background-color:#545454; color:#FFF; font-size:12px; font-weight:normal">Số lượng</th>
                      <th width="80" height="30" align="center" valign="middle" style="background-color:#545454; color:#FFF; font-size:12px; font-weight:normal">Thành tiền</th>
                    </tr>
                    <?php foreach ($giohang as $item) {   ?>
                    <tr>
                      <td align="left" style="color:#000; font-weight:normal; font-size:12px;"><?=$item->TENSANPHAM?></td>
                      <td align="center" style="color:#000; font-weight:normal; font-size:12px;"><?=$item->LOAISANPHAM?></td>
                      <td align="center" style="color:#000; font-weight:normal; font-size:12px;"><?=number_format($item->DONGIA,"0",",",".")?></td>
                      <td align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:30px;"><?=$item->SOLUONG?></td>
                      <td align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:20px;"><?=number_format($item->DONGIA* $item->SOLUONG,"0",",",".")?></td>
                    </tr>
                    <?php  } ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>                     
                      <td colspan="2" align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:30px;">Thành tiền:</td>
                      <td align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:20px;"><?=number_format($result->TONGTIENHANG,"0",",",".")?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2" align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:30px;">Phí vận chuyển:</td>
                      <td align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:20px;"><?=$result->PHUONGTHUCVANCHUYEN == 2?'50.000':'0.00'?></td>
                    </tr>
                    <tr style="background-color:#d0d7d8;">
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2" align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:30px; font-weight:bold;">Tổng cộng:</td>
                      <!--TOTAL-->
                      <td align="right" style="color:#000; font-weight:normal; font-size:12px; padding-right:20px; font-weight:bold;"><?=number_format($result->THANHTIEN,"0",",",".")?> VNĐ</td>
                    </tr>
                  </table>
                  <!--Invoice Table Ends-->
                  </td>
              </tr>
            </table>
            <table width="570" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
              	<!--Notice-->
                <td align="left" style="font-size:11px; line-height:14px; color:#545454;"><strong>Ghi chú:</strong><?=$result->GHICHU?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <!--CONTENT SECTION ENDS--></td>
          <td class="rsh" width="9" align="left" valign="bottom"></td>
        </tr>
        <tr>
          <td height="14" align="center" valign="top" colspan="3"><img src="images/bottom_sh.png" width="602" height="14" /></td>
        </tr>
      </table></td>
  </tr>
  <!--MID CONTAINER ENDS-->
  <!--FOOTER CONTAINER STARTS-->
  <tr>
    <td><!--FOOTER STARTS-->
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td height="15"></td>
        </tr>
        <tr>
          <td height="67" align="center" valign="middle" style="background-color:#d4d4d4; border-top:solid 1px #b3b3b3; border-bottom:solid 1px #b3b3b3;">
          <table width="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="10">&nbsp;</td>
                <td width="285">
                <!--Footer Logo - Copyright-->
                <table width="500" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left" valign="middle" style="font-size:12px; color:#232628; line-height:16px;"> 
                           <address>
            Copyright © 2014 SMobile. All Rights Reserved.<br/> Designed by <a target="_blank" href="https://www.facebook.com/KelvinLee93">Kelvin Lee</a> and <a target="_blank" href="https://www.facebook.com/nguyenngochieu93">Mr.Cupid</a>. SMobile on <a target="_blank" href="https://github.com/mrcupid12/SMobile">GitHub</a>
                          </address>
                        </td>
                    </tr>
                  </table></td>
                <td align="right" valign="middle">
               </td>
                <td width="10">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="10" style="background-color:#272727;"></td>
        </tr>
      </table>
      <!--FOOTER ENDS--></td>
  </tr>
  <!--FOOTER CONTAINER ENDS-->
</table>
</body>
</html>
