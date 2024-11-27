<!-- Start::main-sidebar -->

<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.php.html" class="header-logo">
            <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
            <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="/" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Estate Planning & Management</span></li>
                <!-- End::slide__category -->

                <li class="slide">
                    <a href="{{ route('account.summary') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">Account Summary</span>
                    </a>
                </li>
                
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ti ti-file-barcode"></i>
                        <span class="side-menu__label"> Will</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Will</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('will.create') }}" class="side-menu__item">Create</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('will.manage') }}" class="side-menu__item">Manage</a>
                        </li>
                        {{-- <li class="slide">
                            <a href="sweet-alerts.php.html" class="side-menu__item">Goals Setup</a>
                        </li> --}}
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Beneficiaries
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.php.html" class="side-menu__item">Add </a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.php.html" class="side-menu__item">Manage</a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <span class="side-menu__label">Trust</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Trust</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('will.create') }}" class="side-menu__item">Create</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('will.manage') }}" class="side-menu__item">Manage</a>
                        </li>
                        {{-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Beneficiaries
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.php.html" class="side-menu__item">Add </a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.php.html" class="side-menu__item">Manage</a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                        </svg>
                        <span class="side-menu__label">Beneficiaries</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Beneficiaries</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('beneficiary.add') }}" class="side-menu__item">Add</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Manage
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Trust</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Will</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Insurance Management</span></li>
                <!-- End::slide__category -->

                <li class="slide">
                    <a href="{{ url('insurance-management/account-summary') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">Account and Policy Summary</span>
                    </a>
                </li>
                
                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ url('insurance-management/account-summary') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">Needs and Gap Analysis</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <span class="side-menu__label">Policies</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Policy</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('insurance-management/trust/create') }}" class="side-menu__item">Add</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('insurance-management/trust/manage') }}" class="side-menu__item">Manage</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Payments
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.php.html" class="side-menu__item">Purchase </a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.php.html" class="side-menu__item">Renewal</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                        </svg>
                        <span class="side-menu__label">Beneficiaries</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Beneficiaries</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('beneficiary.add') }}" class="side-menu__item">Add</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Manage
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Trust</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Will</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <li class="slide__category"><span class="category-name"><hr></span></li>

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-database-line side-menu__angle"></i>
                        <span class="side-menu__label">Document Management</span>
                    </a>
                    <ul class="slide-menu child2">
                        <li class="slide">
                            <a href="{{ url('insurance-management/trust/manage') }}" class="side-menu__item">Secure Valut Storage</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('insurance-management/trust/manage') }}" class="side-menu__item">Manage</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="icons.php.html" class="side-menu__item">
                        <i class="ri-profile-line"></i>
                        <span class="side-menu__label"> Profile</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="icons.php.html" class="side-menu__item">
                        <i class="ri-logout-box-r-line"></i>
                        <span class="side-menu__label"> Logout</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Tables & Charts</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        <span class="side-menu__label">Charts</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Charts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="apex-line-charts.php.html" class="side-menu__item">Line Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-area-charts.php.html" class="side-menu__item">Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-column-charts.php.html" class="side-menu__item">Column Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bar-charts.php.html" class="side-menu__item">Bar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-mixed-charts.php.html" class="side-menu__item">Mixed Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-rangearea-charts.php.html" class="side-menu__item">Range Area
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-timeline-charts.php.html" class="side-menu__item">Timeline
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-funnel-charts.php.html" class="side-menu__item">Funnel Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-candlestick-charts.php.html" class="side-menu__item">CandleStick
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-boxplot-charts.php.html" class="side-menu__item">Boxplot Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bubble-charts.php.html" class="side-menu__item">Bubble Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-scatter-charts.php.html" class="side-menu__item">Scatter Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-heatmap-charts.php.html" class="side-menu__item">Heatmap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-treemap-charts.php.html" class="side-menu__item">Treemap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-pie-charts.php.html" class="side-menu__item">Pie Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radialbar-charts.php.html" class="side-menu__item">Radialbar
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radar-charts.php.html" class="side-menu__item">Radar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-polararea-charts.php.html" class="side-menu__item">Polararea
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-slope-charts.php.html" class="side-menu__item">Slope Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chartjs-charts.php.html" class="side-menu__item">Chartjs Charts</a>
                        </li>
                        <li class="slide">
                            <a href="echarts.php.html" class="side-menu__item">Echart Charts</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                        </svg>
                        <span class="side-menu__label">Tables</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="tables.php.html" class="side-menu__item">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="grid-tables.php.html" class="side-menu__item">Grid JS Tables</a>
                        </li>
                        <li class="slide">
                            <a href="data-tables.php.html" class="side-menu__item">Data Tables</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::main-sidebar -->
