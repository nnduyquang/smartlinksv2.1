@extends('frontend.master')
@section('title')
    Chuyên Trang Tuyển Dụng Công Ty Smartlinks
@stop
@section('description')
    {{--Đại Lý Uy Tín Chuyên Về Quảng Cáo Facebook Với Chi Phí Thấp - Hiệu Quả Cao, Tiếp Cận Chính Xác Nguồn Khách Hàng, Đối Tác Của Nhiều Công Ty Lớn Tại HCM--}}
@stop
@section('container')
    <div id="tuyen-dung" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="wpContainHeader">
                                {{ Html::image($content->image,'',array('class'=>'dvBanner')) }}
                                <div class="wpTextHeader">
                                    <div class="textHeader">
                                        <h1> {{$content->title}}</h1>
                                        <div class="subTextHeading">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div id="td-info" class="col-md-12">
                            <div class="row">
                                <p>{!! $content->description !!}</p>
                            </div>
                        </div>
                        <div id="td-content" class="col-md-12">
                            <div class="row">
                                @foreach($tuyendungs as $key=>$data)
                                    <div class="one-item col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <a href="{{URL::to('tuyen-dung/'.$data->path)}}">
                                                        {{ Html::image($data->image,'',array('class'=>'dvBanner')) }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <a href="{{URL::to('tuyen-dung/'.$data->path)}}">
                                                        <p>{{$data->title}}</p>
                                                    </a>
                                                    {!! $data->description!!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{--<div id="gt-muctieu" class="col-md-12">--}}
                        {{--<div class="col-md-6">--}}
                        {{--<h3>Tầm Nhìn</h3>--}}
                        {{--<div class="gt-info">--}}
                        {{--<span>Trở thành công ty uy tín hàng đầu trong việc cung cấp dịch vụ trong lĩnh vực truyền thông trực tuyến mang lại hiệu quả cho doanh nghiệp. </span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                        {{--<h3>Sứ Mệnh</h3>--}}
                        {{--<div class="gt-info">--}}
                        {{--<span>Không ngừng sáng tạo và phấn đấu nâng cao chất lượng dịch vụ. Mang đến cho khách hàng sự hài lòng và tín nhiệm nhất. </span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop