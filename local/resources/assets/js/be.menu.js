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
                var options='';
                var list_keys=Object.keys(data.dd_menus);
                var list_values=Object.values(data.dd_menus);
                var list_data=Object.entries(data.dd_menus);
                // alert(list_keys);
                for(i=0;i<list_data.length;i++){
                    options+='<option value="'+list_data[i][0]+'">'+list_data[i][1]+'</option>';
                }
                // data.dd_menus.forEach(function(e){
                //     // options+='<option value="'+e.id+'">'+e.name+'</option>'
                //     options+='<option value="-1">Menu Gốc</option>'
                // });
                // var form1 = "{{ Form::open(array("method" => "GET", "id" => "_RemoveForm")) }} {{ Form::close() }}";
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
                    + '<span>Menu Cấp</span>'
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