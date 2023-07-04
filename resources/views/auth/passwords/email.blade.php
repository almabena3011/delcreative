{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/feather-icon.css">
    <!-- Plugins css start-->
    {{-- <link rel="stylesheet" type="text/css" href="../css/welcome/select2.css">
    <link rel="stylesheet" type="text/css" href="../css/welcome/dropzone.css"> --}}
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/style.css">
    <link id="color" rel="stylesheet" href="../css/welcome/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../css/welcome/responsive.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background:url('../assets/images/background/bglogin.png');">
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <div class="container-fluid p-0" style="background-image: url('{{ asset('image/background/bglogin.png') }}');">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">

                        <form class="theme-form login-form" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h4>Del Creative</h4>
                            <h6>Ubah Kata Sandi</h6>
                            <h6 style="float: left; text-align: left; margin-top: -20px;">Masukkan email yang terkait
                                dengan akun Anda
                                dan kami akan mengirim email dengan instruksi ke
                                Mereset password Anda.</h6>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group"><span class="input-group-text"><i
                                            class="icon-email"></i></span>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 200px;">
                                <button class="btn btn-primary btn-block" style="width: 390px;"
                                    type="submit">Kirim</button>
                            </div>
                            <p>Belum punya akun?<a class="ms-2" href="{{ route('register') }}">Buat Akun</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/welcome/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../js/welcome/icons/feather-icon/feather.min.js"></script>
    <script src="../js/welcome/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../js/welcome/sidebar-menu.js"></script>
    <script src="../js/welcome/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../js/welcome/bootstrap/popper.min.js"></script>
    <script src="../js/welcome/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    {{-- <script src="../js/welcome/editor/ckeditor/ckeditor.js"></script>
            <script src="../js/welcome/editor/ckeditor/adapters/jquery.js"></script>
            <script src="../js/welcome/dropzone/dropzone.js"></script>
            <script src="../js/welcome/dropzone/dropzone-script.js"></script>
            <script src="../js/welcome/select2/select2.full.min.js"></script>
            <script src="../js/welcome/select2/select2-custom.js"></script>
            <script src="../js/welcome/email-app.js"></script>
            <script src="../js/welcome/form-validation-custom.js"></script> --}}
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../js/welcome/script.js"></script>
</body>


</html>
