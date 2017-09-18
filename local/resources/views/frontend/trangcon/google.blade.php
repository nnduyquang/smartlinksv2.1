@extends('frontend.master')
@section('slider')
    {{--@include('slider.slider')--}}
@stop
@section('container')
    <div class="module6 col-lg-12">
        <div class="row">
            <div class="wpContainHeader">
                {{ Html::image('images/temps/ss_adwords.jpg','',array('class'=>'dvBanner')) }}
                <div class="wpTextHeader">
                    <div class="textHeader">
                        <h1> Google Adwords</h1>
                        <div class="subTextHeading">
                            Mang lại lượng khách hàng tiềm năng đến với doanh nghiệp của bạn
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wpLoiIch">
                <div class="col-md-6">
                    {{ Html::image('images/temps/loiich_left.png','',array('class'=>'wow fadeInLeft')) }}
                </div>
                <div class="col-md-6">
                    <div class="textDescribeLoiIch">
                        <h3>Lợi Ích Quảng Cáo Google Adwords</h3>
                        <ul>
                            <li class="wow bounceIn" data-wow-delay="0.5s">Nhắm Đúng Đối Tượng Khách Hàng</li>
                            <li class="wow bounceIn" data-wow-delay="1s">Thu Hút Lượng Khách Hàng Tiềm Năng</li>
                            <li class="wow bounceIn" data-wow-delay="1.5s">Tăng Doanh Số Bán Hàng</li>
                            <li class="wow bounceIn" data-wow-delay="2s">Chi phí thấp hiệu quả cao</li>
                            <li class="wow bounceIn" data-wow-delay="2.5s">Quảng cáo trên nhiều nền tảng</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slogun">
                        <h1>
                            <span style="color: #1fb8f1">Smartlinks</span> giúp bạn tiếp cận hàng triệu khách hàng<br>
                            thông qua quảng cáo <span style="color: #0404ba">G</span><span
                                    style="color: red">o</span><span
                                    style="color: yellow">o</span><span style="color: #0404ba">g</span><span
                                    style="color: lawngreen">l</span><span style="color: red">e</span> Adwords
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module8 col-lg-12">
        <div class="row">
            <div class="wpTheManh">
                {{ Html::image('images/temps/bgTheManh.jpg') }}
                <div class="container">
                    <h1>Hãy cho chúng tôi biết yêu cầu của quý khách</h1>
                    <h5>
                        <span style="font-weight: bold">Smartlinks</span> sẽ tiếp nhận ý kiến và đánh giá tình hình
                        sản xuất kinh doanh của quý khách. Chúng tôi muốn nắm được mong muốn của quý khách muốn đạt
                        được thông qua Google Adwords, từ đó đề xuất giải pháp cụ thể phù hợp với tình hình kinh
                        doanh của quý khách
                    </h5>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="textDescribeTheManh">
                                <h3>
                                    Chúng tôi sẽ
                                </h3>
                                <ul>
                                    <li>Tăng thêm đơn hàng</li>
                                    <li>Đưa ra giải pháp hợp lý phù hợp với mục tiêu kinh doanh của công ty</li>
                                    <li>Tối ưu hóa chất lượng quảng cáo</li>
                                    <li>Chi phí thấp nhưng vẫn thu hút khách hàng</li>
                                    <li>Lợi nhuận vượt trội khi sử dụng quảng cáo Google Adwords</li>
                                    <li>Cung cấp báo cáo chi tiết về hiệu quả quảng cáo</li>
                                </ul>

                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="textDescribeTheManh">
                                <h3>
                                    Chúng tôi không
                                </h3>
                                <ul>
                                    <li>Đo lường chất lượng quảng cáo bằng click chuột</li>
                                    <li>Lãng phí ngân sách quảng cáo với từ khóa không phù hợp</li>
                                    <li>Cung cấp giải pháp không phù hợp với quý khách</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module7 col-md-12">
        <div class="row">
            <div id="hieuSuat" class="wpHieuSuat">
                <div class="col-md-3">
                    <div class="wpOneHieuSuat">
                        {{ Html::image('images/temps/customer.png') }}
                        <div class="contentHieuSuat">
                            <div id="hs1" class="numberHieuSuat hs1">0</div>
                            <div class="textHieuSuat">Khách Hàng Thân Thiết</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wpOneHieuSuat">
                        {{ Html::image('images/temps/icon-klipstarts.png') }}
                        <div class="contentHieuSuat">
                            <div id="hs2" class="numberHieuSuat hs2">0</div>
                            <div class="textHieuSuat">Chiến Dịch Thực Hiện</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wpOneHieuSuat">
                        {{ Html::image('images/temps/eco-green-growth.png') }}
                        <div class="contentHieuSuat">
                            <div id="hs3" class="numberHieuSuat hs3">0</div>
                            <div class="textHieuSuat">Tăng Doanh Thu Khách Hàng</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wpOneHieuSuat">
                        {{ Html::image('images/temps/customer.png') }}
                        <div class="contentHieuSuat">
                            <div id="hs4" class="numberHieuSuat hs4">0</div>
                            <div class="textHieuSuat">Đối Tác Liên Kết</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.common.HinhThucVaGia')
    @include('frontend.common.LienHeBaoGia')
@stop