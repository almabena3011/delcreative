{{-- @extends('LabCoding.lab.index') --}}

@extends('layouts.main')

@section('content')
    <div class="ws-black w3-center" style="padding-top:30px;padding-bottom:30px;background-color:#24695C;">
        <div class="w3-content learntocodecontent" style="max-width:1400px">
            <center>
                <h1 style="color:white;font-size: 40px;font-weight: bold;"><b>Ayo Latihan</b></h1>
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
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card box-shadow-title">
                    <div class="col-sm-4 bg-dark">
                        <b>
                            <center>
                                <h3>{{ $category->language }}</h3>
                            </center>
                        </b>
                    </div>
                    <div class="card-body row">
                        @foreach ($daftarsoal as $daf)
                            <div class="col-sm-4">
                                <a href="{{ url('view-exercise/' . $daf->id) }}">
                                    <div class="shadow-lg shadow-showcase p-25 text-center">
                                        <h5 class="m-0 f-18">Latihan {{ $daf->exercise }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
