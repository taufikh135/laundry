@extends('templates.admin')

@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="card mt-5 shadow">
        <h1 class="card-header">Add-pengeluaran</h1>
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/laporan-keuangan">Data pengeluaran</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add-pengeluaran</li>
                </ol>
            </nav>
    <div class="card mt-5 shadow">
        <div class="card-body">
            <!-- Form untuk tambah pengeluaran -->
            <form action="/simpan-pengeluaran" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="supplier">Supplier</label>
                    <input type="text" class="form-control" id="supplier" name="supplier" required>
                </div>
                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
            <!-- Akhir form -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
