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
                                                <label for="id_number" class="form-label">ID Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-hashtag"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number"
                                                           placeholder="id number" id="id_number"
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
                                                <label for="gender" class="form-label">Gender</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="gender" id="gender">
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
                                                <label for="first_name" class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                           name="first_name" placeholder="first name" id="first_name"
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
                                                <label for="middle_name" class="form-label">Middle Name</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                                           name="middle_name" placeholder="middle name"
                                                           id="middle_name" value="{{ old('middle_name') }}">
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
                                                <label for="last_name" class="form-label">Last Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                           placeholder="last name" id="last_name"
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
                                                <label for="age" class="form-label">Age</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
                                                           placeholder="age" id="age" value="{{ old('age')
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
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                                           placeholder="email" id="email" value="{{ old
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
                                                <label for="contact" class="form-label">Contact</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"
                                                           placeholder="contact" id="contact"
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
                                                <label for="image_profile" class="form-label">Profile</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="file" class="form-control @error('image_profile') is-invalid @enderror" name="image_profile"
                                                           placeholder="" id="image_profile" value="{{ old
                                                    ('profile') }}">
                                                    @error('image_profile')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="department">Department</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="department_id" id="department">
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
                                                <label class="form-label" for="designation">Designation</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="designation_id" id="designation">
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
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group">
                                                      <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                                           placeholder="username" id="username"
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
                                                <label for="status" class="form-label">Status</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">
                                                        <option disabled selected>Choose Status</option>
                                                        <option>Active</option>
                                                        <option>Not active</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                     <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                           name="password" placeholder="password" id="password">
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
