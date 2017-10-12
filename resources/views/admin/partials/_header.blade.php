<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part"  style = "height:60px; width:240px;">
            <!-- Logo -->
                <a class="logo" href="{{ route('home') }}">
                <!-- Logo icon image, you can use font-icon also -->
                <!--This is light logo icon--> <img src="{{ asset('img/admin-logo.png') }}" alt="home" class="light-logo" />
                </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        {{--@if (Auth::user())--}}
        {{--<ul class="nav navbar-top-links navbar-left">--}}
            {{--<li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>--}}
            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">--}}
                    {{--<i class="mdi mdi-gmail"></i>--}}
                    {{--<div class="notify">--}}
                        {{--<span class="heartbit"></span>--}}
                        {{--<span class="point"></span>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu mailbox animated bounceInDown">--}}
                    {{--<li>--}}
                        {{--<div class="drop-title">You have 4 new messages</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="message-center">--}}
                            {{--<a href="#">--}}
                                {{--<div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>--}}
                                {{--<div class="mail-contnet">--}}
                                    {{--<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
                {{--<!-- /.dropdown-messages -->--}}
            {{--</li>--}}
            {{--<!-- .Task dropdown -->--}}

        {{--</ul>--}}
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                {{--user img--}}
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    {{--<img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle">--}}
                    <b class="hidden-xs">User</b>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    {{--<li>--}}
                        {{--<div class="dw-user-box">--}}
                            {{--<div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div>--}}
                            {{--<div class="u-text">--}}
                                {{--<h4>Steave Jobs</h4>--}}
                                {{--<p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#"><i class="ti-user"></i> My Profile</a></li>--}}
                    {{--<li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>--}}
                    {{--<li><a href="#"><i class="ti-email"></i> Inbox</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;" >
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>







{{--<nav class="navbar navbar-default top-navbar" role="navigation">--}}
    {{--<div class="navbar-header">--}}
        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">--}}
            {{--<span class="sr-only">Toggle navigation</span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
        {{--</button>--}}
        {{--<a class="head-logo" href="{{ route('home') }}"></a>--}}
        {{--<a class="navbar-brand" style="position:relative; top:3px; left:-20px;" href="{{ route('home') }}">--}}
            {{--&nbsp Dashboard--}}
        {{--</a>--}}
    {{--</div>--}}

    {{--@if (Auth::user())--}}
    {{--<ul class="nav navbar-top-links navbar-right">--}}
        {{--<li class="dropdown">--}}
            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">--}}
                {{--@if ((Session::has('success')) || (count($errors)>0))--}}
                    {{--<span id="header-message-count">1</span>--}}
                {{--@else--}}
                    {{--<span id="header-message-count"></span>--}}
                {{--@endif--}}
                {{--<i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
            {{--</a>--}}
            {{--<ul class="dropdown-menu dropdown-messages" id="dropdown-messages">--}}
                {{--@if (Session::has('success'))--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<strong>Success:</strong>--}}
                                {{--<span class="pull-right text-muted">--}}
                                    {{--<em>Today</em>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                            {{--<div>{{ Session::get('success') }}</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                {{--@endif--}}

                {{--@if (count($errors)>0)--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div>--}}
                                {{--<strong>Помилки:</strong>--}}
                                {{--<span class="pull-right text-muted">--}}
                                    {{--<em>Today</em>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                            {{--@foreach ($errors->all() as $error)--}}
                                {{--<div>{{ $error }}</div>--}}
                            {{--@endforeach--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                {{--@endif--}}
                {{--<li>--}}
                    {{--<a class="text-center" href="#">--}}
                        {{--<strong>No System Notifications</strong>--}}
                        {{--<i class="fa fa-angle-right"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--<!-- /.dropdown-messages -->--}}
        {{--</li>--}}
        {{--<!-- /.dropdown -->--}}

        {{--<li class="dropdown">--}}
            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">--}}
                {{--<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
            {{--</a>--}}
            {{--<ul class="dropdown-menu dropdown-user">--}}
                {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                {{--</li>--}}
                {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                {{--</li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li>--}}
                    {{--<a href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                             {{--document.getElementById('logout-form').submit();">--}}
                        {{--<span class="glyphicon glyphicon-log-out"> </span> Logout--}}
                    {{--</a>--}}

                    {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;" >--}}
                        {{--{{ csrf_field() }}--}}
                    {{--</form>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<!-- /.dropdown-user -->--}}
        {{--</li>--}}
        {{--<!-- /.dropdown -->--}}
    {{--</ul>--}}
    {{--@endif--}}
{{--</nav>--}}