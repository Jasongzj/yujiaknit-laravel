@extends('layouts.app')

@section('title', 'Brands')

@section('content')
    <!--栏目图-->
    <div class="container brand-bg">
        <div class="row">
        </div>
    </div>

    <!--内容-->
    <div class="container content">

        @include('layouts._breadcrumb', ['sub_title' => 'BRANDS'])

        <div class="brand-content">
            <div class="col-sm-8">
                <h2>Brand Story</h2>
                <p>
                    NMY is the leading brand of SHEN ZHEN YU JIA IMPORT&EXPORT CO., LTD., which is inspired by European and American culture.
                    <br>
                    It is a fashion brand that integrates design and development, marketing, image promotion, information and production.
                    <br>
                    Dedicated to modern economy, comfortable, simple clothing brand.
                </p>
            </div>
            <div class="col-sm-4 label">
                <img src="{{ asset('images/brand/1500617942.png') }}" width="100%">
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-4 certificate">
                <img src="{{ asset('images/brand/2017001.jpg') }}" width="100%" style="margin-top: 20px">
            </div>
            <div class="col-sm-8">
                <div class="concept">
                    <h2>Brand Concept</h2>
                    <p>
                        In work or study, easy, comfortable, have power
                    </p>
                </div>
                <div class="position">
                    <h2>Brand positioning</h2>
                    <p>
                        Most school uniforms, employees' clothing, advertising clothing,
                        super cost-effective brands, simple style, generous good quality and durable.
                        The finished product is fast, durable, and varied in color and style.<br>
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection