{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Profil</h1>

                    </div>

                    <div class="card-body">


                        <form method="POST" enctype="multipart/form-data" action="/user/{{ $user->username }}">
                            @csrf
                            <center>

                                <div class="row mb-3 justify-content-center">
                                    <div class="col-md-6">

                                        <img id="output"
                                            @if ($user->avatar == null) src="https://ui-avatars.com/api/?name={{ $user->username }}"
                                            @else
                                            src="{{ asset('image/avatar/' . $user->avatar) }}" @endif
                                            class="rounded-circle mb-2" width="128" weight="128" style="    position: absolute;
                                                                                width: 128px;
                                                                                height: 128px;">
                                        <input
                                            style="    width: 100%;
                                                                                                                                                                                    height: 100%;
                                                                                                                                                                                    position: absolute;
                                                                                                                                                                                    opacity: 0;"
                                            id="avatar" type="file"
                                            class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                            value="{{ old('avatar') }}"
                                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        <x-avatar :object="$user" />
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </center>
                            <center>
                                <label for="avatar" class="col-form-label text-md-end justify-content-center d-flex">Ubah
                                    Profil</label>
                                @if ($user->isadmin == true)
                                    <h5>
                                        Administrator
                                    </h5>
                                @elseif($user->role == 'student' && $user->usadmin == false)
                                    <h5>
                                        Mahasiswa
                                    </h5>
                                @elseif($user->role == 'dorm' && $user->usadmin == false)
                                    <h5>
                                        Keasramaan
                                    </h5>
                                @elseif($user->role == 'dosen' && $user->usadmin == false)
                                    <h5>
                                        Dosen
                                    </h5>
                                @endif
                            </center>
                            @method('PUT')


                            {{-- Masih dummy ya ges --}}
                            <div class="row mb-3 justify-content-center">

                                <div class="col-md-6">
                                    <label for="screenshoot" class="col-form-label text-md-end">Bukti Screenshoot</label>
                                    <input id="screenshoot" type="file"
                                        class="form-control @error('screenshoot') is-invalid @enderror" name="screenshoot"
                                        value="{{ old('screenshoot') }}" autofocus>

                                    @error('schreenshoot')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <label for="idrole" class="col-form-label text-md-end">NIM/NIDN/NIP</label>
                                    <input id="idrole" type="text"
                                        class="form-control @error('idrole') is-invalid @enderror" name="idrole"
                                        @isset($user->idrole) value="{{ old('idrole') ? old('idrole') : $user->idrole }}")
                            @else
                                value="{{ old('idrole') }}" @endisset
                                        required autocomplete="idrole" autofocus disabled>

                                    @error('idrole')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                                <div class="col-md-6">
                                    <label for="fullname" class="col-form-label text-md-end">Nama Lengkap</label>
                                    <input id="fullname" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        @isset($user->fullname) value="{{ old('fullname') ? old('fullname') : $user->fullname }}")
                            @else
                                value="{{ old('fullname') }}" @endisset
                                        required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Masih dummy ya ges --}}
                            <div class="row mb-3 justify-content-center">

                                <div class="col-md-6">
                                    <label for="email" class="col-form-label text-md-end">Email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        @isset($user->email) value="{{ old('email') ? old('email') : $user->email }}")
                            @else
                                value="{{ old('email') }}" @endisset
                                        required autocomplete="email" autofocus disabled>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                                <div class="col-md-6">
                                    <label for="username" class="col-form-label text-md-end">Nama Akun</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        @isset($user->username) value="{{ old('username') ? old('username') : $user->username }}")
                            @else
                                value="{{ old('username') }}" @endisset
                                        required autocomplete="username" autofocus disabled>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"

                            @isset($user->email)
                                value="{{ old('email') ? old('email') : $user->email }}")
                            @else
                                value="{{ old('email') }}"
                            @endisset
                                required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                            {{-- <div class="row mb-3">
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
                        </div> --}}


                            <div class="row mb-0">
                                <div class="col-md-4 offset-md-4">
                                    <center>
                                        <a href="{{ $user->username }}/password" class="btn btn-primary">
                                            Ubah Kata Sandi
                                        </a>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-primary">
                                            Perbarui Profil
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
