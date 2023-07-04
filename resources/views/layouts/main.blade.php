{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/welcome/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/welcome/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/welcome/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/welcome/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-primary">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">Admin Lab Coding</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('categories') }}">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('add-categories') }}">Add Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('soal') }}">Soal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('add-soal') }}">Add Soal</a>
                        </li>
                </div>
            </div>
        </nav>
        <div>
            @yield('home')
            @yield('content')
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="../image/icon/dc.png.png" type="image/x-icon">
    <link rel="shortcut icon" href="../image/welcome/dc.png.png" type="image/x-icon">
    <title>Del Creative</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/themify.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/feather-icon.css') }}">


    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/welcome/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/responsive.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="/dashboard"><img class="img-fluid"
                                src="../image/welcome/logo-del-creative.png.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        {{-- <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i><span
                                    class="dot-animated"></span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <p>New account needs to be validated</p>
                                    <p class="f-w-700 mb-0"><button>View<span
                                                class="pull-right badge badge-primary badge-pill"></span></button></p>

                            </ul>
                        </li> --}}
                        <li class="onhover-dropdown p-0">

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 5px"></i>Keluar
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf </form>

                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a href="{{ \Request::url() . '/../../../@' . Auth::user()->username }}" class="setting-primary"
                        href="javascript:void(0)"><i data-feather="settings"></i></a>
                    <x-avatar :object="Auth::user()" size="128" />
                    @if (Auth::user()->isadmin)
                        <h3 class="mt-3 f-14 f-w-600">{{ Auth::user()->fullname }}</h6>
                        @else
                            <h6 class="mt-3 f-14 f-w-600">
                                {{ Auth::user()->idrole }}/{{ Auth::user()->fullname }}
                            </h6>
                            @if (Auth::user()->role == 'student')
                                <ul>
                                    <li>
                                        <span>
                                            <span class="counter">{{ Auth::user()->point }}</span>
                                            pt
                                        </span>
                                    </li>
                                </ul>
                            @endif
                    @endif
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                @if (Auth::user()->isverify == true)
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6>Fitur </h6>
                                        </div>
                                    </li>
                                    @if (Auth::user()->isadmin == true)
                                        <li class="dropdown "><a class="nav-link menu-title link-nav"
                                                href="../soal"><svg aria-hidden="true" weidth="24" height="24"
                                                    viewBox="0 0 16 16" version="1.1" width="16"
                                                    data-view-component="true"
                                                    class="octicon octicon-code UnderlineNav-octicon d-none d-sm-inline">
                                                    <path fill-rule="evenodd"
                                                        d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                                                    </path>
                                                </svg><span>Lab Code</span></a>
                                        </li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../admin/listpelanggaran"><i data-feather="file"></i><span>List
                                                    Pelanggaran</span></a>
                                        </li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../leaderboard"><i
                                                    data-feather="briefcase"></i><span>LeaderBoard</span></a>
                                        </li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../forum"><i data-feather="list"></i><span>Forum
                                                    Diskusi</span></a>
                                        </li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="{{ route('administrator.listakun') }}"><i
                                                    data-feather="layers"></i></i><span>Daftar Akun</span></a>
                                        </li>
                                    @elseif(Auth::user()->role == 'student')
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../../lab"><svg aria-hidden="true" weidth="24" height="24"
                                                    viewBox="0 0 16 16" version="1.1" width="16"
                                                    data-view-component="true"
                                                    class="octicon octicon-code UnderlineNav-octicon d-none d-sm-inline">
                                                    <path fill-rule="evenodd"
                                                        d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                                                    </path>
                                                </svg><span>Lab Code</span></a></li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../../forum"><i data-feather="list"></i><span>Forum
                                                    Diskusi</span></a></li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../../konversi"><i data-feather="package"></i><span>Konversi
                                                    Point</span></a>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../../leaderboard"><i
                                                    data-feather="briefcase"></i><span>LeaderBoard</span></a>
                                            {{-- <li class="sidebar-main-title">
                                            <div>
                                                <h6>Ask</h6>
                                            </div>
                                        </li> --}}
                                        @else
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="/forum"><i data-feather="list"></i><span>Forum
                                                    Diskusi</span></a>
                                        </li>
                                        <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                href="../listpelanggaran"><i data-feather="file"></i><span>List
                                                    Pelanggaran</span></a>
                                        </li>
                                        @if (Auth::user()->role == 'dorm')
                                            <li class="dropdown"><a class="nav-link menu-title link-nav"
                                                    href="../asrama/konversi"><i
                                                        data-feather="package"></i><span>Konversi
                                                        Point</span></a>
                                            </li>
                                        @endif

                                    @endif
                                @endif

                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body" style="background-repeat: no-repeat;">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- Bookmark Start-->
                                <div class="bookmark">
                                    <ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid starts-->
                    <div>
                        {{-- @if (Auth::user()->isverify == false)
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8 ">
                                    <div class="card m-5">
                                        <div class="card-body" style="background-color: #fff;">
                                            <p class="text-center font-weight-bolder">
                                                Belum divalidasi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @if (Auth::user()->isverify == false)
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8 ">
                                    <div class="card m-5">
                                        <div class="card-body"
                                            style="background-color: #fff; box-shadow: 2px 2px #bebebe;">
                                            <p class="text-center font-weight-bolder">
                                                @if (\Auth::user()->isrejected == false)
                                                    Belum divalidasi
                                                @elseif(\Auth::user()->isrejected == true)
                                                    Validasi ditolak, ganti bukti screenshot yg relevan
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @yield('home')
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer class="footer"
                style="background: url({{ asset('image/welcome/coming_soon_bg_1.png') }});">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <h6><a href="#" style="color: white; font-weight: bold;">Institut Teknologi Del</h6>
                            </a>
                            <br><a href="#" style="color: white;">Jl. Sisingamangaraja, Sitoluama</a>
                            <br><a href="#" style="color: white;">Laguboti, Toba Samosir</a>
                            <br><a href="#" style="color: white;">Sumatera Utara, Indonesia</a>
                            <br><a href="#" style="color: white;">Kode Pos: 22381</a>
                            <br><a href="#" style="color: white;">Telp: +62 632 331234</a>
                            <br><a href="#" style="color: white;">Fax: +62 632 331116</a>
                        </div>
                        <div class="col-md-3">
                            <br><a href="{{ url('/') }}" style="color: white;">Tentang</a>
                            <br>
                            <p style="color: white; margin-top: 82px;"><b>Copyright @ 2022</b></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/welcome/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/welcome/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/welcome/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/welcome/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/welcome/config.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('js/welcome/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/welcome/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/welcome/script.js') }}"></script>

</body>
</body>


</html>
