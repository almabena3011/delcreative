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
                        <h1>Forum Baru</h1>
                    </div>

                    <div class="card-body">
                        <form action="/forum" method="POST">
                            @csrf

                            <x-input field="title" label="Topik" type="text" />

                            <x-ckeditor field="subject" label="Pertanyaan" />

                            {{-- <x-input field="category" label="Kategori" type="text"/> --}}

                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
