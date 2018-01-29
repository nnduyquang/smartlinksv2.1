@extends('frontend.master')
@section('title')
    Đại Lý Quảng Cáo Facebook Chuyên Nghiệp Hiệu Quả - Smartlinks.vn
@stop
@section('description')
    {{--Đại Lý Uy Tín Chuyên Về Quảng Cáo Facebook Với Chi Phí Thấp - Hiệu Quả Cao, Tiếp Cận Chính Xác Nguồn Khách Hàng, Đối Tác Của Nhiều Công Ty Lớn Tại HCM--}}
@stop
@section('container')
    <div id="gioi-thieu" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <div class="row">
                            <div class="wpContainHeader">
                                {{ Html::image($tuyendung->image,'',array('class'=>'dvBanner')) }}
                                <div class="wpTextHeader">
                                    <div class="textHeader">
                                        <h1> {{$tuyendung->title}}</h1>
                                        <div class="subTextHeading">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div id="gt-content" class="col-md-12">
                            <div class="col-md-12">
                                {!! $tuyendung->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop