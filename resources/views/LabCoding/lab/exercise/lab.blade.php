{{-- @extends('LabCoding.lab.index') --}}

@extends('layouts.main')

@section('content')
    {{-- <h2>Exercise {{ $soal->exercise }}:</h2>
    <div>
        <img src="{{ asset('assets/uploads/soal/' . $soal->image) }}" class="w-25" alt="Category Image">
    </div>
    <br>
    <div class="row">
        <div class="col" id="answer" style="visibility: visible;">
            <label>Your Answer : </label>
            <input type="text" class="editablesection">
        </div>
    </div>
    <br>
    <br>
    <div id="showans" onclick="" style="visibility:hidden">
        <label>Answer : <b>{{ $soal->answer }}</b></label>
    </div>
    <br>
    <br>
    <div id="answerbuttoncontainer">
        <button id="submitbutton" onclick="Correct();" style="visibility: visible;" type="button">Submit
            Answer</button>
        <button id="tryAgain" onclick="changeVisibilityTry();" style="visibility: hidden;" type="button">Try
            Again</button>
        <button id="showAnswer" type="button" onclick="changeVisibility();" style="visibility: visible;">Show
            Answer</button>
        <button id="hideanswerbutton" type="button" style="visibility: hidden;" onclick="changeVisibilityHide()">Hide
            Answer</button>
        {{-- <button style="visibility: visible;" type="button">Hint</button> --}}
    {{-- </div>
    {{-- <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button" href="{{ url('category') }}">Prev</button>
        <button class="btn btn-primary" type="button" href="{{ url('category') }}">Next</button>
    </div> --}}
    {{-- <div id="assignmentCorrect" onclick="" style="visibility: hidden;">
        <h2>Correct!</h2> --}}
    {{-- <span style="cursor:pointer" id="correctnextbtn">Next ❯</span> --}}
    {{-- </div> --}}
    {{-- <div id="assignmentNotCorrect" onclick="closeNotCorrect(event)" style="display:none">
        <h2>Not Correct</h2>
        <p>Click <u>here</u> to try again.</p>
    </div> --}}
    {{-- <script>
        function Correct() {
            document.getElementById("assignmentCorrect").style.visibility = "visible";
            // document.getElementById("hideanswerbutton").style.visibility = "visible";
            // document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibility() {
            document.getElementById("showAnswer").style.visibility = "hidden";
            document.getElementById("showans").style.visibility = "visible";
            document.getElementById("answer").style.visibility = "hidden";
            document.getElementById("hideanswerbutton").style.visibility = "visible";
            document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibilityHide() {
            document.getElementById("showAnswer").style.visibility = "visible";
            document.getElementById("showans").style.visibility = "hidden";
            document.getElementById("answer").style.visibility = "visible";
            document.getElementById("hideanswerbutton").style.visibility = "hidden";
            document.getElementById("submitbutton").style.visibility = "visible";
        }

        function changeVisibilityAnswer() {
            document.getElementById("submitbutton").style.visibility = "hidden";
            document.getElementById("tryAgain").style.visibility = "visible";
            document.getElementById("showAnswer").style.visibility = "hidden";
        }

        function changeVisibilityTry() {
            document.getElementById("submitbutton").style.visibility = "visible";
            document.getElementById("tryAgain").style.visibility = "hidden";
            document.getElementById("showAnswer").style.visibility = "visible";
        }
    </script>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    <div class="ws-black w3-center" style="padding-top:30px;padding-bottom:30px;background-color:#24695C;">
        <div class="w3-content learntocodecontent" style="max-width:1400px">
            <center>
                <h1 style="color:white;font-size: 40px;font-weight: bold;"><b>Latihan {{ $soal->exercise }}</b></h1>
            </center>
        </div>
    </div>
    <script>
        (
            function setThemeMode() {
                var x = localStorage.getItem("preferredmode");
                var y = localStorage.getItem("preferredpagemode");
                if (x == "dark") {
                    document.body.className += " darktheme";
                    document.getElementById("radio_darkcode").checked = true;

                }
                if (y == "dark") {
                    document.body.className += " darkpagetheme";
                    document.getElementById("wavepath").style.fill = "rgb(13,23,33)";
                    document.getElementById("radio_darkpage").checked = true;

                }
            })();

        function changeVisibility() {
            document.getElementById("showAnswer").style.visibility = "hidden";
            document.getElementById("showans").style.visibility = "visible";
            document.getElementById("answer").style.visibility = "hidden";
            document.getElementById("hideanswerbutton").style.visibility = "visible";
            document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibilityHide() {
            document.getElementById("showAnswer").style.visibility = "visible";
            document.getElementById("showans").style.visibility = "hidden";
            document.getElementById("answer").style.visibility = "visible";
            document.getElementById("hideanswerbutton").style.visibility = "hidden";
            document.getElementById("submitbutton").style.visibility = "visible";
        }
    </script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card box-shadow-title">
                <form method="POST" action="/jawab">
                    @csrf
                    <div class="card-body row">
                        <img style="height: 350x; width: 630px;" src="{{ asset('assets/uploads/soal/' . $soal->image) }}">
                        <div class="row"></div>
                        <br>
                        <div class="form-group row mb-sm-3" style="font-size: 16px;">
                            <label for="usr" class="col-sm-2 col-form-label">Jawabanmu </label>
                            <div class="col-sm-3">
                                <input name="jawaban" type="text" class="form-control" id="usr">
                                <input name="id_soal" hidden type="text" class="form-control" value="{{ $soal->id }}">
                            </div>
                        </div>
                    </div>
                    <div class="btn-showcase">
                        <button class="btn btn-pill btn-primary btn-lg" id="showAnswer" type="button"
                            onclick="changeVisibility();" style="visibility: visible;">Tampilkan
                            Jawaban</button>
                        <label class="text-end" style="float: right;"><button class="btn btn-pill btn-primary btn-lg"
                                type="submit">Kirim
                                Jawaban</button></label>
                    </div>

                    <div id="showans" onclick="" style="visibility:hidden">
                        <label>Jawaban : <b>{{ $soal->answer }}</b></label>
                    </div>
                    <div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                Hasil : Benar!
                            </div>
                        @endif
                        @if (session('false'))
                            <div class="alert alert-danger" role="alert">
                                Hasil : Salah!
                            </div>
                        @endif
                    </div>

                    <div class="card-body row"></div>
                    <div class="btn-showcase">
                        {{-- <a href={{ url('view-language/' . $soal->category->language) }}><button
                                class="btn btn-pill btn-primary btn-lg" type="button">Tutup</button></a> --}}


                        <label class="text-end" style="float: right;">
                            @if ($next)
                                <a href="{{ url('view-exercise/' . $next) }}"><button
                                        class="btn btn-pill btn-primary btn-lg" type="button">Selanjutnya</button></a>
                            @endif
                        </label>


                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
