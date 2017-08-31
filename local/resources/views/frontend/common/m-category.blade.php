@extends('frontend.master')
@section('styles')

@stop
@section('title')
    Danh Sách Ngành Hàng
@stop
@section('scripts')
@stop
@section('slider')
@stop
@section("container")
    <div class="m-category-layout">
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('google-adwords')}}"> {{ Html::image('images/temps/adwords-icon.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Google Adwords</span>
                </a>
            </div>
        </div>
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('bao-tri')}}">{{ Html::image('images/temps/facebook_ads_icon.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Facebook Ads</span>
                </a>
            </div>
        </div>
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('thiet-ke-website')}}">{{ Html::image('images/temps/thiet_ke_web_icon.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Thiết Kế Website</span>
                </a>
            </div>
        </div>
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('bao-tri')}}">{{ Html::image('images/temps/thiet_ke_logo_icon.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Thiết Kế Logo</span>
                </a>
            </div>
        </div>
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('bao-tri')}}">{{ Html::image('images/temps/phan-tich-website-icon.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Tư Vấn Chiến Lược Marketing</span>
                </a>
            </div>
        </div>
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('bao-tri')}}">{{ Html::image('images/temps/icon-youtube.png','',array('class'=>'img-category img-rounded')) }}
                    <span>Quảng Cáo Youtube</span>
                </a>
            </div>
        </div>
    </div>
@stop

