@extends('layouts/main')
@section('title', 'Form Add Helm')
@section('artikel')
    <div class="card">
        <div class="card-header">
        <div class="card-body">
            <form action="/save" method="POST" enctype="multipart/form-data">
                @csrf
               <!-- Form Merk -->
               <div class="form-group">
                <label> <i class="bi bi-list"></i> Merk</label>
                <select name="merk" class="form-control">
                    <option value="0">>-----Pilih Merk-----<</option>
                    <option value="AGV">AGV</option>
                    <option value="SHOEI">SHOEI</option>
                    <option value="KYT">KYT</option>
                    <option value="ARAI">ARAI</option>
                    <option value="RSV">RSV</option>
                    <option value="AIROH">AIROH</option>
                </select>
            </div>
            
                <!-- Form Jenis -->
                <div class="form-group">
                    <label> <i class="bi bi-list"></i> Jenis</label>
                    <select name="jenis" class="form-control">
                        <option value="0">>-----Pilih Jenis-----<</option>
                        <option value="HalfFace">HalfFace</option>
                        <option value="FullFace">FullFace</option>
                        <option value="OpenFace">OpenFace</option>
                        <option value="OffRoad">OffRoad</option>
                        <option value="Modular">Modular</option>
                        <option value="DualSport">DualSport</option>
                    </select>
                </div>

                 <!-- Form Type -->
                 <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type" class="form-control"  required>
                </div>

                 <!-- Form Warna -->
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control"  required>
                </div>

                <!-- Form Harga -->
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control"  required>
                </div>

               <!-- Form Poster -->
                <div class="form-group">
                    <label> <i class="bi bi-file-earmark"></i>Poster</label>
                    <input type="file" accept="imgae/*" name="poster" class="form-control"  required> 
                </div>

                <div class="form-group">
                   <button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
