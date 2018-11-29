<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title', 'Yujia')</title>
    <meta name="keywords" content="polo,T-shirt,vest,sweater,hoddy,long sleeves,">
    <meta name="description" content="YU JIA Garment CO.LTD from China. The main polo,T-shirt,vest.Major for school polo,competive T-shirt,polo,vest.">

    {{--<link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/carousel.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https'){
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else{
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</head>
<body>
    <div class="container inquiry">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (session()->has($msg))
                <div class="flash-message">
                    <p class="alert alert-{{ $msg }}">
                        {{ session()->get($msg) }}
                    </p>
                </div>
            @endif
        @endforeach
        <form id="inquiry" action="{{ route('inquires.store') }}" method="POST" role="form" >
            {{ csrf_field() }}
            <div class="inquiry-title"><h2>Inquiry Detail</h2></div>
            <div class="form-group">
                <label class="control-label" for="products">PRODUCTS :</label>
                <input type="text" class="form-control" id="products" name="products" value="">
            </div>
            <div class="form-group">
                <label class="control-label" for="name">NAME :</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>
            <div class="form-group">
                <label class="control-label" for="email">EMAIL :</label>
                <input type="email" class="form-control" id="email" name="email" value="">
            </div>
            <div class="form-group">
                <label class="control-label" for="quantity">QUANTITY :</label>
                <label><input type="radio" name="quantity" value="100PC">100PC</label>
                <label><input type="radio" name="quantity" value="1000PC">1000PC</label>
                <label><input type="radio" name="quantity" value="10000PC">10000PC</label>
                <label><input type="radio" name="quantity" value="CONTAINER">CONTAINER</label>
                <label for="customer">
                    <input type="radio" name="quantity" id="customer" value="">
                    <input id="customer-num" name="customer_num" type="text" style="width: 70px;">&nbsp PC
                </label>
            </div>
            <div class="form-group">
                <label class="control-label" for="market">MARKET :</label>
                <label>
                    <input class="market" type="checkbox" name="market[]" value="ASIA" > ASIA
                </label>
                <label>
                    <input class="market" type="checkbox" name="market[]" value="EUROPE"> EUROPE
                </label>
                <label>
                    <input class="market" type="checkbox" name="market[]" value="AFRICA"> AFRICA
                </label>
                <label>
                    <input class="market" type="checkbox" name="market[]" value="NORTH AMERICA"> NORTH AMERICA
                </label>
                <label >
                    <input class="market" type="checkbox" name="market[]" value="SOUTH AMERICA"> SOUTH AMERICA
                </label>
                <label>
                    <input class="market" type="checkbox" name="market[]" value="OCEANIA" required> OCEANIA
                </label>
            </div>
            <div class="form-group">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="submit" class="btn btn-danger" id="submitBtn" value="Done" onclick="">
            </div>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script>
        $().ready(function(){
            $("#inquiry").validate({
                rules: {
                    products: "required",
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    quantity: {
                        required: true,
                    },
                    market: {
                        required: true,
                    },
                    customer_num: "number",
                },
                submitHandler: function (form) {
                    $(form).ajaxSubmit();
                },
                errorPlacement: function (error, element) {
                    element.closest('div')
                        .append(error);
                },
                errorElement: "span",
            });
            //获取quantity自定义的值
            $("#customer").on('click', function (event) {
                $("#customer-num").focus();
            });
            $("#customer-num").on('click', function (event) {
                $("#customer").prop("checked", true);
            }).on('blur', function (event) {
                $("#customer").attr('value', $(this).val());
            });
        });

    </script>
</body>
</html>