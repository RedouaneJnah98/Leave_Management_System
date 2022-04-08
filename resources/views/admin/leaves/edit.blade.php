@extends('layouts.app')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Employee Leave</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Employee Leave</li>
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
                                <form action="{{ route('admin.leaves.update', $leave->id) }}" method="post" class="form">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="id_number" class="form-label">ID Number</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                              <i class="fa fa-hashtag"></i>
                                                          </span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="id_number" value="{{ $leave->employee->id_number }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first_name" class="form-label">First Name</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                             <i class="fa fa-user"></i>
                                                          </span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="first_name" value="{{ $leave->employee->first_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="last_name" class="form-label">Last Name</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-user"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="last_name" value="{{ $leave->employee->last_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="contact" class="form-label">Contact</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone-alt"></i>
                                                    </span>
                                                    <input type="text" class="form-control" value="{{ $leave->employee->contact }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="email" value="{{ $leave->employee->email }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                                          </span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="username" value="{{ $leave->employee->username }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="gender" class="form-label">Gender</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-key"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="gender" value="{{ $leave->employee->gender }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="department" class="form-label">Department</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-building"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="department" value="{{ $leave->employee->department->department_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="designation" class="form-label">Designation</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-key"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="designation" value="{{ $leave->employee->designation->designation_description }}"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="from" class="form-label">From date</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="from" value="{{ $leave->from_date }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="to_date" class="form-label">To Date</label>
                                                <div class="input-group">
                                                          <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i></span>
                                                    <input type="text"
                                                           class="form-control"
                                                           id="to_date" value="{{ $leave->to_date }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="status" class="form-label">Status</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="approved">Approved</option>
                                                        <option value="not approved">Not Approved</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="remark" class="form-label">Remark</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="remark" id="remark">
                                                    <option disabled selected>choose Remark</option>
                                                    <option>Waiting for approval...</option>
                                                    <option>Leave has been approved.</option>
                                                    <option>Leave has been rejected.</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end mt-4">
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
