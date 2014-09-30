<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li {{ Route::currentRouteName() === 'dashboard' ? 'class="active"' : '' }}><a href="{{ url('/') }}">Dashboard</a></li>
            <li {{ Route::currentRouteName() === 'admin.magazine' ? 'class="active"' : '' }}><a href="{{ route('admin.magazine') }}">All Magazines</a></li>

            <li {{ Route::currentRouteName() === 'admin.magazine.create' ? 'class="active"' : '' }}><a href="{{ route('admin.magazine.create') }}">Add Magazine</a></li>


            <li><a href="{{ url('logout') }}">Logout</a></li>
        </ul>
    </div>
</nav>