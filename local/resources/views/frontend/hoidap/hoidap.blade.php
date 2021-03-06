@extends('frontend.master')
@section('title')
    {{$page->seo_title}}
@stop
@section('description')
    {{$page->seo_description}}
@stop
@section('container')
    <div id="hoi-dap" class="col-md-12">
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
                <div id="hd-content" class="col-md-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="hd-content-detail">{!! $page->content !!}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @foreach($hoidaps as $key=>$data)
                            <div class="toggle">
                                <div class="toggle-title ">
                                    <h3>
                                        <i></i>
                                        <span class="title-name">{{$data->title}}</span>
                                    </h3>
                                </div>
                                <div class="toggle-inner">
                                    {!! $data->content !!}
                                </div>
                            </div><!-- END OF TOGGLE -->
                        @endforeach
                    </div>
                </div>
            </div>




        </div>

@stop