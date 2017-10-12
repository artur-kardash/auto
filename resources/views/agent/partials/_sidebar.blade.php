<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu" style = "margin-top:10px; margin-left:10px"> 
            <li>
				<img src="{{ asset('img/p10.png') }}" alt="home" class="light-logo" style="width:90%; padding:10px;"/>
            </li>
            <li>
                <a class="{{ Request::is('agent') ? 'active-menu' : '' }}" href="{{ route('agent.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
			                 
            <li>
                <a class="{{ Request::is('agent/dashboard') ? 'active-menu' : '' }}" href="{{route('auto.index')}}" >
                <i class="glyphicon glyphicon-list-alt"></i> All Auto</a>
            </li>
        </ul>
    </div>
</div>