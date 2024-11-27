@extends('layouts.master')
{{-- <title>Dashboard | {{ env('APP_NAME', 'Framework') }}</title> --}}
@section('title', 'Beneficiary | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Estate Planning
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Beneficiaries</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add Beneficiary</h1>
            </div>
            {{-- <div class="btn-list">
                <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div> --}}
        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-2 text-muted">First Name:</p>
                    <input type="text" class="form-control" id="input-first-name">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="input-last-name">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-relationship" class="form-label">Relationship</label>
                    <input type="text" class="form-control" id="input-relationship" placeholder="Relationship">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="input-phone" placeholder="+1100-2031-1233">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-file" class="form-label">Image</label>
                    <input class="form-control" type="file" id="input-file">
                </div>
        
                <!-- Button Column -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center">
                    <input type="reset" class="btn btn-secondary me-2" id="input-reset" value="Reset">
                    <input type="button" class="btn btn-primary" id="input-submit" value="Submit">
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        {{-- Dev::row-2 --}}
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row gy-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <p class="mb-2 text-muted">First Name:</p>
                                <input type="text" class="form-control" id="input-first-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-last-name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="input-last-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-relationship" class="form-label">Relationship</label>
                                <input type="text" class="form-control" id="input-relationship" placeholder="Relationship">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="input-phone" placeholder="+1100-2031-1233">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-file" class="form-label">Image</label>
                                <input class="form-control" type="file" id="input-file">
                            </div>
        
                            <!-- Button Column -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center">
                                <input type="reset" class="btn btn-secondary me-2" id="input-reset" value="Reset">
                                <input type="button" class="btn btn-primary" id="input-submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Dev::end-row-1 --}}


    </div>
@endsection
