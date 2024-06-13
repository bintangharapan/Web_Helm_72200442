@extends('layouts/main')
@section('title', 'Ubah Password')
@section('artikel')
<div class="card-body">
    @if (session('info'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="/updateuser" method="POST">
        @csrf
        <div class="form-group">
            <label">Password Baru</label>
            <input type="password" name="password_baru" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Konfirmasi Password Baru</label>
            <input type="password" name="konfirmasi_password" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Password</button>
        </div>
    </form>
@endsection
