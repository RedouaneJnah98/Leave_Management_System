@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add User</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post" class="form">
                                    @method('POST')
                                    @if ($success = session('success'))
                                        <div class="alert alert-success">
                                            {{ $success }}
                                        </div>
                                    @elseif($fail = session('fail'))
                                        <div class="alert alert-danger">
                                            {{ $fail }}
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-user"></i></span>
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           id="name"
                                                           name="name" placeholder="name" value="{{ old('name') }}">
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="contact" class="form-label">Contact</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-user"></i></span>
                                                    <input type="text"
                                                           class="form-control @error('contact') is-invalid @enderror"
                                                           id="contact"
                                                           name="contact" placeholder="contact"
                                                           value="{{ old('contact') }}">
                                                    @error('contact')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-envelope"></i></span>
                                                    <input type="text"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           id="email" name="email" placeholder="email"
                                                           value="{{ old('email') }}">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-user"></i></span>
                                                    <input type="text"
                                                           class="form-control @error('username') is-invalid @enderror"
                                                           id="username"
                                                           name="username" placeholder="username"
                                                           value="{{ old('username') }}">
                                                    @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-key"></i></span>
                                                    <input type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           id="password"
                                                           name="password" placeholder="password"
                                                           value="{{ old('password') }}">
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Admin Status</label>
                                                <select class="form-select" name="admin_status">
                                                    <option>Active</option>
                                                    <option>Not active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="has-icon-left form-group">
                                                <label class="form-label">Admin Category</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="admin_category">
                                                            <option>Admin</option>
                                                            <option>Staff</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
@endsection
