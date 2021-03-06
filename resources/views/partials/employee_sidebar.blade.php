<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header" style="height: 50px;margin-top: -30px">
            <i class="fa fa-users text-success me-4"></i>
            <span>ELMS</span>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active ">
                    <a href="{{ route('employee.home') }}" class='sidebar-link'>
                        <i class="fa fa-home text-success"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('employee.application_leave') }}" class='sidebar-link'>
                        <i class="fa fa-plane text-success"></i>
                        <span>Apply Leave</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('employee.applications') }}" class='sidebar-link'>
                        <i class="fa fa-plane text-success"></i>
                        <span>Leave Status</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
