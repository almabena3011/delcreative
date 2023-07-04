{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end"> Role </label>
                            <div class="col-md-6">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="role">
                                <option selected>Open this select menu</option>
                                <option value="student">Student</option>
                                <option value="dorm">Dorm</option>
                                <option value="dosen">Lecturer</option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="idrole" class="col-md-4 col-form-label text-md-end">NIM/NIDN/NIP</label>

                            <div class="col-md-6">
                                <input id="idrole" type="text" class="form-control @error('idrole') is-invalid @enderror" name="idrole" value="{{ old('idrole') }}" required autocomplete="idrole" autofocus>

                                @error('idrole')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="screenshoot" class="col-md-4 col-form-label text-md-end">Screenshoot</label>

                            <div class="col-md-6">
                                <input id="screenshoot" type="file" class="form-control @error('screenshoot') is-invalid @enderror" name="screenshoot" value="{{ old('screenshoot') }}" required autocomplete="screenshoot" autofocus>

                                @error('screenshoot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('image/icon/dc.png.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('image/icon/dc.png.png') }}" type="image/x-icon">
    <title>Daftar Akun - Del Creative</title>
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
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/fontawesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Background color-->
    <link rel="stylesheet" type="text/css" href="../assets/css/background.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/flag-icon.css.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/welcome/color-1.css') }}" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/responsive.css') }}">
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
    <section>
        <div class="container-fluid"
            style="padding:50px 0; background-image: url('{{ asset('image/background/bglogin.png') }}');">
            <div class="row">
                <div class="col-12">
                    {{-- <div class="login-card" style="margin: 40px 0;"> --}}
                        <form class="theme-form login-form" method="POST" enctype="multipart/form-data"
                            action="{{ route('register') }}">
                            @csrf
                            <h4>Buat Akun</h4>
                            <h6>Masukan detail pribadi Anda untuk membuat akun</h6>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class=""></i></span>
                                        <input id="fullname" type="text"
                                            class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                            value="{{ old('fullname') }}" autocomplete="fullname" autofocus
                                            placeholder="Nama Lengkap">
                                        @error('fullname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class=""></i></span>
                                        <select id="role" class="form-control @error('role') is-invalid @enderror" name="role">
                                            <option selected disabled>Pilih role anda</option>
                                            <option value="student">Mahasiswa</option>
                                            <option value="dorm">Keasramaan</option>
                                            <option value="dosen">Dosen</option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>NIM/NIDN/NIP</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class=""></i></span>
                                        <input id="idrole" type="text"
                                            class="form-control @error('idrole') is-invalid @enderror" name="idrole"
                                            value="{{ old('idrole') }}" autocomplete="idrole" autofocus
                                            placeholder="NIM/NIDN/NIP">
                                        @error('idrole')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Screenshoot Profile CIS</label>
                                            <input id="screenshoot" type="file"
                                                class="form-control @error('screenshoot') is-invalid @enderror"
                                                name="screenshoot" value="{{ old('screenshoot') }}"
                                                autocomplete="screenshoot" autofocus>
                                            @error('screenshoot')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <div class="input-group"><span class="input-group-text"><i
                                                        class=""></i></span>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" autocomplete="email"
                                                    placeholder="Email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Nama Akun</label>
                                            <div class="input-group"><span class="input-group-text"><i
                                                        class=""></i></span>
                                                <input id="username" type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    name="username" value="{{ old('username') }}"
                                                    autocomplete="username" autofocus placeholder="Nama Akun">
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class=""></i></span>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password" placeholder="********">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- <div class="show-hide"><span class="show">                         </span></div> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ulang kata sandi</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class=""></i></span>
                                        <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" autocomplete="new-password"
                                            placeholder="********">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- <div class="show-hide"><span class="show">
                                                       </span></div> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                </div>
                                <p>Sudah punya akun?<a class="ms-2" href="{{ route('login') }}">Masuk</a>
                                </p>
                        </form>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="{{ asset('js/login/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/welcome/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/welcome/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/welcome/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/welcome/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('js/welcome/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/welcome/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <!-- Theme js-->
    <script src="{{ asset('js/welcome/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>


</html>
