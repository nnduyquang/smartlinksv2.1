var token = $('meta[name="csrf-token"]').attr('content');
$('.edit-menu').click(function () {
    $('#menu-update').css('display','block');

    var id = $(this).attr('data-id');
    $.ajax({
        type: "GET",
        url: getBaseURL() + "sml_admin/menu/" + id + "/edit",
        dataType: 'json',
        data: {
            '_token': token,
        },
        success: function (data) {
            if (data.success) {
                var options = '';
                var list_dd = data.dd_menus;
                for (i = 0; i < list_dd.length; i++) {
                    if (list_dd[i]['index'] == data.menu.parent_id)
                        options += '<option value="' + list_dd[i]['index'] + '" selected>' + list_dd[i]['value'] + '</option>';
                    else
                        options += '<option value="' + list_dd[i]['index'] + '">' + list_dd[i]['value'] + '</option>';
                }
                var form = '<div class="row">'
                    + '<div class="menu-box-top">'
                    + '<h4>Cập Nhật Menu</h4>'
                    + '</div>'
                    + '<div class="menu-box-bottom">'
                    + '<form id="menu-update-form" data-id='+data.menu.id+' method="POST" action="' + getBaseURL() + 'sml_admin/menu/' + data.menu.id + '" accept-charset="UTF-8">'
                    + '<input name="_method" type="hidden" value="PATCH">'
                    + '<input name="_token" type="hidden" value="' + token + '">'
                    + '<input placeholder="Tên Menu" value="' + data.menu.name + '" class="form-control" name="name" type="text">'
                    + '<input placeholder="STT" value="' + data.menu.order + '" class="form-control" name="order" type="text">'
                    + '<span>Menu Cấp Cha</span><span class="show-error">Lựa Chọn Không Hợp Lệ</span>'
                    + '<select class="form-control" name="parent">'
                    + options
                    + '</select>'
                    + '<div class="menu-confirm">'
                    + '<input class="menu-confirm-ok btn confirm-update" type="button" value="CẬP NHẬT">'
                    + '</div>'
                    + '</form>'
                    + '</div>'
                    + '</div>';
                // alert(data.menu.name);
                $('#menu-update').html(form);
                $('.confirm-update').click(function(){
                    $('.show-error').css('display','none');
                    $('.show-error').removeClass('blink_me');
                    var $form=$('#menu-update-form');
                    var id = $form.attr('data-id');
                    var parent_id=$('#menu-update-form select[name="parent"]').val();
                    if(parent_id==id){
                        $('.show-error').css('display','block');
                        $('.show-error').addClass('blink_me')
                    }else{
                        $form.submit();
                    }
                });
            } else {
            }
        },
        error: function (data) {
            alert('zo error');
        }
    });
});

if ($('#btnBrowseImageSlider').length) {
integratedCKEDITOR('emp-note',800);
integratedCKEDITOR('description-page',height=200);
integratedCKEDITOR('content-page',height=800);
integratedCKEDITOR('seo-description-page',height=200);
if ($('#btnBrowseImagePage').length) {
    var button1 = document.getElementById('btnBrowseImagePage');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImagePage','showHinhPage');
    }
}
if ($('#email-sender-content').length) {
    CKEDITOR.replace('email-sender-content', {
        height: 200,
        language: 'vi',
        format_tags: 'p;h1;h2;h3;pre',
        filebrowserImageBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=images',
        filebrowserFlashBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=flash',
        filebrowserImageUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
}
if ($('#email-signatures').length) {
    CKEDITOR.replace('email-signatures', {
        height: 200,
        language: 'vi',
        format_tags: 'p;h1;h2;h3;pre',
        filebrowserImageBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=images',
        filebrowserFlashBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=flash',
        filebrowserImageUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
}

$('.alert-success').fadeIn(500);
setTimeout("$('.alert-success').fadeOut(1500);", 3000);

integratedCKEDITOR('description-post',height=200);
integratedCKEDITOR('content-post',height=800);
integratedCKEDITOR('seo-description-post',height=200);
if ($('#btnBrowseImagePost').length) {
    var button1 = document.getElementById('btnBrowseImagePost');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImagePost','showHinhPost');
    }
};
integratedCKEDITOR('description-tuyen-dung',height=200);
integratedCKEDITOR('content-tuyen-dung',height=800);
integratedCKEDITOR('seo-description-tuyen-dung',height=200);
if ($('#btnBrowseImageTuyenDung').length) {
    var button1 = document.getElementById('btnBrowseImageTuyenDung');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageTuyenDung','showHinhTuyenDung');
    }
}