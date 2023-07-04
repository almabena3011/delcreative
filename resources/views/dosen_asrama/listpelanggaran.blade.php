@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>List Pelanggaran </h1>
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
                        <h6>Daftar Mahasiswa yang Melakukan Pelanggaran</h6>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Bukti Pelanggaran</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($reports as $report)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $report->forumcomment->user->fullname }}</td>
                                        <td>{{ $report->forumcomment->user->idrole }}</td>
                                        <td>{!! $report->forumcomment->subject !!}</td>
                                        @if ($report->status == 0)
                                            <td style="color: #24695C;">Menunggu</td>
                                        @elseif($report->status == 1)
                                            <td style="color: #24695C;">Diterima</td>
                                        @else
                                            <td style="color: #FF0000;">Ditolak</td>
                                        @endif
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
                {{ $reports->links('vendor.pagination.costume') }}

            </div>
        </div>
    </div>
@endsection
