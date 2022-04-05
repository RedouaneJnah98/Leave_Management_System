@extends('layouts.app_employee')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Apply for Leave</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leave Application</li>
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
                                <form action="{{ route('employee.application') }}" method="post" class="form">
                                    @csrf

                                    @if($fail = session('fail'))
                                        <div class="alert alert-danger">
                                            {{ $fail }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Reference Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-hashtag"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('reference_number') is-invalid @enderror"
                                                           name="reference_number"
                                                           placeholder="id number">
                                                    @error('reference_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Select Leave Type</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="leave_type">
                                                            <option selected disabled>Leave Type</option>
                                                            @foreach($leave_types as $leave_type)
                                                                <option value="{{ $leave_type->id }}">{{ $leave_type->leave_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">From Date</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar-alt"></i>
                                                    </span>
                                                    <input type="date" class="form-control @error('from_date') is-invalid @enderror" name="from_date"
                                                           placeholder="first name">
                                                    @error('from_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group ">
                                                <label class="form-label">To Date</label>
                                                <div class="input-group">
                                                    <spna class="input-group-text">
                                                        <i class="fa fa-calendar-alt"></i>
                                                    </spna>
                                                    <input type="date" class="form-control @error('to_date') is-invalid @enderror" name="to_date"
                                                           placeholder="first name">
                                                    @error('to_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end mt-3">
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
