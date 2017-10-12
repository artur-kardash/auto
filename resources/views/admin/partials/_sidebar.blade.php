   <div class="navbar-default sidebar" role="navigation">
		<div class = "sidebar-collapse">
        <ul class="nav" id="side-menu" class="light-logo" style="margin-top:10px; ">
		     <li>
                <img src="{{ asset('img/p10.png') }}" alt="home" class="light-logo" style="width:90%; padding:10px;"/>
             </li>
            <li>
                <a href="{{ route('admin.index') }}" class="waves-effect{{ Request::is('admin') ? 'active-menu' : '' }}">
                    <i class="mdi mdi-settings fa-fw"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</div>
