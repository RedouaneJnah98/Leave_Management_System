@extends('layouts.app')
@section('main-home')

    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Manage User</li>
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
                            <th>Full Name</th>
                            <th>Contact</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->contact }}</td>
                                <td>{{ $admin->admin_category }}</td>
                                @if ($admin->admin_status === 'Active')
                                    <td><span class="badge bg-success">{{ $admin->admin_status }}</span></td>
                                @else
                                    <td><span class="badge bg-danger">{{ $admin->admin_status }}</span></td>
                                @endif
                                <td class="d-flex">
                                    <a href="{{ route('admin.users.edit', $admin->id) }}" class="me-2">
                                        <button class="btn btn-info btn-sm">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.users.destroy', $admin->id) }}" method="post" id="form-destroy">
                                    @method('DELETE')
                                    @csrf
                                    <!-- we should use button -->
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center flex-column">
                        {{ $admins->links() }}
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
        // This is responsible for hide alert notification after 3s
        $('#success-alert, #danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection

