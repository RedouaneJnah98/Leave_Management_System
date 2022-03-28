@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Department</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>

        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.designation.store') }}" method="post" class="form form-vertical">
                                    @method('POST')
                                    @csrf

                                    @if($fail = session('fail'))
                                        <div class="alert alert-danger">
                                            {{ $fail }}
                                        </div>
                                    @endif
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon" class="form-label">Department Short Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-table"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('department_short_name') is-invalid @enderror" name="department_short_name"
                                                               placeholder="Input Department" id="first-name-icon" value="{{ old('department_short_name') }}">
                                                        @error('department_short_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-icon" class="form-label">Department Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-table"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name"
                                                               placeholder="Input Department Name" id="email-id-icon" value="{{ old('department_name') }}">
                                                        @error('department_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Vertical form layout section end -->
    </div>
@endsection
