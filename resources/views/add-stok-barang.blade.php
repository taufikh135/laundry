@extends('templates.admin')

  @section('content')

      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="card mt-5">
            <h1 class="card-header">Add-Stok Barang</h1>
            <div class="card-body"><nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/stok-barang">Data Stok-Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add-Stok Barang</li>
                </ol>
              </nav>
              <div class="form-row">
                          <div class="form-group col-md-4 mt-5">
                              <label for="nama barang" class="form-label">Nama Barang</label>
                              <input type="name" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="nama barang" />
                          </div>
                          <div class="form-group col-md-4 mt-4">
                              <label for="Jenis barang" class="form-label">Jenis barang</label>
                              <input type="name" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="jenis barang" />
                          </div>
                          <div class="mb-4 mt-4 d-flex">
                            <button type="button" onclick="kurangQty()" class="btn btn-danger">-</button>
                            <input type="text" class="p-0 text-center fw-bold" name="quantity" value="0" id="quantity" style="background-color: transparent; outline: none; border: none; width: 50px;" disabled="true">
                            <button type="button" onclick="tambahQty()" class="btn btn-primary">+</button>
                          </div>
                      </div>
                      <div class="d-grid gap-2 col-4 ">
                          <button type="submit" class="btn btn-primary btn-lg mt-5">Simpan</button>
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