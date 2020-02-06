@extends('layouts.app')

@section('title', 'Yujia')

@section('content')
    <!--轮播图-->
    <div class="container">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1" class=""></li>
                <li data-target="#Carousel" data-slide-to="2" class=""></li>
                <li data-target="#Carousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="{{ route('products.index', ['category_id' => 1]) }}"><img class="first-slide" src="http://yujiaknit.opadsz.com/images/banner/golfer1.jpg" alt="First slide"></a>
                </div>
                <div class="item">
                    <a href="{{ route('products.index', ['category_id' => 1]) }}"><img class="second-slide" src="http://yujiaknit.opadsz.com/images/banner/baby-shirt1.jpg" alt="Second slide"></a>
                </div>
                <div class="item">
                    <img class="third-slide" src="http://yujiaknit.opadsz.com/images/banner/cotton.jpg" alt="Third slide">
                </div>
                <div class="item">
                    <img class="forth-slide" src="http://yujiaknit.opadsz.com/images/banner/container.jpg" alt="Forth slide">
                </div>
            </div>
        </div>
    </div>

    <!--产品模块-->
    <div class="container">
        <div class="section-title">
            <p>PRODUCTS</p>
        </div>
    </div>

    <div class="container home-cate">
        <div class="row ">
            @foreach($categories as $category)
                <div class="col-xs-4 home-catelist">
                    <a class="home-cate-link"  href="{{ route('products.index', ['category_id' => $category->id]) }}">
                        <div><img class="home-cate-img img-circle" src="http://yujiaknit.opadsz.com/images/{{ $category->icon }}" alt="POLO"></div>
                        <div class="home-cate-title">{{ $category->name }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!--证件轮播-->
    <div class="container">
        <div class="section-title">
            <p>CERTIFICATE</p>
        </div>
        <div class="wrap">
            <div class="license">
                <ul id="scroll">
                    <li><img src="http://yujiaknit.opadsz.com/images/2017001.jpg"  alt=""/></li>
                    <li><img src="http://yujiaknit.opadsz.com/images/2017005.jpg"  alt=""/></li>
                    <li><img src="http://yujiaknit.opadsz.com/images/2017006.jpg"  alt=""/></li>
                    <li><img src="http://yujiaknit.opadsz.com/images/oeko.png" alt=""/></li>
                </ul>
                <ul id="scroll2"></ul>
            </div>
        </div>
    </div>
@endsection