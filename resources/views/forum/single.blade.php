{{-- @extends('layouts.app') --}}

@extends('layouts.main')

@section('content')

    <div class="container">
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
                <h2>{{ $forum->title }}</h2>
            </div>
            <div class="card-body">
                <span>Oleh: {{ $forum->user->fullname }}</span>
                <x-avatar :object="$forum->user" size="32" />
                {!! $forum->subject !!}
                @if (Auth::check())
                    @if (Auth::user()->id == $forum->user_id)
                        <div class="d-flex">
                            <a href="/forum/{{ $forum->id }}/edit" class="btn btn-primary btn-xs"
                                style="margin-right: 4px;">Ubah</a>
                            <form action="/forum/{{ $forum->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ml-1 btn-xs">Hapus</button>
                            </form>
                        </div>
                    @endif
                @endif

                @if (Auth::check())
                    @if (Auth::user()->isadmin == false && Auth::user()->role == 'student')
                        <form action="/forum/{{ $forum->id }}/comments" method="POST" class="mt-4">
                            @csrf
                            <x-ckeditor field="subject" label="Jawaban" />

                            <button type="submit" class="btn btn-primary btn-xs">Kirim Jawaban</button>
                        </form>
                    @endif
                @endif


                <h4 class="mt-5">Daftar Jawaban</h4>
                @forelse ($forum->comments as $comment)
                    <div class="media">
                        <div class="align-self-center mr-3 d-flex flex-column justify-content-center align-items-center">
                            @if (Auth::user()->isadmin == false && Auth::user()->role == 'student')
                                <i class="fa-solid fa-caret-up" id="upvote-btn-{{ $comment->id }}"
                                    @if (count(Auth::user()->upvotes->where('comment_id', $comment->id)) >= 1) style="font-size: 25px; color: #136939;"
                                @else
                                style="font-size: 25px;" @endif
                                    onclick="upvotes({{ $comment->id }})"></i>

                                <span id="total-upvotes-{{ $comment->id }}">{{ $comment->upvotes()->count() }}</span>
                                <span style="display: none;"
                                    id="total-downvotes-{{ $comment->id }}">{{ $comment->downvotes()->count() }}</span>
                                <i class="fa-solid fa-caret-down" id="downvote-btn-{{ $comment->id }}"
                                    @if (count(Auth::user()->downvotes->where('comment_id', $comment->id)) >= 1) style="font-size: 25px; color: #136939;"
                                    @else
                                    style="font-size: 25px;" @endif
                                    onclick="downvotes({{ $comment->id }})"></i>
                            @endif
                            {{-- IS SOLVED ALGORITHM --}}
                            @if ($comment->is_solved == true)
                                <i id="mark-{{ $comment->id }}" style="color: rgb(75, 238, 75)"
                                    class="mt-3 fa-solid fa-check fa-xl" style="color: rgb(75, 238, 75)"></i>
                            @endif
                            <i id="mark-{{ $comment->id }}" class=""></i>
                        </div>
                        {{-- <h4 class="align-self-center mr-3">yep</h4> --}}
                        <div class="media-body" style="padding-left: 10px">
                            <div>
                                <x-avatar :object="$comment->user" size="32" />
                                <span>{{ $comment->user->username }} </span>
                                {!! $comment->subject !!}
                            </div>
                            @if (Auth::check())
                                @if (Auth::user()->id == $comment->user_id)
                                    <div class="d-flex">
                                        <a href="/comments/{{ $comment->id }}/edit" class="btn btn-primary mb-1 btn-xs"
                                            style="margin-right: 4px;">Ubah</a>
                                        <form action="/comments/{{ $comment->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs">Hapus</button>
                                        </form>
                                    </div>
                                @else
                                    @if (count(Auth::user()->commentReports->where('comment_id', $comment->id)) != 1)
                                        @if (Auth::user()->role == 'dorm' || Auth::user()->role == 'dosen' || Auth::user()->isadmin == true)
                                            <a href="/comment/{{ $comment->id }}/report"
                                                class="btn btn-danger btn-xs">Lapor
                                                Pelanggaran</a>
                                        @endif
                                    @endif
                                    @if (Auth::user()->id == $comment->forum->user_id && $comment->is_solved != true)
                                        <button class="btn btn-warning btn-xs" onclick="mark({{ $comment->id }}, this)"
                                            id="solved-btn-{{ $comment->id }}">
                                            Tandai Jawaban
                                        </button>
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                    <hr>
                @empty
                    <p>Belom ada komentar</p>
                @endforelse

                <script>
                    function upvotes(id) {
                        el = document.getElementById('upvote-btn-' + id);
                        el2 = document.getElementById('downvote-btn-' + id);
                        let upvotesCount = document.getElementById('total-upvotes-' + id);
                        // if (parseInt(upvotesCount.innerHTML) == 1) {
                        //     console.log('udah lebih bang');
                        //     return;
                        // }
                        let currentCount = 0
                        fetch('/upvote/' + id)
                            .then(response => response.json())
                            .then(data => {
                                el.style.color = '#136939';
                                el2.style.color = '#000';
                                if (data.status == 'upvote') {
                                    currentCount = parseInt(upvotesCount.innerHTML) + 1
                                    console.log(currentCount);
                                    upvotesCount.innerHTML = currentCount

                                }
                            })
                    }

                    function downvotes(id) {
                        el = document.getElementById('downvote-btn-' + id);
                        el2 = document.getElementById('upvote-btn-' + id);
                        let upvotesCount = document.getElementById('total-upvotes-' + id);
                        let downvoteCount = document.getElementById('total-downvotes-' + id);

                        let currentCount = 0
                        fetch('/downvote/' + id)
                            .then(response => response.json())
                            .then(data => {
                                if (parseInt(upvotesCount.innerHTML) < 1) {
                                    console.log('gk boleh minus bang');
                                    el.style.color = '#136939';
                                    return;
                                } else if (data.status == 'downvote') {
                                    el.style.color = '#136939';
                                    el2.style.color = '#000';
                                    currentCount = parseInt(upvotesCount.innerHTML) - 1
                                    console.log(currentCount);
                                    upvotesCount.innerHTML = currentCount

                                }

                            })
                    }

                    function mark(id, el) {
                        el = document.getElementById('solved-btn-' + id)
                        sign = document.getElementById('mark-' + id)
                        fetch('/mark/' + id)
                            .then(response => response.json())
                            .then(data => {
                                if (data.status == 'mark') {
                                    el.innerText = 'Jawaban telah ditandai'
                                    sign.classList.add("fa-solid");
                                    sign.classList.add("fa-check");
                                    sign.classList.add("fa-xl");
                                    sign.style.color = 'rgb(75, 238, 75)';
                                    sign.stye.margin = "5px 0 0 0"
                                } else {
                                    el.innerText = 'mark'
                                    sign.classList.remove("fa-solid");
                                    sign.classList.remove("fa-check");
                                }
                            })
                    }
                </script>

            </div>
        </div>
    </div>

@endsection
