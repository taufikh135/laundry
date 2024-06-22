@extends('templates.admin')

@section('content')
<div class="container-fluid">
    <div class="card mt-5">
        <h1 class="card-header">Edit Pesanan</h1>
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pesanan">Data Pesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Pesanan</li>
                </ol>
            </nav>
            <form action="/submit_form" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="jenis_pakaian" class="form-label">Jenis Pakaian</label>
                                            <select class="form-control" id="jenis_pakaian" name="jenis_pakaian">
                                                <option value="Baju">Baju</option>
                                                <option value="Celana">Celana</option>
                                                <option value="Jas">Jas</option>
                                                <option value="Jins">Jins</option>
                                                <option value="Sepatu">Sepatu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="harga" class="form-label">Harga</label>
                                            <select class="form-control" id="harga" name="harga" required>
                                                <option value="Satuan">Satuan</option>
                                                <option value="Kiloan">Kiloan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="jumlah_kiloan" class="form-label">Jumlah Kiloan</label>
                                            <div class="input-group">
                                                <button type="button" onclick="kurangQty('jumlah_kiloan')" class="btn btn-outline-secondary">-</button>
                                                <input type="text" class="form-control text-center fw-bold" id="jumlah_kiloan" name="jumlah_kiloan" value="0" style="width: 50px;" readonly>
                                                <button type="button" onclick="tambahQty('jumlah_kiloan')" class="btn btn-outline-secondary">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="jumlah_satuan" class="form-label">Jumlah Satuan</label>
                                            <div class="input-group">
                                                <button type="button" onclick="kurangQty('jumlah_satuan')" class="btn btn-outline-secondary">-</button>
                                                <input type="text" class="form-control text-center fw-bold" id="jumlah_satuan" name="jumlah_satuan" value="0" style="width: 50px;" readonly>
                                                <button type="button" onclick="tambahQty('jumlah_satuan')" class="btn btn-outline-secondary">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="Menunggu">Menunggu</option>
                                                <option value="Sedang Diproses">Sedang Diproses</option>
                                                <option value="Selesai">Selesai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary btn-lg mt-3">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Function to handle quantity increment and decrement
    function tambahQty(inputId) {
        var input = document.getElementById(inputId);
        input.value++;
    }

    function kurangQty(inputId) {
        var input = document.getElementById(inputId);
        if (input.value > 0) {
            input.value--;
        }
    }
</script>
@endsection
