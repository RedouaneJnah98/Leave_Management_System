<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header" style="height: 50px;margin-top: -30px">
            <i class="fa fa-users text-success me-4"></i>
            <span>ELMS</span>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active ">
                    <a href="{{ route('admin.home') }}" class='sidebar-link'>
                        <i class="fa fa-home text-success"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-building text-success"></i>
                        <span>Department</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.department.create') }}">Add Department</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.department.index') }}">Manage Department</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Designation</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.designation.create') }}">Add Designation</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.designation.index') }}">Manage Designation</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-users text-success"></i>
                        <span>Employees</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.employee.create') }}">Add Employee</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.employee.index') }}">Manage Employee</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Leave Type</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.leave_type.create') }}">Add Leave Type</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.leave_type.index') }}">Manage Leave Type</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Leave Management</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.leaves.index') }}">All Leaves</a>
                        </li>
                        <li>
                            <a href="pending_leave.html">Pending Leaves</a>
                        </li>
                        <li>
                            <a href="approve_leave.html">Approve Leaves</a>
                        </li>
                        <li>
                            <a href="not_approve_leave.html">Not Approve Leaves</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-user text-success"></i>
                        <span>Users</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.users.create') }}">Add User</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.index') }}">Manage Users</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a href="reports.html" class='sidebar-link'>
                        <i class="fa fa-chart-bar text-success"></i>
                        <span>Reports</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
