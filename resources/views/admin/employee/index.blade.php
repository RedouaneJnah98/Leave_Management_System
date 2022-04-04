@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage Employee</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Employee</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    @if($success = session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ $success }}
                        </div>
                    @elseif($delete = session('delete'))
                        <div class="alert alert-danger" id="danger-alert">
                            {{ $delete }}
                        </div>
                    @endif
                    <table class='table'>
                        <thead>
                        <tr>
                            <th>Emp ID</th>
                            <th>Title</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Reg Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{  $employee->id_number }}</td>
                                <td>{{ $employee->middle_name  }}</td>
                                <td>{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                                <td>{{ $employee->department->department_name }}</td>
                                <td>
                                    @if($employee->status === 'Active')
                                        <span class="badge bg-success">{{ $employee->status }}</span>
                                    @elseif($employee->status === 'Not active')
                                        <span class="badge bg-danger">{{ $employee->status }}</span>
                                    @endif
                                </td>
                                <td>{{ date('d-m-Y', strtotime($employee->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('admin.employee.edit', $employee->id) }}" class="text-info"><i class="fa fa-pen"></i></a>
                                    <!-- we use employee id to specify which employee we want to delete if we didn't put the id the destroy method will delete the first employee from DB -->
                                    <a href="{{ route('admin.employee.destroy', $employee->id) }}" class="text-danger"
                                       onclick="event.preventDefault();document.getElementById('form-destroy-{{
                                    $employee->id }}').submit();"><i
                                            class="fa
                                    fa-trash"></i></a>
                                    <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="post"
                                          id="form-destroy-{{ $employee->id }}">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center flex-column">
                        {{ $employees->links() }}
                    </div>
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
        $('#success-alert, #danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection

