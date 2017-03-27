<div class="menubar" id="menubar">
    <div class="nav on-desktop navbar-fixed-top visible-md-block visible-lg-block">
        <div id="nav" class="container">
            <div class="menu-left">
                <ul>
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Dịch Vụ<i style="margin-left: 5px" class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Google Adwords</a></li>
                            <li><a href="#">Google Display</a></li>
                            <li><a href="#">Mobile Ads</a></li>
                            <li><a href="#">Facebook Ads</a></li>
                            <li><a href="#">Youtube Ads</a></li>
                            <li><a href="#">Dạy Google Adwords</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Thiết Kế Website</a></li>
                    <li><a href="#">Khách Hàng</a></li>
                </ul>
            </div>
            <div class="brand">
                <a href="#">
                    {{ Html::image('images/logo/smartlinks-logo.png','',array('class'=>'logo')) }}
                </a>
            </div>
            <div class="menu-right">
                <ul>
                    <li><a href="#">Tin Tức</a></li>
                    <li><a href="#">Báo Giá</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav on-mobile navbar-fixed-top visible-xs-block visible-sm-block">
        <ul>
            <li><a href="#menu" class="fa fa-2x fa-bars"></a></li>
            <li><a href="#" class="fa fa-2x fa-home"></a></li>
        </ul>
    </div>
</div>
<nav id="menu">
    <ul>
        <li>{{ Html::image('images/logo/smartlinks-logo.png','',array('class'=>'logo')) }}</li>
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="#">Dịch Vụ</a>
            <ul>
                <li><a href="#">Google Adwords</a></li>
                <li><a href="#">Google Display</a></li>
                <li><a href="#">Mobile Ads</a></li>
                <li><a href="#">Facebook Ads</a></li>
                <li><a href="#">Youtube Ads</a></li>
                <li><a href="#">Dạy Google Adwords</a></li>
            </ul>
        </li>
        <li><a href="#">Khách Hàng</a></li>
        <li><a href="#">Thiết Kế Website</a></li>
    </ul>
</nav>