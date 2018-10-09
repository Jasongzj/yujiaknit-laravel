@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <div class="container content">
        <div class="breadnav">
            <ol class="breadcrumb breadcrumb-nav">
                <li><a href="{{ route('root') }}">HOME</a></li>
                <li><a href="{{ route('products.index', ['category_id' => 1]) }}">Products</a></li>
                <li><a href="{{ route('products.index', ['category_id' => $product->category_id]) }}">{{ $product->category->name }}</a></li>
                <li>{{ $product->name }}</li>
            </ol>
        </div>
        <div class="col-sm-5 sku-image">
            <div class="image-broad">
                <img src="{{ $product->head_image }}">
            </div>
            <div class="sku-color">
                <ul class="color-list">
                    @foreach ($product->colors as $color)
                    <li class="color">
                        <div class="color-detail" style="background-color:rgb({{ $color->rgb }}); @if ($color->name =='WHITE')  'border: solid 1px #000;' @endif"></div>
                        <p>{{ $color->name }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-6 sku-info">
            <div class="sku-name">
                <h1>{{ $product->name }}</h1>
                <span>{{ $product->fabric }},{{ $product->gsm }},{{ $product->material }}, {{ $product->attach }}</span>
            </div>
            <hr>
            <div class="sku-note-area">
                <ol class="sku-note">
                    <li class="note">
                        <h4 style="color: #d43f3a;">Note:</h4>
                    </li>
                    <li class="color-name">
                        <span>1. Other colors can be based on your needs.</span>
                    </li>
                    <li class="color-name">
                        <span>2. Grams can also be based on your needs.</span>
                    </li>
                    <li class="color-name">
                        <span>3. The fabric/material also be based on your needs.</span>
                    </li>
                    <li class="color-name">
                        <span>4. Also accept embroider and printing.</span>
                    </li>
                    <li class="color-name">
                        <span>5. Your offer had better give me your target market.</span>
                    </li>
                </ol>
            </div>
            <div class="inquire-area">
                <a class="btn btn-danger" onclick="layerout('{:url('products/inquiry','detail='.$detail.id)}', 800, 600)"><h4 >CLICK HERE TO INQUIRE</h4></a>
            </div>
            <div class="sku-thumb">

            </div>
        </div>
    </div>
@endsection