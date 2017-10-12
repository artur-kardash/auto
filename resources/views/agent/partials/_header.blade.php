<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part" style = "height:60px; width:200px;">
            <!-- Logo -->
					<a class="logo" href="{{ route('home') }}">
                <!-- Logo icon image, you can use font-icon also -->
                    <!--This is light logo icon--><img src="{{ asset('img/admin-logo.png') }}" alt="home" class="light-logo" />

            </a>
        </div>

        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    @if ((Session::has('success')) || (count($errors)>0))
                        <span id="header-message-count">1</span>
                    @else
                        <span id="header-message-count"></span>
                    @endif
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY" id="dropdown-messages">
                    @if (Session::has('success'))
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Success:</strong>
                                <span class="pull-right text-muted">
                                    <em>Today</em>
                                </span>
                                </div>
                                <div>{{ Session::get('success') }}</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    @endif

                    @if (count($errors)>0)
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Помилки:</strong>
                                <span class="pull-right text-muted">
                                    <em>Today</em>
                                </span>
                                </div>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </a>
                        </li>
                        <li class="divider"></li>
                    @endif
                    <li>
                        <a class="text-center" href="#">
                            <strong>No System Notifications</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>

                <!-- /.dropdown-messages -->
            </li>
            <li class="dropdown">
                {{--user img--}}
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    {{--<img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle">--}}
                    <i class="fa fa-user fa-fw"></i>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
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
</nav>


