@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="/password/update" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="current_password" class="col-form-label text-md-end">Kata Sandi Lama</label>
                                    <input id="current_password" type="password"
                                                class="form-control @error('current_password') is-invalid @enderror" name="current_password"
                                                autocomplete="current_password"  placeholder="********">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="password" class="col-form-label text-md-end">Kata Sandi Baru</label>
                                    <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                autocomplete="password" placeholder="********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="col-form-label text-md-end">Konfirmasi Kata Sandi Baru</label>
                                    <input id="password_confirmation" type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                                autocomplete="new-password" placeholder="********">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    @if ($message = Session::get('success'))
                                        <p style="color: #0047FF;">{{ $message }}</p>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <p style="color: #FF3636;">{{ $message }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-0 justify-content-center">
                                <div class="col-md-4">
                                    <center>
                                        <button type="submit" class="btn btn-primary">
                                            Ubah
                                        </button>
                                    </center>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection