{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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

                    <div class="card-body">
                        <h1>Ubah Jawaban</h1>
                        <form action="/comments/{{ $comment->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-ckeditor field="subject" label="Jawaban" value="{{ $comment->subject }}" />

                            <button type="submit" class="btn btn-primary">Ubah Jawaban</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
