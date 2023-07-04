@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="order-history table-responsive wishlist">
                            <div class="row">
                                <div class="col-2 text-end">
                                    <h7><b>Konversi point</b></h7>
                                </div>
                                <div class="col-10">
                                    <hr>
                                </div>

                            </div>

                            <br><br>
                            <div class="container d-grid gap-2 col-6 mx-auto table-responsive">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <table class="">
                                            <tr>
                                                <th style="text-align: left;">NAMA</th>
                                                <th style="text-align: left;">{{ $user->fullname }}</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left;">NIM</th>
                                                <th style="text-align: left;">{{ $user->idrole }}</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left;">Email</th>
                                                <th style="text-align: left;">{{ $user->email }}</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left;">Username</th>
                                                <th style="text-align: left;">{{ $user->username }}</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left;">Point</th>
                                                <th style="text-align: left;">{{ $user->point }}</th>
                                            </tr>
                                        </table>
                                    </div>

                                    <br>
                                    <div class="row">


                                        <p>Setiap pengkonversian satu point keasramaan<br>
                                            membutuhkan 250 point akun</p>

                                        @if ($message = Session::get('success'))
                                            <p style="color: #0047FF;">{{ $message }}</p>
                                        @endif
                                        @if ($message = Session::get('error'))
                                            <p style="color: #FF3636;">{{ $message }}</p>
                                        @endif
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a class="btn btn-outline-success btn-sm"
                                            href="/konversi/{{ $user->id }}">Konversi</a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
