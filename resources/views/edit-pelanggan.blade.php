@extends('templates.admin')

  @section('content')
           
        <div class="card mt-5">
    <h1 class="card-header">Edit Pelanggan</h1>
    <div class="card-body">
      <div class="col-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/pelanggan">Data Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
          </ol>
        </nav>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Edit Pelanggan</h5>
              <form action="/submit_form" method="post">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan" />
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat Lengkap</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pelanggan" />
                </div>
                <div class="mb-3">
                  <label for="no_handphone" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="No. Handphone" />
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg mt-3">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection