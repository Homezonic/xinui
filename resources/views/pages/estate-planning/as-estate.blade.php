@extends('layouts.master')
{{-- <title>Account Summary: Estate Planning | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Account Summary: Estate Planning | ' . env('APP_NAME', 'Framework'))
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
                        <li class="breadcrumb-item active" aria-current="page">Account Summary</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Overview</h1>
            </div>
        </div>
        <!-- End::page-header -->

        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body pb-0 pe-0">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <span class="avatar avatar-rounded bg-primary svg-white mb-3">
                                        <i class="bx bx-group fs-22"></i>
                                    </span>
                                    <span class="fw-medium fs-13 text-muted pe-3 ps-1">Total Followers</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="pb-3">
                                    <span class="fs-20 fw-medium mb-0 d-flex align-items-center">13,124
                                    </span>
                                    <div class="text-muted fs-13">Increased By </div>
                                    <span class="text-success">2.62%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                </div>
                                <div id="chart-21"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body pb-0 pe-0">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <span class="avatar avatar-rounded bg-primary1 svg-white mb-3">
                                        <i class="bx bx-trending-up fs-22"></i>
                                    </span>
                                    <span class="fw-medium fs-13 text-muted pe-3 ps-1">Session Rate</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="pb-3">
                                    <span class="fs-20 fw-medium mb-0 d-flex align-items-center">11,287
                                    </span>
                                    <div class="text-muted fs-13">Increased By </div>
                                    <span class="text-success">0.56%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                </div>
                                <div id="chart-22"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body pb-0 pe-0">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <span class="avatar avatar-rounded bg-primary2 svg-white mb-3 flex-shrink-0">
                                        <i class="bx bx-dollar fs-22"></i>
                                    </span>
                                    <span class="fw-medium fs-13 text-muted pe-3 ps-1">Conversion Rate</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="pb-3">
                                    <span class="fs-20 fw-medium mb-0 d-flex align-items-center">17,658
                                    </span>
                                    <div class="text-muted fs-13">Decreased By </div>
                                    <span class="text-danger">3.76%<i class="ti ti-arrow-narrow-down fs-16"></i></span>
                                </div>
                                <div id="chart-23"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body pb-0 pe-0">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <span class="avatar avatar-rounded bg-primary3 svg-white mb-3">
                                        <i class="bx bx-like fs-22"></i>
                                    </span>
                                    <span class="fw-medium fs-13 text-muted pe-3 ps-1">Total Review</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="pb-3">
                                    <span class="fs-20 fw-medium mb-0 d-flex align-items-center">5,124
                                    </span>
                                    <div class="text-muted fs-13">Increased By </div>
                                    <span class="text-success">2.57%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                </div>
                                <div id="chart-24"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Start::row-2 -->
    <div class="row">
        <div class="col-xxl-3">
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap pb-1">
                    <div class="card-title">
                        Activity
                    </div>
                    <div class="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="analytics-timeline">
                        <ul class="list-unstyled analytics-activity mb-0">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                            <i class="ri-timer-2-line"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Avg. Session Duration</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">5.2% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">2m 35s</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary1-transparent">
                                            <i class="ri-user-add-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">New Users</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">10.3%<i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">5,621</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary2-transparent">
                                            <i class="ri-eye-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Page Views</span>
                                        <span class="fs-13 text-muted">Decreased by <span
                                                class="text-danger fw-medium ms-1"> 2.15% <i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">45,890</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary3-transparent">
                                            <i class="ri-line-chart-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Conversion Rate</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">1.5% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">4.8%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                            <i class="ri-arrow-down-s-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Bounce Rate</span>
                                        <span class="fs-13 text-muted">Decreased by <span
                                                class="text-danger fw-medium ms-1"> 3.8%<i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">32.5%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                            <i class="ri-user-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Returning Visitors</span>
                                        <span class="fs-13 text-muted">Increased by<span
                                                class="text-success fw-medium ms-1"> 7.2% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">8,932</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                            <i class="ri-money-dollar-circle-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Avg. Order Value</span>
                                        <span class="fs-13 text-muted">Decreased by<span
                                                class="text-danger fw-medium ms-1"> 2.7%<i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">$56.78</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Visitor Analytics
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary-light btn-sm"><i
                                class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Export</button>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div id="audienceMetric"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Users By Countries
                        </div>
                        <div class="">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 analytics-visitors-countries">
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/us_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">United States</span>
                                    </div>
                                    <div class="text-success ms-1">5.1%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div>
                                        <span class="text-default badge bg-light fw-medium">26,890</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/germany_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Germany</span>
                                    </div>
                                    <div class="text-success">1.3%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">12,345</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/spain_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Spain</span>
                                    </div>
                                    <div class="text-success">2.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">18,765</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/china_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">China</span>
                                    </div>
                                    <div class="text-danger">1.0%<i class="ti ti-arrow-narrow-down"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">9,874</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/mexico_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Mexico</span>
                                    </div>
                                    <div class="text-success">2.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/canada_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Canada</span>
                                    </div>
                                    <div class="text-success">2.1%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">28,976</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/argentina_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Argentina</span>
                                    </div>
                                    <div class="text-success">5.4%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/singapore_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Singapore</span>
                                    </div>
                                    <div class="text-success">0.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">16,789</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/italy_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Italy</span>
                                    </div>
                                    <div class="text-danger">0.3%<i class="ti ti-arrow-narrow-down"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div> --}}
        <div class="col-xxl-4">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <h5 class="card-title">Estate Planning Goals</h5>
                    <a href="javascript:void(0);"
                        class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/home</span>
                            <span class="ms-auto fs-14 fw-semibold">2,345 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/products/popular-category</span>
                            <span class="ms-auto fs-14 fw-semibold">1,987 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary1"
                                role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/blog/latest-article</span>
                            <span class="ms-auto fs-14 fw-semibold">1,532 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary2"
                                role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/about-us/team-page</span>
                            <span class="ms-auto fs-14 fw-semibold">1,254 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary3"
                                role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/about-us/profile</span>
                            <span class="ms-auto fs-14 fw-semibold">1,103 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary3"
                                role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/contact/support</span>
                            <span class="ms-auto fs-14 fw-semibold">985 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-2 -->


    </div>
@endsection
