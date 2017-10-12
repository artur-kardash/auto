<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

<body class="fix-header">

{{--<!-- Preloader -->--}}
{{--<div class="preloader">--}}
    {{--<svg class="circular" viewBox="25 25 50 50">--}}
        {{--<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />--}}
    {{--</svg>--}}
{{--</div>--}}

<div id="wrapper">
    @include('admin.partials._header')
    @include('admin.partials._sidebar')

    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>

        @include('admin.partials._footer')

    </div>

</div>

@include('admin.partials._javascripts')

</body>
</html>




{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--@include('admin.partials._head')--}}

{{--<body>--}}

{{--<div id="wrapper">--}}
    {{--@include('admin.partials._header')--}}
    {{--@include('admin.partials._sidebar')--}}

    {{--<div id="page-wrapper">--}}
        {{--<div id="page-inner">--}}

            {{--@yield('breadcrumbs')--}}

            {{--@yield('content')--}}

            {{--@include('admin.partials._footer')--}}

        {{--</div>--}}
        {{--<!-- /. PAGE INNER  -->--}}
    {{--</div>--}}
    {{--<!-- /. PAGE WRAPPER  -->--}}
{{--</div>--}}
{{--@include('admin.partials._javascripts')--}}


{{--</body>--}}
{{--</html>--}}