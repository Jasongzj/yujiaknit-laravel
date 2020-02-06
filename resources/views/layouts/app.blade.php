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

    <!-- import Vue.js -->
    {{--<script src="//vuejs.org/js/vue.min.js"></script>--}}
    <!-- import stylesheet -->
    {{--<link rel="stylesheet" href="//unpkg.com/iview/dist/styles/iview.css">--}}
    <!-- import iView -->
    {{--<script src="//unpkg.com/iview/dist/iview.min.js"></script>--}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?432ca48c0e9678b81fe67bac2cf986e2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>
    <div class="container">

        @include('layouts._header')

        @yield('content')

    </div>

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--<script src="{{ asset('js/layer/layer.js') }}"></script>--}}
    @yield('scriptAfterJs')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $("#subscribeBtn").click(function() {
                var obj = $(this);
                $.ajax({
                    url:"{{ route('subscriptions.store') }}",
                    type:'POST',
                    data:$('#subscribeInfo').serialize(),
                    dataType:'json',
                    async:true,
                    success:function(result) {
                        layer.open({
                            type: 2,
                            area: [400+'px', 200 +'px'],
                            fix: false, //不固定
                            maxmin: true,
                            shade:0.4,
                            shadeClose: true, //点击遮罩关闭
                            content: '{{ route('subscriptions.index') }}',
                        });
                    },
                    error: function (result) {
                        console.log(result.responseJSON.errors.email[0])
                        if (result.responseJSON.errors.email[0] == 'emailRequired') {
                            $("#notice_subscribe").parent().addClass('has-error');
                            $("#notice_subscribe").css('display','block');
                        } else if (result.responseJSON.errors.email[0] == 'emailUnformat') {
                            $("#notice_correct_subscribe").parent().addClass('has-error');
                            $("#notice_correct_subscribe").css('display','block');
                        }
                    }
                })
            })
        })
    </script>
</body>
</html>