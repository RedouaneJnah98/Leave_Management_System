@extends('layouts.app_employee')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Employee</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('employee.home') }}" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
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
                                <form action="{{ route('employee.account.update', $employee->id) }}" method="post" class="form" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    @if($fail = session('fail'))
                                        <div class="alert alert-danger" id="danger-alert">
                                            {{ $fail }}
                                        </div>
                                    @elseif($success = session('success'))
                                        <div class="alert alert-success" id="success-alert">
                                            {{ $success }}
                                        </div>
                                    @endif

                                    @if($fail = session('fail'))
                                        <div class="alert alert-danger">
                                            {{ $fail }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                           name="first_name" placeholder="first name" id="first-name-icon"
                                                           value="{{ $employee->first_name }}">
                                                    @error('first_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Middle Name</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                                           name="middle_name" placeholder="middle name"
                                                           id="first-name-icon" value="{{ $employee->middle_name  }}">
                                                    @error('middle_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Last Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                           placeholder="last name" id="first-name-icon"
                                                           value="{{ $employee->last_name  }}">
                                                    @error('last_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Age</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
                                                           placeholder="age" id="first-name-icon" value="{{ $employee->age  }}">
                                                    @error('age')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                                           placeholder="email" id="first-name-icon" value="{{ $employee->email  }}">
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
                                                <label for="first-name-icon" class="form-label">Contact</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"
                                                           placeholder="contact" id="first-name-icon"
                                                           value="{{ $employee->contact }}">
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
                                                <label for="first-name-icon" class="form-label">Profile</label>
                                                <div class="input-group">
                                                                                            <span class="input-group-text">
                                                                                                <i class="fa fa-user"></i>
                                                                                            </span>
                                                    <input type="file" class="form-control @error('profile') is-invalid @enderror" name="image_profile"
                                                           placeholder="" id="first-name-icon">
                                                    @error('profile')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Username</label>
                                                <div class="input-group">
                                                      <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                                           placeholder="username" id="first-name-icon"
                                                           value="{{ $employee->username }}">
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
                                                <label for="first-name-icon" class="form-label">Gender</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="gender" id="basicSelect">
                                                            <option selected>{{ $employee->gender }}</option>
                                                            <option>Female</option>
                                                            <option>Male</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mt-3 me-1 mb-1">Update</button>
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

@section('page-js-files')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
@endsection

@section('page-js-field')
    <script>
        $('#success-alert, #danger-alert').delay(3000).fadeOut(500);
    </script>
@endsection
