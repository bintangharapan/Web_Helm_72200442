@extends('layouts/main')
@section('title', 'Form Edit Helm')
@section('artikel')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <form action="/update/{{ $hlm->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Form Merk -->
                    <div class="form-group">
                        <label> <i class="bi bi-list"></i> Merk</label>
                        <select name="merk" class="form-control" required>
                            <option value="0">>-----Pilih Merk-----<< /option>
                            <option value="AGV"     {{ ($hlm->merk == 'AGV')   ? 'selected' : '' }}>AGV</option>
                            <option value="SHOEI"   {{ ($hlm->merk == 'SHOEI') ? 'selected' : '' }}>SHOEI</option>
                            <option value="KYT"     {{ ($hlm->merk == 'KYT')   ? 'selected' : '' }}>KYT</option>
                            <option value="ARAI"    {{ ($hlm->merk == 'ARAI')  ? 'selected' : '' }}>ARAI</option>
                            <option value="RSV"     {{ ($hlm->merk == 'RSV')   ? 'selected' : '' }}>RSV</option>
                            <option value="AIROH"   {{ ($hlm->merk == 'AIROH') ? 'selected' : '' }}>AIROH</option>
                        </select>
                    </div>

                    <!-- Form Jenis -->
                    <div class="form-group">
                        <label> <i class="bi bi-list"></i> Jenis</label>
                        <select name="jenis" class="form-control">
                            <option value="0">>-----Pilih Jenis-----<< /option>
                            <option value="HalfFace"  {{ ($hlm->jenis == 'HalfFace')  ? 'selected' : '' }}>HalfFace</option>
                            <option value="FullFace"  {{ ($hlm->jenis == 'FullFace')  ? 'selected' : '' }}>FullFace</option>
                            <option value="OpenFace"  {{ ($hlm->jenis == 'OpenFace')  ? 'selected' : '' }}>OpenFace</option>
                            <option value="OffRoad"   {{ ($hlm->jenis == 'OffRoad')   ? 'selected' : '' }}>OffRoad</option>
                            <option value="Modular"   {{ ($hlm->jenis == 'Modular')   ? 'selected' : '' }}>Modular</option>
                            <option value="DualSport" {{ ($hlm->jenis == 'DualSport') ? 'selected' : '' }}>DualSport</option>
                        </select>
                    </div>

                    <!-- Form Type -->
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" value="{{ $hlm->type }}" required>
                    </div>

                    <!-- Form Warna -->
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $hlm->warna }}" required>
                    </div>

                    <!-- Form Harga -->
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $hlm->harga }}" required>
                    </div>

                    <!-- Form Poster -->
                    <div class="form-group">
                        <label> <i class="bi bi-file-earmark"></i>Poster</label>
                        <input type="file" accept="imgae/*" name="poster" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <img src="{{ asset('/storage/' . $hlm->poster) }}" alt="{{ $hlm->poster }}" height="80" width="80">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
