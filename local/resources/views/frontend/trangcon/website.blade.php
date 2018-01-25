@extends('frontend.master')
@section('title')
    Thiết Kế Website Chuẩn SEO Chuyên Nghiệp - Smartlinks.vn
@stop
@section('description')
    Smartlinks Là Công Ty Thiết Kế Website Chuyên Nghiệp. Chúng Tôi Chuyên Thiết Kế Website Nhà Hàng, Bất Động Sản, Bán Hàng Chuẩn SEO. ☎ Hotline: 0907 468 264
@stop
@section('slider')
    {{--@include('slider.slider')--}}
@stop
@section('container')
    <div id="website-design" class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="wpContainHeader">
                                {{ Html::image('images/temps/Web-Design-and-Development-Banner1.jpg','',array('class'=>'dvBanner')) }}
                                <div class="wpTextHeader">
                                    <div class="textHeader">
                                        <h1>Thiết Kế Website</h1>
                                        <div class="subTextHeading">
                                            Chuyên nghiệp - Chuẩn SEO - Tốc độ tối ưu
                                        </div>
                                    </div>
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
                            <div class="col-md-6">
                                {{ Html::image('images/temps/dvthietkewebsite_taisao_left.png','',array('class'=>'wow fadeInLeft dvWebTaiSaoImageLeft')) }}
                            </div>
                            <div class="col-md-6">
                                <div class="textDescribeTaiSao">
                                    <h3>Tại Sao Chọn Thiết Kế Website Tại Smartlinks</h3>
                                    <ul>
                                        <li class="wow bounceIn" data-wow-delay="0.5s">Chúng tôi chỉ nhận thiết kế
                                            website
                                            theo
                                            yêu
                                            cầu quý khách, không theo mẫu cố định
                                        </li>
                                        <li class="wow bounceIn" data-wow-delay="1s">Mỗi khách hàng sẽ có một website
                                            hoàn
                                            toàn
                                            khác
                                            nhau, phong cách khác nhau
                                        </li>
                                        <li class="wow bounceIn" data-wow-delay="1.5s">Chúng tôi đảm bảo website quý
                                            khách
                                            được
                                            thiết
                                            kế với kỹ thuật mới nhất phù hợp với xu hướng hiện nay
                                        </li>
                                        <li class="wow bounceIn" data-wow-delay="2.5s">Đảm bảo quý khách có một website
                                            hoàn
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
                            <h5 class="sub-heading">Chất Lượng Đi Đôi Với Sự Hài Lòng</h5>
                            <h3 class="heading">Chất Lượng Website Do <span style="color: #1fb8f1">Smartlinks</span>
                                Thiết Kế
                            </h3>
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
                        <div class="groupChatLuong">
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
            </div>
            <div id="tk-quy-trinh" class="col-md-12">
                <div class="row">

                    <div class="heading-text">
                        <h5 class="sub-heading">Quy Trình Thiết Kế Website Chặt Chẽ Và Đảm Bảo Sự Hài Lòng Của
                            Quý
                            Khách</h5>
                        <h3 class="heading">Quy Trình Thiết Kế Website Tại <span
                                    style="color: #1fb8f1">Smartlinks</span>
                        </h3>
                        <hr class="heading-line">
                    </div>
                    <div id="tk-noi-dung-quy-trinh" class="col-md-12">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-4">
                                    <div class="tk-contain-box col-md-12">
                                        {{ Html::image('images/temps/consult_expert_icon.png','',array('class'=>'img_icon')) }}
                                        <h3 class="title">Thảo Luận Với Chuyên Gia</h3>
                                        <div class="subtitle">Trao Đổi Trực Tiếp Với Chuyên Gia Thiết Kế Website Để Lên
                                            Ý Tưởng
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tk-contain-box col-md-12">
                                        {{ Html::image('images/temps/design_icon.png','',array('class'=>'img_icon')) }}
                                        <h3 class="title">Thảo Luận Với Chuyên Gia</h3>
                                        <div class="subtitle">Trao Đổi Trực Tiếp Với Chuyên Gia Thiết Kế Website Để Lên
                                            Ý Tưởng
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tk-contain-box col-md-12 on-mobile">
                                        {{ Html::image('images/temps/launch_icon.png','',array('class'=>'img_icon')) }}
                                        <h3 class="title">Website Hoàn Thiện</h3>
                                        <div class="subtitle">Website Bắt Đầu Hoạt Động Và Đem Lại Doanh Thu Cho Công
                                            Việc Kinh Doanh Của Quý Khách
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tk-noi-dung-proccesses" class="col-md-12">
                        <div class="row">
                            <div class="container">
                                <div class="bar"></div>
                                <div class="col-md-4">
                                    <div class="step-below">
                                        {{ Html::image('images/temps/process_1.png','',array('class'=>'img_icon')) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="step-below">
                                        {{ Html::image('images/temps/process_2.png','',array('class'=>'img_icon')) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="step-below">
                                        {{ Html::image('images/temps/process_check.png','',array('class'=>'img_icon')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tk-result" class="col-md-12">
                        <div class="row">
                            <h3>VÀ WEBSITE BẠN NHẬN ĐƯỢC THẬT TUYỆT VỜI</h3>
                            {{ Html::image('images/temps/site-samples.png','',array('class'=>'img-site-simple')) }}
                        </div>
                    </div>
                    <div id="tk-testimonials" class="col-md-12">
                        <div class="row">
                            <div class="chevron on-mobile">
                                <div class="content">
                                    <div class="quote">"Nếu bạn muốn có một website chuyên nghiệp phục vụ cho công việc
                                        kinh doanh, phù hợp thị hiếu và xu hướng mới hiện nay, tương thích với mọi thiết
                                        bị cũng như trải nghiệm người dùng, 100%. Hãy liên hệ ngay với Smartlinks"
                                    </div>
                                    <div class="author">
                                        - Quang Nguyễn, Chuyên Gia Tư Vấn Và Thiết Kế, Smartlinks.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tk-price" class="col-md-12">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel price panel-red">
                                            <div class="panel-heading  text-center">
                                                <h3>Cơ Bản</h3>
                                            </div>
                                            <div class="price-value text-center">
                                                <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Di Động
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Giới Thiệu
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i>
                                                    Module Tin Tức
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Sản Phẩm
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Thông Tin Sản Phẩm Chuẩn SEO (Hỗ Trợ Tối Đa 2 Sản Phẩm)
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Liên Hệ
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Tìm Kiếm Cơ Bản
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Fanpage Facebook
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                            </ul>
                                            {{--<div class="panel-footer">--}}
                                                {{--<a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel price panel-red highlighted">
                                            <div class="panel-heading  text-center special">
                                                <h3>Doanh Nghiệp</h3>
                                            </div>
                                            <div class="price-value text-center">
                                                <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Di Động
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Giới Thiệu
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i>
                                                    Module Tin Tức
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Sản Phẩm
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Thông Tin Sản Phẩm Chuẩn SEO (Hỗ Trợ Tối Đa 5 Sản Phẩm)
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Liên Hệ
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Tìm Kiếm Cơ Bản
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Fanpage Facebook
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Hộp Chat Online
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Chuẩn SEO
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> X
                                                </li>
                                            </ul>
                                            {{--<div class="panel-footer">--}}
                                                {{--<a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel price panel-red">
                                            <div class="panel-heading  text-center">
                                                <h3>Cao Cấp</h3>
                                            </div>
                                            <div class="price-value text-center">
                                                <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Di Động
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Giới Thiệu
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i>
                                                    Module Tin Tức
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Sản Phẩm
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Thông Tin Sản Phẩm Chuẩn SEO (Không Giới Hạn)
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Liên Hệ
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Module Tìm Kiếm Cơ Bản
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Fanpage Facebook
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tích Hợp Hộp Chat Online
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Chuẩn SEO
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Tìm Hợp Kiếm Nâng Cao
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Thiết Kế Giao Diện Độc Quyền
                                                </li>
                                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Điều Chỉnh Giao Diện Theo Yêu Cầu
                                                </li>
                                            </ul>
                                            {{--<div class="panel-footer">--}}
                                                {{--<a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.common.LienHeBaoGia')
@stop