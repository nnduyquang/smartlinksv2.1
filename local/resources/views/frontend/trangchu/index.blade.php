@extends('frontend.master')
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('slider.slider')
@stop
@section('container')
    @include('frontend.trangchu.section1')
    @include('frontend.trangchu.section2')
    @include('frontend.trangchu.section3')
    @include('frontend.trangchu.section4')
    @include('frontend.common.HinhThucVaGia')
    @include('frontend.common.LienHeBaoGia')
@stop