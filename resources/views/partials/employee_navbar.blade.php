<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">

            <li class="dropdown">
                <a href="#" data-bs-toggle="dropdown"
                   class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar me-1">
                        <img src="{{ auth()->user()->image_profile }}" alt="user image">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">Hi, {{ auth()->user()->username }}</div>
                </a>
                <div class=" dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="update.html"><i data-feather="user"></i> Account</a>
                    <a class="dropdown-item" href="update_password.html"><i data-feather="settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('employee.logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>
                        Logout</a>
                    <form action="{{ route('employee.logout') }}" method="post" id="logout-form">@csrf</form>
                </div>
            </li>
        </ul>
    </div>
</nav>
