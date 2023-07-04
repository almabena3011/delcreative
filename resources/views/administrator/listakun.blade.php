@extends('layouts.main')

@section('content')
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
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1><b>Daftar Akun</b></h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if ($users->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">NIM/NIDN/NIP</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Data Cis</th>
                                        <th scope="col">Validasi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center; align-items: center;">

                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach ($users as $user)
                                        <tr>
                                            <td scope="row"> {{ $i++ }} </td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>{{ $user->idrole }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><img width="110px"
                                                    src="{{ asset('image/buktiss/' . $user->screenshoot) }}" alt="Pic">
                                            </td>
                                            <td>
                                                <form action="{{ route('administrator.make-verify', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-light btn-xs">Verifikasi</button>
                                                </form>
                                            </td>

                                            <td>
                                                <form action="{{ route('administrator.reject', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-xs">Tolak</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3 class="text-center"> Tidak ada akun yang harus diverifikasi</h3>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
