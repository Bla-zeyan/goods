<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="商城 Shopping Mall">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('home/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('home/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <script src="{{asset('home/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/js/responsiveslides.min.js')}}"></script>
    <script src="{{asset('home/js/easyResponsiveTabs.js')}}"></script>
    <script src="{{asset('home/js/jquery.etalage.min.js')}}"></script>

    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('home/js/hover_pack.js')}}"></script>
    <title>@yield('title')</title>
    {{--引入CSS--}}
    {{--@include('home.public.styles')--}}
</head>

<body>
@include('home.public.header')
@include('home.public.slider')
<div class="column_center">
    <div class="container">
        <div class="search">
            <div class="stay">搜索</div>
            <div class="stay_right">
                <from   >
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value="">
                </from>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="main">
    {{----}}
    <div class="content_top">
        <div class="container">
            <div class="col-md-3 sidebar_box">
                @include('home.public.aside')
            </div>
            {{--右边商品栏目--}}
            <div class="col-md-9 content_right">
                @include('home.index.goods')
            </div>
        </div>
    </div>
</div>
<div class="footer_bg">
</div>
<div class="footer">
    @include('home.public.footer')
</div>
<div class="footer_bottom">
    @include('home.public.footerbottom')
</div>
</body>
</html>
