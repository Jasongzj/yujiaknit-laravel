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
    <div class="container">

        @include('layouts._header')

        @yield('content')

    </div>

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/layer/layer.js') }}"></script>
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