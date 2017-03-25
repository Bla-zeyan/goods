<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>
    {{--引入CSS--}}
    @include('admin.public.styles')
    @yield('styles')
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>


<body>
{{--引入侧边栏--}}
@include('admin.public.aside')
        <!--主内容 -->
<section class="content">
    {{--引入header--}}
    @include('admin.public.header')
    <div class="wraper container-fluid">
        <div class="page-title">
            <h3 class="title">@yield('page-title')</h3>
        </div>
        @yield('content')
        {{--引入sweet-alert--}}
        @include('admin.public.sweet-alert')
        @include('admin.public.sweet-form')
    </div>
    {{--引入底部--}}
    @include('admin.public.footer')
</section>
{{--引入JS--}}
@include('admin.public.script')
@include('admin.public.table_script')
</body>
</html>
