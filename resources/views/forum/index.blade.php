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
                <div class="card-body">
                    <div class="header">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3><b>Semua Pertanyaan</b></h3>
                            </div>
                            <div class="col-sm-6">
                                @if (Auth::user()->isadmin == false)
                                    <a href="/forum/create"><button class="btn btn"
                                            style="float: right; background-color: #3568D4;" type="button"><span
                                                style="color:white"> Buat Forum</span></button></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="body">
                        @foreach ($forums as $forum)
                            <div class="row">
                                <h5><a style="color:#7889E1 !important"
                                        href="/forum/{{ $forum->slug }}">{{ $forum->title }}</a>
                                </h5><br>
                                <a href="/forum/{{ $forum->slug }}">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($forum->subject), 100) !!}
                                </a>
                                @if (strlen(strip_tags($forum->subject)) > 100)
                                    <a href="/forum/{{ $forum->slug }}" class="">Lihat selengkapnya</a>
                                @endif
                                <br>
                                <p style="font-size: 10px;">{{ $forum->created_at->format('M j, Y') }} , dibuat oleh:
                                    {{ $forum->user->username }}</p>
                            </div>
                            <hr />
                        @endforeach
                        {{ $forums->links('vendor.pagination.costume') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
