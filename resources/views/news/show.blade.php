@extends('layouts.app')

@section('title', 'News')

@section('content')
    <!--栏目图-->
    <div class="container news-bg">
        <div class="row">
        </div>
    </div>

    <!--新闻内容-->
    <div class="container content">
        <div class="breadnav">
            <ol class="breadcrumb">
                <li><a href="{{ route('root') }}">HOME</a></li>
                <li><a href="{{ route('news.index') }}">NEWS</a></li>
                <li>{{ $news->title }}</li>
            </ol>
        </div>
        <div class="row">

            <div class="col-sm-9 col-md-9">
                <div class="news-detail padding-top-20">
                    <h1>{{ $news->title }}</h1>
                    <div class="news-info">
                        <span>{{ $news->source }} | {{ $news->author }} | {{ $news->create_time->diffForHumans() }}</span>
                    </div>
                    <div class="news-content">
                        {{ $news->content }}
                    </div>
                </div>
            </div>
            <!--联系我们-->
            @include('news._contact_us')
        </div>
    </div>
@endsection