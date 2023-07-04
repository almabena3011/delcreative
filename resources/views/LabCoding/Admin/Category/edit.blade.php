{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Ubah Bahasa Pemrograman</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Bahasa Pemrograman</label>
                        <input type="text" value="{{ $category->language }}" id="language"
                            class="form-control @error('language') is-invalid @enderror" name="language">
                        @error('language')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="">Gambar</label>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" class="w-25"
                            alt="category-image">
                    @endif
                    <div class="col-md-12">
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
