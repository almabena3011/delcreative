@extends('layouts.main')

@section('content')
    <!-- Page Sidebar Ends-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Daftar Mahasiswa yang Mengajukan Konversi Point</h6>
                        <div class="row">
                            <div class="col-sm-10"></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Nama Akun</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($conversionlists as $conversionlist)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $conversionlist->user->fullname }}</td>
                                        <td>{{ $conversionlist->user->idrole }}</td>
                                        <td>{{ $conversionlist->user->email }}</td>
                                        <td>{{ $conversionlist->user->username }}</td>
                                        <td>
                                            @if ($conversionlist->status == false)
                                                <p>Menunggu</p>
                                            @else
                                                <p>Valid</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($conversionlist->status == false)
                                                <a href="/konversi/{{ $conversionlist->id }}/validasi" type="button"
                                                    class="btn btn-success btn-sm btn-delete mb-0">Validasi</a>
                                            @else
                                                <a type="button"
                                                    class="disabled btn btn-success btn-sm btn-delete mb-0">Validasi</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
