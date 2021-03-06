@extends('layouts.header')

<div id="auth">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h3>Employee Sign In</h3>
                        </div>
                        <form action="{{ route('employee.check') }}" method="post">
                            @csrf

                            @if($fail = session('fail'))
                                <div class="alert alert-danger">
                                    {{ $fail }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                                <i class="fa fa-user"></i></span>
                                    <input type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           id="username"
                                           name="username" placeholder="name" value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
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

                            <div class="form-check">
                                <label for="remember_me" class="form-check-label">Remember me</label>
                                <input type="checkbox" name="remember_me" id="remember_me" class="form-check-input">
                            </div>

                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@extends('layouts.footer')
