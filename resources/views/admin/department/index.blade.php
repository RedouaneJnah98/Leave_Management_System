@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage Department</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
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
                    <table class='table' id="table1">
                        <thead>
                        <tr>
                            <th>Department Name</th>
                            <th>Department Short Name</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->department_short_name }}</td>
                                <td>{{ date('d-m-Y', strtotime($department->created_at)) }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.department.edit', $department->id) }}" class="me-2">
                                        <button class="btn btn-info btn-sm">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.department.destroy', $department->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
        $('#success-alert, #danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection

