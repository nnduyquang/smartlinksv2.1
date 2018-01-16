@extends('frontend.master')
@section('title')
   Công Ty Quảng Cáo Google Adwords Smartlinks - Smartlinks.vn
@stop
@section('slider')
    {{--@include('slider.slider')--}}
@stop
@section('container')
    <div id="gioi-thieu" class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="wpContainHeader">
                        {{ Html::image($content->image,'',array('class'=>'dvBanner')) }}
                        <div class="wpTextHeader">
                            <div class="textHeader">
                                <h1> Giới Thiệu</h1>
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
                        {!! $content->content !!}
                    </div>
                </div>

                <div id="gt-muctieu" class="col-md-12">
                    <div class="col-md-6">
                        <h3>Tầm Nhìn</h3>
                        <div class="gt-info">
                            <span>Trở thành công ty uy tín hàng đầu trong việc cung cấp dịch vụ trong lĩnh vực truyền thông trực tuyến mang lại hiệu quả cho doanh nghiệp. </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Sứ Mệnh</h3>
                        <div class="gt-info">
                            <span>Không ngừng sáng tạo và phấn đấu nâng cao chất lượng dịch vụ. Mang đến cho khách hàng sự hài lòng và tín nhiệm nhất. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop