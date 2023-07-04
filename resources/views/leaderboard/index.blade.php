@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Leaderboard </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <ul>
                                    <li>
                                        <form action="/leaderboard/search" method="GET">
                                            <input class="form-control" type="text" placeholder="Search here..."
                                                id="search" name="query">
                                        </form>
                                        @if ($students->count() == 0)
                                            <p style="color: red;">Kata kunci yang anda cari tidak tersedia</p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ $student->idrole }}</td>
                                        <td>{{ $student->point }}pt</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {{ $students->links('vendor.pagination.costume') }}
            </div>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $('#search').on('keyup', function() {
            search();
        });
        search();

        function search() {
            var keyword = $('#search').val();
            $.post('{{ route('student.search') }}', {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    keyword: keyword
                },

                function(data) {
                    table_post_row(data);
                    console.log(data);
                });
        }

        function table_post_row(res) {
            let htmlView = '';
            if (res.students.length <= 0) {
                htmlView += `<tr>
                        <td colspan="4"> Kata kunci yang anda cari tidak tersedia. </td>
                    </tr>`;
            }

            for (let i = 0; i < res.students.length; i++) {
                htmlView += `<tr>
                        <td>` + (i + 1) + `</td>
                        <td>` + res.students[i].fullname + `</td>
                        <td>` + res.students[i].idrole + `</td>
                        <td>` + res.students[i].point + `</td>
                    </tr>`;
            }
            $('tbody').html(htmlView);
        }
    </script> --}}
@endsection
