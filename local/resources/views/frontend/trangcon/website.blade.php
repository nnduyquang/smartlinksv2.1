@extends('frontend.master')
@section('slider')
    {{--@include('slider.slider')--}}
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="wpContainHeader">
                {{ Html::image('images/temps/ss_adwords.png','',array('class'=>'dvBanner')) }}
                <div class="wpTextHeader">
                    <div class="textHeader">
                        <h1> Thiết Kế Website</h1>
                        <div class="subTextHeading">
                            Chuyên nghiệp - Chuẩn SEO - Tóc độ tối ưu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="wpTaiSao">
                <div class="container">
                    <div class="col-lg-6">
                        {{ Html::image('images/temps/dvthietkewebsite_taisao_left.png','',array('class'=>'wow fadeInLeft dvWebTaiSaoImageLeft')) }}
                    </div>
                    <div class="col-lg-6">
                        <div class="textDescribeTaiSao">
                            <h3>Tại Sao Chọn Thiết Kế Website Tại Smartlinks</h3>
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay="0.5s">Chúng tôi chỉ nhận thiết kế website
                                    theo
                                    yêu
                                    cầu quý khách, không theo mẫu cố định
                                </li>
                                <li class="wow fadeInRight" data-wow-delay="1s">Mỗi khách hàng sẽ có một website hoàn
                                    toàn
                                    khác
                                    nhau, phong cách khác nhau
                                </li>
                                <li class="wow fadeInRight" data-wow-delay="1.5s">Chúng tôi đảm bảo website quý khách
                                    được
                                    thiết
                                    kế với kỹ thuật mới nhất phù hợp với xu hướng hiện nay
                                </li>
                                <li class="wow fadeInRight" data-wow-delay="2.5s">Đảm bảo quý khách có một website hoàn
                                    hảo
                                    đại
                                    diện cho doanh nghiệp mình trên thị trường online
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="containerChatLuong module10">
        <div class="containSwap col-lg-12">
            <div class="col-lg-12">
                <div class="heading-text">
                    <h5 class="sub-heading">Chất Lượng Đi Đôi Với Sự Hài Lòng Module 10</h5>
                    <h3 class="heading">Chất Lượng Website Do <span style="color: #1fb8f1">Smartlink</span> Thiết Kế</h3>
                    <hr class="heading-line">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="groupChatLuong">
                    <div class="col-lg-3">
                        <div class="swapOneItemChatLuong">
                            {{ Html::image('images/temps/chatluong_speed.png','',array('class'=>'imgChatLuong')) }}
                            <h4>TỐI ƯU TỐC ĐỘ</h4>
                            <div class="descriptionChatLuong">
                                Tốc độ load web nhanh, phản hồi ngay lập tức
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="swapOneItemChatLuong">
                            {{ Html::image('images/temps/chatluong_tichhop.png','',array('class'=>'imgChatLuong')) }}
                            <h4>TÍCH HỢP DI ĐỘNG</h4>
                            <div class="descriptionChatLuong">
                                Hoạt động trên mọi trình duyệt và thiết bị di động
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="swapOneItemChatLuong">
                            {{ Html::image('images/temps/chatluong_chuanseo.png','',array('class'=>'imgChatLuong')) }}
                            <h4>CHUẨN SEO</h4>
                            <div class="descriptionChatLuong">
                                Giúp quý khách tối ưu hóa chi phí khi quảng cáo và thứ hạng trên Google
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="swapOneItemChatLuong">
                            {{ Html::image('images/temps/chatluong_thanthien.png','',array('class'=>'imgChatLuong')) }}
                            <h4>THÂN THIỆN NGƯỜI DÙNG</h4>
                            <div class="descriptionChatLuong">
                                Giao diện trực quan dễ sử dụng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="swapOneItemChatLuong">
                        {{ Html::image('images/temps/chatluong_huongdan.png','',array('class'=>'imgChatLuong')) }}
                        <h4>HƯỚNG DẪN CHI TIẾT</h4>
                        <div class="descriptionChatLuong">
                            Chúng tôi cung cấp tài liệu hướng dẫn trực quan dễ hiểu
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="swapOneItemChatLuong">
                        {{ Html::image('images/temps/chatluong_baotri.png','',array('class'=>'imgChatLuong')) }}
                        <h4>DỄ NÂNG CẤP BẢO TRÌ</h4>
                        <div class="descriptionChatLuong">
                            Dễ dàng thêm chức năng mới khi quý khách yêu cầu
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="swapOneItemChatLuong">
                        {{ Html::image('images/temps/chatluong_baohanh.png','',array('class'=>'imgChatLuong')) }}
                        <h4>BẢO HÀNH TRỌN ĐỜI</h4>
                        <div class="descriptionChatLuong">
                            Chúng tôi bảo hành trang web quý khách trọn đời
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="swapOneItemChatLuong">
                        {{ Html::image('images/temps/chatluong_hailong.png','',array('class'=>'imgChatLuong')) }}
                        <h4>HÀI LÒNG</h4>
                        <div class="descriptionChatLuong">
                            Chúng tôi đảm bảo sự hài lòng của quý khách khi thiết kế website tại Smartlinks
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="containerQuyTrinh">
        <div class="col-lg-12">
            <div class="row">
                {{ Html::image('images/temps/chatluong_quytrinh_bg.png','',array('class'=>'bgQuyTrinh')) }}
                <div class="swapHeaderQuyTrinh">
                    <div class="heading-text">
                        <h5 class="sub-heading">Quy Trình Thiết Kế Website Chặt Chẽ Và Đảm Bảo Sự Hài Lòng Của Quý Khách</h5>
                        <h3 class="heading">Quy Trình Thiết Kế Website Tại <span style="color: #1fb8f1">Smartlink</span>
                        </h3>
                        <hr class="heading-line">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.common.LienHeBaoGia')
@stop