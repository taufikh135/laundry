@extends('templates.admin')

  @section('content')

  <div class="card mt-5">
        <h1 class="card-header font-weight-bold">Add Pelanggan</h1>
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pelanggan">Data Pelanggan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Pelanggan</li>
                </ol>
            </nav>
            
<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="namaLengkap">Nama:</label>
                <input type="text" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="Nama Pelanggan">
            </div>
            <div class="form-group col-md-6">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap">
            </div>
        </div>

        <div class="form-group mb-4">
            <label for="coinInput">Coin:</label>
            <input type="text" class="form-control" id="coinInput" name="coin" readonly value="-">
        </div>

        <div class="form-group mb-4">
            <label for="potonganHarga">Potongan Harga:</label>
            <input type="text" class="form-control" id="potonganHarga" name="potonganHarga" readonly value="-">
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="hargaAsli">Harga Asli:</label>
                <input type="text" name="hargaAsli" id="hargaAsli" class="form-control" placeholder="Harga Asli">
            </div>
            <div class="form-group col-md-6 mb-4">
                <label for="totalHarga">Total Harga:</label>
                <input type="text" name="totalHarga" id="totalHarga" class="form-control" placeholder="Total Harga">
            </div>
        </div>

        <div class="d-grid gap-2">
            <a href="/pelanggan" class="btn btn-primary" type="button">Simpan</a>
        </div>
    </div>
</div>
@endsection
