@extends('frontend.master')
@section('title')
    Liên Hệ
@stop

@section('styles')

    {{--THEMES FOR NIVO SLIDER--}}

    {{ Html::style('css/contact.css') }}

@stop

@section('title')

    SMARTLINKS

@stop

@section("container")

    <div id="bao-gia">

       /

    </div>

    {{--<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=20%2F13%20nguy%E1%BB%85n%20tr%C6%B0%E1%BB%9Dng%20t%E1%BB%99%2C%20P.12%2C%20Qu%E1%BA%ADn%204&key=AIzaSyCqkz5GVTSabhXl3ONdVXrEqVzUOOcK1GQ" allowfullscreen></iframe>--}}
    @include('frontend.trangchu.section4')

    @include('frontend.common.HinhThucVaGia')

    @include('frontend.common.LienHeBaoGia')

@stop