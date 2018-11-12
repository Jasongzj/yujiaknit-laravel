@extends('layouts.app')

@section('title', 'Yujia')

@section('content')
    <!--栏目图-->
    <div class="container news-bg">
        <div class="row">
        </div>
    </div>

    <!--新闻内容-->
    <div class="container content">

        @include('layouts._breadcrumb', ['sub_title' => 'NEWS'])

        <div class="row">

            <div class="col-sm-9 col-md-9">
                <div class="news-list">
                    <h4>News</h4>
                    @if (count($newsList))
                        <ul>
                            @foreach($newsList as $news)
                                <li>
                                    <a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a>
                                    <span class="news-date">{{ $news->created_at->diffForHumans() }}</span>
                                </li>
                            @endforeach

                            {{-- 分页 --}}
                            {!! $newsList->appends(Request::except('page'))->render() !!}
                        </ul>
                    @else
                        <div class="empty-block">暂无没有新闻哦</div>
                    @endif

                </div>
            </div>
            <!--联系我们-->
            @include('news._contact_us')

        </div>
    </div>
@endsection