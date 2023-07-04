<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="../image/icon/dc.png.png" type="image/x-icon">
      <link rel="shortcut icon" href="../assets/images/dc.png.png" type="image/x-icon">
      <title>Del Creative</title>
      <!-- Google font-->
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font Awesome-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/fontawesome.css') }}">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/icofont.css') }}">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/themify.css') }}">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/flag-icon.css.css') }}">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/feather-icon.css') }}">
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/animate.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/chartist.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/owlcarousel.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/prism.css') }}">
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/bootstrap.css') }}">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/style.css') }}">
      <link id="color" rel="stylesheet" href="{{ asset('css/welcome/color-1.css') }}" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/responsive.css') }}">
      {{-- <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/">
     --}}
  </head>
  <body>
    <!-- Loader starts-->

    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper" style="background-color: white;">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="/"><img class="img-fluid" src="{{ asset('image/welcome/logo-del-creative.png.png') }}" alt="test"></a></div>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <li  class="onhover-dropdown p-0 ikan">
                            <b><a id="#tentang" class="text-dark" onclick="scrollToBottom()" >Tentang</a></b>
                        </li>
                    @auth
                        <li class="onhover-dropdown p-0 ikan">
                            <b><a class="text-dark" style="margin-left: 10px;" href="{{ url('/dashboard') }}">Hai, {{ Auth::user()->username }} 🤗</a></b>
                        </li>
                    @else
                        <li class="onhover-dropdown p-0 ikan" style="margin-left: 10px;">
                            <b style="padding-right: 7px"><a class="text-dark" href="{{ route('login') }}">Masuk</a></b>
                            {{-- <b><a href="Register.html">| Register</a></b> --}}
                        </li>
                        <li>
                             @if (Route::has('register'))
                            <b><a class="text-dark" href="{{ route('register') }}">Daftar</a></b>
                            @endif
                        </li>

                    @endauth
                </div>
               @endif

          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Body Start -->
      <div class="page-body-wrapper horizontal-menu" style="background-color: white;">
          <div class="card" style="margin-left: px;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6" style="background: url({{ asset('image/welcome/bg_1_1.png') }});">
                  <br><br><br><br><br>
                  <h1 style="margin-top: 180px; margin-left: 50px;"><b>Del Creative</b></h1>
                  <h3 style="margin-left: 50px;"><b>Solusi Eksplorasi Anda</b></h3>
                </div>
                <div class="col-sm-6">
                <img src="{{ asset('image/welcome/_1.png') }}" style="width: 600px; height: 443px; margin-top: 110px;">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="background: url(../assets/images/bg_1_1.png);">
                  <br><br><br><br><br>
                  <h3 style="margin-left: 50px;"><b>Forum Tanya Jawab</b></h3>
                  <p style="margin-left: 50px;">Del Creative adalah forum diskusi platform dengan sistem Up and Down. Memiliki forum tanya jawab sehingga diharapkan mahasiswa, dosen, keasramaan dapat bertukar pikiran untuk terciptanya proses belajar mengajar dengan baik</p>
                </div>
                <div class="col-sm-6">
                <img src="{{ asset('image/welcome/_2.png') }}" style="width: 600px; height: 443px;">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="background: url(../assets/images/bg_1_1.png);">
                  <br><br><br><br><br>
                  <h3 style="margin-left: 50px;"><b>LABCode</b></h3>
                  <p style="margin-left: 50px;">Del Creative memiliki forum lab code dengan sistem API yang dapat menilai ketepatan siswa dalam menyelesaikan masalah kode program yang disediakan oleh aplikasi. Del Creative juga memiliki sistem papan peringkat yang akan memberi peringkat siswa yang telah mengumpulkan poin pendapatan terbanyak di antara banyak siswa yang aktif belajar di Institut Teknologi Del</p>
                </div>
                <div class="col-sm-6" style="background: url(../assets/images/bg_1_1.png);">
                <img src="{{ asset('image/welcome/bg_1 11.png') }}">
                </div>
              </div>
              <div class="row" style="margin-top: 50px;">
                <div clas="col-lg-12">
                  <hr><h3 style="text-align: center; margin-top: 50px;"><b>--- Tentang Kami ---</b></h3>
                  <p style="text-align: center; margin-top: 30px;">Aplikasi berbasis web ini bertujuan untuk mengembangkan pengetahuan dan pengalaman bagi mahasiswa, dosen, dan asrama. UI yang baik akan membuat pengguna nyaman dalam menggunakan aplikasi ini. Kami dari kelompok 2 telah merancang website ini menjadi sebuah unit yang baik dan berkualitas dalam penggunaannya di Del Institute of Technology. Harapannya adalah pengguna dapat menggunakan aplikasi ini untuk menjadi pengalaman yang baik.
                  Terima kasih</p>
                </div>
              </div>
              </div>
          </div>
              <footer class="footer" style="background: url({{ asset('image/welcome/coming_soon_bg_1.png') }}); margin-left: 0px;">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-9">
                      <h6><a href="#" style="color: white; font-weight: bold;">Institut Teknologi Del</h6></a>
                      <br><a href="#" style="color: white;">Jl. Sisingamangaraja, Sitoluama</a>
                      <br><a href="#" style="color: white;">Laguboti, Toba Samosir</a>
                      <br><a href="#" style="color: white;">Sumatera Utara, Indonesia</a>
                      <br><a href="#" style="color: white;">Kode Pos: 22381</a>
                      <br><a href="#" style="color: white;">Telp: +62 632 331234</a>
                      <br><a href="#" style="color: white;">Fax: +62 632 331116</a>
                    </div>
                    <div class="col-md-3">
                      <br><a href="{{ url('/') }}" style="color: white;">Tentang</a>
                      <br><p style="color: white; margin-top: 82px;"><b>Copyright @ 2022</b></p>
                    </div>
                  </div>
                </div>
              </footer>
          </div>
        </div>




    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function() {
          $("button").click(function() {
              $("html, body").animate({
                  scrollTop: $(
                    'html, body').get(0).scrollHeight
              }, 2000);
          });
      });
    </script>
    <script>
      function scrollToBottom() {
          window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
        }

      // setTimeout(function() { scrollToBottom(); }, 100);
    </script>
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
    <script src="{{ asset('js/welcome/chart/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('js/welcome/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('js/welcome/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('js/welcome/chart/knob/knob.min.js') }}../assets/js/"></script>
    <script src="{{ asset('js/welcome/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/welcome/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/welcome/prism/prism.min.js') }}"></script>
    <script src="{{ asset('js/welcome/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('js/welcome/counter/jquery.waypoints.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/welcome/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/welcome/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('js/welcome/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('js/welcome/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/welcome/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('js/welcome/dashboard/dashboard_2.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('js/welcome/script.js') }}"></script>

    <!-- login js-->
    <!-- Plugin used-->
    <svg id="SvgjsSvg1456" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
      <defs id="SvgjsDefs1457"></defs>
      <polyline id="SvgjsPolyline1458" points="0,0"></polyline>
      <path id="SvgjsPath1459" d="M-1 801.168L-1 801.168C-1 801.168 225.66796874999997 801.168 225.66796874999997 801.168C225.66796874999997 801.168 451.33593749999994 801.168 451.33593749999994 801.168C451.33593749999994 801.168 677.00390625 801.168 677.00390625 801.168C677.00390625 801.168 677.00390625 801.168 677.00390625 801.168 "></path>
    </svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
      <defs id="SvgjsDefs1002"></defs>
      <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
      <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
  </body>
</html>
