$('.edit-menu').click(function () {
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
                var form = '<div id="menu-create" class="col-md-12">'
                    + '<div class="row">'
                    + '<div class="menu-box-top">'
                    + '<h4>Cập Nhật Menu</h4>'
                    + '</div>'
                    + '<div class="menu-box-bottom">'
                    + '<form method="PATCH" action="' + getBaseURL() + 'sml_admin/menu/' + data.menu.id + '" accept-charset="UTF-8">'
                    + '<input name="_token" type="hidden" value="' + token + '">'
                    + '<input placeholder="Tên Menu" value="' + data.menu.name + '" class="form-control" name="name" type="text">'
                    + '<input placeholder="STT" value="' + data.menu.order + '" class="form-control" name="order" type="text">'
                    + '<span>Menu Cấp Cha</span>'
                    + '<select class="form-control" name="level">'
                    + options
                    + '</select>'
                    // {!! Form::select('level', $dd_menus, null,array('class' => 'form-control')) !!}
                    + '</div>'
                    + '<div class="menu-confirm">'
                    + '<input class="menu-confirm-ok btn" type="submit" value="CẬP NHẬT">'
                    + '</div>'
                    + '</form>'
                    + '</div>'
                    + '</div>';
                // alert(data.menu.name);
                $('#menu-update').html(form);
            } else {
            }
        },
        error: function (data) {
            alert('zo error');
        }
    });
});