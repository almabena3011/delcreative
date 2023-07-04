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
                    <div class="card-body row">
                        @foreach ($category as $cate)
                            <div class="col-sm-6 col-md-4">
                                <div>
                                    <a href="{{ url('view-language/' . $cate->language) }}">
                                        <div class="shadow-lg p-25 l-75 shadow-showcase text-center ">
                                            <img src="{{ asset('assets/uploads/category/' . $cate->image) }}"
                                                alt="Category Image" class="img-90 ">
                                        </div>
                                        <center>
                                            <p><b>{{ $cate->language }}</p></b>
                                        </center>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
