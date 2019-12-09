<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        عقارات|
        @yield('title')
    </title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/arstyle.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    @yield('head')
</head>
<body style="direction: rtl">
    {{--nave--}}
        <div class="header" >
        @include('layouts.nav')
        </div>
        {{-- banner --}}
        @if(Auth::user())
            @include('layouts.banner')
        @endif
        @yield('content')
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
      <script type="text/javascript" src="{{asset('public/js/responsive-nav.js')}}"></script>

</body>
    @yield('foot')
    @include('layouts.footer')
</html>
