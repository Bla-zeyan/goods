<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt=""/></a>
                {{--<a href="{{}}"><img src="{{}}" alt="{{}}"/></a>--}}
            </div>
            <ul class="shopping_grid">
                <a href="#"><li>注册</li></a>
                {{--<a href="{{}}"><li>注册</li></a>--}}
                <a href="login.html"><li>登录</li></a>
                {{--<a href="{{}}"><li>登录</li></a>--}}
                {{--<a href="{{}}"><li><span class="m_1">购物车</span>&nbsp;&nbsp;{{}} &nbsp;<img src="{{asset('images/bag.png')}}" alt="购物车"/></li></a>--}}
                <a href="#"><li><span class="m_1">购物车</span>&nbsp;&nbsp;(0) &nbsp;<img src="images/bag.png" alt=""/></li></a>
                <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
<style>
    .nav li a {
        display: block;
        margin:0px 15px;
        color:#fff;
        font: 20px/20px 'Lato', sans-serif;
        text-transform:uppercase;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        text-decoration: none;
        padding:0;
    }
</style>
    <div class="h_menu4" ><!-- start h_menu4 -->
        <div class="container" >
            <a class="toggleMenu" href="#">菜单11111111111111</a>
            <ul class="nav">
                <li class="active"><a href="index.html" data-hover="Home">主页</a></li>
                <li><a href="about.html" data-hover="About Us">关于我们</a></li>
                <li><a href="careers.html" data-hover="Careers">发展历程</a></li>
                <li><a href="contact.html" data-hover="Contact Us">联系我们</a></li>
                <li><a href="404.html" data-hover="Company Profile">公司简介</a></li>
                <li><a href="register.html" data-hover="Company Registration">供应商入驻</a></li>
                <li><a href="wishlist.html" data-hover="Wish List">愿望清单</a></li>
            </ul>
            <script type="text/javascript" src="{{asset('home/js/nav.js')}}"></script>
        </div><!-- end h_menu4 -->
    </div>
</div>