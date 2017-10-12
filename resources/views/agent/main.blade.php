<!DOCTYPE html>
<html lang="en">

@include('agent.partials._head')

<body>

@if(isset(Auth::user()->agent->agency))
<div id="wrapper"
     style="background: {{is_null(Auth::user()->agent->agency->color_side)?'#09192A':'#'.Auth::user()->agent->agency->color_side}}"
>
@else
    <div id="wrapper">
@endif
    @include('agent.partials._header')
    @include('agent.partials._sidebar')

    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('breadcrumbs')

            @yield('content')

            @include('agent.partials._footer')

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
@include('agent.partials._javascripts')


</body>
</html>