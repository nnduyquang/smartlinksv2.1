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
                    <div id="tt-header" class="col-md-12">
                        <div class="row">
                            <div class="tt-content-detail">{!! $page->content !!}</div>
                        </div>
                    </div>
                    <div id="tt-group-info" class="col-md-12">
                        <div class="container">
                            <div class="row row-flex row-flex-wrap">
                                @foreach($tintucs as $key=>$data)
                                <div class="one-item col-md-3">
                                    <a href="{{URL::to('tin-tuc/'.$data->path)}}">
                                    <div class="flex-col">
                                        <div class=""> {{ Html::image($data->image,'',array('class'=>'dvBanner')) }}</div>
                                        <div class="panel-body flex-grow">{{$data->title}}</div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                                {{--<div class="one-item col-md-3">--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="flex-col">--}}
                                            {{--<div class=""> {{ Html::image('http://via.placeholder.com/350x150','',array('class'=>'dvBanner')) }}</div>--}}
                                            {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                            {{--<div class="panel-footer">Footer</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="one-item col-md-3">--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="flex-col">--}}
                                            {{--<div class=""> {{ Html::image('http://via.placeholder.com/350x150','',array('class'=>'dvBanner')) }}</div>--}}
                                            {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                            {{--<div class="panel-footer">Footer</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="one-item col-md-3">--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="flex-col">--}}
                                            {{--<div class=""> {{ Html::image('http://via.placeholder.com/350x150','',array('class'=>'dvBanner')) }}</div>--}}
                                            {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                            {{--<div class="panel-footer">Footer</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="one-item col-md-3">--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="flex-col">--}}
                                            {{--<div class=""> {{ Html::image('http://via.placeholder.com/350x150','',array('class'=>'dvBanner')) }}</div>--}}
                                            {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                            {{--<div class="panel-footer">Footer</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="one-item col-md-3">--}}
                                    {{--<a href="#">--}}
                                        {{--<div class="flex-col">--}}
                                            {{--<div class=""> {{ Html::image('http://via.placeholder.com/350x150','',array('class'=>'dvBanner')) }}</div>--}}
                                            {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                            {{--<div class="panel-footer">Footer</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,--}}
                                        {{--totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae--}}
                                        {{--dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Duis pharetra varius quam sit amet vulputate.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.--}}
                                        {{--Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis--}}
                                        {{--dolor, in sagittis nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.--}}
                                        {{--Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis--}}
                                        {{--dolor, in sagittis nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.--}}
                                        {{--Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis--}}
                                        {{--dolor, in sagittis nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="well">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.--}}
                                        {{--Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis--}}
                                        {{--dolor, in sagittis nisi.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="panel panel-default flex-col">--}}
                                        {{--<div class="panel-heading">Title flex-col</div>--}}
                                        {{--<div class="panel-body flex-grow">Content here -- div with .flex-grow</div>--}}
                                        {{--<div class="panel-footer">Footer</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div><!--/row-->
                        </div><!--/container-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop