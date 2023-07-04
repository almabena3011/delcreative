{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Forum Diskusi</p>
                        </div>
                        <div class="col-sm-10">
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h1>Ubah Pertanyaan</h1>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="card-body">
                                <form action="/forum/{{ $forum->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <x-input field="title" label="Judul" type="text" value="{{ $forum->title }}" />
                                    <x-ckeditor field="subject" label="Pertanyaan" value="{{ $forum->subject }}" />

                                    <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
