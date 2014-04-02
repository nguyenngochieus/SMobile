</section>

<script src="<?=base_url()?>static/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>static/admin/js/modernizr.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>static/admin/js/toggles.min.js"></script>
<script src="<?=base_url()?>static/admin/js/retina.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.cookies.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.alerts.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-fileupload.min.js"></script>
<script src="<?=base_url()?>static/admin/js/ckfinder/ckfinder_v1.js"></script>
<script src="<?=base_url()?>static/admin/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-wysihtml5.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.datatables.min.js"></script>
<script src="<?=base_url()?>static/admin/js/chosen.jquery.min.js"></script>
<script src="<?=base_url()?>static/admin/js/custom.js"></script>
<script src="<?=base_url()?>static/admin/js/admin.custom.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.autogrow-textarea.js"></script>
<script src="<?=base_url()?>static/admin/js/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url()?>static/admin/js/jquery.maskedinput.min.js"></script>
<script src="<?=base_url()?>static/admin/js/chosen.jquery.min.js"></script>
<script src="<?=base_url()?>static/admin/js/ckeditor/ckeditor.js"></script>
<script>    
  jQuery(document).ready(function() {    

    var spinner = jQuery('#Luotxem').spinner();
    var spinner = jQuery('#Luotmua').spinner();
    var spinner = jQuery('#Luotdanhgia').spinner();
    var spinner = jQuery('#Tongdiem').spinner();

    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Delete row in a table
    //jQuery('.delete-row').click(function(){
     
        
      //  return false;
    //});
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });           

    jQuery.validator.addMethod(
        "ktngaysinh",
        function(value, element) {
            var check = false;
            var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
            if( re.test(value)){
                var adata = value.split('/');
                var mm = parseInt(adata[0],10);
                var dd = parseInt(adata[1],10);
                var yyyy = parseInt(adata[2],10);
                var xdata = new Date(yyyy,mm-1,dd);
                if ( ( xdata.getFullYear() == yyyy ) && ( xdata.getMonth () == mm - 1 ) && ( xdata.getDate() == dd ) )
                    check = true;
                else
                    check = false;
            } else
                check = false;
            return this.optional(element) || check;
        },
        "Vui lòng chọn ngày sinh hợp lệ theo định dạng mm/dd/yyyy"
    );

    jQuery.validator.addMethod(
        "kttendangnhap",
        function(value, element) {
            var check = false;
            var re = /^([a-zA-Z0-9]+)$/;
            if( re.test(value))                 
                    check = true;
            else
                    check = false;            
            return this.optional(element) || check;
        },
        "Vui lòng chỉ nhập chữ cái và chữ số"
    );

        jQuery.validator.addMethod(
        "ktmatkhau",
        function(value, element) {
            var check = false;
            var re = /^[0-9A-Za-z!@#$%]+$/;
            if( re.test(value))                 
                    check = true;
            else
                    check = false;            
            return this.optional(element) || check;
        },
        "Mật khẩu không hợp lệ"
    );

    $('#basicForm').validate({        
        rules: { 

            // Người dùng

            hoten: {
                required: true,
                rangelength: [6, 20]

            },
            tendangnhap: {
                required: true,
                rangelength: [6, 20],
                kttendangnhap: true
            },
            matkhau: {
                required: true,
                rangelength: [6, 20],
                ktmatkhau: true

            },
            email: {
                required: true,
                email: true

            },
            namsinh: {
                required: true,
                date: true,
                ktngaysinh: true               
            },
            CMND: {
                required: true,
                number: true,
                rangelength: [9, 9]

            },
            SDT: {
                required: true,
                rangelength: [10, 11]
            }, 

            // Đánh giá

            Luotxem: {
                required: true,
                number: true
            },
            Luotmua: {
                required: true,
                number: true
            },
            Luotdanhgia: {
                required: true,
                number: true
            },
            Tongdiem: {
                required: true,
                number: true
            },    

            // Tin tức

            Tieude: "required",
            
            // Sản phẩm 

            tensanpham: "required",
            loai: "required",
            nhacungcap: "required",
            soluong: {
                required: true,
                number: true,
                maxlength: 9
            },
            dongia: {
                required: true,
                number: true,
                maxlength: 18
            },
        }, 
        messages: { 

            // Người dùng

            hoten: {
                required: "Chưa nhập họ tên",
                rangelength: "Vui lòng nhập từ 6 đến 20 ký tự"
            },
            tendangnhap: {
                required: "Chưa nhập tên đăng nhập",
                rangelength: "Vui lòng nhập từ 6 đến 20 ký tự"
            },
            matkhau: {
                required: "Chưa nhập mật khẩu",
                rangelength: "Vui lòng nhập từ 6 đến 20 ký tự"
            },
            email: {
                required: "Chưa nhập email",
                email: "Vui lòng nhập một địa chỉ email hợp lệ"
            },
            namsinh: {
                required: "Chưa chọn ngày sinh", 
                date: "Vui lòng chọn một ngày sinh hợp lệ"            
            },
            CMND: {
                required: "Chưa nhập số CMND",
                number: "Vui lòng chỉ nhập chữ số. Ví dụ: 123456789",
                rangelength: "Vui lòng chỉ nhập 9 chữ số. Ví dụ: 123456789"
            },
            SDT: {
                required: "Chưa nhập số điện thoại",
                rangelength: "Vui lòng nhập 10 hoặc 11 chữ số"
            },

            // Đánh giá

            Luotxem: {
                required: "Chưa nhập lượt xem",
                number: "Vui lòng chỉ nhập số"
            },
            Luotmua: {
                required: "Chưa nhập lượt xem",
                number: "Vui lòng chỉ nhập số"
            },
            Luotdanhgia: {
                required: "Chưa nhập lượt xem",
                number: "Vui lòng chỉ nhập số"
            },
            Tongdiem: {
                required: "Chưa nhập lượt xem",
                number: "Vui lòng chỉ nhập số"
            },

            // Tin tức

            Tieude: "Chưa nhập tiêu đề",
            
            // Sản phẩm

            tensanpham: "Chưa nhập tên sản phẩm",
            loai: "Chưa chọn loại sản phẩm",
            nhacungcap: "Chưa chọn nhà cung cấp",
            soluong: {
                required: "Chưa nhập số lượng",
                number: "Vui lòng chỉ nhập số",
                maxlength: "Số lượng quá lớn"
            },
            dongia: {
                required: "Chưa nhập đơn giá",
                number: "Vui lòng chỉ nhập số",
                maxlength: "Đơn giá quá lớn"
            },                   
        }, 
       
        highlight: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-error');
        }    
    }); 


}); 
   
</script>
<script>
    //---------------Edit code htmlv4--------

    CKEDITOR.replace( 'Noidung', {
                    /*
                     * Ensure that htmlwriter plugin, which is required for this sample, is loaded.
                     */
                    extraPlugins: 'htmlwriter',

                    /*
                     * Style sheet for the contents
                     */
                    contentsCss: 'body {color:#000; background-color#:FFF;}',

                    /*
                     * Simple HTML5 doctype
                     */
                    docType: '<!DOCTYPE HTML>',

                    /*
                     * Allowed content rules which beside limiting allowed HTML
                     * will also take care of transforming styles to attributes
                     * (currently only for img - see transformation rules defined below).
                     *
                     * Read more: http://docs.ckeditor.com/#!/guide/dev_advanced_content_filter
                     */
                    allowedContent:
                        'h1 h2 h3 p pre[align]; ' +
                        'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
                        'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',

                    /*
                     * Core styles.
                     */
                    coreStyles_bold: { element: 'b' },
                    coreStyles_italic: { element: 'i' },
                    coreStyles_underline: { element: 'u' },
                    coreStyles_strike: { element: 'strike' },

                    /*
                     * Font face.
                     */

                    // Define the way font elements will be applied to the document.
                    // The "font" element will be used.
                    font_style: {
                        element: 'font',
                        attributes: { 'face': '#(family)' }
                    },

                    /*
                     * Font sizes.
                     */
                    fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
                    fontSize_style: {
                        element: 'font',
                        attributes: { 'size': '#(size)' }
                    },

                    /*
                     * Font colors.
                     */

                    colorButton_foreStyle: {
                        element: 'font',
                        attributes: { 'color': '#(color)' }
                    },

                    colorButton_backStyle: {
                        element: 'font',
                        styles: { 'background-color': '#(color)' }
                    },

                    /*
                     * Styles combo.
                     */
                    stylesSet: [
                        { name: 'Computer Code', element: 'code' },
                        { name: 'Keyboard Phrase', element: 'kbd' },
                        { name: 'Sample Text', element: 'samp' },
                        { name: 'Variable', element: 'var' },
                        { name: 'Deleted Text', element: 'del' },
                        { name: 'Inserted Text', element: 'ins' },
                        { name: 'Cited Work', element: 'cite' },
                        { name: 'Inline Quotation', element: 'q' }
                    ],

                    on: {
                        pluginsLoaded: configureTransformations,
                        loaded: configureHtmlWriter
                    }
                });

                /*
                 * Add missing content transformations.
                 */
                function configureTransformations( evt ) {
                    var editor = evt.editor;

                    editor.dataProcessor.htmlFilter.addRules( {
                        attributes: {
                            style: function( value, element ) {
                                // Return #RGB for background and border colors
                                return CKEDITOR.tools.convertRgbToHex( value );
                            }
                        }
                    } );

                    // Default automatic content transformations do not yet take care of
                    // align attributes on blocks, so we need to add our own transformation rules.
                    function alignToAttribute( element ) {
                        if ( element.styles[ 'text-align' ] ) {
                            element.attributes.align = element.styles[ 'text-align' ];
                            delete element.styles[ 'text-align' ];
                        }
                    }
                    editor.filter.addTransformations( [
                        [ { element: 'p',   right: alignToAttribute } ],
                        [ { element: 'h1',  right: alignToAttribute } ],
                        [ { element: 'h2',  right: alignToAttribute } ],
                        [ { element: 'h3',  right: alignToAttribute } ],
                        [ { element: 'pre', right: alignToAttribute } ]
                    ] );
                }

                /*
                 * Adjust the behavior of htmlWriter to make it output HTML like FCKeditor.
                 */
                function configureHtmlWriter( evt ) {
                    var editor = evt.editor,
                        dataProcessor = editor.dataProcessor;

                    // Out self closing tags the HTML4 way, like <br>.
                    dataProcessor.writer.selfClosingEnd = '>';

                    // Make output formatting behave similar to FCKeditor.
                    var dtd = CKEDITOR.dtd;
                    for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
                        dataProcessor.writer.setRules( e, {
                            indent: true,
                            breakBeforeOpen: true,
                            breakAfterOpen: false,
                            breakBeforeClose: !dtd[ e ][ '#' ],
                            breakAfterClose: true
                        });
                    }
                }
</script>
</body>

</html>
