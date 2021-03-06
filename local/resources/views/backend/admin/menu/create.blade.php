@extends('backend.admin.master')
@section('styles')

@stop
@section('scripts')

@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm Mới Menu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('menu.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--{!! Form::open(array('route' => 'menu.store','method'=>'POST')) !!}--}}
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Tên Nhân Viên:</strong>
                    {!! Form::text('emp_name', null, array('placeholder' => 'Tên Nhân Viên','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Chức Vụ:</strong>
                    {!! Form::text('emp_duty', null, array('placeholder' => 'Chức Vụ','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Số Điện Thoại:</strong>
                    {!! Form::text('emp_phone', null, array('placeholder' => 'Số Điện Thoại','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('emp_email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Skype:</strong>
                    {!! Form::text('emp_skype', null, array('placeholder' => 'Skype','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <strong>Thứ tự:</strong>
                    {!! Form::text('emp_order', null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Chú Thích:</strong>
                    {!! Form::textarea('emp_note',null, array('placeholder' => 'Chú Thích Về Nhân Viên','id'=>'emp-note','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Đang Làm Việc:</strong>
                    <input name="emp_is_work" data-on="Đang Làm Việc" data-off="Chưa Đi Làm" type="checkbox"  data-toggle="toggle">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="form-inline">
                        <span>Hình Đại Diện: </span>
                        {!! Form::text('emp_image', null, array('class' => 'form-control','id'=>'path')) !!}
                        {!! Form::button('Browses', array('id' => 'btnBrowseImageEmp','class'=>'btn btn-primary')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showEmpImage','class'=>'showHinh'))}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Thêm Mới Nhân Viên</button>
        </div>
    </div>
    {{--{!! Form::close() !!}--}}
@stop