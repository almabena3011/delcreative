@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3><b>Lab Code</b></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6" style="visibility: hidden">
                            <span>Search: </span><input type="text" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <p align="right"><a href="{{ url('add-categories') }}" button class="btn btn-light btn-sm"
                                    type="button">Tambah Bahasa</button></a></p>
                        </div>
                        <div class="col-sm-3">
                            <p align="right"><a href="{{ url('add-soal') }}" button class="btn btn-light btn-sm"
                                    type="button">Tambah Latihan</button></a></p>
                        </div>
                    </div>

                    <div class="table-responsive" style="margin-top: 10px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Bahasa Pemrograman</th>
                                    <th scope="col">Latihan</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Kunci Jawaban</th>
                                    <th scope="col">Ubah</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soal as $item)
                                    <tr>
                                        <td>{{ $item->category->language }}</td>
                                        <td>{{ $item->exercise }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/soal/' . $item->image) }}"
                                                class="w-25" alt="Image here">
                                        </td>
                                        <td>{{ $item->answer }}</td>
                                        <td align="center">
                                            <a href="{{ url('edit-soal/' . $item->id) }}"><button
                                                    class="btn btn-outline-primary" type="button">Ubah</button></a>
                                        </td>
                                        <td align="center"><a href="{{ url('delete-soal/' . $item->id) }}"><button
                                                    class="btn btn-danger" type="button">Hapus</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $soal->links('vendor.pagination.costume') }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
