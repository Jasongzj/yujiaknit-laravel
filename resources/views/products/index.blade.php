@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <!--栏目图-->
    <div class="container contact-bg">
        <div class="row">
        </div>
    </div>

    <!--contain-->
    <div class="container content">
        <div class="row">
            <!--左侧目录-->
            <div class="col-xs-3 product-cates">
                <ul class="nav nav-pills nav-stacked product-catelist">
                    <li class="product-cate">
                        <h4>Category</h4>
                    </li>
                    @foreach ($categories as $category)
                    <li class="product-cate">
                        <a href="{{ route('products.index', ['category_id' => $category->id]) }}" class="product-cate-link @if ($category_id == $category->id)bg-white @else bg-gray @endif}">
                        <label>{{ $category->name }}</label>
                        <span class="glyphicon glyphicon-menu-right"></span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--右侧商品-->
            <div class="col-xs-9">
                <div class="product-row row">
                    @foreach ($products as $product)
                    <div class="col-xs-6 col-sm-4 product">
                        <div class="product-detail">
                            <a class="product-link" href="{{ route('products.show', $product->id) }}">
                                <div>
                                    <img class="product-img" src="{{ asset('images/' . $product->head_image) }}" alt="">
                                </div>
                                <div class="product-title"><h4>{{ $product->name }}</h4></div>
                            </a>
                            <div class="product-desc">
                                <div>
                                    <h6>Fabric: {{ $product->fabric }}</h6>
                                    <h6>GSM: {{ $product->gsm }}</h6>
                                    <h6>Material: {{ $product->material }}</h6>
                                    @if ($product->attach)
                                        <h6>Attach: {{ $product->attach }}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

