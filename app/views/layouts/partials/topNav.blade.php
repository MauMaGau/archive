<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li {{ Route::currentRouteName() === 'dashboard' ? 'class="active"' : '' }}><a href="{{ url('/') }}">Dashboard</a></li>
                    <li {{ Route::currentRouteName() === 'admin.magazine' ? 'class="active"' : '' }}><a href="{{ route('admin.magazine') }}">All Magazines</a></li>
                    <li {{ Route::currentRouteName() === 'admin.magazine.create' ? 'class="active"' : '' }}><a href="{{ route('admin.magazine.create') }}">Add Magazine</a></li>
                </ul>
            </li>

            <li>
                {{ link_to_route('magazine', 'Magazines') }}
            </li>

            <li><a href="{{ url('logout') }}">Logout</a></li>
        </ul>
    </div>
</nav>