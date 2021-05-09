<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procurement : ระบบงานจัดซื้อจัดจ้าง</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}"/>
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style type="text/css">
        u.dotted {
            border-bottom: 2px dotted #000;
            text-decoration: none;
        }
        u.dashed {
            border-bottom: 1px dashed #000;
            text-decoration: none;
        }
    </style>

@yield('head')

<!-- App css -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@if(trim($__env->yieldContent('bodyClass')))
<body class="@yield('bodyClass')">
@else
<body>
@endif
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="{{ url('assets/media/image/logo/logo2.png') }}" alt="logo">
    <img class="dark-logo" src="{{ url('assets/media/image/logo/dark-logo.png') }}" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
{{-- <div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="{{ route('chat') }}" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div> --}}
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <form class="d-flex">
                                <button class="btn">
                                    <i class="ti-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="ค้นหา">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="ค้นหา" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="เต็มจอ" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="แจ้งเตือน" data-toggle="dropdown">
                            <span class="badge badge-danger nav-link-notify">1</span>
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">แจ้งเตือน</h6>
                                <small class="opacity-7">1 เหตุการณ์</small>
                            </div>
                            <div class="dropdown-scroll">
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <span
                                                        class="avatar-title bg-success-bright text-success rounded-circle">
                                                        <i class="ti-file"></i>
                                                    </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Your report is prepared
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item bg-primary-bright px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Apps are ready for update
                                                    <i title="" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"
                                                       data-original-title="Mark as unread"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    @guest
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                <strong>ผู้ใช้งานทั่วไป</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="list-group list-group-flush">
                                <a href="{{ route('login') }}" class="list-group-item">Login เข้าใช้งาน</a>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                <strong>{{ Auth::user()->name }}</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('assets/media/image/user/testi-2.jpg') }}"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4"
                                 data-background-image="{{ url('assets/media/image/image1.jpg') }}">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="{{ url('assets/media/image/user/testi-2.jpg') }}"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="{{ route('profile.edit', Auth::user()->id) }}" class="list-group-item">ข้อมูล</a>
                                <a href="{{ route('setting.index') }}" class="list-group-item">ตั้งค่า</a>
                                {{-- <a href="{{ route('logout') }}" class="list-group-item text-danger">ออกจากระบบ</a> --}}
                                    <a class="list-group-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href="{{ url('/') }}">
                    <img class="logo" src="{{ url('assets/media/image/logo/logo.png') }}" alt="logo">
                    <img class="dark-logo" src="{{ url('assets/media/image/logo/dark-logo.png') }}" alt="dark logo">
                    <img class="small-logo" src="{{ url('assets/media/image/logo/small-logo.png') }}" alt="small logo">
                    <img class="small-dark-logo" src="{{ url('assets/media/image/logo/small-dark-logo.png') }}" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i class="ti-close"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#dashboards">
                                <span class="menu-tab-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>หน้าหลัก</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#home">
                                <span class="menu-tab-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#reports">
                                <span class="menu-tab-icon">
                                    <i data-feather="mouse-pointer"></i>
                                </span>
                                <span>รายงาน</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#forms">
                                <span class="menu-tab-icon">
                                    <i data-feather="copy"></i>
                                </span>
                                <span>แบบฟอร์ม</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#setting">
                                <span class="menu-tab-icon">
                                    <i data-feather="database"></i>
                                </span>
                                <span>ตั้งค่า</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">หน้าหลัก</li>
                        <li>
                            <a @if(!request()->segment(1) || request()->segment(1) == 'dashboard') class="active"
                               @endif href="{{ route('dashboard') }}">
                               <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="home">
                        <li class="navigation-divider">ระบบงานจัดซื้อจัดจ้าง</li>
                        <li>
                            <a @if(request()->segment(1) == 'home') class="active"
                               @endif href="{{ route('home') }}">
                               <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'record') class="active"
                               @endif href="{{ route('record.index') }}">
                                <span class="nav-link-icon" data-feather="message-circle"></span>
                                <span>1.บันทึกขอ</span>
                                <span class="badge badge-danger">{{ $count_record }}</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'buy') class="active"
                               @endif href="{{ route('buy.index') }}">
                                <span class="nav-link-icon" data-feather="mail"></span>
                                <span>2.แบบขออนุมัติ</span>
                                <span class="badge badge-warning">{{ $count_buy }}</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'check') class="active"
                               @endif href="{{ route('check.index') }}">
                                <span class="nav-link-icon" data-feather="check-circle"></span>
                                <span>3.ตรวจรับ</span>
                                <span class="badge badge-success">15</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'report') class="active"
                               @endif href="{{ route('report') }}">
                                <span class="nav-link-icon" data-feather="file"></span>
                                <span>4.รายงานผล</span>
                                <span class="badge badge-primary">32</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'requisition') class="active"
                               @endif href="{{ route('requisition.index') }}">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>5.ใบเบิก</span>
                                <span class="badge badge-secondary">32</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="reports">
                        <li class="navigation-divider">Components</li>
                        <li>
                            <a @if(request()->segment(1) == 'gallery') class="active"
                               @endif href="{{ route('gallery') }}">
                                <span class="nav-link-icon" data-feather="image"></span>
                                <span>รายงาน</span>
                                <span class="badge badge-danger">32</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'invoice') class="active"
                               @endif href="{{ route('invoice') }}">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Basic Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'alert') class="active"
                                       @endif href="{{ route('alert') }}">Alerts</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'accordion') class="active"
                                       @endif href="{{ route('accordion') }}">Accordion</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'buttons') class="active"
                                       @endif href="{{ route('buttons') }}">Buttons</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'dropdown') class="active"
                                       @endif href="{{ route('dropdown') }}">Dropdown</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'list-group') class="active"
                                       @endif href="{{ route('list-group') }}">List Group</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'pagination') class="active"
                                       @endif href="{{ route('pagination') }}">Pagination</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'typography') class="active"
                                       @endif href="{{ route('typography') }}">Typography</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'media-object') class="active"
                                       @endif href="{{ route('media-object') }}">Media Object</a>
                                </li>
                                <li>
                                    <a @if(request()->segment(1) == 'progress') class="active"
                                       @endif href="{{ route('progress') }}">Progress</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'modal') class="active"
                                       @endif href="{{ route('modal') }}">Modal</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'spinners') class="active"
                                       @endif href="{{ route('spinners') }}">Spinners</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'navs') class="active"
                                       @endif href="{{ route('navs') }}">Navs</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'tab') class="active"
                                       @endif href="{{ route('tab') }}">Tab</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'tooltip') class="active"
                                       @endif href="{{ route('tooltip') }}">Tooltip</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'popovers') class="active"
                                       @endif href="{{ route('popovers') }}">Popovers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="square"></i>
                                </span>
                                <span>Cards</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'basic-cards') class="active"
                                       @endif href="{{ route('basic-cards') }}">Basic Cards </a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'image-cards') class="active"
                                       @endif href="{{ route('image-cards') }}">Image Cards </a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'scrollable-cards') class="active"
                                       @endif href="{{ route('scrollable-cards') }}">Scrollable Cards</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'other-cards') class="active"
                                       @endif href="{{ route('other-cards') }}">Others Cards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="grid"></i>
                                </span>
                                <span>Tables</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'basic-tables') class="active"
                                       @endif href="{{ route('basic-tables') }}">Basic Tables</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'dataTable') class="active"
                                       @endif href="{{ route('dataTable') }}">Datatable</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'responsive-tables') class="active"
                                       @endif href="{{ route('responsive-tables') }}">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'avatar') class="active"
                               @endif href="{{ route('avatar') }}">
                                <span class="nav-link-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span>Avatar</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'icons') class="active"
                               @endif href="{{ route('icons') }}">
                                <span class="nav-link-icon">
                                    <i data-feather="anchor"></i>
                                </span>
                                <span>Icons</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'colors') class="active"
                               @endif href="{{ route('colors') }}">
                                <span class="nav-link-icon">
                                    <i data-feather="droplet"></i>
                                </span>
                                <span>Colors</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'divider') class="active"
                               @endif href="{{ route('divider') }}">
                                <span class="nav-link-icon">
                                    <i data-feather="git-commit"></i>
                                </span>
                                <span>Divider</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="forms">
                        <li class="navigation-divider">Forms</li>
                        <li>
                            <a @if(request()->segment(1) == 'basic-forms') class="active"
                               @endif href="{{ route('basic-forms') }}">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Basic Forms</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'custom-forms') class="active"
                               @endif href="{{ route('custom-forms') }}">
                                <span class="nav-link-icon" data-feather="disc"></span>
                                <span>Custom Forms</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'advanced-forms') class="active"
                               @endif href="{{ route('advanced-forms') }}">
                                <span class="nav-link-icon" data-feather="framer"></span>
                                <span>Advanced Forms</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'form-validation') class="active"
                               @endif href="{{ route('form-validation') }}">
                                <span class="nav-link-icon" data-feather="toggle-left"></span>
                                <span>Form Validation</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'form-wizard') class="active"
                               @endif href="{{ route('form-wizard') }}">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Form Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'form-repeater') class="active"
                               @endif href="{{ route('form-repeater') }}">
                                <span class="nav-link-icon" data-feather="repeat"></span>
                                <span>Form Repeater</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="setting">
                        <li class="navigation-divider">ตั้งค่า</li>
                        <li>
                            @guest
                            @else
                            <a @if(request()->segment(1) == 'setting') class="active"
                                @endif href="{{ route('setting.index') }}">
                               <span class="nav-link-icon" data-feather="settings"></span>
                                <span>ตั้งค่าระบบ</span>
                            </a>
                            <a @if(request()->segment(1) == 'profile') class="active"
                                @endif href="{{ route('profile.edit', Auth::user()->id) }}">
                               <span class="nav-link-icon" data-feather="user"></span>
                                <span>ข้อมูลผู้ใช้</span>
                            </a>
                            @endguest
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'director') class="active"
                                @endif href="{{ route('director.index') }}">
                               <span class="nav-link-icon" data-feather="users"></span>
                                <span>เจ้าหน้าที่/กรรมการ</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="plugins">
                        <li class="navigation-divider">Plugins</li>
                        <li>
                            <a @if(request()->segment(1) == 'sweet-alert') class="active"
                               @endif href="{{ route('sweet-alert') }}">
                                <span class="nav-link-icon" data-feather="alert-triangle"></span>
                                <span>Sweet Alert</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'lightbox') class="active"
                               @endif href="{{ route('lightbox') }}">
                                <span class="nav-link-icon" data-feather="crop"></span>
                                <span>Lightbox</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'toast') class="active"
                               @endif href="{{ route('toast') }}">
                                <span class="nav-link-icon" data-feather="clipboard"></span>
                                <span>Toast</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'tour') class="active"
                               @endif href="{{ route('tour') }}">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Tour</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'slick-slide') class="active"
                               @endif href="{{ route('slick-slide') }}">
                                <span class="nav-link-icon" data-feather="layers"></span>
                                <span>Slick Slide</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'nestable') class="active"
                               @endif href="{{ route('nestable') }}">
                                <span class="nav-link-icon" data-feather="align-right"></span>
                                <span>Nestable</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'file-upload') class="active"
                               @endif href="{{ route('file-upload') }}">
                                <span class="nav-link-icon" data-feather="upload-cloud"></span>
                                <span>File Upload</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'datepicker') class="active"
                               @endif href="{{ route('datepicker') }}">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Datepicker</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'timepicker') class="active"
                               @endif href="{{ route('timepicker') }}">
                                <span class="nav-link-icon" data-feather="clock"></span>
                                <span>Timepicker</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'colorpicker') class="active"
                               @endif href="{{ route('colorpicker') }}">
                                <span class="nav-link-icon" data-feather="eye"></span>
                                <span>Colorpicker</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="activity"></span>
                                <span>Charts</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'apexchart') class="active"
                                       @endif href="{{ route('apexchart') }}">Apex Chart</a>
                                </li>
                                <li>
                                    <a @if(request()->segment(1) == 'justgage') class="active"
                                       @endif href="{{ route('justgage') }}">Justgage</a>
                                </li>
                                <li>
                                    <a @if(request()->segment(1) == 'peity') class="active"
                                       @endif href="{{ route('peity') }}">Peity</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span>Maps</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'google-map') class="active"
                                       @endif href="{{ route('google-map') }}">Google Map</a>
                                </li>
                                <li>
                                    <a @if(request()->segment(1) == 'vector-map') class="active"
                                       @endif href="{{ route('vector-map') }}">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="pages">
                        <li class="navigation-divider">Pages</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="users"></span>
                                <span>User Pages</span>
                            </a>
                            <ul>
                                <li>
                                    <a @if(request()->segment(1) == 'profile2') class="active"
                                       @endif href="#">Profile</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'user-list') class="active"
                                       @endif href="{{ route('user-list') }}">User List</a></li>
                                <li>
                                    <a @if(request()->segment(1) == 'user-edit') class="active"
                                       @endif href="{{ route('user-edit') }}">User Edit</a></li>
                                <li><a href="{{ route('login') }}" target="_blank">Login</a></li>
                                <li><a href="{{ route('register') }}" target="_blank">Register</a></li>
                                <li><a href="{{ route('recovery-password') }}" target="_blank">Recovery Password</a>
                                </li>
                                <li><a href="{{ route('lock-screen') }}" target="_blank">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'timeline') class="active"
                               @endif href="{{ route('timeline') }}">
                                <span class="nav-link-icon" data-feather="hash"></span>
                                <span>Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'pricing-table') class="active"
                               @endif href="{{ route('pricing-table') }}">
                                <span class="nav-link-icon" data-feather="dollar-sign"></span>
                                <span>Pricing Table</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'pricing-table-2') class="active"
                               @endif href="{{ route('pricing-table-2') }}">
                                <span class="nav-link-icon" data-feather="dollar-sign"></span>
                                <span>Pricing Table</span>
                                2</a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'search-result') class="active"
                               @endif href="{{ route('search-result') }}">
                                <span class="nav-link-icon" data-feather="search"></span>
                                <span>Search Result</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'blank-page') class="active"
                               @endif href="{{ route('blank-page') }}">
                                <span class="nav-link-icon" data-feather="layout"></span>
                                <span>Blank Page</span>

                            </a>
                        </li>
                        <li>
                            <a href="{{ route('404') }}" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>404</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('503') }}" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>503</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mean-at-work') }}" target="_blank">
                                <span class="nav-link-icon" data-feather="tool"></span>
                                <span>Mean at Work</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="other">
                        <li class="navigation-divider">Other</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="mail"></i>
                                </span>
                                <span>Email Templates</span>
                            </a>
                            <ul>
                                <li><a target="_blank" href="{{ route('email-template-basic') }}">Basic</a></li>
                                <li><a target="_blank" href="{{ route('email-template-alert') }}">Alert</a></li>
                                <li><a target="_blank" href="{{ route('email-template-billing') }}">Billing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="menu"></i>
                                </span>
                                <span>Menu Level</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2021 @foreach ($setting as $data){{ $data->s_name }}@endforeach - <a href="https://nakhonsawan.nhso.go.th/" target="_blank">NHSO3</a></div>
                <div>
                    <nav class="nav">
                        {{-- <a href="#" class="nav-link">Developed by Dr.GHOST</a> --}}
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ url('vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('assets/js/app.min.js') }}"></script>
</body>
</html>
