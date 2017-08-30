if ($('#content-news').length) {
    CKEDITOR.replace('content-news', {
        height: 800,
        language: 'vi',
        format_tags: 'p;h1;h2;h3;pre',
        filebrowserBrowseUrl: '../../js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: '../../js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: '../../js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: '../../js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: '../../js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: '../../js/kcfinder/upload.php?type=flash'
    })
    ;
}
if ($('#btnBrowse').length) {
    var button1 = document.getElementById('btnBrowse');

    button1.onclick = function () {
        selectFileWithCKFinder('path');
    }
}
;
if ($('#path').val() == '')
    $('#showHinhDaiDien').hide();
else
    $('#showHinhDaiDien').show();

function selectFileWithCKFinder(elementId) {
    // CKFinder.popup({
    //     chooseFiles: true,
    //     width: 800,
    //     height: 600,
    //     onInit: function (finder) {
    //         finder.on('files:choose', function (evt) {
    //             var file = evt.data.files.first();
    //             var output = document.getElementById(elementId);
    //             output.value = file.getUrl();
    //             $('#showHinhDaiDien').show();
    //             $('#showHinhDaiDien').fadeIn("fast").attr('src', file.getUrl());
    //         });
    //
    //         finder.on('file:choose:resizedImage', function (evt) {
    //             var output = document.getElementById(elementId);
    //             output.value = evt.data.resizedUrl;
    //             $('#showHinhDaiDien').show();
    //             $('#showHinhDaiDien').fadeIn("fast").attr('src', file.getUrl());
    //         });
    //     }
    // });
    window.KCFinder = {
        callBack: function (url) {
            var output = document.getElementById(elementId);
            output.value = url;
            $('#showEmpImage').show();
            $('#showEmpImage').fadeIn("fast").attr('src', url);
            window.KCFinder = null;
        }
    };
    window.open(getBaseURL() + 'js/kcfinder/browse.php?type=images', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}

$('#btnSearchTinTuc').click(function () {
    if ($('#txtSearch').val().trim() == '')
        return;
    if ($('#txtSearch').val().trim().replace(/ +(?= )/g, '') == $("input[name='hdKeyword']").val())
        return;
    $('#formSearchNews').submit();
});
