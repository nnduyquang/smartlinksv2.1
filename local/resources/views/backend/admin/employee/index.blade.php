@extends('backend.admin.master')
@section('styles')
    {{ Html::style('css/be.emp.css') }}
@stop
@section('scripts')
    {{ Html::script('js/be.emp.js',array('async' => 'async') ) }}
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Nhân Viên</h2>
            </div>
            <div class="pull-right">
                @permission(('emp-create'))
                <a class="btn btn-success" href="{{ route('emp.create') }}"> Thêm Nhân Viên</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! Form::open(array('route' => 'emp.search','method'=>'POST','id'=>'formSearchEmp')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        {!! Form::text('txtSearchEmp',null, array('class' => 'form-control','id'=>'txtSearchEmp')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {!! Form::button('Tìm Kiếm', array('id' => 'btnSearchEmp','class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @if(!empty($keywords))
        <div id="showKeySearchEmp" class="col-md-12">
            <div class="row wrap-search">
                <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a
                        href="{{ route('emp.search') }}">X</a>
            </div>
        </div>
        {{ Form::hidden('hdKeywordEmp', $keywords) }}
    @endif
    <table class="table table-bordered">
        <tr>
            <th>TT</th>
            <th>Hình Đại Diện</th>
            <th>Tên Nhân Viên</th>
            <th>Số Điện Thoại</th>
            <th>Sắp Xếp</th>
            <th>Ngày Tạo</th>
            <th>Ngày Cập Nhật</th>
            <th>Tình Trạng</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($emps as $key => $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>  {{ Html::image($data->emp_image,'',array('id'=>'showEmpImage','class'=>'showHinhIndex'))}}</td>
                <td>{{ $data->emp_name }}</td>
                <td>{{ $data->emp_phone }}</td>
                <td>{{ $data->emp_order }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{$data->emp_is_work==1?'Đang Làm':'Nghỉ'}}</td>
                <td>
                    @permission(('news-edit'))
                    <a class="btn btn-primary" href="{{ route('emp.edit',$data->id) }}">Edit</a>
                    @endpermission
                    @permission(('news-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['emp.destroy', $data->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $emps->links() !!}
@stop