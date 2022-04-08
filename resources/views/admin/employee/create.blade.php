@extends('layouts.app')
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
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
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
                                <form action="{{ route('admin.employee.store') }}" method="post" class="form" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf

                                    @if($fail = session('fail'))
                                        <div class="alert alert-danger">
                                            {{ $fail }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">ID Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-hashtag"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number"
                                                           placeholder="id number" id="first-name-icon"
                                                           value="{{ old('id_number') }}">
                                                    @error('id_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Gender</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="gender" id="basicSelect">
                                                            <option disabled selected>Choose Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                           name="first_name" placeholder="first name" id="first-name-icon"
                                                           value="{{ old('first_name') }}">
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
                                                           id="first-name-icon" value="{{ old('middle_name') }}">
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
                                                           value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Age</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
                                                           placeholder="age" id="first-name-icon" value="{{ old('age')
                                                    }}">
                                                    @error('age')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                                           placeholder="email" id="first-name-icon" value="{{ old
                                                    ('email') }}">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Contact</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"
                                                           placeholder="contact" id="first-name-icon"
                                                           value="{{ old('contact') }}">
                                                    @error('contact')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Profile</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="file" class="form-control @error('profile') is-invalid @enderror" name="profile"
                                                           placeholder="" id="first-name-icon" value="{{ old
                                                    ('profile') }}">
                                                    @error('profile')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Deapartment</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="department">
                                                        <option disabled selected>Department</option>
                                                        @foreach($departments as $department)
                                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Designation</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="designation">
                                                        <option disabled selected>Designation</option>
                                                        @foreach($designations as $designation)
                                                            <option value="{{ $designation->id }}">{{ $designation->designation_description
                                                            }}</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
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
                                                <label for="company-column" class="form-label">Status</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="basicSelect">
                                                        <option disabled selected>Choose Status</option>
                                                        <option>Active</option>
                                                        <option>Not active</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon" class="form-label">Password</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                           name="password" placeholder="passsword" id="first-name-icon">
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mt-3 me-1 mb-1">Submit</button>
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
