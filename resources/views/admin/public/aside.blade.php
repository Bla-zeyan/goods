<!-- Aside Start-->
<aside class="left-panel">
    <!-- brand -->
    <div class="logo">
        <a href="{{url('/index')}}" class="logo-expanded">
            <i class="ion-social-buffer"></i>
            <span class="nav-label">商城后台管理</span>
        </a>
    </div>
    <!-- / brand -->
    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="">
                <a href="{{url('/index')}}">
                    <i class="zmdi zmdi-view-dashboard"></i>
                    <span class="nav-label">主页</span></a>
            </li>
            <li class="has-submenu ">
                <a href="#"><i class="zmdi zmdi-format-underlined"></i>
                    <span class="nav-label">商品管理</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('')}}">商品添加</a></li>
                    <li><a href="{{url('')}}">商品列表</a></li>
                </ul>
            </li>

            <li class="has-submenu ion">
                <a href="#">
                    <i class="zmdi zmdi-format-underlined"></i>
                    <span class="nav-label">客户管理</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('')}}">会员列表</a></li>
                </ul>
            </li>
            <li class="has-submenu ">
                <a href="#">
                    <i class="zmdi zmdi-format-underlined"></i>
                    <span class="nav-label">订单管理</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('')}}">订单查询</a></li>
                    <li><a href="{{ url('')}}">订单列表</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</aside>
<!-- Aside Ends-->
