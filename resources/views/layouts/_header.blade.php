<nav class="navbar" role="navigation">
    <!--logo及导航按钮-->
    <div class="navbar-header">
        <a class="logo" href="{{ route('root') }}"><img class="" src="http://yujiaknit.opadsz.com/images/logo-1.png" title="logo" alt="logo"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcol">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>

    <!--订阅-->
    <div class="subscribe hidden-xs">
        <form class="navbar-form navbar-left" role="form" id="subscribeInfo">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Please enter your E-mail" name="email" id="subContent" onblur="validate('subscribe')" value="" >
            </div>
            <input type="button" id="subscribeBtn" class="btn btn-danger" value="subscribe">
            <span id="notice_subscribe" style="color:red;display: none">* Please enter an E-mail address</span>
            <span id="notice_correct_subscribe" style="color:red;display: none">* Please enter an avilable E-mail address</span>
        </form>
    </div>
    <div class="collapse navbar-collapse" id="navcol">
        <ul class="nav navbar-nav nav-menu">
            <li class="">
                <a href="{{ route('root') }}">HOME<span class="hidden-xs {$nav=='index' ? 'current' : ''}"></span></a>

            </li>
            <li class="">
                <a href="{{ route('about.index') }}">ABOUT US<span class="hidden-xs {$nav=='about' ? 'current' : ''}"></span></a>
                <p class="hidden-xs"></p>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" id="subpro" data-toggle="dropdown">PRODUCTS<p class="caret"></p><span class="hidden-xs {$nav=='products' ? 'current' : ''}"></span></a >
                <ul class="dropdown-menu" role="menu" aria-labelledby="subpro">
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="">
                <a href="{{ route('brands.index') }}">BRANDS<span class="hidden-xs {$nav=='brands' ? 'current' : ''}" ></span></a>
            </li>
            <li class="">
                <a href="{{ route('news.index') }}">NEWS<span class="hidden-xs {$nav=='news' ? 'current' : ''}"></span></a>
            </li>
            <li class="">
                <a href="{{ route('contact_us') }}">CONTACT US<span class="hidden-xs {$nav=='contact' ? 'current' : ''}"></span></a>
            </li>
        </ul>
    </div>
</nav>