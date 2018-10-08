<footer>
    <div class="footer-info">
        <div class="container">
            <div class="footer-nav">
                <ul class="">
                    <li class="">
                        <a href="{{ route('root') }}">HOME</a>
                    </li>
                    <li class="">
                        <a href="{:url('index/about/index')}">ABOUT US</a>
                    </li>
                    <li class="">
                        <a href="{:url('index/products/index', 'cate=1')}">PRODUCTS</a >
                    </li>
                    <li class="">
                        <a href="{{ route('brands.index') }}">BRANDS</a>
                    </li>
                    <li class="">
                        <a href="{{ route('news.index') }}">NEWS</a>
                    </li>
                    <li class="">
                        <a href="{{ route('contact_us') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>Copyright © SHENZHEN YUJIA IMPORT&EXPORT CO.,LTD</p>
            </div>
        </div>
    </div>

</footer>