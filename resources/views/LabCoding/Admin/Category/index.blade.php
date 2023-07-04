{{-- @extends('LabCoding.Admin.index') --}}

@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Lab Code</h4>
            <hr>
        </div>
        <div class="card-body">
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Bahasa Pemrograman</th>
                        <th>Gambar</th>
                        <th scope="col">Ubah</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->language }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/' . $item->image) }}" class="w-25"
                                    alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-category/' . $item->id) }}" class="btn btn-outline-primary">Ubah</a>
                            </td>
                            <td>
                                <a href="{{ url('delete-category/' . $item->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $category->links('vendor.pagination.costume') }}
    </div>
@endsection
