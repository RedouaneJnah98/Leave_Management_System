@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Leave Type</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Leave Type</li>
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
                                <form action="{{ route('admin.leave_type.update', $leave_type->id) }}" method="post" class="form form-vertical">
                                    @method('PUT')
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
                                                    <label class="form-label">Leave Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-table"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('leave_name') is-invalid @enderror"
                                                               name="leave_name" value="{{ $leave_type->leave_name }}"
                                                               placeholder="Input leave type">
                                                        @error('leave_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Description</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-table"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('leave_description') is-invalid @enderror"
                                                               name="leave_description"
                                                               placeholder="Input Description" value="{{ $leave_type->leave_description }}">
                                                        @error('leave_description')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Number of days Allowed</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-table"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('number_days_allowed') is-invalid @enderror"
                                                               name="number_days_allowed"
                                                               placeholder="Input days allowed" value="{{ $leave_type->number_days_allowed }}">
                                                        @error('number_days_allowed')
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
