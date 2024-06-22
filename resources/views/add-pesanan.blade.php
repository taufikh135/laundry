@extends('templates.admin')

  @section('content')

  <div class="card mt-5">
              <h1 class="card-header">add-pesanan</h1>
              <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pesanan">Data Pesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">add-Pesanan</li>
                  </ol>
                </nav>
                <div class="container mt-5">
                    <h1>Add-Pesanan</h1>
                    <form action="/submit_form" method="post">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="namaLengkap" class="form-label">Nama Pelanggan</label>
                                <input type="text" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="Nama Pelanggan" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numberPhone" class="form-label">Nomor HP</label>
                                <input type="tel" name="numberPhone" id="numberPhone" class="form-control" placeholder="Nomor HP Pelanggan" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="expres">Expres</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="setrika">Setrika</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pilihanBarang" class="form-label">Pilihan Barang</label>
                                <select class="form-control" id="pilihanBarang" name="pilihanBarang" required>
                                    <option value="baju">Baju</option>
                                    <option value="jins">Jins</option>
                                    <option value="jass">Jass</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis" class="form-label">Jenis</label>
                                <select class="form-control" id="jenis" name="jenis" required>
                                    <option value="kiloan">Kiloan</option>
                                    <option value="satuan">Satuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-flex align-items-end">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <div class="input-group ms-2">
                                    <button type="button" onclick="kurangQty()" class="btn btn-outline-secondary">-</button>
                                    <input type="text" class="form-control text-center fw-bold" name="quantity" id="quantity" value="0" style="width: 50px;" readonly>
                                    <button type="button" onclick="tambahQty()" class="btn btn-outline-secondary">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
@endsection

@section('script')
<script>
          const quantity = document.getElementsByName('quantity')[0];
          
          function tambahQty() {
            quantity.value++
          }

          function kurangQty() {
            if (quantity.value > 0) {
              quantity.value--
            }
          }
</script> 
@endsection