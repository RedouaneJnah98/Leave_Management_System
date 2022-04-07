@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Leave Application</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leave Application</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class='table' id="table1">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Leave Type</th>
                            <th>Posting Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leave_applications as $row)
                            <tr>
                                <td>{{ $row->employee->first_name . ' ' . $row->employee->last_name }}</td>
                                <td>{{ $row->leaveType->leave_name }}</td>
                                <td>{{ $row->created_at->toFormattedDateString() }}</td>
                                <td>
                                    @if($row->leave_status === 'pending')
                                        <span class="badge bg-info">Pending</span>
                                    @elseif($row->leave_status === 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($row->leave_status === 'not approved')
                                        <span class="badge bg-danger">Not Approved</span>
                                    @endif
                                </td>
                                <td><a href="editDesignation.php"><i class="fa fa-eye text-success"></i></a></td>
                            </tr>
                        @endforeach
                        {{--                        <tr>--}}
                        {{--                            <td>Juan Dela Cruz</td>--}}
                        {{--                            <td>Sick Leave</td>--}}
                        {{--                            <td>2021-11-01</td>--}}
                        {{--                            <td>--}}
                        {{--                                <span class="badge bg-info">Pending</span>--}}
                        {{--                            </td>--}}
                        {{--                            <td><a href="editDesignation.php"><i class="fa fa-eye text-success"></i></a></td>--}}
                        {{--                        </tr>--}}
                        {{--                        <tr>--}}
                        {{--                            <td>Cardo Dalisay</td>--}}
                        {{--                            <td>Medical Leave</td>--}}
                        {{--                            <td>2021-11-01</td>--}}
                        {{--                            <td>--}}
                        {{--                                <span class="badge bg-danger">Not Approved</span>--}}
                        {{--                            </td>--}}
                        {{--                            <td><a href="editDesignation.php"><i class="fa fa-eye text-success"></i></a></td>--}}
                        {{--                        </tr>--}}
                        {{--                        <tr>--}}
                        {{--                            <td>John Doe</td>--}}
                        {{--                            <td>Sick Leave</td>--}}
                        {{--                            <td>2021-11-01</td>--}}
                        {{--                            <td>--}}
                        {{--                                <span class="badge bg-success">Approved</span>--}}
                        {{--                            </td>--}}
                        {{--                            <td><a href="editDesignation.php"><i class="fa fa-eye text-success"></i></a></td>--}}
                        {{--                        </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
