@extends('layouts/main')
@section('title', 'helm')
@section('artikel')
    <div class="card">
        <div class="card-header">
            <a href="/helm/form-add" class="btn btn-info"><i class="bi bi-plus-lg"></i> Helm</a>
        </div>
        <div class="card-body">
            @if (session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>Type</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Poster</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hlm as $idx => $h)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $h->merk }}</td>
                            <td>{{ $h->jenis }}</td>
                            <td>{{ $h->type }}</td>
                            <td>{{ $h->warna }}</td>
                            <td>{{ $h->harga }}</td>
                            <td>
                                <img src="{{ asset('/storage/' . $h->poster) }}" alt="{{ $h->poster }}" height="80"
                                    width="80">
                            </td>
                            <td>
                                <a href="/form-edit/{{ $h->id }} " class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                                <a href="/delete/{{ $h->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
