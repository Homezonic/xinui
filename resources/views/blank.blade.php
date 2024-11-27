@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Empty | ' . env('APP_NAME', 'Framework'))
@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-xl-12 mt-xl-3">
        <div class="card custom-card">
            <div class="card-body">
                <h6 class="mb-0">THIS IS AN EMPTY PAGE</h6>
            </div>
        </div>
    </div>
</div>


</div>
  @endsection
