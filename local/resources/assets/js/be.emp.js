integratedCKEDITOR('emp-note',800);if ($('#btnBrowseImageEmp').length) {    var button1 = document.getElementById('btnBrowseImageEmp');    button1.onclick = function () {        selectFileWithCKFinder('path');    }};if ($('#path').val() == '')    $('#showEmpImage').hide();else    $('#showEmpImage').show();function selectFileWithCKFinder(elementId) {    // CKFinder.popup({    //     chooseFiles: true,    //     width: 800,    //     height: 600,    //     onInit: function (finder) {    //         finder.on('files:choose', function (evt) {    //             var file = evt.data.files.first();    //             var output = document.getElementById(elementId);    //             output.value = file.getUrl();    //             $('#showEmpImage').show();    //             $('#showEmpImage').fadeIn("fast").attr('src', file.getUrl());    //         });    //    //         finder.on('file:choose:resizedImage', function (evt) {    //             var output = document.getElementById(elementId);    //             output.value = evt.data.resizedUrl;    //             $('#showEmpImage').show();    //             $('#showEmpImage').fadeIn("fast").attr('src', file.getUrl());    //         });    //     }    // });    window.KCFinder = {        callBack: function (url) {            var output = document.getElementById(elementId);            output.value = url;            $('#showEmpImage').show();            $('#showEmpImage').fadeIn("fast").attr('src', url);            // alert(url);            // field.value = url;            window.KCFinder = null;        }    };    window.open(getBaseURL()+'js/kcfinder/browse.php?type=images', 'kcfinder_textbox',        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +        'resizable=1, scrollbars=0, width=800, height=600'    );}$('#btnSearchEmp').click(function () {    if ($('#txtSearchEmp').val().trim() == '')        return;    if ($('#txtSearchEmp').val().trim().replace(/ +(?= )/g, '') == $("input[name='hdKeywordEmp']").val())        return;    $('#formSearchEmp').submit();});