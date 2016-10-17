<nav class="navbar theme-default">
    <div class="container-fluid">
        <div class="navbar-header navbar-top-button">
            <a class="minimize_btn btn btn-primary" href="#"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-right navbar-top-links">
            <li class="messages"><a href="#"><i class="fa fa-envelope"></i><span class="label label-warning">77</span></a></li>
            <li class="notifications"><a href="#"><i class="fa fa-bell"></i></a><span class="label label-primary">25</span></li>
            <li class="dropdown profile-settings">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="avatar" src="<?= asset('admin-be/images/avatar.jpg'); ?>" alt="Profile">
                    <span class="name">Alexander</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i></a>
                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>
