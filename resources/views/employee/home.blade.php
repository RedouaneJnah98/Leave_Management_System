@extends('layouts.app_employee')
@section('main-home')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <i class="fa fa-plane text-success fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Leave</h4>
                                        <h2 class="h1 mb-0">{{ $leaves }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <i class="fa fa-check text-info fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Approved</h4>
                                        <h2 class="h1 mb-0">{{ $approved }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <i class="fa fa-info text-warning fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Pending</h4>
                                        <h2 class="h1 mb-0">{{ $pending }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <i class="fa fa-trash text-danger fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Canceled</h4>
                                        <h2 class="h1 mb-0">{{ $not_approved }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
