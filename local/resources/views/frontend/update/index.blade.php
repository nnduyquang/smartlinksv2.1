@extends('frontend.master')
@section('slider')
    {{--@include('slider.slider')--}}
@stop
@section('container')
    <div class="col-md-12" style="text-align: center">
        {{ Html::image('images/temps/web-maintenance.png','',array('class'=>'')) }}
    </div>
@stop