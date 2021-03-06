<!doctype html>
<html lang="{!! LaravelLocalization::getCurrentLocale() !!}">
<head>
    @include('partials.metadata')
</head>
<body>

    <div class="preloader">
        <div class="loader">
            {{--<div class="loader__figure"></div>--}}
            <p class="loader__label m-t-10"><img src="{!! Theme::url('images/logo/logo.svg') !!}" alt="{{ setting('theme::company-name') }}" height="100" /></p>
        </div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

@include('partials.scripts')
@include('core::cookie-law')

</body>
</html>
