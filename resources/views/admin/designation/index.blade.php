@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage Designation</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Designation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <!-- Alert message -->
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
                            <th>Designation Name</th>
                            <th>Description</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($designations as $designation)
                            <tr>
                                <td>{{ $designation->designation_name }}</td>
                                <td>{{ $designation->designation_description }}</td>
                                <td>{{ date('d-m-Y', strtotime($designation->created_at)) }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.designation.edit', $designation->id) }}" class="me-2">
                                        <button class="btn btn-info btn-sm">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.designation.destroy', $designation->id) }}" method="post">
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
        $('#success-alert, #danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection

