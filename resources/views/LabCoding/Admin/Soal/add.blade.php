{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <form action="{{ url('insert-soal') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header pb-0">
                <h5><b>Tambah Latihan</b></h5>
            </div>
            <div class="card-body add-post">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="d-block"><b>Bahasa Pemrograman<font color="ff0000">*
                                </font></b></label>
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                            id="category_id" aria-label="Default select example">
                            @foreach ($categories as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->language }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label class="d-block"><b>Latihan<font color="ff0000">*
                                </font>
                            </b></label>
                        <input class="form-control @error('exercise') is-invalid @enderror" id="exercise" type="text"
                            name="exercise" rows="3" class="form-control">
                        @error('exercise')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <label><b>Kode <font color="ff0000">*</font></b></label>
                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image"
                            class="form-control">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <label class="d-block"><b>Kunci Jawaban <font color="ff0000">*</font>
                            </b></label>
                        <input class="form-control @error('answer') is-invalid @enderror" id="answer" type="text"
                            name="answer" rows="3" class="form-control">
                        @error('answer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="btn-showcase">
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        <a href="{{ url('soal') }}" button class="btn btn-light btn-sm" type="button">Batal</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
