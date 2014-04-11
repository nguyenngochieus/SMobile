
<input type="radio" name="shipping_address" value="existing" id="shipping-address-existing" checked="checked" />
<label for="shipping-address-existing">Tôi muốn giao hàng đến địa chỉ đã đăng ký</label>
<div id="shipping-existing">
    <select name="address_id" id="address_id" style="width: 100%; margin-bottom: 15px;" size="5">
            <option value="104" selected="selected">
           <?=$address['name'].', '.$address['SDT'].', '.$address['diachi']?>         
            </option>
    </select>
</div>
<p>
  <input type="radio" name="shipping_address" value="new" id="shipping-address-new" />
  <label for="shipping-address-new">Tôi muốn giao hàng đến địa chỉ mới</label>
</p>
<div id="shipping-new" style="display: none;">
<form>
  <table class="form">
   <tr>
      <td><span class="required">*</span> Tên người nhận</td>
      <td><input type="text" id="name" value="" class="large-field" /></td>
    </tr>
      <tr>
      <td><span class="required">*</span> SĐT</td>
      <td><input type="number" id="SDT" value="" class="large-field" /></td>
    </tr>
    <tr>
      <td><span class="required">*</span> Địa chỉ</td>
      <td><input type="text" name="address_1" id="address" value="" class="large-field" /></td>
    </tr>
    <tr>
    <td><span class="required">*</span> Tỉnh - Thành:</td>
      <td>
      <select name="country_id" id="country" class="large-field">
            <option value="">Chọn tỉnh/thành </option>
            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
            <option value="Tp.Hà Nội">Tp.Hà Nội</option>            
            <option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
            <option value="Tp.Hải Phòng">Tp.Hải Phòng</option>            
            <option value="An Giang">An Giang</option>
            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
            <option value="Bắc Giang">Bắc Giang</option>
            <option value="Bắc Kạn">Bắc Kạn</option>
            <option value="Bạc Liêu">Bạc Liêu</option>
            <option value="Bắc Ninh">Bắc Ninh</option>
            <option value="Bến Tre">Bến Tre</option>
            <option value="Bình Định">Bình Định</option>
            <option value="Bình Dương">Bình Dương</option>
            <option value="Bình Phước">Bình Phước</option>
            <option value="Bình Thuận">Bình Thuận</option>
            <option value="Bình Thuận">Bình Thuận</option>
            <option value="Cà Mau">Cà Mau</option>
            <option value="Cao Bằng">Cao Bằng</option>
            <option value="Đắk Lắk">Đắk Lắk</option>
            <option value="Đắk Nông">Đắk Nông</option>
            <option value="Điện Biên">Điện Biên</option>
            <option value="Đồng Nai">Đồng Nai</option>
            <option value="Đồng Tháp">Đồng Tháp</option>
            <option value="Đồng Tháp">Đồng Tháp</option>
            <option value="Gia Lai">Gia Lai</option>
            <option value="Hà Giang">Hà Giang</option>
            <option value="Hà Nam">Hà Nam</option>
            <option value="Hà Tĩnh">Hà Tĩnh</option>
            <option value="Hải Dương">Hải Dương</option>
            <option value="Hậu Giang">Hậu Giang</option>
            <option value="Hòa Bình">Hòa Bình</option>
            <option value="Hưng Yên">Hưng Yên</option>
            <option value="Khánh Hòa">Khánh Hòa</option>
            <option value="Kiên Giang">Kiên Giang</option>
            <option value="Kon Tum">Kon Tum</option>
            <option value="Lai Châu">Lai Châu</option>
            <option value="Lâm Đồng">Lâm Đồng</option>
            <option value="Lạng Sơn">Lạng Sơn</option>
            <option value="Lào Cai">Lào Cai</option>
            <option value="Long An">Long An</option>
            <option value="Nam Định">Nam Định</option>
            <option value="Nghệ An">Nghệ An</option>
            <option value="Ninh Bình">Ninh Bình</option>
            <option value="Ninh Thuận">Ninh Thuận</option>
            <option value="Phú Thọ">Phú Thọ</option>
            <option value="Quảng Bình">Quảng Bình</option>
            <option value="Quảng Bình">Quảng Bình</option>
            <option value="Quảng Ngãi">Quảng Ngãi</option>
            <option value="Quảng Ninh">Quảng Ninh</option>
            <option value="Quảng Trị">Quảng Trị</option>
            <option value="Sóc Trăng">Sóc Trăng</option>
            <option value="Sơn La">Sơn La</option>
            <option value="Tây Ninh">Tây Ninh</option>
            <option value="Thái Bình">Thái Bình</option>
            <option value="Thái Nguyên">Thái Nguyên</option>
            <option value="Thanh Hóa">Thanh Hóa</option>
            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
            <option value="Tiền Giang">Tiền Giang</option>
            <option value="Trà Vinh">Trà Vinh</option>
            <option value="Tuyên Quang">Tuyên Quang</option>
            <option value="Vĩnh Long">Vĩnh Long</option>
            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
            <option value="Yên Bái">Yên Bái</option>
            <option value="Phú Yên">Phú Yên</option>            
        </select>
          </td>
    </tr>
  </table>
  </form>
</div>
<br />
<div class="buttons">
  <div class="right">
    <input type="button" value="Tiếp tục" id="button-shipping-address" class="button" />
  </div>
</div>
<script type="text/javascript"><!--
$('#shipping-address input[name=\'shipping_address\']').live('change', function() {
    if (this.value == 'new') {
        $('#shipping-existing').slideUp('slow');
        $('#shipping-new').slideDown('slow');
    } else {
        $('#shipping-existing').slideDown('slow');
        $('#shipping-new').slideUp('slow');
    }
});
//--></script> 
