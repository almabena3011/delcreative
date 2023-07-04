{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Bahasa Pemrograman</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-9" style="visibility: hidden">
                    <span>Search: </span><input type="text" placeholder="">
                </div>
                {{-- <div class="col-sm-2">
                    <p align="right"><a href="{{ url('add-soal') }}" button class="btn btn-light btn-sm"
                            type="button">Add Soal</button></a></p>
                </div> --}}
                <div class="col-sm-3">
                    <p align="right"><a href="{{ url('categories') }}" button class="btn btn-outline-dark"
                            type="button">Lihat Bahasa</button></a></p>
                </div>
            </div>
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label><b>Bahasa Pemrograman</b></label>
                        <input class="form-control @error('language') is-invalid @enderror" type="text" id="language"
                            name="language" rows="3" class="form-control">
                        @error('language')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <br>
                        <label><b>Gambar</b></label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                            class="form-control">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <br>
                        <button type="submit" class="btn btn-outline-dark">Simpan</button>

                        <a href="{{ url('categories') }}" button class="btn btn-light btn-sm"
                            type="button">Batal</button></a>


                    </div>
                    <div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
