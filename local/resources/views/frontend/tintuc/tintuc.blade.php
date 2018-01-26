@extends('frontend.master')
@section('title')
    {{$page->seo_title}}
@stop
@section('description')
    {{$page->seo_description}}
@stop
@section('container')
    <div id="tin-tuc" class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="wpContainHeader">
                                {{ Html::image($page->image,'',array('class'=>'dvBanner')) }}
                                <div class="wpTextHeader">
                                    <div class="textHeader">
                                        <h1> {{$page->title}}</h1>
                                        <div class="subTextHeading">
                                            {!! $page->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="tt-content" class="col-md-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="tt-content-detail">{!! $page->content !!}</div>
                        </div>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop