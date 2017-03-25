<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{URL::asset('/')}}img/favicon_1.ico">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>@section('title') 兄弟连CRM客户关系管理 @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show

    @include('admin.public.styles')

    @yield('styles')
</head>


<body>
<div class="wrapper-page animated fadeInDown">

    <div class="ex-page-content animated flipInX text-center">
        <h1>消息</h1>
        @if(!is_string($errors))
            @if(count($errors) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <h3 class="font-light">{{$error}}</h3>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @else
            @if(!empty($error))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            <h3 class="font-light">{{$error}}1</h3>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        @if(isset($title))
        <h2 class="font-light">{{ $title }}</h2><br>

        <a class="btn btn-purple m-t-20" href="{{ $url }}"><i class="fa fa-angle-left"></i> 返回</a>
        @else
        <a class="btn btn-purple m-t-20" href="{{ url('/index') }}"><i class="fa fa-angle-left"></i> 返回</a>
        @endif

    </div>

</div>

@include('admin.public.script')
@yield('script')


</body>
</html>
