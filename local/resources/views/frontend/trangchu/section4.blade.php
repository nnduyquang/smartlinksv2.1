<div class="container-consultants col-lg-12">
    <div class="empty-space"></div>
    <div class="heading-text">
        <h5 class="sub-heading in">Smartlinks Có Đội Ngũ Tư Vấn Chuyên Nghiệp</h5>
        <h3 class="heading in">Chuyên Viên Tư Vấn</h3>
        <hr class="heading-line in">
    </div>
    <div class="container">
        <div class="member-carousel">
            @foreach ($emps as $key => $data)
            <div class="one-member">
                <div class="avarta-member">
                    {{ Html::image($data->emp_image,'',array('class'=>'style-member')) }}
                </div>
                <div class="introduce-member">
                    <h6 class="name-member">
                        {{$data->emp_name}}
                    </h6>
                    <div class="job-member">
                        {{$data->emp_duty}}
                    </div>
                    <div class="call-member">
                        {{$data->emp_phone}}
                    </div>
                    <div class="email-member">
                        {{$data->emp_email}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="member-arrow-control">
            <div class="arrow-nav">
                <div class="arrow-prev1">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="arrow-next1">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
