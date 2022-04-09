@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pending</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pending</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    @if($delete = session('delete'))
                        <div class="alert alert-danger" id="danger-alert">
                            {{ $delete }}
                        </div>
                    @endif
                    <table class='table' id="table1">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Leave Type</th>
                            <th>Posting Date</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($pending_leaves as $row)
                            <tr>
                                <td>{{ $row->employee->first_name . ' ' . $row->employee->last_name }}</td>
                                <td>{{ $row->leaveType->leave_name }}</td>
                                <td>{{ $row->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <span class="badge bg-info">{{ ucfirst($row->leave_status) }}</span>
                                </td>
                                <td>
                                    <form action="{{ route('admin.leaves.destroy', $row->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection

@section('page-js-files')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
@endsection

@section('page-js-field')
    <script>
        $('#danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection
