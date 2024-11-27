@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Manage Will | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estate Planning</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Will</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Wills</h1>
            </div>
            <div class="btn-list">
                {{-- <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button> --}}
                <button class="btn btn-primary btn-wave me-0">
                    <a href="{{ url('estate-planning/will/create') }}"><i class="ri-add-line me-1"></i> Add New</a>
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-nowrap table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Document</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2022R-01</th>
                        <td>27-010-2022</td>
                        <td>Monaco Estate</td>
                        <td>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                            </button>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-delete-bin-6-line align-middle me-2 d-inline-block"></i>Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2022R-02</th>
                        <td>28-10-2022</td>
                        <td>Lifetong Assets and Share</td>
                        <td>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                            </button>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-delete-bin-6-line align-middle me-2 d-inline-block"></i>Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2022R-03</th>
                        <td>22-10-2022</td>
                        <td>After Death in Hospital</td>
                        <td>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                            </button>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-delete-bin-6-line align-middle me-2 d-inline-block"></i>Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2022R-04</th>
                        <td>29-09-2022</td>
                        <td>Accident</td>
                        <td>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                            </button>
                            <button class="btn btn-sm btn-success btn-wave">
                                <i class="ri-delete-bin-6-line align-middle me-2 d-inline-block"></i>Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
@endsection
