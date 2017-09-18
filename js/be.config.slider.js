if ($('#btnBrowseImageSlider').length) {
    var button1 = document.getElementById('btnBrowseImageSlider');

    button1.onclick = function () {
        selectFileWithCKFinder('path');
    }
}
;
if ($('#path').val() == '')
    $('#showSliderImage').hide();
else
    $('#showSliderImage').show();

function selectFileWithCKFinder(elementId) {
    CKFinder.popup({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                var output = document.getElementById(elementId);
                output.value = file.getUrl();
                $('#showSliderImage').show();
                $('#showSliderImage').fadeIn("fast").attr('src', file.getUrl());
            });

            finder.on('file:choose:resizedImage', function (evt) {
                var output = document.getElementById(elementId);
                output.value = evt.data.resizedUrl;
                $('#showSliderImage').show();
                $('#showSliderImage').fadeIn("fast").attr('src', file.getUrl());
            });
        }
    });
}
